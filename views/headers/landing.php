<?php
// Yii Imports
use yii\helpers\Html;

// CMG Imports
use cmsgears\widgets\login\AjaxLogin;
use cmsgears\widgets\nav\BasicNav;

$menuItems = [
	    [ 'label' => 'Home', 'url' => '#block-banner', 'urlOptions' => [ 'class' => 'smooth-scroll' ] ],
	    [ 'label' => 'About', 'url' => '#block-about', 'urlOptions' => [ 'class' => 'smooth-scroll' ] ],
	    [ 'label' => 'Contact', 'url' => '#block-contact', 'urlOptions' => [ 'class' => 'smooth-scroll' ] ]
	];
?>
<header id="header-main" class="header-main">
	<div class="header-desktop clearfix">
		<div class="colf12x4">
			<?= Html::a( "<img class='logo' src='" . Yii::getAlias( '@images' ) . "/logo.png'>", [ '/' ], null ) ?>
		</div>
		<div class="colf12x6">
			<?= BasicNav::widget([
	            'options' => [ 'class' => 'nav-main' ],
	            'items' => $menuItems
			]);?>
		</div>
		<div class="colf12x2">
			<span class="btn" id="btn-login">My Account</span>
		</div>
	</div>
	<div class="header-mobile clearfix">
		<div id="btn-mobile-menu">
			<span class="cmti cmti-2x cmti-menu"></span>
		</div>
		<?= Html::a( "<img class='logo' src='" . Yii::getAlias( '@images' ) . "/logo.png'>", [ '/' ], null )?>
		<span class="cmti cmti-2x cmti-user" id="btn-login-mobile"></span>
			<?= BasicNav::widget([
	            'options' => [ 'class' => 'nav-main', 'id' => 'nav-mobile' ],
	            'items' => $menuItems
			]);?>
	</div>
	<?= AjaxLogin::widget( [ 'loadAssets' => true, 'optionalFields' => false, 'options' => [ 'id' => 'wrap-login-register' ] ] ) ?>
</header>