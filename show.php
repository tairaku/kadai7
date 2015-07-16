<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>show</title>
</head>


<body>
<?php
   $array=fopen("http://step15-krispop.appspot.com/peers","r");
if($array){
  while($line=fgets($array)){
    echo $line;
    echo " => ";
    $line=trim($line);
    echo file_get_contents($line."/convert?message=".$_GET['message']);
    echo "<br />";
    echo "<br>";
  }
}
?>
</p>
</body>
</html>
