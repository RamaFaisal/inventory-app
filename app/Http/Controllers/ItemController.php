<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\CodeCoverage\Report\Thresholds;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::with('category', 'supplier', 'admin')->get();
        return response()->json($items);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50|unique:items,name',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'supplier_id' => 'required|exists:suppliers,id',
            'created_by' => 'required|exists:admins,id',
        ]);

        $item = Item::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'category_id' => $request->category_id,
            'supplier_id' => $request->supplier_id,
            'created_by' => $request->created_by,
        ]);

        return response()->json([
            'message' => 'Item created successfully',
            'item' => $item,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function summary()
    {
        $totalStock = Item::sum('quantity');
        $totalValue = Item::select(DB::raw('SUM(price * quantity) as total_value'))->first()->total_value;
        $averagePrice = Item::avg('price');

        return response()->json([
            'total_stock' => $totalStock,
            'total_value' => $totalValue,
            'average_price' => $averagePrice,
        ]);
    }

    public function lowStock($threshold = 5)
    {
        $items = Item::where('quantity', '<', $threshold)->with(['category', 'supplier'])->get();

        return response()->json([
            'batas Bawah' => $threshold,
            'Low Stock' => $items,
        ]);
    }
}
