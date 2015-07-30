<?php
/**
 * Created by PhpStorm.
 * User: tungtv
 * Date: 11/10/14
 * Time: 2:44 PM
 */
require_once DIR . '/view/default/public.php';
require_once DIR . '/common/cls_fast_template.php';
require_once DIR . '/common/paging.php';
function show_timkiemchuyenbayquocte($data = array(), $data_post)
{
    $asign = array();
    $asign['tieude'] = "";

    $asign['RoundTrip']=$data['RoundTrip'];
    $asign['data_post']=$data_post;

    $asign['FromPlace']=$data['FromPlace'];
    $asign['TFromPlace']=$data['TFromPlace'];
    $asign['ToPlace']=$data['ToPlace'];
    $asign['TToPlace']=$data['TToPlace'];
    $asign['DepartDate']= $data['DepartDate'];
    $asign['ReturnDate']= $data['ReturnDate'];
    $asign['adult']=$data['Adult'];
    $asign['child']=$data['Child'];
    $asign['infant']=$data['Infant'];

    if ($_SESSION['kiemtra'] == 1) {

//        if($data['roundTrip']=="true")
//        {
//            $asign['loaive']="Khứ hồi";
//        }
//
//        else
//        {
//            $asign['loaive']="Một chiều";
//        }
        $asign['sohk_td']="Số hành khách";

        $asign['ngayxuatphat_td']="Ngày xuất phát";
        $asign['loaive_td']="Loại vé";
        $asign['hanhtrinh_td']="Hành trình chuyến bay";
        $asign['venoidia_td']="Vé nội địa";
        $asign['vequocte_td']="Vé quốc tế";
        $asign['datvemaybay_td']="ĐẶT VÉ MÁY BAY";
        $asign['vekhuhoi_td']="Vé khứ hồi";
        $asign['vemotchieu_td']="Vé một chiều";
        $asign['diemdi_td']="Điểm đi";
        $asign['diemden_td']="Điểm đến";
        $asign['ngaydi_td']="Ngày đi";
        $asign['ngayve_td']="Ngày về";
        $asign['nguoilon_td']="người lớn";
        $asign['treem_td']="trẻ em";
        $asign['sosinh_td']="sơ sinh";
        $asign['timchuyenbay_td']="Tìm chuyến bay";
        $asign['tieude'] = '<a href="' . SITE_NAME . '"><i class="fa fa-home"></i> Trang chủ</a> <i class="fa fa-angle-right"></i> <span>Tìm kiếm</span>';
        $asign['name_tt6'] = $data['name_tt6'][0]->Name;
    } else {
//        if($data['roundTrip']=="true")
//        {
//            $asign['loaive']="Round-trip";
//        }
//
//        else
//        {
//            $asign['loaive']="One-way";
//        }
        $asign['sohk_td']="Number of passengers";
        $asign['ngayxuatphat_td']="On the starting";
        $asign['loaive_td']="Ticket type";
        $asign['hanhtrinh_td']="Trip Itinerary";
        $asign['vequocte_td']="International ticket";
        $asign['venoidia_td']="Domestic ticket";
        $asign['datvemaybay_td']="TICKET BOOKING";
        $asign['vekhuhoi_td']="Return Ticket";
        $asign['vemotchieu_td']="One-way ticket";
        $asign['diemdi_td']="Points go";
        $asign['diemden_td']="Destination";
        $asign['ngaydi_td']="Date out";
        $asign['ngayve_td']="Date of";
        $asign['nguoilon_td']="adults";
        $asign['treem_td']="children";
        $asign['sosinh_td']="newborn";
        $asign['timchuyenbay_td']="Find flight";
        $asign['tieude'] = '<a href="' . SITE_NAME . '"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i> <span>Search</span>';
        $asign['name_tt6'] = $data['name_tt6'][0]->Name_en;
    }
//
//    $asign['danhsach'] = "";
//    if (count($data12) > 0) {
//        $temp = 1;
//        foreach ($data12->value as $val) {
//
//            $asign['danhsach'] .= '<tr class="i-result">';
//            $asign['danhsach'] .= '<td class="logo-air"><img src="' .SITE_NAME.'/view/default/theme/images/'. $val->AirlineCode . '.png" alt="" /><p>' . $val->FlightNumber . '</p></td>';
//            $thoigian1 = date("h:i", strtotime($val->DepartTime));
//            $FromPlace = $data['FromPlace'];
//            $asign['danhsach'] .= '<td class="den-di"><p>' . $thoigian1 . '<span>' . $FromPlace . ''.$val->Id.'</span></p></td>';
//            $asign['danhsach'] .= '<td class="thoi-gian"><span>02:05</span></td>';
//            $thoigian2 = date("h:i", strtotime($val->LandingTime));
//            $ToPlace = $data['ToPlace'];
//            $asign['danhsach'] .= '<td class="den-di"><p>' . $thoigian2 . '<span>(' . $ToPlace . ')</span></p></td>';
//            $gia = number_format($val->Price);
//            $asign['danhsach'] .= '<td class="gia"><p>' . $gia . ' <sup>vnđ</sup></p></td>';
//
//            $asign['danhsach'] .= '<td class="check-ve">';
//            $roundTrip = $data['roundTrip'];
//            $asign['danhsach'] .= '<input type="radio" id="air-' . $temp . '" flightref="' . $val->FlightNumber . '" name="Block' . $roundTrip . '" value="' . $val->FlightNumber . '" recec="0" />';
//            $asign['danhsach'] .= '<label for="air-' . $temp . '"><span></span>&nbsp</label>';
//            $asign['danhsach'] .= '</td>';
//            $asign['danhsach'] .= '<td class="chi-tiet"><a href="#">Xem chi tiết</a></td>';
//            $asign['danhsach'] .= '</tr>';
//            $asign['danhsach'] .= '<tr style="" class="flight-info-detail">';
//            $asign['danhsach'] .= '<td class="flight-detail-content" colspan="8">';
//            $asign['danhsach'] .= ' <table width="100%" cellspacing="0" cellpadding="0">';
//            $asign['danhsach'] .= ' <tbody class="view-detail-flight">';
//            $asign['danhsach'] .= '<tr>';
//            $asign['danhsach'] .= ' <td valign="top">';
//            $asign['danhsach'] .= '<h4>Chuyến bay</h4>';
//            $asign['danhsach'] .= '<p><span>' . $val->AirlineCode . '</span></p>';
//            $asign['danhsach'] .= '<p><span>' . $val->FlightNumber . '</b></span></p>';
//            $asign['danhsach'] .= '<p>Loại vé: <span>' . $val->TicketType . '</span></p>';
//            $asign['danhsach'] .= '</td>';
//            $asign['danhsach'] .= '<td valign="top">';
//            $asign['danhsach'] .= '<h4>Khởi hành</h4>';
//            $TFromPlace = $data['TFromPlace'];
//            $asign['danhsach'] .= '<p>Từ <span class="color-blue">'.$TFromPlace.', </span>Việt Nam</p>';
//
//            $asign['danhsach'] .= '<p>Sân bay: <span>' . $TFromPlace . ' (' . $FromPlace . ')</span></p>';
//            $thoigian3 = date("h:i", strtotime($val->DepartTime));
//            $thoigian4 = date("d/m/Y", strtotime($val->DepartTime));
//            $asign['danhsach'] .= '<p>Thời gian: <span class="color-blue">' . $thoigian3 . '</span>, ' . $thoigian4 . '</p>';
//            $asign['danhsach'] .= '</td>';
//            $asign['danhsach'] .= '<td valign="top">';
//            $asign['danhsach'] .= '<h4>Điểm đến</h4>';
//            $TToPlace = $data['TToPlace'];
//            $asign['danhsach'] .= '<p>Tới <span class="color-blue">' . $TToPlace . ', </span>Việt Nam</p>';
//
//            $asign['danhsach'] .= '<p>Sân bay: <span>' . $TToPlace . ' (' . $ToPlace . ')</span></p>';
//            $thoigian5 = date("h:i", strtotime($val->LandingTime));
//            $thoigian6 = date("d/m/Y", strtotime($val->LandingTime));
//            $asign['danhsach'] .= '<p>Thời gian: <span class="color-blue">' . $thoigian5 . '</span>, ' . $thoigian6 . '</p>';
//            $asign['danhsach'] .= '</td>';
//            $asign['danhsach'] .= ' </tr>';
//            $asign['danhsach'] .= '</tbody>';
//            $asign['danhsach'] .= '</table>';
//            $asign['danhsach'] .= '<table width="100%" class="price-break">';
//            $asign['danhsach'] .= '<tbody>';
//            $asign['danhsach'] .= '<tr class="title-b">';
//            $asign['danhsach'] .= '<td nowrap="" align="center" class="header">Hành khách</td>';
//            $asign['danhsach'] .= ' <td nowrap="" align="center" class="header">Số lượng vé</td>';
//            $asign['danhsach'] .= '<td nowrap="" align="center" class="header pb-price">Giá mỗi vé</td>';
//            $asign['danhsach'] .= '<td nowrap="" align="center" class="header pb-price">Thuế &amp; Phí</td>';
//            $asign['danhsach'] .= '<td nowrap="" align="center" style="display:none;" class="header pb-price">Giảm giá</td>';
//            $asign['danhsach'] .= '<td nowrap="" align="center" class="header pb-price">Tổng giá</td>';
//            $asign['danhsach'] .= '</tr>';
//
//            $asign['danhsach'] .= '<tr>';
//            $asign['danhsach'] .= '<td align="center" class="pax">Người lớn</td>';
//            $asign['danhsach'] .= '<td align="center" class="pax">1</td>';
//            $asign['danhsach'] .= '<td align="center" class="pax pb-price">1,030,000 VNĐ</td>';
//            $asign['danhsach'] .= '<td align="center" class="pax pb-price">473,000 VNĐ</td>';
//            $asign['danhsach'] .= '<td align="center" style="display:none;" class="pax pb-price">0 VNĐ</td>';
//            $asign['danhsach'] .= '<td align="center" class="pax pb-price">1,503,000 VNĐ</td>';
//            $asign['danhsach'] .= ' </tr>';
//            $asign['danhsach'] .= '<tr>';
//            $asign['danhsach'] .= '<td align="center" class="pax">Người lớn</td>';
//            $asign['danhsach'] .= '<td align="center" class="pax">1</td>';
//            $asign['danhsach'] .= '<td align="center" class="pax pb-price">1,030,000 VNĐ</td>';
//            $asign['danhsach'] .= '<td align="center" class="pax pb-price">473,000 VNĐ</td>';
//            $asign['danhsach'] .= '<td align="center" style="display:none;" class="pax pb-price">0 VNĐ</td>';
//            $asign['danhsach'] .= '<td align="center" class="pax pb-price">1,503,000 VNĐ</td>';
//            $asign['danhsach'] .= ' </tr>';
//            $asign['danhsach'] .= '<tr class="total-b">';
//            $asign['danhsach'] .= '<td align="right" class="footer" colspan="3"></td>';
//            $asign['danhsach'] .= ' <td align="right" class="footer">';
//            $asign['danhsach'] .= '    <p>Tổng cộng </p>';
//            $asign['danhsach'] .= '<td align="center" class="footer pb-price" colspan="2">';
//            $asign['danhsach'] .= ' <p>1,503,000 VNĐ</p>';
//            $asign['danhsach'] .= ' </td>';
//            $asign['danhsach'] .= '</tr>';
//            $asign['danhsach'] .= '</tbody>';
//            $asign['danhsach'] .= '</table>';
//            $asign['danhsach'] .= '<table class="dieu-kien" width="90%" cellspacing="0" cellpadding="0">';
//            $asign['danhsach'] .= '<colgroup><col width="170">
//                <col width="450">
//            </colgroup>
//            <tbody>
//            <tr class="title">
//                <td colspan="2"><h4>Điều kiện hành lý</h4></td>
//            </tr>
//            <tr>
//                <td class="name">Hành Lý Xách Tay</td>
//                <td>7 kg</td>
//            </tr>
//            <tr>
//                <td class="name">Hành lý ký gửi</td>
//                <td>Vui lòng chọn ở bước sau</td>
//            </tr>
//            </tbody>
//        </table>
//        <table class="dieu-kien" cellspacing="0" cellpadding="0" width="90%">
//            <colgroup>
//                <col width="170">
//                <col width="450">
//            </colgroup>
//            <tbody>
//            <tr class="title">
//                <td colspan="2"><h4>Điều kiện về vé</h4></td>
//            </tr>
//            <tr><td valign="top" class="name">Hoàn Vé</td><td valign="top">Không được phép</td></tr><tr><td valign="top" class="name">Đổi Tên Hành Khách</td><td valign="top">Được phép - Thu phí: 352,000 VND</td></tr><tr><td valign="top" class="name">Đổi Hành Trình</td><td valign="top">Được phép - Thu phí: 352.000 VND + Giá vé chênh lệch (nếu có). Đổi đồng hạng hoặc nâng hạng tương ứng của hành trình mới.</td></tr><tr><td valign="top" class="name">Đổi Ngày Giờ Chuyến Bay</td><td valign="top">Được phép - Thu phí: 352.000 VND + Giá vé chênh lệch (nếu có).</td></tr><tr><td valign="top" class="name">Bảo lưu</td><td valign="top">Không được phép</td></tr><tr><td valign="top" class="name">Thời hạn thay đổi (bao gồm thay đổi tên, ngày/chuyến bay)</td><td valign="top">Trước giờ khởi hành 12 tiếng.</td></tr>
//            <tr style="display:none;" class="title">
//                <td colspan="2">Điều kiện chung:</td>
//            </tr>
//            <tr style="display:none;">
//                <td colspan="2">{GeneralRule}</td>
//            </tr>
//            </tbody></table>
//    </td>
//</tr>';
//
//            $temp++;
//        }
//    } else {
//
//        if ($_SESSION['kiemtra'] == 1) {
//            $asign['danhsach'] = "Không có kết quả tìm kiếm";
//        } else {
//            $asign['danhsach'] = "No search results";
//        }
//
//
//    }
//    $asign['PAGING'] = "";
    $three_day = time() + 6*24*60*60;
    $three_day = time() + 6*24*60*60;
    $asign['three_day'] = date("d/m/Y",$three_day);
    $six_day = time() + 9*24*60*60;
    $asign['six_day'] = date("d/m/Y",$six_day);

    $asign['hientai'] = date("d-m-Y");
    print_template($asign, 'timkiemchuyenbayquocte');
}