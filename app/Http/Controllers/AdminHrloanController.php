<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Loan;
use App\Models\Department;
use App\Models\Employee;

class AdminHrloanController extends Controller
{
    public function index()
    {

        $departments=Department::all();
        $Loans=Loan::orderBy('id','desc')->paginate('5');
        return view('admin.humanresources.loan.index')->with(compact('Loans','departments'));


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
            return redirect()->route('admin.humanresources.loan.index')->with('error', 'Employee not found.');
        }
        $CurrentJobs=Employee::all();
        return view('admin.humanresources.loan.add',compact('departments','CurrentJobs','employee','loans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation  Start//
        $this->validate(request(), [
            'Date' => 'required',
            'Sno' => 'required|numeric',
            // 'Name' => 'required',
            // 'Department' => 'required',
            'LoanAmount' => 'required',
        ]);

       // Extract month
$date = $request->input('Date');
$monthNumber = date('n', strtotime($date));
$monthName = date('F', mktime(0, 0, 0, $monthNumber, 1));

 //Check//
$existingLoan = Loan::where('sno', $request->get('Sno'))->first();

if ($existingLoan) {
    // If a record already exists, update the loan_amount and remaining_balance
    $existingLoan->loan_amount += $request->get('LoanAmount');
    $existingLoan->$monthName += $request->get('loanpayment');
    $existingLoan->remaining_balance += $request->get('LoanAmount'); // Adjust remaining balance by subtracting payment
    $existingLoan->save();
} else {

    $newLoan = Loan::create([
        'date' => $request->get('Date'),
        'sno' => $request->get('Sno'),
        'name' => $request->get('Name'),
        'department' => $request->get('Department'),
        'loan_amount' => $request->get('LoanAmount'),
        $monthName => $request->get('loanpayment'),
        'remaining_balance' => $request->get('LoanAmount')
    ]);
}

        // End Store Method//
        //Redirect Page //
        return redirect()->to('/admin/humanresources/loan')->with('success', 'Loan added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $departments=Department::all();
        return view('admin.humanresources.loan.edit',compact('departments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Edit Loan

        $departments=Department::all();
        $loan=Loan::find($id);
        return view('admin.humanresources.loan.edit')->with(compact('loan','departments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

    $loan = Loan::find($id);

            // Validation  Start//
            $this->validate(request(),[

                'Date'=>'required',

                'loanpayment'=>'required',
            ]);
            //Validation  End//


    // Extract month //
    $date = $request->input('Date');
    $monthNumber = date('n', strtotime($date));
    $monthName = date('F', mktime(0, 0, 0, $monthNumber, 1));

    // Amount Minus From Month //
    $Jan= $loan->January;
    $Feb=$loan->February;
    $March=$loan->March;
    $April=$loan->April;
    $May=$loan->May;
    $June=$loan->June;
    $July=$loan->July;
    $Aug=$loan->August;
    $Sept=$loan->September;
    $Oct=$loan->October;
    $Nov=$loan->November;
    $Dec=$loan->December;
    $loanAmount = $loan->loan_amount;

$loanPayment = $request->get('loanpayment');

$remainingBalance = $loanAmount - $loanPayment - $Jan- $Feb - $March - $April - $May - $June - $July - $Aug- $Sept - $Oct - $Nov- $Dec;



// Validate Amount Not Exceed //
if ($remainingBalance < 0) {
    return redirect()->back()->withErrors(['loanpayment' => 'Repayment amount cannot exceed loan amount.'])->withInput();
}
// Validate Amount Not Exceed //


$loan->update([
    'date' => $request->input('Date'),
    'sno' => $request->input('Sno'),
    'name' => $request->input('Name'),
    'department' => $request->input('Department'),
    'loan_amount' => $loanAmount,
    $monthName => $loanPayment + $loan->$monthName,
    'remaining_balance' => $remainingBalance,
]);


// Redirect Page  //
return redirect()->to('/admin/humanresources/loan') ->with('success', 'Loan Updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $loan = Loan::find($id);
            $loan->delete();
            return redirect()->to('/admin/humanresources/loan')->with('success', 'Loan deleted successfully.');
    }

    public function search_data(Request $request){


        $searchQuery = $request->input('search');
        $rawMaterial = Employee::where('id', $request->input('search'))->first();

        $records = Employee::where(function ($query) use ($searchQuery) {
            $query->where('cni_no', 'LIKE', "%{$searchQuery}%");
        })->paginate(8);
return view('admin.humanresources.loan.view', compact('records', 'searchQuery','rawMaterial'));
        }
}
