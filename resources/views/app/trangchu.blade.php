@extends('app/template')
@section('content')

        <div class="wr_page">
            
    <!-- Box Search -->
    
<link href="Scripts/jquery-ui.css" rel="stylesheet" />
<!-- Box Search -->
<div class="search">
    
    <div class="search-tab">
        <div class="search-tab-content">
            <div class="tab-sell tab-active" id="divSell">
                <h1>bất động sản bán</h1>
            </div>
            <div class="tab-rent " id="divRent">
                <h2>bất động sản cho thuê</h2>
            </div>
             <div class="clear"></div>
        </div>
    </div>
    <div class="search-content">
        <div class="search-content-input">
            <input type="hidden" name="ctl00$ContentPlaceHolder1$BoxSearch1$hddcboType" id="hddcboType" value="38" />
            <input type="hidden" name="ctl00$ContentPlaceHolder1$BoxSearch1$hddcboCate" id="hddcboCate" value="-1" />
            <div class="input1" id="KeyDownEnterHome">
                <input name="ctl00$ContentPlaceHolder1$BoxSearch1$txtAutoComplete" type="text" id="txtAutoComplete" class="ui-autocomplete-input" placeholder="Nhập địa điểm, vd: The Manor" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true" />

            </div>
            <div class="input1 paddingleft0">
                <div class="option-item" id="cboCate">
                </div>
                <input type="hidden" name="ctl00$ContentPlaceHolder1$BoxSearch1$hddcboCity" id="hddcboCity" value="VN" />
                <div class="option-item" id="cboCity">
                </div>
                <input type="hidden" name="ctl00$ContentPlaceHolder1$BoxSearch1$hddcboDist" id="hddcboDist" value="-1" />
                <div class="option-item" id="cboDist">
                </div>
                <input type="hidden" name="ctl00$ContentPlaceHolder1$BoxSearch1$hddcboArea" id="hddcboArea" value="-1" />
                <div class="option-item " id="cboArea"></div>
                <input type="hidden" name="ctl00$ContentPlaceHolder1$BoxSearch1$hddcboPrice" id="hddcboPrice" value="-1" />
                <div class="option-item " id="cboPrice"></div>
                <input type="hidden" name="ctl00$ContentPlaceHolder1$BoxSearch1$hddcboWard" id="hddcboWard" value="-1" />
                <div class="option-item" id="cboWard" style="margin: 0 0px 0 0;"></div>


            </div>
            <div class="input1 paddingleft0">
                <input type="hidden" name="ctl00$ContentPlaceHolder1$BoxSearch1$hddcboStreet" id="hddcboStreet" value="-1" />
                <div class="option-item" id="cboStreet"></div>
                <input type="hidden" name="ctl00$ContentPlaceHolder1$BoxSearch1$hddcboRoom" id="hddcboRoom" value="-1" />
                <div class="option-item" id="cboRoom"></div>
                <input type="hidden" name="ctl00$ContentPlaceHolder1$BoxSearch1$hddcboDirection" id="hddcboDirection" value="-1" />
                <div class="option-item" id="cboDirection"></div>
                <input type="hidden" name="ctl00$ContentPlaceHolder1$BoxSearch1$hddcboProject" id="hddcboProject" value="-1" />
                <div class="option-item" id="cboProject"></div>
                <a id="ContentPlaceHolder1_BoxSearch1_lbtSearch" class="btnsearch" href="javascript:__doPostBack(&#39;ctl00$ContentPlaceHolder1$BoxSearch1$lbtSearch&#39;,&#39;&#39;)">
                        <img src="Images/search.png" />
                </a>
            </div>

        </div>
    </div>
    <div class="clear"></div>
</div>
<!-- End Box Search -->
<script src="Scripts/BoxSearch.min.js?v=20150922" type="text/javascript"></script>
<script type="text/javascript">
    $(function () {
        var cnt = 0;
        $("#KeyDownEnterHome").keyup(function (event) {
            if (event.keyCode == 13 && cnt > 0) {
                cnt = 0;
                window.__doPostBack('ctl00$ContentPlaceHolder1$BoxSearch1$lbtSearch', '');
            }
            else if (event.keyCode == 13) {
                cnt++;
            }
        });
    });
</script>

    <div class="clear"></div>
    <!-- End Box Search -->
    <!-- Index Page -->
    <div class="index-page">
        <div class="content">
            
