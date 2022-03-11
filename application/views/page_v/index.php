<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="inner-banner inner-bg2">
    <img width="1920" height="400" data-src="<?= !empty($item->banner_url) ? get_picture("pages_v", $item->banner_url)  : get_picture("settings_v", $settings->about_logo) ?>" class="img-fluid w-100 lazyload" alt="<?= strto("lower|upper", $item->title) ?>">
    <div class="container">
        <div class="inner-title text-center">
            <h3><?= strto("lower|upper", $item->title) ?></h3>
            <ul>
                <li><a rel="dofollow" href="<?= base_url(); ?>" title="<?= strto("lower|upper", lang("home")) ?>"><?= strto("lower|upper", lang("home")) ?></a></li>
                <li><i class="fa fa-angle-right"></i></li>
                <li><?= strto("lower|upper", $item->title) ?></li>
            </ul>
        </div>
    </div>
</div>


<div class="about-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <?php if (!empty($item->img_url)) : ?>
                <div class="col-lg-6">
                    <div class="about-img-2">
                        <img width="1920" height="1280" loading="lazy" data-src="<?= get_picture("pages_v", $item->img_url) ?>" alt="<?= $item->title ?>" class="img-fluid lazyload border-radius">
                    </div>
                </div>
            <?php endif ?>
            <div class="<?= !empty($item->img_url) ? "col-lg-6" : "col-lg-12" ?>">
                <div class="about-content">
                    <div class="section-title">
                        <h3><?= $item->title ?></h3>
                        <?= $item->content ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>