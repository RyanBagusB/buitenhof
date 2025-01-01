@extends('admin.setting')

@section('content_setting')

<h3>Kelola Pajak</h3>
<div class="management">
    <nav class="management__navigation">
        <div class="management__navigation__tabs">
            <input type="radio" id="service" name="tabs" checked>
            <label for="service">Layanan</label>
            
            <input type="radio" id="tax" name="tabs">
            <label for="tax">Pajak</label>
        </div>
    </nav>

    <div class="management__contents">
        <div class="management__contents__1"></div>
    </div>
</div>

<div class="popup-add-card">
    <div class="popup-add-card__content">
        <div class="popup-add-card__content__header">
            <button class="close-popup">x</button>
            <h4>Perhitungan Biaya</h4>
        </div>

        <div class="popup-add-card__content__form">
            <div class="popup-add-card__content__form__input">
                <label>Biaya Pengiriman</label>
                <input placeholder="Masukkan Ongkir" />
                <label class="popup-add-card__content__form__input__checkbox">
                    Sertakan Ongkir dalam Pajak 
                    <input type="checkbox" />
                    <span class="checkmark"></span>
                </label>
            </div>

            <div class="popup-add-card__content__form__input">
                <label>Biaya Layanan</label>
                <input placeholder="Masukkan Biaya Layanan" />
                <label class="popup-add-card__content__form__input__checkbox">
                    Sertakan Ongkir dalam Pajak 
                    <input type="checkbox" />
                    <span class="checkmark"></span>
                </label>
            </div>

            <div class="popup-add-card__content__form__input">
                <label>Pajak</label>
                <div class="popup-add-card__content__form__input__presentage__tax">
                    <input />
                    <p>%</p>
                </div>
            </div>
        </div>

        <div class="popup-add-card__content__footer">
            <button>Simpan Diskon</button>
        </div>
    </div>
</div>

@vite(['resources/js/admin/taxManagement.js'])

@endsection
