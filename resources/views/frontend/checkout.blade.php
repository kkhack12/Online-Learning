@extends('master.master')
@section('title')
<title>Check Out</title>
@endsection
@section('content')
 <!--Breadcrumb start-->
 <div class="ed_pagetitle">
            <div class="ed_img_overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-4 col-sm-6">
                        <div class="page_title">
                            <h2>Checkout</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8 col-sm-6">
                        <ul class="breadcrumb">
                            <li><a href="homepage">home</a></li>
                            <li><i class="fa fa-chevron-left"></i></li>
                            <li><a href="checkout">Checkout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--Breadcrumb end-->
        <!--checkout start-->
        <div class="ed_graysection ed_toppadder80 ed_bottompadder80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="woo-cart-table">
                            <form class="checkout woocommerce-checkout">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <h3 class="checkout-heading">Billing Details</h3>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label>Country <sup>*</sup></label>
                                                    <select class="form-control">
												<option value="0">Select a country…</option>
												<option value="1">Åland Islands</option>
												<option value="2">Algeria</option>
												<option value="3">Australia</option>
												<option value="4">Brazil</option>
												<option value="5">India</option>
												<option value="6">Switzerland</option>
												<option value="7">United Kingdom (UK)</option>
												<option value="8">United States (US)</option>
											</select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                <div class="form-group">
                                                    <label>first name <sup>*</sup></label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                <div class="form-group">
                                                    <label>last name <sup>*</sup></label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label>Company Identity</label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label>Billing Address <sup>*</sup></label>
                                                    <input type="text" class="form-control" placeholder="">
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label>Town / City <sup>*</sup></label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                <div class="form-group">
                                                    <label>County / Region <sup>*</sup></label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                <div class="form-group">
                                                    <label>Postcode / Zip<sup>*</sup></label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label>Contact</label>
                                                    <input type="text" class="form-control" placeholder="">
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <h3 class="checkout-heading">Shipping Details</h3>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label>Country <sup>*</sup></label>
                                                    <select class="form-control">
												<option value="0">Select a country…</option>
												<option value="1">Åland Islands</option>
												<option value="2">Algeria</option>
												<option value="3">Australia</option>
												<option value="4">Brazil</option>
												<option value="5">India</option>
												<option value="6">Switzerland</option>
												<option value="7">United Kingdom (UK)</option>
												<option value="8">United States (US)</option>
											</select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label>State</label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label> Post / Zip Code</label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="woocommerce-checkout-payment">
                                                    <h3>Payment method</h3>
                                                    <ul class="payment_methods methods">
                                                        <li>
                                                            <div class="ed_rate">
                                                                <div class="custom-checkbox">
                                                                    <input type="radio" value="dbt" id="c1" name="checkout">
                                                                    <label for="c1"></label>
                                                                </div>
                                                            </div>
                                                            Direct Bank Transfer
                                                            <div class="payment_box" data-period="dbt">
                                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="ed_rate">
                                                                <div class="custom-checkbox">
                                                                    <input type="radio" value="cheque_payment" id="c2" name="checkout">
                                                                    <label for="c2"></label>
                                                                </div>
                                                            </div>
                                                            Checque Payment
                                                            <div class="payment_box" data-period="cheque_payment">
                                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="ed_rate">
                                                                <div class="custom-checkbox">
                                                                    <input type="radio" value="credit_card" id="c3" name="checkout">
                                                                    <label for="c3"></label>
                                                                </div>
                                                            </div>
                                                            Credit Card
                                                            <img src="../assets/images/cards.jpg" class="pull-right" alt="">
                                                            <div class="payment_box" data-period="credit_card">
                                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="ed_rate">
                                                                <div class="custom-checkbox">
                                                                    <input type="radio" value="paypal" id="c4" name="checkout">
                                                                    <label for="c4"></label>
                                                                </div>
                                                            </div>
                                                            Paypal
                                                            <img src="../assets/images/paypal.jpg" class="pull-right" alt="">
                                                            <div class="payment_box" data-period="paypal">
                                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <button type="button" class="btn ed_btn pull-right ed_orange">place order</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--checkout end-->
@stop