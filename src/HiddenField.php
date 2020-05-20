<?php

namespace Outhebox\NovaHiddenField;

use Laravel\Nova\Fields\Field;

class HiddenField extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'hidden-field';

    /**
     * Fill the field value with the provided value.
     *
     * @param  string $value
     * @return $this
     */
    public function defaultValue(string $value = null)
    {
        return $this->withMeta(['value' => $value]);
    }

    /**
     * Fill the field value with the current user id.
     *
     * @return $this
     */
    public function current_user_id()
    {
        return $this->withMeta(['value' => $this->user_id ?? auth()->user()->id]);
    }
}
