@extends('store.store_dashboard')
@section('store')
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
                        <li class="breadcrumb-item active" aria-current="page">Stationary Product</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->
        <div class="row">
            <div class="col-lg-6 ">
                <div class="border border-3 p-4 rounded">
                <form method="post" action="{{route('stock.store')}}">
                    @csrf
                <div class="card">
                    <div class="card-body p-4">
                        <h5 class="mb-4">Add Stationary Product</h5>
                        <form class="row g-3">
                            {{-- <div class=" col-md-12 mb-3">
                                <label for="date" class="form-label mb-0">Date</label>
                                <input type="date" value="{{old('date')}}" class="form-control @error('date') is-invalid @enderror " id="date" name="date" placeholder="S.date">
                                <span class="text-danger">{{ $errors->first('date') }}</span>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="input4" class="form-label mb-0">Receipt Number</label>
                                <input type="text"value="{{old('ReceiptNumber')}}" class="form-control @error('ReceiptNumber') is-invalid @enderror" id="ReceiptNumber" name="ReceiptNumber" placeholder="ReceiptNumber">
                                <span class="text-danger">{{ $errors->first('ReceiptNumber') }}</span>

                            </div> --}}


                            <div class="mb-3">
                                <label for="Department" class="form-label">Category Product</label>
                                <select class="form-select @error('category_id') is-invalid
                                @enderror" name="Title" id="Title" aria-label="Default select example">
                                    <option value="none">select Category Product</option>
                                    @foreach ($Products as $Product )
                                    <option value="{{ $Product->title }}" {{ old('Title') == $Product->title ? 'selected': NULL  }}>{{ $Product->title }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger text-uppercase ">{{ $errors->first('Title') }}</span>
                              </div>
                            <div class="col-md-12 mb-3">
                                <label for="input4" class="form-label mb-0">Quantity</label>
                                <input type="text"value="{{old('Quantity')}}" class="form-control @error('Quantity') is-invalid @enderror" id="Quantity" name="Quantity" placeholder="Quantity">
                                <span class="text-danger">{{ $errors->first('Quantity') }}</span>

                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="input4" class="form-label mb-0">Description</label>
                                <input type="text"value="{{old('Description')}}" class="form-control @error('Description') is-invalid @enderror" id="Description" name="Description" placeholder="Description">
                                <span class="text-danger">{{ $errors->first('Description') }}</span>

                            </div>

                            <div class="col-md-12">
                                <div class="d-md-flex d-grid align-items-center gap-3">
                                    <button type="submit" class="btn btn-primary px-4">Submit</button>
                                </div>
                            </div>





                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>

@endsection
