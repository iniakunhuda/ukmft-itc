<li class="">
    <a href="#">
        <i class="fa fa-home"></i> <span>Dashboard</span>
    </a>
</li>
{{-- <li class="">
    <a href="#">
        <i class="fa fa-th"></i>
        <span>Slider</span>
    </a>
</li> --}}
<li class="">
    <a href="{{ route('kategori_karya.index') }}">
        <i class="fa fa-folder"></i>
        <span>Kategori Karya</span>
    </a>
</li>
<li class="">
    <a href="{{ route('karya.index') }}">
        <i class="fa fa-folder"></i>
        <span>Karya</span>
    </a>
</li>
<li class="">
    <a href="#">
        <i class="fa fa-folder"></i>
        <span>Pengurus</span>
    </a>
</li>
<li class="">
    <a href="{{ route('pages.index') }} ">
        <i class="fa fa-folder"></i>
        <span>Halaman</span>
    </a>
</li>
<li class="">
    <a href="{{ route('prestasi.index') }} ">
        <i class="fa fa-folder"></i>
        <span>Prestasi</span>
    </a>
</li>
<li class="treeview">
    <a href="#">
        <i class="fa fa-cogs"></i> <span>Pengaturan</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li><a href="invoice.html"><i class="fa fa-circle-o"></i> Akun</a></li>
        <li><a href="profile.html"><i class="fa fa-circle-o"></i> Website</a></li>
    </ul>
</li>