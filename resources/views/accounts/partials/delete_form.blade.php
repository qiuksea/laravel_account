<form method="post" action="/accounts/{{ $account-> id }}"> 
  {{ method_field('DELETE') }}
  {{ csrf_field() }} 
  <button type="submit" class="btn btn-danger  btn-sm">Delete</button>
</form>