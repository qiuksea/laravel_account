
<div class="col-md-10">
	<p>Current Status: <strong>{{ Helper::display_status($account->status) }} </strong> </p>
	<hr>
</div>

<div class="col-md-5">

	<form method="POST" action="/accounts/status/{{ $account-> id }}">

	 	{{csrf_field() }} 

		{{ method_field('PATCH') }}

	 	<div class="form-group">
		      <select class="form-control" id="status" name="status">
		          <option value="N"
		           {{ 
		           Helper::display_dropdown_selected('N', old('status'), $account->status)
		                }}

		          > New </option>
				  <option value="P"
				     {{ 
		           Helper::display_dropdown_selected('P', old('status'), $account->status)
		                }}> Pending </option>
				  <option value="A"
				     {{ 
		           Helper::display_dropdown_selected('A', old('status'), $account->status)
		                }}> Await credit check </option>
				  <option value="Y"
				     {{ 
		           Helper::display_dropdown_selected('Y', old('status'), $account->status)
		                }}> Complete </option>
				  <option value="R"
				     {{ 
		           Helper::display_dropdown_selected('R', old('status'), $account->status)
		                }}> Rejected </option>

		      </select>
	  	</div>

	  	<div class="form-group">
		    <button type="submit" class="btn btn-primary">Submit</button>
		</div>

	</form>
</div>

