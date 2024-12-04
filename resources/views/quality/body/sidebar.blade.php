<!--sidebar wrapper -->
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('backend/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Rocker</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
        </div>
     </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="/{{Auth::user()->role}}/dashboard">
                <div class="parent-icon"><i class='bx bx-home-alt'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Inspectors</div>
            </a>
            <ul>
                <li> <a href="/qa/inspectors"><i class='bx bx-radio-circle'></i>View Inspectors</a>
                </li>
                <li> <a href="/qa/inspectors/create"><i class='bx bx-radio-circle'></i>Add Inspector</a>

                </li>

                        <li><a href="javascript:;" class="has-arrow"><i class="bx bx-radio-circle"></i>Total Inspection</a>
                        <ul>
                            <li><a href="/qa/total/inspectors"><i class='bx bx-radio-circle'></i>View Total</a></li>
                            <li><a href="/qa/total/inspectors/create"><i class='bx bx-radio-circle'></i>Add Total</a></li>
                        </ul>

        </li>
      </li>




            </ul>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Stationary Order</div>
            </a>
            <ul>
                    <ul>
                        <li><a href="/qa/order"><i class='bx bx-radio-circle'></i>View Order</a></li>
                        <li><a href="{{route('quality.order.create')}}"><i class='bx bx-radio-circle'></i>Add Order</a></li>
                    </ul>


            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Quality Assurance</div>
            </a>
            <ul>
            <li><a href="javascript:;" class="has-arrow"><i class="bx bx-radio-circle"></i>File Upload</a>
                <ul>
                    <li> <a href="/qa/file-upload"><i class='bx bx-radio-circle'></i>View File Upload</a>
                    </li>
                    <li> <a href="/qa/file-upload/create"><i class='bx bx-radio-circle'></i>Add File Upload</a>
                    </li>
                </ul>
            </li>

                <li><a href="javascript:;" class="has-arrow"><i class="bx bx-radio-circle"></i>Monthly Summary</a>
                    <ul>
                        <li><a href="/qa/summary/quality"><i class='bx bx-radio-circle'></i>View Summary</a></li>
                        <li><a href="/qa/summary/quality/create"><i class='bx bx-radio-circle'></i>Add Summary Result</a></li>
                    </ul>
                </li>

                <li><a href="javascript:;" class="has-arrow"><i class="bx bx-radio-circle"></i>X-R Chart</a>
                    <ul>
                        <li><a href="/qa/XR"><i class='bx bx-radio-circle'></i>View X-R Chart</a></li>
                        <li><a href="/qa/XR/create"><i class='bx bx-radio-circle'></i>Add X-R Chart Result</a></li>
                    </ul>
                </li>

                <li><a href="javascript:;" class="has-arrow"><i class="bx bx-radio-circle"></i>Capability Report</a>
                    <ul>
                        <li><a href="/qa/capability"><i class='bx bx-radio-circle'></i>View Report</a></li>
                        <li><a href="/qa/capability/create"><i class='bx bx-radio-circle'></i>Add Report</a></li>
                    </ul>
                </li>

                <li><a href="javascript:;" class="has-arrow"><i class="bx bx-radio-circle"></i>P Chart</a>
                    <ul>
                        <li><a href="/qa/pchart"><i class='bx bx-radio-circle'></i>View P Chart</a></li>
                        <li><a href="/qa/pchart/create"><i class='bx bx-radio-circle'></i>Add P Chart Record</a></li>
                    </ul>
                </li>


            </ul>
        </li>



            <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Store</div>
            </a>
            <ul>
                <li> <a href="javascript:;" class="has-arrow"><i class="bx bx-category"></i>Raw Material</a>
                <ul>
                    <li><a href="javascript:;" class="has-arrow"><i class="bx bx-radio-circle"></i>Purchase Orders</a>
                    <ul>
                        <li><a href="/qa/raw/po"><i class='bx bx-radio-circle'></i>View Purchase Orders</a></li>
                        <li><a href="/qa/raw/po/create"><i class='bx bx-radio-circle'></i>Add Purchase Order</a></li>
                    </ul>
                </li>

                <li><a href="javascript:;" class="has-arrow"><i class="bx bx-radio-circle"></i>Orders Recieved</a>
                    <ul>
                        <li><a href="/qa/raw/orders"><i class='bx bx-radio-circle'></i>View Recieved Orders</a></li>
                        <li><a href="/qa/raw/orders/create"><i class='bx bx-radio-circle'></i>Add Recieved Order</a></li>
                    </ul>
                </li>

                </ul>
                </li>
                <li> <a href="javascript:;" class="has-arrow"><i class="bx bx-category"></i>Finished Goods</a>
                    <ul>
                        <li> <a href="/qa/finish"><i class='bx bx-radio-circle'></i>View Finished Goods</a>
                        </li>
                        <li> <a href="/qa/finish/create"><i class='bx bx-radio-circle'></i>Add Finished Goods</a>
                        </li>
                    </ul>
                </li>
                <li> <a href="javascript:;" class="has-arrow"><i class="bx bx-category"></i>Sub Supplier</a>
                <ul>
                    <li><a href="javascript:;" class="has-arrow"><i class="bx bx-radio-circle"></i>Purchase Orders</a>
                    <ul>
                        <li><a href="/qa/supplier/po"><i class='bx bx-radio-circle'></i>View Purchase Orders</a></li>
                        <li><a href="/qa/supplier/po/create"><i class='bx bx-radio-circle'></i>Add Purchase Order</a></li>
                    </ul>
                </li>

                <li><a href="javascript:;" class="has-arrow"><i class="bx bx-radio-circle"></i>Orders Recieved</a>
                    <ul>
                        <li><a href="/qa/supplier/orders"><i class='bx bx-radio-circle'></i>View Recieved Orders</a></li>
                        <li><a href="/qa/supplier/orders/create"><i class='bx bx-radio-circle'></i>Add Recieved Order</a></li>
                    </ul>
                </li>

                <li><a href="javascript:;" class="has-arrow"><i class="bx bx-radio-circle"></i>Inventory</a>
                    <ul>
                        <li><a href="/qa/supplier/inventory"><i class='bx bx-radio-circle'></i>View Inventory</a></li>
                        <li><a href="/qa/supplier/inventory/create"><i class='bx bx-radio-circle'></i>Add Inventory</a></li>
                    </ul>
                </li>

                </ul>
                </li>
                <li> <a href="javascript:;" class="has-arrow"><i class="bx bx-category"></i>Stationery</a>
                <ul>
                    <li><a href="javascript:;" class="has-arrow"><i class="bx bx-radio-circle"></i>Purchase Orders</a>
                    <ul>
                        <li><a href="/qa/stationery/po"><i class='bx bx-radio-circle'></i>View Purchase Orders</a></li>
                        <li><a href="/qa/stationery/po/create"><i class='bx bx-radio-circle'></i>Add Purchase Order</a></li>
                    </ul>
                </li>

                <li><a href="javascript:;" class="has-arrow"><i class="bx bx-radio-circle"></i>Orders Recieved</a>
                    <ul>
                        <li><a href="/qa/stationery/orders"><i class='bx bx-radio-circle'></i>View Recieved Orders</a></li>
                        <li><a href="/qa/stationery/orders/create"><i class='bx bx-radio-circle'></i>Add Recieved Order</a></li>
                    </ul>
                </li>

                <li><a href="javascript:;" class="has-arrow"><i class="bx bx-radio-circle"></i>Stationery Issued</a>
                    <ul>
                        <li><a href="/qa/stationery/issued"><i class='bx bx-radio-circle'></i>View Stationery Issued</a></li>
                        <li><a href="/qa/stationery/issued/create"><i class='bx bx-radio-circle'></i>Add Stationery Issued</a></li>
                    </ul>
                </li>

                </ul>
                </li>
            </ul>
        </li>
    </ul>
    <!--end navigation-->
</div>
<!--end sidebar wrapper -->
