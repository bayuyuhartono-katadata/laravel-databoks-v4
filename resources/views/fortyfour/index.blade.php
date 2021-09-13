@extends('layouts.master')
@push('styles')
<style>

.row-404 {
    margin-top: 80px;
}

h3.title-404 {
    margin-top: 80px;
    font-size: 64px;
}

h4.subtitle-404 {
    color: #666666;
    font-size: 18px;
    font-weight: 400;
}

.subtitle-404 a {
    text-decoration: none;
}

.search-404 {
margin: 25px 0px;
}

.img-404 img {
    width: 100%;
}

</style>
@endpush
@section('content')

<div class="container">
    <div class="row row-404">
        <div class="col-6">
            <h3 class="title-404">Oops! This page cannot be found</h3>
            <h4 class="subtitle-404">It looks like this page has moved somewhere else but you can try searching for what you are looking for</h4>
            <div class="search-404">
                <div class="form-group">
                    <span class="icon fa fa-search"></span>
                    <input type="text" class="form-control" id="search-form">
                </div>
            </div>
            <h4 class="subtitle-404">Or, you can 
                <a href="#">go back to home »</a></h4>
        </div>

        <div class="col-6 img-404">
            <img src="{{ asset('databoks-assets/images/404-img.svg') }}" alt="">
        </div>
    </div>
</div>
@stop

@push('scripts')
<script>


</script>
@endpush