<div class="news-default fl">
    
    <div class="news-default-left">
        <a href="/tin-thi-truong/khu-dong-sai-gon-hua-hen-chu-ky-bds-soi-dong-ar24763.htm" title="Khu Đông Sài Gòn hứa hẹn chu kỳ BĐS sôi động">
            <img src="http://img.dothi.net/crop/318x228//2015/09/22/Z9BcC3fq/KDPT-57ac.jpg" alt="Khu Đông Sài Gòn hứa hẹn chu kỳ BĐS sôi động" />
        </a>
        <h2>
            <a href="/tin-thi-truong/khu-dong-sai-gon-hua-hen-chu-ky-bds-soi-dong-ar24763.htm" title="Khu Đông Sài Gòn hứa hẹn chu kỳ BĐS sôi động">Khu Đông Sài Gòn hứa hẹn chu kỳ BĐS sôi động</a>
        </h2>
       
    </div>
    
            <div class="news-default-right">
                <ul>
        
            <li class='first'>
                <h3>
                    <a href="/tin-thi-truong/tphcm-nguy-co-thoi-gia-dat-nen-quan-9-ar24766.htm" title="Tp.HCM: Nguy cơ thổi giá đất nền quận 9">
                        Tp.HCM: Nguy cơ thổi giá đất nền quận 9
                    </a>
                </h3>
            </li>
        
            <li >
                <h3>
                    <a href="/tin-thi-truong/tai-sao-thanh-pho-moi-binh-duong-roi-vao-canh-cho-chieu-ar24760.htm" title="Tại sao Thành phố mới Bình Dương rơi vào cảnh "chợ chiều"?">
                        Tại sao Thành phố mới Bình Dương rơi vào cảnh "chợ chiều"?
                    </a>
                </h3>
            </li>
        
            <li >
                <h3>
                    <a href="/tin-thi-truong/gioi-nha-giau-thu-do-chuong-bat-dong-san-tp-hcm-ar24756.htm" title="Giới nhà giàu Thủ đô chuộng bất động sản Tp. HCM">
                        Giới nhà giàu Thủ đô chuộng bất động sản Tp. HCM
                    </a>
                </h3>
            </li>
        
            <li >
                <h3>
                    <a href="/chinh-sach-quy-hoach/tp-hcm-kien-nghi-cap-giay-chung-nhan-du-an-bds-the-chap-ngan-hang-ar24753.htm" title="Tp. HCM: Kiến nghị cấp giấy chứng nhận dự án BĐS thế chấp ngân hàng">
                        Tp. HCM: Kiến nghị cấp giấy chứng nhận dự án BĐS thế chấp ...
                    </a>
                </h3>
            </li>
        
            <li >
                <h3>
                    <a href="/chinh-sach-quy-hoach/ha-noi-dieu-chinh-gia-dat-boi-thuong-tai-huyen-dong-anh-ar24749.htm" title="Hà Nội: Điều chỉnh giá đất bồi thường tại huyện Đông Anh">
                        Hà Nội: Điều chỉnh giá đất bồi thường tại huyện Đông Anh
                    </a>
                </h3>
            </li>
        
            </ul>
                </div>
        
    <div class="clear"></div>
