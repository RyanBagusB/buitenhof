@extends('admin.admin')

@section('content')

<div class="content">
    <h2 class="content__heading">Settings</h2>
    <div class="content__setting">
        <nav class="content__setting__navigation">
            <ul>
                <li class="{{ request()->is('setting/kelola-produk') ? 'active' : '' }}">
                    <a href="{{ url('/setting/kelola-produk') }}" data-url="kelola-produk">
                        <div class="content__setting_navigation__icon">
                            <img src="" />
                        </div>
                        <div class="content__setting__navigation__info">
                            <h3>Kelola Produk</h3>
                            <p>Kelola Produk, Harga, Ketersediaan, dll.</p>
                        </div>
                    </a>
                </li>

                <li class="{{ request()->is('setting/kelola-diskon') ? 'active' : '' }}">
                    <a href="{{ url('/admin/setting/kelola-diskon') }}" data-url="kelola-diskon">
                        <div class="content__setting_navigation__icon">
                            <img src="" />
                        </div>
                        <div class="content__setting__navigation__info">
                            <h3>Kelola Diskon</h3>
                            <p>Kelola Diskon Pelanggan</p>
                        </div>
                    </a>
                </li>

                <li class="{{ request()->is('setting/kelola-printer') ? 'active' : '' }}">
                    <a href="{{ url('/admin/setting/kelola-printer') }}" data-url="kelola-printer">
                        <div class="content__setting_navigation__icon">
                            <img src="" />
                        </div>
                        <div class="content__setting__navigation__info">
                            <h3>Kelola Printer</h3>
                            <p>Tambah atau hapus printer</p>
                        </div>
                    </a>
                </li>

                <li class="{{ request()->is('setting/kelola-pajak') ? 'active' : '' }}">
                    <a href="{{ url('/admin/setting/kelola-pajak') }}" data-url="kelola-pajak">
                        <div class="content__setting_navigation__icon">
                            <img src="" />
                        </div>
                        <div class="content__setting__navigation__info">
                            <h3>Kelola Pajak</h3>
                            <p>Kelola pajak 10 atau 11%</p>
                        </div>
                    </a>
                </li>
            </ul>
        </nav>

        <div class="content__setting__management">
            @yield('content_setting')
        </div>
    </div>
</div>

@endsection
