$('#product_name').on('keyup',function(){
   let productUrl = $(this).val().replace(/ /g,"-");
   $('#product_url').val(productUrl);
});

$(document).ready(function() {
    $('#category').select2();
    $('#subcategory').select2();
    $('#subsubcategory').select2();
});

$(document).ready(function() {
    $('#category').on('change',function(){
        $("#subcategory").empty().trigger("change");
        let src = "/seller/getIndustries";
        $.ajax({
            url: src,
            dataType: "json",
            method:'post',
            data: {
                "_token": $('meta[name="csrf-token"]').attr('content'),
                categoryId : $('#category').val()
            },
            success: function(response) {
                let responseString = JSON.stringify(response);
                let responseArr = $.parseJSON(responseString);
                let subCategoryData = [];
                responseArr.forEach(element => {
                    subCategoryData.push({
                        id: element.category_id,
                        text: element.category_name
                    })
                });
                console.log(responseArr);
                $("#subcategory").select2({
                    data: subCategoryData
                })

            }
        });
    });
});


$(document).ready(function() {
    $('#subcategory').on('change',function(){
        $("#subsubcategory").empty().trigger("change");
        let src = "/seller/getMarkets";
        $.ajax({
            url: src,
            dataType: "json",
            method:'post',
            data: {
                "_token": $('meta[name="csrf-token"]').attr('content'),
                categoryId : $('#subcategory').val()
            },
            success: function(response) {
                let responseString = JSON.stringify(response);
                let responseArr = $.parseJSON(responseString);
                let subsubCategoryData = [];
                responseArr.forEach(element => {
                    subsubCategoryData.push({
                        id: element.category_id,
                        text: element.category_name
                    })
                });
                console.log(responseArr);
                $("#subsubcategory").select2({
                    data: subsubCategoryData
                })

            }
        });
    });
});


$(document).ready(function() {
    $('#copy-seller-info').on('change',function(){
        console.log($(this).val());
        if($(this).val() == 'on'){
            $(this).val('off');
        }else{
            $(this).val('on');
        }
        if($(this).val() == 'on'){
            $('#mobile').val('');
            $('#address').val('');
            $('#email').val('');
            $('#city').val('');
            $('#state').val('');
            $('#pincode').val('');
        }else{
            src = "/seller/getCurrentSellerDetails";
            $.ajax({
                url: src,
                dataType: "json",
                method:'post',
                data: {
                    "_token": $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    console.log(response);
                    if(response.reponseStatus){
                        console.log(response.responseData[0].user_company_email);
                        $('#mobile').val(response.responseData[0].user_company_mobile);
                        $('#address').val(response.responseData[0].user_company_address);
                        $('#email').val(response.responseData[0].user_company_email);
                        $('#city').val(response.responseData[0].user_company_city);
                        $('#state').val(response.responseData[0].user_company_state);
                        $('#pincode').val(response.responseData[0].user_company_zipcode);
                    }else{
                        toastr.error(response.responseData);
                    }
    
                }
            });
        }
        
    });
});

