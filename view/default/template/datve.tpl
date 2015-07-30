<div class="top-page top-page-detail_tt">
    <div class="container">
        <div class=" col-md-12 col-sm-12 col-xs-12 duongdan_tt">
            {tieude}
        </div>
        <div class="book-ticket col-md-12 col-sm-12 col-xs-12">
            <form class="form" action="{SITE-NAME}/tim-kiem-chuyen-bay/" method="post">
                <div class="fields">
                    <input type="radio" name="RoundTrip" value="true" id="ve-khu-hoi" checked />
                    <label for="ve-khu-hoi"><span></span>{vekhuhoi_td}</label>
                    <input type="radio" name="RoundTrip" value="false" id="ve-mot-chieu"checked />
                    <label for="ve-mot-chieu"><span></span>{vemotchieu_td}</label>
                </div>
                <div class="row row-padding-10">
                    <div class="col-md-2 col-sm-12 chon-dia-diem">
                        <p>{diemdi_td}</p>
                        <input type="text" class="chuyen-bay chieu-di" id="chieu-di" value="Hà Nội" name="TFromPlace"/>
                        <input id="hide-chieu-di" type="hidden" name="FromPlace" value="HAN"/>
                    </div>
                    <div class="col-md-2 col-sm-12">
                        <p>{diemden_td}</p>
                        <input type="text" class="chuyen-bay chieu-ve" id="chieu-ve" value="Hồ Chí Minh"
                               name="TToPlace"/>
                        <input id="hide-chieu-ve" type="hidden" name="ToPlace" value="SGN"/>
                    </div>
                    <div class="col-md-2-2 col-sm-12 date ngay">
                        <div class="row row-padding-10">
                            <div class="col-md-6 col-sm-12">
                                <p>{ngaydi_td}</p>
                                <input type="text" class="chuyen-bay" id="ngay-di" value="{three_day}"
                                       name="DepartDate"/>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <p>{ngayve_td}</p>
                                <input type="text" class="chuyen-bay" id="ngay-ve" value="{six_day}" name="ReturnDate"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2-1 col-sm-12 ">
                        <p>{nguoilon_td}</p>
                        <div>
                            <a class="sub" href="#">-</a>
                            <select class="nguoi-lon" id="nguoi-lon-select" name="adult">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                            </select>
                            <a class="sum" href="#">+</a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-md-2-1 col-sm-12">
                        <p>{treem_td}</p>
                        <div>
                            <a class="sub" href="#">-</a>
                            <select class="tre-em" id="tre-em" value="0" name="child">
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
                            </select>
                            <a class="sum" href="#">+</a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-md-2-1 col-sm-12">
                        <p>{sosinh_td}</p>
                        <div>
                            <a class="sub" href="#">-</a>
                            <select class="so-sinh" id="so-sinh" value="0" name="infant">
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
                            </select>
                            <a class="sum" href="#">+</a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-12 tim-kiem_tt  ">
                        <p><input type="submit" value="{timchuyenbay_td}" name="bntTimKiem" /></p>
                        <input id="hide-noi-dia" type="hidden" name="noi-dia" value="true"/>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</header>
<section class="content-area container">
<div style="padding-left: 0px;   margin-top: 25px;" class="left_sidebar col-md-9-1 col-sm-9 col-xs-12">

<div class="main-content clearfix">
<div class="tieude_datve_tt">
    <div class="tieude_datve_tt_icon1"></div>
    <span class="thongtin_tt_icon">THÔNG TIN CHUYẾN BAY</span>
</div>
<div class="noidung_tt_datve">
    {noidung_datve}
</div>
{chieu_di}
{chieu_ve}

<div class="tieude_datve_ft">
    <div class="chieu-bay"><span class="mauxanh_tt thongtin_hl" >THÔNG TIN HÀNH LÝ</span></div>
