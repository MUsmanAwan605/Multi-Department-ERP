@extends('store.store_dashboard')
@section('store')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
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
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Store</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Inventory</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="card">
                <div class="card-body">
                    <div class="d-lg-flex align-items-center mb-4 gap-3">
                        <form method="GET"  action="{{ route('inventory.search') }}">
                            <div class="d-lg-flex">
                                <div class="col-8">
                                    <input type="search" name="search" class="form-control" placeholder="Search By S.no or Name" >
                               </div>
                               <div class="ms-2">
                                     <button type="submit" class="btn btn-success">Search</button>
                               </div>
                               <div class="ms-2">
                                     <a href="/store/inventory">
                                        <button type="button" class="btn btn-danger">Reset</button>
                                     </a>
                               </div>
                           </div>
                            </form>

                        <div class="ms-auto"><a href="{{ route('inventory.create') }}"
                            class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add
                            Inventory</a></div>
                        </div>
                        @if ($inventories->count() > 0)
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>S.no</th>
                                        <th>Date</th>
                                        <th>Description</th>
                                        <th>Supplier Name</th>
                                        {{-- <th>Department Name</th> --}}
                                        <th>Quantity-in</th>
                                        {{-- <th>Quantity-Out</th> --}}
                                        {{-- <th>Balance</th> --}}
                                        <th>D.C</th>
                                        <th>Weight-in</th>
                                        <th>Packet-in</th>
                                        <th>No-Cartons</th>
                                        {{-- <th>weight Out</th> --}}
                                        <th>Actions</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    @foreach ($inventories as $inventory)
                                        <tr>
                                            <td style="vertical-align: middle">{{ date('d M Y', strtotime($inventory->date)) }}</td>
                                            <td style="vertical-align: middle">{{ $inventory->s_no }}</td>
                                            <td style="vertical-align: middle">{{ $inventory->dscp }}</td>
                                            <td style="vertical-align: middle">{{ $inventory->supp_name }}</td>
                                            {{-- <td style="vertical-align: middle">{{ $inventory->dpt_name }}</td> --}}
                                            <td style="vertical-align: middle">{{ $inventory->qty_in }}</td>
                                            {{-- <td style="vertical-align: middle">{{ $inventory->qty_out }}</td> --}}
                                            {{-- <td style="vertical-align: middle">{{ $inventory->balance }}</td> --}}
                                            <td style="vertical-align: middle">{{ $inventory->d_c }}</td>
                                            <td style="vertical-align: middle">{{ $inventory->weight_in }}</td>
                                            <td style="vertical-align: middle">{{ $inventory->packets_in }}</td>
                                            {{-- <td style="vertical-align: middle">{{ $inventory->weight_out }}</td> --}}
                                            <td style="vertical-align: middle">{{ $inventory->no_cartons }}</td>
                                            <td style="vertical-align: middle">
                                                <div class="d-flex order-actions">
                                                    <a href="{{ route('inventory.edit', $inventory->id) }}"
                                                        class=""><i class='bx bxs-edit'></i></a>

                                                    <form method="post"
                                                        action="{{ route('inventory.destroy', $inventory->id) }}">
                                                        @csrf
                                                        {{ method_field('DELETE') }}
                                                        <button type="submit" class="ms-2"
                                                            style="padding: 9px 10px;outline:none;border:none;border-radius:5px;">
                                                            <i class='bx bxs-trash'></i>
                                                        </button>
                                                    </form>
                                                </div>
                        </div>
                        </td>
                        </tr>
            @endforeach
            </tbody>
            </table>
        </div>
        <div class="mt-5">
            {!! $inventories->withQueryString()->links('pagination::bootstrap-5') !!}
        </div>
    </div>
@else
    <div class="alert alert-danger">No record found</div>
    @endif

    </div>


    </div>
    </div>
    <!--end page wrapper -->
@endsection
