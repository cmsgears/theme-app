<?php
namespace themes\app;

// Yii Imports
use Yii;

class Theme extends \cmsgears\core\common\base\Theme {

    public $pathMap = [
        '@frontend/views' => '@themes/app/views',
        '@cmsgears' => '@themes/app/modules/cmsgears'
    ];

    public function init() {

        parent::init();

		// The path for templates
		Yii::setAlias( '@templates', '@themes/app/views/templates' );
	}
}
