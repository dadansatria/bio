<?php

namespace app\widgets;

use yii\bootstrap\Widget;
use yii\helpers\Html;

/**
 * Label renders a bootstrap label.
 *
 * For example,
 *
 * ```php
 * echo Label::widget([
 *     'text' => 'New',
 *     'context' => 'success'
 * ]);
 * ```
 * @author Iqbal Hamsyah <iqbal.hamsyah@gmail.com>
 */
class Label extends Widget
{
    /**
     * @var string the tag to use to render the label
     */
    public $tagName = 'label';
    /**
     * @var string the label text
     */
    public $text;
    /**
     * @var string the label context
     */
    public $context = 'default';
    /**
     * @var boolean whether the label text should be HTML-encoded.
     */
    public $encodeLabel = true;
    /**
     * @var string
     */
    public static $tagClassPrefix = 'label label-';

    /**
    * Initializes the widget.
    * If you override this method, make sure you call the parent implementation first.
    */
    public function init()
    {
        parent::init();
        $this->clientOptions = false;
        Html::addCssClass($this->options, ['class' => self::$tagClassPrefix . $this->context]);
    }

    /**
     * Renders the widget.
     */
    public function run()
    {
        return Html::tag($this->tagName, $this->encodeLabel ? Html::encode($this->text) : $this->text, $this->options);
    }

}
