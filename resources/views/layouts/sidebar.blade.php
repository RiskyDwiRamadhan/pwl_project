
        <!-- Left Sidebar -->
        <div class="left main-sidebar">

            <div class="sidebar-inner leftscroll">

                <div id="sidebar-menu">

                    <ul>

                    @if (Auth::user()->role == 'kasir')
                        <li class="submenu">
                                <a href="#">
                                <span> Kasir </span>
                            </a>
                        </li>

                        <li class="submenu">
                                <a href="{{ route('dvd.home') }}">
                                <i class="fas fa-clipboard"></i>
                                <span> DVD </span>
                            </a>
                        </li>

                        <li class="submenu">
                                <a href="{{ route('order.index') }}">
                                <i class="fas fa-clipboard"></i>
                                <span> Penyewaan </span>
                            </a>
                        </li>

                        <li class="submenu">
                                <a href="{{ route('kembali.index') }}">
                                <i class="fas fa-clipboard"></i>
                                <span> Pengembalian </span>
                            </a>
                        </li>

                    @else
                        <li class="submenu">
                                <a href="#">
                                <span> Admin </span>
                            </a>
                        </li>
                        <li class="submenu">
                                <!-- <a href="#"> -->
                            <a href="{{ route('userku.index') }}">
                                <i class="fas fa-user"></i>
                                <span> Users </span>
                            </a>
                        </li>
                        <li class="submenu">
                            <a href="{{ route('dvd.index') }}">
                                <i class="fas fa-table"></i>
                                <span> Data DVD </span>
                            </a>
                        </li>
                    @endif
                    </ul>

                    <div class="clearfix"></div>

                </div>

                <div class="clearfix"></div>

            </div>

        </div>
        <!-- End Sidebar -->
