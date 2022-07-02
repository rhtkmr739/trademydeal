// $('header').find('#post_your_requirment').on('click',function(){
//     $('.post-requirement-wrap.modal').css('display','block');
//     $('.post-requirement-wrap.modal').find('.reg-overlay').css('display','block');
//     $('.post-requirement-wrap.modal').find('.modal_main').addClass('vis_mr');
// });

// $('header').find('.show-reg-form').on('click',function(){
//     $('#exampleModalCenter').modal('hide')

// });


$('.lead-verification-step-1').on('mouseenter',function(){
    $('.lead-verification-step-1').addClass('active');
}).on('mouseleave',function(){
    $('.lead-verification-step-1').removeClass('active');
});

$('.lead-verification-step-2').on('mouseenter',function(){
    $('.lead-verification-step-1,.lead-verification-step-2').addClass('active');
}).on('mouseleave',function(){
    $('.lead-verification-step-1,.lead-verification-step-2').removeClass('active');
});

$('.lead-verification-step-3').on('mouseenter',function(){
    $('.lead-verification-step-1,.lead-verification-step-2,.lead-verification-step-3').addClass('active');
}).on('mouseleave',function(){
    $('.lead-verification-step-1,.lead-verification-step-2,.lead-verification-step-3').removeClass('active');
});

$('.lead-verification-step-4').on('mouseenter',function(){
    $('.lead-verification-step-1,.lead-verification-step-2,.lead-verification-step-3,.lead-verification-step-4').addClass('active');
}).on('mouseleave',function(){
    $('.lead-verification-step-1,.lead-verification-step-2,.lead-verification-step-3,.lead-verification-step-4').removeClass('active');
});


$('.not-login-link').on('click',function(){
    $('.main-register-wrap.modal').css('display','block');
    $('.main-register-wrap.modal').find('.reg-overlay').css('display','block');
    $('.main-register-wrap.modal').find('.modal_main').addClass('vis_mr');
});


$('.verified-leads-container').on('mouseenter',function(){
    $(this).find('.verified-badge').addClass('animate__heartBeat');
}).on('mouseleave',function(){
    $(this).find('.verified-badge').removeClass('animate__heartBeat');
});

$('.card-media, .time-line-icon').on('mouseenter',function(){
    $(this).addClass('animate__pulse');
}).on('mouseleave',function(){
    $(this).removeClass('animate__pulse');
});


$('.flip-link').on('mouseenter',function(){
    $(this).addClass('animate__flip');
}).on('mouseleave',function(){
    $(this).removeClass('animate__flip');
});


$('.product-search-container,.company-search-container,.search-service-container,.verified-leads-container').on('mouseenter',function(){
    $(this).addClass('animate__pulse');
}).on('mouseleave',function(){
    $(this).removeClass('animate__pulse');
});

$('.post-requirement-show').on('click',function(){
    $("#post-requirement").modal('show');
});
