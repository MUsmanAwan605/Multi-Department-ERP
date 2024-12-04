
@extends('admin.admin_dashboard')
@section('qa')
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
								<li class="breadcrumb-item active" aria-current="page">Production Item</li>
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
			  <form method="POST" action="/admin/store/product/{{$product->id}}" >
				@csrf
				<div class="card">
				  <div class="card-body p-4">
					  <h5 class="card-title">Add Production Item</h5>
					  <hr/>
                       <div class="form-body mt-4">
                        <div class="row">
						   <div class="col-lg-8">
                           <div class="border border-3 p-4 rounded">
							<div class="mb-3">
								<label for="month" class="form-label">Item</label>
								<input type="month" name="month" value="{{old('month')}}" class="form-control @error('month') is-invalid @enderror" id="month" month="month" >
								<span class="text-danger">{{ $errors->first('Item') }}</span>

							  </div>
                              <div class="mb-3">
                                <label for="part_name" class="form-label">Item Name</label>
                                <select class=" form-select @error('part_name') is-invalid @enderror"  name="part_name" id="part_name">
									    <option value="none">--Item Name--</option>
									    <option value="ALSON" {{old('part_name') == 'ALSON' ? 'selected' : NULL}}>ALSON </option></a>
									    <option value="MUWWADAT INDUSTRIES" {{old('part_name') == 'MUWWADAT INDUSTRIES' ? 'selected' : NULL}}>MUWWADAT INDUSTRIES </option>
                                        <option value="EPL" {{old('part_name') == 'EPL' ? 'selected' : NULL}}> EPL</option>
                                        <option value="Wire Brown" {{old('part_name') == 'Wire Brown' ? 'selected' : NULL}}> MUSTUFA PLASTIC</option>
                                        <option value="SADIQ MAMO" {{old('part_name') == 'SADIQ MAMO' ? 'selected' : NULL}}>SADIQ MAMO</option>
                                        <option value="RED CLIP" {{old('part_name') == 'RED CLIP' ? 'selected' : NULL}}>RED CLIP </option>
                                        <option value="GREEN CLIP" {{old('part_name') == 'GREEN CLIP' ? 'selected' : NULL}}>GREEN CLIP</option>
                                        <option value="EACH 2500 PCS" {{old('part_name') == 'EACH 2500 PCS' ? 'selected' : NULL}}>EACH 2500 PCS</option>
                                        <option value="Wire Red" {{old('part_name') == 'Wire Red' ? 'selected' : NULL}}>Wire Red</option>
                                        <option value="White Wire" {{old('part_name') == 'White Wire' ? 'selected' : NULL}}>White Wire</option>
                                        <option value="Green Wire" {{old('part_name') == 'Green Wire' ? 'selected' : NULL}}>Green Wire</option>
                                        <option value="Blue Wire" {{old('part_name') == 'Blue Wire' ? 'selected' : NULL}}>Blue Wire</option>
                                        <option value="Sealing ROll" {{old('part_name') == 'Sealing ROll' ? 'selected' : NULL}}>Sealing ROll</option>
                                        <option value="Exhaust Pipe Roll" {{old('part_name') == 'Exhaust Pipe Roll' ? 'selected' : NULL}}>Exhaust Pipe Roll</option>
                                        <option value="Sleeve Pipe" {{old('part_name') == 'Sleeve Pipe' ? 'selected' : NULL}}>Sleeve Pipe</option>
                                        <option value="T-10 Clip" {{old('part_name') == 'T-10 Clip' ? 'selected' : NULL}}>T-10 Clip</option>
                                        <option value="ZS Clip" {{old('part_name') == 'ZS Clip' ? 'selected' : NULL}}>ZS Clip</option>
                                        <option value="DIS Clip/ Button Pin" {{old('part_name') == 'DIS Clip/ Button Pin' ? 'selected' : NULL}}>DIS Clip/ Button Pin</option>
                                        <option value="FT-Clip Packet" {{old('part_name') == 'FT-Clip Packet' ? 'selected' : NULL}}>FT-Clip Packet</option>
                                        <option value="Green K Clip Packet" {{old('part_name') == 'Green K Clip Packet' ? 'selected' : NULL}}>Green K Clip Packet</option>
                                        <option value="FT-Clip Reel" {{old('part_name') == 'FT-Clip Reel' ? 'selected' : NULL}}>FT-Clip Reel</option>
                                        <option value="Green K Clip Reel" {{old('part_name') == 'Green K Clip Reel' ? 'selected' : NULL}}>Green K Clip Reel</option>
                                        <option value="Earth Clip" {{old('part_name') == 'Earth Clip' ? 'selected' : NULL}}>Earth Clip</option>
                                        <option value="FT-Clip AGS Ashfaq Bhai" {{old('part_name') == 'Grommet CG-125' ? 'selected' : NULL}}>Grommet CG-125</option>
                                        <option value="MT-Clip AGS Ashfaq Bhai" {{old('part_name') == 'MT-Clip AGS Ashfaq Bhai' ? 'selected' : NULL}}>MT-Clip AGS Ashfaq Bhai</option>
                                        <option value="6ZS Cuppler" {{old('part_name') == '6ZS Cuppler' ? 'selected' : NULL}}>6ZS Cuppler</option>
                                        <option value="Led Wire Nipple" {{old('part_name') == 'Led Wire Nipple' ? 'selected' : NULL}}>Led Wire Nipple</option>
                                        <option value="TM Clip Y9 Silver" {{old('part_name') == 'Tube Battery Breather CD-100' ? 'selected' : NULL}}>Tube Battery Breather CD-100</option>
                                        <option value="Alson Clip Gold" {{old('part_name') == 'Alson Clip Gold' ? 'selected' : NULL}}>Alson Clip Gold</option>
                                        <option value="PVC/FLN" {{old('part_name') == 'PVC/FLN' ? 'selected' : NULL}}>PVC/FLN</option>
                                        <option value="Solding Rod" {{old('part_name') == 'Solding Rod' ? 'selected' : NULL}}>Solding Rod</option>
                                        <option value="Kopla Dana" {{old('part_name') == 'Kopla Dana' ? 'selected' : NULL}}>Kopla Dana</option>
                                        <option value="Talcum Powder" {{old('part_name') == 'Talcum Powder' ? 'selected' : NULL}}>Talcum Powder</option>
                                        <option value="Tube Black (14*15) CD-100 CG-125" {{old('part_name') == 'Tube Black (14*15) CD-100 CG-125' ? 'selected' : NULL}}>Tube Black (14*15) CD-100 CG-125</option>
                                        <option value="Tube Black (12*13) CD-70" {{old('part_name') == 'Tube Black (12*13) CD-70' ? 'selected' : NULL}}>Tube Black (12*13) CD-70</option>
                                        <option value="Tube Black (8*9) CD-100" {{old('part_name') == 'Tube Black (8*9) CD-100' ? 'selected' : NULL}}>Tube Black (8*9) CD-100</option>
                                        <option value="Epl spring" {{old('part_name') == 'Epl spring' ? 'selected' : NULL}}>Epl spring</option>
                                        <option value="EPl Holder Golden" {{old('part_name') == 'EPl Holder Golden' ? 'selected' : NULL}}>EPl Holder Golden</option>
                                        <option value="EPl M Clip Reel" {{old('part_name') == 'EPl M Clip Reel' ? 'selected' : NULL}}>EPl M Clip Reel</option>
                                        <option value="EPl M Golden Clip" {{old('part_name') == 'EPl M Golden Clip' ? 'selected' : NULL}}>EPl M Golden Clip</option>
                                        <option value="Gland Latto" {{old('part_name') == 'Gland Latto' ? 'selected' : NULL}}>Gland Latto</option>
                                        <option value="Grinding Wheel Disk " {{old('part_name') == 'Grinding Wheel Disk ' ? 'selected' : NULL}}>Grinding Wheel Disk </option>
                                        <option value="China Nipple" {{old('part_name') == 'China Nipple' ? 'selected' : NULL}}>China Nipple</option>
                                        <option value="Tester" {{old('part_name') == 'Tester' ? 'selected' : NULL}}>Tester</option>
                                        <option value="Cutter Plass Small" {{old('part_name') == 'Cutter Plass Small' ? 'selected' : NULL}}>Cutter Plass Small</option>
                                        <option value="Nose Plass Big" {{old('part_name') == 'Nose Plass Big' ? 'selected' : NULL}}>Nose Plass Big</option>
                                        <option value="Nose Plass Small" {{old('part_name') == 'Nose Plass Small' ? 'selected' : NULL}}>Nose Plass Small</option>
                                        <option value="Fuel Water Seprator" {{old('part_name') == 'Fuel Water Seprator' ? 'selected' : NULL}}>Fuel Water Seprator</option>
                                        <option value="Lube Filter " {{old('part_name') == 'Lube Filter ' ? 'selected' : NULL}}>Lube Filter </option>
                                        <option value="Air Filter" {{old('part_name') == 'Air Filter' ? 'selected' : NULL}}>Air Filter</option>
                                        <option value="Ghair Box Seal" {{old('part_name') == 'Ghair Box Seal' ? 'selected' : NULL}}>Ghair Box Seal</option>
                                        <option value="Sealing Fans" {{old('part_name') == 'Sealing Fans' ? 'selected' : NULL}}>Sealing Fans</option>
                                        <option value="Disk Packet" {{old('part_name') == 'Disk Packet' ? 'selected' : NULL}}>Disk Packet</option>
								</select>
                                <span class="text-danger">{{$errors->first('part_name')}}</span>
                              </div>

                              <div class="mb-3">
								<label for="month" class="form-label">Vendor</label>
								<input type="month" name="month" value="{{old('month')}}" class="form-control @error('month') is-invalid @enderror" id="month" month="month" >
								<span class="text-danger">{{ $errors->first('Vendor') }}</span>

							  </div>
                              <div class="mb-3">
                                <label for="part_name" class="form-label">Vendor Name</label>
                                <select class=" form-select @error('part_name') is-invalid @enderror"  name="part_name" id="part_name">
									    <option value="none">--Vendor Name--</option>
									    <option value="ALSON" {{old('part_name') == 'ALSON' ? 'selected' : NULL}}>ALSON </option></a>
									    <option value="MUWWADAT INDUSTRIES" {{old('part_name') == 'MUWWADAT INDUSTRIES' ? 'selected' : NULL}}>MUWWADAT INDUSTRIES </option>
                                        <option value="EPL" {{old('part_name') == 'EPL' ? 'selected' : NULL}}> EPL</option>
                                        <option value="MUSTUFA PLASTIC" {{old('part_name') == 'MUSTUFA PLASTIC' ? 'selected' : NULL}}> MUSTUFA PLASTIC</option>
                                        <option value="SADIQ MAMO" {{old('part_name') == 'SADIQ MAMO' ? 'selected' : NULL}}>SADIQ MAMO</option>
                                        <option value="RED CLIP" {{old('part_name') == 'RED CLIP' ? 'selected' : NULL}}>RED CLIP </option>
                                        <option value="GREEN CLIP" {{old('part_name') == 'GREEN CLIP' ? 'selected' : NULL}}>GREEN CLIP</option>
                                        <option value="EACH 2500 PCS" {{old('part_name') == 'EACH 2500 PCS' ? 'selected' : NULL}}>EACH 2500 PCS</option>
								</select>
                                <span class="text-danger">{{$errors->first('part_name')}}</span>
                              </div>
                              
                              <div class="mb-3">
								<label for="stock" class="form-label">Stock</label>
								<input type="stock" value="{{old('stock')}}" class="form-control @error('stock') is-invalid @enderror" id="stock" name="stock">
								<span class="text-danger">{{ $errors->first('stock') }}</span>

							  </div>
                              
                              <div class="mb-3">
								<label for="issue" class="form-label">Total Issue</label>
								<input type="issue" value="{{old('issue')}}" class="form-control @error('issue') is-invalid @enderror" id="issue" name="issue">
								<span class="text-danger">{{ $errors->first('issue') }}</span>

							  </div>

                              <div class="mb-3">
								<label for="balance" class="form-label">Balance</label>
								<input type="balance" value="{{old('balance')}}" class="form-control @error('balance') is-invalid @enderror" id="balance" name="balance">
								<span class="text-danger">{{ $errors->first('balance') }}</span>

							  </div>
                              <div class="col-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
							  
                            </div>
						   </div>
						  
                        </div>
					   </div>
					</div>
					</div>
				  </div>
				</form>
			  </div>


			</div>
		<!--end page wrapper -->
@endsection