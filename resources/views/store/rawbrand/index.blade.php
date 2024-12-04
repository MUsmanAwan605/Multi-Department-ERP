
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
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Raw Brand</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->
        <div class="card-body">
            @if(session('success'))
            <div id="success-message" class="alert alert-success">
                {{ session('success') }}
            </div>

            <script>
                setTimeout(function() {
                    document.getElementById('success-message').style.display = 'none';
                }, 5000); // Hide after 5 seconds
            </script>
        @endif
        <div class="card">
            <div class="card-body">
                <div class="d-lg-flex align-items-center mb-4 gap-3">
                    <form method="GET"  action="{{ route('rawbrand.search') }}">
                        <div class="d-lg-flex">
                            <div class="col-8">
                                <input type="search" name="search" class="form-control" placeholder="Search By  Name" >
                            </div>
                            <div class="ms-2">
                                <button type="submit" class="btn btn-success">Search</button>
                            </div>
                            <div class="ms-2">
                                <a href="/store/rawmaterialbrand">
                                    <button type="button" class="btn btn-danger">Reset</button>
                                </a>
                            </div>
                        </div>
                    </form>
                {{-- </div> --}}
                     <div class="ms-auto"><a href="{{route('rawbrand.create')}}" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add Raw Brand</a></div>
                </div>
                @if($rawBrands->count()>0)
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Date</th>
                                <th>Title</th>
                                <th>Description</th>

                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rawBrands as $rawBrand)
                            <tr>
                                <td style="vertical-align: middle">{{ date('d M Y', strtotime($rawBrand->date)) }}</td>
                                <td style="vertical-align: middle">{{$rawBrand->title}}</td>
                                <td style="vertical-align: middle">{{$rawBrand->descp}}</td>
                                {{-- <td style="vertical-align: middle">{{$rawBrand->d_c}}</td> --}}
                                {{-- <td style="vertical-align: middle">{{$rawBrand->qty_in}}</td> --}}
                                {{-- <td>{{$rawmaterial->qty_out}}</td> --}}
                                {{-- <td>{{$rawmaterial->blc}}</td> --}}
                                <td style="vertical-align: middle">
                                    <div class="d-flex order-actions">
                                        <a href="{{route('rawbrand.edit', $rawBrand->id)}}" class=""><i class='bx bxs-edit'></i></a>
                                        <form method="post" action="{{route('rawbrand.destroy', $rawBrand->id)}}">
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
                <div class="mt-5">
                    {!! $rawBrands->withQueryString()->links('pagination::bootstrap-5') !!}
                </div>
            </div>
        @else
            <div class="alert alert-danger">No record found</div>
            @endif
            </div>
        </div>


    </div>
</div>
<!--end page wrapper -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var successMessage = document.getElementById('success-message');
        if (successMessage) {
            setTimeout(function() {
                successMessage.style.transition = 'opacity 1s';
                successMessage.style.opacity = 0;
                setTimeout(function() {
                    successMessage.style.display = 'none';
                }, 1000);
            }, 3000); // Adjust the time (3000ms = 3 seconds) before hiding the message
        }
    });
</script>
@endsection
