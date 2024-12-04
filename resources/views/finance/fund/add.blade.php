@extends('finance.finance_dashboard')

@section('finance')
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Finance</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item">
                            <a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Fund</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <form action="{{ route('finance.fund.store') }}" method="post">
            @csrf
            <div class="card">
                <div class="card-body p-4">
                    <h5 class="card-title">Add Fund</h5>
                    <hr/>
                    <div class="form-body mt-4">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="border border-3 p-4 rounded">
                                    <div class="mb-3">
                                        <label for="inputProductTitle" class="form-label">Date</label>
                                        <input type="date" name="date" class="form-control @error('date') is-invalid @enderror" id="inputProductTitle" placeholder="Enter Date">
                                        <span class="text-danger">{{ $errors->first('date') }}</span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputProductTitle" class="form-label">Fund Amount</label>
                                        <input type="text" name="fund" id="fund" class="form-control @error('fund') is-invalid @enderror" placeholder="Enter fund">
                                        <span class="text-danger">{{ $errors->first('fund') }}</span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="Department" class="form-label">Payment Transfer</label>
                                        <select class="form-select @error('Cash_transaction') is-invalid @enderror" name="Cash_transaction" id="Cash_transaction" aria-label="Default select example">
                                            <option value="none">Select Payment Transfer</option>
                                            <option value="BankTransFer" {{ old('Cash_transaction') == 'BankTransFer' ? 'selected' : '' }}>Bank Transfer</option>
                                            <option value="Cheque" {{ old('Cash_transaction') == 'Cheque' ? 'selected' : '' }}>Cheque</option>
                                            <option value="Cash" {{ old('Cash_transaction') == 'Cash' ? 'selected' : '' }}>Cash</option>
                                        </select>
                                        <span class="text-danger text-uppercase">{{ $errors->first('Cash_transaction') }}</span>
                                    </div>
                                    <div id="bank_name_div" style="display: none;" class="mb-3">
                                        <label for="bank_name" class="form-label">Bank Name</label>
                                        <input type="text" class="form-control @error('bank_name') is-invalid @enderror" id="bank_name" name="bank_name" placeholder="Enter Bank Name">
                                        <span class="text-danger">{{ $errors->first('bank_name') }}</span>
                                    </div>
                                    <div id="cheque_number_div" style="display: none;" class="mb-3">
                                        <label for="cheque_number" class="form-label">Cheque Number</label>
                                        <input type="text" class="form-control @error('cheque_number') is-invalid @enderror" id="cheque_number" name="cheque_number" placeholder="Enter Cheque Number (e.g., CH123456)">
                                        <span class="text-danger">{{ $errors->first('cheque_number') }}</span>
                                    </div>
                                    {{-- <div class="mb-3">
                                        <label for="inputProductDescription" class="form-label">Total Amount</label>
                                        <input type="number" class="form-control @error('TotalAmount') is-invalid @enderror" id="TotalAmount" name="TotalAmount" placeholder="Enter Total Amount">
                                        <span class="text-danger">{{ $errors->first('Totalamount') }}</span>
                                    </div> --}}
                                    <div class="mb-3">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary">Save Fund</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end row-->
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const cashTransactionSelect = document.getElementById('Cash_transaction');
        const bankNameInputDiv = document.getElementById('bank_name_div');
        const chequeNumberInputDiv = document.getElementById('cheque_number_div');

        function toggleAdditionalInputs() {
            const value = cashTransactionSelect.value; // Get selected value from dropdown

            if (value === 'BankTransFer') {
                // Show bank name input and hide cheque number input
                bankNameInputDiv.style.display = 'block';
                chequeNumberInputDiv.style.display = 'none';
            } else if (value === 'Cheque') {
                // Show cheque number input and hide bank name input
                bankNameInputDiv.style.display = 'none';
                chequeNumberInputDiv.style.display = 'block';
            } else {
                // Hide both inputs if neither option is selected
                bankNameInputDiv.style.display = 'none';
                chequeNumberInputDiv.style.display = 'none';
            }
        }

        // Event listener for dropdown change
        cashTransactionSelect.addEventListener('change', toggleAdditionalInputs);

        // Initial check on page load
        toggleAdditionalInputs();
    });
</script>
@endsection
