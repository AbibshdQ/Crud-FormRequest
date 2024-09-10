<body class="bg-body">
    <div class="backdrop" id="backdrop"></div>
    @include('layouts.navbar')

    <nav class="sidebar sidebar-mini sticky-top" id="sidebar">
        <div class="menu shadow pb-5" id="sidebar-scroll">
            <ul class="menu-wrapper">
                <li class="menu-item ripple">
                    <a href="https://inovindoacademy.com/admin/dashboard" data-mdb-placement="right"
                        data-mdb-toggle="tooltip" title="Beranda" data-mdb-delay='{"show":"350", "hide":"0"}'>
                        <i data-feather="home" class="fa-fw"></i>
                        <span>Beranda</span>
                    </a>
                </li>
                <li class="menu-item ripple">
                    <a href="https://inovindoacademy.com/admin/profile" data-mdb-placement="right"
                        data-mdb-toggle="tooltip" title="Profil Saya" data-mdb-delay='{"show":"350", "hide":"0"}'>
                        <i data-feather="user" class="fa-fw"></i>
                        <span>Profil Saya</span>
                    </a>
                </li>
                <div class="ps-3 text-muted menu-title">
                    <small>Main Menu</small>
                </div>
                <li class="menu-item ripple show" data-mdb-placement="right" data-mdb-toggle="tooltip"
                    title="Master Data" data-mdb-delay='{"show":"350", "hide":"0"}'>
                    <a data-mdb-toggle="collapse" href="#collapseMenu3" role="button" aria-expanded="false"
                        aria-controls="collapseMenu3">
                        <i data-feather="database" class="fa-fw"></i>
                        <span>Master Data</span>
                    </a>
                </li>

                <div class="collapse show" id="collapseMenu3">
                    <ul class="p-0 m-0">
                        <li class="menu-item ripple active">
                            <a href="{{ route('employee-backend.index') }}" data-mdb-placement="right"
                                data-mdb-toggle="tooltip" title="Karyawan" data-mdb-delay='{"show":"350", "hide":"0"}'
                                class="sub-item">
                                <i data-feather="grid" class="fa-fw"></i>
                                <span>Karyawan</span>
                            </a>
                        </li>
                        <li class="menu-item ripple">
                            <a href="{{ route('office-backend.index') }}" data-mdb-placement="right"
                                data-mdb-toggle="tooltip" title="Kantor" data-mdb-delay='{"show":"350", "hide":"0"}'
                                class="sub-item">
                                <i class="far fa-building fa-fw"></i>
                                <span>Kantor</span>
                            </a>
                        </li>
                        <li class="menu-item ripple">
                            <a
                              href="{{ route('project-backend.index') }}"
                              data-mdb-placement="right"
                              data-mdb-toggle="tooltip"
                              title="Proyek"
                              data-mdb-delay='{"show":"350", "hide":"0"}'
                              class="sub-item"
                            >
                              <i data-feather="calendar" class="fa-fw"></i>
                              <span>Proyek</span>
                            </a>
                          </li>
                          <li class="menu-item ripple">
                            <a
                              href="{{ route('project-employee.index') }}"
                              data-mdb-placement="right"
                              data-mdb-toggle="tooltip"
                              title="Proyek Karyawan"
                              data-mdb-delay='{"show":"350", "hide":"0"}'
                              class="sub-item"
                            >
                              <i class="bi bi-bookmark-check"></i>
                              <span>Proyek Karyawan</span>
                            </a>
                          </li>
                    </ul>
                </div>
                <div class="ps-3 text-muted menu-title">
                    <small>Kelola User Magang</small>
                </div>
                
                <li class="menu-item ripple">
                    <a href=" " data-mdb-placement="right"
                        data-mdb-toggle="tooltip" title="User" data-mdb-delay='{"show":"350", "hide":"0"}'>
                        <i data-feather="users" class="fa-fw"></i>
                        <span>User</span>
                    </a>
                </li>
                 
                 
            </ul>
        </div>
    </nav>
