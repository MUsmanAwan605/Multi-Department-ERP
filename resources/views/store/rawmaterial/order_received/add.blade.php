@extends('admin.layout.master');
@section('main-content')
<div class="page-wrapper">
<div class="card">
    <form name="addrecord" id="addrecord" method="post" action="/admin/rawmaterials/order_received">
        @csrf
    <div class="card-body p-4">
        <h5 class="mb-4">Vertical Icon</h5>
        <form class="row g-3">
            {{-- <div class="col-md-6">
                <label for="input13" class="form-label">Id</label>
                <div class="position-relative input-icon">
                    <input type="text" class="form-control" id="id" name="id" placeholder="Id">
                    <span class="position-absolute top-50 translate-middle-y"><i class='bx bx-user'></i></span>
                </div>
            </div> --}}
            <div class="col-md-6">
                <label for="input14" class="form-label">S.No</label>
                <div class="position-relative input-icon">
                    <input type="text" class="form-control" id="s_no" name="s_no" placeholder="S.No">
                    <span class="position-absolute top-50 translate-middle-y"><i class='bx bx-user'></i></span>
                </div>
            </div>
            <div class="col-md-12">
                <label for="input15" class="form-label">Date</label>
                <div class="position-relative input-icon">
                    <input type="text" class="form-control" id="date" name="date" placeholder="Date">
                    <span class="position-absolute top-50 translate-middle-y"><i class='bx bx-microphone'></i></span>
                </div>
            </div>
            <div class="col-md-12">
                <label for="input16" class="form-label">Description of Goods</label>
                <div class="position-relative input-icon">
                    <input type="text" class="form-control" id="dscp" name="dscp" placeholder="Description of Goods">
                    <span class="position-absolute top-50 translate-middle-y"><i class='bx bx-envelope'></i></span>
                </div>
            </div>
            <div class="col-md-12">
                <label for="input17" class="form-label">D.C</label>
                <div class="position-relative input-icon">
                    <input type="D.C" class="form-control" id="d_c" name="d_c" placeholder="D.C">
                    <span class="position-absolute top-50 translate-middle-y"><i class='bx bx-lock-alt'></i></span>
                </div>
            </div>
            <div class="col-md-12">
                <label for="input18" class="form-label">Qty-in</label>
                <div class="position-relative input-icon">
                    <input type="text" class="form-control" id="qty_in" name="qty_in" placeholder="Qty-in">
                    <span class="position-absolute top-50 translate-middle-y"><i class='bx bx-calendar'></i></span>
                </div>
            </div>
            <div class="col-md-12">
                <label for="input18" class="form-label">Order by Supplier</label>
                <div class="position-relative input-icon">
                    <input type="text" class="form-control" id="order_by_supplier" name="order_by_supplier" placeholder="Order by Supplier">
                    <span class="position-absolute top-50 translate-middle-y"><i class='bx bx-calendar'></i></span>
                </div>
            </div>
            
            <div class="col-md-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="input24">
                    <label class="form-check-label" for="input24">Check me out</label>
                </div>
            </div>
            <div class="col-md-12">
                <div class="d-md-flex d-grid align-items-center gap-3">
                    <button type="submit" class="btn btn-primary px-4">Submit</button>
                    <button type="submit" class="btn btn-light px-4">Reset</button>
                </div>
            </div> 
        </form>
    </div>
</form>
</div>
</div>
@endsection