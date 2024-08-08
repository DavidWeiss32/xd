<?php
/** @var \common\models\Video */

use yii\helpers\Html;
use yii\helpers\Url;

?>

<div class="row">
    <div class="col-sm-8">
        <div class="embed-responsive embed-responsive-16by9">
            <video poster="<?php echo $model->getThumbnail() ?>"
                   class="embed-responsive-item"
                   src="<?php echo $model->getVideoLink() ?>"
                   controls></video>
        </div>
                <h6 class="mt-3"><?php Html::encode($model->tittle) ?></h6>
            <div class="d-flex justify-content-between align-items-center">
                <div><?php echo $model->getViews()->count() ?> views • <?php echo Yii::$app->formatter->asDate($model->created_at) ?></div>
                <div>
                    <?php \yii\widgets\Pjax::begin() ?>
                    <?php echo $this->render('_buttons',[
                            'model'=>$model
                    ]) ?>
                    <?php \yii\widgets\Pjax::end() ?>
                </div>
            </div>
            <div>

                <?php echo common\helpers\Html::channelLink($model->createdBy) ?>

            </div>
            <div class="mt-3">
                <?php echo Html::encode($model->description) ?>
            </div>
    </div>
    <div class="col-sm-4">
    </div>
</div>
