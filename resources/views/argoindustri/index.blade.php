@extends('layouts.master')
@push('styles')
<style>


</style>
@endpush
@section('content')

<div class="container">
    <section>
        <div class="row">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <p class="fa fa-home"></p>
                    </li>
                    <li class="breadcrumb-item">Industri</li>
                    <li class="breadcrumb-item active" aria-current="page">Argoindustri</li>
                </ol>
            </nav>
            <div class="col-9">
                <h3>
                    Argoindustri
                </h3>
            </div>
    
            <div class="col-3">
                <div class="">
                    <div class="form-group">
                        <select class="js-example-basic-single form-control fa-select" name="state" id="search-form">
                            <option value="AL">Pilih sub-industri</option>
                            <option value="WY">Relevansi</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="terkini list">
            <div class='container pd-container'>
                <div class='row pd-row1'>
                    @for ($i = 0; $i < 12; $i++) <div class='pd-area col-md-4'>
                        <a href='#'>
                            <div class='effect-bubba pd-rec'><img class='img-reponsive'
                                    src='{{ asset('databoks-assets/other/sample-thumb.svg') }}' />
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
                                    <a href="#">
                                        <img class="img-responsive" src="{{ asset('databoks-assets/images/share.svg') }}">
                                    </a>
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
    </section>
</div>
@stop

@push('scripts')
<script>


</script>
@endpush