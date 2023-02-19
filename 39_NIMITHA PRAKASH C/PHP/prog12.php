<?php
$nameError = $emailError = $genderError = $phonenoError ="";
$name = $email = $gender = $phoneno = $comment = "";
if($_POST){
if (empty($_POST["name"])) {
$nameError = "Name is required";
} else {
$name = test_input($_POST["name"]);
if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
$nameError = "Only letters and white space allowed";
}
}
if (empty($_POST["email"])) {
$emailError = "Email is required";
} else {
$email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
$emailError = "Invalid Email format";
}
}
if (empty($_POST["phoneno"])) {
$phonenoError = "Phone is required";
} else {
$phoneno = test_input($_POST["phoneno"]);
if(!preg_match("/^[0-9]{10}+$/", $phoneno)) {
$phonenoError= "Invalid Phone Number";
}
}
if (empty($_POST["comment"])) {
$comment="";
} else {
$comment = test_input($_POST["comment"]);
}
if (empty($_POST["gender"])) {
$genderError = "Gender is required";
} else {
$gender = test_input($_POST["gender"]);
}
}
function test_input($data) {
$data = trim($data); 
$data = stripslashes($data); 
$data = htmlspecialchars($data); 
return $data;
}
?>



<html>
<head>
<title>Form Validation with PHP</title>
<style>
.error{
color:red
}
textarea{
width:250px;
height:60px;
border:none
}
.input{
width:300px;
height:25px;
margin-top:10px;
border:none;
}
form{
position:relative;
left:500;
width:440px;
padding: 20px ;
background-color:#a0f8ee;
}
</style>
</head>
<body>
<h2 align = "center">Form Validation with PHP</h2>
<form method="post">
<h2>Registration Form</h2>
<span class="error">* required field</span><br>
<span class="error">*</span>
Name:
<input class="input" name="name" type="text" value="<?= $name ?>"><br>
<span class="error"><?php echo $nameError;?></span><br><br>
<span class="error">*</span>
E-mail:
<input class="input" name="email" type="text" value="<?= $email ?>"><br>
<span class="error"><?php echo $emailError;?></span><br><br>
<span class="error">*</span>
Phone:
<input class="input" name="phoneno" type="text" value="<?= $phoneno ?>"><br>
<span class="error"><?php echo $phonenoError;?></span><br><br>
<span class="error">*</span>
Gender:
<input type="radio" name="gender" <?php if (isset($gender) && $gender == "female") echo "checked";?> value="female">Female
<input type="radio" name="gender" <?php if (isset($gender) && $gender == "male") echo "checked";?> value="male">Male
<input type="radio" name="gender" <?php if (isset($gender) && $gender == "other") echo "checked";?> value="other">Other<br>
<span class="error"><?php echo $genderError;?></span><br><br>
Comment:
<textarea cols="40" name="comment" rows="5">
</textarea><br><br>
<input name="submit" type="submit" value="Submit">
</form>
<?php
echo "<h1>Your Input:</h1><h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $phoneno;
echo "<br>";
echo $gender;
echo "<br>";
echo $comment."</h2>";
?>
</body>
</html>