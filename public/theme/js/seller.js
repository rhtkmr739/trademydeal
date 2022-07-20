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

