<?php

namespace App\Http\Controllers;

use App\Models\Currentjob;
use App\Models\Department;
use App\Models\Fund;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Salary;

class financesalaryController extends Controller
{
    public function index()
    {
        $currentjobs=Currentjob::all();
        $salaries = Salary::orderBy('id', 'desc')->paginate(5);
    return view('finance.salary.index')->with(compact('salaries','currentjobs'));
}

public function edit(string $id){

    $Departments=Department::all();
    $currentjobs=Employee::all();
    $salary = Salary::find($id);
    return view('finance.salary.edit')->with(compact('salary','Departments','currentjobs'));
}

public function update(Request $request, $id)
{
    // Validate the request
    $this->validate($request, [
        'Date' => 'required',
        'SerialNumber' => 'required|numeric',
        'EmployeeName' => 'required|not_in:none',
        'Department' => 'required|not_in:none',
        'MontlySalary' => 'required|numeric',
        'NooFDays' => 'required|numeric',
        'Nooflate' => 'required|numeric',
        'CurrentMonthSalary' => 'required|numeric',
        'OverTimeHour' => 'required|numeric',
        'OverTimeAmount' => 'required|numeric',
        'Allowance' => 'required|numeric',
        'TotalSalaryCurrentMonthBeforeDeduction' => 'required|numeric',
        'MonthlyLoneDeduction' => 'required|numeric',
        'AdvanceDeductionAmount' => 'required|numeric',
        'NetPayTotalSalary' => 'required|numeric',
    ]);

    // Fetch the salary record
    $salary = Salary::find($id);

    $current_fund = Fund::latest()->first()?->total ?? 0;

    $current_fund=Fund::latest()->first()?->total ?? 0;

   

    $abc=$request->get('NetPayTotalSalary');
    $name = $request->get('EmployeeName');
    $dpt = $request->get('Department');



    if($current_fund >= $abc){
        $updated_fund=$current_fund - $abc;
    
    $salary->update([
        'date' => $request->get('Date'),
        'sno' => $request->get('SerialNumber'),
        'name' => $request->get('EmployeeName'),
        'department' => $request->get('Department'),
        'm_salary' => $request->get('MontlySalary'),
        'no_of_days' => $request->get('NooFDays'),
        'no_of_late' => $request->get('Nooflate'),
        'c_m_salary' => $request->get('CurrentMonthSalary'),
        'o_t_hr' => $request->get('OverTimeHour'),
        'o_t_amt' => $request->get('OverTimeAmount'),
        'allowance' => $request->get('Allowance'),
        't_s_c_m_bef_deduction' => $request->get('TotalSalaryCurrentMonthBeforeDeduction'),
        'm_l_deduction' => $request->get('MonthlyLoneDeduction'),
        'advan_deduction_amount' => $request->get('AdvanceDeductionAmount'),
        'net_pay_total_salary' => $abc,
        'status' => 'Paid', 
    ]);

    Fund::create([
        'fund' => '', 
        'name' => $name, 
        'dpt' => $dpt, 
        'date' => now(),
        'amount' => 'Salary Payment', 
        'p_method' => 'Salary Payment',
        'debit' => $abc, 
        'total' => $updated_fund 
    ]);
    return redirect()->route('finance.salary.index')->with('success', 'Salary issued and fund deducted successfully.');
} else {
    return redirect()->route('finance.salary.index')->with('success', 'Not enough fund to pay the salary.');
}
}



public function search_data(Request $request){

    $searchQuery=$request->input('search');


        $records=Salary::where(function($query) use ($searchQuery){
                $query->where('name','LIKE',"%{$searchQuery}%")
                ->orWhere('emp_id','LIKE',"%{$searchQuery}%");
                })->paginate(8);


return view('finance.salary.view',compact('searchQuery','records'));
        }
}
