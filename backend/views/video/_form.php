<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Video $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="video-form">

    <?php $form = ActiveForm::begin(); ?>


    <div class="row">
        <div class="col-sm-8">
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'tags')->textInput(['maxlength' => true]) ?>



        </div>
        <div class="col-sm-4">



            <div class="embed-responsive embed-responsive-16by9">
                <video class="embed-responsive-item" src="<?= $model->getVideoLink()  ?>" controls></video>
            </div>



            <div class="mb-3">
                <div class="text-muted">Video Link</div>
                <a href="<?= $model->getVideoLink()  ?>">
                    Open Video
                </a>
                <?= $model->getVideoLink();  ?>
            </div>

            <div class="mb3">
            <div class="text-muted">Video Name</div>
                <?= $model->video_name;  ?>
            </div>


            <?= $form->field($model, 'status')->dropDownList($model->getStatusLabels()) ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