</div>
<div class="noidung_tt_datve">
    <table>
        <tr >
            <td class="title_datve" style="padding-bottom: 10px;">Hành lý sách tay:</td>
            <td class="giatri_datve">Mỗi hành khách được mang tối đa 7kg hành lý sách tay</td>
        </tr>
        <tr>
            <td class="title_datve">Hành lý kýt gửi:</td>
            <td class="giatri_datve">+ Thêm 15kg hành lý (143.000 vnd / người)</td>
        </tr>
        <tr>
            <td class="title_datve"></td>
            <td class="giatri_datve">+ Thêm 20kg hành lý (165.000 vnd / người)</td>
        </tr>
        <tr>
            <td class="title_datve"></td>
            <td class="giatri_datve">+ Thêm 30kg hành lý (270.000 vnd / người)</td>
        </tr>
        <tr>
            <td class="title_datve"></td>
            <td class="giatri_datve">+ Thêm 35kg hành lý (320.000 vnd / người)</td>
        </tr>
        <tr>
            <td class="title_datve"></td>
            <td class="giatri_datve">+ Thêm 40kg hành lý (370.000 vnd / người)</td>
        </tr>

    </table>
</div>
<div class="tieude_datve_ft">
    <div class="chieu-bay"><span class="mauxanh_tt thongtin_hl" >ĐIỀU KIỆN GIÁ VÉ</span></div>
</div>
<div class="noidung_tt_datve" style="margin-bottom: 20px">
    <div class="ma-new-product-title" style="margin-bottom: 30px" ><h2 style="color: #fb9026;">ĐIỀU KIỆN GIÁ VÉ CHIỀU ĐI</h2></div>
    <table>
        <tr >
            <td class="title_datve" style="padding-bottom: 10px;">Thay đổi chuyến bay:</td>
            <td class="giatri_datve">Được phép - Thu phí:355.000 VND cộng chênh lệch giá, Trước 24h so với giờ khởi hành</td>
        </tr>
        <tr >
            <td class="title_datve" style="padding-bottom: 10px;">Thay đổi hành trình:</td>
            <td class="giatri_datve">Được phép - Thu phí:355.000 VND cộng chênh lệch giá, Trước 6h so với giờ khởi hành</td>
        </tr>
        <tr >
            <td class="title_datve" style="padding-bottom: 10px;">Đổi tên hành khách:</td>
            <td class="giatri_datve">Được phép - Thu phí:355.000 VND, Trước 24h so với giờ khởi hành</td>
        </tr>
        <tr >
            <td class="title_datve" style="padding-bottom: 10px;">Bảo lưu vé:</td>
            <td class="giatri_datve">Không được phép</td>
        </tr>
        <tr >
            <td class="title_datve" style="padding-bottom: 10px;">Hoàn vé:</td>
            <td class="giatri_datve">Không được phép</td>
        </tr>
        <tr >
            <td class="title_datve" style="padding-bottom: 10px;">Thời hạn thay đổi thông tin chuyến bay:</td>
            <td class="giatri_datve">Được phép - Thu phí:355.000 VND cộng chênh lệch giá, Trước 24h so với giờ khởi hành</td>
        </tr>


    </table>
    <div class="ma-new-product-title" style="margin-bottom: 30px" ><h2 style="color: #fb9026;">ĐIỀU KIỆN GIÁ VÉ CHIỀU VỀ</h2></div>
    <table>
        <tr >
            <td class="title_datve" style="padding-bottom: 10px;">Thay đổi chuyến bay:</td>
            <td class="giatri_datve">Được phép - Thu phí:355.000 VND cộng chênh lệch giá, Trước 24h so với giờ khởi hành</td>
        </tr>
        <tr >
            <td class="title_datve" style="padding-bottom: 10px;">Thay đổi hành trình:</td>
            <td class="giatri_datve">Được phép - Thu phí:355.000 VND cộng chênh lệch giá, Trước 6h so với giờ khởi hành</td>
        </tr>
        <tr >
            <td class="title_datve" style="padding-bottom: 10px;">Đổi tên hành khách:</td>
            <td class="giatri_datve">Được phép - Thu phí:355.000 VND, Trước 24h so với giờ khởi hành</td>
        </tr>
        <tr >
            <td class="title_datve" style="padding-bottom: 10px;">Bảo lưu vé:</td>
            <td class="giatri_datve">Không được phép</td>
        </tr>
        <tr >
            <td class="title_datve" style="padding-bottom: 10px;">Hoàn vé:</td>
            <td class="giatri_datve">Không được phép</td>
        </tr>
        <tr >
            <td class="title_datve" style="padding-bottom: 10px;">Thời hạn thay đổi thông tin chuyến bay:</td>
            <td class="giatri_datve">Được phép - Thu phí:355.000 VND cộng chênh lệch giá, Trước 24h so với giờ khởi hành</td>
        </tr>


    </table>
