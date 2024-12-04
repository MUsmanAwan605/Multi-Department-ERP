<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Department;

class AdminHrhiringController extends Controller
{
    public function index()
    {
        $Employees=Employee::orderby('id', 'desc')->paginate(5);
        return view('admin.humanresources.Employee.index')->with(compact('Employees'));


    }

    /**
     * Show the form fo
     * r creating a new resource.
     */
    public function create()

    {
        $departments=Department::all();
        $Employee=Department::all();
        return view('admin.humanresources.Employee.add',compact('departments','Employee'));
        // return view('admin.humanresources.hiring.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation Start //
        $this->validate($request, [
            'FullName' => 'required|max:255',
            'Father/HusbandName' => 'required',
            'HomePhone' => 'required|digits_between:10,11|unique:Employee,h_no|max:255',
            'MobileNumber' => 'required|digits_between:10,11|unique:Employee,m_no|max:255',
            'DateOfBirth' => 'required|date',
            'email' => 'required|email|unique:Employee,email|max:255',
            'Region' => 'required',
            'CNICNumber' => 'required|string|regex:/[0-9]{5}-[0-9]{7}-[0-9]/|unique:Employee,cni_no|max:15',
            'Address' => 'required',
            'MarriedStatus' => 'required',
            'EmergencyContactNumber' => 'required|digits_between:10,11|unique:Employee,emergency_no|max:255',
            'School/CollegeName' => 'required',
            'EducationAddress' => 'required',
            'Grade' => 'required',
            'PassingYear' => 'required|numeric|digits:4',
            // 'CompanyName' => 'required',
            // 'LastEmploymentAddress' => 'required',
            // 'LastEmploymentDesignation' => 'required',
            // 'LastYearOfEmployment' => 'required|numeric|digits:4',
            'EmployeeName' => 'required|max:255',
            'SupervisorName' => 'required',
            'Department' => 'required|not_in:none',
            'DateofJoining' => 'required',
            'Designation' => 'required',
            // 'cv' => 'required|file|mimes:doc,docx,pdf|max:2048',
            // 'cnic_copy' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            // 'photos' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Image Uploading//
        if(request()->hasFile('cv')){
            $file = request()->file('cv');
            $filename = md5($file->getClientOriginalName()).time().'.'.$file->getClientOriginalExtension();
            $file->move('./uploads/cv',$filename);
        }
        else{
            $filename = 'Image will be here';
        }
        if(request()->hasFile('cnic_copy')){
            $file2 = request()->file('cnic_copy');
            $filename2 = md5($file2->getClientOriginalName()).time().'.'.$file2->getClientOriginalExtension();
            $file2->move('./uploads/Employee_cnic_copy',$filename2);
        }
        else{
            $filename2 = 'Image will be here';
        }
        if(request()->hasFile('photos')){
            $file3 = request()->file('photos');
            $filename3 = md5($file3->getClientOriginalName()).time().'.'.$file3->getClientOriginalExtension();
            $file3->move('./uploads/Employee_Profile_img',$filename3);
        }
        else{
            $filename3 = 'Image will be here';
        }
        // Validation Start //
       // Record Add in DB //  //
       Employee::create([
        'fname'=>$request->get('FullName'),
        'fh_name'=>$request->get('Father/HusbandName'),
        'h_no'=>$request->get('HomePhone'),
        'm_no'=>$request->get('MobileNumber'),
        'dob'=>$request->get('DateOfBirth'),
        'email'=>$request->get('email'),
        'region'=>$request->get('Region'),
        'cni_no'=>$request->get('CNICNumber'),
        'adrs'=>$request->get('Address'),
        'm_status'=>$request->get('MarriedStatus'),
        'emergency_no'=>$request->get('EmergencyContactNumber'),
        's_name'=>$request->get('School/CollegeName'),
        'l_adrs'=>$request->get('EducationAddress'),
        'grade'=>$request->get('Grade'),
        'p_year'=>$request->get('PassingYear'),
        'c_name'=>$request->get('CompanyName'),
        'adrsss'=>$request->get('LastEmploymentAddress'),
        'designations'=>$request->get('LastEmploymentDesignation'),
        'yoemloy'=>$request->get('LastYearOfEmployment'),
        'e_name'=>$request->get('EmployeeName'),
        'supervisor_name'=>$request->get('SupervisorName'),
        'department'=>$request->get('Department'),
        'doj'=>$request->get('DateofJoining'),
        'designation'=>$request->get('Designation'),
        'cv'=>$filename,
        'cnic_copy'=>$filename2,
        'photos'=>$filename3,
        'status'=>'ACTIVE'

    ]);



        return redirect()->route('admin.humanresources.employee.index')->with('success', 'Employee added successfully.');
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
        $departments=Department::all();
        $Employee=Employee::find($id);
        return view('admin.humanresources.Employee.edit')->with(compact('Employee','departments'));
        // $hiring=hiring::find($id);
        // return view('admin.humanresources.hiring.edit')->with(compact('hiring'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
          // Validation
          $Employee=Employee::find($id);
          $this->validate($request, [
            'FullName' => 'required|max:255',
            'Father/HusbandName' => 'required',
            'HomePhone' => 'required|digits_between:10,11|unique:Employee,h_no,' . $Employee->id,
            'MobileNumber' => 'required|digits_between:10,11|unique:Employee,m_no,' . $Employee->id,
            'DateOfBirth' => 'required|date',
            'email' => 'required|email|unique:Employee,email,' . $Employee->id,
            'Region' => 'required',
            'CNICNumber' => 'required|string|regex:/[0-9]{5}-[0-9]{7}-[0-9]/|unique:Employee,cni_no,' . $Employee->id,
            'Address' => 'required',
            'MarriedStatus' => 'required',
            'EmergencyContactNumber' => 'required|digits_between:10,11|unique:Employee,emergency_no,' . $Employee->id,
            'School/CollegeName' => 'required',
            'EducationAddress' => 'required',
            'Grade' => 'required',
            'PassingYear' => 'required|numeric|digits:4',
            // 'CompanyName' => 'required',
            // 'LastEmploymentAddress' => 'required',
            // 'LastEmploymentDesignation' => 'required',
            // 'LastYearOfEmployment' => 'required|numeric|digits:4',
            'EmployeeName' => 'required|max:255',
            'SupervisorName' => 'required',
            'Department' => 'required|not_in:none',
            'DateofJoining' => 'required',
            'Designation' => 'required',
            // 'cv' => 'required|file|mimes:doc,docx,pdf|max:2048',
            // 'cnic_copy' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            // 'photos' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Validation Close //
        //Update Hiring Start //

        // Image Upload //
        // Hiring Document Upload //
        if(request()->hasFile('cv')){
            $file = request()->file('cv');
            $filename = md5($file->getClientOriginalName()).time().'.'.$file->getClientOriginalExtension();
            $file->move('./uploads/cv',$filename);
        }
        else{
            $filename = $Employee->cv;
        }
        if(request()->hasFile('cnic_copy')){
            $file2 = request()->file('cnic_copy');
            $filename2 = md5($file2->getClientOriginalName()).time().'.'.$file2->getClientOriginalExtension();
            $file2->move('./uploads/Employee_cnic_copy',$filename2);
        }
        else{
            $filename2 = $Employee->cnic_copy;
        }

        if(request()->hasFile('photos')){
            $file3 = request()->file('photos');
            $filename3 = md5($file3->getClientOriginalName()).time().'.'.$file3->getClientOriginalExtension();
            $file3->move('./uploads/Employee_Profile_img',$filename3);
        }
        else{
            $filename3 = $Employee->photos;
        }
        // Hiring Document Upload //


            $Employee->update([
                'fname'=>$request->get('FullName'),
                'fh_name'=>$request->get('Father/HusbandName'),
                'h_no'=>$request->get('HomePhone'),
                'm_no'=>$request->get('MobileNumber'),
                'dob'=>$request->get('DateOfBirth'),
                'email'=>$request->get('email'),
                'region'=>$request->get('Region'),
                'cni_no'=>$request->get('CNICNumber'),
                'adrs'=>$request->get('Address'),
                'm_status'=>$request->get('MarriedStatus'),
                'emergency_no'=>$request->get('EmergencyContactNumber'),
                's_name'=>$request->get('School/CollegeName'),
                'l_adrs'=>$request->get('EducationAddress'),
                'grade'=>$request->get('Grade'),
                'p_year'=>$request->get('PassingYear'),
                'c_name'=>$request->get('CompanyName'),
                'adrsss'=>$request->get('LastEmploymentAddress'),
                'designations'=>$request->get('LastEmploymentDesignation'),
                'yoemloy'=>$request->get('LastYearOfEmployment'),
                'e_name'=>$request->get('EmployeeName'),
                'supervisor_name'=>$request->get('SupervisorName'),
                'department'=>$request->get('Department'),
                'doj'=>$request->get('DateofJoining'),
                'designation'=>$request->get('Designation'),
                'cv'=>$filename,
                'cnic_copy'=>$filename2,
                'photos'=>$filename3,
                'status'=>'ACTIVE',

        ]);

        return redirect()->route('admin.humanresources.employee.index')->with('success', 'Employee Update successfully.');

        //Update Hiring End //

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Employee=Employee::find($id);
            $Employee->delete();
            return redirect()->route('admin.humanresources.employee.index')->with('success', 'Employee Delete successfully.');

    }

    public function search_hiring(Request $request)
    {
        // $query = $request->input('q');

        $searchQuery=$request->input('search');


        $records=Employee::where(function($query) use ($searchQuery) {
        $query->where('fname','LIKE',"%{$searchQuery}%")
        ->orWhere('id','LIKE',"%{$searchQuery}%");
        })->paginate(8);

        return view('admin.humanresources.Employee.view',compact('searchQuery','records'));


    }
}
