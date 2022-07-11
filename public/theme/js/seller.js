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
    $('.purchase-lead-btn').on('click',function(){
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
                            if(response.reponseStatus){
                                swal(response.responseData.response, {
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