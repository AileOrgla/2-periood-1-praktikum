<!DOCTYPE HTML>
<html>
   <head>
    <title>Praktikum-1</title>
    <meta http-equiv="Content-Type" content="text/html;
    charset=utf-8">
    <title>Praktikum-1</title>
   </head>
   		<a href="index.php">Esimesele lehele</a>
   		<?php echo $_GET; ?>
   		<?php print_r($_GET); ?>
   		<br>
   		<?php echo "<p>" .$_GET["name"]. "</p>"; ?>
   		<?php $username = $_GET["name"]; ?>
   		<a href="index.php?test=katsetus kas nii toimib">mis iganes</a>
   </body>
</html>