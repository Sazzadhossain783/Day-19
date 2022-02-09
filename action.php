<?php
require_once 'vendor/autoload.php';
use App\classes\Word;

if (isset($_GET['pages']))
{
    if($_GET['pages'] == 'home')
    {
        include 'pages/home.php';

    } elseif($_GET['pages'] == 'series')
    {
        include 'pages/series.php';
    }
}
elseif (isset($_POST['xyz']))
{
    $word = new Word($_POST);
    $result =  $word->index();
    include 'pages/home.php';
    extract(($result));
    include $this->$result;

}
