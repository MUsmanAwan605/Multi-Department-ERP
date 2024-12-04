@extends('finance.finance_dashboard')
@section('finance')
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">HR</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Salary</li>
                    </ol>
                </nav>
            </div>

        </div>
          <!--Message  Start-->
            @if (session('success'))
                <div class="alert alert-success" id="alertMessage">
                    {{ session('success') }}
                </div>
                <script>
                    setTimeout(function() {
                        document.getElementById('alertMessage').style.display = 'none';
                    }, 3000);
                </script>
            @endif
            <!--Message  End-->

     

        <Form method="post" action="{{ route('finance.salary.update', ['id' => $salary->id]) }}">
            @csrf
            {{ method_field('put') }}
        <div class="card">
          <div class="card-body p-4">
              <h5 class="card-title">Add New Salary</h5>
              <hr/>
               <div class="form-body mt-4">
                <div class="row">
                   <div class="col-lg-6">
                    <div class="border border-3 p-4 rounded">
                        <div class="mb-3">
                            <label for="Date" class="form-label">Date</label>
                            <input type="Date" value="{{ old('Date', $salary->date)  }}" class="form-control @error('Date') is-invalid
                            @enderror" name="Date" id="Date" placeholder="Date">
                             <span class="text-danger text-uppercase ">{{ $errors->first('Date') }}</span>
                          </div>

                      <div class="mb-3">
                        <label for="Date" class="form-label">Serial Number</label>
                        <input type="Number" value="{{ old('SerialNumber',$salary->sno) }}"class="form-control @error('SerialNumber') is-invalid
                        @enderror" name="SerialNumber" id="SerialNumber" placeholder="Enter Employee ID">
                         <span class="text-danger text-uppercase ">{{ $errors->first('SerialNumber') }}</span>
                      </div>


                        <div class="mb-3">
                        <label for="EmployeeID" class="form-label">Employee Name</label>
                            <select class="form-select @error('EmployeeName') is-invalid @enderror" name="EmployeeName" id="EmployeeName">
                                <option value="none">Open this select Employee Name</option>
                                @foreach ($currentjobs as $currentjob)
                                <option value="{{ $currentjob->e_name }}"  {{ old('EmployeeName',$salary->name) == $currentjob->e_name ? 'Selected' : NULL }}>{{ $currentjob->e_name }}</option>
                                @endforeach
                              </select>
                         <span class="text-danger text-uppercase ">{{ $errors->first('EmployeeName') }}</span>

                        </div>

                        <div class="mb-3">
                            <label for="EmployeeID" class="form-label">Department</label>
                                <select class="form-select @error('Department') is-invalid @enderror" name="Department" id="EmployeeName">
                                    <option value="none">Open this select Department</option>
                                    @foreach ($Departments as $Department)
                                    <option value="{{ $Department->name }}"  {{ old('Department',$salary->department) == $Department->name ? 'Selected' : NULL }}>{{ $Department->name }}</option>
                                    @endforeach
                                  </select>
                         <span class="text-danger text-uppercase ">{{ $errors->first('Department') }}</span>
                            </div>

                    <div class="mb-3">
                        <label for="MontlySalary" class="form-label">Montly Salary</label>
                        <input type="number" value="{{ old('MontlySalary',$salary->m_salary) }}" class="form-control @error('MontlySalary') is-invalid @enderror" name="MontlySalary" id="MontlySalary" placeholder="Enter Job Title">
                        <span class="text-danger text-uppercase">{{ $errors->first('MontlySalary') }}</span>
                    </div>

                    <div class="mb-3">
                        <label for="NooFDays" class="form-label">No OF Days</label>
                        <input type="number"  value="{{ old('NooFDays',$salary->no_of_days) }}"class="form-control @error('NooFDays') is-invalid @enderror" name="NooFDays" id="NooFDays" placeholder="Enter NooFDays">
                        <span class="text-danger text-uppercase">{{ $errors->first('NooFDays') }}</span>
                    </div>
                    <div class="mb-3">
                        <label for="Nooflate" class="form-label">No OF Late</label>
                        <input type="number"  value="{{ old('Nooflate',$salary->no_of_late) }}" class="form-control @error('Nooflate') is-invalid @enderror" name="Nooflate" id="Nooflate" placeholder="Enter Nooflate">
                        <span class="text-danger text-uppercase">{{ $errors->first('Nooflate') }}</span>
                    </div>
                    <div class="mt-5">
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>


                    </div>  <!--end Border-->
                   </div>  <!--end Column-->
                   <div class="col-lg-6">
                    <div class="border border-3 p-4 rounded">

                        <div class="mb-3">
                            <label for="CurrentMonthSalary" class="form-label">Current Month Salary</label>
                            <input type="number" value="{{ old('CurrentMonthSalary',$salary->c_m_salary) }}" class="form-control @error('CurrentMonthSalary') is-invalid @enderror" name="CurrentMonthSalary" id="CurrentMonthSalary" placeholder="Enter CurrentMonthSalary">
                            <span class="text-danger text-uppercase">{{ $errors->first('CurrentMonthSalary') }}</span>
                        </div>
                    <div class="mb-3">
                        <label for="OverTimeHour" class="form-label">Over Time Hour</label>
                        <input type="number"   value="{{ old('OverTimeHour',$salary->o_t_hr) }}" class="form-control @error('OverTimeHour') is-invalid @enderror" name="OverTimeHour" id="OverTimeHour" placeholder="Enter OverTimeHour">
                        <span class="text-danger text-uppercase">{{ $errors->first('OverTimeHour') }}</span>
                    </div>



                    <div class="mb-3">
                        <label for="OverTimeAmount" class="form-label">Over Time Amount</label>
                        <input type="number" value="{{ old('OverTimeAmount',$salary->o_t_amt) }}" class="form-control @error('OverTimeAmount') is-invalid @enderror" name="OverTimeAmount" id="OverTimeAmount" placeholder="Enter OverTimeAmount">
                        <span class="text-danger text-uppercase">{{ $errors->first('OverTimeAmount') }}</span>
                    </div>
                    <div class="mb-3">
                        <label for="Allowance" class="form-label">Allowance</label>
                        <input type="number"value="{{ old('Allowance',$salary->allowance) }}" class="form-control @error('Allowance') is-invalid @enderror" name="Allowance" id="Allowance" placeholder="Enter Allowance">
                        <span class="text-danger text-uppercase">{{ $errors->first('Allowance') }}</span>
                    </div>
                    <div class="mb-3">
                        <label for="TotalSalaryCurrentMonthBeforeDeduction" class="form-label">Total Salary Current Month Before Deduction</label>
                        <input type="number" value="{{ old('TotalSalaryCurrentMonthBeforeDeduction',$salary->t_s_c_m_bef_deduction) }}" class="form-control @error('TotalSalaryCurrentMonthBeforeDeduction') is-invalid @enderror" name="TotalSalaryCurrentMonthBeforeDeduction" id="TotalSalaryCurrentMonthBeforeDeduction" placeholder="Enter TotalSalaryCurrentMonthBeforeDeduction">
                        <span class="text-danger text-uppercase">{{ $errors->first('TotalSalaryCurrentMonthBeforeDeduction') }}</span>
                    </div>
                    <div class="mb-3">
                        <label for="MonthlyLoneDeduction" class="form-label">Monthly Lone Deduction</label>
                        <input type="number" value="{{ old('MonthlyLoneDeduction',$salary->m_l_deduction) }}" class="form-control @error('MonthlyLoneDeduction') is-invalid @enderror" name="MonthlyLoneDeduction" id="MonthlyLoneDeduction" placeholder="Enter MonthlyLoneDeduction">
                        <span class="text-danger text-uppercase">{{ $errors->first('MonthlyLoneDeduction') }}</span>
                    </div>
                    <div class="mb-3">
                        <label for="AdvanceDetuctionAmount" class="form-label">Advance Detuction Amount</label>
                        <input type="number" value="{{ old('AdvanceDeductionAmount',$salary->advan_deduction_amount) }}" class="form-control @error('AdvanceDeductionAmount') is-invalid @enderror" name="AdvanceDeductionAmount" id="AdvanceDetuctionAmount" placeholder="Enter AdvanceDetuctionAmount">
                        <span class="text-danger text-uppercase">{{ $errors->first('AdvanceDeductionAmount') }}</span>
                    </div>
                    <div class="mb-3">
                        <label for="NetPayTotalSalary" class="form-label">Net Pay Total Salary</label>
                        <input type="number" value="{{ old('NetPayTotalSalary',$salary->net_pay_total_salary) }}" class="form-control @error('NetPayTotalSalary') is-invalid @enderror" name="NetPayTotalSalary" id="NetPayTotalSalary" placeholder="Enter NetPayTotalSalary">
                        <span class="text-danger text-uppercase">{{ $errors->first('NetPayTotalSalary') }}</span>
                    </div>


                    </div>  <!--end border-->
                   </div> <!--end Column-->
               </div><!--end row-->
            </div>
          </div>
      </div>
    </Form>
    </div>
</div>
<!--end page wrapper -->
@endsection
