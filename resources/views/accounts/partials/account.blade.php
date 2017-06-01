		    <tr id="account_{{$account->id}}">
		    	 <td>
		    	 {{ Config::get('constants.AppConstants.PAG_SHOW') }}
		    		<a href="/accounts/{{ $account-> id }}"> 
		    		{{ $id_ref }}
		    		{{ $account ->id}} </a>
		    	 </td>
			     <td>{{ $account ->staff_name}} </td>
			     <td>{{ $account ->company_name }}</td>
			      <!--<td>{!! Helper::display_boolean($account ->is_student) !!}</td>-->
			     <td>{{ $account ->created_at -> toFormattedDateString()  }}</td>
			     <td>{{ Helper::display_status($account -> status) }}</td>
			     <td><a href="/accounts/{{ $account-> id }} " class="btn btn-info btn-sm">View</a> |
			     <a href="/accounts/{{ $account-> id }}/edit" class="btn btn-primary btn-sm">Edit</a> |
			      <!--@include ('accounts.partials/delete_form')-->
			      
				 <button class="btn btn-danger btn-sm delete-account" value="{{$account->id}}">Delete</button>
			     </td>
		    </tr>