<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Particular;



class ParticularController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $particulars = Particular::orderBy('id','DESC')->paginate(10);
        return view("store.stationary.particular.index")->with(compact('particulars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("store.stationary.particular.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'particular' => 'required',
            'stock' => 'required',
            'date' => 'required',

        ]);

        $prev_stock = Particular::where('particular', $request->get('particular'))
        ->orderBy('created_at', 'desc')
        ->value('stock');

        $ttl_stock = $prev_stock + $request->get('stock');

        Particular::create([
            'particular' => request()->get('particular'),
            'stock' =>$ttl_stock,
            'date' => request()->get('date'),
        ]);
        return redirect()->to(route('particular.index'))->with('success', 'Particular Added successfully.');
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
        $particular = Particular::find($id);
        return view('store/stationary/particular/edit')->with(compact('particular'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate(request(), [
            'particular' => 'required',
            'stock' => 'required',
            'date' => 'required',


        ]);
        $particular = Particular::find($id);
        $particular->update([
            'particular' => request()->get('particular'),
            'stock' => request()->get('stock'),
            'date' => request()->get('date'),
        ]);
        return redirect()->to(route('particular.index'))->with('success', 'Particular Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $particular = Particular::find($id);
        $particular->delete();
        return redirect()->to(route('particular.index'))->with('success', 'Particular Delete successfully.');
    }

    // search Records in Particular
    public function search(Request $request)
    {
        $date1 = $request->get('date1');
        $date2 = $request->get('date2');
        $particular = $request->get('particular');

        $records = Particular::whereBetween('date', [$date1, $date2])->where('particular','LIKE', ["%$particular%"])->orderBy('id', 'desc')->get();

        return view('store/stationary/particular/view',compact('records', 'date1', 'date2', 'particular'));
    }
}

