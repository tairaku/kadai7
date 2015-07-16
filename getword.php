<html>
<head>
<title>getword</title>
</head>

<body>
<?php
$verb=array("get","have","learn","read","watch","take","play","try","enjoy","pay","call","like","study","know","buy","charange","deliver","queue","stop","use","need");
$noun=array("book","idea","peach","rice","candy","glass","water","shoe","pencil","music","book","name","cat","English","TV","soccer");
$adjective=array("beautiful","high","small","hot","cold","strong","thin","busy","red","worry","honest","easy","tired","happy");
$animal=array("cat","dog","lion","ant","cow","wolf","bear","deer","elephant","tiger","sheep","donkey","goat","pig","bird","zebra");
$name=array("Aya","Saki","Hitomi","Takashi","Ken","Naoya","Bob","Karen","Ai","Tanaka","Maeda","Sasaki");
$adverb=array("very","often","really","sometimes","simply","actually","quickly","easily","soon","widely","nearly");
$exclaimation=array("Ouch","Oh my God","Wow","Silly me");
$array=array("aaaaa","bbbbb","ccccc","ddddd");

if($_GET['pos'] == "verb"){
  echo $verb[rand(0,20)];
}else if($_GET['pos'] == "noun"){
  echo $noun[rand(0,15)];
}else if($_GET['pos'] == "adjective"){
  echo $adjective[rand(0,13)];
}else if($_GET['pos'] == "animal"){
  echo $animal[rand(0,15)];
}else if($_GET['pos'] == "name"){
  echo $name[rand(0,11)];
}else if($_GET['pos'] == "adverb"){
  echo $adverb[rand(0,10)];
}else if($_GET['pos'] == "exclaimation"){
  echo $exclaimation[rand(0,3)];
}else{
  echo $array[rand(0,3)];
}


?>
</Body>
</html>
