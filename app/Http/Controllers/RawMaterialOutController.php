<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rawmaterial;
// use App\Models\Rawmaterialout;

class RawMaterialOutController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function index()
     {
         $rawmaterials=Rawmaterial::orderBy('id','DESC')->paginate(10);
         return view("store.rawmateriallout.index")->with(compact('rawmaterials'));
     }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $raws = Rawmaterial::all();
        $rawmaterials = Rawmaterial::all();

        return view('store.rawmateriallout.add', compact('rawmaterials'));
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $this->validate(request(), [
        //     'SerialNumber' => 'required',
        //     'date' => 'required|date',
        //     'Title' => 'required|not_in_none',
        //     'DescriptionOfGoods' => 'required',
        //     'DeliveryChalan' => 'required',
        //     // 'qty_in' => 'required',
        //     'QuantityOut' => 'required',
        //     // 'blc' => 'required',

        // ]);
        // $qty_in=$request->get('qty_in');


        // // $blc=$qty_in-$qty_out;
        // $Title = $request->get('Title');
        // $rawmaterials = Rawmaterial::all();
        // $quantity_in = null;

        // foreach ($rawmaterials as $rawmaterial) {
        //     if ($Title == $rawmaterial->Title) {
        //         $quantity_in = $rawmaterial->qty_in;
        //         break; // Exit loop once found
        //     }
        // }

        // if ($quantity_in === null) {
        //     // Handle the case where the raw material is not found
        //     return response()->json(['error' => 'Raw material not found.'], 404);
        // }

        // $qty_out = $request->get('QuantityOut');

        //         $blc = $quantity_in - $qty_out;

        // if ($blc < 0) {

        //     return response()->json(['error' => 'Insufficient quantity in stock.'], 400);
        // }


        Rawmaterial::create([
            // 's_no' => $request->get('SerialNumber'),
            // 'date' => $request->get('date'),
            // 'Title' => $Title,
            // 'dscp' => $request->get('DescriptionOfGoods'),
            // 'd_c' => $request->get('DeliveryChalan'),

            'qty_in' => $request->get('qty_out'),
            // 'qty_out' => ,
            // 'blc' => $blc
        ]);

        // Update the Rawmaterial quantity
        // $rawmaterial->qty_in = $blc;
        // $rawmaterial->save();

        return redirect()->to(route('raw-materialout.index'));
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
        $rawmaterial = Rawmaterial::find($id);
        return view("store.rawmaterialout.edit")->with(compact('rawmaterial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rawmaterial=Rawmaterial::find($id);
        $this->validate(request(), [
            's_no' => 'required',
            'date' => 'required|date',
            'date_out' => 'required|date',
            'dscp' => 'required',
            'd_c' => 'required',
            'qty_in' => 'required',
            'qty_out' => 'required',
            // 'blc' => 'required',

        ]);
             $qty_in=$request->get('qty_in');
             $qty_out=$request->get('qty_out');

        $blc=$qty_in-$qty_out;



        $rawmaterial->update([
        's_no'=>request()->get('s_no'),
        'dscp' =>request()->get('dscp'),
        'date' =>request()->get('date'),
        'd_c'=>request()->get('d_c'),
        'qty_in' =>request()->get('qty_in'),
        'date_out' =>request()->get('date_out'),
        'qty_out' =>request()->get('qty_out'),
        'blc'=> $blc,
        ]);
        return redirect()->to(route('raw-materialout.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rawmaterialout = Rawmaterial::find($id);
        $rawmaterialout->delete();
        return redirect()->to(route('raw-materialout.index'));
    }

    public function search(Request $request){

        $searchQuery = $request->input('search');

        $records = Rawmaterial::where(function($query) use ($searchQuery) {
            $query->where('s_no', 'LIKE', "%{$searchQuery}%")
                  ->orWhere('Title', 'LIKE', "%{$searchQuery}%");
        })->get(); // Added ->get() to execute the query and fetch results

        return view('store.rawmateriallout.view', compact('searchQuery', 'records'));
    }


    public function title(Request $request){

        $searchQuery = $request->input('Title');

        $records = Rawmaterial::where(function($query) use ($searchQuery) {
            $query->where('Title', 'LIKE', "%{$searchQuery}%");
        })->get(); // Added ->get() to execute the query and fetch results

        return view('store.rawmateriallout.view', compact('searchQuery', 'records'));
    }



}
