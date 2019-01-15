@extends('layouts.frontend.master')

@section('content')
    <div id="colorlib-featured-product">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <a href="shop.html" class="f-product-1" style="background-image: url(images/item-1.jpg);">
                        <div class="desc">
                            <h2>Fahion <br>for <br>men</h2>
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="" class="f-product-2" style="background-image: url(images/item-2.jpg);">
                                <div class="desc">
                                    <h2>New <br>Arrival <br>Dress</h2>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="" class="f-product-2" style="background-image: url(images/item-4.jpg);">
                                <div class="desc">
                                    <h2>Sale <br>20% <br>off</h2>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-12">
                            <a href="" class="f-product-2" style="background-image: url(images/item-3.jpg);">
                                <div class="desc">
                                    <h2>Shoes <br>for <br>men</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="colorlib-intro" class="colorlib-intro" style="background-image: url(images/cover-img-1.jpg);"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="intro-desc">
                        <div class="text-salebox">
                            <div class="text-lefts">
                                <div class="sale-box">
                                    <div class="sale-box-top">
                                        <h2 class="number">45</h2>
                                        <span class="sup-1">%</span>
                                        <span class="sup-2">Off</span>
                                    </div>
                                    <h2 class="text-sale">Sale</h2>
                                </div>
                            </div>
                            <div class="text-rights">
                                <h3 class="title">Just hurry up limited offer!</h3>
                                <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                <p><a href="shop.html" class="btn btn-primary">Shop Now</a> <a href="#" class="btn btn-primary btn-outline">Read
                                        more</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="colorlib-shop">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
                    <h2><span>Sản phẩm mua nhiều nhất</span></h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure, debitis? Eaque fugiat quisquam beatae sunt
                        similique obcaecati cupiditate saepe ab minus, praesentium velit inventore vitae repellat? Nisi repellendus sit
                        deserunt.</p>
                </div>
            </div>
            <div class="row">
                @for ($i = 1; $i <= 8; $i++)
                    @include('frontend._inc.item-product')
                @endfor
            </div>
        </div>
    </div>
@endsection

@push('custome-scripts')
    
@endpush