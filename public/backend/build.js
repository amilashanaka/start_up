(function ($) {


    $('.textarea').summernote({
      height: 350,
    });

    $('#keywords').selectize({
        plugins: ['remove_button'],
        delimiter: ',',
        persist: false,
        create: function(input) {
            return {
                value: input,
                text: input
            }
        }
    });

    $('#keywords_sub').selectize({
        plugins: ['remove_button'],
        delimiter: ',',
        persist: false,
        create: function(input) {
            return {
                value: input,
                text: input
            }
        }
    });

 	$('.select2').select2();

    $("#example1").DataTable();


    $("#order_tbl").DataTable({
        "order": [[ 0, "desc" ]],
        "bFilter": false
    });

    $('.datepicker').datepicker({
        // minDate: 0,
        dateFormat: 'yy-mm-dd'
    });

    $('.datepicker-reports').datepicker({
        dateFormat: 'yy-mm-dd'
    });

    $('#reporting').dataTable({
      dom: 'Bfrtip',
      buttons: [
           'excel', 'pdf', 'print'
      ]
    });
     
    $("#logout-click").on("click", function(){
      alertify.confirm("Are you sure you want to Logout?",
            function(){
                document.getElementById('logout-form').submit();
          });
    });



    $("#user_id_update").on("change", function(){
        $.LoadingOverlay("show");

        var id = $(this).val();
        obj=JSON.parse($("#all_orders").val());

        var itemSelect = document.getElementById("order_id_update");
        document.getElementById('order_id_update').options.length = 0;

        var option = document.createElement("option");
        option.text = "Select an Order";
        option.value = "";
        itemSelect.add(option);

        $.each(obj, function (key, value) {
          if(value.user_id == id){
            option = document.createElement("option");
            option.text =  'amount - '+value.amount+'('+value.created_at+')';
            option.value = value.id;
            itemSelect.add(option);
          }
        });

        $.LoadingOverlay("hide");


    });

    






     // item images preview

    $("#img").change(function() {
      if (this.files) {
        var files = event.target.files;
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#image_preview').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
      }
    });
    
    $("#img_2").change(function() {
      if (this.files) {
        var files = event.target.files;
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#image_preview_2').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
      }
    });

    $("#img_3").change(function() {
      if (this.files) {
        var files = event.target.files;
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#image_preview_3').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
      }
    });

    $("#img_4").change(function() {
      if (this.files) {
        var files = event.target.files;
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#image_preview_4').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
      }
    });

    $("#img_5").change(function() {
      if (this.files) {
        var files = event.target.files;
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#image_preview_5').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
      }
    });

    $("#img_6").change(function() {
      if (this.files) {
        var files = event.target.files;
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#image_preview_6').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
      }
    });

    $("#img_7").change(function() {
      if (this.files) {
        var files = event.target.files;
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#image_preview_7').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
      }
    });

    $("#img_8").change(function() {
      if (this.files) {
        var files = event.target.files;
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#image_preview_8').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
      }
    });




    



    
})(jQuery); 