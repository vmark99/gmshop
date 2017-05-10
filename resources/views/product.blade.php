@extends('layout')

@section('content')


    <!-- Portfolio Item Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">{{$product->TITLE}}

            </h1>
        </div>
    </div>
    <!-- /.row -->

    <!-- Portfolio Item Row -->
    <div class="row">

        <div class="col-md-8">
            <img class="img-responsive" src="{{cloudinaryShow($product->url, 750, 500)}}" alt="">
        </div>

        <div class="col-md-4">
            <h3>{{$product->TITLE}}</h3>
            <h2 class="pull-right">{{$product->purchase['PRICE'] ? $product->purchase['PRICE'] : '10'}} $</h2>

            <p>
                <button class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Buy</button>

                <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal2">Rent</button>
            </p>
        </div>

    </div>
    <!-- /.row -->

    <!-- Related Projects Row -->
    <div class="row">

        <div class="col-lg-12">
            <h3 class="page-header">Related Projects</h3>
        </div>

        @foreach(\App\Product::skip(1)->where('P_TYPE', '=', 'MOVIE')->take(4)->get() as $product)
        <div class="col-sm-3 col-xs-6">
            <a href="{{route('movies', $product->TITLE)}}">
                <img class="img-responsive portfolio-item" src="{{cloudinaryShow($product->url, 500, 300)}}" alt="">
            </a>
        </div>

        @endforeach

    </div>
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
                        <h5> You will be charged {{$product->rent['PRICE'] ? $product->rent['PRICE'] : 10}} $</h5>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default text-info" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-default text-info" data-dismiss="modal" data-toggle="modal" data-target="#myModal2">Rent</button>

                </div>
            </div>
        </div>
    </div>



@endsection