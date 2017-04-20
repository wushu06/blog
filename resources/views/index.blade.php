@extends('layouts.front-end')

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
<a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">{{$post->title}}</a>

<span class="menu-price">View Post</span>
</span>
<span class="menu-subtitle">{{$post->body}}</span>
</div>

    @endforeach

</div>
</div>
</div>
</section>
@stop