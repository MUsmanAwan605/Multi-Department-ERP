<?php

namespace App\Http\Controllers;

use App\Models\Rawbrand;
use App\Models\Rawbrandprod;
use App\Models\RawMaterialProduct;
use Illuminate\Http\Request;

class AdminRawbrandprodController extends Controller
{
    public function index()
    {

        $rawBrandsprods = Rawbrandprod::orderby('id', 'desc')->paginate(10);
        return view('admin.store.rawmaterial.index', compact('rawBrandsprods'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $rawBrands=Rawbrand::all();
       $products=RawMaterialProduct::all();
        return view('admin.store.rawmaterial.add',compact('rawBrands','products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'Product' => 'required|not_in:none',
            'date' => 'required',
            'description' => 'required',
            'qty_in' => 'required|integer',
        ]);

        $product = Rawbrandprod::where('prod', $request->get('Product'))->first();

        if ($product){
            $product->update([
                'qty_in' => $product->qty_in + $request->get('qty_in'),
                'description' => $request->get('description'),
            ]);


        } else {
            Rawbrandprod::create([
                'date' => $request->get('date'),
                'prod' => $request->get('Product'),
                'qty_in' => $request->get('qty_in'),
                'description' => $request->get('description'),
            ]);

         }

        return redirect()->to('/admin/store/rawbrandproduct')->with('success', 'Product Quantity IN Add successfully.');
    }


    public function edit(string $id)
    {
       $rawBrands=Rawbrand::all();

        $rawBrandsprod=Rawbrandprod::find($id);
        return view('admin.store.rawmaterial.edit',compact('rawBrandsprod','rawBrands'));

    }


    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'Product'=> 'required|not_in:none',
            'date' => 'required',
            'description' => 'required',
            'qty_in'=> 'required',
        ]);


        $rawBrand=Rawbrandprod::find($id);
        $rawBrand->update([
            'prod' => request()->get('Product'),
            'date' =>request()->get('date'),
            'description' =>request()->get('description'),
            'qty_in' =>request()->get('qty_in'),
        ]);
        return redirect()->to(route('adminrawmaterial.index'))->with('success', 'Product Quantity IN Added Successfully.');
    }


    public function destroy(string $id)
    {
        $rawBrandsprod = Rawbrandprod::find($id);
        $rawBrandsprod->delete();
        return redirect()->to(route('adminrawbrandprod.indexx'))->with('success', 'Product Deleted Successfully');;
    }



    public function searchh(Request $request)
{
    $searchQuery = $request->input('search');

    // Search records based on the query
    $records = Rawbrandprod::where(function ($query) use ($searchQuery) {
        $query->where('prod', 'LIKE', "%{$searchQuery}%")
              ->orWhere('date', 'LIKE', "%{$searchQuery}%");
    })->paginate(8);


    $totalQuantity = Rawbrandprod::where(function ($query) use ($searchQuery) {
        $query->where('prod', 'LIKE', "%{$searchQuery}%")
              ->orWhere('date', 'LIKE', "%{$searchQuery}%");
    })->sum('qty_in');


    return view('admin.store.rawmaterial.view', compact('searchQuery', 'records', 'totalQuantity'));
}

public function showQuantityOutForm()
{
    $products = RawMaterialProduct::all();
    return view('admin.store.rawmaterial.quantityout', compact('products'));
}

// Method to handle form submission and add data to the database
public function storeQuantityOut(Request $request)
{
    $this->validate($request, [
        'Product' => 'required|not_in:none',
        'date' => 'required',
        'description' => 'required',
        'qty_out' => 'required|integer',
    ]);

    $product = Rawbrandprod::where('prod', $request->get('Product'))->first();

    // $qty_in=$request->get('qty_in');
    // $qty_out=$request->get('qty_out');
    // $qty=$qty_in-$qty_out;
    // $blc=$qty;

    if ($product){
        $product->update([
            'qty_out' => $product->qty_out + $request->get('qty_out'),
            'description' => $request->get('description'),
        ]);


    } else {
        Rawbrandprod::create([
            'date' => $request->get('date'),
            'prod' => $request->get('Product'),
            'qty_out' => $request->get('qty_out'),
            'description' => $request->get('description'),
            // 'blc' => $blc,

        ]);

     }

     return redirect()->to(route('adminrawbrandprod.indexx'))->with('success', 'Product Deleted Successfully');
}


}
