    <!--: start: JS scripts -->
    <script src="/js/uni/script.min.js"></script>
    <!--: end: JS scripts -->

  <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>

  <script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous"></script>
<!--
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>-->


  <script>
        jQuery(document).ready(function() {
            @yield('postJquery');
        });
  </script>

  <!--

 @section('postJquery')
    @parent
    $('#selectAll').on('click',function(){
        if ($(this).is(':checked')) {
            $('.chkbox').each(function(){
                this.checked = true;
            });
        }else{
            $('.chkbox').each(function(){
                this.checked = false;
            });
        }
    });
@endsection
#http://stackoverflow.com/questions/33757236/how-to-use-my-own-jquery-in-laravel-5
-->