<?php
/**
 * Created by PhpStorm.
 * User: nhansay
 * Date: 30/07/2015
 * Time: 12:46 SA
 */

require_once 'one_pay_config.php';

function get_one_pay_inland( $post_array = array() ) {
	$one_pay_array          = array();
	$one_pay_array['Title'] = 'VPC 3-Party';
	// URL cổng thanh toán - Virtual Payment Client
	$one_pay_array['virtualPaymentClientURL'] = 'https://mtf.onepay.vn/onecomm-pay/vpc.op';
	// Merchant ID được cấp bởi one pay
	$one_pay_array['vpc_Merchant'] = 'ONEPAY';
	// Merchant AccessCode được cấp bởi one pay
	$one_pay_array['vpc_AccessCode'] = 'D67342C2';
	// ID giao dịch, random, khác nhau mỗi lần thanh toán, tối đa 40 ký tự
	$one_pay_array['vpc_MerchTxnRef'] = date( 'YmdHis' ) . rand();
	// tên hóa đơn, tối đa 34 ký tự
	$one_pay_array['vpc_OrderInfo'] = 'JSECURETEST01';
	// Số tiền cần thanh toán,Đã được nhân với 100. VD: 100=1VND
	$one_pay_array['vpc_Amount'] = 100;
	// Url nhận kết quả trả về sau khi giao dịch hoàn thành
	$one_pay_array['vpc_ReturnURL'] = SITE_NAME.'/common/one_pay/inland/dr.php';
	// Phiên bản modul (cố định)
	$one_pay_array['vpc_Version'] = 2;
	// Loại request (cố định)
	$one_pay_array['vpc_Command'] = 'pay';
	// Ngôn ngữ hiện thị trên cổng (vn/en)
	$one_pay_array['vpc_Locale'] = 'vn';
	// Loại tiền tệ (VND)
	$one_pay_array['vpc_Currency'] = 'VND';
	// IP address
	$one_pay_array['vpc_TicketNo'] = $_SERVER ['REMOTE_ADDR'];
	// Địa chỉ gửi hàng
	$one_pay_array['vpc_SHIP_Street01'] = '39A Ngo Quyen';
	// Quận Huyện(địa chỉ gửi hàng)
	$one_pay_array['vpc_SHIP_Provice'] = 'Hoan Kiem';
	// Tỉnh/thành phố (địa chỉ khách hàng)
	$one_pay_array['vpc_SHIP_City'] = 'Ha Noi';
	// Quốc gia(địa chỉ khách hàng)
	$one_pay_array['vpc_SHIP_Country'] = 'Viet Nam';
	// Số điện thoại khách hàng
	$one_pay_array['vpc_Customer_Phone'] = '0333';
	// Email KH
	$one_pay_array['vpc_Customer_Email'] = 'nhansay@gmail.com';
	// Tên tài khoản khách hàng trên hệ thống
	$one_pay_array['vpc_Customer_Id'] = 'nhansay';

	return $one_pay_array;
}

function redirect_one_pay_inland( $one_pay_array = array() ) {
	// Khóa bí mật - được cấp bởi OnePAY
	$SECURE_SECRET = ONE_PAY_KEY;

	// Lấy giá trị url cổng thanh toán
	$vpcURL = $one_pay_array["virtualPaymentClientURL"] . "?";

	// bỏ giá trị url và nút submit ra khỏi mảng dữ liệu
	unset( $one_pay_array["virtualPaymentClientURL"] );

	// Khởi tạo chuỗi dữ liệu mã hóa trống
	$stringHashData = "";

	// sắp xếp dữ liệu theo thứ tự a-z trước khi nối lại
	ksort( $one_pay_array );

	// đặt tham số đếm = 0
	$appendAmp = 0;

	foreach ( $one_pay_array as $key => $value ) {

		// tạo chuỗi đầu dữ liệu những tham số có dữ liệu
		if ( strlen( $value ) > 0 ) {
			// this ensures the first paramter of the URL is preceded by the '?' char
			if ( $appendAmp == 0 ) {
				$vpcURL .= urlencode( $key ) . '=' . urlencode( $value );
				$appendAmp = 1;
			} else {
				$vpcURL .= '&' . urlencode( $key ) . "=" . urlencode( $value );
			}
			// Sử dụng cả tên và giá trị tham số để mã hóa
			if ( ( strlen( $value ) > 0 ) && ( ( substr( $key, 0, 4 ) == "vpc_" ) || ( substr( $key, 0, 5 ) == "user_" ) ) ) {
				$stringHashData .= $key . "=" . $value . "&";
			}
		}
	}

 	// xóa ký tự & ở thừa ở cuối chuỗi dữ liệu mã hóa
	$stringHashData = rtrim( $stringHashData, "&" );

	// thêm giá trị chuỗi mã hóa dữ liệu được tạo ra ở trên vào cuối url
	if ( strlen( $SECURE_SECRET ) > 0 ) {
		//$vpcURL .= "&vpc_SecureHash=" . strtoupper(md5($stringHashData));
		// *****************************Thay hàm mã hóa dữ liệu*****************************
		$vpcURL .= "&vpc_SecureHash=" . strtoupper( hash_hmac( 'SHA256', $stringHashData, pack( 'H*', $SECURE_SECRET ) ) );
	}


	// chuyển trình duyệt sang cổng thanh toán theo URL được tạo ra
	header( "Location: " . $vpcURL );
}