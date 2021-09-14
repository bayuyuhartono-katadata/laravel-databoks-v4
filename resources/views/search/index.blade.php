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

    .tags-button {
        border-radius: 23px;
        border: 2px solid #CCCCCC;
        background: #dddddd;
        padding: 5px 20px;
        display: inline-block;
        font-size: 12px;
        transition: 0.3s;
    }

    .tags-button:hover {
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
        margin-bottom: 25px;
    }

    .section-data-populer {}

    .section-data-populer h3 {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 30px;
    }

    .data-populer-img {
        position: relative;
        width: 100%;
    }

    .data-populer-img img {
        width: 100%;
    }

    .data-populer-img .after {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: block;
        background: rgba(221, 142, 63, 0.6);
    }
    .data-populer-img:hover .after {
        display: none;
        color: #FFF;
    }

    .data-populer-time {
        color: #666666;
        font-size: 10px;
    }

    .data-populer-text {
        padding: 0px;
        margin: 0px;
        font-size: 16px;
        line-height: 18px;
        margin-bottom: 0px;
    }

    .data-populer-desc {
        text-decoration: none;
        color: #000000;
        padding: 0px;
    }

    .section-data-trending {}

    .section-data-trending h3 {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 10px;
        margin-top: 30px;
    }

    .data-trending {
        margin: 10px 0px;
    }

    .data-trending button {
        font-size: 16PX;
        padding: 5px 20px;
        margin-top: 5px;
        margin-right: 5px;
        width: auto;
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

    .section-terkait {
        margin: 0px;
        padding: 0px;
    }

    .section-terkait h3 {
        font-size: 18px;
        font-weight: bold;
    }

    .dt-container {
        padding: 0px;
    }

    .share-logo {
        text-align: left !important;
        margin-top: 10px;
    }

    .pd-container .pd-rec {
        height: 140px !important;
        margin-bottom: 20px !important;
    }

    .search-top {
        padding: 0px 25px;
    }

    .search-top .form-group {
        position: relative;
    }

    .search-top p {
        font-size: 13px;
        margin-bottom: 10px;
    }
    
</style>
@endpush
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 content-detail">

            <div class="terkini list">
                <div class="search-top row">
                    <div class="col-12">
                        <p>200 search Result for:</p>
                    </div>
                    <div class="col-8">
                        <div class="form-group">
                            <span class="icon fa fa-search"></span>
                            <input type="text" class="form-control" id="search-form">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <select class="js-example-basic-single form-control" name="state" id="search-form">
                                <option value="AL">Date</option>
                                <option value="WY">Relevansi</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class='container pd-container'>
                    <div class='row pd-row1'>
                        @for ($i = 0; $i < 12; $i++)
                            
                                <div class="col-4">
                                    <a href='#'>
                                        <div class='effect-bubba pd-rec'><img class='img-reponsive'
                                                src='{{ asset('databoks-assets/other/sample-thumb.svg') }}' />
                                            <figcaption>
        
                                            </figcaption>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-8">
                                    <div class='pd-des pd-sq-des'>
                                        <h2>Inilah 10 Negara Termiskin di Dunia pada 2021</h2>
                                        <div class="row">
                                            <div class="">
                                                <p>INTERNASIONAL</p>
                                                <p>26/04/2021 14.18 WIB</p>
                                                <div class="share-logo">
                                                    <img class="img-responsive" src="{{ asset('databoks-assets/images/share.svg') }}">
                                                </div>
                                            </div>
                                        </div>                            
                                    </div>
                                </div>
    
                        @endfor
    
                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-4">
            <div class="section-data-populer">
                <h3>DATA POPULER</h3>
                <div class="data-populer-content">
                    <div class="row">
                        @for ($i = 0; $i < 5; $i++) 
                            <a href="#" class="col-3">
                                <div class="data-populer-img">
                                    <img src='{{ asset('databoks-assets/other/sample-thumb.svg') }}'/>
                                    <div class="after"></div>
                                </div>
                            </a>
                            <a href="#" class="col-9 data-populer-desc">
                                <p class="data-populer-text">Kabupaten Rembang Punya 176 Desa Ramah Anak</p>
                                <p class="data-populer-time far fa-clock">&nbsp; 17 Mar 2021</p>
                            </a>
                            @endfor
                    </div>
                </div>

            </div>

            <div class="section-data-trending">
                <h3>DATA TRENDING</h3>
                <div class="row data-trending">
                    <button class="trending-button">Lorem Ipsum</button>
                    <button class="trending-button">Dolor sit amet</button>
                    <button class="trending-button">Investasi Asing</button>
                    <button class="trending-button">Investasi Asing</button>
                    <button class="trending-button">Dolor sit amet</button>
                    <button class="trending-button">Lorem Ipsum</button>
                </div>

            </div>
        </div>
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