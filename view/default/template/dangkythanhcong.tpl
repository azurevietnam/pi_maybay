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
    <div style="margin-top: 20px" class="main-content">
        <div class="lien-he box">
            <h2 class="title">{Name_dm}</h2>
            <div class="form-dang-ky-thanh-cong">
                <h3>{name_tt8}</h3>
                <P>{quydanh_tt} <a href="mailto:{Email_bdk}">{Email_bdk}</a></P>
                <p>{hoten_tt} <span>{pass_bdk}</span></p>
            </div>
        </div>
    </div>

