@extends('website.master')

@section('title')
    New Arrivals
@endsection

@section('body')

    <!-- Start Page Header -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb">
                        <a href="{{ route('website.home') }}"><i class="icon-home"></i> Home</a>
                        <span class="crumbs-spacer"><i class="fa fa-angle-double-right"></i></span>
                        <span class="current">All-Products</span>
                        <h2 class="entry-title">All Products Page</h2>
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
                <div class="col-sm-12">
                    <!-- Product filter Start -->
                    <div class="product-filter">
                        <p class="result-count">Showing result of your search keyword "Dress"</p>
                        <div class="sort-by">
                            <span>Sort by: </span>
                            <form class="woocommerce-ordering" method="post">
                                <label>
                                    <select name="order" class="orderby">
                                        <option selected="selected" value="menu-order">Default sortion</option>
                                        <option value="popularity">popularity</option>
                                        <option value="popularity">Average ration</option>
                                        <option value="popularity">newness</option>
                                        <option value="popularity">price</option>
                                    </select>
                                </label>
                            </form>
                        </div>
                    </div>
                    <!-- Product filter End -->

                    <!-- Product Item Start -->
                    <div class="category-product-grid  row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="shop-product">
                                <div class="product-box">
                                    <a href="#"><img src="{{ asset('/') }}website/assets/img/products/img-01.jpg"  alt=""></a>
                                    <div class="cart-overlay">
                                    </div>
                                    <span class="sticker new"><strong>NEW</strong></span>
                                    <div class="actions">
                                        <div class="add-to-links">
                                            <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                                            <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                                            <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4 class="product-title"><a href="product-details.html">Qui Ratione Volup</a></h4>
                                    <div class="align-items">
                                        <div class="pull-left">
                                            <span class="price">$49.00</span>
                                        </div>
                                        <div class="pull-right">
                                            <div class="reviews-icon">
                                                <i class="i-color fa fa-star"></i>
                                                <i class="i-color fa fa-star"></i>
                                                <i class="i-color fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="shop-product">
                                <div class="product-box">
                                    <a href="#"><img src="{{ asset('/') }}website/assets/img/products/img-02.jpg"  alt=""></a>
                                    <div class="cart-overlay">
                                    </div>
                                    <span class="sticker discount"><strong>-40%</strong></span>
                                    <div class="actions">
                                        <div class="add-to-links">
                                            <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                                            <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                                            <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4 class="product-title"><a href="product-details.html">Eius Modi Tempo</a></h4>
                                    <div class="align-items">
                                        <div class="pull-left">
                                            <span class="price">$89.00</span>
                                        </div>
                                        <div class="pull-right">
                                            <div class="reviews-icon">
                                                <i class="i-color fa fa-star"></i>
                                                <i class="i-color fa fa-star"></i>
                                                <i class="i-color fa fa-star"></i>
                                                <i class="i-color fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="shop-product">
                                <div class="product-box">
                                    <a href="#"><img src="{{ asset('/') }}website/assets/img/products/img-03.jpg"  alt=""></a>
                                    <div class="cart-overlay">
                                    </div>
                                    <div class="actions">
                                        <div class="add-to-links">
                                            <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                                            <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                                            <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4 class="product-title"><a href="product-details.html">Quia Voluptas Sit</a></h4>
                                    <div class="align-items">
                                        <div class="pull-left">
                                            <span class="price">$69.00 <del>$79.00</del></span>
                                        </div>
                                        <div class="pull-right">
                                            <div class="reviews-icon">
                                                <i class="i-color fa fa-star"></i>
                                                <i class="i-color fa fa-star"></i>
                                                <i class="i-color fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="shop-product">
                                <div class="product-box">
                                    <a href="#"><img src="{{ asset('/') }}website/assets/img/products/img-04.jpg"  alt=""></a>
                                    <div class="cart-overlay">
                                    </div>
                                    <span class="sticker sale"><strong>Sale</strong></span>
                                    <div class="actions">
                                        <div class="add-to-links">
                                            <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                                            <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                                            <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4 class="product-title"><a href="product-details.html">An Tium Lores Eos</a></h4>
                                    <div class="align-items">
                                        <div class="pull-left">
                                            <span class="price">$58.00</span>
                                        </div>
                                        <div class="pull-right">
                                            <div class="reviews-icon">
                                                <i class="i-color fa fa-star"></i>
                                                <i class="i-color fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="shop-product">
                                <div class="product-box">
                                    <a href="#"><img src="{{ asset('/') }}website/assets/img/products/img-05.jpg"  alt=""></a>
                                    <div class="cart-overlay">
                                    </div>
                                    <span class="sticker sale"><strong>Sale</strong></span>
                                    <div class="actions">
                                        <div class="add-to-links">
                                            <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                                            <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                                            <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4 class="product-title"><a href="product-details.html">Magni Dolores Eos</a></h4>
                                    <div class="align-items">
                                        <div class="pull-left">
                                            <span class="price">$39.00</span>
                                        </div>
                                        <div class="pull-right">
                                            <div class="reviews-icon">
                                                <i class="i-color fa fa-star"></i>
                                                <i class="i-color fa fa-star"></i>
                                                <i class="i-color fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="shop-product">
                                <div class="product-box">
                                    <a href="#"><img src="{{ asset('/') }}website/assets/img/products/img-06.jpg"  alt=""></a>
                                    <div class="cart-overlay">
                                    </div>
                                    <div class="actions">
                                        <div class="add-to-links">
                                            <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                                            <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                                            <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4 class="product-title"><a href="product-details.html">Natur Aut Odit Aut</a></h4>
                                    <div class="align-items">
                                        <div class="pull-left">
                                            <span class="price">$59.00 <del>$79.00</del></span>
                                        </div>
                                        <div class="pull-right">
                                            <div class="reviews-icon">
                                                <i class="i-color fa fa-star"></i>
                                                <i class="i-color fa fa-star"></i>
                                                <i class="i-color fa fa-star"></i>
                                                <i class="i-color fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="shop-product">
                                <div class="product-box">
                                    <a href="#"><img src="{{ asset('/') }}website/assets/img/products/img-07.jpg"  alt=""></a>
                                    <div class="cart-overlay">
                                    </div>
                                    <span class="sticker new"><strong>NEW</strong></span>
                                    <div class="actions">
                                        <div class="add-to-links">
                                            <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                                            <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                                            <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4 class="product-title"><a href="product-details.html">Nisi Ut Aliqu</a></h4>
                                    <div class="align-items">
                                        <div class="pull-left">
                                            <span class="price">$59.00</span>
                                        </div>
                                        <div class="pull-right">
                                            <div class="reviews-icon">
                                                <i class="i-color fa fa-star"></i>
                                                <i class="i-color fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="shop-product">
                                <div class="product-box">
                                    <a href="#"><img src="{{ asset('/') }}website/assets/img/products/img-08.jpg"  alt=""></a>
                                    <div class="cart-overlay">
                                    </div>
                                    <span class="sticker sale"><strong>Sale</strong></span>
                                    <div class="actions">
                                        <div class="add-to-links">
                                            <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                                            <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                                            <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4 class="product-title"><a href="product-details.html">Beatae Vitae Dicta</a></h4>
                                    <div class="align-items">
                                        <div class="pull-left">
                                            <span class="price">$69.00</span>
                                        </div>
                                        <div class="pull-right">
                                            <div class="reviews-icon">
                                                <i class="i-color fa fa-star"></i>
                                                <i class="i-color fa fa-star"></i>
                                                <i class="i-color fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product Item End -->
                    <!-- Start Pagination -->
                    <div class="pagination">
                        <div class="results-navigation pull-left">
                            Showing: 1 - 6 Of 17
                        </div>
                        <nav class="navigation pull-right">
                            <span class="current page-num">1</span>
                            <a class="page-num" href="#">2</a>
                            <a class="page-num" href="#">3</a>
                            <div class="divider">...</div>
                            <a class="next-page" href="#"><i class="fa fa-angle-right"></i></a>
                        </nav>
                    </div>
                    <!-- End Pagination -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->


@endsection
