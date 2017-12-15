<?php
/**
 * @package yii2-widget-hideseek
 * @author Simon Karlen <simi.albi@gmail.com>
 * @version 1.0
 */

namespace simialbi\yii2\hideseek;


use simialbi\yii2\widgets\Widget;
use yii\bootstrap\Html;

/**
 * Class HideSeekWidget
 *
 * @author Simon Karlen <simi.albi@gmail.com>
 */
class HideSeek extends Widget {
	/**
	 * @var string the template used for composing the search field wrapper.
	 */
	public $template = '<div class="search-field">{input}</div>';

	/**
	 * @var array the HTML attributes for the widget input tag.
	 * @see \yii\bootstrap\Html::renderTagAttributes() for details on how attributes are being rendered.
	 */
	public $options = [
		'name'  => 'search',
		'type'  => 'search'
	];

	/**
	 * @var array the options for the underlying JS plugin.
	 */
	public $clientOptions = [
		'list' => '.list'
	];

	/**
	 * @inheritdoc
	 */
	public function init() {
		parent::init();
	}

	/**
	 * @inheritdoc
	 */
	public function run() {
		Html::addCssClass($this->options, 'form-control');

		$input = Html::tag('input', null, $this->options);

		$this->registerPlugin();

		return strtr($this->template, [
			'{input}' => $input
		]);
	}
}