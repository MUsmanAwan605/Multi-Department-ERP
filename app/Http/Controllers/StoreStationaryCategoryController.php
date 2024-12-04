<?php

namespace App\Http\Controllers;

use App\Models\StoreStationaryCategory;
// use App\Models\StoreStationaryProductController;
use Illuminate\Http\Request;

class StoreStationaryCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stationary_categories =StoreStationaryCategory::orderBy('id',)->paginate(10);
        return view("store.stationarycategory.index")->with(compact('stationary_categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('store.stationarycategory.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'Title' => 'required|unique:stationarycategory,title',
            'CompanyName' => 'required',
            'Description' => 'required',
        ]);

        Storestationarycategory::create([
            'title' => request()->get('Title'),
            'c_name' => request()->get('CompanyName'),
            'descp' => request()->get('Description'),

        ]);

       return redirect()->route('stationarycategory.store')->with('success', 'Stationary Category Created Successfully');
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
        $stationary_category=Storestationarycategory::findOrFail($id);
        return view('store.stationarycategory.edit',compact('stationary_category'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $stationary_category=Storestationarycategory::findOrFail($id);
        $this->validate($request, [
            'Title' => 'required|unique:stationarycategory,title,' . $stationary_category->id,

            'CompanyName' => 'required',
            'Description' => 'required',
        ]);

        $stationary_category->update ([
            'title' => request()->get('Title'),
            'c_name' => request()->get('CompanyName'),
            'descp' => request()->get('Description'),

        ]);

       return redirect()->route('stationarycategory.store')->with('success', 'Stationary Category Updated Successfully.');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $stationary_category = Storestationarycategory::find($id);
        $stationary_category->delete();
        return redirect()->to(route('stationarycategory.index'))->with('success', 'Stationary  Category Deleted Successfully.');
    }
    public function searchh(Request $request)
    {
        $searchQuery=$request->input('search');


        $records=Storestationarycategory::where(function($query) use ($searchQuery){
                $query->where('title','LIKE',"%{$searchQuery}%")
                ->orWhere('c_name','LIKE',"%{$searchQuery}%");
                })->paginate(8);

              return view('store.stationarycategory.view',compact('searchQuery','records'));

        }

    }

