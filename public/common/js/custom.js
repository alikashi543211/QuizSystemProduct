// Custom Js Spick and Spack

function loginValidate()
{
	$(".login-form").validate({
        rules: {
            email: {
                required: true,
                email: true,
            },
            password: {
                required: true,
            },
        },
        messages: {
            email: {
                required: 'Enter your email address',
            },
            password: {
                required: 'Enter your password',
            },
        },
        errorPlacement: function(error, element) {
            $(element).addClass('error');
            console.log($(element).closest('.form-group'));
            $(element).closest('.form-group').find('.invalid-feedback').html('<strong>'+error.html()+'</strong>');
            console.log($(element).closest('.form-group').html());
        },
        // set this class to error-labels to indicate valid fields
        success: function(label) {
            // set &nbsp; as text for IE
            label.html("&nbsp;").addClass("checked");
        },
        highlight: function(element, errorClass) {
            $(element).parent().next().find("." + errorClass).removeClass("checked");
        },
        unhighlight: function (element) {
            $(element).removeClass('error');
            $(element).closest('.form-group').find('.invalid-feedback').html('');
        }
    });
}


















function adminPasswordValidate()
{
    $(".admin-password-validate").validate({
            rules: {
                password: {
                    required: true,
                },
                password_confirmation: {
                    required: true,
                    equalTo : "#user-password",
                },
            },
            messages: {
                password: {
                    required: 'Enter new password',
                },
                password_confirmation: {
                    required: 'Re-enter your password',
                    equalTo: 'Confirm your password',
                },
            },
            errorPlacement: function(error, element) {
                $(element).addClass('error');
                console.log($(element).closest('.form-group'));
                $(element).closest('.form-group').find('.invalid-feedback').html('<strong>'+error.html()+'</strong>');
                console.log($(element).closest('.form-group').html());
            },
            // set this class to error-labels to indicate valid fields
            success: function(label) {
                // set &nbsp; as text for IE
                label.html("&nbsp;").addClass("checked");
            },
            highlight: function(element, errorClass) {
                $(element).parent().next().find("." + errorClass).removeClass("checked");
            },
            unhighlight: function (element) {
                $(element).removeClass('error');
                $(element).closest('.form-group').find('.invalid-feedback').html('');
            }
        });
}


















function adminProfileValidate()
{
    $(".admin-profile-validate").validate({
        rules: {
            name: {
                required: true,
            },
            email: {
                required: true,
                email: true,
            },
        },
        messages: {
            name: {
                required: 'Enter your name',
            },
            email: {
                required: 'Enter your email address',
                email: 'Enter a valid email address',
            },
        },
        errorPlacement: function(error, element) {
            $(element).addClass('error');
            console.log($(element).closest('.form-group'));
            $(element).closest('.form-group').find('.invalid-feedback').html('<strong>'+error.html()+'</strong>');
            console.log($(element).closest('.form-group').html());
        },
        // set this class to error-labels to indicate valid fields
        success: function(label) {
            // set &nbsp; as text for IE
            label.html("&nbsp;").addClass("checked");
        },
        highlight: function(element, errorClass) {
            $(element).parent().next().find("." + errorClass).removeClass("checked");
        },
        unhighlight: function (element) {
            $(element).removeClass('error');
            $(element).closest('.form-group').find('.invalid-feedback').html('');
        }
    });
}














function validatorDefaults(d='')
{
    $.validator.setDefaults({
        ignore: [d],
    });
}





















function logOutUser()
{
    $(document).on("click", ".logout_user", function(){
        $(".logout_form").submit();
    });
}












function validateOnlyNumber()
{
    $(document).on("keyup", ".numbers", function () { 
        this.value = this.value.replace(/[^0-9\.]/g,'');
    });
}











function showReadMoreModal()
{
    $(document).on("click", ".read_more", function(){
        $message = $(this).attr("data-value");
        $("#contactMessage").html($message);
        $("#readMoreModal").modal("show");
    });
}











