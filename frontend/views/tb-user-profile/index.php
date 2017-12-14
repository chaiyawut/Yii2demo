
    <?php

    use yii\helpers\Html;
    use yii\helpers\Url;

    $this->title = "User Profile";
    ?>

    <a href="<?= Url::to(["/tb-user-profile/create"]) ?> "class="btn btn-success">

    <i class="glyphicon glyphicon-plus"></i> Create
    </a>
    <br>
    <?= $model->fname; ?><br>
    <?= $model->lname; ?><br>
    <?= $model->address; ?><br>
    
    <a href="<?= Url::to(['tb-user-profile/update', 'id' => $model->user_id]) ?>" class="btn btn-primary">Update</a>

