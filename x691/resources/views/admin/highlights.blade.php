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
    @include('admin-elements.project-highlights.project-highlights')

    <div id="modal-bg"></div>

    <!-- Delete project modal -->
    <div class="modal-container" id="modal-delete">
        <div class="modal text-center flex items-center justify-center flex-col">
            <p>Are you sure you would like to delete this project?</p>
            <div class="mt-4">
                <button class="bg-gray-500 hover:bg-gray-700 text-white py-2 px-4 rounded-full close-modal">CANCEL</button>
                <button class="bg-red-500 hover:bg-red-700 text-white py-2 px-4 rounded-full">DELETE</button>
            </div>
        </div>
    </div>

    <!-- Add project modal -->
    <div class="modal-container" id="modal-project">
        <div class="modal text-center flex items-center justify-center flex-col">
            <h2 class="text-2xl mb-4">Project Highlight</h2>
            <form action="" method="">
                <input type="text" name="name" placeholder="Project Name" class="border text-center text-lg mb-3">
                <div class="text-center border p-4 mb-2">
                    <label for="new-image" class="block mb-2">Upload an image:</label>
                    <input type="file" name="image" id="new-image">
                </div>
                <div class="border mb-2">
                    <textarea name="project-details" class="w-full text-center" placeholder="Project Details"></textarea>
                </div>
                <div class="border mb-2">
                    <textarea name="project-testimonial" class="w-full text-center" placeholder="Client Testimonial"></textarea>
                </div>
                <button class="bg-gray-500 hover:bg-gray-700 text-white py-2 px-4 rounded-full close-modal">CANCEL</button>
                <input type="submit" class="bg-gray-500 hover:bg-gray-700 text-white py-2 px-4 rounded-full cursor-pointer" value="CREATE">
            </form>
        </div>
    </div>

    @include('main-elements.footer.footer')
</div>
</body>
</html>