</div>
<!--<form class="form" action="{SITE-NAME}/confirmation/" method="post">-->
<form class="form" action="" method="post">
<div class="tieude_datve_tt">
    <div class="tieude_datve_tt_icon2">

    </div>
    <span class="thongtin_tt_icon">THÔNG TIN HÀNH KHÁCH</span>
</div>
<div class="noidung_tt_datve" style="margin-bottom: 20px">
    <p>Thông tin phải chính xác như trên giấy tờ tùy thân(CMND, Hộ Chiếu, giấy phép lái xe...). Quý khách bị từ chối vận chuyển nếu thông tin không chính xác. Vui lòng nhập thông tin bawgnf tiếng Việt không dấu.</p>
    <div class="thongtin_date_noidung" >
        <div class="nguoilon_1"><p class="chuyenbay_datve_tt3">Hành khách</p></div>
        <div class="nguoilon_thongtin_tt">
            <div class="col-md-2">
                <p class="chuyenbay_datve_tt3">Qúy danh</p>
            </div>
            <div class="col-md-4" style="padding-left: 0px">
                <p class="chuyenbay_datve_tt3">Họ và tên <span class="batcuoc_tt">(*)</span></p>
            </div>
            <div class="col-md-2" style="padding-left: 0px">
                <p class="chuyenbay_datve_tt3">Ngày sinh</p>
            </div>
            <div class="col-md-2" style="padding-left: 0px">
                <p class="chuyenbay_datve_tt3">&nbsp;</p>
            </div>
            <div class="col-md-2" style="padding-left: 0px">
                <p class="chuyenbay_datve_tt3">&nbsp;</p>
            </div>
        </div>
        {nguoi_lon}
        {tre_em}
        {so_sinh}
    </div>
</div>

<div class="tieude_datve_tt">
    <div class="tieude_datve_tt_icon3"></div>
    <span class="thongtin_tt_icon">THÔNG TIN LIÊN HỆ</span>
