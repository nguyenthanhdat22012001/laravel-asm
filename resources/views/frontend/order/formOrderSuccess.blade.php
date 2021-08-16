<tr style="background: #fff;">
    <td align="left" height="auto" style="padding: 15px;" width="600">
        <table>
            <tbody>
                <tr>
                    <td>
                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tbody>
                <tr>
                    <td>
                        <h1 style="font-size: 17px; font-weight: bold; color: #444; padding: 0 0 5px 0; margin: 0;">Cảm ơn quý khách {{$order->or_name}} đã đặt hàng tại <span class="il">Shoppo</span>,</h1>

                        <p style="margin: 4px 0; font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #444; line-height: 18px; font-weight: normal;">
                            <span class="il">Shoppo</span> rất vui thông báo đơn hàng #{{$order->id}} của quý khách đã được tiếp nhận và đang trong quá trình xử lý. <span class="il">Shoppo</span> sẽ thông báo đến quý khách ngay khi hàng chuẩn bị
                            được giao.
                        </p>

                        <h3 style="font-size: 13px; font-weight: bold; color: #02acea; text-transform: uppercase; margin: 20px 0 0 0; border-bottom: 1px solid #ddd;">
                            Thông tin đơn hàng #{{$order->id}} <span style="font-size: 12px; color: #777; text-transform: none; font-weight: normal;">(Ngày {{date('d', strtotime($order->created_at))}} Tháng {{date('m', strtotime($order->created_at))}} Năm {{date('Y', strtotime($order->created_at))}} {{date('H:m:s', strtotime($order->created_at))}})</span>
                        </h3>
                    </td>
                </tr>
                <tr>
                    <td style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #444; line-height: 18px;">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th align="left" style="padding: 6px 9px 0px 9px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #444; font-weight: bold;" width="50%">Thông tin thanh toán</th>
                                    <th align="left" style="padding: 6px 9px 0px 9px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #444; font-weight: bold;" width="50%">Địa chỉ giao hàng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="padding: 3px 9px 9px 9px; border-top: 0; font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #444; line-height: 18px; font-weight: normal;" valign="top">
                                        <span style="text-transform: capitalize;">{{$order->or_name}}</span><br />
                                        <a href="mailto:{{$order->or_email}}" target="_blank">{{$order->or_email}}</a><br />
                                        {{$order->or_phone}}
                                    </td>
                                    <td style="padding: 3px 9px 9px 9px; border-top: 0; border-left: 0; font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #444; line-height: 18px; font-weight: normal;" valign="top">
                                        <span style="text-transform: capitalize;">{{$order->or_name}}</span><br />
                                        <a href="mailto:{{$order->or_email}}" target="_blank">{{$order->or_email}}</a><br />
                                        {{$order->or_address}} <br />
                                        T: {{$order->or_phone}}
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="padding: 7px 9px 0px 9px; border-top: 0; font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #444;" valign="top">
                                        <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #444; line-height: 18px; font-weight: normal;">
                                            <strong>Phương thức thanh toán: </strong> {{$order->fk_order_payment->pay_name }}<br />
                                            <strong>Thời gian giao hàng dự kiến:</strong> Dự kiến giao hàng Thứ năm, 19/11 - không giao ngày Chủ Nhật <br />
                                            <strong>Phí vận chuyển: </strong> {{number_format($order->fk_order_payment->pay_fee_shipping)}}đ<br />
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p style="margin: 4px 0; font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #444; line-height: 18px; font-weight: normal;">
                            <i>Lưu ý: Đối với đơn hàng đã được thanh toán trước, nhân viên giao nhận có thể yêu cầu người nhận hàng cung cấp CMND / giấy phép lái xe để chụp ảnh hoặc ghi lại thông tin.</i>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h2 style="text-align: left; margin: 10px 0; border-bottom: 1px solid #ddd; padding-bottom: 5px; font-size: 13px; color: #02acea;">CHI TIẾT ĐƠN HÀNG</h2>

                        <table border="0" cellpadding="0" cellspacing="0" style="background: #f5f5f5;" width="100%">
                            <thead>
                                <tr>
                                    <th align="left" bgcolor="#02acea" style="padding: 6px 9px; color: #fff; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 14px;">Sản phẩm</th>
                                    <th align="left" bgcolor="#02acea" style="padding: 6px 9px; color: #fff; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 14px;">Đơn giá</th>
                                    <th align="left" bgcolor="#02acea" style="padding: 6px 9px; color: #fff; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 14px;">Số lượng</th>
                                    <th align="left" bgcolor="#02acea" style="padding: 6px 9px; color: #fff; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 14px;">Giảm giá</th>
                                    <th align="right" bgcolor="#02acea" style="padding: 6px 9px; color: #fff; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 14px;">Tổng tạm</th>
                                </tr>
                            </thead>
                            <tbody bgcolor="#eee" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #444; line-height: 18px;">
                            @foreach($order->get_orderDetail as  $item)
                                <tr>
                                    <td align="left" style="padding: 3px 9px;" valign="top"><span>{{$item->	orD_p_name}}</span><br /></td>
                                    <td align="left" style="padding: 3px 9px;" valign="top"><span>{{number_format($item->orD_p_price)}}đ</span></td>
                                    <td align="left" style="padding: 3px 9px;" valign="top">{{$item->orD_qty}}</td>
                                    <td align="left" style="padding: 3px 9px;" valign="top"><span>{{$item->orD_p_sale ?? 0}}%</span></td>
                                    <td align="right" style="padding: 3px 9px;" valign="top"><span>{{number_format($item->orD_p_subTotal)}}đ</span></td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #444; line-height: 18px;">
                                <tr>
                                    <td align="right" colspan="4" style="padding: 5px 9px;">Phí vận chuyển</td>
                                    <td align="right" style="padding: 5px 9px;"><span>{{number_format($order->fk_order_payment->pay_fee_shipping)}}đ</span></td>
                                </tr>
                                <tr bgcolor="#eee">
                                    <td align="right" colspan="4" style="padding: 7px 9px;">
                                        <strong><big>Tổng giá trị đơn hàng</big> </strong>
                                    </td>
                                    <td align="right" style="padding: 7px 9px;">
                                        <strong>
                                            <big><span>{{number_format($order->or_total)}}đ</span> </big>
                                        </strong>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>

                        <div style="margin: auto;">
                            <a
                                href="https://Shoppo.vn/sales/order/view/747087501"
                                style="
                                    display: inline-block;
                                    text-decoration: none;
                                    background-color: #00b7f1 !important;
                                    margin-right: 30px;
                                    text-align: center;
                                    border-radius: 3px;
                                    color: #fff;
                                    padding: 5px 10px;
                                    font-size: 12px;
                                    font-weight: bold;
                                    margin-left: 35%;
                                    margin-top: 5px;
                                "
                                target="_blank"
                                data-saferedirecturl="{{route('get.myOrderDetail',$order->id)}}"
                            >
                                Chi tiết đơn hàng tại <span class="il">Shoppo</span>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        &nbsp;
                        <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0; padding: 0; line-height: 18px; color: #444; font-weight: bold;">Một lần nữa <span class="il">Shoppo</span> cảm ơn quý khách.</p>

                        <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #444; line-height: 18px; font-weight: normal; text-align: right;">
                            <strong>
                                <a
                                    href="http://Shoppo.vn?utm_source=transactional+email&amp;utm_medium=email&amp;utm_term=logo&amp;utm_campaign=new+order"
                                    style="color: #00a3dd; text-decoration: none; font-size: 14px;"
                                    target="_blank"
                                    data-saferedirecturl="{{route('get.home')}}"
                                >
                                    <span class="il">Shoppo</span>
                                </a>
                            </strong>
                        </p>
                    </td>
                </tr>
            </tbody>
        </table>
    </td>
</tr>