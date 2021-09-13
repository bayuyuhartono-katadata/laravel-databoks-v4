@extends('layouts.master')
@push('styles')
<style>

.kanal-industri-content {
    background-color: #e0e0e0;
    padding-top: 10px;
    padding-bottom: 100px;
}

.content-card {
    background-color: rgb(255, 255, 255);
    height: 183px;
    width 100%: ;
    box-shadow: 0 3px 10px rgb(0 0 0 / 20%);
    padding: 10px 20px;
    line-height: 30px;
}

.content-card a {
    margin-bottom: 0.5rem;
    text-decoration: none;
}

.title-card {
    color: black;
    text-decoration: underline !important;
}

</style>
@endpush
@section('content')

<section>
    <div class="container">
        <div class="row">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <p class="fa fa-home"></p>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Industri</li>
                </ol>
            </nav>
            <div class="col-9">
                <h3>
                    Industri
                </h3>
            </div>
    
            <div class="col-3">
                <div class="">
                    <div class="form-group">
                        <span class="icon fa fa-search"></span>
                        <input type="text" class="form-control" id="search-form" placeholder="Cari industri">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="kanal-industri-content">
    <div class="container">
        <div class="content list">
            <div class='container pd-container'>
                <div class='row pd-row1'>
                    @for ($i = 0; $i < 12; $i++) <div class='pd-area col-md-4'>
                        <div class="content-card">
                            <a href="" class="title-card">NAMA INDUSTRI</a> <br>
                            <a href="">Sub-industri</a> <br>
                            <a href="">Sub-industri juga</a> <br>
                            <a href="">Sub-industri lain-lainnya</a> <br>
                            <a href="">Sub-industri</a> <br>
                        </div>
                </div>
    
                @endfor
    
            </div>
        </div>
    </div>
</div>

@stop

@push('scripts')
<script>


</script>
@endpush