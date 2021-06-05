
        <!-- Left Sidebar -->
        <div class="left main-sidebar">

            <div class="sidebar-inner leftscroll">

                <div id="sidebar-menu">

                    <ul>

                        <li class="submenu">
                            <a href="{{ route('userdata.index') }}">
                                <i class="fas fa-user"></i>
                                <span> Users </span>
                            </a>
                        </li>


                        <li class="submenu">
                            <a id="tables" href="#">
                                <i class="fas fa-laptop"></i>
                                <span> Transaksi </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="{{ route('home.transaksi') }}">Transaksi</a>
                                </li>
                            </ul>
                        </li>

                        <li class="submenu">
                            <a id="tables" href="#">
                                <i class="fas fa-file-alt"></i>
                                <span> Master Data </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="{{ route('menu.index') }}">
                                        <span> Makanan </span>
                                    </a>
                                </li>
        
                                <li>
                                    <a href="{{ route('favorite.index') }}">
                                        <span> Favorite </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('booking.index') }}">Meja</a>
                                </li>
                            </ul>
                        </li>

                    </ul>

                    <div class="clearfix"></div>

                </div>

                <div class="clearfix"></div>

            </div>

        </div>
        <!-- End Sidebar -->
