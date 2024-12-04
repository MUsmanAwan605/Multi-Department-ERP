<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Salary;
use App\Models\Employee;
use App\Models\Department;


class AdminHrsalaryController extends Controller
{
    public function index()
    {
        $currentjobs=Employee::all();
        $salaries = Salary::orderBy('id', 'desc')->paginate(5);
    return view('admin.humanresources.salary.index')->with(compact('salaries','currentjobs'));
}
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $currentjobs=Employee::all();
        $Departments=Department::all();
        return view('admin.humanresources.salary.add',compact('currentjobs','Departments'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Validation  Start//
        $this->validate(request(),[
            'Date'=>'required',
            'SerialNumber'=>'required|numeric|unique:salary,sno',
            'EmployeeName'=>'required |not_in:none|unique:salary,name|max:255',
            'Department'=>'required|not_in:none',
            'MontlySalary'=>'required|numeric',
            'NooFDays'=>'required|numeric',
            'Nooflate'=>'required|numeric',
            'CurrentMonthSalary'=>'required|numeric',
            'OverTimeHour'=>'required|numeric',
            'OverTimeAmount'=>'required|numeric',
            'Allowance'=>'required|numeric',
            'TotalSalaryCurrentMonthBeforeDeduction'=>'required|numeric',
            'MonthlyLoneDeduction'=>'required|numeric',
            'AdvanceDeductionAmount'=>'required|numeric',
            'NetPayTotalSalary'=>'required|numeric',
        ]);
             //Validation  End//

        // $name = $request->get('EmployeeName');
        // $currentjobs=Employee::all();

        // foreach($currentjobs as $currentjob){
        //     if($name == $currentjob->e_name){
        //         $ee_id=$currentjob->e_id;
        //     }
        // };

        Salary::create([
            'date'=>$request->get('Date'),
            'sno'=>$request->get('SerialNumber'),
            'name'=>$request->get('EmployeeName'),
            'department'=>$request->get('Department'),
            'm_salary'=>$request->get('MontlySalary'),
            'no_of_days'=>$request->get('NooFDays'),
            'no_of_late'=>$request->get('Nooflate'),
            'c_m_salary'=>$request->get('CurrentMonthSalary'),
            'o_t_hr'=>$request->get('OverTimeHour'),
            'o_t_amt'=>$request->get('OverTimeAmount'),
            'allowance'=>$request->get('Allowance'),
            't_s_c_m_bef_deduction'=>$request->get('TotalSalaryCurrentMonthBeforeDeduction'),
            'm_l_deduction'=>$request->get('MonthlyLoneDeduction'),
            'advan_deduction_amount'=>$request->get('AdvanceDeductionAmount'),
            'net_pay_total_salary'=>$request->get('NetPayTotalSalary'),
        ]);

        return redirect()->to('/admin/humanresources/salary')->with('success', 'Salary added successfully.');
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
        $currentjobs=Employee::all();
        $Departments=Department::all();
        $salary=Salary::find($id);
        return view('admin.humanresources.salary.edit')->with(compact('salary','Departments','currentjobs'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'Date'=>'required',
            'SerialNumber'=>'required|numeric',
            'EmployeeName'=>'required |not_in:none',
            'Department'=>'required|not_in:none',
            'MontlySalary'=>'required|numeric',
            'NooFDays'=>'required|numeric',
            'Nooflate'=>'required|numeric',
            'CurrentMonthSalary'=>'required|numeric',
            'OverTimeHour'=>'required|numeric',
            'OverTimeAmount'=>'required|numeric',
            'Allowance'=>'required|numeric',
            'TotalSalaryCurrentMonthBeforeDeduction'=>'required|numeric',
            'MonthlyLoneDeduction'=>'required|numeric',
            'AdvanceDeductionAmount'=>'required|numeric',
            'NetPayTotalSalary'=>'required|numeric',
        ]);

         $salary=Salary::find($id);
        //  $name = $request->get('EmployeeName');
        // $currentjobs=Currentjob::all();
        //  foreach($currentjobs as $currentjob){
        //     if($name == $currentjob->e_name){
        //         $ee_id=$currentjob->e_id;
        //     }
        // };
        $salary->update([
            'date'=>$request->get('Date'),
            'sno'=>$request->get('SerialNumber'),
            'name'=>$request->get('EmployeeName'),
            'department'=>$request->get('Department'),
            'm_salary'=>$request->get('MontlySalary'),
            'no_of_days'=>$request->get('NooFDays'),
            'no_of_late'=>$request->get('Nooflate'),
            'c_m_salary'=>$request->get('CurrentMonthSalary'),
            'o_t_hr'=>$request->get('OverTimeHour'),
            'o_t_amt'=>$request->get('OverTimeAmount'),
            'allowance'=>$request->get('Allowance'),
            't_s_c_m_bef_deduction'=>$request->get('TotalSalaryCurrentMonthBeforeDeduction'),
            'm_l_deduction'=>$request->get('MonthlyLoneDeduction'),
            'advan_deduction_amount'=>$request->get('AdvanceDeductionAmount'),
            'net_pay_total_salary'=>$request->get('NetPayTotalSalary'),
        ]);
        return redirect()->to('/admin/humanresources/salary')->with('success', 'Salary Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $salary=Salary::find($id);
        $salary->delete();
        return redirect()->to('/admin/humanresources/salary')->with('success','Salary Delete Successfully');
    }
    public function search_data(Request $request){

        $searchQuery=$request->input('search');


            $records=Salary::where(function($query) use ($searchQuery){
                    $query->where('name','LIKE',"%{$searchQuery}%")
                    ->orWhere('name','LIKE',"%{$searchQuery}%");
                    })->paginate(8);


return view('admin.humanresources.salary.view',compact('searchQuery','records'));
            }
}
