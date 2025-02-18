<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafeteria Website</title>
    <link rel="stylesheet" href="tempCSS.css">
    <script src="templates/asssets/js/mobile.js"></script> 
	<style>
	/* General Page Layout */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

/* Header Styles */
#header {
    background-color: #48A6A7; /* Dark header background */
    color: #fff;
    padding: 20px 0;
}

.container {
    width: 80%;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

/* Logo Styling */
.logo img {
    height: 50px;
}

/* Navigation Menu */
#navigation {
    display: flex;
    gap: 15px;
}

#navigation ul {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
}

#navigation li {
    margin: 0 10px;
}

#navigation a {
    color: #fff;
    text-decoration: none;
    font-weight: bold;
    padding: 8px 15px;
    border-radius: 5px;
}

#navigation a:hover {
    background-color: #9ACBD0; /* Golden color on hover */
}

/* User Info Section */
.user-info {
    text-align: center;
}

.user-info h3 {
    margin: 0;
    font-size: 18px;
}

.user-info img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
}
/* Footer Styles */
#footer {
    background-color: #2973B2;
    color: #fff;
    padding: 20px 0;
    margin-top: 30px;
}

.footer-nav ul {
    list-style: none;
    padding: 0;
    display: flex;
    justify-content: center;
    gap: 30px;
}

.footer-nav a {
    color: #fff;
    text-decoration: none;
    font-size: 16px;
}

.footer-nav a:hover {
    color: #9ACBD0;
}

/* Social Media Links */
.social-media {
    text-align: center;
    margin: 20px 0;
}

.social-media a {
    color: #fff;
    text-decoration: none;
    margin: 0 10px;
    font-size: 18px;
}

.social-media a:hover {
    color: #9ACBD0;
}

/* Footer Text */
.footer-text {
    text-align: center;
    font-size: 14px;
    color: #aaa;
}

h1,form{
	text-align: center;
	color:#2973B2;
}
img{
	float: right;
	margin-top:-80px;
}
h3{
	font-size:33px;
	margin-left:90%;
	color:#2973B2;
}
input[type=submit],input[type=reset]{
		    background-color: #2973B2;
			color:white;
			width:100px;
			height:40px;
			font-size:18px;
}
input[type=button]{
		    background-color: #2973B2;
			color:white;
			width:150px;
			height:40px;
			font-size:18px;
			margin:5px;
			
}
#btn{
	text-align:center;
}

th {
	text-align: center;
	color: rgb(42, 123, 177);
	font-size: 1.2em;
	padding: 1%;
}
tr {
	color: rgb(42, 123, 177);
	padding: 1%;
}
td {
    padding: 15px;
    font-size: 1em; 
}
table,td,th{
	border: solid 2px rgb(42, 123, 177);
}
table{
	width: 100%;
	margin: 20px auto;
	text-align:center;
} 
td img {

    max-width: 100px;
    max-height: 100px;
    margin: 0 auto;
}
	</style>

</head>
<body>	
	<div id="page">
		<div id="header">
			<div>
				<ul id="navigation">
					<li class="selected">
						<a href="index.html">Home</a>
					</li>
					<li class="menu">
						<a href="about.html">Products</a>
					</li>
					<li class="menu">
						<a href="blog.html">Users</a>
					</li>
					<li class="menu">
						<a href="blog.html">Manual Order</a>
					</li>
					<li class="menu">
						<a href="blog.html">Checks</a>
					</li>
					<li>
						<a href="contact.html">Contact</a>
					</li>		
				</ul>
			</div>
		</div>
			<img src="uploads/personal_photo.png" width=70px>
			<h3>
				<?php 
				echo "Welcome ".$_SESSION['username']
				?>
			</h3>
			


