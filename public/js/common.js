
   $(document).ready(function(){

        var url = "/accounts";

        //https://stackoverflow.com/questions/32738763/laravel-csrf-token-mismatch-for-ajax-post-request

        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
       
        //delete account and remove it from list
        $('.delete-account').click(function(){
          
            var account_id = $(this).val();
       
            //alert("hi  " + CSRF_TOKEN);

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
            $("#who_credit_check").val("");
        });

        if($('#is_over_10k_yes').is(':checked'))
        {           
            $("#project_credit_check").show();           

        };       
   

      $("#is_student_1").click(function(){

            $("#student_reg_no_input").toggle(); 
            
            if($("#is_student_1").is(':checked')){

               $("#student_reg_no_input").show();
             
               $("#is_subsidiary_1").prop("checked", false);

               $("#subsidiary_info").val("");

               $("#subsidiary_info_input").hide();

            };     

      });


      if($("#is_student_1").is(':checked')){

            $("#student_reg_no_input").show();

      };     


      $("#is_subsidiary_1").click(function(){


          $("#subsidiary_info_input").toggle();

          if($("#is_subsidiary_1").is(':checked')){

            $("#subsidiary_info_input").show();

            $("#is_student_1").prop("checked", false);

            $("#student_reg_no").val("");

            $("#student_reg_no_input").hide();

          };

      });

      if($("#is_subsidiary_1").is(':checked')){

          $("#subsidiary_info_input").show();        
 
      };


     $('#company_is_eu_1').click(function(){

        $('#eu_country_selection').toggle();

        $('#non_eu_country_selection').toggle();

      });

        //https://stackoverflow.com/questions/1857781/best-way-to-unselect-a-select-in-jquery
        //https://stackoverflow.com/questions/39245967/how-to-unselect-options-in-select-using-jquery

      if($('#company_is_eu_1').is(':checked')){

            $('#eu_country_selection').show();
            $('#non_eu_country_selection').hide();
            //$("#company_non_eu_country_id option:selected").prop('selected', false);

      } else {

            $('#eu_country_selection').hide();
            $('#non_eu_country_selection').show();
            $("#company_vat_reg_no").val("");
            //$("#company_eu_country_id option:selected").prop('selected', false);

      };

      $('#is_charity_or_eligible_body_1').click(function(){
        
        $('#charity_eligible_body_selection').toggle();          

        if ( $('#is_charity_or_eligible_body_1').is(':checked') === false ) {

          $( "input[type=radio][name=company_eligibility]:checked" ).prop('checked', false);
        }        

      });



      if($('#is_charity_or_eligible_body_1').is(':checked')){

          $('#charity_eligible_body_selection').show();

        } else {

          //$( "input[type=radio][name=company_eligibility]:checked" ).prop('checked', false);

      }

 


   })//$(document).ready(function()
   