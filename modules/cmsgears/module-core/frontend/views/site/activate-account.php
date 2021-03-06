<?php
// Yii Imports
use yii\helpers\Html;
use yii\widgets\ActiveForm;

// CMG Imports
use cmsgears\widgets\block\BasicBlock;

$coreProperties = $this->context->getCoreProperties();
$this->title 	= $coreProperties->getSiteTitle() . " | Activate Account";
?>
<?php BasicBlock::begin([
	'options' => [ 'id' => 'block-public', 'class' => 'block block-basic' ],
	'bkg' => true,
	'texture' => true, 'textureClass' => 'texture-default',
	'header' => true, 'headerContent' => "<h2 class='align align-center'>ACCOUNT ACTIVATION</h2>",
	'contentWrapClass' => 'center', 'content' => true
]);?>

	<?php if( Yii::$app->session->hasFlash( "message" ) ) { ?>
		<p> <?php echo Yii::$app->session->getFlash( "message" ); ?> </p>
	<?php		
		}
		else {
	
			$form = ActiveForm::begin( ['id' => 'frm-activate-account'] ); 
	?>
	    	<?= $form->field( $model, 'password' )->passwordInput( [ 'placeholder' => 'Password*' ] )->label( false ) ?>
	    	<?= $form->field( $model, 'password_repeat' )->passwordInput([ 'placeholder' => 'Confirm Password*' ] )->label( false ) ?>
	
			<input type="submit" value="Activate" />
	<?php 
			ActiveForm::end();
		}
	?>

<?php BasicBlock::end(); ?>