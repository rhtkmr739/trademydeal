$(document).ready(function() {
    $('#create-group-section').on('click','#create-group-btn',function(){
        let src = "/admin/create-promotional-group";
        let newGroupName = $("#create-group").val();
        $.ajax({
            url: src,
            dataType: "json",
            method:'post',
            data: {
                "_token": $('meta[name="csrf-token"]').attr('content'),
                newGroupName : newGroupName
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
    });
});

$(document).ready(function() {
    $('.promotional-group-accordion').on('click',function(){
        let currentGroup = $(this);
        let currentGroupId = currentGroup.data('groupid');
       console.log(currentGroupId);
        let src = "/admin/get-promotional-user-by-group-id";
        $.ajax({
            url: src,
            dataType: "json",
            method:'post',
            data: {
                "_token": $('meta[name="csrf-token"]').attr('content'),
                currentGroupId : currentGroupId
            },
            success: function(response) {
                    console.log(response)
            }
        });
    });
});
$(document).ready(function() {
    $('.ckeditor').ckeditor();
 });