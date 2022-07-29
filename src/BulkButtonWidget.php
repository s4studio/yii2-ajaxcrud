<?php
namespace s4studio\ajaxcrud;

use yii\base\Widget;
use yii\helpers\Html;

class BulkButtonWidget extends Widget{

	public $buttons;

	public function init(){
		parent::init();

	}

	public function run(){

		$iconsEngine = (int)BootstrapHelper::getBsVersion() > 4 ? 'bi bi-' : 'glyphicon glyphicon-';

		$content = '<div class="float-left float-start">'.
                   '<span class="'.$iconsEngine.'arrow-right"></span>&nbsp;&nbsp;With selected&nbsp;&nbsp;'.
                   $this->buttons.
                   '</div>';
		return $content;
	}
}
?>
