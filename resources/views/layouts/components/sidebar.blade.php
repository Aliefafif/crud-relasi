<aside class="sidebar navbar-default" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.html" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                            <!-- /.nav-second-level -->
                             @if(Auth::user()->is_admin === 1)
                        </li>
                        <li>
                            <a href="{{route('pendaftaran.index') }}"><i class="fa fa-table fa-fw"></i>pendaftaran</a>
                        </li>
                        <li>
                            <a href="{{route('produk.index') }}"><i class="fa fa-table fa-fw"></i>produk</a>
                        </li>
                        <li>
                            <a href="{{route('kategori.index') }}"><i class="fa fa-table fa-fw"></i>Kategori</a>
                        </li>
                        <li>
                            <a href="{{route('Buku.index') }}"><i class="fa fa-table fa-fw"></i>Buku</a>
                        </li>
                        @endif
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
            </aside>