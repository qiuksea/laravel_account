<div class="card border-primary mb-3">
  <div class="card-header">
    <h5>Status: <strong>{{ Helper::display_status($account->status) }} </strong></h5>
  </div>
  <div class="card-body text-primary" style="width: 22rem;">
	<h5 class="card-title">Update Status</h5>
	<div class="card-text">
		<form class="form-inline" method="POST" action="/accounts/{{ $account-> id }}/status">

			{{csrf_field() }} 

			{{ method_field('PATCH') }}

			<div class="form-group mb-2">
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
			<div class="col-auto">
				<button type="submit" class="btn btn-primary mb-2">Submit</button>
			</div>
		</form>

		<div style="margin: 100px"></div>
	</div>
  </div>
</div>

	






