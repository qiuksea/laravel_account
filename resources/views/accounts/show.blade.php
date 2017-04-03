@extends ('layouts.master')

@section ('content')

<div class="col-md-8 blog-main">
<table class="table table-striped table-bordered">
  <tbody>
    <tr  class="table-info">
      <th>Detail</th>
      <th></th>
    </tr>
    <tr>
      <td>Name</td>
      <td>{{  $account ->name  }}</td>
    </tr>
    <tr>
      <td>Tel: </td>
      <td>{{  $account ->tel  }}</td>
    </tr>
    <tr>
      <td>Email: </td>
      <td>{{  $account ->email  }}</td>
    </tr>
  </tbody>
</table>
 		
</div>
@endsection

	        