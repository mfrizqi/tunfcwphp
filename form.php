<?php
// getting data from form (exclude photo)
$nama = $_POST["Nama"];
$nim = $_POST["NIM"];
$fakultas = $_POST["Fakultas"];
$jurusan = $_POST["Jurusan"];
$div_1 = $_POST["divisiPertama"];
$div_2 = $_POST["divisiKedua"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname="tun";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
echo "<br />";

// $allowTypes = array('jpg','png','jpeg');
// $fileSize = 2 * 1024 * 1024;

// $statusMsg = '';
// $dataIsValid = 99;

// // File upload path
// $targetDir = "uploads/";
// $fileName = basename($_FILES["file"]["name"]);
// $targetFilePath = $targetDir . $fileName;
// $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

// if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
// // Allow certain file formats
//     $allowTypes = array('jpg','png','jpeg','gif','pdf');
//     if(in_array($fileType, $allowTypes)){

//         // Upload file to server
//         if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){

//             //Change Name for diversion

//             $upload= "uploads/";
//             $oldFileName= $upload . $fileName;
//             $newFileName = $upload . $nim .'_'. $fileName;
//             $fileName = $nim . '_' . $fileName;
//             rename($oldFileName,$newFileName);

//             $sql = "INSERT INTO rekrut (nama, nim, fakultas, jurusan, divisiPertama, divisiKedua, foto ) VALUES ( '$nama', '$nim', '$fakultas', '$jurusan', '$div_1' , '$div_2' , '$fileName')";

//             if ($conn->query($sql) === TRUE) {
//                 echo "New record created successfully";
//                 $dataIsValid = 0
//             } else {
//                 echo "Error: " . $sql . "<br>" . $conn->error;
//                 $dataIsValid = 1
//             }

//         }else{
//             $statusMsg = "Sorry, there was an error uploading your file.";
//             $dataIsValid = 2
//         }
//     }else{
//         $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
//         $dataIsValid = 3
//     }
// }
// else{
// $statusMsg = 'Please select a file to upload.';
// $dataIsValid = 4
// }

$sql = "INSERT INTO rekrutNew (nama, nim, fakultas, jurusan, divisiPertama, divisiKedua ) VALUES ( '$nama', '$nim', '$fakultas', '$jurusan', '$div_1' , '$div_2')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    $dataIsValid = 0
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    $dataIsValid = 1
}


$conn->close();
echo $statusMsg;
// echo "Size : " . $_FILES["file"]["size"]
?>

<div>Formed</div>

<!-- <?php; ?> -->