<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Chi nhánh: </p><a href=""><?=Yii::$app->urlManager->createUrl('branch/index') ?></a>
    <p>
        <?= Html::a('Create Branch', ['branch/index'], ['class' => 'btn btn-success']) ?>
    </p>

    <p>This is the About page. You may modify the following file to customize its content:</p>

    <p>Tham số nam là: <strong><?= Yii::$app->request->get('name')?></strong></p>

    <p>Link không có tham số: <a href=""><?=Yii::$app->urlManager->createUrl('site/login')?></a></p>
    <p>Link có tham số: <a href=""> <?=Yii::$app->urlManager->createUrl(['site/detail', 'id'=>123, 'name'=>'abc'])?></a> </p>
    <code><?= __FILE__ ?></code>
    
</div>
