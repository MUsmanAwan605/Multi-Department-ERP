@extends('finance.finance_dashboard')
@section('finance')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Finance</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="/dashboard"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Purchase Order</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <form method="POST" action="{{ route('finance.orders.store') }}">

                @csrf
                <div class="card">



                    <div class="card-body p-4">
                        <h5 class="card-title">Add Purchase Order</h5>
                        <hr />
                        <div class="form-body mt-4">
                            <div class="row d-flex">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="border border-3 p-4 rounded">
                                            <div class="mb-3">
                                                <label for="PurchaseOrder" class="form-label">Purchase Order</label>
                                                <input type="text"
                                                    class="form-control @error('Purchase_Order') is-invalid @enderror"
                                                    id="PurchaseOrder" name="Purchase_Order" value="{{ old('Purchase_Order') }}">
                                                <span class="text-danger">{{ $errors->first('Purchase_Order') }}</span>
                                            </div>

                                            <div class="mb-3">
                                                <label for="date" class="form-label">Date</label>
                                                <input type="date"
                                                    class="form-control @error('date') is-invalid @enderror" id="date"
                                                    name="date" value="{{ old('date') }}">
                                                <span class="text-danger">{{ $errors->first('date') }}</span>
                                            </div>

                                            <div class="mb-3">
                                                <label for="POStatus" class="form-label">PO Status</label>
                                                <input type="text"
                                                    class="form-control @error('PO_Status') is-invalid @enderror"
                                                    id="POStatus" name="PO_Status" value="{{ old('PO_Status') }}">
                                                <span class="text-danger">{{ $errors->first('PO_Status') }}</span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-4 ms-auto mb-4">
                                        <div class="border border-3 p-4 rounded">
                                            <div class="mb-3">
                                                <label for="Requisition" class="form-label">Requisition</label>
                                                <input type="text"
                                                    class="form-control @error('Requisition') is-invalid @enderror"
                                                    id="Requisition" name="Requisition" value="{{ old('Requisition') }}">
                                                <span class="text-danger">{{ $errors->first('Requisition') }}</span>
                                            </div>

                                            <div class="mb-3">
                                                <label for="Requisition_Date" class="form-label">Requisition Date</label>
                                                <input type="date"
                                                    class="form-control @error('Requisition_Date') is-invalid @enderror"
                                                    id="Requisition_Date" name="Requisition_Date" value="{{ old('Requisition_Date') }}">
                                                <span class="text-danger">{{ $errors->first('Requisition_Date') }}</span>
                                            </div>

                                            <div class="mb-3">
                                                <label for="Requisition_Dept" class="form-label">Requisition Dept</label>
                                                <input type="text"
                                                    class="form-control @error('Requisition_Dept') is-invalid @enderror"
                                                    id="Requisition_Dept" name="Requisition_Dept" value="{{ old('Requisition_Dept') }}">
                                                <span class="text-danger">{{ $errors->first('Requisition_Dept') }}</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-lg-6 mb-4">
                                        <div class="border border-3 p-4 rounded">
                                            <div class="mb-3">
                                                <label for="Vendor_No" class="form-label">Vendor No</label>
                                                <input type="text"
                                                    class="form-control @error('Vendor_No') is-invalid @enderror"
                                                    id="Vendor_No" name="Vendor_No" value="{{ old('Vendor_No') }}">
                                                <span class="text-danger">{{ $errors->first('Vendor_No') }}</span>
                                            </div>

                                            <div class="mb-3">
                                                <label for="Company_Name" class="form-label">Company Name</label>
                                                <input type="text"
                                                    class="form-control @error('Company_Name') is-invalid @enderror"
                                                    id="Company_Name" name="Company_Name" value="{{ old('Company_Name') }}">
                                                <span class="text-danger">{{ $errors->first('Company_Name') }}</span>
                                            </div>

                                            <div class="mb-3">
                                                <label for="Address" class="form-label">Address</label>
                                                <input type="text"
                                                    class="form-control @error('Address') is-invalid @enderror"
                                                    id="Address" name="Address" value="{{ old('Address') }}">
                                                <span class="text-danger">{{ $errors->first('Address') }}</span>
                                            </div>

                                            <div class="mb-3">
                                                <label for="Telephone" class="form-label">Telephone</label>
                                                <input type="text"
                                                    class="form-control @error('Telephone') is-invalid @enderror"
                                                    id="Telephone" name="Telephone" value="{{ old('Telephone') }}">
                                                <span class="text-danger">{{ $errors->first('Telephone') }}</span>
                                            </div>

                                            <div class="mb-3">
                                                <label for="Email" class="form-label">Email</label>
                                                <input type="text"
                                                    class="form-control @error('Email') is-invalid @enderror"
                                                    id="Email" name="Email" value="{{ old('Email') }}">
                                                <span class="text-danger">{{ $errors->first('Email') }}</span>
                                            </div>

                                            <div class="mb-3">
                                                <label for="NTN" class="form-label">National Tax Number</label>
                                                <input type="text"
                                                    class="form-control @error('NTN') is-invalid @enderror"
                                                    id="NTN" name="NTN" value="{{ old('NTN') }}">
                                                <span class="text-danger">{{ $errors->first('NTN') }}</span>
                                            </div>

                                            <div class="mb-3">
                                                <label for="Contact_Person" class="form-label">Contact Person</label>
                                                <input type="text"
                                                    class="form-control @error('Contact_Person') is-invalid @enderror"
                                                    id="Contact_Person" name="Contact_Person" value="{{ old('Contact_Person') }}">
                                                <span class="text-danger">{{ $errors->first('Contact_Person') }}</span>
                                            </div>

                                            <div class="mb-3">
                                                <label for="Contact_Person_No" class="form-label">Contact Person No</label>
                                                <input type="text"
                                                    class="form-control @error('Contact_Person_No') is-invalid @enderror"
                                                    id="Contact_Person_No" name="Contact_Person_No" value="{{ old('Contact_Person_No') }}">
                                                <span class="text-danger">{{ $errors->first('Contact_Person_No') }}</span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-6">
                                        <div class="border border-3 p-4 rounded">
                                            <div class="mb-3">
                                                <label for="ShipTo" class="form-label">
                                                    <h4>Ship To</h4>
                                                </label>
                                            </div>

                                            <div class="mb-3">
                                                <label for="Company" class="form-label">Company Name</label>
                                                <input type="text"
                                                    class="form-control @error('Company') is-invalid @enderror"
                                                    id="Company" name="Company" value="{{ old('Company') }}">
                                                <span class="text-danger">{{ $errors->first('Company') }}</span>
                                            </div>

                                            <div class="mb-3">
                                                <label for="Address" class="form-label">Address</label>
                                                <input type="text"
                                                    class="form-control @error('Address') is-invalid @enderror"
                                                    id="Address" name="Address" value="{{ old('Address') }}">
                                                <span class="text-danger">{{ $errors->first('Address') }}</span>
                                            </div>

                                            <div class="mb-3">
                                                <label for="Sales_Tax_Registration_Number" class="form-label">Sales Tax Registration Number</label>
                                                <input type="text"
                                                    class="form-control @error('Sales_Tax_Registration_Number') is-invalid @enderror"
                                                    id="Sales_Tax_Registration_Number" name="Sales_Tax_Registration_Number"
                                                    value="{{ old('Sales_Tax_Registration_Number') }}">
                                                <span class="text-danger">{{ $errors->first('Sales_Tax_Registration_Number') }}</span>
                                            </div>

                                            <div class="mb-3">
                                                <label for="NTNn" class="form-label">National Tax Number</label>
                                                <input type="text"
                                                    class="form-control @error('NTNn') is-invalid @enderror"
                                                    id="NTNn" name="NTNn" value="{{ old('NTNn') }}">
                                                <span class="text-danger">{{ $errors->first('NTNn') }}</span>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="row">
                                        <div class="col">
                                            <div class="border border-3 p-4 rounded">
                                                <div class="mb-3">
                                                    <label for="Material_Code" class="form-label">Material Code</label>
                                                    <input type="text"
                                                        class="form-control @error('Material_Code') is-invalid @enderror"
                                                        id="Material_Code" name="Material_Code" value="{{ old('Material_Code') }}">
                                                    <span class="text-danger">{{ $errors->first('Material_Code') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="border border-3 p-4 rounded">
                                                <div class="mb-3">
                                                    <label for="Including_GST" class="form-label">Value Including GST</label>
                                                    <input type="text"
                                                        class="form-control @error('Including_GST') is-invalid @enderror"
                                                        id="Including_GST" name="Including_GST" value="{{ old('Including_GST') }}">
                                                    <span class="text-danger">{{ $errors->first('Including_GST') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="border border-3 p-4 rounded">
                                                <div class="mb-3">
                                                    <label for="Delivery_Date" class="form-label">Delivery Date</label>
                                                    <input type="date"
                                                        class="form-control @error('Delivery_Date') is-invalid @enderror"
                                                        id="Delivery_Date" name="Delivery_Date" value="{{ old('Delivery_Date') }}">
                                                    <span class="text-danger">{{ $errors->first('Delivery_Date') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="border border-3 p-4 rounded">
                                                <div class="mb-3">
                                                    <label for="Quantity" class="form-label">Quantity</label>
                                                    <input type="text"
                                                        class="form-control @error('Quantity') is-invalid @enderror"
                                                        id="Quantity" name="Quantity" value="{{ old('Quantity') }}">
                                                    <span class="text-danger">{{ $errors->first('Quantity') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="border border-3 p-4 rounded">
                                                <div class="mb-3">
                                                    <label for="Unit_of_Measurement" class="form-label">Unit of Measurement</label>
                                                    <input type="text"
                                                        class="form-control @error('Unit_of_Measurement') is-invalid @enderror"
                                                        id="Unit_of_Measurement" name="Unit_of_Measurement" value="{{ old('Unit_of_Measurement') }}">
                                                    <span class="text-danger">{{ $errors->first('Unit_of_Measurement') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="border border-3 p-4 rounded">
                                                <div class="mb-3">
                                                    <label for="Unit_Price" class="form-label">Unit Price</label>
                                                    <input type="text"
                                                        class="form-control @error('Unit_Price') is-invalid @enderror"
                                                        id="Unit_Price" name="Unit_Price" value="{{ old('Unit_Price') }}">
                                                    <span class="text-danger">{{ $errors->first('Unit_Price') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="border border-3 p-4 rounded mb-3">
                                                <div class="mb-3">
                                                    <label for="Value_Excluding_GST" class="form-label">Value Excluding GST</label>
                                                    <input type="text"
                                                        class="form-control @error('Value_Excluding_GST') is-invalid @enderror"
                                                        id="Excluding_GST" name="Excluding_GST" value="{{ old('Excluding_GST') }}">
                                                    <span class="text-danger">{{ $errors->first('Excluding_GST') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="border border-3 p-4 rounded">
                                                <div class="mb-3">
                                                    <label for="GST" class="form-label">GST</label>
                                                    <input type="text"
                                                        class="form-control @error('GST') is-invalid @enderror"
                                                        id="GST" name="GST" value="{{ old('GST') }}">
                                                    <span class="text-danger">{{ $errors->first('GST') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="border border-3 p-4 rounded">
                                                <div class="mb-3">
                                                    <label for="Material_Description" class="form-label">Material Description</label>
                                                    <input type="text"
                                                        class="form-control @error('Material_Description') is-invalid @enderror"
                                                        id="Material_Description" name="Material_Description" value="{{ old('Material_Description') }}">
                                                    <span class="text-danger">{{ $errors->first('Material_Description') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>






                                </div>

                                {{-- <div class="mb-3">
                                 <label for="raw" class="form-label">Raw Materials</label>
                                 <input type="integer"  class="form-control @error('raw') is-invalid @enderror" id="raw" name="raw">
                                 <span class="text-danger">{{ $errors->first('raw') }}</span>
                               </div> --}}

                                {{-- <div class="mb-3">
								<label for="amount" class="form-label">Amount</label>
								<input type="integer" class="form-control @error('amount') is-invalid @enderror" id="amount" name="amount">
								<span class="text-danger">{{ $errors->first('amount') }}</span>
							  </div> --}}


                                {{-- <div class="mb-3">
								<label for="qty" class="form-label">Quantity</label>
								<input type="integer" class="form-control @error('qty') is-invalid @enderror" id="qty" name="qty">
								<span class="text-danger">{{ $errors->first('qty') }}</span>
							  </div> --}}

                                {{-- <div class="mb-3">
                                <label for="department" class="form-label">Department</label>
                                <select class="form-select @error('department') is-invalid
                                @enderror" name="department" id="department" aria-label="Default select example">
                                    <option value="none">Open this select Department</option>
                                    @foreach ($departments as $department)
                                    <option value="{{ $department->name }}" {{ old('department') == $department->name ? 'selected': NULL  }}>{{ $department->name }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger text-uppercase ">{{ $errors->first('department') }}</span>
                              </div> --}}



                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>



                                {{-- </div> --}}
                            </div>


                        </div>
                    </div>
                </div>
        </div>
        </form>
    </div>


    </div>
    <!--end page wrapper -->
@endsection
