@extends('store.store_dashboard')

@section('store')
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">SubSuplier</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item">
                            <a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Edit</li>
                    </ol>
                </nav>
            </div>
        </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <!--end breadcrumb-->
        <div class="row">
            <div class="col-lg-6">
                <div class="border border-3 p-4 rounded">
                    <form method="POST" action="{{ route('store.order.update', ['id' => $order->id]) }}">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            <div class="card-body p-4">
                                <h5 class="mb-4">Order Issued</h5>
                                <div class="row g-3">
                                    <div class="col-md-12 mb-3">
                                        <label for="date" class="form-label mb-0">Date</label>
                                        <input type="date" value="{{ old('date',$order->date) }}"
                                               class="form-control @error('date') is-invalid @enderror"
                                               id="date" name="date" placeholder="Date" readonly>
                                        <span class="text-danger">{{ $errors->first('date') }}</span>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label for="Title" class="form-label mb-0">Title</label>
                                        <input type="text" value="{{ old('Title', $order->title) }}"
                                               class="form-control @error('Title') is-invalid @enderror"
                                               id="Title" name="Title" placeholder="Title" readonly>
                                        <span class="text-danger">{{ $errors->first('Title') }}</span>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label for="Quantity" class="form-label mb-0">Quantity</label>
                                        <input type="text" value="{{ old('Quantity', $order->qty) }}"
                                               class="form-control @error('Quantity') is-invalid @enderror"
                                               id="Quantity" name="Quantity" placeholder="Quantity" readonly>
                                        <span class="text-danger">{{ $errors->first('Quantity') }}</span>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="d-md-flex d-grid align-items-center gap-3">
                                            <button type="submit" class="btn btn-primary px-4">Issue Order</button>
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
