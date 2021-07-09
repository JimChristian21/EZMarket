<style>
    .item img{
        border-radius: 10% !important;
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
        width: 5% !important;
        color: #fff;
        font-size: 30px !important;
        font-weight: bolder !important;
        
    }
    .owl-carousel .owl-prev{

    left: -10% !important;
    }
    .owl-carousel .owl-next{
    right: -10% !important;
    }
</style>

    <div class="owl-carousel owl-theme">
        <div class="item">
            <img class="bg-white border border-2" src="https://klbtheme.com/groci/wp-content/uploads/2018/08/1-1-67x67.jpg" alt="">
        </div>
        <div class="item">
            <img class="bg-white border border-2" src="https://klbtheme.com/groci/wp-content/uploads/2018/08/1-1-67x67.jpg" alt="">
        </div>
        <div class="item">
            <img class="bg-white border border-2" src="https://klbtheme.com/groci/wp-content/uploads/2018/08/1-1-67x67.jpg" alt="">
        </div>
        <div class="item">
            <img class="bg-white border border-2" src="https://klbtheme.com/groci/wp-content/uploads/2018/08/1-1-67x67.jpg" alt="">
        </div>
        <div class="item">
            <img class="bg-white border border-2" src="https://klbtheme.com/groci/wp-content/uploads/2018/08/1-1-67x67.jpg" alt="">
        </div>
        <div class="item">
            <img class="bg-white border border-2" src="https://klbtheme.com/groci/wp-content/uploads/2018/08/1-1-67x67.jpg" alt="">
        </div>
    </div>
@include('carousel.script')
<script>
 //for categories
 $('.owl-carousel').owlCarousel({
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
            items:3
        },
        1000:{
            items:4
        }
    }
})
</script>