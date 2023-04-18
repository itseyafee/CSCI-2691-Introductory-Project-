<?php
// Connect to the database
$dbhost = "127.0.0.1";
 $dbuser = "root";
 $dbpass = "";
 $db = "x691";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve testimonial data from the database
$sql = "SELECT id, Client_Name, Paragraph FROM testimonials";
$result = $conn->query($sql);

// Initialize the $testData array
$testData = [];

// Loop through the result set and add each row to the $testData array
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $testimonial = (object) [
            'id' => $row["id"],
            'Client_Name' => $row["Client_Name"],
            'Paragraph' => $row["Paragraph"]
        ];
        array_push($testData, $testimonial);
    }
}

// Close the database connection
$conn->close();
?>


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
    @include('admin-elements.client-testimonials.client-testimonials')


    <div id="modal-bg"></div>

<!-- Delete testimonial modal -->
<div class="modal-container" id="modal-delete-{{ $testimonial->id }}">
    <div class="modal text-center flex items-center justify-center flex-col">
        <p>Are you sure you would like to delete this testimonial?</p>
        <div class="mt-4">
        <button class="bg-gray-500 hover:bg-gray-700 text-white py-2 px-4 rounded-full close-modal">CANCEL</button>
            <form method="POST" action="{{ route('testimonial.delete', $testimonial->id) }}">
                @csrf
                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white py-2 px-4 rounded-full delete-btn">DELETE</button>
            </form>
           </div>
    </div>
</div>

<!-- Add testimonial modal -->
<div class="modal-container" id="modal-testimonial">
    <div class="modal text-center flex items-center justify-center flex-col">
        <h2 class="text-2xl mb-4">Client Testimonial</h2>
        <form action="{{route('testimonial.insert')}}" method="POST">
           @csrf
            <input type="text" name="Client_Name" placeholder="Client Name" class="border text-center text-lg mb-3">
            <div class="border mb-2">
                <textarea cols="60" rows="10" name="Paragraph" class="w-full text-center" placeholder="Testimonial Details"></textarea>
            </div>
            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white py-2 px-4 rounded-full cursor-pointer">CREATE</button>
        </form>
        <button class="bg-gray-500 hover:bg-gray-700 text-white py-2 px-4 rounded-full close-modal">CANCEL</button>
    </div>
</div>

 <!-- Edit testimonial modal -->
 <div class="modal-container" id="modal-edit">
      <div class="modal text-center flex items-center justify-center flex-col">
        <h2 class="text-2xl mb-4">Edit Testimonial</h2>
        <form action="{{ route('testimonial.update', $testimonial->id) }}" method="POST">
          @csrf
            <input type="hidden" name="id" value="{{ $testimonial->id }}">
            <input type="text" name="Client_Name" value="{{ $testimonial->Client_Name }}" class="border text-center text-lg mb-3">
            <div class="border mb-2">
            <textarea cols="60" name="postContent" rows="10" placeholder="HTML tags allowed"><?php echo $testimonial->Paragraph ?></textarea>
            </div>
            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white py-2 px-4 rounded-full cursor-pointer">UPDATE</button>
        </form>
        <button class="bg-gray-500 hover:bg-gray-700 text-white py-2 px-4 rounded-full close-modal">CANCEL</button>
    </div>
</div>

@include('main-elements.footer.footer')
</div>

<script>
    const deleteBtns = document.querySelectorAll('.delete-btn');
    const modalBg = document.getElementById('modal-bg');
    const modalDelete = document.getElementById('modal-delete');
    
    //delete button listener
    deleteBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            modalBg.classList.add('bg-active');
            modalDelete.classList.add('modal-active');
            const testimonialId = btn.dataset.id;
            const deleteBtn = modalDelete.querySelector('.bg-red-500');
            deleteBtn.addEventListener('click', () => {
                window.location.href = `/testimonial/delete/${testimonialId}`;
            });
        });
    });
</script>
</body>
</html>
