<?php
use themes\project\assets\PublicAssets;

PublicAssets::register( $this );

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
		<?php
			if( isset( $user ) ) {

				include "$themePath/views/headers/private.php";
			}
			else {

				include "$themePath/views/headers/public.php";
			}
		?>
        <div class="container-main">
	        <div class="wrap-content wrap-content-main">
	        	<div class="content">
	        		<?= $content ?>
	        	</div>
	        </div>
	        <?php include "$themePath/views/footers/public.php"; ?>
        </div>
        <?php $this->endBody(); ?>
    </body>
</html>
<?php $this->endPage(); ?>
