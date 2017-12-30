<?php
use cmsgears\files\widgets\AvatarUploader;

$user	= Yii::$app->user->getIdentity();
?>

<?= AvatarUploader::widget([
	'options' => [ 'id' => 'avatar-user', 'class' => 'file-uploader' ],
	'model' => $user->avatar, 'postAction' => true,
	'postActionUrl' => "user/avatar?id=$user->id"
]) ?>