</div>
<div class="noidung_tt_datve" style="margin-bottom: 20px">
    <p>
        Thông tin này giúp chúng tôi liên lạc với quý khách để thông báo cập nhật lịch bay thay đổi và gửi vé điện tử cho quý khách
    </p>
    <div class="thongtin_date_noidung" >
        <div class="nguoilon_1">
				<span class="chuyenbay_datve_tt2">
				   Người đại diện:
				</span>
        </div>
        <div class="nguoilon_thongtin_tt">
            <div class="col-md-2">
                <p class="chuyenbay_datve_tt3">Qúy danh</p>
                <select class="quydanh_1_tt" name="quydanh_lienhe">
                    <option value="1">Ông</option>
                    <option value="2">Bà</option>
                    <option value="1">Anh</option>
                    <option value="2">Chị</option>
                </select>
            </div>
            <div class="col-md-4" style="padding-left: 0px">
                <p class="chuyenbay_datve_tt3">Họ và tên <span class="batcuoc_tt">(*)</span></p>
                <input type="text" class="input_hoten_tt" name="hoten_lienhe" required />
            </div>
            <div class="col-md-2" style="padding-left: 0px">
                <p class="chuyenbay_datve_tt3">Ngày sinh <span class="batcuoc_tt">(*)</span></p>
                <select class="quydanh_1_tt" name="ngaysinh_lienhe" required>
                    <option value="0">Ngày</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                </select>
				<div class="quydanh_1_tt_error" style="color: #ff2400"></div>
            </div>
            <div class="col-md-2" style="padding-left: 0px">
                <p class="chuyenbay_datve_tt3">&nbsp;</p>
                <select class="quydanh_1_tt" name="thang_lienhe" required>
                    <option value="0">Tháng</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
            </div>
            <div class="col-md-2" style="padding-left: 0px">
                <p class="chuyenbay_datve_tt3">&nbsp;</p>
                <select class="quydanh_1_tt" name="nam_lienhe" required>
                    <option value="0">Năm</option>
                    <option value="1950">1950</option>
                    <option value="1951">1951</option>
                    <option value="1952">1952</option>
                    <option value="1953">1953</option>
                    <option value="1954">1954</option>
                    <option value="1955">1955</option>
                    <option value="1956">1956</option>
                    <option value="1957">1957</option>
                    <option value="1958">1958</option>
                    <option value="1959">1959</option>
                    <option value="1960">1960</option>
                    <option value="1961">1961</option>
                    <option value="1962">1962</option>
                    <option value="1963">1963</option>
                    <option value="1964">1964</option>
                    <option value="1965">1965</option>
                    <option value="1966">1966</option>
                    <option value="1967">1967</option>
                    <option value="1968">1968</option>
                    <option value="1969">1969</option>
                    <option value="1970">1970</option>
                    <option value="1971">1971</option>
                    <option value="1972">1972</option>
                    <option value="1973">1973</option>
                    <option value="1974">1974</option>
                    <option value="1975">1975</option>
                    <option value="1976">1976</option>
                    <option value="1977">1977</option>
                    <option value="1978">1978</option>
                    <option value="1979">1979</option>
                    <option value="1980">1980</option>
                    <option value="1981">1981</option>
                    <option value="1982">1982</option>
                    <option value="1983">1983</option>
                    <option value="1984">1984</option>
                    <option value="1985">1985</option>
                    <option value="1986">1986</option>
                    <option value="1987">1987</option>
                    <option value="1988">1988</option>
                    <option value="1989">1989</option>
                    <option value="1989">1989</option>
                    <option value="1990">1990</option>
                    <option value="1991">1991</option>
                    <option value="1992">1992</option>
                    <option value="1993">1993</option>
                    <option value="1994">1994</option>
                    <option value="1995">1995</option>
                    <option value="1996">1996</option>
                    <option value="1997">1997</option>
                    <option value="1998">1998</option>
                    <option value="1999">1999</option>
                    <option value="2000">2000</option>
                    <option value="2001">2001</option>
                    <option value="2002">2002</option>
                    <option value="2003">2003</option>
                    <option value="2004">2004</option>
                    <option value="2005">2005</option>
                    <option value="2006">2006</option>
                    <option value="2007">2007</option>
                    <option value="2008">2008</option>
                    <option value="2009">2009</option>
                    <option value="2010">2010</option>
                    <option value="2011">2011</option>
                    <option value="2012">2012</option>
                    <option value="2013">2013</option>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                </select>
            </div>
        </div>
        <div class="nguoilon_1">
            <span class="chuyenbay_datve_tt2">
                &nbsp;
            </span>
        </div>
        <div class="nguoilon_thongtin_tt">
            <div class="col-md-4" >
                <p class="chuyenbay_datve_tt3">Số điện thoại di động <span class="batcuoc_tt">(*)</span></p>
                <input type="number" class="input_hoten_tt" name="sdt_lienhe"  required />
            </div>
            <div class="col-md-8" style="padding-left: 0px">
                <p class="chuyenbay_datve_tt3">Email <span class="batcuoc_tt">(*)</span></p>
                <input type="email" class="input_hoten_tt" name="email_lienhe" required>
            </div>
        </div>

        <div class="nguoilon_1"><span class="chuyenbay_datve_tt2">&nbsp;</span></div>
        <div class="nguoilon_thongtin_tt">
            <div class="col-md-12" >
                <p class="chuyenbay_datve_tt3">Địa chỉ </p>
                <input type="text" class="input_hoten_tt" name="diachi_lienhe" />
            </div>
        </div>
        <div class="nguoilon_1"><span class="chuyenbay_datve_tt2">&nbsp;</span></div>
        <div class="nguoilon_thongtin_tt">
            <div class="col-md-12" >
                <p class="chuyenbay_datve_tt3">Yêu cầu </p>
                <textarea name="yeucau_lienhe"  class="input_hoten_tt"></textarea>
            </div>
        </div>
        <div class="nguoilon_1"><span class="chuyenbay_datve_tt2">&nbsp;</span></div>
        <div class="nguoilon_thongtin_tt">
            <div class="col-md-12" >
                <input type="checkbox" name="xuathoadon" id="xuathoadon"> Tôi muốn xuất hóa đơn
            </div>
        </div>
        <div class="hienhoadon">
            <div class="nguoilon_1"><span class="chuyenbay_datve_tt2">&nbsp;</span></div>
            <div  class="nguoilon_thongtin_tt">
                <div class="col-md-12 " >
                    <div class="chitiet_hoadon_tt">
                        <p class="chitiet_p_tt" >CHI TIẾT HÓA ĐƠN</p>
                        <p>
                            Qúy khách có nhu cầu lấy hóa đơn giá trị gia tăng phải yêu cầu với phía Tourcoach trong vòng 7 ngày kể từ thời điểm thanh toán đơn hàng.</br>
                            Quý khách vui lòng nhập tiếng Việt có dấu để việc xuất hóa đơn tránh bị sai xót.
                        </p>
                        <div class="nguoilon_thongtin_tt" style="width: 100%">
                            <div class="col-md-4" style="padding-left: 0px" >
                                <p class="chuyenbay_datve_tt3">Mã số thuế<span class="batcuoc_tt">(*)</span></p>
                                <input type="text" class="input_hoten_tt" >
                            </div>

                            <div class="col-md-8" style="padding-left: 0px">
                                <p class="chuyenbay_datve_tt3">Tên công ty <span class="batcuoc_tt">(*)</span></p>
                                <input type="text" class="input_hoten_tt" >
                            </div>

                        </div>
                        <div class="nguoilon_thongtin_tt" style="width: 100%">
                            <div class="col-md-12" style="padding-left: 0px">
                                <p class="chuyenbay_datve_tt3">Tên công ty <span class="batcuoc_tt">(*)</span></p>
                                <input type="text" class="input_hoten_tt" >
                            </div>
                        </div>
                        <div class="nguoilon_thongtin_tt" style="width: 100%">
                            <div class="col-md-12" style="padding-left: 0px">
                                <p class="chuyenbay_datve_tt3">Địa chỉ nhận hóa đơn</p>
                                <input type="text" class="input_hoten_tt" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="tieude_datve_tt">
    <div class="tieude_datve_tt_icon3"></div>
    <span class="thongtin_tt_icon">CHỌN HÌNH THỨC THANH TOÁN</span>
