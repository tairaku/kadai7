<?
header("Content-type: text/plain; charset=UTF-8");
$message=strrev(urlencode($_GET["message"]));
for($i=0;$i<mb_strlen($message);$i++){
  echo "#".$message[$i];
}
echo "# ";
echo ":)";