</div>


        <div class="most-read">
            <div class="title">
                <h3>Tin xem nhiều</h3>
            </div>
            <ul>
    
        <li class='first'>
            <h4><a href="/tin-thi-truong/chuyen-dang-sau-con-sot-dat-nen-long-an-ar24758.htm" title="Chuyện "đằng sau" cơn sốt đất nền Long An">Chuyện "đằng sau" cơn sốt đất nền Long An</a></h4>
        </li>
    
        <li >
            <h4><a href="/chinh-sach-quy-hoach/tphcm-tim-huong-giai-quyet-cap-giay-chung-nhan-cho-nguoi-mua-nha-ar24738.htm" title="Tp.HCM: Tìm hướng giải quyết cấp giấy chứng nhận cho người mua nhà">Tp.HCM: Tìm hướng giải quyết cấp giấy chứng nhận cho người mua nhà</a></h4>
        </li>
    
        <li >
            <h4><a href="/tin-thi-truong/tp-hcm-kiem-chuc-trieu-dong-moi-thang-nho-san-cao-oc-cho-thue-ar24730.htm" title="Tp. HCM: Kiếm chục triệu đồng mỗi tháng nhờ săn cao ốc cho thuê">Tp. HCM: Kiếm chục triệu đồng mỗi tháng nhờ săn cao ốc cho thuê</a></h4>
        </li>
    
        <li >
            <h4><a href="/bds-the-gioi/trung-quoc-gia-nha-dat-tang-4-thang-lien-tiep-ar24729.htm" title="Trung Quốc: Giá nhà đất tăng 4 tháng liên tiếp">Trung Quốc: Giá nhà đất tăng 4 tháng liên tiếp</a></h4>
        </li>
    
        <li >
            <h4><a href="/tin-thi-truong/thi-truong-bds-viet-nam-huong-loi-khi-fed-khong-tang-lai-suat-ar24728.htm" title="Thị trường BĐS Việt Nam hưởng lợi khi FED không tăng lãi suất">Thị trường BĐS Việt Nam hưởng lợi khi FED không tăng lãi suất</a></h4>
        </li>
    
        </ul> 
    </div>
    

            <div class="clear"></div>
            <!-- Content Right -->
            <div class="content-right">
                
                
                <div id="ContentPlaceHolder1_ProjectHome_divProject" class="project-hl">
    <div class="hl-title">
        <h3><a href="/du-an-bat-dong-san.htm" title="Dự án nổi bật">Dự án nổi bật</a></h3>
    </div>
    <div class="wr_project">
        <div class="wr_slide">
            <div class="slideproject">
                <div id="sliderA" class="slider">
                    
                            <div>
                                <a href="/khu-can-ho-tay-ho/d-le-roi-soleil-quang-an-pj2187.htm" title="D’. Le Roi Soleil - Quảng An">
                                    <img src="http://dothi.net//dothi_svr_1_crop_310_204_3.20150626170803-a81c-JGcIp0rf.jpg" alt="D’. Le Roi Soleil - Quảng An" />
                                </a>
                                <h4><a href="/khu-can-ho-tay-ho/d-le-roi-soleil-quang-an-pj2187.htm" title="D’. Le Roi Soleil - Quảng An">D’. Le Roi Soleil - Quảng An</a></h4>
                                <p>Đường Xuân Diệu, Phường Quảng An, Tây Hồ, Hà Nội</p>
                            </div>
                        
                            <div>
                                <a href="/khu-can-ho-thanh-tri/eco-green-city-pj2170.htm" title="Eco Green City">
                                    <img src="http://dothi.net//dothi_svr_1_crop_310_204_3.20150605104017-bf05-JGcIp0rf.jpg" alt="Eco Green City" />
                                </a>
                                <h4><a href="/khu-can-ho-thanh-tri/eco-green-city-pj2170.htm" title="Eco Green City">Eco Green City</a></h4>
                                <p>Xã Tân Triều, Thanh Trì, Hà Nội</p>
                            </div>
                        
                            <div>
                                <a href="/khu-phuc-hop-ha-dong/goldsilk-complex-pj2162.htm" title="Goldsilk Complex">
                                    <img src="http://dothi.net//dothi_svr_1_crop_310_204_3.20150521142803-02a3-JGcIp0rf.jpg" alt="Goldsilk Complex" />
                                </a>
                                <h4><a href="/khu-phuc-hop-ha-dong/goldsilk-complex-pj2162.htm" title="Goldsilk Complex">Goldsilk Complex</a></h4>
                                <p>430 Cầu Am, Phường Vạn Phúc, Hà Đông, Hà Nội</p>
                            </div>
                        
                            <div>
                                <a href="/khu-can-ho-quan-9/the-art-pj2158.htm" title="The Art">
                                    <img src="http://dothi.net//dothi_svr_1_crop_310_204_3.20150526085847-1c29-JGcIp0rf.jpg" alt="The Art" />
                                </a>
                                <h4><a href="/khu-can-ho-quan-9/the-art-pj2158.htm" title="The Art">The Art</a></h4>
                                <p>523A Đỗ Xuân Hợp, Phường Phước Long B, Quận 9, Hồ Chí Minh</p>
                            </div>
                        
                            <div>
                                <a href="/khu-can-ho-thanh-xuan/c3-tower-golden-palace-pj756.htm" title="C3 Tower - Golden Palace">
                                    <img src="http://dothi.net//dothi_svr_1_crop_310_204_113950.jpg" alt="C3 Tower - Golden Palace" />
                                </a>
                                <h4><a href="/khu-can-ho-thanh-xuan/c3-tower-golden-palace-pj756.htm" title="C3 Tower - Golden Palace">C3 Tower - Golden Palace</a></h4>
                                <p>Lô đất C3, Khu đô thị Trung Hòa Nhân Chính,  Lê Văn Lương, Phường Nhân Chính, Thanh Xuân, Hà Nội</p>
                            </div>
                        
                    
                </div>
            </div>
        </div>
        <div class="thumbSlide">
            <div class="listproject">
                
                        <div rel="0" class="act item first">
                            <a class="tt_project" href="/khu-can-ho-tay-ho/d-le-roi-soleil-quang-an-pj2187.htm" title="D’. Le Roi Soleil - Quảng An">
                                <img class="avatar" src="http://dothi.net//dothi_svr_1_crop_104_69_3.20150626170803-a81c-JGcIp0rf.jpg" alt="D’. Le Roi Soleil - Quảng An" />
                            </a>
                            <div class="info_project">
                                <a href="/khu-can-ho-tay-ho/d-le-roi-soleil-quang-an-pj2187.htm" title="D’. Le Roi Soleil - Quảng An">D’. Le Roi Soleil - Quảng An</a>
                                <p>Đường Xuân Diệu, Phường Quảng An, Tây Hồ, Hà Nội</p>
                            </div>
                        </div>
                    
                        <div rel="1" class="item">
                            <a class="tt_project" href="/khu-can-ho-thanh-tri/eco-green-city-pj2170.htm" title="Eco Green City">
                                <img class="avatar" src="http://dothi.net//dothi_svr_1_crop_104_69_3.20150605104017-bf05-JGcIp0rf.jpg" alt="Eco Green City" />
                            </a>
                            <div class="info_project">
                                <a href="/khu-can-ho-thanh-tri/eco-green-city-pj2170.htm" title="Eco Green City">Eco Green City</a>
                                <p>Xã Tân Triều, Thanh Trì, Hà Nội</p>
                            </div>
                        </div>
                    
                        <div rel="2" class="item">
                            <a class="tt_project" href="/khu-phuc-hop-ha-dong/goldsilk-complex-pj2162.htm" title="Goldsilk Complex">
                                <img class="avatar" src="http://dothi.net//dothi_svr_1_crop_104_69_3.20150521142803-02a3-JGcIp0rf.jpg" alt="Goldsilk Complex" />
                            </a>
                            <div class="info_project">
                                <a href="/khu-phuc-hop-ha-dong/goldsilk-complex-pj2162.htm" title="Goldsilk Complex">Goldsilk Complex</a>
                                <p>430 Cầu Am, Phường Vạn Phúc, Hà Đông, Hà Nội</p>
                            </div>
                        </div>
                    
                        <div rel="3" class="item">
                            <a class="tt_project" href="/khu-can-ho-quan-9/the-art-pj2158.htm" title="The Art">
                                <img class="avatar" src="http://dothi.net//dothi_svr_1_crop_104_69_3.20150526085847-1c29-JGcIp0rf.jpg" alt="The Art" />
                            </a>
                            <div class="info_project">
                                <a href="/khu-can-ho-quan-9/the-art-pj2158.htm" title="The Art">The Art</a>
                                <p>523A Đỗ Xuân Hợp, Phường Phước Long B, Quận 9, Hồ Chí Minh</p>
                            </div>
                        </div>
                    
                        <div rel="4" class="item">
                            <a class="tt_project" href="/khu-can-ho-thanh-xuan/c3-tower-golden-palace-pj756.htm" title="C3 Tower - Golden Palace">
                                <img class="avatar" src="http://dothi.net//dothi_svr_1_crop_104_69_113950.jpg" alt="C3 Tower - Golden Palace" />
                            </a>
                            <div class="info_project">
                                <a href="/khu-can-ho-thanh-xuan/c3-tower-golden-palace-pj756.htm" title="C3 Tower - Golden Palace">C3 Tower - Golden Palace</a>
                                <p>Lô đất C3, Khu đô thị Trung Hòa Nhân Chính,  Lê Văn Lương, Phường Nhân Chính, Thanh Xuân, Hà Nội</p>
                            </div>
                        </div>
                    
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <script>
        $(function () {
            $("#sliderA").excoloSlider();
        });
    </script>

