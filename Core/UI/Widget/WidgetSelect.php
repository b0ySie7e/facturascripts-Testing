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

namespace FacturaScripts\Core\UI\Widget;

use FacturaScripts\Core\Model\Base\ModelClass;
use FacturaScripts\Core\Template\UI\Widget;
use FacturaScripts\Dinamic\Lib\AssetManager;

class WidgetSelect extends Widget
{
    /** @var array */
    public $options = [];

    public function __construct(string $name, ?string $field = null, ?string $label = null)
    {
        parent::__construct($name, $field, $label);

        AssetManager::add('css', 'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css');
        AssetManager::add('css', 'https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@1.5.2/dist/select2-bootstrap4.min.css');
        AssetManager::add('js', 'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js');
        AssetManager::add('js', 'Dinamic/Assets/js/UIWidgetSelect.js');
    }

    public function option($key)
    {
        return $this->options[$key] ?? '';
    }

    public function render(string $context = ''): string
    {
        switch ($context) {
            default:
                return '<div class="form-group">'
                    . '<label for="' . $this->id() . '">' . $this->label . '</label><br/>'
                    . '<select class="form-control ui-widget-select" id="' . $this->id() . '" name="' . $this->field . '">'
                    . $this->renderOptions()
                    . '</select>'
                    . '</div>';

            case 'td':
                return '<td class="text-' . $this->align . '">' . $this->option($this->value) . '</td>';

            case 'th':
                return '<th class="text-' . $this->align . '">' . $this->label . '</th>';
        }
    }

    public function setOptions(array $options): self
    {
        $this->options = $options;

        return $this;
    }

    public function setOptionsFromModel(ModelClass $model, array $where = [], array $orderBy = [], int $offset = 0, int $limit = 0): self
    {
        $options = [];
        foreach ($model->all($where, $orderBy, $offset, $limit) as $item) {
            $options[$item->primaryColumnValue()] = $item->primaryDescription();
        }

        $this->setOptions($options);

        return $this;
    }

    protected function renderOptions(): string
    {
        $html = '';
        foreach ($this->options as $key => $value) {
            if (is_array($value)) {
                $html .= '<optgroup label="' . $value['label'] . '">';
                foreach ($value['options'] as $key2 => $value2) {
                    $html .= '<option value="' . $key2 . '">' . $value2 . '</option>';
                }
                $html .= '</optgroup>';
                continue;
            }

            $html .= '<option value="' . $key . '">' . $value . '</option>';
        }

        return $html;
    }
}
