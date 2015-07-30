<div class=" top-page top-page-detail_tt">
    <div class="container">
        <div class=" col-md-12 col-sm-12 col-xs-12 duongdan_tt">
            {tieude}
        </div>
        <div class="book-ticket col-md-12 col-sm-12 col-xs-12" style="width: 100%;  background:  #F5F5F5; border-radius: 5px">

            <div class="fields" style="border-bottom: 1px dashed  #9A9A9A;border-top: none; padding-top: 10px; padding-bottom: 10px; margin-bottom: 10px; padding-left: 0px; padding-right:0px">
                <input type="radio" name="RoundTrip" value="true" id="ve-khu-hoi" checked />
                <label for="ve-khu-hoi"><span></span>{vekhuhoi_td}</label>
                <input type="radio" name="RoundTrip" value="false" id="ve-mot-chieu" />
                <label for="ve-mot-chieu"><span></span>{vemotchieu_td}</label>
            </div>
            <form style="width: 100% !important;max-width: 1188px; margin-left:10px" class="form" action="{SITE-NAME}/tim-kiem-chuyen-bay/" method="post">
                <div class="row row-padding-10">
                    <div class="col-md-2 col-sm-12 chon-dia-diem">
                        <p>{diemdi_td}</p>
                        <input type="text" class="chuyen-bay chieu-di" id="chieu-di" value="Hà Nội" name="TFromPlace" />
                        <input id="hide-chieu-di" type="hidden" name="FromPlace" value="HAN"/>
                    </div>
                    <div class="col-md-2 col-sm-12">
                        <p>{diemden_td}</p>
                        <input type="text" class="chuyen-bay chieu-ve" id="chieu-ve" value="Hồ Chí Minh" name="TToPlace" />
                        <input id="hide-chieu-ve" type="hidden" name="ToPlace" value="SGN"/>
                    </div>
                    <div  class="col-md-2-2 col-sm-12 date ngay">
                        <div class="row row-padding-10">
                            <div class="col-md-6 col-sm-12">
                                <p>{ngaydi_td}</p>
                                <input type="text" class="chuyen-bay" id="ngay-di" value="{three_day}" name="DepartDate" />
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <p>{ngayve_td}</p>
                                <input type="text" class="chuyen-bay" id="ngay-ve" value="{six_day}" name="ReturnDate" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2-1 col-sm-12 ">
                        <p>{nguoilon_td}</p>
                        <div>
                            <a class="sub" href="#">-</a>
                            <input type="text" class="nguoi-lon" id="nguoi-lon" value="1" name="adult" />
                            <a class="sum" href="#">+</a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-md-2-1 col-sm-12">
                        <p>{treem_td}</p>
                        <div>
                            <a class="sub" href="#">-</a>
                            <input type="text" class="tre-em" id="tre-em" value="0" name="child" />
                            <a class="sum" href="#">+</a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-md-2-1 col-sm-12">
                        <p>{sosinh_td}</p>
                        <div>
                            <a class="sub" href="#">-</a>
                            <input type="text" class="so-sinh" id="so-sinh" value="0" name="infant" />
                            <a class="sum" href="#">+</a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-12 tim-kiem_tt  ">
                        <p><input style="" type="submit" value="{timchuyenbay_td}" /></p>
                    </div>

                </div>
                <div class="row row-padding-10">

                </div>
            </form>
        </div>
    </div>
</div>
</header>
<section class="content-area container">
    <div class="main-content">
        <div style="margin-top: 20px" class="lien-he box">
            <h2 class="title">{Name_dm}</h2>
            <div class="contact-form form">
                <form action="" method="post">


                <h3>{name_tt8}</h3>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="quy-danh">
                            <p>{quydanh_tt}</p>
                            <label>
                                <select name="QuyDanh">
                                   {qd_tt}
                                </select>
                            </label>
                        </div>
                        <div class="full-name">
                            <p>{hoten_tt} <span>(*)</span></p>
                            <input type="text" value="{Name_user}" name="Name_us" placeholder="Nguyễn Văn A" />
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="email">
                            <p>{mail_tt} <span>(*)</span></p>
                            <input type="email" value="{Email_user}" class="dienthoai_us" name="Email_us" placeholder="nguyenvana@gmail.com" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="phone">
                            <p>{mk_tt} <span>(*)</span></p>
                            <input type="password" value="" name="MatKhau1" placeholder="123456789" />
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="address">
                            <p>{mk2_tt} <span>(*)</span></p>
                            <input type="password" value="" name="MatKhau2" placeholder="123456789" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="phone">
                            <p>{dt_tt} <span>(*)</span></p>
                            <input type="number" class="dienthoai_us" name="Phone_us" value="{DienThoai_user}" placeholder="0975356389" />
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="address">
                            <p>{dc_tt} <span>(*)</span></p>
                            <input type="text" value="{Address_user}" name="Address_us" placeholder="B44 Nguyễn Thị Định, Trung Hòa - Nhân Chính, Hà Nội" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12 options">
                        <div class="agree">
                            <input type="checkbox" id="agree" name="dieukhoan" />
                            <label for="agree"><span></span>{dieukhoan}</label>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 dang-ky">
                        <input type="submit" class="register" name="dangkytv" value="{dk_tt}" />
                        <input type="submit" class="clear" name="xoatv" value="{ll_tt}" />
                        <div class="clearfix"></div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>

