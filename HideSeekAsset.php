<?php
/**
 * @package yii2-widget-hideseek
 * @author Simon Karlen <simi.albi@gmail.com>
 * @version 1.0
 */

namespace simialbi\yii2\hideseek;


use simialbi\yii2\web\AssetBundle;

/**
 * Asset bundle for HideSeek Widget
 *
 * @author Simon Karlen <simi.albi@gmail.com>
 */
class HideSeekAsset extends AssetBundle {
	/**
	 * @var array list of JavaScript files that this bundle contains.
	 */
	public $js = [
		'jquery.highlight.min.js',
		'jquery.hideseek.min.js'
	];

	/**
	 * @var array list of bundle class names that this bundle depends on.
	 */
	public $depends = [
		'yii\bootstrap\BootstrapAsset'
	];

	/**
	 * @var array the options to be passed to [[AssetManager::publish()]] when the asset bundle
	 * is being published.
	 */
	public $publishOptions = [
		'forceCopy' => YII_DEBUG
	];
}