<?php
/**
 * Created by PhpStorm.
 * User: tungtv
 * Date: 11/10/14
 * Time: 2:44 PM
 */
require_once DIR . '/view/default/public.php';
require_once DIR . '/common/cls_fast_template.php';
function show_lienhe($data = array())
{
    $asign = array();
    $asign['Name_dm']= $data['Name_dm'];
    $asign['Name']= $data['Name'];
    $asign['tieude']= $data['tieude'];
    $asign['NoiDung']= $data['NoiDung'];
    $asign['cungloai']= $data['cungloai'];
    $asign['Hotline'] = $data['config'][0]->Hotline;
    $asign['Email'] = $data['config'][0]->Email;

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
        $asign['name_tt8'] = $data['name_tt8'][0]->Name;
        $asign['name_tt12'] = $data['name_tt12'][0]->Name;
        $asign['quydanh_tt'] = "Quý danh";

        $asign['qd_tt'] = ' <option value="Ông">Ông</option> <option value="Bà">Bà</option>';
        $asign['hoten_tt'] = "Họ tên";
        $asign['mail_tt'] = "Email đăng nhập";
        $asign['mk_tt'] = "Mật khẩu đăng nhập";
        $asign['mk2_tt'] = "Nhập lại mật khẩu đăng nhập";
        $asign['dt_tt'] = "Điện thoại";
        $asign['dc_tt'] = "Địa chỉ";
        $asign['dieukhoan'] = 'Đồng ý với các <a href="'.SITE_NAME.'/dieu-khoan-dieu-kien.html">điều khoản</a> của Tourcoach';
        $asign['dk_tt'] = "Gửi liên hệ";
        $asign['ll_tt'] = "Làm lại";
        $asign['vp_td'] = "Địa chỉ văn phòng TOURCOACH";
        $asign['hl_td'] = "Hotline hỗ trợ 24/7";
        $asign['Address_gt'] = $data['config'][0]->Address;
        $asign['ndyc_td'] = "Nội dung yêu cầu";
        $asign['gem_td'] = "Gửi cho tôi biết thêm chi tiết qua email";
        $asign['call_td'] = "Hãy gọi cho tôi nếu có thể";
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
        $asign['name_tt12'] = $data['name_tt12'][0]->Name_en;
        $asign['qd_tt'] = ' <option value="Mr.">Mr.</option> <option value="Ms.">Ms.</option>';
        $asign['name_tt8'] = $data['name_tt8'][0]->Name_en;
        $asign['quydanh_tt'] = "Quý danh";
        $asign['hoten_tt'] = "Name";
        $asign['mail_tt'] = "Email login";
        $asign['mk_tt'] = "Login password";
        $asign['mk2_tt'] = "Confirm password";
        $asign['dt_tt'] = "Phone";
        $asign['dc_tt'] = "Address";
        $asign['dieukhoan'] = 'Agree <a href="'.SITE_NAME.'/dieu-khoan-dieu-kien.html">to the terms</a> of Tourcoach';
        $asign['dk_tt'] = "Send contact";
        $asign['ll_tt'] = "Redo";
        $asign['Address_gt'] = $data['config'][0]->Address_en;
        $asign['vp_td'] = "Office Address TOURCOACH";
        $asign['hl_td'] = "Hotline Support 24/7";
        $asign['ndyc_td'] = "Content request";
        $asign['gem_td'] = "Send me more details via email";
        $asign['call_td'] = "Call me if possible";
    }


    $asign['Name_user']="";
    if(isset($data['Name_user']))
    {
        $asign['Name_user']=$data['Name_user'];
    }

    $asign['DienThoai_user']="";
    if(isset($data['DienThoai_user']))
    {
        $asign['DienThoai_user']=$data['DienThoai_user'];
    }
    $asign['Email_user']="";
    if(isset($data['Email_user']))
    {
        $asign['Email_user']=$data['Email_user'];
    }
    $asign['Address_user']="";
    if(isset($data['Address_user']))
    {
        $asign['Address_user']=$data['Address_user'];
    }


    $three_day = time() + 6*24*60*60;
    $asign['three_day'] = date("d/m/Y",$three_day);
    $six_day = time() + 9*24*60*60;
    $asign['six_day'] = date("d/m/Y",$six_day);



    print_template($asign, 'lienhe');
}