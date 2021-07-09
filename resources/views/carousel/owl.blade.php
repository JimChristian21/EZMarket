{{-- style --}}

<style>
    .owl-dots{
        width: 100%;
        text-align: center;
        position: absolute;
        bottom: 1%;
    }
    .owl-dots span{
        width: 40px !important;
        height: 3px !important;
    }
    .owl-dots button{
        border: none !important;
        outline: none !important;
    }
    .owl-header .owl-nav button{
        border: none !important;
        outline: none !important;
    }
    .owl-prev, .owl-next{
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background-color:aqua !important;
        border-radius: 50% !important;
        width: 3% !important;
        color: #fff;
        font-size: 30px !important;
        font-weight: bolder !important;
        
    }
    .owl-header .owl-prev{
        left: 1% !important;
    }
    .owl-header .owl-next{
        right: 1% !important;
    }
</style>
{{-- owl-content --}}
<div id="owl-demo" class="owl-carousel owl-theme owl-header">
    <div class="slide slide1">
        <div class="slide-content"><img src="https://klbtheme.com/groci/wp-content/uploads/2018/08/slider1.jpg" alt=""></div>
    </div>
    <div class="slide slide2">
        <div class="slide-content"><img src="https://klbtheme.com/groci/wp-content/uploads/2018/08/slider1.jpg" alt=""></div>
    </div>
    <div class="slide slide3">
        <div class="slide-content"><img src="https://klbtheme.com/groci/wp-content/uploads/2018/08/slider2.jpg" alt=""></div>
    </div>
</div>
{{-- scripting --}}
@include('carousel.script')
<script>
    //for header
    $('.owl-carousel').owlCarousel({
        items:1,
        loop:true,
        nav:true,
        dots:true,
        autoplay:true,
        autoplayTimeout:3000,
        smartSpeed:1500,
        autoplayHoverPause:true
    })
</script>