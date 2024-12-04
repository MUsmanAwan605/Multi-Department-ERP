<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hiring;

class HrhiringController extends Controller
{
    public function index()
    {
        $hirings=hiring::orderby('id', 'desc')->paginate(5);
        return view('hr.hiring.index')->with(compact('hirings'));
    }

    /**
     * Show the form fo
     * r creating a new resource.
     */
    public function create()

    {

        return view('hr.hiring.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation Start //

        $this->validate(request(),[

            'FullName'=>'required|max:255',
            'Father/HusbandName'=>'required',
            'HomePhone'=>'required|digits_between:10,11|unique:hiring,h_no|max:255',
            'MobileNumber'=>'required|digits_between:10,11|unique:hiring,m_no|max:255',
            'DateOfBirth'=>'required',
            'email'=>'required | email|unique:hiring,email|max:255',
            'Region'=>'required',
            'CNICNumber'=>'required|string|regex:/[0-9]{5}-[0-9]{7}-[0-9]/|max:15|unique:hiring,cni_no|max:255',
            'Address'=>'required',
            'MarriedStatus'=>'required',
            'EmergencyContactNumber'=>'required|unique:hiring,emergency_no|max:255',
            'School/CollegeName'=>'required',
            'EducationAddress'=>'required',
            'Grade'=>'required',
            'PassingYear'=>'required |numeric|digits:4',
            'CompanyName'=>'required',
            'LastEmploymentAddress'=>'required',
            'LastEmploymentDesignation'=>'required',
            'LastYearOfEmployment'=>'required |numeric|digits:4',
            // 'cv' => 'required|image|mimes:doc,docx|max:2048', // Adjust max size as needed
        //    'cnic_copy' => 'required|image|mimes:jpeg,png,jpg|max:2048', // Adjust max size as needed
        //    'photos' => 'required|image|mimes:jpeg,png,jpg|max:2048', // Adjust max size as needed
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
            $file2->move('./uploads/hiring_cnic_copy',$filename2);
        }
        else{
            $filename2 = 'Image will be here';
        }
        if(request()->hasFile('photos')){
            $file3 = request()->file('photos');
            $filename3 = md5($file3->getClientOriginalName()).time().'.'.$file3->getClientOriginalExtension();
            $file3->move('./uploads/Hiring_Profile_img',$filename3);
        }
        else{
            $filename3 = 'Image will be here';
        }
        // Validation Start //
        // Record Add in DB //  //
        hiring::create([
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
            'cv'=>$filename,
            'cnic_copy'=>$filename2,
            'photos'=>$filename3,
            'status'=>'ACTIVE'

        ]);

        return redirect()->to('hr/hiring')->with('success', 'Employee added successfully.');
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
        $hiring=hiring::find($id);
        return view('hr.hiring.edit')->with(compact('hiring'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validation Start //
        $this->validate(request(),[

            'FullName'=>'required',
            'Father/HusbandName'=>'required',
            'HomePhone'=>'required|digits_between:10,11',
            'MobileNumber'=>'required|digits_between:10,11',
            'DateOfBirth'=>'required',
            'email'=>'required|email',
            'Region'=>'required',
            'CNICNumber'=>'required|string|regex:/[0-9]{5}-[0-9]{7}-[0-9]/|max:15',
            'Address'=>'required',
            'MarriedStatus'=>'required',
            'EmergencyContactNumber'=>'required',
            'School/CollegeName'=>'required',
            'EducationAddress'=>'required',
            'Grade'=>'required',
            'PassingYear'=>'required |numeric|digits:4',
            'CompanyName'=>'required',
            'LastEmploymentAddress'=>'required',
            'LastEmploymentDesignation'=>'required',
            'LastYearOfEmployment'=>'required |numeric|digits:4',
            // 'cv' => 'required|image|mimes:jpeg,png,jpg|max:2048', // Adjust max size as needed
            // 'cnic_copy' => 'required|image|mimes:jpeg,png,jpg|max:2048', // Adjust max size as needed
            // 'photos' => 'required|image|mimes:jpeg,png,jpg|max:2048', // Adjust max size as needed



            //


        ]);

        // Validation Close //
        //Update Hiring Start //
        $hiring=hiring::find($id);

        // Image Upload //

        if(request()->hasFile('cv')){
            $file = request()->file('cv');
            $filename = md5($file->getClientOriginalName()).time().'.'.$file->getClientOriginalExtension();
            $file->move('./uploads/cv',$filename);
        }
        else{
            $filename = $hiring->cv;
        }
        if(request()->hasFile('cnic_copy')){
            $file2 = request()->file('cnic_copy');
            $filename2 = md5($file2->getClientOriginalName()).time().'.'.$file2->getClientOriginalExtension();
            $file2->move('./uploads/hiring_cnic_copy',$filename2);
        }
        else{
            $filename2 = $hiring->cnic_copy;
        }
        if(request()->hasFile('photos')){
            $file3 = request()->file('photos');
            $filename3 = md5($file3->getClientOriginalName()).time().'.'.$file3->getClientOriginalExtension();
            $file3->move('./uploads/Hiring_Profile_img',$filename3);
        }
        else{
            $filename3 = $hiring->photos;
        }
        $hiring->update([
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
            'cv'=>$filename,
            'cnic_copy'=>$filename2,
            'photos'=>$filename3,
            'status'=>'ACTIVE'




        ]);

        return redirect()->to('hr/hiring')->with('success', 'Employee Update successfully.');

        //Update Hiring End //

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hiring=hiring::find($id);
            $hiring->delete();
            return redirect()->to('/hr/hiring')->with('success', 'Employee Delete successfully.');

    }

    public function search_hiring(Request $request)
    {
        // $query = $request->input('q');

        $searchQuery=$request->input('search');

        $records=Hiring::where(function($query) use ($searchQuery) {
        $query->where('fname','LIKE',"%{$searchQuery}%")
        ->orWhere('id','LIKE',"%{$searchQuery}%");
        })->paginate(8);

        return view('hr.hiring.view',compact('searchQuery','records'));


    }
}
