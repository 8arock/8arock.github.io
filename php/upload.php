<?php
if (isset($_POST['submit'])) {
$file = $_FILES['file'];
print_r($file);
$fileName = $_FILES['file'] ['name'];
$fileTmpName = $_FILES['file'] ['tmp_name'];
$fileSize = $_FILES['file'] ['size'];
$fileError = $_FILES['file'] ['error'];
$fileType = $_FILES['file'] ['type'];

$fileExt = explode('.' , $fileName);
$fileActualExt = strtolower(end($fileExt));

$allowed = array('pdf');

if (in_array($fileActualExt , $allowed)){
if ($fileError === 0) {
if ($fileSize < 10000000) {
    $fileNameNew = uniqid('' , true ) . ".".$fileActualExt;
    // $fileDestination = '../Notes/'.$fileNameNew;
    move_uploaded_file($fileTmpName , $fileDestination);
    header("Location:index.php?uploadsucess");
} else {
    echo "Your File Is Too Big!";
}
} else {
    echo "There Is an Error In  Uploading Your File! ";
}
} 
else{
    echo " You Can Not Upload Files Of This Type!";
}
switch($_POST['subjects']){
    case 'Biology Work':
        if( $_FILES['file']['name'] != "" ) {
            $path=$_FILES['file']['name'];
            $pathto="../Notes/Bio/".$path;
            move_uploaded_file( $_FILES['file']['tmp_name'],$pathto) or die( "Could not copy file!");
        }
        else {
            die("No file specified!");
        }
    break;
    case 'Computer Work':
        if( $_FILES['file']['name'] != "" ) {
            $path=$_FILES['file']['name'];
            $pathto="../Notes/Computer/".$path;
            move_uploaded_file( $_FILES['file']['tmp_name'],$pathto) or die( "Could not copy file!");
        }
        else {
            die("No file specified!");
        }
    break;
    case 'English 2 Work':
        if( $_FILES['file']['name'] != "" ) {
            $path=$_FILES['file']['name'];
            $pathto="../Notes/English 2/".$path;
            move_uploaded_file( $_FILES['file']['tmp_name'],$pathto) or die( "Could not copy file!");
        }
        else {
            die("No file specified!");
        }
    break;
    case 'Geography Work':
        if( $_FILES['file']['name'] != "" ) {
            $path=$_FILES['file']['name'];
            $pathto="../Notes/Geography/".$path;
            move_uploaded_file( $_FILES['file']['tmp_name'],$pathto) or die( "Could not copy file!");
        }
        else {
            die("No file specified!");
        }
    break;
    case 'Hindi 2 Work':
        if( $_FILES['file']['name'] != "" ) {
            $path=$_FILES['file']['name'];
            $pathto="../Notes/Hindi 2/".$path;
            move_uploaded_file( $_FILES['file']['tmp_name'],$pathto) or die( "Could not copy file!");
        }
        else {
            die("No file specified!");
        }
    break;
    case 'History Civics Work':
        if( $_FILES['file']['name'] != "" ) {
            $path=$_FILES['file']['name'];
            $pathto="../Notes/HistoryAndCivics/".$path;
            move_uploaded_file( $_FILES['file']['tmp_name'],$pathto) or die( "Could not copy file!");
        }
        else {
            die("No file specified!");
        }
    break;
    case 'Physics Work':
        if( $_FILES['file']['name'] != "" ) {
            $path=$_FILES['file']['name'];
            $pathto="../Notes/Physics/".$path;
            move_uploaded_file( $_FILES['file']['tmp_name'],$pathto) or die( "Could not copy file!");
        }
        else {
            die("No file specified!");
        }
    break;
    case 'Chemistry Work':
        if( $_FILES['file']['name'] != "" ) {
            $path=$_FILES['file']['name'];
            $pathto="../Notes/Chemistry/".$path;
            move_uploaded_file( $_FILES['file']['tmp_name'],$pathto) or die( "Could not copy file!");
        }
        else {
            die("No file specified!");
        }
    break;
    default:
        // Something went wrong or form has been tampered.
    } 
     
}