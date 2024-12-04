@extends('admin.admin_dashboard')
@section('admin')
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Store</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Inventory</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="row">
            <div class="col-lg-12 ">
                <div class="border border-3 p-4 rounded">
                    <form method="post" action="{{ route('admininventory.update', ['id' => $inventory->id]) }}">
                        @method('PUT')
                        @csrf
                        <div class="card">
                            <div class="card-body p-4">
                                <h5 class="mb-4">Edit Inventory</h5>
                                <div class="row g-3">
                                    <div class="col-md-6 mb-3">
                                        <label for="s_no" class="form-label mb-0">S.no</label>
                                        <input type="number" value="{{ old('s_no', $inventory->s_no) }}" class="form-control @error('s_no') is-invalid @enderror" id="s_no" name="s_no" placeholder="S.no">
                                        <span class="text-danger">{{ $errors->first('s_no') }}</span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="date" class="form-label mb-0">Date</label>
                                        <input type="date" value="{{ old('date', $inventory->date) }}" class="form-control @error('date') is-invalid @enderror" id="date" name="date" placeholder="Date">
                                        <span class="text-danger">{{ $errors->first('date') }}</span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="dscp" class="form-label mb-0">Description</label>
                                        <input type="text" value="{{ old('dscp', $inventory->dscp) }}" class="form-control @error('dscp') is-invalid @enderror" id="dscp" name="dscp" placeholder="Description">
                                        <span class="text-danger">{{ $errors->first('dscp') }}</span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="SupplierName" class="form-label mb-0">Supplier Name</label>
                                        <select class="form-control @error('SupplierName') is-invalid @enderror" id="SupplierName" name="supp_name">
                                            <option value="" selected>Select Supplier</option>
                                            @foreach($Subsuppliers as $supplier)
                                                <option value="{{ $supplier->spname }}" {{ old('supp_name', $inventory->supp_name) == $supplier->spname ? 'selected' : '' }}>
                                                    {{ $supplier->spname }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger">{{ $errors->first('supp_name') }}</span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="dpt_name" class="form-label">Department</label>
                                        <select class="form-select @error('dpt_name') is-invalid @enderror" name="dpt_name" id="dpt_name">
                                            <option value="none">Open this select Department</option>
                                            @foreach ($departments as $department)
                                                <option value="{{ $department->name }}" {{ old('dpt_name',$inventory->dpt_name) == $department->name ? 'selected' : NULL }}>
                                                    {{ $department->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger text-uppercase">{{ $errors->first('dpt_name') }}</span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="qty_in" class="form-label mb-0">Quantity in</label>
                                        <input type="number" value="{{ old('qty_in', $inventory->qty_in) }}" class="form-control @error('qty_in') is-invalid @enderror" id="qty_in" name="qty_in" placeholder="Quantity in">
                                        <span class="text-danger">{{ $errors->first('qty_in') }}</span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="qty_out" class="form-label mb-0">Quantity Out</label>
                                        <input type="number" value="{{ old('qty_out', $inventory->qty_out) }}" class="form-control @error('qty_out') is-invalid @enderror" id="qty_out" name="qty_out" placeholder="Quantity Out">
                                        <span class="text-danger">{{ $errors->first('qty_out') }}</span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="balance" class="form-label mb-0">Balance</label>
                                        <input type="number" value="{{ old('balance', $inventory->balance) }}" class="form-control @error('balance') is-invalid @enderror" id="balance" name="balance" placeholder="Balance">
                                        <span class="text-danger">{{ $errors->first('balance') }}</span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="d_c" class="form-label mb-0">Delivery Challan</label>
                                        <input type="number" value="{{ old('d_c', $inventory->d_c) }}" class="form-control @error('d_c') is-invalid @enderror" id="d_c" name="d_c" placeholder="D.C">
                                        <span class="text-danger">{{ $errors->first('d_c') }}</span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="weight_in" class="form-label mb-0">Weight in</label>
                                        <input type="number" value="{{ old('weight_in', $inventory->weight_in) }}" class="form-control @error('weight_in') is-invalid @enderror" id="weight_in" name="weight_in" placeholder="Weight in">
                                        <span class="text-danger">{{ $errors->first('weight_in') }}</span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="packets_in" class="form-label mb-0">Packets in</label>
                                        <input type="number" value="{{ old('packets_in', $inventory->packets_in) }}" class="form-control @error('packets_in') is-invalid @enderror" id="packets_in" name="packets_in" placeholder="Packets in">
                                        <span class="text-danger">{{ $errors->first('packets_in') }}</span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="weightOut" class="form-label mb-0">Weight Out</label>
                                        <input type="number" value="{{ old('weightOut', $inventory->weight_out) }}" class="form-control @error('weightOut') is-invalid @enderror" id="weightOut" name="weightOut" placeholder="Weight out">
                                        <span class="text-danger">{{ $errors->first('weightOut') }}</span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="no_cartons" class="form-label mb-0">No Cartons</label>
                                        <input type="number" value="{{ old('no_cartons', $inventory->no_cartons) }}" class="form-control @error('no_cartons') is-invalid @enderror" id="no_cartons" name="no_cartons" placeholder="No Cartons">
                                        <span class="text-danger">{{ $errors->first('no_cartons') }}</span>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="d-md-flex d-grid align-items-center gap-3">
                                            <button type="submit" class="btn btn-primary px-4">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