function mapDataToFields(data)
{
    $.map(data, function(value, index){
        var input = $('[name="'+index+'"]');
        if($(input).length && $(input).attr('type') !== 'file')
        {
          if(($(input).attr('type') == 'radio' || $(input).attr('type') == 'checkbox') && value == $(input).val())
            $(input).prop('checked', true);
          else
              $(input).val(value).change();
        }
    });
}
























function onClickClearFilterButton()
{
    
    $(document).on("click", ".btn_clear_filter", function() {
        $(".filter-form input").val('');
        $(".filter-form").submit();
    });
}















function startToolTip()
{
    $('[data-toggle="tooltip"]').tooltip();
}














function saveAjaxPostFormData($url)
{
    $.ajax({

        url: $url,
        method: "POST",
        data: new FormData(".form_element"),
        dataType: 'JSON',
        contentType: false,
        cache: false,
        processData: false,
        success: function (response) {
            console.log("Data Saved Successfully");
        },
        error: function () {
            console.log("There is something error");
        }
    });
}























function deleteAlert(url) 
{
    Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.value) {
            location.href = url;
        }
    });
}






















function alertMessage(url, msg) 
{
    Swal.fire({
    title: 'Please Confirm',
    text: msg,
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, do it!'
    }).then((result) => {
        if (result.value) {
            location.href = url;
        }
    });
}

















function  onChangeStatusSweetAlert(url, msg, btn_text)
{
    Swal.fire({
        title: "Please Confirm",
        text: msg,
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: btn_text,
    }).then((result) => {
        if (result.value) {
            location.href = url;
        }
    });
}















function startDatePicker()
{
    $( ".datepicker" ).datepicker({
        dateFormat: 'yy-mm-dd',
    }).val();
}





















function removeFormLabelFloating()
{
    $('.bmd-form-group').each(function(){
        $(this).find('label').removeClass('bmd-label-floating');
        $(this).removeClass('bmd-form-group');
    });

}


















function startSelect2()
{
    $('.select2').select2({
        width: '100%'
    });
}

















function generalValidateForm()
{
    $(".validate-form").validate({
            highlight: function(element) {
            $(element).closest('.form-group').removeClass('has-success').addClass('has-danger');
            $(element).closest('.form-check').removeClass('has-success').addClass('has-danger');
        },
        success: function(element) {
            $(element).closest('.form-group').removeClass('has-danger').addClass('has-success');
            $(element).closest('.form-check').removeClass('has-danger').addClass('has-success');
        },
        errorPlacement: function(error, element) {
            $(element).closest('.form-group').append(error);
        },
    });
}






















function startDataTable()
{
    $('.datatables').DataTable({
        "sort": false,
        "ordering": false,
        "pagingType": "full_numbers",
        responsive: true,
        language: {
            search: "_INPUT_",
            searchPlaceholder: "Search records",
        }
    });
}























function customizeDropifyMessages()
{
    $('body .dropify').dropify({
        messages: {
            'default': 'Click to upload file',
            'replace': 'Click to upload file to replace',
        }
    });
}




























function onChangeDateFilterInput()
{
    $(document).on('change', '.filter_by',function(e){
        e.preventDefault();
        $('.filter-form').submit();
    });
}





























function alertMessage(url, title, msg, confirm_btn, confirm_btn_color) 
{
    Swal.fire({
        title: title,
        text: msg,
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: confirm_btn_color,
        cancelButtonColor: '#d33',
        confirmButtonText: confirm_btn
    }).then((result) => {
        if (result.value) {
            location.href = url;
        }
    });
}


















// Quiz System Js
function onClickAddButtonAddMcqModal()
{
    
    $(document).on("click", "#add_mcq_btn", function(){
        $("#add_mcq_modal .modal_question_section").show();
        $("#add_mcq_modal .modal_options_section").hide();
        $("#add_mcq_modal .modal_correct_option_section").hide();
        $("#add_mcq_modal .modal_step").val('1');
        $("#add_mcq_modal .correct_option_input").val('');
        $("#add_mcq_modal .next_button_question_modal").html("Next");
        $("#add_mcq_modal").modal('show');
    });
}










function getBootstrapSpinner()
{
    $spinner = '<div class="spinner-border bs_spinner_border" role="status"><span class="sr-only">Loading...</span></div>';
    return $spinner;
}










