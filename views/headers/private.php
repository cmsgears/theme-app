<?php
// Yii Imports
use yii\helpers\Html;

// CMG Imports
use cmsgears\widgets\nav\BasicNav;

$menuItems = [
	    [ 'label' => 'Home', 'url' => [ '/home' ] ],
	    [ 'label' => 'Settings', 'url' => [ '#' ], 'options' => [ 'id' => 'btn-settings' ] ]
	];

$menuItemsMobile = [
	    [ 'label' => 'Home', 'url' => [ '/home' ] ],
	    [ 'label' => 'Settings', 'url' => [ '#' ], 'options' => [ 'id' => 'btn-settings-mobile' ] ]
	];

$settingsMenuItems = [
	    [ 'label' => 'Profile', 'url' => [ '/user/profile' ] ],
	    [ 'label' => 'Settings', 'url' => [ '/user/settings' ] ],
	    [ 'label' => 'Logout', 'url' => [ '/logout' ] ]
	];
?>
<header id="header" class="header-main">
	<div class="header-desktop clearfix">
		<div class="colf12x4">
			<?= Html::a( "<img class='logo' src='" . Yii::getAlias( '@images' ) . "/logo.png'>", [ '/home' ], null ) ?>
		</div>
		<div class="colf12x8">
		<?= BasicNav::widget([
                'options' => [ 'class' => 'nav-main' ],
                'items' => $menuItems
            ]);
		?>
		</div>
	</div>
	<div class="header-mobile clearfix">
		<div id="btn-mobile-menu">
			<span class="cmti cmti-2x cmti-menu"></span>
		</div>
		<?= Html::a( "<img class='logo' src='" . Yii::getAlias( '@images' ) . "/logo.png'>", [ '/home' ], null ) ?>
		<?= BasicNav::widget([
                'options' => [ 'class' => 'nav-main', 'id' => 'nav-mobile' ],
                'items' => $menuItemsMobile
            ]);
		?>
	</div>
	<div id="box-settings" class='popout-header'>
		<?= BasicNav::widget([
                'options' => [ 'class' => 'nav-settings' ],
                'items' => $settingsMenuItems
            ]);
		?>
	</div>
</header>