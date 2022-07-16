@extends('layout')
@section('content')
<div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Sản phẩm mới nhất</h2>
                        @foreach($new_product as $key => $product)
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                             <a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_slug)}}">
                                <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="" />
                                            <h2>{{number_format($product->product_price).' '.'VNĐ'}}</h2>
                                            <p>{{$product->product_name}}</p>
                                            <a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_slug)}}" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>Xem chi tiết</a>
                                        </div>
                                      
                                </div>
                            </a>
                                
                            </div>
                        </div>
                        @endforeach
                    </div><!--features_items-->
        <!--/recommended_items-->
@endsection