function emptyModalFormValuesWhenWeClose()
{
    $(document).on('hidden.bs.modal', '.modal', function () {
        $(this)
            .find("input:not([type=hidden], [name=date], [name=job_id], [readonly]), textarea, select")
            .val('')
            .end()
            .find("input[type=checkbox], input[type=radio]")
            .prop("checked", "")
            .end();
    });
}









function showSweetAlertPopup($alert_type, $msg, $title)
{
    Swal.fire(
        $title,
        $msg,
        $alert_type
      )
}






















function onSubmitMcqAddForm()
{
    $(document).on("submit", ".add-mcq-modal-form",  function(e){
        $modal_step = $("#add_mcq_modal .modal_step");
        if($modal_step.val() == 1)
        {
            $("#add_mcq_modal .modal_question_section").hide();
            $("#add_mcq_modal .modal_options_section").show();
            $("#add_mcq_modal .modal_correct_option_section").hide();
            $modal_step.val('2');

        }else if($modal_step.val() == 2)
        {
            $(".option_dropdown").html(getAllOptions());
            $("#add_mcq_modal .modal_question_section").hide();
            $("#add_mcq_modal .modal_options_section").hide();
            $("#add_mcq_modal .modal_correct_option_section").show();
            $(".next_button_question_modal").html("Submit");
            $modal_step.val('3');

        }else if($modal_step.val() == 3)
        { 
            $url = $(this).attr("action");
            $submit_btn = $("#add_mcq_modal .next_button_question_modal");
            $close_btn = $("#add_mcq_modal .close_modal_button");
            $list_url = $(this).attr("data-list-url");
            $.ajax({

                url: $url,
                method: "POST",
                data: new FormData(this),
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function()
                {
                    $btn_before_text = $submit_btn.html();
                    $submit_btn.html(getBootstrapSpinner());
                    $submit_btn.prop("disabled", true);
                    $close_btn.prop("disabled", true);
                },
                success: function (response) {
                    
                    if(response.result)
                    {
                        $submit_btn.prop("disabled", false);
                        $close_btn.prop("disabled", false);
                        $submit_btn.html("Submit");
                        $("#add_mcq_modal").modal("hide");
                        showSweetAlertPopup("success", response.success, "Success");
                        updateOurTableData($list_url);
                        
                    }else
                    {
                        $submit_btn.html($btn_before_text);
                        $submit_btn.prop("disabled", false);
                        $close_btn.prop("disabled", false);
                        showSweetAlertPopup("warning", response.error, "Fail");
                    } 
                },
                error: function () {
                    $("#add_mcq_modal .next_button_question_modal").html($btn_before_text);
                    $btn.prop("disabled", false);
                    md.showNotification('danger', "There is something error");
                }
            });
        }
        e.preventDefault();

    });
}
























function updateOurTableData($url)
{
    $.ajax({
        type: "GET",
        url: $url,
        beforeSend: function()
        {
            showTableLoadingSpinner();
        },
        success: function (response) {
            $('body .theme_table_main_div').html(response);
            hideSpinnerShowTableContent();
        }
    });
}































function onChangeCorrectOptionSelect($url, $target)
{
    $(document).on('select2:select', '.option_dropdown', function (e) {
        $val = $(this).val();
        $(this).change();
        $("#add_mcq_modal .correct_option_input").val($val);
    });
}







function getAllOptions()
{
    $option_dropdown = '<option value="" disabled selected>Select Option</option>';
    $("#add_mcq_modal .option_input").each(function(){
        $value = $(this).val();
        $option_dropdown = $option_dropdown + '<option value="'+ $value +'">'+ $value +'</option>'; 
    });
    return $option_dropdown;
}
























