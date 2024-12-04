<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Currentjob;
use App\Models\Department;
use App\Models\Hiring;

class HrcurrentjobController extends Controller
{
    public function index()
    {
        $hirings=Hiring::all();
        $departments=Department::all();
        $currentJobs=Currentjob::orderBy('id', 'desc')->paginate(5);
        return view('hr.currentjob.index',compact('currentJobs','departments','hirings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $hirings=Hiring::all();
        $departments=Department::all();
        return view('hr.currentjob.add',compact('departments','hirings'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[

            'EmployeeName'=>'required|not_in:none|unique:currentjob,e_name|max:255',
                        'SupervisorName'=>'required',
            'Department' => 'required|not_in:none',
            'DateofJoining'=>'required',
            'Designation'=>'required',
        ]
    );
    $e_name = $request->get('EmployeeName');
        $hirings=Hiring::all();
        foreach($hirings as $hiring){
            if($e_name == $hiring->fname){
                $e_id = $hiring->id;
            }
        };


        Currentjob::create([
            'e_id'=>$e_id,
            'e_name'=>$request->get('EmployeeName'),
            'supervisor_name'=>$request->get('SupervisorName'),
            'department'=>$request->get('Department'),
            'doj'=>$request->get('DateofJoining'),
            'designation'=>$request->get('Designation'),
        ]);
        return redirect()->to('/hr/currentjob')->with('success', 'Employee Added successfully.');;
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
        $hirings=Hiring::all();
        $departments=Department::all();
        $currentJob=Currentjob::find($id);
        return view('hr.currentjob.edit',compact('currentJob','departments','hirings'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    //     $this->validate($request,[
    //         'EmployeeName'=>'required|not_in:none',
    //         'SupervisorName'=>'required',
    //         'Department' => 'required|not_in:none',
    //         'DateofJoining'=>'required',
    //         'Designation'=>'required',
    //     ]
    // );

    $e_name = $request->get('EmployeeName');
    $hirings=Hiring::all();
    foreach($hirings as $hiring){
        if($e_name == $hiring->fname){
            $e_id = $hiring->id;
        }
    };

    $currentJob=Currentjob::find($id);

       $currentJob->update([
         'e_id'=>$e_id,
            'e_name'=>$request->get('EmployeeName'),
            'supervisor_name'=>$request->get('SupervisorName'),
            'department'=>$request->get('Department'),
            'doj'=>$request->get('DateofJoining'),
            'designation'=>$request->get('Designation'),
        ]);
        return redirect()->to('/hr/currentjob')->with('success', 'Employee Updated successfully.');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $currentJob=Currentjob::find($id);
        $currentJob->delete();
        return redirect()->to('/hr/currentjob')->with('success', 'Employee Delete successfully.');;
    }

    public function search_current(Request $request){


            $hirings=Hiring::all();
        $departments=Department::all();
            $searchQuery = $request->input('search');

$records = Currentjob::where(function ($query) use ($searchQuery) {
    $query->where('e_name', 'LIKE', "%{$searchQuery}%")
          ->orWhere('e_id', 'LIKE', "%{$searchQuery}%");
          })->paginate(8);

return view('hr.currentjob.view', compact('records', 'searchQuery','departments','hirings'));
        }
}
