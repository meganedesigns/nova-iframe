<?php

namespace Metrixinfo\Nova\Fields;

use Laravel\Nova\Fields\Field;

/**
 * Class Iframe
 * @package Metrixinfo\Nova\Fields
 */
class Iframe extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'iframe';

    /**
     * Indicates if the element should be shown on the index view.
     *
     * @var bool
     */
    public $showOnIndex = false;

    /**
     * Indicates if the element should be shown on the creation view.
     *
     * @var bool
     */
    public $showOnCreation = false;

    /**
     * Indicates if the element should be shown on the update view.
     *
     * @var bool
     */
    public $showOnUpdate = false;

    /**
     * Set the size of the iframe.
     *
     * @param string $width
     * @param string $height
     *
     * @return $this
     */
    public function size(string $width, string $height): self
    {
        return $this->withMeta(['width'=>$width, 'height'=>$height]);
    }

    /**
     * Set class(es) on the iframe element
     *
     * @param string $classes
     *
     * @return $this
     */
    public function classes(string $classes): self
    {
        return $this->withMeta(['classes'=>$classes]);
    }

    /**
     * Set style on the iframe element.
     *
     * @param string $style
     *
     * @return $this
     */
    public function style(string $style): self
    {
        return $this->withMeta(['style'=>$style]);
    }

    /**
     * Show url (src) rather than default setup which shows HTML contents (srcdoc).
     *
     * @param string $url
     *
     * @return $this
     */
    public function url(string $url): self
    {
        return $this->withMeta(['url'=>$url]);
    }

}
