@extends('layouts.master')
@push('styles')
<style>
    h3.subtitle {
        font-size: 18px;
        width: 100%;
        overflow: hidden;
        white-space: nowrap;
        margin-bottom: 20px;
    }

    h3.subtitle:after {
        content: "  ";
        background-color: #DDDDDD;
        padding-right: 100%;
        margin-left: 15px;
    }

    .trending-button {
        border-radius: 23px;
        border: 2px solid #CCCCCC;
        background: #dddddd;
        padding: 5px 20px;
        display: inline-block;
        font-size: 12px;
        transition: 0.3s;
    }

    .trending-button:hover {
        background: #CCCCCC;
    }

    .trending-button.active {
        background: #DD8E3F;
        border: 2px solid #DD8E3F;
    }

    .terkini-wrap {
        overflow: hidden;
        border-bottom: 2px solid #CCCCCC;
    }

    .terkini-button {
        float: left;
        display: block;
        color: black;
        text-align: center;
        padding: 3px;
        margin-right: 15px;
        margin-bottom: -5px;
        text-decoration: none;
        font-size: 17px;
        background: none;
        border: none;
        border-bottom: 8px solid transparent;
        transition: 0.3s;
    }

    .terkini-button:hover {
        border-bottom: 8px solid #CCCCCC;
    }

    .terkini-button.active {
        border-bottom: 8px solid #DD8E3F;
    }

    .loadmore {
        text-align: center;
        margin-top: 30px
    }

    .loadmore-button {
        border: 2px solid #DD8E3F;
        background: #DD8E3F;
        color: white;
        padding: 10px 50px;
        display: inline-block;
        font-size: 17px;
        transition: 0.3s;
    }
    
</style>
@endpush
@section('content')
{{-- slider show --}}
@push('home-sliders')
<section class="home-slider">
    @include('home.slider')
</section>
@endpush
<div class="container">
    <section class="section-trending">
        <h3 class="subtitle">DATA TRENDING</h3>
        <button class="trending-button">Covid 19</button>
        <button class="trending-button active">Negara Termiskin</button>
        <button class="trending-button">Lorem Ipsum</button>
        <button class="trending-button">Dolor sit amet</button>
        <button class="trending-button">Investasi Asing</button>
        <button class="trending-button">Lorem Ipsum</button>
        <button class="trending-button">Dolor sit amet</button>
        <button class="trending-button">Investasi Lokal</button>
    </section>

    <section class="section-terkini">
        <h3 class="subtitle">DATA TERKINI</h3>
        <div class="terkini-wrap">
            <button class="terkini-button active">Semua Topik</button>
            <button class="terkini-button">Demografi</button>
            <button class="terkini-button">Moneter</button>
            <button class="terkini-button">Keuangan</button>
            <button class="terkini-button">PDB</button>
            <button class="terkini-button">Energi</button>
            <button class="terkini-button">Perdagangan</button>
            <button class="terkini-button">Properti</button>
            <button class="terkini-button">Pasar</button>
        </div>
        <div class="terkini list">
            <div class='container pd-container'>
                <div class='row pd-row1'>
                    @for ($i = 0; $i < 12; $i++)
                        
                        <div class='pd-area col-md-4'>
                            <a href='#'>
                                <div class='effect-bubba pd-rec'><img class='img-reponsive'
                                        src='http://www.pulatech.com/wp-content/uploads/2015/11/mobile-apps.jpg' />
                                    <figcaption>

                                    </figcaption>
                                </div>
                            </a>
                            <div class='pd-des pd-sq-des'>
                                <h2>Inilah 10 Negara Termiskin di Dunia pada 2021</h2>
                                <div class="row">
                                    <div class="col-9">
                                        <p>INTERNASIONAL</p>
                                        <p>26/04/2021 14.18 WIB</p>
                                    </div>
                                    <div class="col-3 share-logo">
                                        <img class="img-responsive" src="{{ asset('databoks-assets/images/share.svg') }}">
                                    </div>
                                </div>                            
                            </div>
                        </div>

                    @endfor

                </div>
            </div>
            <div class="loadmore">
                <button class="loadmore-button">Muat lebih banyak</button>
            </div>
        </div>
    </section>

    <section class="section-topik">
        <h3 class="subtitle">TOPIK PILIHAN</h3>
    </section>
</div>
@stop

@push('scripts')
<script>
    $(document).on('click', '.trending-button', function () {
        $(this).addClass('active').siblings().removeClass('active')
    })
    $(document).on('click', '.terkini-button', function () {
        $(this).addClass('active').siblings().removeClass('active')
    })
</script>
@endpush