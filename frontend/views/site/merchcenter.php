<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

/* @var $this yii\web\View */


$this->title = '';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-lg-15">
	<h2 class="text-center">Merchandise Center</h2>
	<h3 class="text-center">What U see is What U get !</h3>
	<img src="img/merch.jpg" alt="HTML5 Icon" style="width:80%;height:80%;padding-top: 60px; margin-left: 10%;"/>
</div>
<div class="site-about">

    <h1><?= Html::encode($this->title) ?></h1>

   <div class="col-lg-4">
       
</div>

<?php
require 'db.php';
$sql = "SELECT * FROM merchcenter";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<br>";
        echo ($row["merchcenter"]);
    }
}
$conn->close();
?>