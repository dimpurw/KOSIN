    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">ROBOARDING</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
    <!--   <li class="nav-item">
        <a class="nav-link" href="{{url('/')}}">
          <i class="fas fa-fw fa-home"></i>
          <span>Dashboard</span></a>
      </li>
 -->
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->

      <!--       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#catatan" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-people-carry"></i>
          <span>Catatan-catatan</span>
        </a>
        <div id="catatan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{url('/piutang')}}">Catatan Piutang</a>
            <a class="collapse-item" href="{{url('/utang')}}">Catatan Utang</a>
            <a class="collapse-item" href="{{url('/pengeluaran-kas')}}">Catatan Pengeluaran Kas</a>
            <a class="collapse-item" href="{{url('/penerimaan-kas')}}">Catatan Penerimaan Kas</a>
            <a class="collapse-item" href="{{url('/pembelian')}}">Catatan Pembelian</a>
            <a class="collapse-item" href="{{url('/penjualan')}}">Catatan Penjualan</a>
            <a class="collapse-item" href="{{url('/gaji')}}">Catatan Pembayaran Gaji</a>
          
          </div>
        </div>
      </li> -->

      <!-- Nav Item - Pages Collapse Menu pekerjaan-->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#kriteria" aria-expanded="true" aria-controls="collapsefour">
          <i class="fas fa-tasks"></i>
          <span>Kriteria</span></a>
        <div id="kriteria" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{route('kriteria')}}">Kriteria</a>
          </div>
        </div>
        <div id="kriteria" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{route('crip')}}">Nilai Crips</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#alternatif" aria-expanded="true" aria-controls="collapsefour">
          <i class="fas fa-tasks"></i>
          <span>Alternatif</span></a>
        <div id="alternatif" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{route('alternatif')}}">Alternatif</a>
          </div>
        </div>
        <div id="alternatif" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{route('nilai')}}">Nilai Alternatif</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('perhitungan')}}">
          <i class="fas fa fa-user"></i>
          <span>Perhitungan</span></a>
      </li>
 
      <!-- Nav Item - Utilities Collapse Menu pengguna-->
      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-people-arrows"></i>
          <span>Jurnal Umum</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{url('/jurnal_umum')}}">Jurnal Umum</a>
          </div>
        </div>
      </li> -->
      <!--  <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsethree" aria-expanded="true" aria-controls="collapsethree">
          <i class="fas fa-handshake"></i>
          <span>Buku Besar</span>
        </a>
        <div id="collapsethree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{url('/buku_besar')}}">Buku Besar</a>
          </div>
        </div>
      </li> -->

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>