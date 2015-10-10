"use strict";

var demo_form_validation = {
    init: function() {

        //Validation Dang tin
        if ($("#dangtin").length > 0) {
            var validate = $("#dangtin").validate({
                    errorClass:"has-error error",
                    validClass:"has-success",
                    errorElement:"span",
                    ignore: [],
                    errorPlacement: function(error,element){
                        $(element).before(error);                    
                        $(element).parents(".form-group").addClass("has-error");
                    },
                    highlight: function(element, errorClass){
                        $(element).parents(".form-group").removeClass("has-success").addClass(errorClass);
                        dev_layout_alpha_content.init(dev_layout_alpha_settings);
                    },
                    unhighlight: function(element, errorClass, validClass){                    
                        $(element).parents(".form-group").removeClass(errorClass).addClass(validClass);
                        dev_layout_alpha_content.init(dev_layout_alpha_settings);
                    },
                  
            })
        }; // END Validation Dang tin

        if($("#validate").length > 0){
            var validate = $("#validate").validate({                
                    errorClass:"has-error",
                    validClass:"has-success",
                    errorElement:"span",
                    ignore: [],
                    errorPlacement: function(error,element){
                        $(element).after(error);                    
                        $(element).parents(".form-group").addClass("has-error");
                    },
                    highlight: function(element, errorClass){
                        $(element).parents(".form-group").removeClass("has-success").addClass(errorClass);
                        dev_layout_alpha_content.init(dev_layout_alpha_settings);
                    },
                    unhighlight: function(element, errorClass, validClass){                    
                        $(element).parents(".form-group").removeClass(errorClass).addClass(validClass);
                        dev_layout_alpha_content.init(dev_layout_alpha_settings);
                    },
                    rules: {                                            
                            txtUser:          {required: true, minlength:3, maxlength: 16},
                            txtPass:       {required: true, minlength: 5, maxlength: 15},
                            'txtRePass':  {required: true, minlength: 5, maxlength: 15, equalTo: "#password2"},
                            age:            {required: true, min: 18, max: 100},
                            txtPhoneNumber: { number:true,minlength: 10, maxlength: 12,},
                            txtEmail:          {required: true, email: true},
                            date:           {required: true, date: true},
                            credit:         {required: true, creditcard: true},
                            site:           {required: true, url: true},

                       
                    }                               
            });      

            $(".hide-prompts").on("click",function(){
                validate.resetForm();
            });
        }

        if($("#user_edit").length > 0){
            var validate = $("#validate").validate({                
                    errorClass:"has-error",
                    validClass:"has-success",
                    errorElement:"span",
                    ignore: [],
                    errorPlacement: function(error,element){
                        $(element).after(error);                    
                        $(element).parents(".form-group").addClass("has-error");
                    },
                    highlight: function(element, errorClass){
                        $(element).parents(".form-group").removeClass("has-success").addClass(errorClass);
                        dev_layout_alpha_content.init(dev_layout_alpha_settings);
                    },
                    unhighlight: function(element, errorClass, validClass){                    
                        $(element).parents(".form-group").removeClass(errorClass).addClass(validClass);
                        dev_layout_alpha_content.init(dev_layout_alpha_settings);
                    },
                    rules: {                                            
                            txtUser:          {required: true, minlength:3, maxlength: 16},
                            txtPass:       {required: false, minlength: 5, maxlength: 15},
                            'txtRePass':  {required: false, minlength: 5, maxlength: 15, equalTo: "#password2"},
                            age:            {required: true, min: 18, max: 100},
                            txtPhoneNumber: { number:true,minlength: 10, maxlength: 12,},
                            txtEmail:          {required: true, email: true},
                            date:           {required: true, date: true},
                            credit:         {required: true, creditcard: true},
                            site:           {required: true, url: true},

                       
                    }                               
            });      

            $(".hide-prompts").on("click",function(){
                validate.resetForm();
            });
        }

        
        if($("#nestable").length > 0){
            $("#nestable").nestable({group: 1});
            $("#nestable2").nestable({group: 1});
            
            $("#nestable3").nestable();
            
            $('.dd').on('change', function() {
                dev_layout_alpha_content.init(dev_layout_alpha_settings);
            });
            $(".dd-item > button").on("click",function(){
                setTimeout(function(){
                    dev_layout_alpha_content.init(dev_layout_alpha_settings);
                },200);                
            });
        }
        
        // jsTree 
        if($("#jstree_default").length > 0){
            

            // Default
            $("#jstree_default").jstree();

            // Checkbox Plugin
            $("#jstree_checkbox").jstree({
                "checkbox" : {
                    "keep_selected_style" : false
                },
                "plugins" : [ "checkbox" ]
            });

            // Drag & drop plugin    
            $("#jstree_dnd").jstree({
                "core" : {"check_callback" : true},
                "plugins" : [ "dnd" ]
            });    
            
            $(".jstree-icon.jstree-ocl").on("click",function(){
                setTimeout(function(){
                    dev_layout_alpha_content.init(dev_layout_alpha_settings);
                },200);                
            });
            
        }
        //jstree_end
        
    }
}

var demo_tocify = {
    update: function(){
        if($("#tocify").length > 0){
            setTimeout(function(){
                $("#tocify").width($("#tocify").parent("div").width()-20);
            },500);
        }
    },
    init: function(){        
        if($("#tocify").length > 0){            
            $("#tocify").tocify({context: ".tocify-content", showEffect: "fadeIn",extendPage:false,selectors: "h3, h4, h5" });
            this.update();
        }
    }
};


$(function(){    
    demo_form_validation.init();    
    demo_tocify.init();    
});

$(window).resize(function(){
    demo_tocify.update();
});