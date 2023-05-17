<?php

use Sunlight\Hcm;
use Sunlight\Template;

defined('SL_ROOT') or exit;
?>
<div class="full">
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
                        <?= Template::menu(1, 6) ?>
                    </div>
                    <div class="responsive-menu-bar">
                        <input class="unpack" id="box3" type="checkbox">
                        <div class="unpacking">
                            <label for="box3">
                            </label>
                            <div class="menu-box">
                                <?= Template::menu(1, 6) ?>
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
    <div class="cleaner">
    </div>
    <div class="section-column-top">
        <div class="bg-color">
        </div>
    </div>
    <div class="section-content">
        <div class="row">
            <div class="content">
                <div class="column-left">
                    <?= Template::boxes('left') ?>
                </div>
                <div class="column-right">
                    <?= Template::boxes('right') ?>
                </div>
                <div class="content-overflow-check">
                    <div class="column-content">
                        <div class="heading">
                            <?= Template::heading() ?>
                        </div>
                        <?= Template::backlink() ?>
                        <?= Template::content() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-column-bottom">
        <div class="bg-color">
        </div>
    </div>
    <div class="cleaner">
    </div>
    <div class="section-footer">
        <div class="footer">
            <div class="row">
                <div class="column-footer">
                    <div class="menu">
                        <?= Template::links() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>