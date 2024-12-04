@extends('admin.layout.master');
@section('main-content')
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Forms</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Form Layouts</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary">Settings</button>
                    <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
                        <a class="dropdown-item" href="javascript:;">Another action</a>
                        <a class="dropdown-item" href="javascript:;">Something else here</a>
                        <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
                    </div>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="row">
            <div class="col-xl-6 mx-auto">
                <form id="add record" name="add record" method="post" action="/admin/rawmaterials/purchase_order">
                    @csrf
                <div class="card">
                    <div class="card-body p-4">
                        <h5 class="mb-4">Purchase Order Add</h5>
                        <form class="row g-3">
                            <div class="col-md-6">
                                <label for="input1" class="form-label">POno</label>
                                <input type="text" class="form-control" id="po_no" name="po_no" placeholder="POno">
                            </div>
                            <div class="col-md-6">
                                <label for="input2" class="form-label">Date</label>
                                <input type="text" class="form-control" id="date" name="date" placeholder="Date">
                            </div>
                            <div class="col-md-12">
                                <label for="input3" class="form-label">Description of Goods</label>
                                <input type="text" class="form-control" id="dscp" name="dscp" placeholder="Description of Goods">
                            </div>
                            <div class="col-md-12">
                                <label for="input4" class="form-label">Quantity</label>
                                <input type="text" class="form-control" id="qty" name="qty" placeholder="Quantity">
                            </div>
                            <div class="col-md-12">
                                <label for="input5" class="form-label">Order by</label>
                                <input type="text" class="form-control" id="order_by" name="order_by" placeholder="Order by">
                            </div>
                                <div class="col-md-12">
                                <div class="d-md-flex d-grid align-items-center gap-3">
                                    <button type="submit" class="btn btn-primary px-4">Submit</button>
                                    <button type="submit" class="btn btn-light px-4">Reset</button>
                                </div>
                            </div>
                        </form>
                        </form>
                    </div>
                </div>

@endsection