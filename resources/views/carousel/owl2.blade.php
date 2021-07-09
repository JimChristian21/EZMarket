<style>
    
    .slide-item img{
        border-radius: 100% !important;
        width: 50px !important;
        height: 50px;
    }
    .owl-categories .owl-prev{

        left: -5% !important;
    }
    .owl-categories .owl-next{
        right: -5% !important;
    }
    .slide-item h6{

        width: 100px !important;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis !important;
    }
</style>
{{-- owl content --}}
<div class="owl-carousel owl-theme owl-categories py-3">
    <div class="slide-item text-center">
        <a href="{{ url('/categories') }}" class="text-reset text-decoration-none">
        <img src="https://klbtheme.com/groci/wp-content/uploads/2018/08/3-3-62x62.jpg" class="rounded-circle text-center ml-4" alt="">
        <h6 class="text-center"> Beverages</h6>
        </a>
    </div>
    <div class="slide-item text-center">
        <a href="{{ url('/categories') }}" class="text-reset text-decoration-none"> 
        <img src="https://klbtheme.com/groci/wp-content/uploads/2018/08/9-2-62x62.jpg" class="rounded-circle text-center  ml-4" alt="">
        <h6 class="text-center">Biscuits, snacks & Chocolates</h6>
        </a>
    </div>
    <div class="slide-item text-center">
        <a href="{{ url('/categories') }}" class="text-reset text-decoration-none">
        <img src="https://klbtheme.com/groci/wp-content/uploads/2018/08/8-2-62x62.jpg" class="rounded-circle text-center  ml-4" alt="">
        <h6 class="text-center"> Breakfast & Dairy</h6>
        </a>
    </div>
    <div class="slide-item text-center">
        <a href="{{ url('/categories') }}" class="text-reset text-decoration-none">
        <img src="https://klbtheme.com/groci/wp-content/uploads/2018/08/1-4-62x62.jpg" class="rounded-circle text-center  ml-4" alt="">
        <h6 class="text-center"> Fruits & Vegetables</h6>
        </a>
    </div>
    <div class="slide-item text-center">
        <a href="{{ url('/categories') }}" class="text-reset text-decoration-none">
        <img src="https://klbtheme.com/groci/wp-content/uploads/2018/08/5-2-62x62.jpg" class="rounded-circle text-center  ml-4" alt="">
        <h6 class="text-center"> Furnishing & Home Appliances</h6>
        </a>
    </div>
    <div class="slide-item text-center">
        <a href="{{ url('/categories') }}" class="text-reset text-decoration-none">
        <img src="https://klbtheme.com/groci/wp-content/uploads/2018/08/2-4-62x62.jpg" class="rounded-circle text-center  ml-4" alt="">
        <h6 class="text-center"><a href="{{ url('/categories') }}" class="text-reset text-decoration-none"> Groceries</h6>
        </a>
    </div>
    <div class="slide-item text-center">
        <a href="{{ url('/categories') }}" class="text-reset text-decoration-none">
        <img src="https://klbtheme.com/groci/wp-content/uploads/2018/08/4-2-62x62.jpg" class="rounded-circle text-center  ml-4" alt="">
        <h6 class="text-center"> Kitchen Appliances</h6>
        </a>
    </div>
    <div class="slide-item text-center">
        <a href="{{ url('/categories') }}" class="text-reset text-decoration-none">
        <img src="https://klbtheme.com/groci/wp-content/uploads/2018/08/6-2-62x62.jpg" class="rounded-circle text-center  ml-4" alt="">
        <h6 class="text-center"> Household Needs</h6>
        </a>
    </div>
    <div class="slide-item text-center">
        <a href="{{ url('/categories') }}" class="text-reset text-decoration-none">
        <img src="https://klbtheme.com/groci/wp-content/uploads/2018/08/12-2-62x62.jpg" class="rounded-circle text-center  ml-4" alt="">
        <h6 class="text-center"> Meats & SeaFood</h6>
        </a>
    </div>
    <div class="slide-item text-center">
        <a href="{{ url('/categories') }}" class="text-reset text-decoration-none">
        <img src="https://klbtheme.com/groci/wp-content/uploads/2018/08/10-2-62x62.jpg" class="rounded-circle text-center  ml-4" alt="">
        <h6 class="text-center"> Noodles, Sauce & Instant Food</h6>
        </a>
    </div>
    <div class="slide-item text-center">
        <a href="{{ url('/categories') }}" class="text-reset text-decoration-none">
        <img src="https://klbtheme.com/groci/wp-content/uploads/2018/08/7-2-62x62.jpg" class="rounded-circle text-center  ml-4" alt="">
        <h6 class="text-center"> Hygiene Care</h6>
        </a>
    </div>
    <div class="slide-item text-center">
        <a href="{{ url('/categories') }}" class="text-reset text-decoration-none">
        <img src="https://klbtheme.com/groci/wp-content/uploads/2018/08/11-2-62x62.jpg" class="rounded-circle text-center  ml-4" alt="">
        <h6 class="text-center"> Pet Needs</h6>
        </a>
    </div>
</div>
{{-- scripting --}}

@include('carousel.script')
<script>
 //for categories
 $('.owl-categories').owlCarousel({
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
            items:4
        },
        1000:{
            items:7
        }
    }
})
</script>
