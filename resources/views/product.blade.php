@extends('layout')

@section('content')
    <div class="row">



            <div class="col-md-12">
                <div id="row">
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <img class="img-responsive" src="{{cloudinaryShow($product->url, 400, 300)}}" alt="">

                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="caption-full">
                            <h2><a href="#">{{$product->TITLE}}</a>
                            </h2>
                            <h2 class="pull-right">{{$product->purchase['PRICE'] ? $product->purchase['PRICE'] : '10'}} $</h2>

                        </div>
                        <div class="ratings">

                            <p>
                                @for($i = 0; $i< $product->rate['NO_OF_STARS'] ? $product->rate['NO_OF_STARS'] : 0 ; $i++)
                                    <span class="glyphicon glyphicon-star"></span>
                                @endfor



                                {{$product->rate['NO_OF_STARS'] ? $product->rate['NO_OF_STARS'] : 0}} stars
                            </p>
                            <button class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Buy</button>

                            <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal2">Rent</button>

                        </div>

                        <!-- Button trigger modal -->


                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Buy {{$product->TITLE}}</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row text-center">
                                            <h4> Thank you for purchasing {{$product->TITLE}}</h4>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default text-info" data-dismiss="modal">Close</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Rent {{$product->TITLE}}</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row text-center">
                                            <h4>
                                                Rent for a maximum of {{$product->rent['DURATION']}} days at {{$product->rent['PRICE'] ? $product->rent['PRICE'] : 10}} $
                                            </h4>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default text-info" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-default text-info" data-dismiss="modal" data-toggle="modal" data-target="#myModal3">Rent</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel"></h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row text-center">
                                            <h4>
                                                Thanks for Renting {{$product->TITLE}}
                                            </h4>
                                            <h5> You will be charged {{$product->rent['PRICE']}} $</h5>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default text-info" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-default text-info" data-dismiss="modal" data-toggle="modal" data-target="#myModal2">Rent</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>




    </div>

@endsection