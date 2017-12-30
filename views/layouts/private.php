<?php
use themes\project\assets\PrivateAssets;

PrivateAssets::register( $this );

// Variables available for headers, sidebars and footers included within this layout
$coreProperties = $this->context->getCoreProperties();
$themePath		= Yii::getAlias( '@themes/basic' );
$user			= Yii::$app->user->getIdentity();
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="<?= $coreProperties->getLanguage() ?>">
    <head>
		<?php include "$themePath/views/headers/main.php"; ?>
    </head>
    <body>
        <?php $this->beginBody(); ?>
		<div id='pre-loader-main' class="max-area-cover fixed"><div class="valign-center cmti-5x cmti-spinner-1 spin"></div></div>
		<?php include "$themePath/views/headers/private.php"; ?>
        <div class="container-main container-private">
	        <div class="wrap-content">
	        	<div class="content wrap-col-filler clearfix">
		        	<div class="col-filler box-sidebar col12x3"></div>
		        	<div class="box-sidebar col12x3">
		        		<?php include "$themePath/views/sidebars/private.php"; ?>
		        	</div>
		        	<div class="box-content col12x9">
		        		<?= $content ?>
		        	</div>
		        </div>
	        </div>
        </div>
        <?php include "$themePath/views/footers/private.php"; ?>
        <?php $this->endBody(); ?>
    </body>
</html>
<?php $this->endPage(); ?>