</div>

                
                <!--Lien ket noi bat-->
                

<div class="product-count">
    <div class="pc-title">
        <div class="pc-icon">
            <img src="/Styles/Images/icon-foruser.png" />
        </div>
        <h3>Liên kết nổi bật</h3>
    </div>
    <div class="pc-content">
        <ul id="ulBoxHotHome">
            <li>
                <h3><a href="/ban-dat-nen-du-an-phu-nhuan.htm">Bán đất nền Quận Phú Nhuận</a></h3>
            </li>
            <li>
                <h3><a href="/ban-dat-nen-du-an-quan-9.htm">Bán đất nền Quận 9</a></h3>
            </li>
            <li>
                <h3><a href="/ban-dat-nen-du-an-phuong-an-phu-dong-1.htm">Bán đất nền phường An Phú Đông </a></h3>
            </li>

            <li>
                <h3><a href="/ban-dat-nen-du-an-phu-quoc-kg.htm">Bán Đất nền Phú Quốc</a></h3>
            </li>

            <li>
                <h3><a href="/ban-can-ho-chung-cu-jamona-city.htm">Bán chung cư Jamona Apartment </a></h3>
            </li>

            <li>
                <h3><a href="/ban-dat-nen-du-an-binh-duong.htm">Bán đất nền Bình Dương</a></h3>
            </li>

            <li>
                <h3><a href="/ban-can-ho-chung-cu-bac-tu-liem.htm">Bán chung cư Quận Bắc Từ Liêm</a></h3>
            </li>

            <li>
                <h3><a href="/ban-dat-nen-du-an-ben-cat-bd.htm">Bán đất nền Huyện Bến Cát</a></h3>
            </li>

            <li>
                <h3><a href="/ban-nha-biet-thu-lien-ke-phuong-phu-huu-2.htm">Bán liền kề phường Phú Hữu</a></h3>
            </li>

            <li>
                <h3><a href="/ban-dat-nen-du-an-quan-2.htm">Bán đất nền Quận 2 </a></h3>
            </li>

            <li>
                <h3><a href="/ban-can-ho-chung-cu-binh-tan.htm">Bán chung cư quận Bình Tân</a></h3>
            </li>

            <li>
                <h3><a href="/ban-dat-nen-du-an-di-an-bd.htm">Bán đất nền Huyện Dĩ An</a></h3>
            </li>

            <li>
                <h3><a href="/ban-can-ho-chung-cu-ha-dong.htm">Bán chung cư Quận Hà Đông</a></h3>
            </li>

            <li>
                <h3><a href="/ban-can-ho-chung-cu-quan-7.htm">Bán chung cư quận 7</a></h3>
            </li>

            <li>
                <h3><a href="/ban-dat-nen-du-an-quan-12.htm">Bán đất nền Quận 12</a></h3>
            </li>

            <li>
                <h3><a href="/ban-dat-nen-du-an-thu-duc.htm">Bán đất nền Quận Thủ Đức</a></h3>
            </li>

            <li>
                <h3><a href="/ban-can-ho-chung-cu-nam-tu-liem.htm">Bán chung cư Quận Nam Từ Liêm</a></h3>
            </li>
            <li>
                <h3><a href="/ban-dat-nen-du-an-tan-uyen-bd.htm">Bán đất nền Huyện Tân Uyên</a></h3>
            </li>
            <li style="display: none">
                <h3><a href="/ban-dat-nen-du-an-thuan-an-bd.htm">Bán đất nền Huyện Thuận An</a></h3>
            </li>
   
            <li style="display: none">
                <h3><a href="/ban-can-ho-chung-cu-hoang-mai.htm">Bán chung cư Quận Hoàng Mai</a></h3>
            </li>
            <li style="display: none">
                <h3><a href="/ban-can-ho-chung-cu-cau-giay.htm">Bán chung cư Quận Cầu Giấy</a></h3>
            </li>
            <li style="display: none">
                <h3><a href="/ban-can-ho-chung-cu-thanh-xuan.htm">Bán chung cư Quận Thanh Xuân</a></h3>
            </li>
            <li style="display: none">
                <h3><a href="/ban-dat-nen-du-an-phuong-tan-hung-thuan-1.htm">Bán đất nền phường Tân Hưng Thuận</a></h3>
            </li>
            <li style="display: none">
                <h3><a href="/ban-nha-rieng-phuong-nghia-tan-3.htm">Bán nhà Nghĩa Tân</a></h3>
            </li>
            <li style="display: none">
                <h3><a href="/ban-can-ho-chung-cu-hai-ba-trung.htm">Bán chung cư Quận Hai Bà Trưng</a></h3>
            </li>
            <li style="display: none">
                <h3><a href="/ban-can-ho-chung-cu-long-bien.htm">Bán chung cư Quận Long Biên</a></h3>
            </li>

        </ul>
        <div class="pc-extra" id="showBoxhotHome">
            <a href="javascript:showBoxHotHome();" rel="nofollow">
                <img src="Images/xemtatca.png" />
            </a>
        </div>
    </div>
