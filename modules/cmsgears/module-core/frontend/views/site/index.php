<?php
// CMG Imports
use cmsgears\widgets\block\BasicBlock;
use cmsgears\widgets\gallery\Gallery;
use cmsgears\widgets\aform\AjaxForm;

$coreProperties 		= $this->context->getCoreProperties();

// Configure Page Title, Description and Meta
$this->title 			= $coreProperties->getSiteTitle();
$this->params[ 'desc' ]	= "The basic template with basic theme for CMSGears.";
$this->params[ 'meta' ]	= "cmsgears, template, basic, theme";
?>

<?= BasicBlock::widget([
		'options' => [ 'id' => 'block-banner', 'class' => 'block block-basic' ],
		'parallaxBkg' => true,
		'texture' => true, 'textureClass' => 'texture texture-default',
		'contentWrapClass' => 'valign-center', 'content' => true,
		'contentData' => "<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do....</h3>"
]);?>

<?php BasicBlock::begin([
		'options' => [ 'id' => 'block-about', 'class' => 'block block-basic' ]
]);?>

<?= Gallery::widget([
        'options' => [ 'id' => 'portfolio-main', 'class' => 'gallery-basic portfolio clearfix' ],
        'name' => 'main',
        'template' => 'portfolio'
    ]); ?>

<?php BasicBlock::end(); ?>

<?= BasicBlock::widget([
	'options' => [ 'id' => 'block-contact', 'class' => 'block block-basic' ],
	'bkg' => true,
	'header' => true, 'headerContent' => '<h3>Write To Us</h3>',
	'contentWrapClass' => 'center','content' => true,
	'contentData' => AjaxForm::widget([
						'options' => [ 'class' => 'cmt-form', 'id' => 'frm-contact' ],
						'slug' => 'contact-us', 'showLabel' => false
					])
]);?>