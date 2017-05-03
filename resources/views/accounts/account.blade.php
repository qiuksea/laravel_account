		    <tr id="account_{{$account->id}}">
		      <td><a href="/accounts/{{ $account-> id }}">{{ $account ->staff_name}} </a></td>
		      <td>{{ $account ->staff_tel }}</td>
		      <td>{{ $account ->staff_email }}</td>
		      <td>{{ $account ->company_notes }}</td>
		      <td>{{ $account ->is_student }}</td>
		      <td>{{ $account ->created_at -> toFormattedDateString()  }}</td>
		      <td><a href="/accounts/{{ $account-> id }} " class="btn btn-info btn-sm">View</a> |
		      <a href="/accounts/{{ $account-> id }}/edit" class="btn btn-primary btn-sm">Edit</a> |
		      <!--@include ('accounts.partials/delete_form')-->
		      
			  <button class="btn btn-danger btn-sm delete-account" value="{{$account->id}}">Delete</button>
		      </td>
		    </tr>