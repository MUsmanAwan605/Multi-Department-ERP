@extends('store.store_dashboard')
@section('store')
<!--start page wrapper -->
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
                        <li class="breadcrumb-item active" aria-current="page">Raw Material Products</li>
                    </ol>
                </nav>
            </div>
        </div>
       <!--Message  Start-->
       @if (session('success'))
       <div class="alert alert-success" id="alertMessage">
           {{ session('success') }}
       </div>
       <script>
           setTimeout(function(){
               document.getElementById('alertMessage').style.display = 'none';
           }, 3000);
       </script>
   @endif
<!--Message  End-->

        <div class="card">
            <div class="card-body">
                <div class="d-lg-flex align-items-center mb-4 gap-3">
                    <form method="GET"  action="{{ route('rawbrandprod.search') }}">
                        <div class="d-lg-flex">
                            <div class="col-8">
                                <input type="search" name="search" class="form-control" placeholder="Search By Product" >
                            </div>
                            <div class="ms-2">
                                <button type="submit" class="btn btn-success">Search</button>
                            </div>
                            <div class="ms-2">
                                <a href="/store/rawbrandprod">
                                    <button type="button" class="btn btn-danger">Reset</button>
                                </a>
                            </div>
                        </div>
                    </form>

                  <div class="ms-auto"><a href="{{ route('rawbrandprod.create') }}" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add Raw Material Products</a></div>
                </div>
                @if($rawBrandsprods->count() > 0)
                                <!--end breadcrumb-->
                                        <div class="table-responsive">
                                            <table class="table mb-0" id="hiringTable">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Date </th>
                                                        {{-- <th>Brand </th> --}}
                                                        <th>Product </th>
                                                        <th>Quantity In </th>
                                                        <th>Quantity Out </th>
                                                        <th>Balance</th>
                                                        <th>Description </th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($rawBrandsprods as $rawBrandsprod)
                                                    <tr>
                                                        <td>{{ $rawBrandsprod->date }}</td>

                                                        {{-- @foreach($rawBrands as $rawBrand) --}}
                                                        {{-- @if($rawBrandsprod->rbrand_id == $rawBrand->title) --}}
                                                        {{-- <td>{{ $rawBrandsprod->rbrand_id }}</td> --}}

                                                        {{-- <td>{{ $rawBrandsprod->brand->title }}</td> --}}
                                                        {{-- @endif --}}
                                                    {{-- @endforeach --}}
                                                        <td>{{ $rawBrandsprod->prod }}</td>


                                                        <td>{{ $rawBrandsprod->qty_in }}</td>
                                                        <td>{{ $rawBrandsprod->qty_out }}</td>
                                                        <td>{{ $rawBrandsprod->qty_in - $rawBrandsprod->qty_out }}</td>
                                                        <td>{{ $rawBrandsprod->description }}</td>
                                                        <td>
                                                            <div class="d-flex order-actions">
                                                                {{-- <a href="{{route('rawbrandprod.edit', $rawBrandsprod->id)}}"><i class='bx bxs-edit'></i></a> --}}
                                                                <form method="POST" action="{{route('rawbrandprod.destroy', $rawBrandsprod->id)}}">
                                                                    @csrf
                                                                    {{ method_field('DELETE') }}
                                                                    <button type="submit" onclick="return confirm('Are you sure you want to delete?')" style="outline:none;border:none;background:transparent">
                                                                        <a href="{{ route('rawbrandprod.destroy',['id'=>$rawBrandsprod->id]) }}" class="ms-3"><i class='bx bxs-trash'></i></a>
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
                                            {!! $rawBrandsprods->withquerystring()->links('pagination::bootstrap-5') !!}
                                        </div>
                                    </div>
                                    @else
                                    <div class="alert alert-danger">NO Record Found</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!--end page wrapper -->



                    </table>
                </div>
            </div>
        </div>


    </div>
</div>
<!--end page wrapper -->
<style>
    /* Add a border between tables */
    .card + .card {
        border-top: 1px solid #000000;
        margin-top: 20px; /* Adjust as needed */
    }
</style>

@endsection
