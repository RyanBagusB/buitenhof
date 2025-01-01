@extends('admin.setting')

@section('content_setting')

<h3>Kelola Diskon</h3>
<div class="management">
    <nav class="management__navigation">
        <div class="management__navigation__tabs">
            <input type="radio" id="all" name="tabs" checked>
            <label for="all">Semua</label>
            
            <input type="radio" id="food" name="tabs">
            <label for="food">Makanan</label>
            
            <input type="radio" id="beverage" name="tabs">
            <label for="beverage">Minuman</label>
            
            <input type="radio" id="snack" name="tabs">
            <label for="snack">Snack</label>
        </div>
    </nav>

    <div class="management__contents">
        <div class="management__contents__1"></div>
        <div class="management__contents__2"></div>
        <div class="management__contents__3"></div>
        <div class="management__contents__4"></div>
    </div>
</div>

<div class="popup-add-card">
    <div class="popup-add-card__content">
        <div class="popup-add-card__content__header">
            <div class="popup-add-card__content__header">
                <button>x</button>
            </div>
            <h4>Tambah Diskon</h4>
        </div>

        <div class="popup-add-card__content__form">
            <div class="popup-add-card__content__form__input">
                <label>Nama Diskon</label>
                <input placeholder="Masukkan Nama Produk"/>
            </div>

            <div class="popup-add-card__content__form__input">
                <label>Nama Kode Promo</label>
                <input placeholder="Masukkan Kode Promo"/>
            </div>

            <div class="popup-add-card__content__form__input">
                <label>Deskripsi (Opsional)</label>
                <textarea></textarea>
            </div>

            <div class="popup-add-card__content__form__input__presentage">
                <label>Nilai</label>
                <div class="popup-add-card__content__form__input__presentage__input">
                    <button class="popup-add-card__content__form__input__presentage__option">
                        Presentase
                        <span> > </span>
                    </button>

                    <div class="popup-add-card__content__form__input__presentage__option">
                        <p>%</p>
                        <input />
                    </div>
                </div>
            </div>
        </div>

        <div class="popup-add-card__content__footer">
            <button>Simpan Diskon</button>
        </div>
    </div>
</div>

@vite(['resources/js/admin/discountManagement.js'])

@endsection
