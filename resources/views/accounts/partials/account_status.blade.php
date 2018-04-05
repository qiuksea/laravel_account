<div class="card border-primary mb-3">
  <div class="card-header">
    Status: <strong>{{ Helper::display_status($account->status) }} </strong>
  </div>
  <div class="card-body text-primary" style="width: 22rem;">
	<h5 class="card-title">Update Status</h5>
	<div class="card-text">
		<form method="POST" action="/accounts/{{ $account-> id }}/status">

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
		
			<button type="submit" class="btn btn-primary">Submit</button>

		</form>
	</div>
  </div>
</div>

	






