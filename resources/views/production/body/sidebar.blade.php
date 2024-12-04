<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="{{ asset('backend/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">Production</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
				</div>
			 </div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li>
					{{-- <a href="{{ route('production.dashboard.index') }}" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-home-alt'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a> --}}

				</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-category"></i>
						</div>
						<div class="menu-title">Product</div>
					</a>
					<ul>
						<li> <a href="{{ route('product.create') }}"><i class='bx bx-radio-circle'></i>Add Product</a>
						</li>
						<li> <a href="{{ route('product.index') }}"><i class='bx bx-radio-circle'></i>View Product</a>
						</li>
					</ul>
				</li>


				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-line-chart"></i>
						</div>
						<div class="menu-title">Order</div>
					</a>
					<ul>
						<li> <a href="/production/order/create"><i class='bx bx-radio-circle'></i>Add Order</a>
						</li>
						<li> <a href="/production/order"><i class='bx bx-radio-circle'></i>View Order</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-map-alt"></i>
						</div>
						<div class="menu-title">Raw Material</div>
					</a>
					<ul>
                        <li> <a href="/production/rawmaterial"><i class='bx bx-radio-circle'></i>Raw Material</a>
                        </li>
                        <li> <a href="/production/rawmaterial/create"><i class='bx bx-radio-circle'></i>Add Raw Material</a>
                        </li>
					</ul>
				</li>

                <li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-map-alt"></i>
						</div>
						<div class="menu-title">Stationary Order</div>
					</a>
					<ul>
						<li> <a href="{{route('production.storeorder.index')}}"><i class='bx bx-radio-circle'></i>View Order</a>
						</li>
						<li> <a href="{{route('production.storeorderrr.create')}}"><i class='bx bx-radio-circle'></i>Add Order</a>
						</li>
					</ul>
				</li>

                <li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-map-alt"></i>
						</div>
						<div class="menu-title">Finish Goods </div>
					</a>
					<ul>
                        <li> <a href="/production/finishgods"><i class='bx bx-radio-circle'></i>Finish Goods</a>
                        </li>
                        <li> <a href="/production/finishgods/create"><i class='bx bx-radio-circle'></i>Add Finish Goods</a>
                        </li>
						 <li><a href="/production/finishgoodsproducts"><i class='bx bx-radio-circle'></i>Finish Products</a>
            </li>
            <li><a href="/production/finishgoodsproducts/create"><i class='bx bx-radio-circle'></i>Add Finish Products</a>
            </li>
					</ul>
				</li>



			</ul>
			<!--end navigation-->
		</div>
