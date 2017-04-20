		    <tr>
		      <td><a href="/accounts/{{ $account-> id }}">{{ $account ->name}} </a>	</td>
		      <td>{{ $account ->tel }}</td>
		      <td>{{ $account ->email }}</td>
		      <td>{{ $account ->notes }}</td>
		      <td>{{ $account ->is_stu }}</td>
		      <td>{{ $account ->created_at -> toFormattedDateString()  }}</td>
		      <td><a href="/accounts/{{ $account-> id }} " class="btn btn-info btn-sm">View</a> |
		      <a href="/accounts/{{ $account-> id }}/edit" class="btn btn-primary btn-sm">Edit</a> |
		      <a href="/accounts/{{ $account-> id }}" method= "delete" class="btn btn-danger btn-sm">Delete</a>
		      </td>
		    </tr>
	



