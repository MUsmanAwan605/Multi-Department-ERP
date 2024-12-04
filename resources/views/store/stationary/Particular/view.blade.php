@extends('admin.layout.master');
@section('main-content')
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Stationary</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">particular</li>
                    </ol>
                </nav>
            </div>
            <!-- <div class="ms-auto">
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
            </div> -->
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body">
                <div class="d-lg-flex align-items-center mb-4 gap-3">
                   <div class="col-6">
                    <form method="get" action="{{route("particular.search")}}">
                        @csrf
                  <div class="d-lg-flex">
                        <div class="col-lg-3">
                        <label class="form-label   ms-1" for="date1">Enter Starting Date  <span class="text-danger">*</span></label>
                        <input type="date" name="date1" value="{{$date1}}" class="form-control">
                    </div>
                    <div class="ms-3 col-lg-3">
                        <label class="form-label  ms-1" for="date2">Enter Ending Date  <span class="text-danger">*</span></label>
                        <input type="date" name="date2" value="{{$date2}}" class="form-control">

                    </div>
                    <div class="ms-3 col-lg-4">
                        <label class="form-label  ms-1" for="particular">Enter Particular Name  <span class="text-danger">*</span></label>
                        <input type="text" name="particular" value="{{$particular}}" class="form-control">

                    </div>
                    <div class=" ms-4 mt-4">
                        <button type="submit" class=" mt-2 btn btn-sm btn-success">Search</button>
                    </div>
                    <div class="ms-2 mt-4">
                        <a href="/admin/store/stationary/particular">
                        <button type="button" class=" mt-2 btn btn-sm btn-danger">Reset</button>
                       </a>
                    </div>
                </div>
                    </form>
                </div>
                  <div class="ms-auto"><a href="/admin/store/stationary/particular/create" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add Particular</a></div>
                  @if (session('success'))
                    <div>{{ session('success') }}</div>
                  @endif
                </div>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Particular</th>
                                <th>Date</th>
                                <th>Stock</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($records as $record)
                            <tr>
                                <td>{{$record->particular}}</td>
                                <td>{{$record->date}}</td>
                                <td>{{$record->stock}}</td>


                                <td>
                                    <div class="d-flex order-actions">
                                        <a href="/admin/store/stationary/particular/{{$record->id}}/edit" class=""><i class='bx bxs-edit'></i></a>
                                        <form method="post" action="/admin/store/stationary/particular/{{$record->id}}">
												@csrf
												{{method_field('DELETE')}}
													<button type="submit" class="ms-2" style="padding: 9px 10px;outline:none;border:none;border-radius:5px;">
												<i class='bx bxs-trash'></i>
											</button>
											</form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
</div>
<!--end page wrapper -->
@endsection
