<style>
    .owl-best .owl-prev{

    left: -2% !important;
    }
    .owl-best .owl-next{
    right: -2% !important;
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.2/iconfont/material-icons.min.css" />
{{-- owl-content --}}
<div class="owl-carousel owl-theme owl-best">
    <div class="item">
        <a href="{{ route('product.index')}}"><img src="https://klbtheme.com/groci/wp-content/uploads/2018/08/7-1-170x185.jpg" alt=""></a>
    </div>
    <div class="item">
        <a href="{{ route('product.index')}}"><img src="https://klbtheme.com/groci/wp-content/uploads/2018/08/8-1-170x185.jpg" alt=""></a>
    </div>
    <div class="item">
        <a href="{{ route('product.index')}}"><img src="https://klbtheme.com/groci/wp-content/uploads/2018/08/9-1-170x185.jpg" alt=""></a>
    </div>
    <div class="item">
        <a href="{{ route('product.index')}}"><img src="https://klbtheme.com/groci/wp-content/uploads/2018/08/4-1-170x185.jpg" alt=""></a>
    </div>
    <div class="item">
        <a href="{{ route('product.index')}}"><img src="https://klbtheme.com/groci/wp-content/uploads/2018/08/10-1-170x185.jpg" alt=""></a>
    </div>
    <div class="item">
        <a href="{{ route('product.index')}}"><img src="https://klbtheme.com/groci/wp-content/uploads/2018/08/3-1-170x185.jpg" alt=""></a>
    </div>
</div>
@include('carousel.script')
<script>
 //for categories
 $('.owl-best').owlCarousel({
    loop:true,
    dots:false,
    margin:10,
    nav:true,
    autoplay:true,
    smartSpeed:1500,
    autoplayTimeout:4000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:5
        }
    }
})
</script>