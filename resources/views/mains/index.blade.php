<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Account</title>
</head>

<body>
<h1>Form</h1>
<ul>
    @foreach ($accounts as $account)
        <li>
            <a href="/mains/{{ $account-> id }}">{{ $account ->name}} 
            </a>
        </li>
    @endforeach 
</ul>
</body>
</html>