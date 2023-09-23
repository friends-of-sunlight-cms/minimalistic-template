<?php

use Sunlight\Template;

defined('SL_ROOT') or exit;

$config = Template::getCurrent()->getConfig();
if ($config['show_breadcrumbs'] === true) {
    echo _buffer(function () { ?>
        <div class="breadcrumbs">
            <?= Template::breadcrumbs() ?>
        </div>
    <?php });
}