</div>

                <!-- Utility -->
                
<div class="utility">
    <div class="utility-title">
        <h3>Tính năng hỗ trợ</h3>
    </div>
    <div class="utility-content">
        <ul>
            <li class="email"><a rel="nofollow" href="javascript:" id="UtilityRegisterEmail" class="fancybox.ajax">Nhận bđs qua email</a></li>
            <li class="lifengshui"><a  rel="nofollow" href="javascript:" id="UtilityFengShui" class="fancybox.ajax">Xem phong thủy theo tuổi</a></li>
            
            <li class="laixuat"><a  rel="nofollow" href="javascript:" id="UtilityInterest" class="fancybox.ajax">Tính lãi suất vay ngân hàng</a></li>
            
            <li class="vanban "><a  rel="nofollow" href="/van-ban-nganh-xay-dung.htm">Văn bản ngành xây dựng</a></li>
        </ul>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>


                
            </div>

            
            <!-- Content Left -->
            <div class="content-left">
                
                <div id="ContentPlaceHolder1_pnProduct">
	
<div class="for-user">
    <div class="title">
        <h3>tin rao dành cho bạn</h3>
    </div>
    <ul>
        
                <li>
                    <a id="ContentPlaceHolder1_ctl00_rptProductHome_hplAvatar_0" href="/ban-nha-rieng-duong-quoc-lo-3-xa-uy-no/chinh-chu-ban-gap-nha-cap-4-canh-quoc-lo-3-uy-no-dong-anh-gia-10trm2-lhcc-0985255568-pr3267833.htm"><img id="ContentPlaceHolder1_ctl00_rptProductHome_imgAvatar_0" title="Chính chủ bán gấp nhà cấp 4 cạnh quốc lộ 3, Uy Nỗ, Đông Anh giá 10tr/m2. LH: 0985255568" src="Images/no-photo170.png" alt="Chính chủ bán gấp nhà cấp 4 cạnh quốc lộ 3, Uy Nỗ, Đông Anh giá 10tr/m2. LH: 0985255568" /></a>
                    <div class="desc">
                        <h4>
                            <a class="vipdb" title="Chính chủ bán gấp nhà cấp 4 cạnh quốc lộ 3, Uy Nỗ, Đông Anh giá 10tr/m2. LH: 0985255568" href="/ban-nha-rieng-duong-quoc-lo-3-xa-uy-no/chinh-chu-ban-gap-nha-cap-4-canh-quoc-lo-3-uy-no-dong-anh-gia-10trm2-lhcc-0985255568-pr3267833.htm">Chính chủ bán gấp nhà cấp 4 cạnh quốc lộ 3, Uy Nỗ, Đông Anh giá 10tr/m2. LH: 0985255568</a></h4>
                        <div class="other" class='vipdb'>
                            <div class="price">
                                <label>Giá<span>:</span></label>
                                10 Triệu/m²
                            </div>
                            <div class="area">
                                <label>Diện tích<span>:</span></label>
                                48&nbsp;m&#178;
                            </div>
                            <div class="location">
                                <label>Vị trí<span>:</span></label>
                                Đông Anh - Hà Nội
                            </div>
                        </div>
                        <span class="date">
                            29/08/2015</span>
                    </div>
                </li>
            
                <li>
                    <a id="ContentPlaceHolder1_ctl00_rptProductHome_hplAvatar_1" href="/ban-nha-rieng-duong-van-tri-xa-van-noi/ban-nha-gan-cau-nhat-tan-80m2-x3-tang-o-to-vao-tan-nha-pr1009653.htm"><img id="ContentPlaceHolder1_ctl00_rptProductHome_imgAvatar_1" title="Bán nhà gần cầu Nhật Tân 60m2 x 3 tầng, ô tô vào tận nhà" src="http://dothi.net//dothi_svr_1_crop_170_115_1.20141210100424851.jpg" alt="Bán nhà gần cầu Nhật Tân 60m2 x 3 tầng, ô tô vào tận nhà" /></a>
                    <div class="desc">
                        <h4>
                            <a class="vip5" title="Bán nhà gần cầu Nhật Tân 60m2 x 3 tầng, ô tô vào tận nhà" href="/ban-nha-rieng-duong-van-tri-xa-van-noi/ban-nha-gan-cau-nhat-tan-80m2-x3-tang-o-to-vao-tan-nha-pr1009653.htm">Bán nhà gần cầu Nhật Tân 60m2 x 3 tầng, ô tô vào tận nhà</a></h4>
                        <div class="other" class='vip5'>
                            <div class="price">
                                <label>Giá<span>:</span></label>
                                Thỏa thuận
                            </div>
                            <div class="area">
                                <label>Diện tích<span>:</span></label>
                                60&nbsp;m&#178;
                            </div>
                            <div class="location">
                                <label>Vị trí<span>:</span></label>
                                Đông Anh - Hà Nội
                            </div>
                        </div>
                        <span class="date">
                            17/09/2015</span>
                    </div>
                </li>
            
                <li>
                    <a id="ContentPlaceHolder1_ctl00_rptProductHome_hplAvatar_2" href="/ban-nha-rieng-xa-hai-boi/ban-hoac-cho-thue-nha-so-do-chinh-chu-o-xom-1-co-dien-hai-boi-dong-anh-pr3390212.htm"><img id="ContentPlaceHolder1_ctl00_rptProductHome_imgAvatar_2" title="Bán hoặc cho thuê nhà sổ đỏ chính chủ ở Xóm 1, Cổ Điển, Hải Bối, Đông Anh" src="Images/no-photo170.png" alt="Bán hoặc cho thuê nhà sổ đỏ chính chủ ở Xóm 1, Cổ Điển, Hải Bối, Đông Anh" /></a>
                    <div class="desc">
                        <h4>
                            <a class="vip5" title="Bán hoặc cho thuê nhà sổ đỏ chính chủ ở Xóm 1, Cổ Điển, Hải Bối, Đông Anh" href="/ban-nha-rieng-xa-hai-boi/ban-hoac-cho-thue-nha-so-do-chinh-chu-o-xom-1-co-dien-hai-boi-dong-anh-pr3390212.htm">Bán hoặc cho thuê nhà sổ đỏ chính chủ ở Xóm 1, Cổ Điển, Hải Bối, Đông Anh</a></h4>
                        <div class="other" class='vip5'>
                            <div class="price">
                                <label>Giá<span>:</span></label>
                                1.1 Tỷ
                            </div>
                            <div class="area">
                                <label>Diện tích<span>:</span></label>
                                55&nbsp;m&#178;
                            </div>
                            <div class="location">
                                <label>Vị trí<span>:</span></label>
                                Đông Anh - Hà Nội
                            </div>
                        </div>
                        <span class="date">
                            16/09/2015</span>
                    </div>
                </li>
            
                <li>
                    <a id="ContentPlaceHolder1_ctl00_rptProductHome_hplAvatar_3" href="/ban-nha-rieng-xa-tien-duong/ban-nha-dat-chinh-chu-thon-trung-oai-xa-tien-duong-dong-anh-ha-noi-pr3389963.htm"><img id="ContentPlaceHolder1_ctl00_rptProductHome_imgAvatar_3" title="Bán nhà đất chính chủ Thôn Trung Oai, xã Tiên Dương, Đông Anh, Hà Nội" src="Images/no-photo170.png" alt="Bán nhà đất chính chủ Thôn Trung Oai, xã Tiên Dương, Đông Anh, Hà Nội" /></a>
                    <div class="desc">
                        <h4>
                            <a class="vip5" title="Bán nhà đất chính chủ Thôn Trung Oai, xã Tiên Dương, Đông Anh, Hà Nội" href="/ban-nha-rieng-xa-tien-duong/ban-nha-dat-chinh-chu-thon-trung-oai-xa-tien-duong-dong-anh-ha-noi-pr3389963.htm">Bán nhà đất chính chủ Thôn Trung Oai, xã Tiên Dương, Đông Anh, Hà Nội</a></h4>
                        <div class="other" class='vip5'>
                            <div class="price">
                                <label>Giá<span>:</span></label>
                                1.15 Tỷ
                            </div>
                            <div class="area">
                                <label>Diện tích<span>:</span></label>
                                60&nbsp;m&#178;
                            </div>
                            <div class="location">
                                <label>Vị trí<span>:</span></label>
                                Đông Anh - Hà Nội
                            </div>
                        </div>
                        <span class="date">
                            16/09/2015</span>
                    </div>
                </li>
            
                <li>
                    <a id="ContentPlaceHolder1_ctl00_rptProductHome_hplAvatar_4" href="/ban-nha-rieng-duong-vo-nguyen-giap-xa-vinh-ngoc-1/ban-nha-rieng-tai-duong-vo-nguyen-giap-xa-vinh-ngoc-dong-anh-ha-noi-pr3370899.htm"><img id="ContentPlaceHolder1_ctl00_rptProductHome_imgAvatar_4" title="Bán nhà riêng tại đường Võ Nguyên Giáp, Xã Vĩnh Ngọc, Đông Anh, Hà Nội " src="http://img.dothi.net/crop/170x115/2015/09/11/20150911122931-77ad_wm.jpg" alt="Bán nhà riêng tại đường Võ Nguyên Giáp, Xã Vĩnh Ngọc, Đông Anh, Hà Nội " /></a>
                    <div class="desc">
                        <h4>
                            <a class="vip5" title="Bán nhà riêng tại đường Võ Nguyên Giáp, Xã Vĩnh Ngọc, Đông Anh, Hà Nội " href="/ban-nha-rieng-duong-vo-nguyen-giap-xa-vinh-ngoc-1/ban-nha-rieng-tai-duong-vo-nguyen-giap-xa-vinh-ngoc-dong-anh-ha-noi-pr3370899.htm">Bán nhà riêng tại đường Võ Nguyên Giáp, Xã Vĩnh Ngọc, Đông Anh, Hà Nội </a></h4>
                        <div class="other" class='vip5'>
                            <div class="price">
                                <label>Giá<span>:</span></label>
                                2.28 Tỷ
                            </div>
                            <div class="area">
                                <label>Diện tích<span>:</span></label>
                                72.5&nbsp;m&#178;
                            </div>
                            <div class="location">
                                <label>Vị trí<span>:</span></label>
                                Đông Anh - Hà Nội
                            </div>
                        </div>
                        <span class="date">
                            11/09/2015</span>
                    </div>
                </li>
            
    </ul>

    <div class="extra">
        
        <a title="Xem thêm các tin rao nhà đất tương tự" href="/ban-nha-rieng-duong-quoc-lo-3-xa-uy-no.htm">&gt;&gt; Xem thêm các tin rao nhà đất tương tự</a>
    </div>
    <div class="extra-news">
        <div class="extra-news-l">
            Tin Nhà đất bán mới nhất:
                            <span>
                                <a href="/nha-dat-ban.htm" title="Trang 1">1</a>
                                <a rel="nofollow" href="/nha-dat-ban/p2.htm" title="Trang 2">2</a>
                                <a rel="nofollow" href="/nha-dat-ban/p3.htm" title="Trang 3">3</a>
                                <a rel="nofollow" href="/nha-dat-ban/p4.htm" title="Trang 4">4</a>
                                <a rel="nofollow" href="/nha-dat-ban/p5.htm" title="Trang 5">5</a>
                            </span>
        </div>
        <div class="extra-news-r">
            Tin Nhà đất cho thuê mới nhất:
                            <span>
                                <a href="/nha-dat-cho-thue.htm" title="Trang 1">1</a>
                                <a rel="nofollow" href="/nha-dat-cho-thue/p2.htm" title="Trang 2">2</a>
                                <a rel="nofollow" href="/nha-dat-cho-thue/p3.htm" title="Trang 3">3</a>
                                <a rel="nofollow" href="/nha-dat-cho-thue/p4.htm" title="Trang 4">4</a>
                                <a rel="nofollow" href="/nha-dat-cho-thue/p5.htm" title="Trang 5">5</a>
                            </span>
        </div>
    </div>
