<?php
session_start();
// echo session_id();//あなたに割り振られたID
echo $_SESSION["name"];
echo $_SESSION["age"];