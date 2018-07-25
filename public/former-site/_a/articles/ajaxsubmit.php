<?php
require "config.php";

$author = $_POST['author'];
$title = $_POST['title'];
$content = $_POST['content'];

if( $author == "" || $title == "" || $content == '' ){
    echo "<h4 align='center' style='color: #800000'>Fields Left Blank</h4>", "<p align='center' style='color: #800000'>Some Fields were left blank. Please fill up all fields.</p>";
}else{
  $createArticle = \Fr\LS::saveArticle(
    array(
      "author" => $author,
      "title" => $title,
      "content" => $content,
      "created" => date("Y-m-d H:i:s") // Just for testing
    )
  );
  if($createArticle === "empty_array"){
    echo "Write article content.";
  }elseif($createArticle === false){
    echo "Error Occured while saving article.";
  }elseif($createArticle === true){
    echo "".$title." was successfully created";
  }
}
?>
