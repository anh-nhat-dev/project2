@extends('layouts.frontend.master')
@section('content')
<div class="colorlib-shop">
        <div class="container">
            <div class="row row-pb-lg">
                <div class="col-md-10 col-md-offset-1">
                    <div class="process-wrap">
                        <div class="process text-center active">
                            <p><span>01</span></p>
                            <h3>Giỏ hàng</h3>
                        </div>
                        <div class="process text-center active">
                            <p><span>02</span></p>
                            <h3>Thanh toán</h3>
                        </div>
                        <div class="process text-center">
                            <p><span>03</span></p>
                            <h3>Hoàn tất thanh toán</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center">
                    <span class="icon"><i class="icon-shopping-cart"></i></span>
                    <h2>Cảm ơn bạn đã mua hàng, Đơn hàng của bạn đã đặt thành công</h2>
                    <p>
                        <a href="index.html" class="btn btn-primary">Trang chủ</a>
                        <a href="shop.html" class="btn btn-primary btn-outline">Tiếp tục mua sắm</a>
                    </p>
                </div>
            </div>
            <div class="row mt-50">
                <div class="col-md-4">
                    <h3 class="billing-title mt-20 pl-15">Thông tin đơn hàng</h3>
                    <table class="order-rable">
                        <tbody>
                            <tr>
                                <td>Đơn hàng số</td>
                                <td>: 60235</td>
                            </tr>
                            <tr>
                                <td>Ngày mua</td>
                                <td>: Oct 03, 2017</td>
                            </tr>
                            <tr>
                                <td>Tổng tiền</td>
                                <td>: ₫ 4.000.000</td>
                            </tr>
                            <tr>
                                <td>Phương thức thanh toán</td>
                                <td>: Nhận tiền mặt</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-4">
                    <h3 class="billing-title mt-20 pl-15">Địa chỉ thanh toán</h3>
                    <table class="order-rable">
                        <tbody>
                            <tr>
                                <td>Họ Tên</td>
                                <td>: Nguyễn Văn A</td>
                            </tr>
                            <tr>
                                <td>Số điện thoại</td>
                                <td>: 0123 456 789</td>
                            </tr>
                            <tr>
                                <td>Địa chỉ</td>
                                <td>: Số nhà B8A ngõ 18 đường Võ Văn Dũng - Hoàng Cầu - Đống Đa </td>
                            </tr>
                            <tr>
                                <td>Thành Phố</td>
                                <td>: Hà Nội</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-4">
                    <h3 class="billing-title mt-20 pl-15">Địa chỉ giao hàng</h3>
                    <table class="order-rable">
                        <tbody>
                            <tr>
                                <td>Họ Tên</td>
                                <td>: Nguyễn Văn A</td>
                            </tr>
                            <tr>
                                <td>Số điện thoại</td>
                                <td>: 0123 456 789</td>
                            </tr>
                            <tr>
                                <td>Địa chỉ</td>
                                <td>: Số nhà B8A ngõ 18 đường Võ Văn Dũng - Hoàng Cầu - Đống Đa </td>
                            </tr>
                            <tr>
                                <td>Thành Phố</td>
                                <td>: Hà Nội</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="billing-form">
                <div class="row">
                    <div class="col-12">
                        <div class="order-wrapper mt-50">
                            <h3 class="billing-title mb-10">Hóa đơn</h3>
                            <div class="order-list">
                                <div class="list-row d-flex justify-content-between">
                                    <div>Sản phẩm</div>
                                    <div>Tổng cộng</div>
                                </div>
                                <div class="list-row d-flex justify-content-between">
                                    <div>Pixelstore fresh Blackberry</div>
                                    <div>x 02</div>
                                    <div>₫ 720.000</div>
                                </div>
                                <div class="list-row d-flex justify-content-between">
                                    <div>Pixelstore fresh Blackberry</div>
                                    <div>x 02</div>
                                    <div>₫ 720.000</div>
                                </div>
                                <div class="list-row d-flex justify-content-between">
                                    <div>Pixelstore fresh Blackberry</div>
                                    <div>x 02</div>
                                    <div>₫ 720.000</div>
                                </div>
                                <div class="list-row d-flex justify-content-between">
                                    <h6>Tổng tiền</h6>
                                    <div>₫ 2.700.000</div>
                                </div>
                            
                                <div class="list-row border-bottom-0 d-flex justify-content-between">
                                    <h6>Total</h6>
                                    <div class="total">₫ 2.700.000</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('style')
<link rel="stylesheet" href="css/custome.css">
@endpush