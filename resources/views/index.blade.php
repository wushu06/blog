@extends('layouts.front-end')
@section('middle')


    <!--about-->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center marb-35">
                    <h1 class="header-h">About Mediterranean Cuisine</h1>
                    <p class="header-p"> </p>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="col-md-6 col-sm-6">
                        <div class="about-info">
                            <h2 class="heading">About our cuisine</h2>
                            <p>Rules for the preparation and consumption of food are common to the lands that border the Mediterranean. They offer both stability, continuity and reproduction of a specific pattern of eating which resists conquest, invasion, colonisation, social change, industrialisation and urbanisation. Consequently, wherever you go, in southern Europe or the lands bordering the southern Mediterranean, you will find a cuisine and gastronomic ritual which is always familiar</p>

                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <img src="images/algeria.jpg" alt="" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </section>
    <!--/about-->
    <!-- event -->
    <section id="event">
        <div class="bg-color" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center" style="padding:60px;">
                        <h1 class="header-h">Newest Recipe</h1>
                        <p class="header-p">Decorations 100% </p>
                    </div>
                    <div class="col-md-12" style="padding-bottom:60px;">
                        <div class="item active left">
                            <div class="col-md-6 col-sm-6 left-images">
                                <img src="images/res02.jpg" class="img-responsive">
                            </div>
                            <div class="col-md-6 col-sm-6 details-text">
                                <div class="content-holder">
                                    <h2>Our Pick For Today</h2>
                                    <p>Our choice of today<br> Everyday new pick from our healthy cuisine. Enjoy!</p>
                                    @foreach($posts as $post)

                                        @endforeach
                                    <a class="btn btn-imfo btn-read-more" href="{{url('posts', $post->id)}}">Read more</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('menu')
    <!-- menu -->
    <section id="menu-list" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center marb-35">
                    <h1 class="header-h">Menu List</h1>

                    <p class="header-p">

                </div>
                <div class="col-md-12  text-center gallery-trigger">

                    <ul>
                    <li><a class="filter" data-filter="all">Show All</a></li>

                    <div style="display: none">
                        <?php

                        $favcolor = 1;


                        switch ($favcolor) {
                            case 1:
                                echo 2;
                                break;
                            case 2:
                               echo 3;
                                break;

                            default:
                                echo 1;

                        }


                        ?>
                    </div>







                        @foreach($categories as $category)



                        <li><a class="filter" data-filter=".category-<?php echo $favcolor; $favcolor++ ?>">{{$category->name}}</a></li>

                        @endforeach



</ul>





</div>
<div id="Container2">
{{--    @foreach($posts as $post)
        @if($post->category_id == 1)
<div class="mix category-1 menu-restaurant" data-myorder="2">
<span class="clearfix">
<a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">{{$post->title}}</a>
<span style="left: 166px; right: 44px;" class="menu-line"></span>
<span class="menu-price">view post</span>
</span>
<span class="menu-subtitle"></span>
</div>
        @endif
    @endforeach

    @foreach($posts as $post)
        @if($post->category_id == 2)
<div class="mix category-2 menu-restaurant" data-myorder="2">
<span class="clearfix">
<a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">{{$post->title}}</a>
<span style="left: 166px; right: 44px;" class="menu-line"></span>
<span class="menu-price">$20.99</span>
</span>
<span class="menu-subtitle">Neque porro quisquam est qui dolorem</span>
</div>
            @endif
        @endforeach--}}
@foreach($posts as $post)


<div class="mix category-{{$post->category_id}} menu-restaurant" data-myorder="2">
<span class="clearfix">
<a class="menu-title" href="{{url('posts', $post->id)}}" data-meal-img="assets/img/restaurant/rib.jpg">{{$post->title}}</a>

<span class="menu-price">View Post</span>
</span>
<span class="menu-subtitle">{{$post->body}}</span>
</div>

    @endforeach

</div>
</div>
</div>
</section>
    <form method="post" action="{{url('mail')}}">
        {{ csrf_field() }}
        <input type="text" name="title">
        <input type="text" name="body">


        <input type="submit" value="submit" name="submit">

    </form>
@stop