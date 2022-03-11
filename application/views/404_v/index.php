<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="inner-banner inner-bg2">
    <img width="1920" height="400" data-src="<?= get_picture("settings_v", $settings->about_logo) ?>" class="img-fluid w-100 lazyload" alt="<?= strto("lower|upper", lang("pageNotFound")) ?>">
    <div class="container">
        <div class="inner-title text-center">
            <h3><?= strto("lower|upper", lang("pageNotFound")) ?></h3>
            <ul>
                <li><a rel="dofollow" href="<?= base_url(); ?>" title="<?= strto("lower|upper", lang("home")) ?>"><?= strto("lower|upper", lang("home")) ?></a></li>
                <li><i class="fa fa-angle-right"></i></li>
                <li><?= strto("lower|upper", lang("pageNotFound")) ?></li>
            </ul>
        </div>
    </div>
</div>


<div class="error-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="error-content">
                <img loading="lazy" data-src="<?= asset_url("public/images/404.webp") ?>" alt="<?= lang("pageNotFound") ?>" class="img-fluid lazyload" width="550" height="515">
                <h3><?= lang("pageNotFound") ?></h3>
                <p><?= lang("404Desc") ?></p>
                <a rel="dofollow" href="<?= base_url() ?>" title="<?= lang("404Home") ?>" class="default-btn default-hot-toddy"><?= lang("404Home") ?></a>
            </div>
        </div>
    </div>
</div>