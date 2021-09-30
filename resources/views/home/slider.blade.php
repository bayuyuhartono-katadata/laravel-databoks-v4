@push('styles')
<style>
    .home-slider {
        margin-bottom: 20px;
    }

    h1 {
        color: #fff;
        text-align: center;
        font-weight: 300;
    }

    #slider {
        position: relative;
        overflow: hidden;
        /* margin: 20px auto 0 auto; */
        border-radius: 4px;
    }

    #slider ul {
        position: relative;
        margin: 0;
        padding: 0;
        height: 200px;
        list-style: none;
    }

    #slider ul li {
        position: relative;
        display: block;
        float: left;
        margin: 0;
        padding: 0;
        width: 100%;
        height: 490px;
        background: #ccc;
        text-align: center;
        line-height: 300px;
        background: rgb(2,0,36);
        background: linear-gradient(0deg, rgba(2,0,36,1) 0%, rgba(78,110,193,1) 100%, rgba(0,212,255,1) 100%);
    }

    span.control_prev,
    span.control_next {
        position: absolute;
        top: 30%;
        z-index: 999;
        display: block;
        margin: -1% 3%;
        width: auto;
        height: auto;
        color: #fff;
        text-decoration: none;
        font-weight: 10;
        font-size: 135px;
        opacity: 0.8;
        cursor: pointer;
    }

    span.control_prev:hover,
    span.control_next:hover {
        opacity: 1;
        -webkit-transition: all 0.2s ease;
    }

    span.control_prev {
        border-radius: 0 2px 2px 0;
    }

    span.control_next {
        right: 0;
        border-radius: 2px 0 0 2px;
    }

    .slider_option {
        position: relative;
        margin: 10px auto;
        width: 160px;
        font-size: 18px;
    }

    .slide-content {
        margin: 4% 1% 0% 1%;
        color: white;
        text-align: left;
        align-items: center;
    }

    .slide-description h2 {
        font-size: 40px;
        margin-bottom: 15px;
    }

    .slide-description h3 {
        font-size: 20px;
        margin-bottom: 15px;
    }

    .slide-description .wilayah {
        font-size: 15px;
        margin-bottom: 0px;
    }

    .slide-description .date-created {
        font-size: 15px;
        font-weight: 100;
    }

    .slide-thumbnail {
        text-align: right;
    }

    .slide-thumbnail img {
        width: 650px;
    }

</style>
@endpush     

<div id="slider">
    <span class="control_next"><img class="img-responsive" src="{{ asset('databoks-assets/other/angle-right.svg') }}"></span>
    <span class="control_prev"><img class="img-responsive" src="{{ asset('databoks-assets/other/angle-left.svg') }}"></span> 
    <ul>
        @foreach ($slider as $item)
            <li>
                <div class="container">
                    <div class="row slide-content">
                        <div class="col-sm-5 slide-description">
                            <h2>{{ $item->nama }}</h2>
                            <h3>{{ $item->summary }}</h3>
                            <h3 class="wilayah">INTERNASIONAL</h3>
                            <h3 class="date-created">{{ date('d/m/Y, h.m', strtotime($item->date_published )) }} WIB</h3>
                            {{-- <h3 class="date-created">26/4/2019, 14.18 WIB</h3> --}}
                        </div>
                        <div class="col-sm-7 slide-thumbnail">
                            <img class="img-responsive" src="https://cdn1.katadata.co.id/media/chart_thumbnail/{{ $item->id }}-{{ $item->slug }}.png">
                        </div>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
</div>

@push('scripts')
<script>
    jQuery(document).ready(function ($) {

        // setInterval(function () {
        //     moveRight();
        // }, 5000);

        var slideCount = $('#slider ul li').length;
        var slideWidth = '100%';
        var slideHeight = $('#slider ul li').height();
        var sliderUlWidth = slideCount * slideWidth;

        $('#slider').css({
            width: slideWidth,
            height: slideHeight
        });

        $('#slider ul').css({
            width: sliderUlWidth,
            marginLeft: -slideWidth
        });

        $('#slider ul li:last-child').prependTo('#slider ul');

        function moveLeft() {
            $('#slider ul').animate({
                left: +slideWidth
            }, 200, function () {
                $('#slider ul li:last-child').prependTo('#slider ul');
                $('#slider ul').css('left', '');
            });
        };

        function moveRight() {
            $('#slider ul').animate({
                left: -slideWidth
            }, 200, function () {
                $('#slider ul li:first-child').appendTo('#slider ul');
                $('#slider ul').css('left', '');
            });
        };

        $('span.control_prev').click(function () {
            moveLeft();
        });

        $('span.control_next').click(function () {
            moveRight();
        });

    });

</script>
@endpush