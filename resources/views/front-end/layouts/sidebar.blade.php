<div  id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" style=" {{ Request::is('beranda') || Request::is('/') ? 'color:#fff;background-color:#080808;' : '' }} "  href="/syantik/beranda"  >
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Beranda
                            </a>
                            <div class="sb-sidenav-menu-heading">Data</div>
							<a class="nav-link" style=" {{ Request::is('data_opd/{id}') ? 'color:#fff;background-color:#080808;' : '' }} " href="/syantik/data_opd/DINAS%20PENDIDIKAN%20DAN%20KEBUDAYAAN" >
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Data OPD
                            </a>
                           
							<a class="nav-link" style=" {{ Request::is('view_metadata_kegiatan') ? 'color:#fff;background-color:#080808;' : '' }} " href="/syantik/view_metadata_kegiatan" >
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Metadata
                            </a>
                        
                            <div class="sb-sidenav-menu-heading">Pembinaan</div>
                            <a class="nav-link" style=" {{ Request::is('konsultasi') || Request::is('konsultasi_pembinaan') || Request::is('konsultasi_faq') ? 'color:#fff;background-color:#080808;' : '' }} " href="/syantik/konsultasi">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Konsultasi
                            </a>
                            <a class="nav-link" target="_blank" href="https://romantik.bps.go.id/">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Ajukan Rekomendasi
                            </a>
							<a class="nav-link" style=" {{ Request::is('modul') || Request::is('modul_pdf') || Request::is('modul_slide') || Request::is('modul_juknis') || Request::is('modul_glosarium') ? 'color:#fff;background-color:#080808;' : '' }} " href="/syantik/modul">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Modul Pembelajaran
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                      

                    </div>
                </nav>
            </div>