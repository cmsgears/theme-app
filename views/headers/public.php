<?php
// Yii Imports
use yii\helpers\Html;

// CMG Imports
use cmsgears\widgets\nav\BasicNav;

$menuItems = [
	    [ 'label' => 'Home', 'url' => [ '/' ] ],
	    [ 'label' => 'Contact', 'url' => [ '/form/contact-us' ] ],
	    [ 'label' => 'Login', 'url' => [ '/login' ] ],
	    [ 'label' => 'Register', 'url' => [ '/register' ] ]
	];
?>
<header id="header-main" class="header-main">
	<div class="header-desktop clearfix">
		<div class="colf12x4">
			<?= Html::a( "<img class='logo' src='" . Yii::getAlias( '@images' ) . "/logo.png'>", [ '/' ], null ) ?>
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
		<?= Html::a( "<img class='logo' src='" . Yii::getAlias( '@images' ) . "/logo.png'>", [ '/' ], null ) ?>
		<?= BasicNav::widget([
                'options' => [ 'class' => 'nav-main', 'id' => 'nav-mobile' ],
                'items' => $menuItems
            ]);
		?>
	</div>
</header>