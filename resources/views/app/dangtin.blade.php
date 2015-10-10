@extends('app/template')
@section('content') 
<div class="wr_page">
<div class="index-page"> 
<div class="content">
<!-- Content Left -->
<div class="mleft">
<!-- Hướng dẫn  -->
<div class="huongdan">
<div class="hd-title">
<h3><a href="/huong-dan.htm">Hướng dẫn sử dụng</a></h3>
</div>
<ul>
<li><a href="/huong-dan.htm#1">Hướng dẫn đăng ký tài khoản</a></li>
<li><a href="/huong-dan.htm#2">Hướng dẫn quản lý tin rao</a></li>
<li><a href="/huong-dan.htm#3">Hướng dẫn đăng tin</a></li>
<li><a href="/huong-dan.htm#4">Hướng dẫn nạp tiền</a></li>
</ul>
</div> 
<!-- Báo giá  -->
</div>
<!-- Content Right -->
<div class="mright">
        <!-- Đăng tin -->
<div class="postnews">
    <div id="ContentPlaceHolder1_PostNews_pnDangtin">

        <div class="pn-title">
            <h1>Đăng tin rao bán, cho thuê nhà đất</h1>
        </div>
        <div class="pn-content">
            <h4 class="posth4">THÔNG TIN CƠ BẢN</h4>
            <div class="row" id="rowError" style="display: none;">
                <label>&nbsp;</label>
                <div class="row-right">
                    <span style="color: red;">Có các thông tin nhập vào chưa hợp lệ, mời nhập lại!</span>
                </div>
            </div>
            <div class="row">
                <label>Loại tin <span>(*)</span>:</label>
                <div class="row-right" style="padding-top: 8px;">
                    <a href="javascript:" class="hplcate" id="hplSell">BĐS Bán</a>
                    <a href="javascript:" class="hplcate" id="hplRent">BĐS Cho Thuê</a>
                </div>
                <input type="hidden" name="ctl00$ContentPlaceHolder1$PostNews$hddCanBan" id="hddCanBan" value="38" />
            </div>
            <div class="row">
                <label>Loại nhà đất <span>(*)</span>:</label>
                <div class="row-right">

                    <div class="pncon">

                        <div class="select-item" id="cboCateP">
                        </div>
                        <div class="clear"></div>
                        <span style="color: red; display: none;" id="spancboCateP">Bạn cần nhập loại nhà đất</span>
                    </div>
                    <input type="hidden" name="ctl00$ContentPlaceHolder1$PostNews$hddcboCateP" id="hddcboCateP" value="-1" />

                </div>
            </div>
            <div class="row">
                <label>Vị trí <span>(*)</span></label>
                <div class="row-right ">
                    <div class="pncon marginright34">
                        <select id="ddlCity" class="select-menu" style="width: 231px">
                            <option value="-1">-- Chọn Tỉnh/Thành phố --</option>

                        </select>
                        <div class="select-menu " id="cboCityP" style="display: none">
                        </div>
                        <div class="clear"></div>
                        <span style="color: Red; display: none;" id="spancboCityP">Bạn chọn Tỉnh/Thành phố!</span>
                    </div>
                    <input type="hidden" name="ctl00$ContentPlaceHolder1$PostNews$hddcboCityP" id="hddcboCityP" value="-1" />
                    <div class="pncon">
                        <div class="select-menu" id="cboDistP">
                            <select id="ddlDistrict" class="select-menu">
                                <option value="-1">-- Chọn Quận/Huyện --</option>
                            </select>
                        </div>
                        
                        <div class="clear"></div>
                        <span style="color: Red; display: none;" id="spancboDistP">Bạn chọn Quận/Huyện!</span>
                    </div>
                    <input type="hidden" name="ctl00$ContentPlaceHolder1$PostNews$hddcboDistP" id="hddcboDistP" value="-1" />
                </div>
            </div>
            <div class="row">
                <label>&nbsp;</label>
                <div class="row-right">
                    <div class="select-container marginright34" id="cboWardP">
                        <select id="ddlWard" class="select-menu">
                            <option value="-1">-- Chọn Phường/Xã --</option>
                        </select>
                        <input type="hidden" name="ctl00$ContentPlaceHolder1$PostNews$hddcboWardP" id="hddcboWardP" value="-1" />
                        <input type="hidden" name="ctl00$ContentPlaceHolder1$PostNews$hddWardPrefix" id="hddWardPrefix" />
                    </div>
                    <div class="select-container" id="cboStreetP">
                        <select id="ddlStreets" class="select-menu">
                            <option value="-1">-- Chọn Đường/Phố --</option>
                        </select>
                        <input type="hidden" name="ctl00$ContentPlaceHolder1$PostNews$hddcboStreetP" id="hddcboStreetP" value="-1" />
                        <input type="hidden" name="ctl00$ContentPlaceHolder1$PostNews$hddStreetPrefix" id="hddStreetPrefix" />
                    </div>
                </div>
            </div>
            <div class="row">
                <label>&nbsp;</label>
                <div class="row-right">
                    <div class="select-container marginright34" id="cboProjectP">
                        <select id="ddlProjects" class="select-menu">
                            <option value="-1">-- Chọn Dự án --</option>
                        </select>
                        <input type="hidden" name="ctl00$ContentPlaceHolder1$PostNews$hddcboProjectP" id="hddcboProjectP" value="-1" />
                        <span style="color: Red; display: none;" id="spanLocation">Bạn cần nhập loại nhà đất</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <label>Giá:</label>
                <div class="row-right">
                    <input name="ctl00$ContentPlaceHolder1$PostNews$txtGia" type="text" id="txtGia" tabindex="10" class="input1 marginright34" onchange="ChangeMucgia(this)" />
                    <label style="width: 70px;">Đơn vị:</label>
                    <div class="select-item select-item1" id="cboPriceP"></div>
                    <input type="hidden" name="ctl00$ContentPlaceHolder1$PostNews$hddcboPriceP" id="hddcboPriceP" value="-1" />
                    <div class="clear"></div>
                    <span style="color: Red; float: left; display: none;" id="spanGia">Giá không hợp lệ!</span>
                    <span style="color: Red; display: none;" id="spanDonVi">Bạn phải chọn đơn vị!</span>
                </div>
            </div>
            <div class="row">
                <label>Diện tích:</label>
                <div class="row-right">
                    <input name="ctl00$ContentPlaceHolder1$PostNews$txtDientich" type="text" id="txtDientich" tabindex="12" class="input1 input2" onchange="ChangeDientich(this)" />
                    <span class="span">m2</span>
                    <div class="clear"></div>
                    <span style="color: Red; float: left; display: none;" id="spanDientich">Diện tích không hợp lệ!</span>
                </div>
            </div>
            <div class="row">
                <label>Địa điểm <span>(*)</span>:</label>
                <div class="row-right">
                    <input name="ctl00$ContentPlaceHolder1$PostNews$txtDiadiem" type="text" id="txtDiadiem" tabindex="9" class="input1 input3" />
                    <input type="hidden" name="ctl00$ContentPlaceHolder1$PostNews$hddDiadiem" id="hddDiadiem" />
                    <div class="clear"></div>
                    <span style="color: Red; float: left; display: none;" id="spanDiadiem">Bạn cần nhập địa điểm</span>
                </div>
            </div>
            <div class="row1"></div>
            <h4 class="posth4">THÔNG TIN KHÁC</h4>
            <div class="row">
                <label>Mặt tiền:</label>
                <div class="row-right">
                    <div class="pncon">
                        <input name="ctl00$ContentPlaceHolder1$PostNews$txtMattien" type="text" id="txtMattien" tabindex="13" class="input1 input2" />
                        <span class="span marginright80">m</span>
                        <div class="clear"></div>
                        <span style="color: Red; float: left; display: none;" id="spanMattien">Mặt tiền không hợp lệ!</span>
                    </div>
                    <label style="width: 102px;">Đường trước nhà:</label>
                    <div class="pncon">
                        <input name="ctl00$ContentPlaceHolder1$PostNews$txtDuongtruocnha" type="text" id="txtDuongtruocnha" tabindex="14" class="input1 input4" />
                        <span class="span">m</span>
                        <div class="clear"></div>
                        <span style="color: Red; float: left; display: none;" id="spanDuongtruocnha">Đường trước nhà không hợp lệ!</span>
                    </div>

                </div>
                <span style="color: Red; display: none; float: left;" id="spantxtMattien">Bạn cần nhập loại nhà đất</span>
                <span style="color: Red; display: none; float: left;" id="spantxtDuongtruocnha">Bạn cần nhập loại nhà đất</span>
            </div>
            <div class="row">
                <label>Số tầng:</label>
                <div class="row-right">
                    <div class="pncon">
                        <input name="ctl00$ContentPlaceHolder1$PostNews$txtSotang" type="text" id="txtSotang" tabindex="16" class="input1 input2 marginright95" />
                        <div class="clear"></div>
                        <span style="color: Red; float: left; display: none;" id="spanSotang">Số tầng không hợp lệ!</span>
                    </div>
                    <label style="width: 102px;">Số phòng:</label>
                    <input name="ctl00$ContentPlaceHolder1$PostNews$txtSophong" type="text" id="txtSophong" tabindex="17" class="input1 input4" />
                </div>
            </div>
            <div class="row">
                <label>Hướng BĐS:</label>
                <div class="row-right">
                    <div class="select-item marginright34" id="cboDirectionP"></div>
                    <input type="hidden" name="ctl00$ContentPlaceHolder1$PostNews$hddcboDirectionP" id="hddcboDirectionP" value="-1" />
                    <label style="width: 102px;">Số toilet:</label>
                    <input name="ctl00$ContentPlaceHolder1$PostNews$txtSotoilet" type="text" id="txtSotoilet" tabindex="18" class="input1 input4" />
                </div>
            </div>

            <div class="row1"></div>
            <h4 class="posth4">MÔ TẢ CHI TIẾT</h4>
            <div class="row">
                <label>Tiêu đề <span>(*)</span>:</label>
                <div class="row-right">
                    <input name="ctl00$ContentPlaceHolder1$PostNews$txtTieude" type="text" id="txtTieude" tabindex="19" class="input1 input3" placeholder="Vui lòng gõ tiếng Việt có dấu để tin đăng được kiểm duyệt nhanh hơn" />
                    <div class="clear"></div>
                    <span style="color: Red; display: none;" id="spanTieude">Bạn cần nhập tiêu đề</span>
                    <span style="color: Red; display: none;" id="spanLimit">Tiêu đề phải nhập ít nhất 5 chữ!</span>
                    <span style="color: Red; display: none;" id="spanMaxCharacter">Tiêu đề không được nhập quá 99 kí tự!</span>
                </div>
            </div>
            <div class="row" id="boxSuggest" style="display: block;">
                <label>
                    Gợi ý tiêu đề
                </label>
                <div class="row-right" style="width: 496px;">
                    <span id="spanGoiytieude"></span>
                    <input type="hidden" name="ctl00$ContentPlaceHolder1$PostNews$hddSuggestion" id="hddSuggestion" />
                    <span id="spanLinkGoiy" style="margin-top: 5px; float: left; white-space: nowrap; width: 496px;">
                        <a style="color: red; font-weight: bold;" href="javascript:SetTitle();" rel="no-follow">Click để sử dụng tiêu đề gợi ý</a>
                    </span>
                </div>
                <div class="clear"></div>
            </div>
            <div class="row">
                <label>Nội dung mô tả <span>(*)</span>:</label>
                <div class="row-right">
                    <textarea name="ctl00$ContentPlaceHolder1$PostNews$tarNoidung" id="tarNoidung" rows="5" tabindex="20"></textarea>
                    <div class="clear"></div>
                    <span style="color: Red; display: none;" id="spanNoidungmota">Bạn cần nhập Nội dung mô tả</span>
                    <span style="color: Red; max-width: 500px; float: left; display: none;" id="spanLimited">Nội dung mô tả phải có tối thiểu 100 kí tự và tối đa 3000 kí tự (Không tính các kí tự trắng ở đầu, cuối và các kí tự trắng liền nhau trong đoạn văn bản)!</span>
                </div>
            </div>

            <div class="row wr_upload">
                <label>Cập nhật hình ảnh:</label>
                <div class="row-right">
                    <span id="spanLuuY">(Bạn có thể tải 12 ảnh và mỗi ảnh dung lượng không quá 4mb!)</span>
                    <div id="fileupload">
                        <script src="public/app/Styles/CommonUpload/wvtupload.js?v=01" type="text/javascript"></script>
                        <link href="public/app/Styles/CommonUpload/css.css" rel="stylesheet" type="text/css" />
                        <div id="uploadimage" class="clearfix">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$PostNews$BDSGuestUploadNonFlash" id="BDSGuestUploadNonFlash" />
                        </div>
                        <script>
                            $('#uploadimage').wvtupload({ token: 'odAj+GpVitqMJto9d4iibbqJjFkgfEV6uGA7/jUD3Tg=', target: 'BDSGuestUploadNonFlash', maxFiles: 12, serverThumb: 'http://img.dothi.net', serverUpload: 'http://upload.dothi.net' });
                        </script>
                    </div>
                    <div class="clear"></div>

                </div>
            </div>

            <div class="row1"></div>
            <h4 class="posth4">THÔNG TIN BẢN ĐỒ</h4>
            <div class="row">
                <input type="hidden" name="ctl00$ContentPlaceHolder1$PostNews$hddLatitude" id="hddLatitude" value="21.02894860978742" />
                <input type="hidden" name="ctl00$ContentPlaceHolder1$PostNews$hddLongtitude" id="hddLongtitude" value="105.85244722590335" />
                <input type="hidden" name="ctl00$ContentPlaceHolder1$PostNews$txtPositionX" id="txtPositionX" value="14.058324" />
                <input type="hidden" name="ctl00$ContentPlaceHolder1$PostNews$txtPositionY" id="txtPositionY" value="108.277199" />

                
