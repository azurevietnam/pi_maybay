<div style="padding-right: 0px" class="right_sidebar col-md-3-right col-sm-3 col-xs-12">
    <div class="tieude_tt">
        <h3>{datemaybay_td}</h3>
    </div>
    <div class=" noidung_tk_tt col-md-12">
        <form style="margin: 0px" class="form input_tt" action="{SITE-NAME}/tim-kiem-chuyen-bay/" method="post">
        <div class="checkbox_right_tt">
            <input type="radio" name="RoundTrip" value="true" id="ve-khu-hoi" checked />
            <label style="margin-right:16px " for="ve-khu-hoi"><span></span>{vekhuhoi_td}</label>
            <input type="radio" name="RoundTrip" value="false" id="ve-mot-chieu" />
            <label for="ve-mot-chieu"><span></span>{vemotchieu_td}</label>
        </div>
            <div class="chon-dia-diem chon-dia-diem_tt ">
                <p>{diemdi_td}</p>
                <script>
                    $(document).ready(function () {
                        $(".diem_di_right").click(function () {

                            $('#list-chieu-di').addClass('right_chuyenbay');
                        })
                        $(".chieu-ve_right").click(function () {

                            $('#list-chieu-ve').addClass('right_chuyenbay');
                        })
                    });
                </script>
                <input type="text" class="chuyen-bay chieu-di diem_di_right" id="chieu-di" value="Hà Nội" name="TFromPlace"/>
                <input id="hide-chieu-di" type="hidden" name="FromPlace" value="HAN"/>
                <p>{diemden_td}</p>
                <input type="text" class="chuyen-bay chieu-ve chieu-ve_right" id="chieu-ve" value="Hồ Chí Minh" name="TToPlace"/>
                <input id="hide-chieu-ve" type="hidden" name="ToPlace" value="SGN"/>
            </div>
            <div class=" row-no-padding chon-ngay_tt">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <p>{ngaydi_td}</p>
                    <input type="text" class="chuyen-bay" id="ngay-di" value="{three_day_right}" name="DepartDate"/>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <p>{ngayve_td}</p>
                    <input type="text" class="chuyen-bay" id="ngay-ve" value="{six_day_right}" name="ReturnDate"/>
                </div>
            </div>
            <div class=" row-no-padding ">
                <div class="col-md-4 col-sm-4 col-xs-4">
                    <p>{nguoilon_td}</p>
                    <input type="number" id="nguoi-lon" value="1" name="adult"/>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4">
                    <p>{treem_td}</p>
                    <input type="number" id="tre-em" value="0" name="child"/>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4">
                    <p>{sosinh_td}</p>
                    <input type="number" id="so-sinh" value="0" name="infant"/>
                </div>
            </div>
            <div class=" row-no-padding nut_tim_tt ">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <p><input style="" type="submit" value="{timchuyenbay_td}" name="bntTimKiem"/></p>
                    <input id="hide-noi-dia" type="hidden" name="noi-dia" value="true"/>
                </div>

            </div>

        </form>
    </div>
    <div class="  ">
        <div class="col-md-12 col-sm-12 col-xs-12 icon_bangia_tt" style="padding-left: 79px;">
            <a href="">{camket_td}</a>
        </div>

    </div>

    <div class=" noidung_tk_tt2 col-md-12">
        <h4>
           {hotrodatve_td}
        </h4>
        <p>{goichungtoi_td}</p>
        <span class="hotro_tt">043 - 2222 - 143</span>

        <p>Email: <a href="mailto:tourcoach2013@gmail.com">tourcoach2013@gmail.com</a></p>
        <ul>
           {hotro_right}
        </ul>
    </div>
	<div class="fb-page" data-href="https://www.facebook.com/facebook" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div></div>
</div>
