@extends('store.store_dashboard')

@section('store')
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Store</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Vendor</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body">
                <div class="d-lg-flex align-items-center mb-4 gap-3">
                    <form method="GET" action="{{ route('raw-materialout.title.search') }}">
                        <div class="d-lg-flex">
                            <div class="pt-2">
                                {{-- <label for="Title" class="form-label">Title</label> --}}
                                <select class="form-select @error('Title') is-invalid @enderror" name="Title" id="title" aria-label="Default select example">
                                    <option value="">Open this select Title</option>
                                    @foreach ($rawmaterials as $rawmaterial )
                                        <option value="{{ $rawmaterial->Title }}" {{ old('Title') == $rawmaterial->Title ? 'selected' : '' }}>{{ $rawmaterial->Title }}</option>
                                    @endforeach
                                </select>
                                {{-- <span class="text-danger">{{ $errors->first('Title') }}</span> --}}
                            </div>
                            <div class="p-2">
                                <button type="submit" class="btn btn-success">Search</button>
                            </div>
                            <div class="pt-2">
                                <a href="{{ url('/hr/currentjob') }}">
                                    <button type="button" class="btn btn-danger">Reset</button>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>

                @if($rawmaterials->count() > 0)
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Serial No:</th>
                                <th>Date</th>
                                <th>Description</th>
                                <th>Delivery Chalan:</th>
                                <th>Quantity In:</th>
                                <th>Quantity out:</th>
                                <th>Balance:</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rawmaterials as $rawmaterial)
                            <tr>
                                <td>{{ $rawmaterial->s_no }}</td>
                                <td>{{ $rawmaterial->date }}</td>
                                <td>{{ $rawmaterial->dscp }}</td>
                                <td>{{ $rawmaterial->d_c }}</td>
                                <td>{{ $rawmaterial->qty_in }}</td>
                                <td>{{ $rawmaterial->qty_out }}</td>
                                <td>{{ $rawmaterial->blc }}</td>
                                <td>
                                    <div class="d-flex order-actions">
                                        <!-- Form for editing -->
                                        {{-- <form method="post" action="{{ route('raw-materialout.edit', $rawmaterial->id) }}">
                                            @csrf
                                            @method('GET')
                                            <button type="submit" class="btn btn-primary">Edit</button>
                                        </form> --}}
                                    </div>
                                </td>
                            </tr>
                            <!-- Form for input below each record -->
                            <tr>
                                {{-- <td colspan="8">
                                    <form method="post" action="{{ route('raw-materialout.store') }}">
                                        @csrf

                                        <input type="hidden" name="rawmaterial_id" value="{{ $rawmaterial->id }}">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="new_qty_out_{{ $rawmaterial->id }}">New Quantity Out:</label>
                                                <input type="text" id="new_qty_out_{{ $rawmaterial->id }}" name="qty_out" class="form-control" placeholder="Enter new quantity out">
                                            </div>
                                            {{-- <div class="col-md-3">
                                                <label for="comment_{{ $rawmaterial->id }}">Comment:</label>
                                                <input type="text" id="comment_{{ $rawmaterial->id }}" name="comment" class="form-control" placeholder="Enter comment">
                                            </div> --}}
                                            {{-- <div class="col-md-3"> --}}
                                                {{-- <button type="submit" class="btn btn-success mt-4">Submit</button> --}}
                                            {{-- </div> --}}
                                        </div>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="mt-5">
                    {{-- {!! $rawmaterials->withQueryString()->links('pagination::bootstrap-5') !!} --}}
                </div>
                @else
                <div class="alert alert-danger">No record found</div>
                @endif
            </div>
        </div>
    </div>
</div>
<!--end page wrapper -->
@endsection
