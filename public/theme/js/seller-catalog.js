$('#name').on('keyup',function(){
    let catalogUrl = $(this).val().replace(/ /g,"-");
    $('#catalogurl').val(catalogUrl);
 });