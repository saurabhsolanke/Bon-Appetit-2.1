@extends('layouts.app')

@section('content')
<style>
    html, body {
        background-image: url("five-white-plates-with-different-kinds-of-dishes-54455.jpg");
        background-color: #000000;
        background-repeat: repeat;
        background-attachment: fixed;
        background-position: center;
        background-size: 100%;
        background-color: #000000;
        color: #000000;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }


        .details {
            border: 1.5px solid grey;
            color: #212121;
            width: 100%;
             height: auto;
            box-shadow: 0px 0px 10px #212121
            }

        .cart {
            background-color: #212121;
            color: white;
            margin-top: 10px;
            font-size: 12px;
            font-weight: 900;
            width: 100%;
            height: 39px;
            padding-top: 9px;
            box-shadow: 0px 5px 10px #212121
            }

        .card {
             width: fit-content
            }

        .card-body {
             width: fit-content
            }

        .btn {
             border-radius: 0
            }

        .img-thumbnail {
             border: none
            }

        .card {
            box-shadow: 0 20px 40px rgba(0, 0, 0, .2);
            border-radius: 5px;
            padding-bottom: 10px
            }

        .text {
            color: black;
             }    
    </style>    


<div class="container ">
    <div class="row justify-content-center ">
        <div class="col-md ">
            <div class="card">
                <div class="card-header bg-dark text-white"><h3>Menu</h3>
                    
                    {{--  cart showing beside Bon appetit  copied from    https://webmobtuts.com/backend-development/creating-a-shopping-cart-with-laravel/ --}}
                    <div class="container">
 
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-12 main-section">
                                <div class="dropdown">
                                    <button type="button" class="btn btn-info" data-toggle="dropdown">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <div class="row total-header-section">
                                            <div class="col-lg-6 col-sm-6 col-6">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                                            </div>
                     
                                            <?php $total = 0 ?>
                                            @foreach((array) session('cart') as $id => $details)
                                                <?php $total += $details['price'] * $details['quantity'] ?>
                                            @endforeach
                     
                                            <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                                                <p>Total: <span class="text-info">$ {{ $total }}</span></p>
                                            </div>
                                        </div>
                     
                                        @if(session('cart'))
                                            @foreach(session('cart') as $id => $details)
                                                <div class="row cart-detail">
                                                    <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                                        <img src="{{ $details['photo'] }}" />
                                                    </div>
                                                    <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                                        <p>{{ $details['name'] }}</p>
                                                        <span class="price text-info"> ${{ $details['price'] }}</span> <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                        <div class="row">
                                            <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                                <a href="{{ url('cart') }}" class="btn btn-primary btn-block">View all</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>
                
                
                {{-- <div class='container-fluid'>
                    <div class="card mx-auto col-md-3 col-10 mt-5"> <img class='mx-auto img-thumbnail' src="burger-with-sunny-side-up-on-white-surface-2293537.jpg" width="auto" height="auto" />
                        <div class="card-body text-center mx-auto">
                            <div class='cvp'>
                                <h5 class="card-title font-weight-bold">Yail wrist watch</h5>
                                <p class="card-text">$299</p> <a href="#" class="btn details px-auto">view details</a><br /> <a href="#" class="btn cart px-auto">ADD TO CART</a>
                            </div>
                        </div>
                    </div>
                {{-- </div>  --}}

                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <div class="container p-3 my-3 bg-dark text-white">
                        <div class="container">
                            <div class="row">
                              <div class="col-sm">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="burger-with-sunny-side-up-on-white-surface-2293537.jpg" alt="Card image cap">
                                    <div class="card-body">
                                      <h5 class="card-title">Card title</h5>
                                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                      <a href="#" class="btn details px-auto">view details</a>
                                      <a href="#"  class="btn cart px-auto">add to cart</a>
                                    </div>
                                  </div>
                                </div>
                              

                                
                                <div class="card">
                                <div class="col-sm">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="burger-with-sunny-side-up-on-white-surface-2293537.jpg" alt="Card image cap">
                                    <div class="card-body">
                                      <h5 class="card-title">Card title</h5>
                                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                      <a href="#" class="btn details px-auto">view details</a>
                                      <a href="#"class="btn cart px-auto">add to cart</a>
                                    </div>
                                  </div>
                                </div></div>

                                <div class="col-xs-18 col-sm-6 col-md-3">
                                    <div class="thumbnail">
                                        <img src="" alt="">
                                        <div class="caption">
                                            <h4>Product name</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit</p>
                                            <p><strong>Price: </strong> 567.7$</p>
                                            <p class="btn-holder"><a href="#" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm">
                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="burger-with-sunny-side-up-on-white-surface-2293537.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <a href="#" class="btn details px-auto">view details</a>
                                            <a href="#" class="btn cart px-auto">add to cart</a>
                                        </div>
                                    </div>
                                </div>   

                           </div>
                        </div>                  
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <div class="container page">
        @yield('content')
    </div>
     
    @yield('scripts')
</body>
</div>
@endsection
