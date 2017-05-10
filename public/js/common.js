
   $(document).ready(function(){

        var url = "/accounts";
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        //delete account and remove it from list
        $('.delete-account').click(function(){
            var account_id = $(this).val();

            //delete task and remove it from list  
                $.ajax({
                    url: url + '/' + account_id,//,
                    type: "DELETE",
                    data: {_token: CSRF_TOKEN}//must have data{_token}
              
                })
                .done(function (data) {
                    console.log(data);
                    //alert( "Data Saved: " + msg );
                    $("#account_" + account_id).remove();
                })
                .fail(function(data) {
                    console.log('Error:', data);
                   // alert("Sorry. Server unavailable. ");

                });

         
        });// $('.delete-account').click(function()


        //project over £10,000.00? credit check show/hide
        $("#is_over_10k_yes").click(function(){
            $("#project_credit_check").show("slow");
        });

        $("#is_over_10k_no").click(function(){
            $("#project_credit_check").hide("slow");
        });

        if($('#is_over_10k_yes').is(':checked'))
        {           
            $("#project_credit_check").show();           

        };       
   

      $("#is_student_1").click(function(){

            $("#student_reg_no_input").toggle();

      });

      if($("#is_student_1").is(':checked')){

            $("#student_reg_no_input").show();

      };


      $("#is_subsidiary_1").click(function(){

        $("#subsidiary_info_input").toggle();

      });

      if($("#is_subsidiary_1").is(':checked')){

        $("#subsidiary_info_input").show();

      };


   })//$(document).ready(function()
   