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
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Stationary Issued</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->
        <div class="row">
            <div class="col-xl-8 ">
                <form method="POST" action="{{ route('adminstationary.update', $stationary->id) }}">
                    @method('PUT')
                    @csrf
                    <div class="card">
                        <div class="card-body p-4 col-12">
                            <div class="d-flex justify-content-between col-12">
                                <div class="row">
                                    <div class="col-lg-12">
                                <form class="row g-3">
                                    <div class="col-md-12 mb-3">

                                            <label for="date" class="form-label">Date</label>
                                            <input type="date" value="{{old('date',$stationary->date)}}" class="form-control @error('date') is-invalid @enderror" id="date" name="date">
                                            <span class="text-danger">{{ $errors->first('date') }}</span>

                                    </div>

                                    <div class="col-md-12 mb-3">

                                            <label for="date" class="form-label">Serial Number</label>
                                            <input type="number" value="{{old('s_no',$stationary->s_no)}}" class="form-control @error('s_no') is-invalid @enderror" id="s_no" name="s_no" placeholder="Serial Number">
                                            <span class="text-danger">{{ $errors->first('s_no') }}</span>

                                    </div>

                                    <div class="mb-4">
                                        <label for="name" class="form-label">Particular</label>
                                        <select class="form-select @error('particular') is-invalid @enderror" name="particular" id="name">
                                            <option value="none">--Particular Name--</option>
                                            @foreach($particulars as $particular)
                                                <option value="{{ $particular->particular }}"
                                                    {{ old('particular', $stationary->particular) == $particular->particular ? 'selected' : '' }}>
                                                    {{ $particular->particular }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger">{{$errors->first('particular')}}</span>
                                    </div>








                                        <div class="col-md-12 mb-3">
                                            <label for="Department" class="form-label">Department</label>
                                        <select class="form-select @error('Department') is-invalid
                                        @enderror"  name="Department"  id="Department" aria-label="Default select example">
                                            <option value="none">Open this select Department</option>
                                            @foreach ($departments as $department )
                                            <option value="{{ $department->name }}"  {{ old('Department',$stationary->issue_dpt) == $department->name ? 'selected' : NULL }} >{{ $department->name }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger text-uppercase ">{{ $errors->first('Department') }}</span>
                                        </div>
                                    {{-- </div> --}}

                                        <div class="col-md-12 mb-3">


                                                <label for="date" class="form-label">Quantity</label>
                                                <input type="number" value="{{old('qty',$stationary->qty)}}" class="form-control @error('qty') is-invalid @enderror" id="qty" name="qty">
                                                <span class="text-danger">{{ $errors->first('qty') }}</span>

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









































































                </form>
            </div>
        </div>
    </div>
</div>
@endsection
