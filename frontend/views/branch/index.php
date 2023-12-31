<?php

use app\models\Branch;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\BranchSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Chi nhánh';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="branch-index">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <p>
        <?= Html::a('Thêm chi nhánh', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render(' _search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'code',
            'name',
            'address',
            'status',
            'note:ntext',
            // HIỂN NGÀY THÁNG NĂM
            [
                'attribute' => 'created_at',
                'content' => function ($model) {
                    return date('d/M/Y', $model->created_at);
                }
            ],
            [
                'attribute' => 'updated_at',
                'content' => function ($model) {
                    return date('d/M/Y', $model->created_at);
                }
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Branch $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>

</div>