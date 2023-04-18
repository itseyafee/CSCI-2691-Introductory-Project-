<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Blade" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<?php

    // $dbhost = "127.0.0.1";
    // $dbuser = "root";
    // $dbpass = "root";
    // $db = "x691";
    // $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

    // if(!empty($_POST['email']) && !empty($_POST['password'])){

    // $conn-> open();


    // $email = $_POST['email'];
    // $password = $_POST['password'];
    // $sql = "SELECT email FROM accounts WHERE email LIKE $email";

    // if ($conn->query($sql) === TRUE) {
    //     echo "New record created successfully";
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }
// }
?>
@include('main-elements.navbar.navbar', ['mode' => 'user'])
<div class="text-center flex justify-center py-20">
    <form action="" class="w-80">
        <div id="logo" class="justify-center">
            <img class="w-60" src="{{url('/images/logo.png')}}" alt="logo"/>
        </div>
        <div class="py-8">
            <div class="text-4xl pb-4">Login to your account</div>
            <div class="text-sm">If you are one of our clients, your account information has been sent to your email by the course instructor.</div>
        </div>
        <!-- Email input -->
        <div class="mb-6">
            <input
                type="email"
                class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-green-600 focus:outline-none"
                id="email"
                placeholder="Email address"
            />
        </div>

        <!-- Password input -->
        <div class="mb-6">
            <input
                type="password"
                class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-green-600 focus:outline-none"
                id="password"
                placeholder="Password"
            />
        </div>
        <a class="hover:underline text-gray-500" onclick="location.href='{{ url('forget_pwd') }}'">Forgot password?</a>
        <br><br>
        <button
            type="button"
            class="inline-block px-7 py-3 w-full bg-emerald-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-emerald-700 hover:shadow-lg focus:bg-emerald-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-emerald-800 active:shadow-lg transition duration-150 ease-in-out"
        >
            Login
        </button>
    </p>
    </form>

</div>
</body>
</html>
