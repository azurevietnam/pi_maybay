<?php
/**
 * Created by PhpStorm.
 * User: tungtv
 * Date: 11/10/14
 * Time: 2:40 PM
 */
if(!defined('SITE_NAME'))
{
    require_once '../../config.php';
}
function returnnumber ($num) {
    if($num>10) {
        return $num;
    }
    else {
        return '0'.$num;
    }
}
function separateToFirstAndLastName ($fullName)
{
    $realName = removeRedundantSpaces( $fullName);
    $wordArray = explode(' ', $realName);
    $middleName = " ";
    if( count($wordArray) > 2)
    {
        reset($wordArray);
        $firstName = key($wordArray);
        end($wordArray);
        $lastName = key($wordArray);
        array_shift($wordArray);
        array_pop($wordArray);
        if(count($wordArray) >= 1)
            $middleName = implode(" ", $wordArray);
    }
    return array($firstName, $middleName, $lastName);
}
function removeRedundantSpaces( $fullName)
{
    $Result = NULL;
    for ($i = 0; $i < strlen($fullName); $i++) {
        if (substr($fullName, $i, 1) != ' ') {
            $Result .= trim(substr($fullName, $i, 1));
        }
        else {
            while (substr($fullName, $i, 1) == ' ') {
                $i++;
            }
            $Result .= ' ';
            $i--;
        }
    }
    return trim($Result);
}
//var_dump(separateToFirstAndLastName('Văn Tiến Công'));
//var_dump(removeRedundantSpaces("Văn Tiến Công"));

require_once DIR.'/controller/default/public.php';
require_once DIR.'/common/redict.php';
require_once(DIR . "/common/Mail.php");
$data['config']=config_getByTop(1,'','');

$data['name_tt6']=tieude_getById(6);
$data['danhmuc']=menu_getById(15);
$data['nganhang']=nganhang_getByTop('','','Id desc');
$data['vanphong']=vanphong_getByTop('','','Id desc');

$sessionid = isset($_SESSION['giatri_ss'])?$_SESSION['giatri_ss']:"";
if(isset($_SESSION['s'.$sessionid])) {
    $dataarray = $_SESSION['s'.$sessionid];
}
else {
    $dataarray="";
}
//var_dump($dataarray);
if(isset($_POST['bntDatVe'])){
	$Blockfalse = isset($_POST['Blockfalse'])?str_replace(" ", "", $_POST['Blockfalse']):"";
	$Blocktruelanding = isset($_POST['Blocktruelanding'])?str_replace(" ", "", $_POST['Blocktruelanding']):"";
	$Blocktruedepart = isset($_POST['Blocktruedepart'])?str_replace(" ", "", $_POST['Blocktruedepart']):"";
	if($dataarray['RoundTrip'] == 'true') {
		$link=SITE_NAME.'/dat-ve/?sessionid='.$sessionid.'&outbound='.$Blocktruelanding.'&inbound='.$Blocktruedepart;;
	} else {
		$link=SITE_NAME.'/dat-ve/?sessionid='.$sessionid.'&outbound='.$Blockfalse;
	}
	echo "<script>window.location.href='$link'</script>";
}


