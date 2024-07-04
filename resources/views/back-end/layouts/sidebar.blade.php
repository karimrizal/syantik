<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>

                            <a class="nav-link" style=" {{ Request::is('dashboard') ? 'color:#fff;background-color:#080808;' : '' }} "  href="/syantik/dashboard"  >
                                <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                                Dashboard
                            </a>

                            @if( (Auth::user()->role == 'Admin BPS')  || (Auth::user()->role == 'Sekretariat Forum') )
                            <a class="nav-link" style=" {{ Request::is('forum') || Request::is('daftar_forum') || Request::is('input_arc') || Request::is('daftar_arc') ? 'color:#fff;background-color:#080808;' : '' }} "  href="/syantik/forum"  >
                                <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                                Forum
                            </a>
                            @else
                            <a class="nav-link" style=" {{ Request::is('daftar_forum')  || Request::is('input_arc') || Request::is('daftar_arc') ? 'color:#fff;background-color:#080808;' : '' }} "  href="/syantik/daftar_forum"  >
                                <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                                Forum
                            </a>
                            @endif

                            


                            <div class="sb-sidenav-menu-heading">Data</div>
                            @if(Auth::user()->role == 'Admin BPS' || (Auth::user()->role == 'Admin BPS Kabupaten') )
                            <a class="nav-link" style=" {{ Request::is('rekomendasi') ? 'color:#fff;background-color:#080808;' : '' }} "  href="/syantik/rekomendasi"  >
                                <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                                Kelola Rekomendasi
                            </a>
                            @else @endif

							<a class="nav-link" style=" {{ Request::is('data_dda') ? 'color:#fff;background-color:#080808;' : '' }} " href="/syantik/data_dda" >
                                <div class="sb-nav-link-icon"><i class="fas fa-bar-chart"></i></div>
                                Input Data Prioritas
                            </a>
                           
							<a class="nav-link" style=" {{ Request::is('daftar-metadata')||Request::is('form-metadata') ? 'color:#fff;background-color:#080808;' : '' }} " href="/syantik/daftar-metadata" >
                                <div class="sb-nav-link-icon"><i class="fas fa-bar-chart"></i></div>
                                Kelola Metadata
                            </a>

                            <a class="nav-link" style=" {{ Request::is('metadata_data') ? 'color:#fff;background-color:#080808;' : '' }} " href="/syantik/metadata_data" >
                                <div class="sb-nav-link-icon"><i class="fas fa-bar-chart"></i></div>
                                Input Metadata ke Data
                            </a>
                            
                            <a class="nav-link" style=" {{ Request::is('rekap') ? 'color:#fff;background-color:#080808;' : '' }} " href="/syantik/rekap" >
                                <div class="sb-nav-link-icon"><i class="fas fa-bar-chart"></i></div>
                                Data Kab/Kota
                            </a>
                        
                            <div class="sb-sidenav-menu-heading">Pembinaan</div>

                            @if(Auth::user()->role == 'Admin BPS' )

                            <a class="nav-link" style=" {{ Request::is('bahan') || Request::is('bahan_video') || Request::is('bahan_slide') || Request::is('bahan_pdf') || Request::is('bahan_juknis')  ? 'color:#fff;background-color:#080808;' : '' }} " href="/syantik/bahan">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Kelola Bahan Ajar
                            </a>
                        
							<a class="nav-link" style=" {{ Request::is('kelola_pembinaan') ? 'color:#fff;background-color:#080808;' : '' }} " href="/syantik/kelola_pembinaan">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Kelola Pembinaan
                            </a>
                            @else @endif


                            @if( (Auth::user()->role == 'Admin BPS') )
                            <a class="nav-link" style=" {{ Request::is('user') ? 'color:#fff;background-color:#080808;' : '' }} " href="/syantik/user">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Kelola Pengguna
                            </a>
                            @elseif( (Auth::user()->role == 'Admin OPD') || (Auth::user()->role == 'Admin BPS Kabupaten') )
                            <a class="nav-link" style=" {{ Request::is('user_opd') ? 'color:#fff;background-color:#080808;' : '' }} " href="/syantik/user_opd">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Kelola Pengguna
                            </a>
                            
                            @else @endif

                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                      

                    </div>
                </nav>
            </div>