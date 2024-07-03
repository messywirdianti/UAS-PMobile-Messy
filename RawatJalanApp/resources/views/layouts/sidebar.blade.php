<div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    @can('dashboard')
                    @if(auth()->user()->hasRole('admin'))
                    <li class="nav-label first">Main Menu</li>
                    <li><a class="nav-text" href="{{url('home')}}" aria-expanded="false"><i
                                class="icon icon-app-store"></i><span class="nav-text">Dashboard</span></a>
                    </li>
                    @endif
                    @endcan

                    @can('dashboard')
                    @if(auth()->user()->hasRole('admin'))
                    <li><a class="nav-text" href="{{ url('pendaftaran') }}" aria-expanded="false"><i
                                class="icon icon-single-04"></i><span class="nav-text">Pendaftaran Online</span></a>
                    </li>
                    @endif
                    @endcan

                    @can('dashboard')
                    @if(auth()->user()->hasRole('admin|dokter'))
					<li><a class="nav-text" href="{{ url('pasien') }}" aria-expanded="false"><i
                                class="icon icon-single-04"></i><span class="nav-text">Data Pasien</span></a>
                    </li>
                    @endif
                    @endcan

                    @can('view_pasien')
                    @if(auth()->user()->hasRole('dokter|admin'))
                    <li><a class="nav-text" href="{{ url('diagnosa') }}" aria-expanded="false"><i
                                class="icon icon-single-04"></i><span class="nav-text">Diagnosa Pasien</span></a>
                    </li>
                    @endif
                    @endcan

                    @can('view_pasien')
                    @if(auth()->user()->hasRole('dokter|admin'))
                    <li><a class="nav-text" href="{{ url('rekapMedis') }}" aria-expanded="false"><i
                                class="icon icon-single-04"></i><span class="nav-text">Rekap Medis</span></a>
                    </li>
                    @endif
                    @endcan

                    @can('view_pasien')
                    @if(auth()->user()->hasRole('admin|dokter'))
					<li><a class="nav-text" href="{{ url('dokter') }}" aria-expanded="false"><i
                                class="icon icon-single-04"></i><span class="nav-text">Dokter</span></a>
                    </li>
                    @endif
                    @endcan

                    @can('dashboard')
                    @if(auth()->user()->hasRole('admin'))
                    <li><a class="nav-text" href="{{ url('poliKlinik') }}" aria-expanded="false"><i
                                class="icon icon-single-04"></i><span class="nav-text">Poli Klinik</span></a>
                    </li>
                    @endif
                    @endcan

                    @can('dashboard')
                    @if(auth()->user()->hasRole('admin'))
                    <li><a class="nav-text" href="{{ url('jadwal') }}" aria-expanded="false"><i
                                class="icon icon-single-04"></i><span class="nav-text">Jadwal Dokter</span></a>
                    </li>
                    @endif
                    @endcan

                    @can('dashboard')
                    @if(auth()->user()->hasRole('admin'))
                    <li><a class="nav-text" href="{{ url('apoteker') }}" aria-expanded="false"><i
                                class="icon icon-single-04"></i><span class="nav-text">Apoteker</span></a>
                    </li>
                    @endif
                    @endcan

                    @can('apotik')
                    @if(auth()->user()->hasRole('apoteker|admin'))
                    <li><a class="nav-text" href="{{ url('obat') }}" aria-expanded="false"><i
                                class="icon icon-world-2"></i><span class="nav-text">Obat</span></a>
                    </li>
                    @endif
                    @endcan

                    @can('apotik')
                    @if(auth()->user()->hasRole('apoteker|dokter'))
					<li><a class="nav-text" href="{{ url('resep') }}" aria-expanded="false"><i
                                class="icon icon-single-copy-06"></i><span class="nav-text">Resep</span></a>
                    </li>
                    @endif
                    @endcan

					<li><a class="nav-text" href="{{ url('pembayaran') }}" aria-expanded="false"><i
                                class="icon icon-layout-25"></i><span class="nav-text">Pembayaran</span></a>
                    </li>
                    
                </ul>
            </div>


        </div>