</div>
<div class="noidung_tt_datve" style="margin-bottom: 20px">
    <ul class="nav nav-tabs  tab_datve" role="tablist">
        <li style="padding-left: 0px" role="presentation" class="active">
            <a href="#tab-onepay" aria-controls="tab-onepay" role="tab" data-toggle="tab">THANH TOÁN QUA CÁC CỔNG THANH TOÁN ĐIỆN TỬ</a>
        </li>
        <li role="presentation">
            <a href="#tab-office" aria-controls="tab-office" role="tab" data-toggle="tab">THANH TOÁN BẰNG TIỀN MẶT TẠI VP TOURCOACH</a>
        </li>
        <li role="presentation">
            <a href="#tab-home" aria-controls="tab-home" role="tab" data-toggle="tab">THANH TOÁN TẠI NHÀ (+30.000VNĐ)</a>
        </li>
        <li style="padding-right: 0px" role="presentation">
            <a href="#tab-bank" aria-controls="tab-bank" role="tab" data-toggle="tab">THANH TOÁN CHUYỂN KHOẢN</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active tab_noidung_tt" id="tab-onepay">
            <p style="margin-bottom: 20px">Qúy khách có thể thanh toán ngay (trực tuyến) thông qua cổng OnePay, Bảo Kim, Ngân Lượng, 123Pay, SenPay</p>
            <div class="col-md-6" style="padding-left: 0px">
                <p class="chuyenbay_datve_tt3">THẺ GHI NỢ NỘI ĐỊA</p>
                <div class="">
                    <img src="{SITE-NAME}//view/default/theme/images/thanh-toan-noi-dia.jpg" alt="" />
                </div>
                <div style="text-align: center; margin-top: 20px;">
                    <input id="submit-onepay-noidia" name="onepay-noidia" type="submit" class="nut_xanh_tt" value="Chọn hình thức thanh toán này">
                </div>
            </div>
            <div class="col-md-6" style="border-left: 1px solid #e6e6e6;">
                <p class="chuyenbay_datve_tt3">THẺ THANH TOÁN QUỐC TẾ (VISA, MASTERCARD, JCB)</p>
                <div class="">
                    <img src="{SITE-NAME}//view/default/theme/images/thanh-toan-quoc-te.jpg" alt="" />
                </div>
                <div style="text-align: center; margin-top: 20px;">
                    <input name="onepay-quocte" type="submit" class="nut_xanh_tt" value="Chọn hình thức thanh toán này">
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane tab_noidung_tt" id="tab-office">
            <p style="margin-bottom: 20px">Sau khi đặt hàng thành công, Quý khách vui lòng qua văn phòng Tourcoach để thanh toán và nhận vé. Chấp nhận tiền mặt hoặc cả thẻ tại văn phòng.</p>
            <div class="col-md-12" style="padding-left: 0px">
                <p class="chuyenbay_datve_tt3">CÔNG TY TNHH DỊCH VỤ - VẬN TẢI VÀ LỮ HÀNH QUỐC TÊ COACH</p>
                {vanphong}
                <div style="text-align: center">
                    <input name="thanh-toan-vanphong" type="submit" class="nut_xanh_tt" value="Chọn hình thức thanh toán này">
                </div>
            </div>

        </div>
        <div role="tabpanel" class="tab-pane tab_noidung_tt" id="tab-home">
            <p style="margin-bottom: 20px">Với hình thức này, quý khách sẽ mất phí giao vé là 30,000 vnđ. Quý khách vui lòng điền đầy đủ thông tin địa chỉ để nhân viên Tourcoach Giao é và thu tiền</p>
            <div class="col-md-12" style="padding-left: 0px">
                <p class="batcuoc_tt">Lưu ý: Hình thức thanh toán này chỉ áp dụng cho các địa chỉ tại khu vực nội thành Hà Nội</p>
                <div class="thongtin_vanchuyen_tt">
                    <div class="nguoilon_thongtin_tt" style="width: 100%">
                        <div class="col-md-6" style="padding-left: 0px; padding-right: 5px" >
                            <p class="chuyenbay_datve_tt3">Họ và tên<span class="batcuoc_tt">(*)</span></p>
                            <input type="text" class="input_hoten_tt" name="hoten-tainha" required disabled />
                        </div>
                        <div class="col-md-6" style="padding-right: 0px; padding-left: 5px">
                            <p class="chuyenbay_datve_tt3">Số điện thoại <span class="batcuoc_tt">(*)</span></p>
                            <input type="text" class="input_hoten_tt" name="sdt-tainha" required disabled />
                        </div>
                        <div class="col-md-6" style="padding-left: 0px; margin-top: 10px; padding-right: 5px" >
                            <p class="chuyenbay_datve_tt3">Địa chỉ<span class="batcuoc_tt">(*)</span></p>
                            <input type="text" class="input_hoten_tt" name="diachi-tainha" required disabled />
                        </div>
                        <div class="col-md-6" style="padding-right: 0px; margin-top: 10px;padding-left: 5px ">
                            <p class="chuyenbay_datve_tt3">Thành phố <span class="batcuoc_tt">(*)</span></p>
                            <input type="text" class="input_hoten_tt" name="thanhpho-tainha" required disabled />
                        </div>
                        <div class="col-md-12" style="text-align: right; padding-top: 20px; padding-right: 0px">
                            <input name="thanh-toan-tainha" type="submit" class="nut_xanh_tt" value="Chọn hình thức thanh toán này">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane tab_noidung_tt" id="tab-bank">
            <p style="margin-bottom: 20px">Quý khách có thể thanh toán cho chúng tôi bằng cách chuyển khoản trực tiếp tại ngân hàng qua thẻ atm hoặc qua interner banhking.</p>
            <p >Vui lòng chọn tài khoản ngân hàng mà Quý khách có thể chuyển khoản một cách tiện lợi nhất</p>
            <p  class="chuyenbay_datve_tt2">Lưu ý khi chuyển khoản:</p>
            <p >Khi chuyển khoản, quý khách vui lòng nhập nội dung chuyển khoản là:</p>
            <p  class="chuyenbay_datve_tt2">"MDH 530172, Nguyen Van A, Noi dung thanh toan"</p>
            <p >VD:</p>
            <p >"MDH 530172, Nguyen Van A, TT vé máy bay"</p>
            <p >"MDH 530172, Nguyen Van A, TT thêm hành khách ký gửi"</p>
            <p >"MDH 530172, Nguyen Van A, TT phí đổi tên, dịch vụ khác"</p>
            <p >Để việc thanh toán được chính xác. Xin cảm ơn quý khách!</p>
           {nganhang}
            <div class="col-md-12" style="text-align: right; padding-top: 20px; padding-right: 0px">
                <input name="thanh-toan-nganhang" type="submit" class="nut_xanh_tt" value="Chọn hình thức thanh toán này">
            </div>
        </div>
    </div>
</div>
</form>
</div>
</div>

<div style="padding-right: 0px" class="right_sidebar col-md-3-right col-sm-3 col-xs-12">
    {chi_tiet_ve}
    <div class="fb-page" data-href="https://www.facebook.com/facebook" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div></div>
</div>

