<html>
<head>
<title>madlib</title>
</head>

<body>
<?php
echo file_get_contents("http://tsumu-2015.appspot.com/getword?pos=name");
echo " and ";
echo file_get_contents("http://tsumu-2015.appspot.com/getword?pos=name");
echo " ";
echo file_get_contents("http://tsumu-2015.appspot.com/getword?pos=verb");
echo " ";
echo file_get_contents("http://tsumu-2015.appspot.com/getword?pos=noun");
echo ". Then, they meet ";
echo file_get_contents("http://tsumu-2015.appspot.com/getword?pos=animal");
echo " and they say it is";
echo file_get_contents("http://tsumu-2015.appspot.com/getword?pos=adjective");
echo ".";

?>
</body>
</html>