<?php

namespace App\Http\Controllers;

use App\Models\Finish;
use App\Models\Finishproduct;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;

class finishgodsController extends Controller
{
    public function index(request $request){
         // Retrieve all entries and calculate total quantities for each title
         $finishgoods = FacadesDB::table('finish')
         ->select('title', FacadesDB::raw('SUM(qty) as total_qty'))
         ->groupBy('title')
         ->get();

    //  return view('finish.index', compact('finishgoods'));
        // $search = $request->input('search');


        // $totalQuantity = Finish::sum('qty');

        $finishgoods=Finish::orderby('id', 'desc')->paginate(10);

         return view('production.finishgods.index')->with(compact('finishgoods'));

    }

    public function create()
    {
       $products=finishproduct::all();

        return view('production.finishgods.add')->with(compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Retrieve the request data
    $title = $request->input('title');
    $qty = $request->input('qty');
    $date = $request->input('date');
    $descp = $request->input('descp');

    // Create a new record
    $item = Finish::create([
        'title' => $title,
        'qty' => $qty,
        'date' => $date,
        'descp' => $descp
    ]);

    // Calculate the new total quantity for the title
    $totalQty = Finish::where('title', $title)->sum('qty');

    // Update the total_qty for the new record
    $item->total_qty = $totalQty;
    $item->save();

    // Return a response or redirect as needed
    // return response()->json(['success' => true, 'item' => $item]);



    // // Retrieve the request data
    // $title = $request->input('title');
    // $qty = $request->input('qty');
    // $date = $request->input('date');
    // $descp = $request->input('descp');

    // // Find an existing item with the same title
    // $item = Finish::where('title', $title)->first();

    // if ($item) {
    //     // If item exists, update the total quantity
    //     $item->qty = $qty; // Update the quantity being added
    //     $item->total_qty += $qty; // Add to the total quantity
    //     $item->date = $date; // Optionally update the date
    //     $item->descp = $descp; // Optionally update the description
    //     $item->save();
    // } else {
    //     // If item does not exist, create a new one
    //     $item = new Finish();
    //     $item->title = $title;
    //     $item->qty = $qty; // Set the quantity being added
    //     $item->total_qty = $qty; // Initialize the total quantity
    //     $item->date = $date; // Set the date
    //     $item->descp = $descp; // Set the description
    //     $item->save();
    // }
    return redirect()->to(route('finishgods.index'))->with('success', 'Brand Added successfully.');

    // Return a response or redirect as needed
    // return response()->json(['success' => true, 'item' => $item]);

}



    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        // $rawBrands=Rawbrand::all();
        $finishgood=Finish::find($id);
        return view('production.finishgods.edit')->with(compact('finishgood'));
    }

    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'Date' => 'required',
            'title' => 'required|max:255',
            'qty' => 'required',
            'descp' => 'required',
        ]);

        $finishgood=Finish::find($id);

        $finishgood->update([
            'date' => request()->get('Date'),
            'title' =>request()->get('title'),
            'qty' =>request()->get('qty'),
            'descp' =>request()->get('descp'),
        ]);
        return redirect()->to(route('finishgods.index'))->with('success', 'Brand Added successfully.');
    }

    public function destroy(string $id)
    {
        $finishgood = Finish::find($id);
        $finishgood->delete();
        return redirect()->to(route('finishgods.index'));
    }

    public function search (Request $request)
    {
        $searchQuery=$request->input('search');


        $records=Finish::where(function($query) use ($searchQuery){
                $query->where('title','LIKE',"%{$searchQuery}%")
                ->orWhere('title','LIKE',"%{$searchQuery}%");
                })->paginate(8);

                $totalQuantity = finish::where(function ($query) use ($searchQuery) {
                    $query->where('title', 'LIKE', "%{$searchQuery}%")
                          ->orWhere('title', 'LIKE', "%{$searchQuery}%");
                })->sum('qty');


return view('production.finishgods.view',compact('searchQuery','records','totalQuantity'));
    }
}
