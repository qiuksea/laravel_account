		    <tr id="account_{{$account->id}}">
		      <td><a href="/accounts/{{ $account-> id }}">{{ $account ->name}} </a>	</td>
		      <td>{{ $account ->tel }}</td>
		      <td>{{ $account ->email }}</td>
		      <td>{{ $account ->notes }}</td>
		      <td>{{ $account ->is_stu }}</td>
		      <td>{{ $account ->created_at -> toFormattedDateString()  }}</td>
		      <td><a href="/accounts/{{ $account-> id }} " class="btn btn-info btn-sm">View</a> |
		      <a href="/accounts/{{ $account-> id }}/edit" class="btn btn-primary btn-sm">Edit</a> |
		      <!--@include ('accounts.partials/delete_form')-->
		      
			  <button class="btn btn-danger btn-sm delete-account" value="{{$account->id}}">Delete</button>
		      </td>
		    </tr>