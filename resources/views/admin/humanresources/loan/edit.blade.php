@extends('admin.admin_dashboard')
@section('admin')
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
                            <li class="breadcrumb-item active" aria-current="page">Loan</li>
                        </ol>
                    </nav>
                </div>

            </div>
            <!--end breadcrumb-->
            <!--Edit Method Start -->
            <form method="POST" action="{{ route('admin.humanresources.loan.update', ['id' => $loan->id]) }}">
                {{ method_field('put') }}
                @csrf
                <div class="card">
                    <div class="card-body p-4">
                        <h5 class="card-title">Edit Loan</h5>
                        <hr />
                        <div class="form-body mt-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="border border-3 p-4 rounded">
                                        <div class="mb-3">
                                            <label for="date" class="form-label">Loan Repayment Date </label>
                                            <input type="date" class="form-control @error('Date') is-invalid @enderror"
                                                value="{{ old('Date') }}" name="Date" id="inputProductTitle"
                                                value=" {{ old('Date', $loan->date) }}">
                                            <span class="text-danger text-uppercase ">{{ $errors->first('Date') }}</span>
                                        </div>
                                        <div class="mb-3">
                                            <label for="So#" class="form-label">Serial Number</label>
                                            <input type="text" class="form-control" name="Sno" id="inputProductTitle"
                                                value="{{ old('Sno', $loan->sno) }}" readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label for="Name" class="form-label">Name</label>
                                            <input type="text" class="form-control" name="Name" id="inputProductTitle"
                                                value="{{ old('Name', $loan->name) }}" readonly>
                                        </div>


                                        <div class="mt-3">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary">Submit </button>
                                            </div>
                                        </div>

                                    </div>
                                </div> <!-- /.COl End -->
                                <!-- COl Start-->
                                <div class="col-md-6">
                                    <div class="border border-3 p-4 rounded">
                                        <div class="row g-3">

                                            <div class="mb-1">
                                                <label for="Department" class="form-label">Department</label>
                                                <input type="text" name="Department" id="" class="form-control"
                                                    value="{{ $loan->department }}" readonly>
                                            </div>

                                            <div class="mb-1">
                                                <label for="LoanAmount" class="form-label">Loan Amount</label>
                                                <input type="number" class="form-control" name="LoanAmount" id="LoanAmount"
                                                    value="{{ old('LoanAmount', $loan->remaining_balance) }}" disabled>
                                            </div>

                                            <div class="mb-5">
                                                <label for="LoanAmount" class="form-label">Loan repayment</label>
                                                <input type="number"
                                                    class="form-control @error('loanpayment') is-invalid @enderror"
                                                    name="loanpayment" id="inputProductTitle"
                                                    value="{{ old('loanpayment') }}" placeholder="Enter Loan Amount">
                                                <span
                                                    class="text-danger text-uppercase ">{{ $errors->first('loanpayment') }}</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div><!--end row-->
                        </div>
                    </div>
                </form> <!--Form End -->
            <!--Edit End -->
        </div>
    </div>
    </div>
    <!--end page wrapper -->
@endsection


<script>
    // Assuming you have a way to update remaining balance dynamically
    // For example, using AJAX to fetch updated balance

    // Assuming $loan->remaining_balance is initially passed from the server

    var remainingBalance = {{ $loan->remaining_balance }};
    var loanAmountField = document.getElementById('loan_amount');

    // Function to update loan amount field state
    function updateLoanAmountField() {
        if (remainingBalance === 0) {
            loanAmountField.setAttribute('disabled', 'disabled');
        } else {
            loanAmountField.removeAttribute('disabled');
        }
    }

    // Check remaining balance on page load
    document.addEventListener('DOMContentLoaded', function() {
        updateLoanAmountField();
    });

    // Example: Update remaining balance dynamically (using setTimeout for demo purpose)
    function simulateDynamicBalanceUpdate() {
        setTimeout(function() {
            remainingBalance = 0; // Simulate remaining balance becoming zero
            updateLoanAmountField(); // Update loan amount field state
        }, 3000); // Simulating a 3-second delay for update
    }

    // Call this function to simulate dynamic balance update
    // Replace it with your actual code to update balance dynamically
    simulateDynamicBalanceUpdate();
</script>
