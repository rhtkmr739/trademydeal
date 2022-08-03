$(document).ready(function () {
    $('.mail-otp-section').on('click', '.validate-mail-otp', function () {
        let currentElement = $(this);
        let src = "/admin/send-mail-otp";
        $.ajax({
            url: src,
            dataType: "json",
            method: 'post',
            data: {
                "_token": $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                if (response.success) {
                    currentElement.parent().html(response.data)
                } else {
                    swal({
                        title: " Oops!",
                        text: response.data,
                        icon: "error",
                        button: "close",
                    });
                }

            },
            error: function (request, status, error) {
                swal({
                    title: " Oops!",
                    text: " Something went wrong, Please try again later!",
                    icon: "error",
                    button: "close",
                });
            }
        });
    });

    $('.mail-otp-section').on('click', '.verify-mail-otp', function () {
        let currentElement = $(this);
        let otpId = currentElement.parent().find('.otp-id-input').val();
        let otpCode = currentElement.parent().find('.mail-otp-input').val();
        let src = "/admin/verify-mail-otp";
        $.ajax({
            url: src,
            dataType: "json",
            method: 'post',
            data: {
                "_token": $('meta[name="csrf-token"]').attr('content'),
                "otpId":otpId,
                "otpCode":otpCode

            },
            success: function (response) {
                if (response.success) {
                    currentElement.parent().html(response.data)
                } else {
                    swal({
                        title: " Oops!",
                        text: response.data,
                        icon: "error",
                        button: "close",
                    });
                }   

            },
            error: function (request, status, error) {
                swal({
                    title: " Oops!",
                    text: " Something went wrong, Please try again later!",
                    icon: "error",
                    button: "close",
                });
            }
        });
    });
    
    $('.mail-otp-section').on('click', '.send-verified-mail', function () {
        let currentElement = $(this);
        let currentMailSection = currentElement.closest('.accordion-inner');
        let groupId = currentMailSection.attr('data-groupid');
        let getMailData = CKEDITOR.instances['mail-content-'+groupId].getData();
        console.log(getMailData);
        let src = "/admin/send-verified-mail";
        $.ajax({
            url: src,
            dataType: "json",
            method: 'post',
            data: {
                "_token": $('meta[name="csrf-token"]').attr('content'),
                "getMailData":getMailData,
                "groupId":groupId
            },
            success: function (response) {

                if (response.success) {
                    swal(response.data, {
                        buttons: false,
                        icon: "success",
                        timer: 2000,
                      }).then(function(){ 
                        location.reload();
                        }
                     );
                     
                } else {
                    swal({
                        title: " Oops!",
                        text: response.data,
                        icon: "error",
                        button: "close",
                    });
                }

            },
            error: function (request, status, error) {
                swal({
                    title: " Oops!",
                    text: " Something went wrong, Please try again later!",
                    icon: "error",
                    button: "close",
                });
            }
        });
    });

    

});



