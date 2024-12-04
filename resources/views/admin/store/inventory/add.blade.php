@extends('admin.admin_dashboard')
@section('admin')
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">SubSupplier</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Add</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->
        <div class="row">
            <div class="col-lg-6 ">
                <div class="border border-3 p-4 rounded">
                <form method="post" action="{{route('admininventory.index')}}">
                    @csrf
                <div class="card">
                    <div class="card-body p-4">
                        <h5 class="mb-4">Add Inventory</h5>
                        <form class="row g-3">
                            <div class=" col-md-12 mb-3">
                                <label for="s_no" class="form-label mb-0">Serial Number</label>
                                <input type="number" value="{{old('SerialNumber')}}" class="form-control @error('SerialNumber') is-invalid @enderror " id="SerialNumber" name="SerialNumber" placeholder="S.no">
                                <span class="text-danger">{{ $errors->first('SerialNumber') }}</span>
                            </div>
                            <div class=" col-md-12 mb-3">
                                <label for="input2" class="form-label mb-0 ">Date</label>
                                <input type="date"value="{{old('Date')}}" class="form-control @error('Date') is-invalid @enderror" id="Date" name="Date" placeholder="Date">
                                <span class="text-danger">{{ $errors->first('Date') }}</span>

                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="input3" class="form-label mb-0">Description</label>
                                <input type="text"value="{{old('Description')}}" class="form-control @error('Description') is-invalid @enderror" id="Description" name="Description" placeholder="Description">
                                <span class="text-danger">{{ $errors->first('Description') }}</span>

                            </div>
                            {{-- <div class="col-md-12 mb-3">
                                <label for="input4" class="form-label mb-0">Supplier Name</label>
                                <input type="text"value="{{old('supp_name')}}" class="form-control @error('supp_name') is-invalid @enderror" id="supp_name" name="supp_name" placeholder="Supplier_name">
                                <span class="text-danger">{{ $errors->first('supp_name') }}</span>

                            </div> --}}
                            <div class="col-md-12 mb-3">
                                <label for="input4" class="form-label mb-0">Supplier Name</label>
                                <select class="form-control @error('SupplierName') is-invalid @enderror" id="SupplierName" name="SupplierName">
                                    <option value="" selected>Select Supplier</option>
                                    @foreach($Subsuppliers as $supplier)
                                        <option value="{{ $supplier->spname }}" {{ old('SupplierName') == $supplier->spname ? 'selected' : NULL }}>
                                            {{ $supplier->spname }}
                                        </option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->first('SupplierName') }}</span>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="Department" class="form-label">Department</label>
                                    <select class="form-select @error('DepartmentName') is-invalid
                                    @enderror"  name="DepartmentName"  id="DepartmentName" aria-label="Default select example">
                                        <option value="none">Open this select Department</option>
                                        @foreach ($departments as $department )
                                        <option value="{{ $department->name }}"  {{ old('DepartmentName') == $department->name ? 'selected' : NULL }} >{{ $department->name }}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger text-uppercase ">{{ $errors->first('DepartmentName') }}</span>
                                    </div>
                            <div class=" col-md-12 mb-3">
                                <label for="input6" class="form-label mb-0">Quantity In</label>
                                <input type="number"value="{{old('QuantityIn')}}" class="form-control @error('QuantityIn') is-invalid @enderror" id="QuantityIn" name="QuantityIn" placeholder="Quantity-in">
                                <span class="text-danger">{{ $errors->first('QuantityIn') }}</span>

                            </div>

                            <div class=" col-md-12 mb-3">
                                <label for="input8" class="form-label mb-0">Quantity Out</label>
                                <input type="number"value="{{old('QuantityOut')}}" class="form-control @error('QuantityOut') is-invalid @enderror" id="QuantityOut" name="QuantityOut" placeholder="Quantity-Out">
                                <span class="text-danger">{{ $errors->first('QuantityOut') }}</span>

                            </div>


                    </div>
                </div>
            </div>
        </div>
            <div class="col-lg-6 ">
                <div class="border border-3 p-4 rounded">
                <form method="post" action="{{route('admininventory.index')}}">
                    @csrf
                <div class="card">
                    <div class="card-body p-4">
                        <h5 class="mb-4">Add Inventory</h5>
                        <form class="row g-3">


                            <div class="col-md-12 mb-3">
                                <label for="input10" class="form-label mb-0">Balance</label>
                                <input type="number"value="{{old('balance')}}" class="form-control @error('balance') is-invalid @enderror" id="balance" name="balance" placeholder="Balance">
                                <span class="text-danger">{{ $errors->first('balance') }}</span>

                            </div>
                            <div class=" col-md-12 mb-3">
                                <label for="input10" class="form-label mb-0">Delivery Challan</label>
                                <input type="number"value="{{old('DeliveryChallan')}}" class="form-control @error('DeliveryChallan') is-invalid @enderror" id="DeliveryChallan" name="DeliveryChallan" placeholder="D.C">
                                <span class="text-danger">{{ $errors->first('DeliveryChallan') }}</span>

                            </div>
                            <div class=" col-md-12 mb-3">
                                <label for="input10" class="form-label mb-0">weight In</label>
                                <input type="number"value="{{old('weightIn')}}" class="form-control  @error('weightIn') is-invalid @enderror" id="weightIn" name="weightIn" placeholder="Weight-in">
                                <span class="text-danger">{{ $errors->first('weightIn') }}</span>

                            </div>
                            <div class=" col-md-12 mb-3">
                                <label for="input10" class="form-label mb-0">Packets In</label>
                                <input type="number"value="{{old('PacketsIn')}}" class="form-control  @error('PacketsIn') is-invalid @enderror" id="PacketsIn" name="PacketsIn" placeholder="Packets_in">
                                <span class="text-danger">{{ $errors->first('PacketsIn') }}</span>

                            </div>
                            <div class=" col-md-12 mb-3">
                                <label for="input10" class="form-label mb-0">Weight Out</label>
                                <input type="number"value="{{old('weightOut')}}" class="form-control  @error('weightOut') is-invalid @enderror" id="weightOut" name="weightOut" placeholder="Weight-out">
                                <span class="text-danger">{{ $errors->first('weightOut') }}</span>

                            </div>
                            <div class=" col-md-12 mb-3">
                                <label for="input10" class="form-label mb-0">No Cartons</label>
                                <input type="number"value="{{old('NoCartons')}}" class="form-control  @error('NoCartons') is-invalid @enderror" id="NoCartons" name="NoCartons" placeholder="No Cartons">
                                <span class="text-danger">{{ $errors->first('NoCartons') }}</span>

                            </div>

                            <div class="col-md-12">
                                <div class="d-md-flex d-grid align-items-center gap-3">
                                    <button type="submit" class="btn btn-primary px-4">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

              </div>
            </div>
        </div>

@endsection
