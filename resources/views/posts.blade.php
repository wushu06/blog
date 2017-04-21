@extends('layouts.front-end')

@section('middle')

    <!--about-->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center marb-35">
                    <h1 class="header-h">{{$posts->title}}</h1>
                    <p class="header-p">{{$posts->title}}<br>{{$posts->category_id}}
                         </p>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="col-md-6 col-sm-6">
                        <div class="about-info">

                            <p>{{$posts->body}}</p>
                            <h2 class="heading">Comments</h2>

                        @if(count($comments)>0)
                                @foreach($comments as $comment)
                            <div >
                                <strong>{{$comment->author}}</strong>
                                <p>Created at: {{$comment->created_at}}</p>
                                <p>{{$comment->body}}</p>
                                <hr>

                            </div>
                                @endforeach
                                @else <h2>No Comments</h2>
                        @endif
                            <button id="write-comment" class="btn btn-default">Write a Comment</button>


                            <div id="display-comment" style="display: none">
                               {{Form::open(['method'=>'POST', 'action'=>'AdminCommentsController@store'])}}

                                <input type="hidden" name="post_id" value="{{$posts->id}}">
                                   <div class="form-group">
                                       {!! Form::label('body', 'Write a Comment') !!}
                                       {!! Form::textarea('body', null, ['class'=>'form-control', 'rows'=>3]) !!}
                                   </div>

                                   <div class="form-group">
                                       {!! Form::submit('Post Comment', ['class'=>'btn btn-primary']) !!}
                                   </div>

                                   {!! Form::close() !!}
                            </div>




                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <img src="/images/{{$posts->photo->name}}" alt="" class="img-responsive">
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
                        <h1 class="header-h">Up Coming events</h1>
                        <p class="header-p">Decorations 100% complete here</p>
                    </div>
                    <div class="col-md-12" style="padding-bottom:60px;">
                        <div class="item active left">
                            <div class="col-md-6 col-sm-6 left-images">
                                <img src="images/res02.jpg" class="img-responsive">
                            </div>
                            <div class="col-md-6 col-sm-6 details-text">
                                <div class="content-holder">
                                    <h2>Joyful party</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore eos suscipit earum voluptas aliquam recusandae, quae iure adipisci, inventore quia, quos delectus quaerat praesentium id expedita nihil illo accusantium, tempora.</p>
                                    <address>
                                        <strong>Place: </strong>
                                        1612 Collins Str, Victoria 8007
                                        <br>
                                        <strong>Time: </strong>
                                        07:30pm
                                    </address>
                                    <a class="btn btn-imfo btn-read-more" href="events-details.html">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
