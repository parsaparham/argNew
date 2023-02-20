<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Permissions $model */

$this->title = 'Create Permissions';
$this->params['breadcrumbs'][] = ['label' => 'Permissions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="permissions-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
