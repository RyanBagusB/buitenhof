@extends('admin/admin')

@section('content')

<div class="content homepage">
    <div class="content__management">
        <h2 class="content__heading">CWB Resto</h2>
        <div class="management">
            <nav class="management__navigation">
                <div class="management__navigation__tabs homepage">
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
    </div>

    <div class="content__info">
        <div class="content__info__header">
            <h3>Orders#1</h3>
            <div class="content__info__header__button">
                <button class="active">Dine In</button>
                <button>To Go</button>
                <button>Delivery</button>
            </div>
        </div>

        <div class="order-pay">
            <p class="order-pay__header__item">Item</p>
            <p class="order-pay__header__quantity">Qty</p>
            <p class="order-pay__header__price">Price</p>
        </div>

        <div class="pay-selection-button">
            <button><img src="/icons/Frame 65.svg" /></button>
            <button><img src="/icons/Frame 66.svg" /></button>
            <button><img src="/icons/Frame 67.svg" /></button>
            <button><img src="/icons/Frame 65.svg" /></button>
        </div>

        <div class="payment-detail">
            <div>
                <p class="payment-detail__info">Ongkir</p>
                <p class="payment-total">0</p>
            </div>

            <div>
                <p class="payment-detail__info">Pajak</p>
                <p class="payment-total">10 %</p>
            </div>

            <div>
                <p class="payment-detail__info">Diskon</p>
                <p class="payment-total">Rp. 0</p>
            </div>

            <div>
                <p class="payment-detail__info">Sub Total</p>
                <p class="payment-total">Rp. 120.000</p>
            </div>
        </div>

        <button>Lanjutkan Pembayaran</button>
    </div>

    <div class="popup-payment"></div>
</div>

@vite(['resources/js/admin/homepage.js'])

@endsection
