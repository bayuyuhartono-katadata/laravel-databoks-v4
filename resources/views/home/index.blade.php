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
        border-bottom: 3px solid #CCCCCC;
    }

    .terkini-button {
        float: left;
        display: block;
        color: black;
        text-align: center;
        padding: 0px;
        margin-right: 15px;
        text-decoration: none;
        font-size: 17px;
        background: none;
        border: none;
        border-bottom: 5px solid transparent;
        transition: 0.3s;
    }

    .terkini-button:hover {
        
    }

    .terkini-button.active {
        border-bottom: 6px solid #DD8E3F;
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
            <button class="terkini-button active" >Semua Topik</button>
            <button class="terkini-button">Demografi</button>
            <button class="terkini-button">Moneter</button>
            <button class="terkini-button">Keuangan</button>
            <button class="terkini-button">PDB</button>
            <button class="terkini-button">Energi</button>
            <button class="terkini-button">Perdagangan</button>
            <button class="terkini-button">Properti</button>
            <button class="terkini-button">Pasar</button>
        </div>
    </section>
@stop

@push('scripts')
    <script>
        $(document).on('click', '.trending-button', function(){
            $(this).addClass('active').siblings().removeClass('active')
        })
        $(document).on('click', '.terkini-button', function(){
            $(this).addClass('active').siblings().removeClass('active')
        })
    </script>
@endpush