$data_post_depart = '';
if(isset($_POST['thanh-toan-tainha']) || isset($_POST['thanh-toan-vanphong']) || isset($_POST['thanh-toan-nganhang']) || isset($_POST['onepay-noidia']) || isset($_POST['onepay-quocte'])) {

    if(isset($_SESSION['dulieu_tk']))
    {
        $data = $_SESSION['dulieu_tk'];
    }
    foreach ($data->value as $val) {
        $data_post_landing = '';
        if (isset($_GET['outbound']) && str_replace(" ", "", $val->FlightNumber) == $_GET['outbound']) {
            $data_post_depart .= '{
                "CurrencyType": "VND",
                "Brand": "'.$val->Airline.'",
                "RoundTrip":'.$dataarray['RoundTrip'].',
                "FromPlaceCode": "'.$dataarray['FromPlace'].'",
                "ToPlaceCode": "'.$dataarray['ToPlace'].'",
                "CallBackUrl": "http://tourcoach.com/test",
                "Adult": '.$dataarray['Adult'].',
                "Child": '.$dataarray['Child'].',
                "Infant": '.$dataarray['Infant'].',
                "DepartDate": "'.$dataarray['DepartDate'].'",
                "FlightNumber": "'.$val->FlightNumber.'",'
                .($val->Airline == "VietnamAirlines"?'"FareBasis" : "'.$val->FareBasis.'",':'').
                '"TicketPrice": "'.number_format($val->Price, 0, ',','').'",
                "TicketType": "'.$val->TicketType.'",';
                if($dataarray['RoundTrip'] == "true") {
                    $data_post_depart .= '
                    "ReturnDate" : "'.$dataarray['ReturnDate'].'",
                    "ReturnFlightNumber" : "'.$_GET['outbound'].'",'
                    .($val->Airline == "VietnamAirlines"?'"ReturnFareBasis" : "'.$val->FareBasis.'",':'').
                    '"ReturnTicketPrice" : 900000,
                    "ReturnTicketType" : "Eco",
                    "BookingPassengers" : ';
                }
            $data_post_depart .= '"BookingPassengers": [';
            for ($i = 1; $i <= $dataarray["Adult"]; $i++) {
                if($i==1) {
                    $data_post_depart .= '{
                        "PassengerType": 0,
                        "Title": "' . $_POST['quydanh_nl_' . $i] . '",
                        "Gender": 1,
                        "FirstName":"' .strtoupper ($_POST['ho_nl_' . $i]). '",
                        "LastName":"' .strtoupper ($_POST['ten_nl_' . $i]). '",
                        "MiddleName":"' .strtoupper ($_POST['tenlot_nl_' . $i]). '",
                        "MobileNumber": "' . $_POST['sdt_lienhe'] . '",
                        "BirthDay": "' . $_POST['nam_nl_' . $i].'-'.returnnumber($_POST['thang_nl_' . $i]).'-'.returnnumber($_POST['ngaysinh_nl_' . $i]). 'T00:00:00",
                        "Email": "' . $_POST['email_lienhe'] . '",
                        "Country" : "VN",
                        "City" : "HCM",
                        "Province" : "10241",
                        "Address" : "Address 1",
                        "Baggage": 0
                    }';
                }
                else {
                    $data_post_depart .= ',{
                        "PassengerType": 0,
                        "Gender": 1,
                        "Title": "' . $_POST['quydanh_nl_' . $i] . '",
                        "FirstName":"' .strtoupper ($_POST['ho_nl_' . $i]). '",
                        "LastName":"' .strtoupper ($_POST['ten_nl_' . $i]). '",
                        "MiddleName":"' .strtoupper ($_POST['tenlot_nl_' . $i]). '",
                        "Baggage": 0,
                        "BirthDay": "' . $_POST['nam_nl_' . $i].'-'.returnnumber($_POST['thang_nl_' . $i]).'-'.returnnumber($_POST['ngaysinh_nl_' . $i]). 'T00:00:00"
                    }';
                }
            }
            for ($i = 1; $i <= $dataarray["Child"]; $i++) {
                $data_post_depart .= ',{
                    "PassengerType": 1,
                    "Gender": 1,
                    "Title": "' . $_POST['quydanh_te_' . $i] . '",
                    "FirstName": "' .strtoupper ($_POST['ho_te_' . $i]). '",
                    "LastName": "' .strtoupper ($_POST['ten_te_' . $i]). '",
                    "MiddleName": "' .strtoupper ($_POST['tenlot_te_' . $i]). '",
                    "BirthDay": "' . $_POST['nam_te_' . $i].'-'.returnnumber($_POST['thang_te_' . $i]).'-'.returnnumber($_POST['ngaysinh_te_' . $i]). 'T00:00:00",
                    "Baggage": 0
                }';
            }
            for ($i = 1; $i <= $dataarray["Infant"]; $i++) {
                $data_post_depart .= ',{
                    "PassengerType": 2,
                    "Title": "' . $_POST['quydanh_ss_' . $i] . '",
                    "Gender": 1,
                    "FirstName":"' .($_POST['ho_ss_' . $i]?strtoupper ($_POST['ho_ss_' . $i]):""). ' ' .($_POST['tenlot_ss_' . $i]?strtoupper ($_POST['tenlot_ss_' . $i]):""). ' ' .($_POST['ten_ss_' . $i]?strtoupper ($_POST['ten_ss_' . $i]):""). '",
                    "BirthDay": "' . $_POST['nam_ss_' . $i].'-'.returnnumber($_POST['thang_ss_' . $i]).'-'.returnnumber($_POST['ngaysinh_ss_' . $i]). 'T00:00:00"
                }';
            }
            $data_post_depart .= ']}';
            //$data_post_depart = '{"CurrencyType" : "VND", "Brand" : "VietJetAir", "RoundTrip":false,"FromPlaceCode" : "HAN", "ToPlaceCode" : "SGN", "CallBackUrl" : "http://yourdomain/yourfunctiongetpnr", "Adult":1,"Child":0,"Infant":0,"DepartDate" : "2015-08-02T00:00:00", "FlightNumber" : "VJ151", "FareBasis" : "", "TicketPrice" : "1140000", "TicketType" : "Eco", "BookingPassengers":[{"PassengerType":0,"Title" : "MR", "Gender":1,"FirstName" : "NHAN", "MiddleName" : "LONG", "LastName" : "NGUYEN", "MobileNumber" : "0909999999", "BirthDay" : "1988-01-10T00:00:00", "Email" : "yourbookingemail@gmail.com", "Country" : "VN", "City" : "HCM", "Province" : "10241", "Address" : "Address 1", "Baggage":0}]}';
            $username = 'sanve24h.com';
            $password = 'sanve@admin';
            $ch = curl_init();
            $url = 'http://api.atvietnam.vn/oapi/airline/Bookings';
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLINFO_HEADER_OUT, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    'Content-Type: application/json')
            );
            curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);              //  curl authentication
            curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");        //  curl authentication
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data_post_depart);
            $str = curl_exec($ch);
            curl_close($ch);
            //echo $str;
            $data = json_decode($str);            // Dữ liệu trả về là kiểu stdClass Object
            var_dump($data_post_depart);

            $message = "";
            $subject = "Thông báo đặt vé tại Tourcoach";
            $email = $_POST['email_lienhe'];
            $message .= "<p>Yêu cầu đặt vé của quý khách đã được xử lý trên hệ thống của chúng tôi.</p>";
            $message .= "<p>Xin chào quý khách: <span style='color: #4010ff'>".$_POST['hoten_lienhe']."</span></p>";
            $message .= "<p>Quý khách vừa đặt thành công chuyến bay: <span style='color: #4010ff'>".$dataarray['TFromPlace']. "->" .$dataarray['TToPlace']. "</span></p>";
