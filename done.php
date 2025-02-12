<!DOCTYPE html>
<html lang="en">

<head>
     <title>Done </title>
    <style>
        body {
            background-color: rgba(216, 229, 236, 0.493);

        }

        h1 {
            text-align: center;
            color: rgb(42, 123, 177);
            padding: 1%;
        }

	p {
            color: rgb(42, 123, 177);
            padding: 1%;
        }
      
    </style>
</head>
<body>
<?php 
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$fname = $_GET['fname'];
$lname = $_GET['lname'];
$gender = $_GET['gender'];

if($gender == "female")
{
	echo "Thanks Miss ";
}else{
	echo "Thanks Mr ";
}
echo $fname.' '.$lname;

echo "<br><br> Please Review Your Information:<br><br> ";
echo "Name: ".$fname.' '.$lname."<br> ";
echo "Address: ".$_GET['address']."<br> ";
echo "For Skills: ".$_GET['skills']."<br> ";
echo "Department: ".$_GET['deprtment']."<br> ";
?>
</body>

</html>

