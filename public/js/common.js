
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




   })//$(document).ready(function()
   