</div>

</div>
                <!-- Banner -->
                
                <div class="clear"></div>
                <div class="home_fengshui">
                    

<div class="fengshui">
    <div class="fengshui-title">
        <h3><a href="/phong-thuy.htm" title="Phong thủy">Phong thủy</a></h3>
    </div>
    <div class="list_news">
        
        <div class="news-hot">
            <a href="/phong-thuy/phong-thuy-phong-bep-cach-bo-tri-cua-so-ar24761.htm" title="Phong thủy phòng bếp: Cách bố trí cửa sổ">
                <img src="http://img.dothi.net/crop/310x204//2015/09/22/Z9BcC3fq/cuasobep-bad6.jpg" alt="Phong thủy phòng bếp: Cách bố trí cửa sổ">
            </a>
            <h4>
                <a href="/phong-thuy/phong-thuy-phong-bep-cach-bo-tri-cua-so-ar24761.htm" title="Phong thủy phòng bếp: Cách bố trí cửa sổ">Phong thủy phòng bếp: Cách bố trí cửa sổ</a>
            </h4>
        </div>
        
        <div class="list_top">
            <ul>
                
                        <li>
                            <a href="/phong-thuy/pham-hoa-xa-sat-khi-de-day-dien-long-thong-ar24736.htm" title="Phạm "Hỏa xà sát" khi để dây diện lòng thòng">Phạm "Hỏa xà sát" khi để dây diện lòng thòng</a>
                        </li>
                    
                        <li>
                            <a href="/phong-thuy/phong-an-hop-phong-thuy-ar24712.htm" title="Phòng ăn hợp phong thủy">Phòng ăn hợp phong thủy</a>
                        </li>
                    
                        <li>
                            <a href="/phong-thuy/dem-bac-cau-thang-trong-nha-de-tranh-lao-benh-tu-ar24681.htm" title="Đếm bậc cầu thang trong nhà để tránh "Lão, Bệnh, Tử"">Đếm bậc cầu thang trong nhà để tránh "Lão, Bệnh, Tử"</a>
                        </li>
                    
                        <li>
                            <a href="/phong-thuy/dat-phong-ngu-tren-be-nuoc-ngam-co-pham-phong-thuy-nha-o-khong-ar24677.htm" title="Đặt phòng ngủ trên bể nước ngầm có phạm phong thủy nhà ở không?">Đặt phòng ngủ trên bể nước ngầm có phạm phong thủy nhà ở không?</a>
                        </li>
                    
                        <li>
                            <a href="/phong-thuy/su-dung-guong-kinh-trong-phong-thuy-ar24660.htm" title="Sử dụng gương - kính trong phong thủy">Sử dụng gương - kính trong phong thủy</a>
                        </li>
                    
            </ul>
        </div>
        <div class="clear"></div>
    </div>
