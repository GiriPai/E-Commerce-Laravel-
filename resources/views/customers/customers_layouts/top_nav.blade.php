@php
    use App\Http\Controllers\CustomerControllers\CustomerResource;
@endphp
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Classification</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Classification </span></a>
                            @php
                                $classifications =  CustomerResource::getclassifications();
                            @endphp



                            <ul aria-expanded="false" class="collapse  first-level">
                                @foreach($classifications as $class)
                                <li class="sidebar-item"><a href=" {{ route('classification_page', $class->id ) }} " class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> {{ $class->class_name }} </span></a></li>
                                @endforeach
                            </ul>

                        </li>
                        <!-- <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Type</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link two-column has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-inbox-arrow-down"></i><span class="hide-menu">Type </span></a>
                            @php
                                $types =  CustomerResource::gettypes();
                            @endphp
                            <ul aria-expanded="false" class="collapse first-level">

                                @foreach($types as $type)
                                <li class="sidebar-item"><a href=" {{ route('type_page', $type->id ) }} " class="sidebar-link"><i class="mdi mdi-bulletin-board"></i><span class="hide-menu"> {{ $type->type_name }} </span></a></li>
                                @endforeach
                            </ul>
                        </li> -->

                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Category</span></li>
                        <li class="sidebar-item mega-dropdown"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-widgets"></i><span class="hide-menu">Category </span></a>
                            @php
                                $categories =  CustomerResource::getcategories();
                            @endphp
                            <ul aria-expanded="false" class="collapse first-level">
                                @foreach($categories as $category)
                                <li class="sidebar-item"><a href=" {{ route('category_page', $category->id ) }} " class="sidebar-link"><i class="mdi mdi-toggle-switch"></i><span class="hide-menu">  {{ $category->category_name }} </span></a></li>
                                @endforeach



                            </ul>
                        </li>
                        <!-- <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Hot Sales</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-collage"></i><span class="hide-menu">Hot Sales</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-collage"></i><span class="hide-menu">Form Elements</span></a>
                                    <ul aria-expanded="false" class="collapse second-level">
                                        <li class="sidebar-item"><a href="form-inputs.html" class="sidebar-link"><i class="mdi mdi-priority-low"></i><span class="hide-menu"> Forms Input</span></a></li>
                                        <li class="sidebar-item"><a href="form-input-groups.html" class="sidebar-link"><i class="mdi mdi-rounded-corner"></i><span class="hide-menu"> Input Groups</span></a></li>

                                    </ul>
                                </li>
                                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Form Layouts</span></a>
                                    <ul aria-expanded="false" class="collapse second-level">
                                        <li class="sidebar-item"><a href="form-basic.html" class="sidebar-link"><i class="mdi mdi-vector-difference-ba"></i><span class="hide-menu"> Basic Forms</span></a></li>
                                        <li class="sidebar-item"><a href="form-horizontal.html" class="sidebar-link"><i class="mdi mdi-file-document-box"></i><span class="hide-menu"> Form Horizontal</span></a></li>
                                        <li class="sidebar-item"><a href="form-actions.html" class="sidebar-link"><i class="mdi mdi-code-greater-than"></i><span class="hide-menu"> Form Actions</span></a></li>
                                        <li class="sidebar-item"><a href="form-row-separator.html" class="sidebar-link"><i class="mdi mdi-code-equal"></i><span class="hide-menu"> Row Separator</span></a></li>
                                        <li class="sidebar-item"><a href="form-bordered.html" class="sidebar-link"><i class="mdi mdi-flip-to-front"></i><span class="hide-menu"> Form Bordered</span></a></li>
                                        <li class="sidebar-item"><a href="form-striped-row.html" class="sidebar-link"><i class="mdi mdi-content-duplicate"></i><span class="hide-menu"> Striped Rows</span></a></li>
                                        <li class="sidebar-item"><a href="form-detail.html" class="sidebar-link"><i class="mdi mdi-cards-outline"></i><span class="hide-menu"> Form Detail</span></a></li>
                                    </ul>
                                </li>
                                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-code-equal"></i><span class="hide-menu">Form Addons</span></a>
                                    <ul aria-expanded="false" class="collapse second-level">
                                        <li class="sidebar-item"><a href="form-paginator.html" class="sidebar-link"><i class="mdi mdi-export"></i><span class="hide-menu"> Paginator</span></a></li>
                                        <li class="sidebar-item"><a href="form-img-cropper.html" class="sidebar-link"><i class="mdi mdi-crop"></i><span class="hide-menu"> Image Cropper</span></a></li>
                                        <li class="sidebar-item"><a href="form-dropzone.html" class="sidebar-link"><i class="mdi mdi-crosshairs-gps"></i><span class="hide-menu"> Dropzone</span></a></li>
                                        <li class="sidebar-item"><a href="form-mask.html" class="sidebar-link"><i class="mdi mdi-box-shadow"></i><span class="hide-menu"> Form Mask</span></a></li>
                                        <li class="sidebar-item"><a href="form-typeahead.html" class="sidebar-link"><i class="mdi mdi-cards-variant"></i><span class="hide-menu"> Form Typehead</span></a></li>
                                    </ul>
                                </li>

                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="form-wizard.html" aria-expanded="false"><i class="mdi mdi-cube-send"></i><span class="hide-menu">Form Wizard</span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="form-repeater.html" aria-expanded="false"><i class="mdi mdi-creation"></i><span class="hide-menu">Form Repeater</span></a></li>
                            </ul>
                        </li> -->
                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">My Orders</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ route('orders.index') }}" aria-expanded="false"><i class="mdi mdi-border-none"></i><span class="hide-menu">My Orders</span></a>

                        </li>
                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">My Cart</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link  waves-effect waves-dark sidebar-link" href="{{ route('cart.index') }}" aria-expanded="false"><i class="mdi mdi-image-filter-tilt-shift"></i><span class="hide-menu"> My Cart</span></a>

                        </li>
                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Refurbish</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-collage"></i><span class="hide-menu">Refurbish</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"> <a class="sidebar-link  waves-effect waves-dark" href="{{ route('refurbish.index') }}" aria-expanded="false"><i class="mdi mdi-collage"></i>My List</a>
                                </li>
                                <li class="sidebar-item"> <a class="sidebar-link  waves-effect waves-dark" href="{{ route('refurbish.create') }}" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Sell Something</span></a>
                                </li>

                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ route('Newsfeeds_cust_index') }}" aria-expanded="false"><i class="mdi mdi-notification-clear-all"></i><span class="hide-menu">Newsfeeds</span></a>

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
