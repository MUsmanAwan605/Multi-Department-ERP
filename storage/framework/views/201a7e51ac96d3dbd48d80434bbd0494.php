<!-- Admin Sidebar Start -->

<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="<?php echo e(asset('backend/assets/images/logo-icon.png')); ?>" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Admin</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
        </div>
    </div>
    <ul class="metismenu" id="menu">
        <li>
            <a href="<?php echo e(route('admin.dashboard')); ?>" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home-alt'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>


            <div class="sidebar-wrapper" data-simplebar="true">
                <div class="sidebar-header">
                    <div>
                        <img src="<?php echo e(asset('backend/assets/images/logo-icon.png')); ?>" class="logo-icon" alt="logo icon">
                    </div>
                    <div>
                        <h4 class="logo-text">Admin</h4>
                    </div>
                    <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
                    </div>
                </div>
                <ul class="metismenu" id="menu">
                    <li>
                        <a href="<?php echo e(route('admin.dashboard')); ?>" class="has-arrow">
                            <div class="parent-icon"><i class='bx bx-home-alt'></i>
                            </div>
                            <div class="menu-title">Dashboard</div>
                        </a>

                    </li>


                    <li>
                        <a href="javascript:;" class="has-arrow">
                            <div class="parent-icon"><i class="bx bx-category"></i>
                            </div>
                            <div class="menu-title">Stationary Order</div>
                        </a>
                        <ul>
                            <li>
                                <a href="<?php echo e(route('adminstoreorder.index')); ?>">
                                    <i class='bx bx-radio-circle'></i> View Order
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('adminstoreorder.create')); ?>">
                                    <i class='bx bx-radio-circle'></i> Add Order
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="javascript:;" class="has-arrow">
                            <div class="parent-icon"><i class="bx bx-category"></i>
                            </div>
                            <div class="menu-title">Human Resources</div>
                        </a>
                        <ul>
                            
                            
                            <ul>
                                <li>
                                    <a href="javascript:;" class="has-arrow">
                                        <div class="parent-icon"><i class="bx bx-category"></i>
                                        </div>
                                        <div class="menu-title">Department</div>
                                    </a>
                                    <ul>
                                        <li> <a href="<?php echo e(route('admin.humanresources.departments.index')); ?>"><i
                                                    class='bx bx-radio-circle'></i>View Department </a>
                                        </li>
                                        <li> <a href="<?php echo e(route('admin.humanresources.departments.create')); ?>"><i
                                                    class='bx bx-radio-circle'></i>Add Department</a>
                                        </li>


                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:;" class="has-arrow">
                                        <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                                        </div>
                                        <div class="menu-title">Employee</div>
                                    </a>
                                    <ul>
                                        <li> <a href="<?php echo e(route('admin.humanresources.employee.index')); ?>"><i
                                                    class='bx bx-radio-circle'></i>View Employee</a>
                                        </li>
                                        <li> <a href="<?php echo e(route('admin.humanresources.employee.create')); ?>"><i
                                                    class='bx bx-radio-circle'></i>Add Employee</a>
                                        </li>


                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript:;" class="has-arrow">
                                        <div class="parent-icon"><i class="fa-solid fa-scale-unbalanced"></i>
                                        </div>
                                        <div class="menu-title">Loan</div>
                                    </a>
                                    <ul>
                                        <li> <a href="<?php echo e(route('admin.humanresources.loan.index')); ?>"><i
                                                    class='bx bx-radio-circle'></i>View Loan</a>
                                        </li>
                                        <li> <a href="<?php echo e(route('admin.search.loan')); ?>"><i
                                                    class='bx bx-radio-circle'></i>Add Loan</a>
                                        </li>

                                    </ul>
                                </li>
                                

                                <li>
                                    <a href="javascript:;" class="has-arrow">
                                        <div class="parent-icon"><i class="bx bx-repeat"></i>
                                        </div>
                                        <div class="menu-title">Salary</div>
                                    </a>
                                    <ul>
                                        <li> <a href="<?php echo e(route('admin.humanresources.salary.index')); ?>"><i
                                                    class='bx bx-radio-circle'></i>View Salary</a>
                                        </li>
                                        <li> <a href="<?php echo e(route('admin.humanresources.salary.create')); ?>"><i
                                                    class='bx bx-radio-circle'></i>Add Salary</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript:;" class="has-arrow">
                                        <div class="parent-icon"><i class="bx bx-donate-blood"></i>
                                        </div>
                                        <div class="menu-title">Orders</div>
                                    </a>
                                    <ul>
                                        <li> <a href="<?php echo e(route('admin.humanresources.orders.index')); ?>"><i
                                                    class='bx bx-radio-circle'></i>Orders Process</a>
                                        </li>

                                    </ul>
                                </li>
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
                            
                            
                            <ul>
                                <li>
                                    <a href="javascript:;" class="has-arrow">
                                        <div class="parent-icon"><i class="bx bx-category"></i>
                                        </div>
                                        <div class="menu-title">Inspectors</div>
                                    </a>
                                    <ul>
                                        <li> <a href="/admin/inspectors"><i class='bx bx-radio-circle'></i>View Inspectors</a>
                                        </li>
                                        <li> <a href="/admin/inspectors/create"><i class='bx bx-radio-circle'></i>Add Inspector</a>

                                        </li>

                                        <li><a href="javascript:;" class="has-arrow"><i class="bx bx-radio-circle"></i>Total Inspection</a>
                                            <ul>
                                                <li><a href="/admin/total/inspectors"><i class='bx bx-radio-circle'></i>View Total</a></li>
                                                <li><a href="/admin/total/inspectors/create"><i class='bx bx-radio-circle'></i>Add Total</a></li>
                                            </ul>

                            </li>


                                    </ul>
                                </li>
                                

                                <li>
                                    <a href="javascript:;" class="has-arrow">
                                        <div class="parent-icon"><i class="fa-solid fa-scale-unbalanced"></i>
                                        </div>
                                        <div class="menu-title">Monthly Summary</div>
                                    </a>
                                    <ul>
                                        <li><a href="/admin/summary/quality"><i class='bx bx-radio-circle'></i>View Summary</a></li>
                                        <li><a href="/admin/summary/quality/create"><i class='bx bx-radio-circle'></i>Add Summary Result</a></li>

                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:;" class="has-arrow">
                                        <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                                        </div>
                                        <div class="menu-title">X-R Chart</div>
                                    </a>
                                    <ul>
                                        <li><a href="/admin/XR"><i class='bx bx-radio-circle'></i>View X-R Chart</a></li>
                                        <li><a href="/admin/XR/create"><i class='bx bx-radio-circle'></i>Add X-R Chart Result</a></li>

                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript:;" class="has-arrow">
                                        <div class="parent-icon"><i class="bx bx-repeat"></i>
                                        </div>
                                        <div class="menu-title">Capability Report</div>
                                    </a>
                                    <ul>
                                        <li><a href="/admin/capability"><i class='bx bx-radio-circle'></i>View Report</a></li>
                        <li><a href="/admin/capability/create"><i class='bx bx-radio-circle'></i>Add Report</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript:;" class="has-arrow">
                                        <div class="parent-icon"><i class="bx bx-donate-blood"></i>
                                        </div>
                                        <div class="menu-title">P Chart</div>
                                    </a>
                                    <ul>
                                        <li><a href="/admin/pchart"><i class='bx bx-radio-circle'></i>View P Chart</a></li>
                                        <li><a href="/admin/pchart/create"><i class='bx bx-radio-circle'></i>Add P Chart Record</a></li>

                                    </ul>
                                </li>
                            </ul>

                            


                        </ul>
                    </li>

                    <li>
                        <a href="javascript:;" class="has-arrow">
                            <div class="parent-icon"><i class="bx bx-category"></i>
                            </div>
                            <div class="menu-title">Finance</div>
                        </a>
                        <ul>
                            
                            


                            <li>
                                <a href="javascript:;" class="has-arrow">
                                    <div class="parent-icon"><i class="bx bx-category"></i>
                                    </div>
                                    <div class="menu-title">Purchase</div>
                                </a>
                                <ul>

                                    <li> <a href="<?php echo e(route('adminfinance.orders.index')); ?>"><i
                                                class='bx bx-radio-circle'></i>Purchase Order</a>
                                    </li>
                                    <li> <a href="<?php echo e(route('adminfinance.orders.orderconfirmed')); ?>"><i
                                                class='bx bx-radio-circle'></i>Order Confirmed</a>
                                    </li>


                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" class="has-arrow">
                                    <div class="parent-icon"><i class="bx bx-category"></i>
                                    </div>
                                    <div class="menu-title">Hr-Payroll</div>
                                </a>
                                <ul>

                                    <li> <a href="<?php echo e(route('adminfinance.employees.index')); ?>"><i
                                                class='bx bx-radio-circle'></i>Employees Detail</a>
                                    </li>
                                    <li> <a href="<?php echo e(route('adminfinance.salary.index')); ?>"><i
                                                class='bx bx-radio-circle'></i>Monthly Salary</a>
                                    </li>
                                    <li> <a href="<?php echo e(route('adminfinance.loan.index')); ?>"><i
                                                class='bx bx-radio-circle'></i>Loan</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript:;" class="has-arrow">
                                    <div class="parent-icon"><i class="bx bx-category"></i>
                                    </div>
                                    <div class="menu-title">Funds</div>
                                </a>
                                <ul>
                                    <li> <a href="<?php echo e(route('admin.finance.fund.index')); ?>"><i class='bx bx-radio-circle'></i>View Funds</a>
                                    </li>
                                    <li> <a href="<?php echo e(route('admin.finance.fund.add')); ?>"><i class='bx bx-radio-circle'></i>Add New</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript:;" class="has-arrow">
                                    <div class="parent-icon"><i class="bx bx-category"></i>
                                    </div>
                                    <div class="menu-title">Expense</div>
                                </a>
                                <ul>
                                    <li> <a href="<?php echo e(route('admin.finance.expense.index')); ?>"><i class='bx bx-radio-circle'></i>View Expense</a>
                                    </li>
                                    <li> <a href="<?php echo e(route('admin.finance.expense.add')); ?>"><i class='bx bx-radio-circle'></i>Add Expense</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript:;" class="has-arrow">
                                    <div class="parent-icon"><i class="bx bx-category"></i>
                                    </div>
                                    <div class="menu-title">Receipt</div>
                                </a>
                                <ul>
                                    <li> <a href="<?php echo e(route('admin.finance.receipt.index')); ?>"><i class='bx bx-radio-circle'></i>View Receipt</a>
                                    </li>
                                    <li> <a href="<?php echo e(route('admin.finance.receipt.add')); ?>"><i class='bx bx-radio-circle'></i>Add Receipt</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript:;" class="has-arrow">
                                    <div class="parent-icon"><i class="bx bx-category"></i>
                                    </div>
                                    <div class="menu-title">Payments</div>
                                </a>
                                <ul>
                                    <li> <a href="<?php echo e(route('admin.finance.payment.index')); ?>"><i class='bx bx-radio-circle'></i>View Payment</a>
                                    </li>
                                    <li> <a href="<?php echo e(route('admin.finance.payment.add')); ?>"><i class='bx bx-radio-circle'></i>Add Payment</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript:;" class="has-arrow">
                                    <div class="parent-icon"><i class="bx bx-category"></i>
                                    </div>
                                    <div class="menu-title">Payslip</div>
                                </a>
                                <ul>
                                    <li> <a href="<?php echo e(route('admin.finance.payslip.index')); ?>"><i class='bx bx-radio-circle'></i>View Payslip</a>
                                    </li>
                                    <li> <a href="<?php echo e(route('admin.finance.payslip.add')); ?>"><i class='bx bx-radio-circle'></i>Add Payslip</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" class="has-arrow">
                                    <div class="parent-icon"><i class="bx bx-category"></i>
                                    </div>
                                    <div class="menu-title">Sale Invoice</div>
                                </a>
                                <ul>
                                    <li> <a href="<?php echo e(route('admin.finance.sale_invoice.index')); ?>"><i class='bx bx-radio-circle'></i>View Sale Invoice</a>
                                    </li>
                                    <li> <a href="<?php echo e(route('admin.finance.sale_invoice.add')); ?>"><i class='bx bx-radio-circle'></i>Add Sale Invoice</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript:;" class="has-arrow">
                                    <div class="parent-icon"><i class="bx bx-category"></i>
                                    </div>
                                    <div class="menu-title">Purchase Invoice</div>
                                </a>
                                <ul>
                                    <li> <a href="<?php echo e(route('admin.finance.purchase_invoice.index')); ?>"><i class='bx bx-radio-circle'></i>View Purchase Invoice</a>
                                    </li>
                                    <li> <a href="<?php echo e(route('admin.finance.purchase_invoice.add')); ?>"><i class='bx bx-radio-circle'></i>Add Purchase Invoice</a>
                                    </li>
                                </ul>
                            </li>




                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="has-arrow">
                            <div class="parent-icon"><img src="<?php echo e(asset('/uploads/icons/s1.ico')); ?>"
                                    style="width:35px;" alt="icon">
                            </div>
                            <div class="menu-title">Store</div>
                        </a>
                        <ul>
                            


                            <li> <a href="javascript:;" class="has-arrow"><img
                                        src="<?php echo e(asset('/uploads/icons/v1_1.ico')); ?>" style="width:30px; margin:10px"
                                        alt="icon"></i>Raw Brand</a>
                                <ul>
                                    <li> <a href="<?php echo e(route('adminrawbrand.index')); ?>"><i
                                                class='bx bx-radio-circle'></i>Raw Brand </a>

                                    <li> <a href="<?php echo e(route('adminrawbrand.create')); ?>"><i
                                                class='bx bx-radio-circle'></i>Add Brand </a>
                                    </li>
                                </ul>
                            </li>

                            <li> <a href="javascript:;" class="has-arrow"><img
                                        src="<?php echo e(asset('/uploads/icons/raw.ico')); ?>" style="width:30px; margin:10px"
                                        alt="icon"></i>Raw Material Product</a>
                                <ul>
                                    <li><a href="<?php echo e(route('adminrawmaterialproduct.index')); ?>"><i
                                                class='bx bx-radio-circle'></i> Product </a></li>
                                    <li><a href="<?php echo e(route('adminrawmaterialproduct.create')); ?>"><i
                                                class='bx bx-radio-circle'></i>Add Product </a></li>
                                </ul>
                            </li>

                            <li> <a href="javascript:;" class="has-arrow"><img
                                        src="<?php echo e(asset('/uploads/icons/raw.ico')); ?>" style="width:30px; margin:10px"
                                        alt="icon"></i>Raw Material Quantity</a>
                                <ul>
                                    <li><a href="/admin/store/rawbrandproduct"><i class='bx bx-radio-circle'></i>Raw
                                            Material </a></li>
                                    <li><a href="<?php echo e(route('adminrawbrandprod.create')); ?>"><i
                                                class='bx bx-radio-circle'></i>Add Raw Material </a></li>
                                    <li><a href="<?php echo e(route('adminquantityout.show')); ?>"><i
                                                class='bx bx-radio-circle'></i>Quantity Out</a></li>

                                </ul>
                            </li>

                            <li> <a href="javascript:;" class="has-arrow"><img
                                        src="<?php echo e(asset('/uploads/icons/v1_1.ico')); ?>" style="width:30px; margin:10px"
                                        alt="icon"></i>vendor</a>
                                <ul>
                                    <li> <a href="<?php echo e(route('adminvendor.index')); ?>"><i
                                                class='bx bx-radio-circle'></i>View vendor</a>
                                    </li>
                                    <li> <a href="<?php echo e(route('adminvendor.create')); ?>"><i
                                                class='bx bx-radio-circle'></i>Add vendor</a>
                                    </li>
                                </ul>
                            </li>

                            <li><a href="javascript:;" class="has-arrow"><img
                                        src="<?php echo e(asset('/uploads/icons/inventory.ico')); ?>"
                                        style="width:30px; margin:10px" alt="icon"></i>Inventory</a>
                                <ul>
                                    <li><a href="<?php echo e(route('admininventory.index')); ?>"><i
                                                class='bx bx-radio-circle'></i>View Inventory</a></li>
                                    <li><a href="<?php echo e(route('admininventory.create')); ?>"><i
                                                class='bx bx-radio-circle'></i>Add Inventory</a></li>
                                </ul>
                            </li>

                            
                            <li> <a href="javascript:;" class="has-arrow"><img
                                        src="<?php echo e(asset('/uploads/icons/sub.ico')); ?>" style="width:30px; margin:10px"
                                        alt="icon"></i>Sub Supplier</a>
                                <ul>

                                    <li><a href="javascript:;" class="has-arrow"><img
                                                src="<?php echo e(asset('/uploads/icons/ss.ico')); ?>"
                                                style="width:25px; margin:10px" alt="icon">Subsupplier</a>
                                        <ul>
                                            <li><a href="<?php echo e(route('adminsubsupplier.index')); ?>"><i
                                                        class='bx bx-radio-circle'></i>View Subsupplier</a></li>
                                            <li><a href="<?php echo e(route('adminsubsupplier.create')); ?>"><i
                                                        class='bx bx-radio-circle'></i>New Subsupplier</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="javascript:;" class="has-arrow"><img
                                                src="<?php echo e(asset('/uploads/icons/pur.ico')); ?>"
                                                style="width:25px; margin:10px" alt="icon"></i>Purchase Orders</a>
                                        <ul>
                                            <li><a href="<?php echo e(route('adminsubpurchase.index')); ?>"><i
                                                        class='bx bx-radio-circle'></i>View Purchase Orders</a></li>
                                            <li><a href="<?php echo e(route('adminsubpurchase.create')); ?>"><i
                                                        class='bx bx-radio-circle'></i>Add Purchase Order</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="javascript:;" class="has-arrow"><img
                                                src="<?php echo e(asset('/uploads/icons/order.ico')); ?>"
                                                style="width:25px; margin:10px" alt="icon"></i>Orders Recieved</a>
                                        <ul>
                                            <li><a href="<?php echo e(route('adminsuborder.index')); ?>"><i
                                                        class='bx bx-radio-circle'></i>View Recieved Orders</a></li>
                                            <li><a href="<?php echo e(route('adminsuborder.create')); ?>"><i
                                                        class='bx bx-radio-circle'></i>Add Recieved Order</a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </li>
                            <li> <a href="javascript:;" class="has-arrow"><img
                                        src="<?php echo e(asset('/uploads/icons/sat.ico')); ?>" style="width:30px; margin:10px"
                                        alt="icon"></i>Stationery</a>
                                <ul>
                                    <li><a href="javascript:;" class="has-arrow"><img
                                                src="<?php echo e(asset('/uploads/icons/satissue.ico')); ?>"
                                                style="width:35px; margin:5px" alt="icon"></i>Stationery
                                            Issued</a>
                                        <ul>
                                            <li><a href="<?php echo e(route('adminparticular.index')); ?>"><i
                                                        class='bx bx-radio-circle'></i>New Particular</a></li>
                                            <li><a href="<?php echo e(route('adminstationary.index')); ?>"><i
                                                        class='bx bx-radio-circle'></i>View Stationery Issued</a></li>
                                            <li><a href="<?php echo e(route('adminstationary.create')); ?>"><i
                                                        class='bx bx-radio-circle'></i>Add Stationery Issued</a></li>
                                        </ul>
                                    </li>

                                    

                                    
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="has-arrow">
                            <div class="parent-icon"><i class="bx bx-category"></i>
                            </div>
                            <div class="menu-title">Production</div>
                        </a>
                        <ul>
                            <li> <a href="javascript:;" class="has-arrow">
                                    <div class="parent-icon"><i class="bx bx-category"></i>
                                    </div>
                                    <div class="menu-title">Product</div>
                                </a>
                                <ul>
                            </li>
                            <li> <a href="/admin/production/product/create"><i class='bx bx-radio-circle'></i>Add
                                    Product</a>
                            </li>
                            <li> <a href="/admin/production/product"><i class='bx bx-radio-circle'></i>View
                                    Product</a>
                            </li>
                        </ul>
                    </li>


                    

                            
                     --}}
        </li>



    </ul>
</div>
</li>





</ul>
</div>

<!-- Admin Sidebar Start -->
<?php /**PATH C:\xampp\htdocs\onlinefinalproject\resources\views/admin/body/sidebar.blade.php ENDPATH**/ ?>