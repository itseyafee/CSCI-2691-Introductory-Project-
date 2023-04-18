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

<div class="" id="testimonial-container">
    <div class="text-3xl text-center">EDIT TESTIMONIALS</div>
    <div id="add-testimonial">
        <p class="text-right mb-5 mx-10 cursor-pointer add-test-button" data-modal="modal-testimonial"> + ADD TESTIMONIAL </div>
    <div class="grid grid-cols-3 gap-4 mx-10">
        @foreach($testData as $testimonial)
        <div class="testimonial-container">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.2" stroke="currentColor" class="w-24 h-24">
            </svg>
            <div class="text-2xl">
                {{ $testimonial->Client_Name }}
                </div>
                <div class="text">
                {{ $testimonial->Paragraph }}
            </div>
            <span>&nbsp;</span>
            <div class="button edit-button testimonials-edit-button" data-modal="modal-edit">
                EDIT
            </div>
            <div class="button delete-button testimonials-delete-button" data-modal="modal-delete-{{ $testimonial->id }}">
                DELETE
            </div>
        </div>
        @endforeach
    </div>
</div>