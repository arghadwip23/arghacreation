<?php
$name = $_POST['name'];
$q_o= $_POST['q_o'];
$q_t = $_POST['q_t'];
$q_th = $_POST['q_th'];
$q_f = $_POST['q_f'];
$q_fi = $_POST['q_fi'];
$q_s = $_POST['q_s'];
$q_se = $_POST['q_se'];
$q_ei = $_POST['q_ei'];
$q_n = $_POST['q_n'];
$q_tn = $_POST['q_tn'];
$score = 0;
$username = 'ezyro_26539449';
$psw = '43mz2k9oyojo' ;
$host = 'sql304.ezyro.com';
$db = 'ezyro_26539449_mydb';
$conn = new mysqli($host, $username, $psw, $db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if ($q_o == '2') {
 $score++;
}
if ($q_t == '1') {
 $score++;
}
if ($q_th == '3') {
 $score++;
}
if ($q_f == '2') {
 $score++;
}
if ($q_fi == '4') {
 $score++;
}
if ($q_s == '3') {
 $score++;
}
if ($q_se == '3') {
 $score++;
}
if ($q_ei == '4') {
 $score++;
}
if ($q_n == '1') {
 $score++;
}
if ($q_tn == '1') {
 $score++;
}
$sql = "INSERT INTO `rec` (`name`, `score`)
VALUES ('$name','$score')";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>H B D Manash</title>
  <!-- HTML -->
  <!--font-->
  <link href="https://fonts.googleapis.com/css2?family=Rye&display=swap" rel="stylesheet">
  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.2/dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.2/dist/css/bootstrap.min.css">
  <!-- Custom Styles -->
  <link rel="stylesheet" href="style.css">
</head>
<body id="body" class="text-center">
  <?php
 if ($score > 5) {
   // code...
  ?>
  <div class="alert alert-success h1 text-center container result">
    <p>
<?php
echo 'Yah! 😃..  Welldone '.$name.' You scored a good mark. Your score is : '.$score;
?>
</p>
</div>
<?php
}
else{
  
?>
<div class=' alert alert-danger result h1 text-center'>
  <?php
  echo 'Wof..😥 !! '.$name.' You scored a poor.Your score is '. $score;
  ?>
</div>
<?php
}
?>
</body>
</html>
<?php
if ($conn->query($sql) === TRUE) {
  echo "<h1 style='text-align:center;margin-top:20%;'>you are most welcome</h1>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

