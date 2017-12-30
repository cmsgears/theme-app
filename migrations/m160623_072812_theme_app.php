<?php
// CMG Imports
use cmsgears\core\common\config\CoreGlobal;

use cmsgears\core\common\models\entities\User;
use cmsgears\core\common\models\entities\Theme;
use cmsgears\app\common\models\entities\App;

use cmsgears\core\common\utilities\DateUtil;

class m160623_072812_theme_app extends \yii\db\Migration {

	// Public variables

	// Allow this theme to be applied for app using current site slug.
	public $activate = true;

	// Private Variables

	private $cmgPrefix;
	private $sitePrefix;
	private $appPrefix;

	private $app;

	private $master;

	public function init() {

		// Table prefix
		$this->cmgPrefix	= Yii::$app->migration->cmgPrefix;
		$this->sitePrefix	= Yii::$app->migration->sitePrefix;
		$this->appPrefix	= Yii::$app->migration->appPrefix;

		$this->site			= App::findBySlug( 'primary' );
		$this->master		= User::findByUsername( Yii::$app->migration->getSiteMaster() );
	}

    public function up() {

		// Theme
		$this->insertTheme();

		// Templates
		$this->insertThemeTemplates();

		// Site
		$this->configureTheme();
    }

	private function insertTheme() {

		$columns = [ 'createdBy', 'modifiedBy', 'name', 'slug', 'type', 'description', 'renderer', 'basePath', 'createdAt', 'modifiedAt', 'data' ];

		$themes = [
			[ $this->master->id, $this->master->id, 'App', 'app', CoreGlobal::TYPE_APP, 'App Theme.', 'default', '@themes/app', DateUtil::getDateTime(), DateUtil::getDateTime(), null ]
		];

		$this->batchInsert( $this->cmgPrefix . 'core_theme', $columns, $themes );
	}

	private function insertThemeTemplates() {

		$columns = [ 'createdBy', 'modifiedBy', 'name', 'slug', 'icon', 'type', 'active', 'description', 'renderer', 'fileRender', 'layout', 'layoutGroup', 'viewPath', 'createdAt', 'modifiedAt', 'content', 'data' ];

		$templates = [
			//[ $this->master->id, $this->master->id, 'Form', 'form', null, 'form', true, 'It can be used to display public forms.', 'default', true, 'form/default', false, 'views/templates/form/default', DateUtil::getDateTime(), DateUtil::getDateTime(), null, null ]
		];

		$this->batchInsert( $this->cmgPrefix . 'core_template', $columns, $templates );
	}

	private function configureTheme() {

		// Theme
		$appTheme	= Theme::findBySlug( 'app' );

		// App
		$appId		= $this->app->id;

		$this->update( $this->cmgPrefix . 'app', [ 'themeId' => $appTheme->id ], "id=$appId" );
	}

    public function down() {

        echo "m160623_072812_theme_app will be deleted with m160621_014408_core.\n";

        return true;
    }
}
