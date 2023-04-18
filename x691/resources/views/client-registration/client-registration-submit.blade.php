<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>X691</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="mx-8">
        @include('main-elements.navbar.navbar')
        @include('client-registration.client-registration-description')
        <div class="p-5">
            <svg class="text-green-500 stroke-2 m-auto h-24 w-24" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>

            <p class="text-2xl font-bold">Thank you for submitting your request for proposal!</p>
            <p class="text-xl text-left">The current instructor of the project courses will reach out to you in the next few weeks to discuss your project further and to determine when we can fit your proposal into the course. In the meantime, if you have any further questions about the course or your proposal please email: <a class="text-blue-600 hover:underline" href="mailto:fcsproj@dal.ca">fcsproj@dal.ca</a>.
            </p>
            <br>
            <br>

        </div>
    </div>
</body>

</html>
