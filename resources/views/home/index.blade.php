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

    .seemore {
        text-align: right;
        margin-top: 20px;
        text-decoration: none;
        color: #DD8E3F;
    }

    .hr-line {
        display: none;
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
                    @foreach ($listterkini as $item)
                        
                        <div class='pd-area col-md-4'>
                            <a href='detail/{{ $item->slug }}'>
                                <div class='effect-bubba pd-rec'><img class='img-reponsive'
                                        src='https://cdn1.katadata.co.id/media/chart_thumbnail/{{ $item->id }}-{{ $item->slug }}.png' />
                                    <figcaption>

                                    </figcaption>
                                </div>
                            </a>
                            <div class='pd-des pd-sq-des'>
                                <h2>{{ $item->nama }}</h2>
                                <div class="row">
                                    <div class="col-9">
                                        <p>INTERNASIONAL</p>
                                        <p>{{ date('d/m/Y, h.m', strtotime($item->date_published )) }} WIB</p>
                                    </div>
                                    <div class="col-3 share-logo">
                                        <img class="img-responsive" src="{{ asset('databoks-assets/images/share.svg') }}">
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach
            </div>
        </div>
        <div class="loadmore">
            <button class="loadmore-button">Muat lebih banyak</button>
        </div>
    </section>

    <section class="section-topik">
        <h3 class="subtitle">TOPIK PILIHAN</h3>
        <div class="topik list">
            <div class='container pd-container'>
                <div class='row'>

                    <div class='pd-area col-md-2'>
                        <a href='#'>
                            <div class='topik-icon'>
                                <img src="{{ asset('databoks-assets/other/Migas.svg') }}">
                            </div>
                        </a>
                        <div class='topik-icon-title'>
                            <p>Migas</p>
                        </div>
                    </div>
                    <div class='pd-area col-md-2'>
                        <a href='#'>
                            <div class='topik-icon'>
                                <img src="{{ asset('databoks-assets/other/Digital.svg') }}">
                            </div>
                        </a>
                        <div class='topik-icon-title'>
                            <p>Digital</p>
                        </div>
                    </div>
                    <div class='pd-area col-md-2'>
                        <a href='#'>
                            <div class='topik-icon'>
                                <img src="{{ asset('databoks-assets/other/Demografi.svg') }}">
                            </div>
                        </a>
                        <div class='topik-icon-title'>
                            <p>Demografi</p>
                        </div>
                    </div>
                    <div class='pd-area col-md-2'>
                        <a href='#'>
                            <div class='topik-icon'>
                                <img src="{{ asset('databoks-assets/other/Moneter.svg') }}">
                            </div>
                        </a>
                        <div class='topik-icon-title'>
                            <p>Moneter</p>
                        </div>
                    </div>
                    <div class='pd-area col-md-2'>
                        <a href='#'>
                            <div class='topik-icon'>
                                <img src="{{ asset('databoks-assets/other/Fintech.svg') }}">
                            </div>
                        </a>
                        <div class='topik-icon-title'>
                            <p>Fintech</p>
                        </div>
                    </div>
                    <div class='pd-area col-md-2'>
                        <a href='#'>
                            <div class='topik-icon'>
                                <img src="{{ asset('databoks-assets/other/Energi.svg') }}">
                            </div>
                        </a>
                        <div class='topik-icon-title'>
                            <p>Energi</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row pd-row1">
                <a href='#' class="seemore">Seluruh topik >></a>
            </div>
        </div>
    </section>

    <section class="section-populer">
        <h3 class="subtitle">DATA POPULER</h3>
        <div class="populer list">
            <div class='container pd-container'>
                <div class='row pd-row1'>
                    @foreach ($listterpopuler as $item)

                    <div class='pd-area col-md-4'>
                        <a href='#'>
                            <div class='effect-bubba pd-rec'><img class='img-reponsive'
                                    src='https://cdn1.katadata.co.id/media/chart_thumbnail/{{ $item->id }}-{{ $item->slug }}.png' />
                                <figcaption>

                                </figcaption>
                            </div>
                        </a>
                        <div class='pd-des pd-sq-des'>
                            <h2>{{ $item->nama }}</h2>
                            <div class="row">
                                <div class="col-9">
                                    <p>INTERNASIONAL</p>
                                    <p>{{ date('d/m/Y, h.m', strtotime($item->date_published )) }} WIB</p>
                                </div>
                                <div class="col-3 share-logo">
                                    <img class="img-responsive" src="{{ asset('databoks-assets/images/share.svg') }}">
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>
    </section>

<section class="section-testimonial">
    <h3 class="subtitle">TESTIMONIAL</h3>
    <div class="testimonial list">
        <div class='container pd-container'>
            <div class='row pd-row1'>
                @for ($i = 0; $i < 3; $i++) <div class='pd-area col-md-4'>
                    <div class="row">
                        <div class='col-3'>
                            <img class="testimonial-avatar"
                                src="https://image.flaticon.com/icons/png/512/168/168726.png">
                        </div>
                        <div class='col-9'>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
                                sed diam voluptua.</p>
                        </div>
                    </div>
                    <div class="testimonial-name testimonial-sq-name">
                        <div class="row">
                            <div class='col-3'></div>
                            <div class='col-9'>
                                <p class="name">Jane Doe</p>
                                <p>Jabatan Lorem Ipsum</p>
                            </div>
                        </div>
                    </div>
            </div>

            @endfor

        </div>
    </div>
    </div>
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