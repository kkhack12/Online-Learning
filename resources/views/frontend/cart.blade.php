@extends('master.master')
@section('title')
<title>Cart</title>
@endsection
@section('content')
<!--Breadcrumb start-->
<div class="ed_pagetitle">
            <div class="ed_img_overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-4 col-sm-6">
                        <div class="page_title">
                            <h2>Cart</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8 col-sm-6">
                        <ul class="breadcrumb">
                            <li><a href="homepage">home</a></li>
                            <li><i class="fa fa-chevron-left"></i></li>
                            <li><a href="cart.html">Cart</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--Breadcrumb end-->
        <!--Cart page start-->
        <div class="ed_graysection ed_toppadder80 ed_bottompadder80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="woo-cart-table">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>S.No.</th>
                                            <th>courses image</th>
                                            <th>courses</th>
                                            <th>quantity</th>
                                            <th>total</th>
                                            <th>remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><img src="https://dummyimage.com/800x450/000/fff" alt="event image" /></td>
                                            <td>Project Learning</td>
                                            <td>1</td>
                                            <td><span>£25</span></td>
                                            <td><a href="javascript:void(0);" data-toggle="tooltip" data-placement="bottom" title="Remove Item">x</a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><img src="https://dummyimage.com/263x263/000/fff" alt="event image" /></td>
                                            <td>user experience jam</td>
                                            <td>1</td>
                                            <td><span>£38</span></td>
                                            <td><a href="javascript:void(0);" data-toggle="tooltip" data-placement="bottom" title="Remove Item">x</a></td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">
                                                <div class="woo_coupon_code">
                                                    <form class="form-inline">
                                                        <div class="form-group">
                                                            <input type="text" name="coupon_code" class="form-control" value="" placeholder="Coupon code">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="submit" class="btn ed_btn ed_green" name="apply_coupon" value="Apply Coupon">
                                                        </div>
                                                    </form>
                                                </div>
                                            </td>
                                            <td colspan="3">
                                                <div class="ed_update_btn">
                                                    <input type="submit" class="btn ed_btn ed_green" name="update_cart" value="Update Cart">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="ed_cart_collaterals">
                        <div class="cart_totals">
                            <h2>Cart Totals</h2>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr class="cart-subtotal">
                                        <th>Subtotal</th>
                                        <td><span class="amount">£63.00</span></td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Total</th>
                                        <td><span class="amount">£63.00</span> </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="wc-proceed-to-checkout">
                                <a href="checkout" class="btn ed_btn ed_green">Proceed to Checkout</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--cart page end-->
        <!--Newsletter Section six start-->
        <div class="ed_newsletter_section">
            <div class="ed_img_overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-lg-7 col-md-7 col-sm-12 col-12">
                                <div class="ed_newsletter_section_heading">
                                    <h4>Let us inform you about everything important directly.</h4>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-12 col-12">
                                <div class="row">
                                    <div class="ed_newsletter_section_form">
                                        <form class="form row m-0">
                                            <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                                                <input class="form-control" type="text" placeholder="Newsletter Email" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                                <button class="btn ed_btn ed_green">confirm</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Newsletter Section six end-->