<html>
<head>
<title>
Additon
</title>
</head>
<body>
<form action=Addition.php, method="GET">
Enter first number<input type="number" name="t1"><br>
Enter second number<input type="number" name="t2"><br>
Submit<input type="Submit" name="t3">
</form>
<body>
</html>

  <?php>
    if (isset($_GET['submit']))
   {
    $num1=$_GET['t1'];
    $num2=$_GET['t2'];
  $ans=$num1+$num2;
  echo('Addition is :'.$ans)
   }
  ?>
