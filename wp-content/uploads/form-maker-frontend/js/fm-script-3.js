    var fm_currentDate = new Date();
    var FormCurrency_3 = '$';
    var FormPaypalTax_3 = '0';
    var check_submit3 = 0;
    var check_before_submit3 = {};
    var required_fields3 = ["2","3","4","5"];
    var labels_and_ids3 = {"2":"type_text","3":"type_submitter_mail","4":"type_text","5":"type_textarea","1":"type_submit_reset"};
    var check_regExp_all3 = [];
    var check_paypal_price_min_max3 = [];
    var file_upload_check3 = [];
    var spinner_check3 = [];
    var scrollbox_trigger_point3 = '20';
    var header_image_animation3 = 'none';
    var scrollbox_loading_delay3 = '0';
    var scrollbox_auto_hide3 = '1';
         function before_load3() {	
}	
 function before_submit3() {
	 }	
 function before_reset3() {	
}
 function after_submit3() {
  
}
    function onload_js3() {
    }
    function condition_js3() {
    }
    function check_js3(id, form_id) {
    if (id != 0) {
    x = jQuery("#" + form_id + "form_view"+id);
    }
    else {
    x = jQuery("#form"+form_id);
    }    }
    function onsubmit_js3() {
    
    var disabled_fields = "";
    jQuery("#form3 div[wdid]").each(function() {
      if(jQuery(this).css("display") == "none") {
        disabled_fields += jQuery(this).attr("wdid");
        disabled_fields += ",";
      }
    })
    if(disabled_fields) {
      jQuery("<input type=\"hidden\" name=\"disabled_fields3\" value =\""+disabled_fields+"\" />").appendTo("#form3");
    };    }
    form_view_count3 = 0;
    jQuery(document).ready(function () {
    if (jQuery('form#form3 .wdform_section').length > 0) {
    fm_document_ready(3);
    }
    });
    jQuery(document).ready(function () {
    if (jQuery('form#form3 .wdform_section').length > 0) {
    formOnload(3);
    }
    });
    