<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>

<body>
 <h2>Customer Account Request Confirmation</h2>
 <p>Thank you for submitting your Customer Account Request.</p><br>
 <p>Please check your details carefully. If you would like to make any amendments to your
    submission, please contact: incomeofficehelp@sheffield.ac.uk.</p><br>
 <p>Your reference is:  {{ $account->id }}. We will try to ensure that your request is dealt with within 48 hours.</p><br>

 <p>Information submitted:</p><br>
 <p>Details:</p><br>
 <p>
    Department: {{ $account-> company_name }} <br>
    Staff Name: {{ $account-> staff_name}} <br>
    Staff Email: {{ $account-> staff_email}} <br>
    Telephone Ext: {{ $account-> staff_tel}} <br>
    Project Value Over 10k: {{ $account-> is_over_10k }} <br>
   
    Is this a Student:  {{ $account-> is_student}} <br>
    Student Registration Number: {{ $account-> student_reg_no}} <br>
   
    Name of Company/Person: {{ $account-> company_name}} <br>
    Address 1: {{ $account-> company_address_1}} <br>
    Town/City: {{ $account-> company_town}} <br>
    Post Code: {{ $account-> company_postcode}} <br>
    Country: {{ $account->company_country_id}} <br>
    Company Registration Number: {{ $account-> company_reg_number}} <br>
    Company Telephone number: {{ $account-> company_telephone }} <br>
    Customers Email Address: {{ $account-> company_email}} <br>
    Company Contact Name: {{ $account-> company_contact_name}} <br>
    Any other relevant information: {{ $account-> company_notes}} <br>
    VAT number: {{ $account-> company_vat_reg_no}} <br>
    Is your customer in the EU?: {{ $account->company_is_eu}} <br>
    Is the customer a charity or eligible body? {{ $account->is_charity_or_eligible_body}} 
 </p>
</body>

</html>                                                                                          