<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Slideshows $model */

$this->title = 'Create Slideshows';
$this->params['breadcrumbs'][] = ['label' => 'Slideshows', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="slideshows-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
