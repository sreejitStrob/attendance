<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Employee */

$this->title = $model->employee_id;
$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="employee-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'employee_id' => $model->employee_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'employee_id' => $model->employee_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'employee_id',
            'first_name',
            'last_name',
            'phone_number',
            'email_id:email',
            'date_of_birth',
            'secondary_contact',
            'is_active',
            'is_deleted',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
