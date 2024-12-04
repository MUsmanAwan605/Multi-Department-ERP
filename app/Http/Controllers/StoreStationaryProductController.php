<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StoreStationaryProduct;
use App\Models\StoreStationaryCategory;

class StoreStationaryProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Stationary_Products = StoreStationaryProduct::orderBy('id','DESC')->paginate(10);
         return view("store.stationaryproduct.index")->with(compact('Stationary_Products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Products=StoreStationaryCategory::all();
        return view('store.stationaryproduct.add',compact('Products'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $this->validate(request(), [

        'Title' => 'required',
        'Quantity' => 'required',
        'Description' => 'required',
    ]);

   $title = $request->input('Title');
$qty = $request->input('Quantity');

$descp = $request->input('Description');
       $item= StoreStationaryProduct::create([
            'title' => $title,
            'quantity' => $qty,
            'descp' => $descp,
        ]);

        $total = StoreStationaryProduct::where('title', $title)->sum('quantity');
        $item->total = $total;
        $item->save();
    

    return redirect()->to(route('stock.index'));
}

    /**
     * Display the specified stationaryproduct.
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
        $Products=StoreStationaryCategory::all();
        $Stationary_Product=StoreStationaryProduct::find($id);
        return view("store.stationaryproduct.edit",compact('Stationary_Product','Products'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $this->validate(request(), [

            'Title' => 'required',
            'Quantity' => 'required',
            'Description' => 'required',
        ]);
        $Stationary_Product=StoreStationaryProduct::find($id);

    
       $title = $request->input('Title');
    $qty = $request->input('Quantity');
    
    $descp = $request->input('Description');
           $item=$Stationary_Product->update([
                'title' => $title,
                'quantity' => $qty,
                'descp' => $descp,
            ]);
    
            $total = StoreStationaryProduct::where('title', $title)->sum('quantity');
            $item->total = $total;
            $item->save();
        
    
        return redirect()->to(route('stock.index'));    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $stock = StoreStationaryProduct::find($id);
        $stock->delete();
        return redirect()->to(route('stock.index'))->with('success', 'Stationary Added successfully.');
    }

    public function searchh(Request $request)
    {
        $searchQuery=$request->input('search');


        $records=StoreStationaryProduct::where(function($query) use ($searchQuery){
                $query->where('title','LIKE',"%{$searchQuery}%")
                ->orWhere('r_n','LIKE',"%{$searchQuery}%");
                })->paginate(8);

                $totalQuantity = StoreStationaryProduct::where(function ($query) use ($searchQuery) {
                    $query->where('title', 'LIKE', "%{$searchQuery}%")
                          ->orWhere('title', 'LIKE', "%{$searchQuery}%");
                })->sum('quantity');



return view('store.stationaryproduct.view',compact('searchQuery','records','totalQuantity'));
    }
}
