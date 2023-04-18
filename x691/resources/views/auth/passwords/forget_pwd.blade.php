<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Blade" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="text-center flex justify-center py-20">
    <form action="POST" action="/forget_pwd" class="w-80">
        <div id="logo" class="justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="-8 0 24 24" stroke-width="1.5"
                 stroke="currentColor" class="w-11 h-11">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M21 7.5l-2.25-1.313M21 7.5v2.25m0-2.25l-2.25 1.313M3 7.5l2.25-1.313M3 7.5l2.25 1.313M3 7.5v2.25m9 3l2.25-1.313M12 12.75l-2.25-1.313M12 12.75V15m0 6.75l2.25-1.313M12 21.75V19.5m0 2.25l-2.25-1.313m0-16.875L12 2.25l2.25 1.313M21 14.25v2.25l-2.25 1.313m-13.5 0L3 16.5v-2.25"/>
            </svg>
            <span class="font-semibold text-2xl">X691</span>
        </div>
        <div class="py-8">
            <div class="text-2xl">Forgot Password</div>
            <div class="text-l">We will send you an email with instructions on how to reset your password.
            </div>
        </div>
        <!-- Email input -->
        <div class="mb-6">
            <input
                type="email"
                class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-green-600 focus:outline-none"
                id="email"
                placeholder="Email address"
                required
                pattern="^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$"
            />
        </div>
        <br><br>
        <button
            type="submit"
            id="submitBtn"
            class="inline-block px-7 py-3 bg-emerald-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-emerald-700 hover:shadow-lg focus:bg-emerald-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-emerald-800 active:shadow-lg transition duration-150 ease-in-out"
        >
            Email Me
        </button>
    </form>

</div>
</body>
</html>
