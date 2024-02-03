<?php

namespace SunlightTemplate\Minimalistic;

use Sunlight\Core;
use Sunlight\Localization\LocalizationDirectory;
use Sunlight\Plugin\Action\ConfigAction as BaseConfigAction;
use Sunlight\Plugin\Plugin;
use Sunlight\Util\Form;

class ConfigAction extends BaseConfigAction
{
    public const THEME_ID = 'minimalistic';

    /** @var $plugin TemplatePlugin */
    protected $plugin;

    public function __construct(Plugin $plugin)
    {
        $this->plugin = $plugin;
        // register lang for administration
        Core::$dictionary->registerSubDictionary(self::THEME_ID, new LocalizationDirectory(__DIR__ . DIRECTORY_SEPARATOR . '../lang/'));
        parent::__construct($plugin);
    }

    protected function getFields(): array
    {
        // config instance
        $config = $this->plugin->getConfig();
        return [
            // menu
            'menu_start' => [
                'label' => _lang(self::THEME_ID . '.menu_start'),
                'input' => '<input type="number" min="0" name="config[menu_start]" value="' . $config['menu_start'] . '" class="inputmini">',
                'type' => 'text'
            ],
            'menu_end' => [
                'label' => _lang(self::THEME_ID . '.menu_end'),
                'input' => '<input type="number" min="0" name="config[menu_end]" value="' . $config['menu_end'] . '" class="inputmini">',
                'type' => 'text'
            ],
            'show_breadcrumbs' => [
                'label' => _lang(self::THEME_ID . '.show_breadcrumbs'),
                'input' => '<input type="checkbox" name="config[show_breadcrumbs]" value="1"' . Form::loadCheckbox('config', $config['show_breadcrumbs'], 'show_breadcrumbs')) . '>',
                'type' => 'checkbox'
            ],
        ];
    }
}