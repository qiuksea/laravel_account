@extends ('layouts.uni')

@section ('content')

<div class="col-md-10">

    <ul class="nav nav-pills justify-content-end">

      <li class="nav-item">
        <a class="nav-link btn btn-info" href="/accounts/{{ $account-> id }}/edit">Edit</a>
      </li>
    </ul>


    <ul class="nav nav-tabs" id="recordTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#view" role="tab" aria-controls="view">View</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#notes" role="tab" ria-controls="notes">Notes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#status" role="tab" aria-controls="status">Status</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#log" role="tab" ria-controls="log">Log</a>
      </li>
    </ul>

    <div class="tab-content">
    
      <div class="tab-pane active" id="view" role="tabpanel">
          @include ('accounts.partials/account_view')       
      </div>

      <div class="tab-pane" id="notes" role="tabpanel">
          @include ('accounts.partials/account_notes')
      </div>

      <div class="tab-pane" id="status" role="tabpanel">
          @include ('accounts.partials/account_status')        
      </div>

      <div class="tab-pane" id="log" role="tabpanel">
          @include ('accounts.partials/account_logs') 
      </div>

    </div>

    
@endsection

	        