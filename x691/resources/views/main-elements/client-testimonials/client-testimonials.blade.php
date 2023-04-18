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
$sql = "SELECT Client_Name, Paragraph FROM testimonials";
$result = $conn->query($sql);

// Initialize the $testData array
$testData = [];

// Loop through the result set and add each row to the $testData array
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $testimonial = (object) [
            'Client_Name' => $row["Client_Name"],
            'Paragraph' => $row["Paragraph"]
        ];
        array_push($testData, $testimonial);
    }
}

// Close the database connection
$conn->close();
?>

<div class="" id="client-testimonials-container">
    <div class="text-3xl text-center">TESTIMONIALS</div>
    <div class="grid grid-cols-1 gap-2 md:grid-cols-3 md:gap-4 mx-10">
        <?php foreach($testData as $testimonial ): ?>
            <div class="testimonial-container">
                <p class="text-lg">
                    <p><?= $testimonial->Paragraph ?></p>
                    <b class="client-name"> - <?= $testimonial->Client_Name ?></b>
                </p>
            </div>
        <?php endforeach; ?>
        
        </div>
        <div class="testimonial-container">
            <p class="text-lg">
          
            </p>
        </div>
    </div>
</div>
