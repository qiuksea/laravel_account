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
     <tr>
      <td>Notes: </td>
      <td>{{  $account ->notes  }}</td>
    </tr>
     <tr>
      <td>Is Student: </td>
      <td>{{  $account ->is_stu }}</td>
    </tr>
  </tbody>
</table>

<p>
    <a href="/accounts " class="btn btn-info btn-sm">All</a>
    <a href="/accounts/{{ $account-> id }}/edit" class="btn btn-primary btn-sm">Edit</a>
    <a href="/accounts/{{ $account-> id }}" method= "delete" class="btn btn-danger btn-sm">Delete</a>
</p>
 		
</div>
@endsection

	        