<?php
/**
 * For Development Purposes
 */
ini_set("display_errors", "off");

require __DIR__ . "/src/class.logsys.php";
\Fr\LS::config(array(
  "db" => array(
    "host" => "localhost",
    "port" => 3306,
    "username" => "alanandg_user",
    "password" => "R+np^ou3=gU2",
    "name" => "alanandg_grantdb",
    "table" => "users",
    "article_table" => "articles",
  ),
  "features" => array(
    "auto_init" => true
  ),
  "pages" => array(
    "no_login" => array(
      "/",
      "/insights/",
      "/insights/index.php",
      "/insights/read-article.php",
      "/_a/articles/register.php"
    ),
    "everyone" => array(
      ""
    ),
    "login_page" => "/_a/articles/login.php",
    "home_page" => "/_a/articles/index.php"
  )
));
