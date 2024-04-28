<?php
session_start();

$_SESSION["name1"] = "taro";
$_SESSION["age1"] = 20;

var_dump($_SESSION["name1"]);

//sesionのミニ演習が何度トライしてもうまくいかなかったが、原因はsession1のファイル名の頭にスペースが入っていたため。
//ファイル名のスペースには注意する！！