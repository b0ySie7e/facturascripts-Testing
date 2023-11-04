<?php
/**
 * This file is part of FacturaScripts
 * Copyright (C) 2023 Carlos Garcia Gomez <carlos@facturascripts.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

namespace FacturaScripts\Core\Template\UI;

use FacturaScripts\Core\Model\Base\ModelClass;
use FacturaScripts\Core\Tools;

abstract class Widget extends Component
{
    /** @var string */
    protected $align = 'left';

    /** @var int */
    protected $cols = 0;

    /** @var string */
    protected $field = '';

    /** @var string */
    protected $label = '';

    /** @var mixed */
    protected $value;

    public function __construct(string $name, ?string $field = null, ?string $label = null)
    {
        parent::__construct($name);

        $this->field = $field ?? $name;
        $this->setLabel($label ?? $name);
    }

    public function cols(): int
    {
        return $this->cols;
    }

    public function field(): string
    {
        return $this->field;
    }

    public function label(): string
    {
        return $this->label;
    }

    public static function make(string $name, ?string $field = null, ?string $label = null)
    {
        return new static($name, $field, $label);
    }

    public function setAlign(string $align): self
    {
        $this->align = $align;

        return $this;
    }

    public function setCols(int $cols): self
    {
        $this->cols = $cols;

        return $this;
    }

    public function setField(string $field): self
    {
        $this->field = $field;

        return $this;
    }

    public function setLabel(string $label, array $params = []): self
    {
        $this->label = Tools::lang()->trans($label, $params);

        return $this;
    }

    public function setValue($value): self
    {
        $this->value = $value;

        return $this;
    }

    public function setValueFromArray(array $data): self
    {
        if (array_key_exists($this->field, $data)) {
            $this->setValue($data[$this->field]);
        }

        return $this->setValue(null);
    }

    public function setValueFromModel(ModelClass $model): self
    {
        if (property_exists($model, $this->field)) {
            return $this->setValue($model->{$this->field});
        }

        return $this->setValue(null);
    }

    public function value()
    {
        return $this->value;
    }
}
