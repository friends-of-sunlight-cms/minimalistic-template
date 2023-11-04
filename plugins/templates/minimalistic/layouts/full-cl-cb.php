<?php

use Sunlight\Template;

defined('SL_ROOT') or exit;
?>
<div class="full">
    <?php require __DIR__ . '/include/header.php'; ?>
    <div class="section-content">
        <div class="row">
            <div class="content">
                <div class="cb-column-left">
                    <?= Template::boxes('left') ?>
                </div>
                <div class="content-overflow-check">
                    <div class="column-content">
                        <?php require __DIR__ . '/include/breadcrumbs.php'; ?>
                        <div class="heading">
                            <?= Template::heading() ?>
                        </div>
                        <?= Template::backlink() ?>
                        <?= Template::content() ?>
                    </div>
                </div>
                <div class="responsive-column-left column-left">
                    <?= Template::boxes('left') ?>
                </div>
            </div>
        </div>
    </div>
    <?php require __DIR__ . '/include/footer.php'; ?>
</div>