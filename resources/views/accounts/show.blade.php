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
      <td>{{  $account ->staff_name  }}</td>
    </tr>
    <tr>
      <td>Tel: </td>
      <td>{{  $account ->staff_tel  }}</td>
    </tr>
    <tr>
      <td>Email: </td>
      <td>{{  $account ->staff_email  }}</td>
    </tr>
     <tr>
      <td>Notes: </td>
      <td>{{  $account ->company_notes  }}</td>
    </tr>
     <tr>
      <td>Is Student: </td>
      <td>{!! Helper::display_boolean($account -> is_student)!!}</td>
    </tr>
  </tbody>
</table>

<p>
    <a href="/accounts " class="btn btn-info btn-sm">All</a>
    <a href="/accounts/{{ $account-> id }}/edit" class="btn btn-primary btn-sm">Edit</a>
    @include ('accounts.partials/delete_form')
</p>
 		
</div>
@endsection

	        