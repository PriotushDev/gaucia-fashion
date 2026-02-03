@extends('website.master')

@section('title')
    Cart Detail
@endsection

@section('body')

    <!-- Start Page Header -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb">
                        <a href="#"><i class="icon-home"></i> Home</a>
                        <span class="crumbs-spacer"><i class="fa fa-angle-double-right"></i></span>
                        <span class="current">Cart</span>
                        <h2 class="entry-title">Your Cart</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Header -->

    <!-- Start Content -->
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="header text-center">
                    <h3 class="small-title">Shopping cart</h3>
                    <p>Shopping cart-Checkout-Order complete</p>
                </div>
                <div class="col-md-12">
                    <div class="wishlist">
                        <div class="col-md-4 col-sm-4 text-center">
                            <p>Product</p>
                        </div>
                        <div class="col-md-2 col-sm-2">
                            <p>Price</p>
                        </div>
                        <div class="col-md-2 col-sm-2">
                            <p>Quantity</p>
                        </div>
                        <div class="col-md-2 col-sm-2">
                            <p>Total</p>
                        </div>
                        <div class="col-md-2 col-sm-2">
                            <p>Close</p>
                        </div>
                    </div>
                </div>
                <div class="wishlist-entry clearfix">
                    <div class="col-md-4 col-sm-4">
                        <div class="cart-entry">
                            <a class="image" href="#"><img src="{{ asset('/') }}website/assets/img/wishlist/img-1.jpg"  alt=""></a>
                            <div class="cart-content">
                                <h4 class="title">Black Beanie Skate Girl</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing Commodo...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 entry">
                        <div class="price">
                            $ 190.00 <del>$280.00</del>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2">
                        <ul class="quantity-selector">
                            <li class="entry number-minus">10</li>
                            <li class="entry number">10</li>
                            <li class="entry number-plus">10</li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-2 entry">
                        <div class="price">
                            $ 220.00
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 entry">
                        <a class="btn-close" href="#"><i class="icon-close"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->


    <!-- Content Section Start -->
    <div id="content">
        <div class="container">

            <div class="row">
                <div class="col-md-6 col-sm-6 col-sx-12">
                    <!-- Payment Method -->
                    <h2 class="title-checkout">
                        <i class="icon-credit-card"></i>
                        Payment Method
                    </h2>
                    <!-- /Payment Method -->
                    <div class="form-group form-group-top clearfix">
                        <div class="radio">
                            <label><input checked="" type="radio"><span>Free Shipping</span></label>
                        </div>
                        <div class="radio">
                            <label><input type="radio"> <span>Flat Rate: $10.00</span></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Name on Card <sup>*</sup></label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label>Credit Card Type <sup>*</sup></label>
                        <select class="selectpicker">
                            <option selected="selected" value="menu-order">Type</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Credit Card Number  <sup>*</sup></label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label>Card Verification Number<sup>*</sup></label>
                        <input class="form-control" type="text">
                    </div>
                    <!-- GRAND TOTAL -->
                    <div class="card card--padding fill-bg">
                        <table class="table-total-checkout">
                            <tbody>
                            <tr>
                                <th>GRAND TOTAL:</th>
                                <td>$197.00</td>
                            </tr>
                            </tbody>
                        </table>
                        <a href="#" class="btn btn-common btn-full">Place Order Now <span class="icon-action-redo"></span></a>
                    </div>
                    <!-- /GRAND TOTAL -->
                </div>
                <div class="col-md-6 col-sm-6 col-sx-12">
                    <div class="order-details">
                        <h2 class="title-checkout"><i class="icon-basket-loaded"></i>Your Order</h2>
                        <div class="order_review margin-bottom-35">
                            <table class="table table-responsive table-review-order">
                                <thead>
                                <tr>
                                    <th class="product-name">Product</th>
                                    <th class="product-total">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><p>Challenge Battery Hammer Drill</p></td>
                                    <td><p class="price">$190.00</p></td>
                                </tr>
                                <tr>
                                    <td><p>Power X Change Battery - 3.0 mAh</p></td>
                                    <td><p class="price">$34.00</p></td>
                                </tr>
                                <tr>
                                    <td><p>Percussion Hammer Drill</p></td>
                                    <td><p class="price">$87.00</p></td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Subtotal</th>
                                    <td>
                                        <p class="price">$87.00</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Shipping</th>
                                    <td>
                                        <form action="#" class="shipping">
                                            <div class="radio">
                                                <label><input checked="" type="radio"> <span>Free Shipping</span></label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio"> <span>Flat Rate:</span> </label><span class="price"> $10.00</span>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Total</th>
                                    <td><p class="price">$197.00</p></td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Section End -->




@endsection
