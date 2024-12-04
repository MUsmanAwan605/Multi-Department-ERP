<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Fund;
use Illuminate\Http\Request;
use App\Models\Loan;
use App\Models\Department;
use App\Models\Currentjob;


class HrloanController extends Controller
{
    public function index()
    {

        $departments=Department::all();
        $Employees=Employee::all();
        $Loans=loan::orderBy('id','desc')->paginate('5');
        return view('hr.loan.index')->with(compact('departments','Loans'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $departments=Department::all();
        $loans=Loan::all();
        $employee = Employee::find($id);
        if (!$employee) {
            return redirect()->route('hr.loan.index')->with('error', 'Employee not found.');
        }
        $CurrentJobs=Employee::all();
        return view('hr.loan.add',compact('departments','CurrentJobs','employee','loans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation Start
        $this->validate($request, [
            'Date' => 'required',
            'Sno' => 'required|numeric',
            'LoanAmount' => 'required',
        ]);

        // Extract month
        $date = $request->input('Date');
        $monthNumber = date('n', strtotime($date));
        $monthName = date('F', mktime(0, 0, 0, $monthNumber, 1));

        // Get the current total fund
        $current_fund = Fund::latest()->first()?->total ?? 0;

        // Get the loan amount and payment
        $loanAmount = $request->get('LoanAmount');
        $loanPayment = $request->get('loanpayment');

        // Check if there's enough fund to deduct the loan
        if ($current_fund >= $loanAmount) {
            // Check for an existing loan
            $existingLoan = Loan::where('sno', $request->get('Sno'))->first();

            if ($existingLoan) {
                // Update existing loan
                $existingLoan->loan_amount += $loanAmount;
                $existingLoan->$monthName += $loanPayment;
                $existingLoan->remaining_balance += $loanAmount;
                $existingLoan->save();
            } else {
                // Create a new loan record if not existing
                Loan::create([
                    'date' => $request->get('Date'),
                    'sno' => $request->get('Sno'),
                    'name' => $request->get('Name'),
                    'department' => $request->get('Department'),
                    'loan_amount' => $loanAmount,
                    $monthName => $loanPayment,
                    'remaining_balance' => $loanAmount
                ]);
            }

            // Deduct loan amount from the fund
            $updated_fund = $current_fund - $loanAmount;

            // Update the fund record with the new total
            Fund::create([
                'fund' => '', // Updated fund after deduction
                'date' => now(),
                'amount' => $loanAmount, // Amount deducted
                'p_method' => 'Loan Deduction',
                'debit' => $loanAmount, // Amount to be reflected as debit
                'total' => $updated_fund // New total after deduction
            ]);

            return redirect()->to('/hr/loan')->with('success', 'Loan added successfully.');
        } else {
            return redirect()->to('/hr/loan')->with('success', 'Not enough fund to deduct the loan.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $departments=Department::all();
        // $departments=Employee::all();
        // return view('hr.loan.edit',compact('departments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Edit Loan
        $CurrentJobs=Currentjob::all();
        $departments=Department::all();
        $loan=Loan::find($id);
        return view('hr.loan.edit')->with(compact('loan','departments','CurrentJobs'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $loan = Loan::find($id);

        // Validation start
        $this->validate($request, [
            'Date' => 'required',
            'loanpayment' => 'required',
        ]);
        // Validation end

        // Extract the month
        $date = $request->input('Date');
        $monthNumber = date('n', strtotime($date));
        $monthName = date('F', mktime(0, 0, 0, $monthNumber, 1));

        // Calculate existing loan payments for all months
        $loanAmount = $loan->loan_amount;
        $loanPayment = $request->get('loanpayment');

        $totalPaid = $loan->January + $loan->February + $loan->March + $loan->April + $loan->May + $loan->June
                   + $loan->July + $loan->August + $loan->September + $loan->October + $loan->November + $loan->December;

        // Calculate remaining balance after this payment
        $remainingBalance = $loanAmount - $loanPayment - $totalPaid;

        // Ensure the repayment amount doesn't exceed the loan amount
        if ($remainingBalance < 0){
            return redirect()->back()->withErrors(['loanpayment' => 'Repayment amount cannot exceed loan amount.'])->withInput();
        }

        // Get the current total fund from the Fund table
        $current_fund = Fund::latest()->first()?->total ?? 0;

        // Add the loan repayment amount back to the fund
        $updated_fund = $current_fund + $loanPayment;

        // Update the loan record
        $loan->update([
            'date' => $request->input('Date'),
            'sno' => $request->input('Sno'),
            'name' => $request->input('Name'),
            'department' => $request->input('Department'),
            'loan_amount' => $loanAmount,
            $monthName => $loanPayment + $loan->$monthName, // Update the current month's payment
            'remaining_balance' => $remainingBalance,
        ]);

        // Update the fund record by adding the loan repayment
        Fund::create([
            'fund' => $updated_fund,
            'date' => now(),
            'amount' => $loanPayment, // Amount being repaid and added to fund
            'p_method' => 'Loan Repayment',
            'total' => $updated_fund,
            'name' => $request->input('Name'), // Name of the person making the payment
        ]);

        // Redirect to loan page with success message
        return redirect()->to('/hr/loan')->with('success', 'Loan updated and fund balance adjusted successfully.');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $loan = Loan::find($id);
            $loan->delete();
            return redirect()->to('/hr/loan')->with('success', 'Loan deleted successfully.');
    }

    public function search_data(Request $request){

        // $data = $request->input('search');
        // $records = Loan::where('sno', 'LIKE',  "%{$data}%")->paginate(8);
        // return view('hr.loan.view', ['records' => $records, 'data' => $data]);
            // dd($data,$records);
    // $loan = Loan::find($id);
    // $records = Employee::with('loan')->get();
            $searchQuery = $request->input('search');
            $rawMaterial = Employee::where('id', $request->input('search'))->first();

            $records = Employee::where(function ($query) use ($searchQuery) {
                $query->where('cni_no', 'LIKE', "%{$searchQuery}%");
            })->paginate(8);

return view('hr.loan.view', compact('records', 'searchQuery'  ,'rawMaterial'  ));
        }

}
