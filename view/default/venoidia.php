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
function show_venoidia($data = array())
{
    $asign = array();
    $asign['tieude']="";
    if($_SESSION['kiemtra']==1)
    {
        $asign['venoidia_td']="Vé nội địa";
        $asign['vequocte_td']="Vé quốc tế";
        $asign['datvemaybay_td']="ĐẶT VÉ MÁY BAY";
        $asign['vekhuhoi_td']="Vé khứ hồi";
        $asign['vemotchieu_td']="Vé một chiều";
        $asign['diemdi_td']="Điểm đi";
        $asign['diemden_td']="Điểm đến";
        $asign['ngaydi_td']="Ngày đi";
        $asign['ngayve_td']="Ngày về";
        $asign['nguoilon_td']="Người lớn";
        $asign['treem_td']="Trẻ em";
        $asign['sosinh_td']="Sơ sinh";
        $asign['timchuyenbay_td']="Tìm chuyến bay";
        $asign['dv_td']=$data['danhmuc'][0]->Name;
        $asign['tieude'] ='<a href="'.SITE_NAME.'"><i class="fa fa-home"></i> Trang chủ</a> <i class="fa fa-angle-right"></i> <span>'.$asign['dv_td'].'</span>';
        $asign['name_tt6'] = $data['name_tt6'][0]->Name;
    }
    else
    {
        $asign['vequocte_td']="International ticket";
        $asign['venoidia_td']="Domestic ticket";
        $asign['datvemaybay_td']="TICKET BOOKING";
        $asign['vekhuhoi_td']="Return Ticket";
        $asign['vemotchieu_td']="One-way ticket";
        $asign['diemdi_td']="Points go";
        $asign['diemden_td']="Destination";
        $asign['ngaydi_td']="Date out";
        $asign['ngayve_td']="Date of";
        $asign['nguoilon_td']="Adults";
        $asign['treem_td']="Children";
        $asign['sosinh_td']="Newborn";
        $asign['timchuyenbay_td']="Find flight";

        $asign['dv_td']=$data['danhmuc'][0]->Name_en;
        $asign['tieude'] ='<a href="'.SITE_NAME.'"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i> <span>'.$asign['dv_td'].'</span>';
        $asign['name_tt6'] = $data['name_tt6'][0]->Name_en;
    }

    $asign['danhsach'] = "";
    if (count($data['danhsach']) > 0) {
        $asign['danhsach'] = print_item('khuyenmai', $data['danhsach']);
    }
    else
    {

        if($_SESSION['kiemtra']==1)
        {
            $asign['danhsach'] = "Hệ thống đang cập nhật dữ liệu";
        }
        else
        {
            $asign['danhsach'] = "The system is updated data";
        }


    }
    $asign['PAGING'] =$data['PAGING'] ;
    $three_day = time() + 3*24*60*60;
    //$three_day = time();
    $asign['three_day'] = date("d/m/Y",$three_day);
    $six_day = time() + 4*24*60*60;
    //$six_day = time();
    $asign['six_day'] = date("d/m/Y",$six_day);

    print_template($asign, 'venoidia');
}