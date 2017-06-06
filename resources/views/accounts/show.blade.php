@extends ('layouts.master')

@section ('content')

<div class="col-md-10">
  <table class="table table-striped table-bordered">
    <tbody>
      <tr  class="table-info">
        <th colspan="2">Request Details</th>
      </tr>
      <tr>
        <td>Reference:</td>
        <td>{{ $id_ref }}{{ $account-> id }}</td>
      </tr>
      <tr>
        <td>Status:</td>
        <td>{{ Helper::display_status($account -> status) }}</td>
      </tr>
      <tr>
        <td>Creation Date:</td>
        <td>{{  $account ->created_at  }}</td>
      </tr>
      <tr>
        <td>Modified Date:</td>
        <td>{{  $account ->updated_at  }}</td>
      </tr>      
    </tbody>
  </table>
</div>

<div class="col-md-10">
  <table class="table table-striped table-bordered">
    <tr class="table-info">
        <th colspan="2">Staff Details</th>
    </tr>
      <tr>
        <td>Department:</td>
        <td></td>
      </tr>
      <tr>
        <td>Staff Name:</td>
        <td>{{  $account ->staff_name  }}</td>
      </tr>
      <tr>
        <td>Staff Email: </td>
        <td>{{  $account ->staff_email  }}</td>
      </tr>
      <tr>
        <td>Telephone Ext No:</td>
        <td>{{  $account ->staff_tel  }}</td>
      </tr>
      <tr>
        <td>Project value over £10k?</td>
        <td>{{ Helper::display_boolean($account ->is_over_10k) }}</td>
      </tr>
      <tr>
        <td>Credit check performed by:</td>
        <td>{{  $account ->who_credit_check  }}</td>
      </tr>
      
  </table>
</div>

<div class="col-md-10">
  <table class="table table-striped table-bordered">
    <tr class="table-info">
        <th colspan="2">Company Details</th>
    </tr>
    <tr>
        <td>Type of customer:</td>
        <td>{{ $account -> company_type }}</td>
    </tr>
    <tr>
        <td>Is Student: </td>
        <td>{{ Helper::display_boolean($account -> is_student) }}</td>
    </tr>
    <tr>
        <td>Student Registration Number:</td>
        <td>{{ $account -> student_reg_no }}</td>
    </tr>
    <tr>
        <td>Is this customer a University Company or subsidiary?</td>
        <td>{{ Helper::display_boolean($account -> is_subsidiary) }}</td>
    </tr>

    <tr>
        <td>Name of Company/Person:</td>
        <td>{{ $account -> company_name }}</td>
    </tr>

    <tr>
        <td>Address 1:</td>
        <td>{{ $account -> company_address_1}}</td>
    </tr>

    <tr>
        <td>Address 2:</td>
        <td>{{ $account -> company_address_2 }}</td>
    </tr>

    <tr>
        <td>Address 3:</td>
        <td>{{ $account -> company_address_3 }}</td>
    </tr>

    <tr>
        <td>Town/City:</td>
        <td>{{ $account -> company_town }}</td>
    </tr>

    <tr>
        <td>Post Code:</td>
        <td>{{ $account -> company_postcode }}</td>
    </tr>

  

    <tr>
        <td>Company Registration Number:</td>
        <td>{{ $account -> company_reg_number }}</td>
    </tr>

    <tr>
        <td>Company Telephone number:</td>
        <td>{{ $account -> company_telephone }}</td>
    </tr>

    <tr>
        <td>Company Fax number:</td>
        <td>{{ $account -> company_fax }}</td>
    </tr>

    <tr>
        <td>Company Email Address:</td>
        <td>{{ $account -> company_email }}</td>
    </tr>

    <tr>
        <td>Company Contact Name:</td>
        <td>{{ $account -> company_contact_name }}</td>
    </tr>
  
    <tr>
        <td>Any other relevant information:</td>
        <td>{{  $account ->company_notes  }}</td>
    </tr>

    <tr>
        <td>Is your customer in the EU?</td>
        <td>
          {{ Helper::display_boolean($account -> company_is_eu) }} <br>
          {{ $account -> country -> name }}          
        </td>
    </tr>

    <tr>
        <td>VAT number</td>
        <td>{{ $account -> company_vat_reg_no }}</td>
    </tr>

    <tr>
        <td>Is the customer a charity or eligible body?</td>
        <td>
          {{ Helper::display_boolean($account -> is_charity_or_eligible_body) }} <br>
          {{ $account -> company_eligibility}} <br>
          {{ $account -> company_eligibility_other}}          
        </td>
    </tr>

  </table>
</div>

<div class="col-md-10">
  <table class="table table-striped table-bordered">
    <tr class="table-info">
        <th colspan="2">Income Office</th>
    </tr>
  </table>
</div>




<div class="col-md-8">
<p>
    <a href="/accounts " class="btn btn-info btn-sm">All</a>
    <a href="/accounts/{{ $account-> id }}/edit" class="btn btn-primary btn-sm">Edit</a>
    @include ('accounts.partials/delete_form')
</p> 		
</div>
@endsection

	        