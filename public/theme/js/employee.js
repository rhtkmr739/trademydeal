$('#name').on('keyup',function(){
    let catalogUrl = $(this).val().replace(/ /g,"-");
    $('#catalogurl').val(catalogUrl);
 });

 $(document).ready(function() {
    $('#categories').select2({
        placeholder: 'Please select bussiness sectors'
      });
      
      $('#countryid').select2({});
      $('#status_code_id').select2();
      $('#customtags').selectize({
        delimiter: ',',
        placeholder:'Please type to create new tags',
        persist: false,
        create: function(input) {
            return {
                value: input,
                text: input
            }
        }
    });

    });

    $(document).ready( function () {
        $('#employee-seller-list').DataTable();
    } );
 
