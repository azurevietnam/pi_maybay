<?php
/**
 * Created by PhpStorm.
 * User: ductho
 * Date: 8/15/14
 * Time: 3:43 PM
 */
require_once DIR.'/view/default/public.php';
function view_right($data=array())
{
    $asign=array();

    $asign['hotro_right'] = "";
    if (count($data['hotro_right']) > 0) {
        $asign['hotro_right'] = print_item('hotro_right', $data['hotro_right']);
    }
    if($_SESSION['kiemtra']==1)
    {
        $asign['datemaybay_td']="ĐẶT VÉ MÁY BAY";
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
        $asign['hotrodatve_td']="HỖ TRỢ ĐẶT VÉ";
        $asign['goichungtoi_td']="Hãy gọi để được chúng tôi tư vấn";
        $asign['camket_td']="Cam kết giá rẻ nhất cho mỗi chặng bay";

    }
    else
    {
        $asign['datemaybay_td']="TICKET BOOKING";
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
        $asign['hotrodatve_td']="SUPPORT BOOKING";
        $asign['goichungtoi_td']="Please call us for advice";
        $asign['camket_td']="Cheapest commitments for each flight";


    }



    $three_day_right = time() + 6*24*60*60;
    $asign['three_day_right'] = date("d/m/Y",$three_day_right);
    $six_day_right = time() + 9*24*60*60;
    $asign['six_day_right'] = date("d/m/Y",$six_day_right);
    print_template($asign,'right');
}


function view_right2($data=array())
{
    $asign=array();

    $asign['hotro_right'] = "";
    if (count($data['hotro_right']) > 0) {
        $asign['hotro_right'] = print_item('hotro_right', $data['hotro_right']);
    }
    if($_SESSION['kiemtra']==1)
    {
        $asign['datemaybay_td']="ĐẶT VÉ MÁY BAY";
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
        $asign['hotrodatve_td']="HỖ TRỢ ĐẶT VÉ";
        $asign['goichungtoi_td']="Hãy gọi để được chúng tôi tư vấn";
        $asign['camket_td']="Cam kết giá rẻ nhất cho mỗi chặng bay";

    }
    else
    {
        $asign['datemaybay_td']="TICKET BOOKING";
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
        $asign['hotrodatve_td']="SUPPORT BOOKING";
        $asign['goichungtoi_td']="Please call us for advice";
        $asign['camket_td']="Cheapest commitments for each flight";


    }



    //$three_day_right = time() + 6*24*60*60;
    $three_day_right = time();
    $asign['three_day_right'] = date("d/m/Y",$three_day_right);
    //$six_day_right = time() + 9*24*60*60;
    $six_day_right = time();
    $asign['six_day_right'] = date("d/m/Y",$six_day_right);
    print_template($asign,'right2');
}