$(document).ready(function() {
    $('#seller-verified-lead-list').on('click','.purchase-lead-btn',function(){
        let src = "/seller/purchase-lead";
        let leadId = $(this).attr('id');
        let noteMessage = "As per your current subscription plan your lead purchasing limit is "+$("#max-lead-purchase-limit").text()+" in which you have already used "+$("#current-lead-purchase-count").text()+" and remaining lead you can purchase is "+$("#remaining-lead-purchase-count").text()+" after purchasing selected lead then will get deduct by 1 from remaining leads limit."
        leadId = leadId.split('-');
        if(!leadId[1]){
            console.log('lead id is not valid');
            return;
        }else{
          
            swal({
                title: "Are you sure?",
                text: noteMessage,
                icon: "warning",
                buttons: true,
                dangerMode: true,
                buttons: ["Cancel", "Proceed to purchase"],
              })
              .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        url: src,
                        dataType: "json",
                        method:'post',
                        data: {
                            "_token": $('meta[name="csrf-token"]').attr('content'),
                            leadId : leadId[1]
                        },
                        success: function(response) {
                            if(response.responseStatus){
                                swal(response.responseData, {
                                    icon: "success",
                                  });
                                  window.location.reload();
                            }else{
                                swal(response.responseData, {
                                    icon: "error",
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

                  
                }
              });
              
        }
        
        
    });
});

$(document).ready(function() {
    $('#load-more-verified-lead-btn,#search-verified-lead-btn').on('click',function(){
        let currentElement = $(this);
        let currentElementId = currentElement.attr('id');
        let searchText = $("#search-verified-lead-text").val().trim();
        let page = parseInt($("#load-more-verified-lead-btn").attr('data-page').trim());
        let limit = parseInt($("#load-more-verified-lead-btn").attr('data-limit').trim());
        console.log(searchText,'searchText',page,'page',limit,'limit')
        if(currentElementId == 'load-more-verified-lead-btn'){
            currentElement.find('i').removeClass('fa-arrow-down');
            currentElement.find('i').addClass('fa-spinner rotate'); 

        }else if(currentElementId == 'search-verified-lead-btn'){
            page = 0;
            currentElement.find('i').removeClass('fa-search');
            currentElement.find('i').addClass('fa-spinner rotate'); 
        }
       
        let src = "/seller/search-load-more-seller-verified-lead";
        $.ajax({
            url: src,
            dataType: "json",
            method:'post',
            data: {
                "_token": $('meta[name="csrf-token"]').attr('content'),
                searchText : searchText,
                offset : (page) * limit,
                limit : limit
            },
            success: function(response) {
               
                if(currentElementId == 'load-more-verified-lead-btn'){
                    console.log(response)
                    $('#seller-verified-lead-list').append(response.html);
                    currentElement.find('i').removeClass('fa-spinner rotate'); 
                    currentElement.find('i').addClass('fa-arrow-down'); 
                    $("#load-more-verified-lead-btn").attr('data-page',page+1);
                }else if(currentElementId == 'search-verified-lead-btn'){
                    $('#seller-verified-lead-list').html(response.html);
                    currentElement.find('i').removeClass('fa-spinner rotate'); 
                    currentElement.find('i').addClass('fa-search'); 
                    $("#load-more-verified-lead-btn").attr('data-page',page+1);
                }

                if(response.loadMoreEnable){
                    $("#load-more-verified-lead-btn").removeClass('hide');  
                }else{
                    $("#load-more-verified-lead-btn").addClass('hide');  
                }

            }
        });
    });
});

/*Added By Shankar */
$(document).ready(function() {
    $('#load-more-purchased-lead-btn,#search-purchased-lead-btn').on('click',function(){
        let currentElement = $(this);
        let currentElementId = currentElement.attr('id');
        let searchText = $("#search-purchased-lead-text").val().trim(); 
        let page = parseInt($("#load-more-purchased-lead-btn").attr('data-page').trim());
        let limit = parseInt($("#load-more-purchased-lead-btn").attr('data-limit').trim());
        console.log(searchText,'searchText',page,'page',limit,'limit')
        if(currentElementId == 'load-more-purchased-lead-btn'){
            currentElement.find('i').removeClass('fa-arrow-down');
            currentElement.find('i').addClass('fa-spinner rotate'); 

        }else if(currentElementId == 'search-purchased-lead-btn'){
            page = 0;
            currentElement.find('i').removeClass('fa-search');
            currentElement.find('i').addClass('fa-spinner rotate'); 
        }
       
        let src = "/seller/search-load-more-seller-purchased-lead";
        $.ajax({
            url: src,
            dataType: "json",
            method:'post',
            data: {
                "_token": $('meta[name="csrf-token"]').attr('content'),
                searchText : searchText,
                offset : (page) * limit,
                limit : limit
            },
            success: function(response) {
               
                if(currentElementId == 'load-more-purchased-lead-btn'){
                    console.log(response)
                    $('#seller-purchased-lead-list').append(response.html);
                    currentElement.find('i').removeClass('fa-spinner rotate'); 
                    currentElement.find('i').addClass('fa-arrow-down'); 
                    $("#load-more-purchased-lead-btn").attr('data-page',page+1);
                }else if(currentElementId == 'search-purchased-lead-btn'){
                    $('#seller-purchased-lead-list').html(response.html);
                    currentElement.find('i').removeClass('fa-spinner rotate'); 
                    currentElement.find('i').addClass('fa-search'); 
                    $("#load-more-purchased-lead-btn").attr('data-page',page+1);
                }

                if(response.loadMoreEnable){
                    $("#load-more-purchased-lead-btn").removeClass('hide');  
                }else{
                    $("#load-more-purchased-lead-btn").addClass('hide');  
                }

            }
        });
    });
});


$(document).ready(function() {
    $('#seller-purchased-lead-list').on('click','.view-lead-btn',function(){
       let src = "/seller/view-purchased-lead-details";
       let leadId = $(this).attr('id');
       leadId = leadId.split('-');
       if(!leadId[1]){
        alert('Lead is not valid');
       }else{
            $.ajax({
                url: src,
                dataType: "json",
                method: 'post',
                data: {
                    "_token": $('meta[name="csrf-token"]').attr('content'),
                    leadId : leadId[1]
                },
                success:function(response){
                    alert(response);
                }
            });
       }
    });
});

//JQuery Code for password and confirm password in seller Change Password module
$(document).ready(function(){
    $('#change-seller-password').on('click',function(event){
        event.preventDefault();
        let currentPassword = $('#current_password').val();
        let newPassword     = $('#new_password').val();
        let confirmPassword = $('#conf_new_password').val();
        let src = "/seller/changePassword";

        if(newPassword != confirmPassword){
            swal({
                title: "Oops!",
                text:  "Password and confirm password does not matched",
                icon:   "error",
                button: "ok"
            });
        }else{
            $.ajax({
                url: src,
                method: "POST",
                data:{
                    "_token": $('meta[name="csrf-token"]').attr('content'),
                    currentPassword: currentPassword,
                    newPassword: newPassword
                },
                success:function(response){
                    if(response.responseStatus){
                        swal(response.responseData, {
                            icon: "success",
                          });
                    }else{
                        swal(response.responseData, {
                            icon: "error",
                          });
                    }
                }
            });
        }
        
    });
});

//JQuery Code for seller edit profile module
$(document).ready(function(){
    $('#editSellerProfileBtn').on('click',function(event){
        event.preventDefault();
        let sellerMobile    = $('#sellerMobile').val();
        let sellerAddress   = $('#sellerAddress').val();        
        let sellerCity      = $('#sellerCity').val();
        let sellerState     = $('#sellerState').val();
        
        let sellerPincode   = $('#sellerPincode').val();
        let sellerWebsite   = $('#sellerWebsite').val();
        let src             = "/seller/editSellerProfile";

        //Check Validations 
        if(sellerMobile == ""){
            $('.sellerMobileError').html("Please enter mobile number");
            $('#sellerMobile').focus();
            return false;       
        }
        
        if($.trim(sellerAddress) == ""){
            $('.allErrors').html("");
            $('.sellerAddressError').html("Please enter your address");
            $('#sellerAddress').focus();
            return false;
        }

        if(sellerCity == ""){
            $('.allErrors').html("");
            $('.sellerCityError').html("Please enter your city" );
            $('#sellerCity').focus();
            return false;
        }

        if(sellerState == ""){
            $('.allErrors').html("");
            $('.sellerStateError').html("Please enter your state");
            $('#sellerState').focus();
            return false;
        }

        if(sellerPincode == ""){
            $('.allErrors').html("");
            $('.sellerPincodeError').html("Please enter your pincode");
            $('#sellerPincode').focus();
            return false;
        }

        if(sellerWebsite == ""){
            $('.allErrors').html("");
            $('.sellerWebsiteError').html("Please enter your website");
            $('#sellerWebsite').focus();
            return false;
        }

        $.ajax({
            url: src,
            method: "POST",
            data:{
                "_token": $('meta[name="csrf-token"]').attr('content'),
                sellerMobile:   sellerMobile,
                sellerAddress:  sellerAddress,
                sellerCity:     sellerCity,
                sellerState:    sellerState,
                sellerPincode:  sellerPincode,
                sellerWebsite:  sellerWebsite,
            },
            success:function(response){
                if(response.responseStatus){
                    swal(response.responseData, {
                        icon: "success",
                      });
                }else{
                    swal(response.responseData, {
                        icon: "error",
                      });
                }
            }
        });

    });
});