</div>

                </div>
                <div class="home_fengshui living_space">
                    
<div class="fengshui">
    <div class="living-title">
        <h3><a href="/khong-gian-song.htm" title="Không gian sống">Không gian sống</a></h3>
    </div>
    <div class="list_news">
        
        <div class="news-hot">
            <a href="/khong-gian-song/3-ngoi-nha-di-dong-co-thiet-ke-dep-la-ar24764.htm" title="3 ngôi nhà di động có thiết kế đẹp lạ">
                <img src="http://img.dothi.net/crop/310x204//2015/09/22/Z9BcC3fq/nhadidongdep1-d92e.jpg" alt="3 ngôi nhà di động có thiết kế đẹp lạ">
            </a>
            <h4>
                <a href="/khong-gian-song/3-ngoi-nha-di-dong-co-thiet-ke-dep-la-ar24764.htm" title="3 ngôi nhà di động có thiết kế đẹp lạ">3 ngôi nhà di động có thiết kế đẹp lạ</a>
            </h4>
        </div>
        
        <div class="list_top">
            <ul>
                
                        <li>
                            <a href="/khong-gian-song/7-cach-giup-ngoi-nha-thoat-khoi-khong-gian-chat-hep-ar24759.htm" title="7 cách giúp ngôi nhà thoát khỏi không gian chật hẹp">7 cách giúp ngôi nhà thoát khỏi không gian chật hẹp</a>
                        </li>
                    
                        <li>
                            <a href="/khong-gian-song/ngoi-nha-cap-4-an-tuong-boi-loi-bai-tri-thong-minh-ar24754.htm" title="Ngôi nhà cấp 4 ấn tượng bởi lối bài trí thông minh">Ngôi nhà cấp 4 ấn tượng bởi lối bài trí thông minh</a>
                        </li>
                    
                        <li>
                            <a href="/khong-gian-song/thiet-ke-giuong-co-ngan-de-do-tu-tu-ke-ar24750.htm" title="Thiết kế giường có ngăn để đồ từ tủ kệ">Thiết kế giường có ngăn để đồ từ tủ kệ</a>
                        </li>
                    
                        <li>
                            <a href="/khong-gian-song/ban-cong-va-6-cach-tan-huong-tuyet-voi-ar24747.htm" title="Ban công và 6 cách tận hưởng tuyệt vời">Ban công và 6 cách tận hưởng tuyệt vời</a>
                        </li>
                    

            </ul>
        </div>
        <div class="clear"></div>
    </div>
