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
                <form method="post" action="{{route('stock.update',['id'=>$Stationary_Product->id])}}">
                    @csrf
                    @method('put')
                <div class="card">
                    <div class="card-body p-4">
                        <h5 class="mb-4">Edit Stationary Product</h5>
                        <form class="row g-3">


                            <div class="col-md-12 mb-3">
                                <label for="input3" class="form-label mb-0">Title</label>
                                <input type="text"value="{{old('Title',$Stationary_Product->title)}}" class="form-control @error('Title') is-invalid @enderror" id="Title" name="Title" placeholder="Title">
                                <span class="text-danger">{{ $errors->first('Title') }}</span>

                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="input4" class="form-label mb-0">Quantity</label>
                                <input type="text"value="{{old('Quantity',$Stationary_Product->quantity)}}" class="form-control @error('Quantity') is-invalid @enderror" id="Quantity" name="Quantity" placeholder="Quantity">
                                <span class="text-danger">{{ $errors->first('Quantity') }}</span>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="input4" class="form-label mb-0">Description</label>
                                <input type="text"value="{{old('Description',$Stationary_Product->descp)}}" class="form-control @error('Description') is-invalid @enderror" id="Description" name="Description" placeholder="Description">
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
