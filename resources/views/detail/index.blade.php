@extends('layouts.master')
@push('styles')
<style>

    .download {
        text-align: right;
    }

    .download-button {
        border: 2px solid #DD8E3F;
        background: #DD8E3F;
        color: white;
        padding: 5px 25px;
        display: inline-block;
        font-size: 16px;
        transition: 0.3s;
    }

    .bc-link {
        text-decoration: none;
        color: #DD8E3F;
    }

    .content-detail h1 {
        font-size: 2rem;
    }

    .sumber {
        font-size: 1rem;
        color: #666666;
        margin-top: -15px;
    }

    .chart-detail {
        width: 100%;
    }

    .content-text {
        margin-left: 80px;
    }

    .writer-avatar-col {
        padding: 0px;
    }

    .writer-avatar {
        border-radius: 50%;
        width: 100%;
    }

    .writer-name {
        font-size: 14px;
        color: #666666;
        margin-bottom: 0px;
    }

    .writer-name-bold {
        font-size: 14px;
        margin-bottom: 0px;
        color: #000000;

    }

    .writer-time {
        color: #666666;
        font-size: 12px;
    }

    .content-dt {
        padding: 0px;
    }

    .content-pr {
        font-size: 19px;
    }

    .related-news {
        background-color: #818386;
        border-left: 10px solid #DD8E3F;
        border-radius: 5px;
        margin-bottom: 16px;
        padding-top: 10px;
        padding-bottom: 20px;
        padding-left: 16px;
        padding-right: 16px;
    }
    .related-head {
        font-weight: bold;
        color: #ffffff;
    }

    .related-content {
        text-decoration: none;
        color: #ffffff;
    }

    .terkait-button {
        border-radius: 23px;
        border: 2px solid #CCCCCC;
        background: #dddddd;
        padding: 5px 20px;
        display: inline-block;
        font-size: 12px;
        transition: 0.3s;
    }

    .terkait-button:hover {
        background: #CCCCCC;
    }

    .section-tags {
        padding: 0px;
    }

    .tags-icon {
        font-size: 18px;
    }

    .separator-content {
        margin-top: 50px;
    }

    .section-data-populer {

    }

    .section-data-populer h3 {
        font-size: 20px;
        font-weight: bold;
    }
</style>
@endpush
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 content-detail">

            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <p class="fa fa-home"></p>
                    </li>
                    <li class="breadcrumb-item"><a href="#" class="bc-link">Kategori/Topik</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Inilah 10 Negara Termiskin…</li>
                </ol>
            </nav>
            <h1>Inilah 10 Negara Termiskin di Dunia pada 2021</h1>
            <div class="row socmed-title">
                <div class="col-sm-9">
                    <div class="icons">
                        <a class="icon-logo htag" target="_blank" href="https://www.facebook.com/katadatacoid/">
                            <img class="img-responsive" src="{{ asset('databoks-assets/images/socmed/facebook.svg') }}">
                        </a>
                        <a class="icon-logo htag" target="_blank" href="https://www.twitter.com/katadatacoid/">
                            <img class="img-responsive" src="{{ asset('databoks-assets/images/socmed/twitter.svg') }}">
                        </a>
                        <a class="icon-logo htag" target="_blank" href="">
                            <img class="img-responsive" src="{{ asset('databoks-assets/images/socmed/whatsapp.svg') }}">
                        </a>
                        <a class="icon-logo htag" target="_blank" href="">
                            <img class="img-responsive" src="{{ asset('databoks-assets/images/socmed/line.svg') }}">
                        </a>
                        <a class="icon-logo htag" target="_blank" href="">
                            <img class="img-responsive" src="{{ asset('databoks-assets/images/socmed/telegram.svg') }}">
                        </a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="download">
                        <button class="download-button">Download &nbsp; <span class="fa fa-arrow-down"></span></button>
                    </div>
                </div>
            </div>

            <hr>
            <div>
                <p>Negara dengan Tingkat Kemiskinan Tertinggi</p>
                <p class="sumber">Sumber: World Bank</p>
            </div>
            <div>
                <img class="chart-detail" src="{{ asset('databoks-assets/other/sample-chart.png') }}">
            </div>

            <div class="content-text">
                <div class="row">
                    <div class="col-3">
                        <hr>
                        <div class="row">
                            <div class="col-3 writer-avatar-col">
                                <img class="writer-avatar" src="https://image.flaticon.com/icons/png/512/168/168726.png">
                            </div>
                            <div class="col-9">
                                <p class="writer-name">Oleh <b class="writer-name-bold">Agustiani</b></p>
                                <p class="writer-time far fa-clock">&nbsp; 17 Mar 2021</p>
                            </div>
                        </div>
                    </div>
                    <div class="content-dt">
                        <p class="content-pr">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                            ut labore et dolore magna aliquyam erat, sed diam voluptua.
                            <br><br>
                            At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
                            takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,
                            consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                            aliquyam erat, sed diam voluptua.
                            <br><br>
                            At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
                            takimata sanctus est Lorem ipsum dolor sit amet.
                        </p>

                        <div class="related-news">
                            <p class="related-head">BACA JUGA</p>
                            <a class="related-content">Cha Eunwoo Dimanja Calon Ayah Mertua Di ‘True Beauty’, Fans: Pedekate Jalur Gercep</a>
                        </div>

                        <p class="content-pr">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                            ut labore et dolore magna aliquyam erat, sed diam voluptua.
                            <br><br>
                            At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
                            takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,
                            consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                            aliquyam erat, sed diam voluptua.
                            <br><br>
                            At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
                            takimata sanctus est Lorem ipsum dolor sit amet.
                        </p>
                    </div>

                    <div class="section-tags">
                    <p class="tags-icon fas fa-tag">&nbsp; Tags: </p>
                    &nbsp;
                    <button class="terkait-button">Lorem Ipsum</button>
                    <button class="terkait-button">Dolor sit amet</button>
                    <button class="terkait-button">Investasi Asing</button>
                    </div>

                </div>
            </div>

        </div>

        <div class="col-md-4">
            <div class="section-data-populer">
                <h3>DATA POPULER</h3>

            </div>
        </div>
        <hr class="separator-content">
    </div>
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