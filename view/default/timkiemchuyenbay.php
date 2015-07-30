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
function show_timkiemchuyenbay($data = array(),$data_post)
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

        $asign['chuyen_bay_td']="Chuyến bay";
        $asign['khoihanh_td']="Khởi hành";
        $asign['di_td']="Đi";
        $asign['den_td']="Đến";
        $asign['giave_td']="Giá vé";
        $asign['chitiet_td']="Chi tiết";


        $asign['sohk_td']="Số hành khách";
        $asign['ngayxuatphat_td']="Ngày xuất phát";
        $asign['loaive_td']="Loại vé";
        $asign['hanhtrinh_td']="Hành trình chuyến đi";
        $asign['hanhtrinhve_td']="Hành trình chuyến về";
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

        $asign['chuyen_bay_td']="Flight";
        $asign['khoihanh_td']="Start";
        $asign['di_td']="Go";
        $asign['den_td']="Come";
        $asign['giave_td']="Fare";
        $asign['chitiet_td']="Detail";

        $asign['sohk_td']="Number of passengers";
        $asign['ngayxuatphat_td']="On the starting";
        $asign['loaive_td']="Ticket type";
        $asign['hanhtrinh_td']="Trip Itinerary";
        $asign['hanhtrinhve_td']="Trip Itinerary on";
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

    $asign['DepartDate'] = date("d/m/Y", strtotime($data['DepartDate']));
    $asign['ReturnDate'] = date("d/m/Y", strtotime($data['ReturnDate']));

    $asign['PAGING'] = "";
    $three_day = time() + 3*24*60*60;
    //$three_day = time();
    $asign['three_day'] = date("d/m/Y",$three_day);
    $six_day = time() + 4*24*60*60;
    //$six_day = time();
    $asign['six_day'] = date("d/m/Y",$six_day);

    $asign['hientai'] = date("d-m-Y");

    if( $asign['RoundTrip'] == 'false')
    {
        print_template($asign, 'timkiemchuyenbay');
    }
    else
    {
        print_template($asign, 'timkiemchuyenbay2');
    }



}