</div>

                </div>
                <!-- I News -->
                <div class="inews">
                    
<div class="inews-l">
                        <div class="inews-l-title">
                            <h3><a href="/tu-van-luat.htm" title="Tư vấn luật">Tư vấn luật</a></h3>
                        </div>
                        <div class="inews-l-content">
                            <div class="inews-l-content-hot">
                                <a href="/tu-van-luat/xac-dinh-quyen-so-huu-cho-nha-co-dien-tich-duoi-50m2-ar24762.htm" title="Xác định quyền sở hữu cho nhà có diện tích dưới 50m2">
                                    <img src="http://img.dothi.net/crop/310x204//2015/09/22/Z9BcC3fq/m2-3f42.jpg" alt="Xác định quyền sở hữu cho nhà có diện tích dưới 50m2" />
                                </a>
                                <h3>
                                    <a href="/tu-van-luat/xac-dinh-quyen-so-huu-cho-nha-co-dien-tich-duoi-50m2-ar24762.htm" title="Xác định quyền sở hữu cho nhà có diện tích dưới 50m2">Xác định quyền sở hữu cho nhà có diện tích dưới 50m2</a>
                                </h3>
                                
                            </div>
                            <div class="clear"></div>
                            <ul>
                                
                                 <li><a href="/tu-van-luat/chinh-quyen-khong-duoc-cap-dat-trai-phap-luat-ar24739.htm" title="Chính quyền không được cấp đất trái pháp luật">Chính quyền không được cấp đất trái pháp luật</a></li>
                                 
                                 <li><a href="/tu-van-luat/hoi-ve-viec-xin-giay-phep-xay-dung-tren-khu-dat-hon-hop-ar24703.htm" title="Hỏi về việc xin giấy phép xây dựng trên khu đất hỗn hợp">Hỏi về việc xin giấy phép xây dựng trên khu đất hỗn hợp</a></li>
                                 
                                 <li><a href="/tu-van-luat/xin-giay-phep-xay-dung-khi-doi-dat-ar24680.htm" title="Xin giấy phép xây dựng khi đổi đất">Xin giấy phép xây dựng khi đổi đất</a></li>
                                 
                            </ul>
                            <div class="clear"></div>
                        </div> 
                    </div>


                    
<div class="inews-r">
    <div class="inews-r-title">
        <h3><a href="/thiet-ke-kien-truc.htm" title="Thiết kế kiến trúc">Thiết kế kiến trúc</a></h3>
    </div>
    <div class="inews-l-content">
        <div class="inews-l-content-hot">
            <a href="/thiet-ke-kien-truc/can-nha-nhin-ra-bien-hawaii-voi-66-ty-dong-ar24765.htm" title="Căn nhà nhìn ra biển Hawaii với 66 tỷ đồng">
                <img src="http://img.dothi.net/crop/310x204//2015/09/22/Z9BcC3fq/kientrucbonphuong1-7240.jpg" alt="Căn nhà nhìn ra biển Hawaii với 66 tỷ đồng" />
            </a>
            <h3>
                <a href="/thiet-ke-kien-truc/can-nha-nhin-ra-bien-hawaii-voi-66-ty-dong-ar24765.htm" title="Căn nhà nhìn ra biển Hawaii với 66 tỷ đồng">Căn nhà nhìn ra biển Hawaii với 66 tỷ đồng</a>
            </h3>
           
        </div>
        <div class="clear"></div>
        <ul>
            
                    <li><a href="/thiet-ke-kien-truc/lam-cau-thang-ngoai-troi-nen-chon-vat-lieu-gi-ar24757.htm" title="Làm cầu thang ngoài trời nên chọn vật liệu gì?">Làm cầu thang ngoài trời nên chọn vật liệu gì?</a></li>
                
                    <li><a href="/thiet-ke-kien-truc/tu-van-cai-tao-can-ho-co-bep-an-nhin-thang-vao-khu-ve-sinh-ar24751.htm" title="Tư vấn cải tạo căn hộ có bếp ăn nhìn thẳng vào khu vệ sinh">Tư vấn cải tạo căn hộ có bếp ăn nhìn thẳng vào khu vệ sinh</a></li>
                
                    <li><a href="/thiet-ke-kien-truc/thep-trung-quoc-dang-o-at-tran-vao-viet-nam-ar24745.htm" title="Thép Trung Quốc đang ồ ạt tràn vào Việt Nam">Thép Trung Quốc đang ồ ạt tràn vào Việt Nam</a></li>
                
        </ul>
        <div class="clear"></div>
    </div>
</div>

                </div>
            </div>

            <div class="clear"></div>
        </div>
    </div>
    <!-- End Index Page -->


            <div class="clear"></div>
        </div>

@endsection