//            $message .= "<p>Mã chuyến bay:  <span style='color: #4010ff'>".$data->Id."</span></p>";

//            if(isset($_POST['thanh-toan-tainha'])) {
//                $message .= "<p>Hình thức thanh toán:  <span style='color: #4010ff'>Thanh toán tại nhà</span></p>";
//                //SendMail($email, $message, $subject);
//                $link=SITE_NAME.'/confirmation/?orderid='.$data->Id.'&method=1';
//                echo "<script>window.location.href='$link'</script>";
//            }
//            if(isset($_POST['thanh-toan-vanphong'])) {
//                $message .= "<p>Hình thức thanh toán:  <span style='color: #4010ff'>Thanh toán tại văn phòng TourCoach</span></p>";
//                //SendMail($email, $message, $subject);
//                $link=SITE_NAME.'/confirmation/?orderid='.$data->Id.'&method=2';
//                echo "<script>window.location.href='$link'</script>";
//            }
//            if(isset($_POST['thanh-toan-nganhang'])) {
//                $message .= "<p>Hình thức thanh toán:  <span style='color: #4010ff'>Thanh toán qua ngân hàng</span></p>";
//                //SendMail($email, $message, $subject);
//                $link=SITE_NAME.'/confirmation/?orderid='.$data->Id.'&method=3';
//                echo "<script>window.location.href='$link'</script>";
//            }

            if(isset($_POST['onepay-noidia'])) {
				// code by nhan say
				require_once DIR.'/common/one_pay/inland.php';

				// controller sẽ nhận kết quả trả về của one pay để xử lý
				$return_url = SITE_NAME.'/controller/default/inland_dr.php';

				// lấy các tham số để redirect sang one pay
				$one_pay_array = get_one_pay_inland( $_POST, $return_url );
				// mã hóa và redirect
				redirect_one_pay_inland( $one_pay_array );
            }

            if(isset($_POST['onepay-quocte'])) {
				// code by nhan say
				require_once DIR.'/common/one_pay/inter.php';

				// controller sẽ nhận kết quả trả về của one pay để xử lý
				$return_url = SITE_NAME.'/controller/default/inter_dr.php';

				// lấy các tham số để redirect sang one pay
				$one_pay_array = get_one_pay_inter( $_POST, $return_url );
				// mã hóa và redirect
				redirect_one_pay_inter( $one_pay_array );
            }
        }
    }
}

if($_SESSION['kiemtra']==1)
{
    $title=($data['danhmuc'][0]->Title)?$data['danhmuc'][0]->Title:'CÔNG TY TNHH DỊCH VỤ - VẬN TẢI VÀ LỮ HÀNH QUỐC TẾ COACH';
}
else
{
    $title=($data['danhmuc'][0]->Title_en)?$data['danhmuc'][0]->Title_en:'SERVICES LTD - TRANSPORT AND INTERNATIONAL TRAVEL COACH';
}
$description=($data['danhmuc'][0]->Description)?$data['danhmuc'][0]->Description:'CÔNG TY TNHH DỊCH VỤ - VẬN TẢI VÀ LỮ HÀNH QUỐC TẾ COACH';
$keywords=($data['danhmuc'][0]->Keyword)?$data['danhmuc'][0]->Keyword:'CÔNG TY TNHH DỊCH VỤ - VẬN TẢI VÀ LỮ HÀNH QUỐC TẾ COACH';
show_header($title,$description,$keywords,$data);

show_menu($data,'datve');
show_datve($data);

show_footer($data,'');