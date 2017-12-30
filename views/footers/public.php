<?php
// Yii Imports
use yii\helpers\Url;

// CMG Imports
use cmsgears\widgets\nav\BasicNav;

$menu1Items = [
	    [ 'label' => 'Home', 'url' => Url::toRoute( [ '/' ], true ) ],
	    [ 'label' => 'Contact Us', 'url' => Url::toRoute( [ '/form/contact-us' ], true ) ]
	];

$menu2Items = [
	    [ 'label' => 'Login', 'url' => Url::toRoute( [ '/login' ], true ) ],
	    [ 'label' => 'Register', 'url' => Url::toRoute( [ '/register' ], true ) ]
	];
?>
<footer class="footer-main">
	<div class="row max-cols-50 content-80 clearfix">
		<div class="col12x2">
			<h2 class="footer-title">Site</h2>
			<?= BasicNav::widget( [ 'items' => $menu1Items ] ) ?>
		</div>
		<div class="col12x2">
			<h2 class="footer-title">Users</h2>
			<?= BasicNav::widget( [ 'items' => $menu2Items ] ) ?>
		</div>
		<div class="col12x8">
			<ul class="social-icon-footer">
				<a href="https://www.facebook.com/" target="_blank"><li><i class="cmti cmti-social-facebook"> </i> </li></a>
				<a href="https://twitter.com/" target="_blank"><li> <i class="cmti cmti-social-twitter"> </i></li></a>
				<a href="https://plus.google.com" target="_blank"><li> <i class="cmti cmti-social-google-plus"> </i> </li></a>
				<a href="https://in.linkedin.com/" target="_blank"><li><i class="cmti cmti-social-linkedin"> </i> </li></a>
			</ul>
		</div>
	</div>
</footer>
<footer class="footer-copyright">
	<div class="content-80">
		<div class="content-80 align align-center padding padding-default">Copyright © 2015 - <?= date( 'Y' ) ?> <?= $coreProperties->getSiteName() ?>. All Rights Reserved.</div>
	</div>
</footer>