function validateAddMcqModalForm()
{
    // validatorDefaults();
    $(".add-mcq-modal-form").validate({
        rules: {
            question: {
                required: true,
            },
            option: {
                required: true,
            },
            correct_option_input: {
                required: true,
            },
        },
        messages: {
            question: {
                required: 'Enter question',
            },
            option: {
                required: 'Enter option',
            },
            correct_option_input: {
                required: 'Select correct option',
            },
        },

        errorPlacement: function(error, element) {
            $(element).addClass('error');
            console.log($(element).closest('.form-group'));
            $(element).closest('.form-group').find('.invalid-feedback').html('<strong>'+error.html()+'</strong>');
            console.log($(element).closest('.form-group').html());
        },
        // set this class to error-labels to indicate valid fields
        success: function(label) {
            // set &nbsp; as text for IE
            label.html("&nbsp;").addClass("checked");
        },
        highlight: function(element, errorClass) {
            $(element).parent().next().find("." + errorClass).removeClass("checked");
        },
        unhighlight: function (element) {
            $(element).removeClass('error');
            $(element).closest('.form-group').find('.invalid-feedback').html('');
        }
    });
}











function beforeLoadEveryThingShowLoader()
{
    $(window).on("load", function(){
        $("#custom_page_reloader").fadeOut();
        
        setInterval(function(){
            $(".master_admin_elem").fadeIn();
        }, 500);
    });
}


















function showLoaderBeforeSuccessAjax()
{
    $("body #custom_page_reloader").fadeIn();
    $("body #master_admin_elem").addClass("d-none");
}





function showContentAfterSuccessAjax()
{
    $("body #custom_page_reloader").fadeOut();
    setInterval(function(){
        $("body #master_admin_elem").fadeIn(); 
    }, 500);
     
}













function onClickAddOptionPlusBtn()
{

    $(document).on("click",".add_option_plus_btn",function () 
    {
        questionOptionAddMore();
    });
}






function questionOptionAddMore()
{
    limit = 4;
    var pointer = getOptionBlockLength();
    var content = $('#option-row-1').html();
    $(".options_block").append('<div class="row" id="option-row-'+(pointer+1)+'">'+content+'</div>');
    $('#option-row-'+(pointer + 1)).find('.remove_option_trash_btn').removeClass("d-none");
    $('#option-row-'+(pointer + 1)).find('.option_input').attr("name", "option["+ (pointer) +"]");
    $('#option-row-'+(pointer + 1)).find('.option_input').attr("placeholder", "Enter Option");
    if(pointer+1 == limit)
    {
        $(".add_option_plus_btn").fadeOut();
    }
}





function removeOption()
{
    $(document).on('click', '.remove_option_trash_btn', function(){
        remoeveOptionItem($(this));
    });
}




function remoeveOptionItem(elm)
{
    $(elm).closest('.row').remove();
    refreshOptionCounter(); 
    
}






function refreshOptionCounter()
{
    limit = 4;
    var count = 1;
    $('.options_block .row').each(function()
    {
        count++;
    });
    if(count-1 < limit)
        $('.add_option_plus_btn').fadeIn();
    
}







function getOptionBlockLength()
{
    return $(".options_block .row").length;
}














function disableEnterFromKeyboard()
{
    $('form').bind("keypress", function(e) {
        if (e.keyCode == 13) {               
          e.preventDefault();
          return false;
        }
    });
}











function onClickOptionsBackBtn()
{
    $(document).on("click", ".options_back_btn", function(){
        $("#add_mcq_modal .modal_step").val('1');
        $("#add_mcq_modal .modal_question_section").show();
        $("#add_mcq_modal .modal_options_section").hide();
        $("#add_mcq_modal .modal_correct_option_section").hide();
        $(".next_button_question_modal").html("Next");
    });
}






function onClickCorrectOptionBackBtn()
{
    $(document).on("click", ".correct_option_back_btn", function(){
        $("#add_mcq_modal .modal_step").val('2');
        $("#add_mcq_modal .modal_question_section").hide();
        $("#add_mcq_modal .modal_options_section").show();
        $("#add_mcq_modal .modal_correct_option_section").hide();
        $(".next_button_question_modal").html("Next");
        $("#add_mcq_modal .correct_option_input").val('');
    });
}




































function showTableLoadingSpinner()
{
    $("body .theme_table_main_div").hide();
    $("body .theme_spinner_table_main_div").show();
}




























function hideSpinnerShowTableContent()
{
    $("body .theme_table_main_div").show();
    $("body .theme_spinner_table_main_div").hide();
}




















