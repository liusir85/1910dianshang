@extends('layouts.app')
@section('title', '前台')
@section('content')
<!-- slider -->
<div class="slider">

    <ul class="slides">
        <li>
            <img src="/Index/img/slide1.jpg" alt="">
            <div class="caption slider-content  center-align">
                <h2>WELCOME TO MSTORE</h2>
                <h4>Lorem ipsum dolor sit amet.</h4>
                <a href="" class="btn button-default">SHOP NOW</a>
            </div>
        </li>
        <li>
            <img src="/Index/img/slide2.jpg" alt="">
            <div class="caption slider-content center-align">
                <h2>JACKETS BUSINESS</h2>
                <h4>Lorem ipsum dolor sit amet.</h4>
                <a href="" class="btn button-default">SHOP NOW</a>
            </div>
        </li>
        <li>
            <img src="/Index/img/slide3.jpg" alt="">
            <div class="caption slider-content center-align">
                <h2>FASHION SHOP</h2>
                <h4>Lorem ipsum dolor sit amet.</h4>
                <a href="" class="btn button-default">SHOP NOW</a>
            </div>
        </li>
    </ul>

</div>
<!-- end slider -->

<!-- features -->
<div class="features section">
    <div class="container">
        <div class="row">
            <div class="col s6">
                <div class="content">
                    <div class="icon">
                        <i class="fa fa-car"></i>
                    </div>
                    <h6>Free Shipping</h6>
                    <p>Lorem ipsum dolor sit amet consectetur</p>
                </div>
            </div>
            <div class="col s6">
                <div class="content">
                    <div class="icon">
                        <i class="fa fa-dollar"></i>
                    </div>
                    <h6>Money Back</h6>
                    <p>Lorem ipsum dolor sit amet consectetur</p>
                </div>
            </div>
        </div>
        <div class="row margin-bottom-0">
            <div class="col s6">
                <div class="content">
                    <div class="icon">
                        <i class="fa fa-lock"></i>
                    </div>
                    <h6>Secure Payment</h6>
                    <p>Lorem ipsum dolor sit amet consectetur</p>
                </div>
            </div>
            <div class="col s6">
                <div class="content">
                    <div class="icon">
                        <i class="fa fa-support"></i>
                    </div>
                    <h6>24/7 Support</h6>
                    <p>Lorem ipsum dolor sit amet consectetur</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end features -->

<!-- quote -->
<div class="section quote">
    <div class="container">
        <h4>FASHION UP TO 50% OFF</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid ducimus illo hic iure eveniet</p>
    </div>
</div>
<!-- end quote -->

<!-- product_new -->
<div class="section product">
    <div class="container">
        <div class="section-head">
            <h4>新品</h4>
            <div class="divider-top"></div>
            <div class="divider-bottom"></div>
        </div>

        <div class="row margin-bottom">
            @foreach($is_now as $v)
            <div class="col s6 row margin-bottom">
                <div class="content">
                    <a href="{{url('/index/product_details/'.$v['goods_id'])}}"><img src="/Index/img/product-new3.png" alt=""></a>
                    <h6><a href="{{url('/index/product_details/'.$v['goods_id'])}}">{{$v['goods_name']}}</a></h6>
                    <div class="price">
                        ${{$v['shop_price']}} <span>$28</span>
                    </div>
                    <a href="{{url('/index/product_details/'.$v['goods_id'])}}"><button class="btn button-default">加入购物车</button></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- end product_new -->

<!-- promo -->
<div class="promo section">
    <div class="container">
        <div class="content">
            <h4>PRODUCT BUNDLE</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
            <button class="btn button-default">SHOP NOW</button>
        </div>
    </div>
</div>
<!-- end promo -->

<!-- product_hot -->
<div class="section product">
    <div class="container">
        <div class="section-head">
            <h4>热卖</h4>
            <div class="divider-top"></div>
            <div class="divider-bottom"></div>
        </div>

        <div class="row margin-bottom">
            @foreach($is_hot as $v)
            <div class="col s6 row margin-bottom">
                <div class="content">
                    <a href="{{url('/index/product_details/'.$v['goods_id'])}}"><img src="/Index/img/product-new3.png" alt=""></a>
                    <h6><a href="{{url('/index/product_details/'.$v['goods_id'])}}">{{$v['goods_name']}}</a></h6>
                    <div class="price">
                        ${{$v['shop_price']}} <span>$28</span>
                    </div>
                    <a href="{{url('/index/product_details/'.$v['goods_id'])}}"><button class="btn button-default">加入购物车</button></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- end product_hot -->
@endsection