<script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>
<script src="public/app/Scripts/GoogleMapControl.min.js?v=20150922" type="text/javascript"></script>
<div id="mapinfo">
    <div id="map_canvas"></div>
</div>

            </div>
            <div class="row1"></div>
            <h4 class="posth4">THÔNG TIN LIÊN HỆ</h4>
            <div class="row">
                <label>Họ tên <span>(*)</span>:</label>
                <div class="row-right">
                    <input name="ctl00$ContentPlaceHolder1$PostNews$txtHovaten" type="text" id="txtHovaten" tabindex="24" class="input1 input3" />
                    <div class="clear"></div>
                    <span style="color: Red; display: none;" id="spanHovaten">Bạn cần nhập họ và tên</span>
                </div>
            </div>
            <div class="row">
                <label>Địa chỉ:</label>
                <div class="row-right">
                    <input name="ctl00$ContentPlaceHolder1$PostNews$txtDiachi" type="text" id="txtDiachi" tabindex="25" class="input1 input3" />
                </div>
            </div>
            <div class="row">
                <label>Điện thoại:</label>
                <div class="row-right">
                    <input name="ctl00$ContentPlaceHolder1$PostNews$txtDienthoai" type="text" id="txtDienthoai" tabindex="26" class="input1 input3" />
                    <div class="clear"></div>
                    <span style="color: Red; display: none;" id="spanDienthoaiCheck">Số điện thoại sai định dạng, bạn hãy nhập lại!</span>
                </div>
            </div>
            <div class="row">
                <label>Di động <span>(*)</span>:</label>
                <div class="row-right">
                    <input name="ctl00$ContentPlaceHolder1$PostNews$txtDidong" type="text" id="txtDidong" tabindex="27" class="input1 input3" />
                    <div class="clear"></div>
                    <span style="color: Red; display: none;" id="spanDidong">Bạn cần nhập số di động</span>
                    <span style="color: Red; display: none;" id="spanDidongCheck">Số di động sai định dạng, bạn hãy nhập lại!</span>
                </div>
            </div>
            <div class="row">
                <label>Email:</label>
                <div class="row-right">
                    <input name="ctl00$ContentPlaceHolder1$PostNews$txtEmail" type="text" id="txtEmail" tabindex="28" class="input1 input3" />
                </div>
            </div>
            <div class="row1"></div>
            <h4 class="posth4">LOẠI TIN VÀ LỊCH ĐĂNG TIN:</h4>
            <div class="row">
                <p>Tin thường trên <a target="_blank" href="/" class="text-blue"><strong>Dothi.net</strong></a> vẫn hoàn toàn miễn phí!</p>
                <p>Tuy nhiên, để đáp ứng tốt nhu cầu của Khách hàng, <a target="_blank" href="/" class="text-blue"><strong>Dothi.net</strong></a> cho ra đời dịch vụ đăng tin Hot, tin Vip và tin siêu Vip với nhiều ưu đãi về hình thức và vị trí hiển thị. Click <a href="/bao-gia.htm" target="_blank" class="text-blue"><strong>vào đây</strong></a> để xem thông tin chi tiết.</p>
            </div>
            <div class="row">
                <label>Loại tin rao <span>(*)</span>:</label>
                <div class="row-right2">
                    <ul class="vip-type" >
                        <li><a href="javascript:" class="hplVipType" id="hpVip0" viptype="0">Tin siêu Vip</a></li>
                        <li><a href="javascript:" class="hplVipType" id="hpVip1" viptype="1">Tin Vip</a></li>
                        <li><a href="javascript:" class="hplVipType" id="hpVip2" viptype="2">Tin Hot</a></li>
                        <li><a href="javascript:" class="hplVipType" id="hpVip5" viptype="5">Tin thường</a></li>
                    </ul>
                    <input type="hidden" name="ctl00$ContentPlaceHolder1$PostNews$hddVipType" id="hddVipType" value="-1" />
                    <div class="row1"></div>
                    <div class="preview">
                        <span style="color: Red; display: none;" id="spanViptype">Bạn cần phải chọn loại tin</span>
                        <label id="viptype-title"><b>Tin siêu Vip:</b></label>
                        <div class="row-right" id="vip-desc0" style="display: none">
                            <p>- Đứng đầu danh sách tin rao</p>
                            <p>- Kiểu hiển thị khác biệt và ấn tượng hơn các tin VIP và tin HOT.</p>
                            <p>- Tiêu đề tin in hoa, màu đỏ, có ngôi sao màu xanh ở đầu mỗi tiêu đề</p>
                        </div>
                        <div class="row-right" id="vip-desc1">
                            <p>- Đứng đầu danh sách tin rao sau tin siêu VIP</p>
                            <p>- Tiêu đề tin màu đỏ.</p>
                        </div>
                        <div class="row-right" id="vip-desc2" style="display: none">
                            <p>- Đứng đầu danh sách tin rao sau tin VIP và tin siêu VIP</p>
                            <p>- Tiêu đề tin màu cam.</p>
                        </div>
                        <div class="row-right" id="vip-desc5" style="display: none">
                            <p>- Tiêu đề chữ thường, mầu xanh, in đậm</p>
                        </div>

                        <div class="vip-preview">
                            <ul>
                                <li>
                                    <img id="" title="" src="Images/no-photo170.png" alt="">
                                    <div class="desc">
                                        <h4>
                                            <a id="vip-preview-title" class="vipdb" title=""></a></h4>
                                        <div class="other">
                                            <div class="price">
                                                <label>Giá<span>:</span></label>
                                                <span id="vip-preview-price">8.5 Triệu/tháng</span>
                                            </div>
                                            <div class="area">
                                                <label>Diện tích<span>:</span></label>
                                                <span id="vip-preview-area">90&nbsp;</span>m²
                                            </div>
                                            <div class="location">
                                                <label>Vị trí<span>:</span></label>
                                                <span id="vip-preview-location"></span>
                                            </div>
                                        </div>
                                        <span class="date" id="vip-preview-date"></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <label>Thời gian đăng <span>(*)</span>:</label>
                <div class="row-right">
                    <span class="span">Từ</span>
                    <input name="ctl00$ContentPlaceHolder1$PostNews$txtTungay" type="text" value="22/09/2015" id="txtTungay" tabindex="21" class="input1 input5" onkeypress="return false;" />
                    <span class="span marginleftt10">Đến</span>
                    <input name="ctl00$ContentPlaceHolder1$PostNews$txtDenngay" type="text" value="22/10/2015" id="txtDenngay" tabindex="22" class="input1 input5" onkeypress="return false;" />
                    <input type="hidden" name="ctl00$ContentPlaceHolder1$PostNews$hdDenNgayBan" id="hdDenNgayBan" value="22/10/2015" />
                    <input type="hidden" name="ctl00$ContentPlaceHolder1$PostNews$hdDenNgayThue" id="hdDenNgayThue" value="06/11/2015" />
                    <span class="span marginleftt10" id="spTotalDay"><b>30 ngày</b></span>
                    <div class="clear"></div>
                    <span style="color: Red; display: none;" id="spanThoigian">Thời gian đăng không được để trống!</span>
                    <span style="color: Red; display: none;" id="spanThoigianCheck">Ngày hết hạn phải lớn hơn thời gian đăng 7 ngày và không vượt quá 6 tháng.</span>
                </div>
            </div>
            <div class="row">
                <label>Thành tiền (VNĐ) :</label>
                <div class="row-right">

                    <div id="tablecontainer">
                        <div class="tablecontainerrow">
                            <div class="column1">Tiền theo giá gốc</div>
                            <div class="column2" id="txtUnitPrice">50 000 VNĐ/ 1 ngày</div>
                        </div>
                        
                        <div class="tablecontainerrow">
                            <div class="column1">Tiền phải trả</div>
                            <div class="column2" id="txtCost">1.500.000 VNĐ</div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="ContentPlaceHolder1_PostNews_divCaptcha" class="row">
                <label>Mã an toàn <span>(*)</span>:</label>
                <div class="row-right">
                    <input name="ctl00$ContentPlaceHolder1$PostNews$txtcode" type="text" maxlength="4" id="txtcode" class="input1 input2" />
                    <span class="imgCaptcha">
                        <img id="img_CAPTCHA_Post" style="width: 100px; vertical-align: middle;" src="/Layout/Capchar/CaptchaGenerator.aspx" alt="" noloaderror="1" />
                        <img id="Img2" class="reloadCapcha" onmouseover="this.style.cursor='pointer'" style="vertical-align: middle;"
                            onclick="javascript:refreshCaptcha('img_CAPTCHA_Post');" title="Đổi mã an toàn"
                            alt="renew capcha" src="Images/icon-reload.png" />
                    </span>
                </div>
            </div>
            <div class="row row2">
                <a class="various btnPreview" href="javascript:">Xem trước</a>

                
                <a onclick="return ValidateData();" id="lbtPost" class="btnpost" href="javascript:__doPostBack(&#39;ctl00$ContentPlaceHolder1$PostNews$lbtPost&#39;,&#39;&#39;)">Đăng tin</a>
                <a id="lbtCancel" class="btncancel" href="javascript:__doPostBack(&#39;ctl00$ContentPlaceHolder1$PostNews$lbtCancel&#39;,&#39;&#39;)">Hủy bỏ</a>
            </div>
        </div>
    
