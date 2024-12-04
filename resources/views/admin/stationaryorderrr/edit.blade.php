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
                        <li class="breadcrumb-item active" aria-current="page">Stationary Order</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->
        <div class="row">
            <div class="col-lg-6 ">
                <div class="border border-3 p-4 rounded">
                <form method="post" action="{{route('adminstoreorder.update',['id'=>$order->id])}}">
                    @csrf
                    @method('put')
                <div class="card">
                    <div class="card-body p-4">
                        <h5 class="mb-4">Add Inventory</h5>
                        <form class="row g-3">
                            <div class=" col-md-12 mb-3">
                                <label for="date" class="form-label mb-0">Date</label>
                                <input type="date" value="{{old('date',$order->date)}}" class="form-control @error('date') is-invalid @enderror " id="date" name="date" placeholder="Date">
                                <span class="text-danger">{{ $errors->first('date') }}</span>
                            </div>

                            <div class="mb-3">
                                <label for="Title" class="form-label">Title</label>
                                <select class="form-select @error('Title') is-invalid @enderror" name="Title" id="Title" aria-label="Default select example">
                                    <option value="">Select Title</option>
                                    @foreach ($stocks as $stock)
                                        <option value="{{ $stock->title }}" {{ old('Title',$order->title) == $stock->title ? 'selected' : NUll }}>{{ $stock->title }}</option>
                                    @endforeach
                                </select>
                                @error('Title')
                                    <span class="text-danger text-uppercase">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="input4" class="form-label mb-0">Quantity</label>
                                <input type="text"value="{{old('Quantity',$order->qty)}}" class="form-control @error('Quantity') is-invalid @enderror" id="Quantity" name="Quantity" placeholder="Quantity">
                                <span class="text-danger">{{ $errors->first('Quantity') }}</span>

                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="EmployeeID" class="form-label">Department</label>
                                <select class="form-select @error('Department') is-invalid @enderror" name="Department" id="EmployeeName">
                                    <option value="none">Open this select Department</option>
                                    @foreach ($Departments as $Department)
                                        <option value="{{ $Department->name }}"
                                            {{ old('Department', $order->dpt) == $Department->name ? 'Selected' : NULL }}>
                                            {{ $Department->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <span class="text-danger text-uppercase">{{ $errors->first('Department') }}</span>
                            </div>


                            <div class="col-md-12">
                                <div class="d-md-flex d-grid align-items-center gap-3">
                                    <button type="submit" class="btn btn-primary px-4">Submit</button>
                                </div>
                            </div>





                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
        </div>

@endsection
