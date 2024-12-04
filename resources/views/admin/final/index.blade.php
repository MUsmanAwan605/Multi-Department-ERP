@extends('admin.admin_dashboard')
@section('admin')
    <!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">eCommerce</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="/dashboard"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Product</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
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
					</div>
				</div>
				<!--end breadcrumb-->

				<div class="card">
					<div class="card-body">
						<div class="d-lg-flex align-items-center mb-4 gap-3">
							<div class="position-relative">
								<input type="text" class="form-control ps-5 radius-30" placeholder="Search Order"> <span class="position-absolute top-50 product-show translate-middle-y"><i class="bx bx-search"></i></span>
							</div>
						  <div class="ms-auto"><a href="/admin/products/create" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add Product</a></div>
						</div>
						<div class="table-responsive">
							<table class="table mb-0">
								<thead class="table-light">
									<tr>
										<th>#</th>
										<th>Field 1</th>
										<th>Field 2</th>
										<th>Field 3</th>
										<th>Field 4</th>
                                        <th>Field 5</th>
                                        <th>Field 6</th>
										<th>Field 7</th>
										<th>Field 8</th>
										<th>Field 9</th>
										<th>Field 10</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
                                   @foreach ($products as $product)
                                   <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
                                            </div>
                                            <div class="ms-2">
                                                <h6 class="mb-0 font-14">{{$product->id}}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{$product->field_1}}</td>
                                    <td>{{$product->field_2}}</td>
                                    <td>{{$product->field_3}}</td>
                                    <td>{{$product->field_4}}</td>
                                    <td>{{$product->field_5}}</td>
                                    <td>{{$product->field_6}}</td>
                                    <td>{{$product->field_7}}</td>
                                    <td>{{$product->field_8}}</td>
                                    <td>{{$product->field_9}}</td>
                                    <td>{{$product->field_10}}</td>

                                    <td>
                                        <div class="d-flex order-actions">
                                            <a href="/admin/products/{{$product->id}}/edit" class=""><i class='bx bxs-edit'></i></a>
											<form method="post" action="/admin/products/{{$product->id}}">
												@csrf
												{{method_field('DELETE')}}
												<button type="submit" style="outline:none;border:none;background:transparent">
                                            <a href="/admin/products/{{$product->id}}/destroy" class="ms-3"><i class='bx bxs-trash'></i></a>
												</button>
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
