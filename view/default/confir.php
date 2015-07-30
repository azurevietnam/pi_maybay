<?php
/**
 * Created by PhpStorm.
 * User: tungtv
 * Date: 11/10/14
 * Time: 2:44 PM
 */
require_once DIR . '/view/default/public.php';
require_once DIR . '/common/cls_fast_template.php';
function show_confir($data = array())
{
    $asign = array();
    $asign['Name_dm']= $data['Name_dm'];

    $asign['tieude']= $data['tieude'];

    $asign['noi_dung'] = '';
//    $data['vanphong']
    $orderid = $_GET['orderid'];
    if($_GET['method'] == 1) {
        $asign['noi_dung'] .= '
        <div class="don-hang-info">
                <p><label>Mã đơn hàng: </label>'.$orderid.'</p>
                <p><label>Hình thức thanh toán: </label>Thanh toán tại nhà</p>
                <p><label>Tình trạng: </label>Chờ thanh toán</p>
            </div>
            <div class="more-info">
                <h4><span>HƯỚNG DẪN THANH TOÁN</span></h4>
                <p>Quý khách đã lựa chọn hình thức <label class="phuong-thuc">Thanh toán tại nhà</label>. TOURCOACH sẽ đến tận nơi theo địa chỉ Quý khách đã đăng ký để giao vé và thu tiền trong giờ hành chính (08h-17h30) từ thứ 2 đến thứ 7.<br />
                    Với hình thức này, Quý khách sẽ mất thêm phí giao vé là 30,000 đồng<br />
                    Quý khách lưu ý: Hình thức thanh toán này chỉ áp dụng cho khách hàng tại khu vực nội thành Hà Nội . TOURCOACH giao vé và thanh toán tại nhà quý khách trong vòng bán kính 10km so với địa chỉ văn phòng công ty chúng tôi.</p>
                <span><label>Tên người nhân:</label>'.$_POST['hoten-tainha'].'</span>
                <span><label>Địa chỉ nhận</label>'.$_POST['diachi-tainha'].'</span>
                <span><label>Thành phố:</label>'.$_POST['thanhpho-tainha'].'</span>
                <span><label>Điện thoại liên hệ:</label>'.$_POST['sdt-tainha'].'</span>
            </div>
            <div class="more-info">
                <h4><span>Quý khách lưu ý</span></h4>
                <ul>
                    <li>Thông tin đơn hàng của quý khách sẽ được gửi tới địa chỉ email <span>'.(isset($_POST['email_lienhe'])?$_POST['email_lienhe']:"").'</span>.</li>
                    <li>Trong thời gian sớm nhất (trong vòng 12h tới) nhân viên TOURCOACH sẽ liên hệ với Quý khách theo số điện thoại <span class="color-red">'.(isset($_POST['sdt-tainha'])?$_POST['sdt-tainha']:"").'</span> để thông báo kết quả đặt vé và hướng dẫn Quý khách cách thức thanh toán.</li>
                    <li>Không thực hiện Chuyển Khoản hoặc Thanh toán qua Cổng THANH TOÁN TRỰC TUYẾN khi nhân viên Tourcoach chưa liên hệ với Quý khách.</li>
                </ul>
            </div>';
    }
    if($_GET['method'] == 2) {
        $asign['noi_dung'] .= '
        <div class="don-hang-info">
            <p><label>Mã đơn hàng: </label>'.$orderid.'</p>
            <p><label>Hình thức thanh toán: </label>Thanh toán tại văn phòng TOURCOACH</p>
            <p><label>Tình trạng: </label>Chờ thanh toán</p>
        </div>
        <div class="more-info">
            <h4><span>HƯỚNG DẪN THANH TOÁN</span></h4>
            <p>Quý khách đã lựa chọn hình thức <label class="phuong-thuc">Thanh toán tại văn phòng TOURCOACH</label> của chúng tôi. Quý khách vui lòng qua văn phòng TOURCOACH để trực tiếp thanh toán và nhận vé theo địa chỉ sau:</p>
            <div class="dia-chi-van-phong">
                <p class="chuyenbay_datve_tt3">CÔNG TY TNHH DỊCH VỤ - VẬN TẢI VÀ LỮ HÀNH QUỐC TÊ COACH</p>
                <div class="diachit_datve_tt">
                    <p><span class="chuyenbay_datve_tt2">Địa chỉ:</span> B44 Nguyễn Thị Định, Trung Hòa - Nhân Chính, Hà Nội</p>
                    <p><span class="chuyenbay_datve_tt2">Hotlien</span> 043 22 143 / 0986 886 668</p>
                    <p><a><i class="fa fa-map-marker"></i> Xem bản đồ</a></p>
                </div>
                <div class="diachit_datve_tt">
                    <p><span class="chuyenbay_datve_tt2">Địa chỉ:</span> B44 Nguyễn Thị Định, Trung Hòa - Nhân Chính, Hà Nội</p>
                    <p><span class="chuyenbay_datve_tt2">Hotlien</span> 043 22 143 / 0986 886 668</p>
                    <p><a><i class="fa fa-map-marker"></i> Xem bản đồ</a></p>
                </div>
            </div>
        </div>
        <div class="more-info">
            <h4><span>Quý khách lưu ý</span></h4>
            <ul>
                <li>Thông tin đơn hàng của quý khách sẽ được gửi tới địa chỉ email <span>'.(isset($_POST['email_lienhe'])?$_POST['email_lienhe']:"").'</span>.</li>
                <li>Trong thời gian sớm nhất (trong vòng 12h tới) nhân viên TOURCOACH sẽ liên hệ với Quý khách theo số điện thoại <span class="color-red">'.(isset($_POST['sdt_lienhe'])?$_POST['sdt_lienhe']:"").'</span> để thông báo kết quả đặt vé và hướng dẫn Quý khách cách thức thanh toán.</li>
                <li>Không thực hiện Chuyển Khoản hoặc Thanh toán qua Cổng THANH TOÁN TRỰC TUYẾN khi nhân viên Tourcoach chưa liên hệ với Quý khách.</li>
            </ul>
        </div>';
    }
    if($_GET['method'] == 3) {
        $asign['noi_dung'] .= '
        <div class="don-hang-info">
                <p><label>Mã đơn hàng: </label>'.$orderid.'</p>
                <p><label>Hình thức thanh toán: </label>Thanh toán qua chuyển khoản</p>
                <p><label>Tình trạng: </label>Chờ thanh toán</p>
            </div>
            <div class="more-info">
                <h4><span>HƯỚNG DẪN THANH TOÁN</span></h4>
                <p>Quý khách đã lựa chọn hình thức <label class="phuong-thuc">Thanh toán Chuyển khoản ngân hàng</label><span class=""></span></p>
                <p >Vui lòng chọn tài khoản ngân hàng mà Quý khách có thể chuyển khoản một cách tiện lợi nhất</p>
                <p  class="chuyenbay_datve_tt2">Lưu ý khi chuyển khoản:</p>
                <p >Khi chuyển khoản, quý khách vui lòng nhập nội dung chuyển khoản là:</p>
                <p  class="chuyenbay_datve_tt2">"MDH 530172, Nguyen Van A, Noi dung thanh toan"</p>
                <p >VD:</p>
                <p >"MDH 530172, Nguyen Van A, TT vé máy bay"</p>
                <p >"MDH 530172, Nguyen Van A, TT thêm hành khách ký gửi"</p>
                <p >"MDH 530172, Nguyen Van A, TT phí đổi tên, dịch vụ khác"</p>
                <p >Để việc thanh toán được chính xác. Xin cảm ơn quý khách!</p>
                <div class="col-md-12 danhsach_ngan_hang_tt" style="padding-left: 0px; padding-right: 0px">
                    <div class="col-md-3 " style="padding-left: 0px">
                        <img src="{SITE-NAME}/view/default/theme/images/logo-vietcombank.png" class="img-responsive">
                    </div>
                    <div class="col-md-9 " >
                        <p class="chuyenbay_datve_tt2">Ngân hàng cổ phần ngoại thương Việt Nam</p>
                        <p ><span class="nganhang_tentk_tt">Tên tài khoản: </span> CÔNG TY TNHH DỊCH VỤ - VẬN TẢI VÀ LỮ HÀNH QUỐC TẾ COACH</p>
                        <p ><span class="nganhang_tentk_tt">Số tài khoản: </span> 23423423423423</p>
                        <p ><span class="nganhang_tentk_tt">Chi nhánh: </span> Hà Nội</p>
                    </div>
                </div>
                <div class="col-md-12 danhsach_ngan_hang_tt" style="padding-left: 0px; padding-right: 0px">
                    <div class="col-md-3 " style="padding-left: 0px">
                        <img src="{SITE-NAME}/view/default/theme/images/logo-vietcombank.png" class="img-responsive">
                    </div>
                    <div class="col-md-9 " >
                        <p class="chuyenbay_datve_tt2">Ngân hàng cổ phần ngoại thương Việt Nam</p>
                        <p ><span class="nganhang_tentk_tt">Tên tài khoản: </span> CÔNG TY TNHH DỊCH VỤ - VẬN TẢI VÀ LỮ HÀNH QUỐC TẾ COACH</p>
                        <p ><span class="nganhang_tentk_tt">Số tài khoản: </span> 23423423423423</p>
                        <p ><span class="nganhang_tentk_tt">Chi nhánh: </span> Hà Nội</p>
                    </div>
                </div>
                <div class="col-md-12 danhsach_ngan_hang_tt" style="padding-left: 0px; padding-right: 0px">
                    <div class="col-md-3 " style="padding-left: 0px">
                        <img src="{SITE-NAME}/view/default/theme/images/logo-vietcombank.png" class="img-responsive">
                    </div>
                    <div class="col-md-9 " >
                        <p class="chuyenbay_datve_tt2">Ngân hàng cổ phần ngoại thương Việt Nam</p>
                        <p ><span class="nganhang_tentk_tt">Tên tài khoản: </span> CÔNG TY TNHH DỊCH VỤ - VẬN TẢI VÀ LỮ HÀNH QUỐC TẾ COACH</p>
                        <p ><span class="nganhang_tentk_tt">Số tài khoản: </span> 23423423423423</p>
                        <p ><span class="nganhang_tentk_tt">Chi nhánh: </span> Hà Nội</p>
                    </div>
                </div>
                <div class="col-md-12 danhsach_ngan_hang_tt" style="padding-left: 0px; padding-right: 0px">
                    <div class="col-md-3 " style="padding-left: 0px">
                        <img src="{SITE-NAME}/view/default/theme/images/logo-vietcombank.png" class="img-responsive">
                    </div>
                    <div class="col-md-9 " >
                        <p class="chuyenbay_datve_tt2">Ngân hàng cổ phần ngoại thương Việt Nam</p>
                        <p ><span class="nganhang_tentk_tt">Tên tài khoản: </span> CÔNG TY TNHH DỊCH VỤ - VẬN TẢI VÀ LỮ HÀNH QUỐC TẾ COACH</p>
                        <p ><span class="nganhang_tentk_tt">Số tài khoản: </span> 23423423423423</p>
                        <p ><span class="nganhang_tentk_tt">Chi nhánh: </span> Hà Nội</p>
                    </div>
                </div>
                <div class="col-md-12 danhsach_ngan_hang_tt" style="padding-left: 0px; padding-right: 0px">
                    <div class="col-md-3 " style="padding-left: 0px">
                        <img src="{SITE-NAME}/view/default/theme/images/logo-vietcombank.png" class="img-responsive">
                    </div>
                    <div class="col-md-9 " >
                        <p class="chuyenbay_datve_tt2">Ngân hàng cổ phần ngoại thương Việt Nam</p>
                        <p ><span class="nganhang_tentk_tt">Tên tài khoản: </span> CÔNG TY TNHH DỊCH VỤ - VẬN TẢI VÀ LỮ HÀNH QUỐC TẾ COACH</p>
                        <p ><span class="nganhang_tentk_tt">Số tài khoản: </span> 23423423423423</p>
                        <p ><span class="nganhang_tentk_tt">Chi nhánh: </span> Hà Nội</p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="more-info">
                <h4><span>Quý khách lưu ý</span></h4>
                <ul>
                    <li>Thông tin đơn hàng của quý khách sẽ được gửi tới địa chỉ email <span>'.(isset($_POST['email_lienhe'])?$_POST['email_lienhe']:"").'</span>.</li>
                    <li>Trong thời gian sớm nhất (trong vòng 12h tới) nhân viên TOURCOACH sẽ liên hệ với Quý khách theo số điện thoại <span class="color-red">'.(isset($_POST['sdt_lienhe'])?$_POST['sdt_lienhe']:"").'</span> để thông báo kết quả đặt vé và hướng dẫn Quý khách cách thức thanh toán.</li>
                    <li>Không thực hiện Chuyển Khoản hoặc Thanh toán qua Cổng THANH TOÁN TRỰC TUYẾN khi nhân viên Tourcoach chưa liên hệ với Quý khách.</li>
                </ul>
            </div>';
    }
    print_template($asign, 'confir');
}