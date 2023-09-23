<?php

use Sunlight\Hcm;
use Sunlight\Template;

defined('SL_ROOT') or exit;

$config = Template::getCurrent()->getConfig();

?>
<div class="section-header">
    <div class="header">
        <div class="row">
            <div class="header-column-right">
                <div class="user-bar">
                    <input class="unpack" id="box2" type="checkbox">
                    <div class="unpacking">
                        <label for="box2">
                        </label>
                        <div class="user-box">
                            <?= Template::userMenu() ?>
                        </div>
                    </div>
                </div>
                <div class="search-bar">
                    <input class="unpack" id="box1" type="checkbox">
                    <div class="unpacking">
                        <label for="box1">
                        </label>
                        <div class="search-box">
                            <?= Hcm::run('search'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-overflow-check">
                <div class="site-title">
                    <a href="<?php echo Template::siteUrl() ?>">
                        <?php echo Template::siteTitle() ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="nav">
        <div class="row">
            <div class="responsive-header-overflow-check">
                <div class="site-description">
                    <?php echo Template::siteDescription() ?>
                </div>
            </div>
            <div class="header-column-right">
                <div class="menu-bar">
                    <?= Template::menu($config['menu_start'], $config['menu_end']) ?>
                </div>
                <div class="responsive-menu-bar">
                    <input class="unpack" id="box3" type="checkbox">
                    <div class="unpacking">
                        <label for="box3">
                        </label>
                        <div class="menu-box">
                            <?= Template::menu($config['menu_start'], $config['menu_end']) ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-overflow-check">
                <div class="site-description">
                    <?php echo Template::siteDescription() ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="cleaner"></div>
