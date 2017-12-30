<?php
// Yii Imports
use yii\helpers\Html;
use yii\widgets\ActiveForm;

// CMG Imports
use cmsgears\widgets\block\BasicBlock;

$coreProperties = $this->context->getCoreProperties();
$this->title 	= $coreProperties->getSiteTitle() . " | Reset Password";
?>
<?php BasicBlock::begin([
	'options' => [ 'id' => 'block-public', 'class' => 'block block-basic' ],
	'bkg' => true,
	'texture' => true, 'textureClass' => 'texture-default',
	'header' => true, 'headerContent' => "<h2 class='align align-center'>RESET PASSWORD</h2>",
	'contentWrapClass' => 'center', 'content' => true
]);?>

	<?php if( Yii::$app->session->hasFlash( "message" ) ) { ?>
		<div class='frm-message'><p> <?php echo Yii::$app->session->getFlash( "message" ); ?> </p></div>
	<?php		
		}
		else {
	
			$form = ActiveForm::begin( [ 'id' => 'frm-reset-password' ] ); 
	?>
			<?= $form->field( $model, 'email' )->textInput( [ 'placeholder' => 'Email*' ] )->label( false ) ?>
	    	<?= $form->field( $model, 'password' )->passwordInput( [ 'placeholder' => 'Password*' ] )->label( false ) ?>
	    	<?= $form->field( $model, 'password_repeat' )->passwordInput( [ 'placeholder' => 'Repeat Password*' ] )->label( false ) ?>
	
			<input type="submit" value="Reset" />
	<?php 
			ActiveForm::end();
		}
	?>

<?php BasicBlock::end(); ?>