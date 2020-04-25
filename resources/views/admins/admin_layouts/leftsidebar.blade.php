<!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li>
                            <!-- User Profile-->
                            <div class="user-profile d-flex no-block  m-t-20">
                                <div class="user-pic"><img src="/assets/images/users/1.jpg" alt="users" class="rounded-circle" width="40" /></div>
                                <div class="user-content hide-menu m-l-10">
                                    <!-- <a href="javascript:void(0)" class="" id="Userdd" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> -->
                                        <h5 class="m-b-0 user-name font-medium">3Q-Tech Admin </h5>
                                        <span class="op-5 user-email">admin@3qtech.com</span>
                                    </a>

                                </div>
                            </div>
                            <!-- End User Profile-->
                        </li>
                        <!-- <li class="p-15 m-t-10"><a href="javascript:void(0)" class="btn btn-block create-btn text-white no-block d-flex align-items-center"><i class="fa fa-plus-square"></i> <span class="hide-menu m-l-5">Create New</span> </a></li> -->
                        <!-- User Profile-->
                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Sections</span></li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu"> Sections</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{route('products.index')}}" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Products </span></a></li>
                                <li class="sidebar-item"><a href="{{route('classifications.index')}}" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Classifications </span></a></li>
                                <li class="sidebar-item"><a href="{{route('types.index')}}" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Types </span></a></li>
                                <li class="sidebar-item"><a href="{{route('categories.index')}}" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Catagories </span></a></li>

                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ route('customers.index') }}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i> Customers</a>
                        <!-- <a href="{{ route('customers.index') }}"><li class="nav-small-cap"> <span class="hide-menu">Customers</span></li></a> -->

                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">SOURCES</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-collage"></i><span class="hide-menu">Stock and Sales</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="{{route('stock.index')}}" class="sidebar-link"><i class="mdi mdi-priority-low"></i><span class="hide-menu"> All Stocks</span></a></li>
                                <!-- <li class="sidebar-item"><a href="form-input-groups.html" class="sidebar-link"><i class="mdi mdi-rounded-corner"></i><span class="hide-menu"> Stock Enquiry</span></a></li> -->
                                <li class="sidebar-item"><a href="{{route('all_sales')}}" class="sidebar-link"><i class="mdi mdi-select-all"></i><span class="hide-menu">All Sales </span></a></li>

                            </ul>
                        </li>


                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-alert-box"></i><span class="hide-menu">Refurbish</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="{{ route('admin.refurbish.index') }}" class="sidebar-link"><i class="mdi mdi-credit-card-scan"></i><span class="hide-menu">Listings</span></a></li>
                                <li class="sidebar-item"><a href="{{ route('admin.refurbish.purchases') }}" class="sidebar-link"><i class="mdi mdi-credit-card-plus"></i><span class="hide-menu">Purchases</span></a></li>
                            </ul>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-pencil-box-outline"></i><span class="hide-menu">News Feeds</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="{{ route('Newsfeeds.index') }}" class="sidebar-link"><i class="mdi mdi-calendar-range"></i><span class="hide-menu"> All Feeds</span></a></li>
                                <li class="sidebar-item"><a href="{{ route('Newsfeeds.create') }}" class="sidebar-link"><i class="mdi mdi-calendar-plus"></i><span class="hide-menu"> Add New Feeds </span></a></li>
                            </ul>
                        </li>

                        <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                         <i class="mdi mdi-directions"></i><span class="hide-menu">Log Out</span>
                        </a>

                        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                      </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
