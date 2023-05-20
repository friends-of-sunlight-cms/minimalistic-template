<?php

namespace SunlightTemplate\Minimalistic;

use Sunlight\Plugin\Action\PluginAction;
use Sunlight\Plugin\TemplatePlugin as BaseTemplatePlugin;

class TemplatePlugin extends BaseTemplatePlugin
{
    public function getAction(string $name): ?PluginAction
    {
        if ($name === 'config') {
            return new ConfigAction($this);
        }
        return parent::getAction($name);
    }

    protected function getConfigDefaults(): array
    {
        return [
            'menu_start' => 1,
            'menu_end' => 6,
            'show_breadcrumbs' => false,
        ];
    }
}