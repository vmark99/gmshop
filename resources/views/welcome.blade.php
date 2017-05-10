@extends('layout')

@section('content')


    <div class="row">

        <div class="col-md-3">
            <p class="lead">GM Shop</p>
            <div class="list-group">
                <a href="{{route('movies')}}" class="list-group-item">Movies</a>
                <a href="{{route('games')}}" class="list-group-item">Games</a>
            </div>
        </div>


        <div class="col-md-9">

            <div class="row carousel-holder">

                <div class="col-md-12">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="slide-image" src="{{cloudinaryShow($products->first()->url, 847, 300)}}" alt="">
                            </div>
                            @foreach($products as $product)

                                <div class="item">
                                    <img class="slide-image" src="{{cloudinaryShow($product->url, 847, 300)}}" alt="">
                                </div>
                            @endforeach

                        </div>
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>

            </div>

            <div class="page-header">
                <h1 class="pull-left">Movies</h1>
                <a href="{{route('movies')}}">
                    <button class="btn btn-success pull-right " style="margin-top: 20px;">More</button>
                </a>

                <div class="clearfix"></div>
            </div>
            <div class="row">

                @foreach($products->where('P_TYPE', '=', 'MOVIE')->take(6) as $product)


                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img src="{{cloudinaryShow($product->url, 320, 150)}}" alt="">
                        <div class="caption">
                            <h4 class="pull-right">${{$product->purchase['PRICE'] ? $product->purchase['PRICE'] : '10'}}</h4>
                            <h4><a href="{{route('product', $product->TITLE)}}">{{$product->TITLE}}</a>
                            </h4>
                        </div>
                        <div class="ratings">

                            <div class="ratings">

                                <p>
                                    @for($i = 0; $i< $product->rate['NO_OF_STARS'] ? $product->rate['NO_OF_STARS'] : 0 ; $i++)
                                        <span class="glyphicon glyphicon-star"></span>
                                    @endfor



                                    {{$product->rate['NO_OF_STARS'] ? $product->rate['NO_OF_STARS'] : 0}} stars
                                </p>
                            </div>
                        </div>
                    </div>
                </div>



                @endforeach


            </div>

            <div class="page-header">
                <h1 class="pull-left">Games</h1>
                <a href="{{route('games')}}">
                    <button class="btn btn-success pull-right " style="margin-top: 20px;">More</button>
                </a>

                <div class="clearfix"></div>
            </div>
            <div class="row">

                @foreach($products->where('P_TYPE', '=', 'GAME')->take(6) as $product)


                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="{{cloudinaryShow($product->url, 320, 150)}}" alt="">
                            <div class="caption">
                                <h4 class="pull-right">${{$product->purchase['PRICE'] ? $product->purchase['PRICE'] : '10'}}</h4>
                                <h4><a href="{{route('product', $product->TITLE)}}">{{$product->TITLE}}</a>
                                </h4>
                            </div>
                            <div class="ratings">

                                <div class="ratings">

                                    <p>
                                        @for($i = 0; $i< $product->rate['NO_OF_STARS'] ? $product->rate['NO_OF_STARS'] : 0 ; $i++)
                                            <span class="glyphicon glyphicon-star"></span>
                                        @endfor



                                        {{$product->rate['NO_OF_STARS'] ? $product->rate['NO_OF_STARS'] : 0}} stars
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>



                @endforeach


            </div>

        </div>

    </div>





@endsection