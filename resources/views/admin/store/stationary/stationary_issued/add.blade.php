@extends('admin.admin_dashboard')
@section('admin')
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Stationary Issued</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Add Stationary</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->
        <div class="row">
            <div class="col-xl-8 ">
                <form method="post" action="{{route('adminstationary.index')}}">
                    @csrf
                <div class="card">
                    <div class="card-body p-4 col-12">
                        <div class="d-flex justify-content-between col-12">
                            <div class="row">
                                <div class="col-lg-12">
                            <form class="row g-3">
                                <div class="col-md-12 mb-3">
                                    <label for="input3" class="form-label">Date</label>
                                    <input type="date" class="form-control" id="date" name="date" placeholder="Date">
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="input1" class="form-label">S.no</label>
                                    <input type="number" class="form-control" id="s_no" name="s_no" placeholder="S.no">
                                </div>

                                <div class="mb-4">
                                    <label for="name" class="form-label">Particular</label>
                                    <select class=" form-select @error('particular') is-invalid @enderror"  name="particular" id="name">
                                            <option value="none">--Particular Name--</option>
                                     @foreach($particulars as $particular)
                                     <option value="{{ $particular->particular }}"> {{ $particular->particular }}</option>
                                     @endforeach
                                    </select>
                                    <span class="text-danger">{{$errors->first('particular')}}</span>
                                  </div>





                                {{-- </div> --}}
                                {{-- <div class="col-6"> --}}
                                    <div class="col-md-12 mb-3">
                                        <label for="Department" class="form-label">Department</label>
                                    <select class="form-select @error('Department') is-invalid
                                    @enderror"  name="Department"  id="Department" aria-label="Default select example">
                                        <option value="none">Open this select Department</option>
                                        @foreach ($departments as $department )
                                        <option value="{{ $department->name }}"  {{ old('Department') == $department->name ? 'selected' : NULL }} >{{ $department->name }}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger text-uppercase ">{{ $errors->first('Department') }}</span>
                                    </div>
                                {{-- </div> --}}

                                    <div class="col-md-12 mb-3">
                                        <label for="input10" class="form-label">Quantity</label>
                                        <input type="number" class="form-control" id="qty" name="qty" placeholder="Quantity">
                                    </div>





                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="d-md-flex d-grid align-items-center gap-3">
                                            <button type="submit" class="btn btn-primary px-4">Submit</button>

                                        </div>
                                    </div>
                                </div>
                            </div>



                            </form>
                        </div>
                        </form>
                    </div>
                </div>

@endsection
