@extends('layout')

@section('content')


    <div class="row">

        <div class="col-md-3">
            <p class="lead">Movies</p>

        </div>


        <div class="col-md-9">




            <div class="row">
                <div class="page-header">
                    <h1 class="pull-left">Movies</h1>
                    <button class="btn btn-success pull-right " style="margin-top: 20px;">More</button>
                    <div class="clearfix"></div>
                </div>
                @foreach($products as $product)


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