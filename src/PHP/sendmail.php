<?php
$URL = "https://script.google.com/macros/s/AKfycbzToliNZDNlwwYW5pepThG2K8jd50JAH5hoalAAPACUhF0UBYsw1wE2lTZUUxwfP3xgrA/exec";

$name = htmlspecialchars($_POST["name"],ENT_QUOTES);
$email = htmlspecialchars($_POST["email"],ENT_QUOTES);
$comments = htmlspecialchars($_POST["comments"],ENT_QUOTES);

if($name !== "" && $email !== "" && $comments !== ""){
  function convertNewline($string, $to="\n") {
    return preg_replace("/\r\n|\r|\n/", $to, $string);
  }
  
  $comments = str_replace(array("\r\n", "\r", "\n"), '[改行]', $comments);
  
  file_get_contents(
    $URL."?name=".urlencode($name)."&mail=".$email."&text=".urlencode($comments)
  );
}


header("location: https://click.ecc.ac.jp/ecc/rokazaki/2021_0507_portfolio_v1/")



?>