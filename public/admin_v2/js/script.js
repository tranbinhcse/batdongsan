"use strict"; 

var datatables = {
    init: function(){
        
        if($("#listbds").length > 0){
            /* init default sortable table */
            $("#listbds").DataTable({ 
                 "order": [[ 4, "asc" ]],
                "fnInitComplete": function() {
                    $(".dataTables_wrapper").find("select,input").addClass("form-control");
                }
            });            
            /* ./init default sortable table */
            
            /* udate page content on page change */
            $("#listbds").on('page.dt',function() {
                setTimeout(function(){
                    dev_layout_alpha_content.init(dev_layout_alpha_settings);
                },100);                
            });
            /* ./udate page content on page change */                
            
            /* update page content on search */
            $("#listbds").on( 'search.dt', function() {
                setTimeout(function(){
                    dev_layout_alpha_content.init(dev_layout_alpha_settings);
                },200);                
            });
            /* ./update page content on search */
            
            /* uppdate page content on change length */
            $('#listbds').on('length.dt', function() {
                setTimeout(function(){
                    dev_layout_alpha_content.init(dev_layout_alpha_settings);
                },100);                
            });
            /* ./uppdate page content on change length */
        }

        if($("#listcatebds").length > 0){
            /* init default sortable table */
            $("#listcatebds").DataTable({  
                "fnInitComplete": function() {
                    $(".dataTables_wrapper").find("select,input").addClass("form-control");
                }
            });            
            /* ./init default sortable table */
            
            /* udate page content on page change */
            $("#listcatebds").on('page.dt',function() {
                setTimeout(function(){
                    dev_layout_alpha_content.init(dev_layout_alpha_settings);
                },100);                
            });
            /* ./udate page content on page change */                
            
            /* update page content on search */
            $("#listcatebds").on( 'search.dt', function() {
                setTimeout(function(){
                    dev_layout_alpha_content.init(dev_layout_alpha_settings);
                },200);                
            });
            /* ./update page content on search */
            
            /* uppdate page content on change length */
            $('#listcatebds').on('length.dt', function() {
                setTimeout(function(){
                    dev_layout_alpha_content.init(dev_layout_alpha_settings);
                },100);                
            });
            /* ./uppdate page content on change length */
        }
 

        
    }
};


$("div.alert").delay(3000).slideUp();
 
function xacnhanxoa () {
    if (window.confirm("Bạn chắc chắn muốn xóa không?")) {
        return true;
    }
    return false;
}

$(document).ready(function () {
    $('#addImg').click(function () {
        $('#insert').append('<div class="form-group"><input type="file" name="fImage" accept="jpg,png" /></div>');
    });
});


//Ajax Xoa hình ảnh project


$(document).ready(function(){
    $('a#del_img').on('click',function () {
        var url = 'http://bds.dev/admin/project/delimg/';
        var _token = $("form[name='frmeditproject'").find("input[name='_token']").val();
        var idHinh = $(this).parent().find("img").attr("idHinh");
        var img = $(this).parent().find("img").attr("src");
        var rid = $(this).parent().find("img").attr("id");
        //alert(rid);
        $.ajax({
            url: url + idHinh,
            type: "GET",
            cache: false,
            data: {"_token":_token,"idHinh":rid,"urlHinh":img},
            success: function (data){
                if (data == 'ok') {
                    $("#" + idHinh).remove();
                }else{
                    alert (data)
                };
            }
        });
    });
});

















