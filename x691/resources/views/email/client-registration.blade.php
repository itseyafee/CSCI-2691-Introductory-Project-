<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Client Registration Form Submission</title>
</head>
<body>
    <p>Name: {{$contactName}}</p>
    <p>Organization: {{$organization}}</p>
    <p>Email: {{$email}}</p>
    <p>Phone Number: {{$phoneNumber}}</p>
    <p>Problem Background: {{$problemBackground}}</p>
    <p>Confidentiality Needed: {{$confidentialityCheckbox == true}}</p>
    <p>Set Budeget: {{$budgetCheckbox == true}}</p>
    <p>Budget Amount: {{$budget}}</p>
    <p>Willing to Meet Students: {{$meetStudentsCheckbox == true}}</p>
    <p>Willing to Assist Testing: {{$assistTestCheckbox == true}}</p>
</body>
</html>
