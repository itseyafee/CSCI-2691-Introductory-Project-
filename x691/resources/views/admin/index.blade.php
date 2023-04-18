<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
<div class="mx-8">
    @include('main-elements.navbar.navbar')

    <!-- [ADMIN NAME] should be replaced with the logged in admin user's name -->
    <h1 class="text-4xl mb-10">WELCOME, [ADMIN NAME]</h1>

    <div class="flex max-md:flex-col">
        <div class="left w-3/6 text-center m-6 max-md:w-auto">
            <!-- Client management list -->
            <h2 class="text-3xl mb-5">Client List</h2>
            @include('admin-elements.dashboard.client-manager')
        </div>
        <div class="right w-3/6 text-center m-6 max-md:w-auto">
            <!-- Client creation form -->
            <h2 class="text-3xl mb-5">Create New Client</h2>
            <form class="w-full ml-0 mb-6">
                <label for="client-email">Client email: </label>
                <input type="text" name="client-email" id="client-email">
                <label for="client-name">Client name: </label>
                <input type="text" name="client-name" id="client-name">
                <button class="bg-gray-500 hover:bg-gray-700 text-white py-2 px-4 rounded-full close-modal mt-5">ADD CLIENT</button>
            </form>

            <hr>

            <!-- Link to edit the home page project highlights -->
            <a href="/admin/highlights">
                <button class="bg-yellow-500 hover:bg-yellow-700 text-white py-2 px-4 rounded-full close-modal mt-5">EDIT PROJECT HIGHLIGHTS</button>
            </a>

            <!-- Link to edit the client testimonials -->
            <a href="/admin/testimonials">
                <button class="bg-yellow-500 hover:bg-yellow-700 text-white py-2 px-4 rounded-full close-modal mt-5">EDIT CLIENT TESTIMONIALS</button>
            </a>

        </div>
    </div>

    <div id="modal-bg"></div>

    <!-- Delete project modal -->
    <div class="modal-container" id="modal-delete">
        <div class="modal text-center flex items-center justify-center flex-col">
            <p>Are you sure you would like to delete this client?</p>
            <div class="mt-4">
                <button class="bg-gray-500 hover:bg-gray-700 text-white py-2 px-4 rounded-full close-modal">CANCEL</button>
                <button class="bg-red-500 hover:bg-red-700 text-white py-2 px-4 rounded-full">DELETE</button>
            </div>
        </div>
    </div>

    @include('main-elements.footer.footer')
</div>
</body>
</html>
