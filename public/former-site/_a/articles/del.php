<?php 
  include "config.php";

  if( isset($_POST['remove_article'])){
      $delete = \Fr\LS::deleteArticle($_POST['remove_article']);
  }
 ?>