</div>

<input type="hidden" name="ctl00$ContentPlaceHolder1$PostNews$hddCusPhone" id="hddCusPhone" />
</div>
<script type="text/javascript">
    var productid = '0';
</script>
<script src="public/app/Scripts/PostNews.min.js?v=120150922" type="text/javascript"></script>
<script type="text/javascript">
    $('select').select2({
        matcher: function (params, data) {
            if ($.trim(params.term) === '') {
                return data;
            }
            var _keyword = UnicodeToKoDau(data.text.toLowerCase());
            var _text = UnicodeToKoDau(params.term.toLowerCase());
            if (_keyword.indexOf(_text) == 0) {
                var modifiedData = $.extend({}, data, true);
                modifiedData.text;
                return modifiedData;
            }
            return null;
        }
    });
    $('#ddlCity').on('change', function () {
        $("#hddcboCityP").val($('#ddlCity').val());
        $("#hddcboDistP").val(-1);
        $("#hddcboWardP").val(-1);
        $("#hddcboStreetP").val(-1);
        $("#hddcboProjectP").val(-1);
        GetDistrict($('#ddlCity').val());
        ShowLocation();
    })
    $('#ddlDistrict').on('change', function () {
        $("#hddcboDistP").val($('#ddlDistrict').val());
        ChangeDistrict($('#ddlDistrict').val());
        ShowLocation();
        //GetWard($('#ddlDistrict').val());
        //GetProject($('#ddlDistrict').val());
    })
    $('#ddlWard').on('change', function () {
        $("#hddcboWardP").val($('#ddlWard').val());
        $("#hddWardPrefix").val($('#ddlWard').find('option:selected').attr('wardprefix'));
        $("#hddcboStreetP").val(-1);
        GetStreets($('#ddlDistrict').val());
        GetDiadiem();
        GetGoiy();
        ShowLocation();
    })
    $('#ddlStreets').on('change', function () {
        $("#hddcboStreetP").val($('#ddlStreets').val());
        $('#hddStreetPrefix').val($('#ddlStreets').find('option:selected').attr('streetprefix'));
        GetDiadiem();
        GetGoiy();
        ShowLocation();
    });
    $('#ddlProjects').on('change', function () {
        $("#hddcboProjectP").val($('#ddlProjects').val());
        GetDiadiem();
        GetGoiy();
        ShowLocation();
        loadProjectMap($('#ddlProjects').val());
    });
</script>

            </div>
            <div class="clear"></div>
        </div>
    </div>

            <div class="clear"></div>
        </div>

        @endsection