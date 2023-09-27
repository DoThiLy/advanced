<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Branch $model */

$this->title = 'Thêm chi nhánh';
$this->params['breadcrumbs'][] = ['label' => 'Branches', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="branch-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>