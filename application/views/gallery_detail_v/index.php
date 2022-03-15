<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="inner-banner inner-bg2">
    <img width="1920" height="400" data-src="<?= get_picture("settings_v", $settings->gallery_logo) ?>" class="img-fluid w-100 lazyload" alt="<?= strto("lower|upper", $gallery->title) ?>">
    <div class="container">
        <div class="inner-title text-center">
            <h3><?= strto("lower|upper", $gallery->title) ?></h3>
            <ul>
                <li><a rel="dofollow" href="<?= base_url(); ?>" title="<?= strto("lower|upper", lang("home")) ?>"><?= strto("lower|upper", lang("home")) ?></a></li>
                <li><i class="fa fa-angle-right"></i></li>
                <li><?= strto("lower|upper", $gallery->title) ?></li>
            </ul>
        </div>
    </div>
</div>


<!--=========================-->
<!--=       Breadcrumb      =-->
<!--=========================-->

<!-- Start Blog Slider Section -->
<div class="about-area pt-100 pb-100">
    <div class="container">
        <div class="row <?= ($gallery->gallery_type != "files" ? "gallery-slider" : null) ?>" <?= ($gallery->gallery_type != "files" ? "itemscope" : null) ?>>
            <?php foreach ($gallery_items as $key => $value) : ?>
                <?php if ($gallery->gallery_type == "files") : ?>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 align-align-self-stretch align-items-stretch align-content-stretch mb-3">
                        <?php $extension = pathinfo(FCPATH . "galleries_v/{$gallery->gallery_type}/{$gallery->folder_name}/" . $value->url)["extension"] ?>
                        <a class="text-center fs-5 p-3 border align-align-self-stretch align-items-stretch align-content-stretch d-flex flex-column justify-content-center h-100 w-100" rel="dofollow" href="<?= get_picture("galleries_v/{$gallery->gallery_type}/{$gallery->folder_name}", $value->url) ?>" alt="<?= $value->title ?>" <?=(!empty($extension) && $extension != "pdf" ? "download='".(!empty($value->title) ? $value->title . "." . $extension : null)."'": "target='_blank'")?>>
                            <?php if (!empty($value->img_url)) : ?>
                                <img data-src="<?= get_picture("galleries_v/{$gallery->gallery_type}", $value->img_url) ?>" alt="<?=$value->title?>" class="lazyload img-fluid d-block mb-3">
                            <?php endif ?>
                            <i class="fa fa-download bx-2x"></i> <?= !empty($value->title) && !empty($extension) ? $value->title . "." . $extension : $value->url ?>
                        </a>
                    </div>
                <?php else : ?>
                    <figure class="col-12 col-sm-12 col-md-12 <?= ($gallery->gallery_type == "videos" || $gallery->gallery_type == "video_urls" ? "col-lg-12 col-xl-12" : "col-lg-4 col-xl-3") ?> d-flex justify-content-center text-center border-radius" itemprop="associatedMedia" itemscope>
                        <?php if ($gallery->gallery_type == "videos") : ?>
                            <video id="my-video<?= $key ?>" controls preload="auto" width="100%">
                                <source src="<?= get_picture("galleries_v/{$gallery->gallery_type}/{$gallery->folder_name}", $value->url) ?>" />
                            </video>
                        <?php elseif ($gallery->gallery_type == "video_urls") : ?>
                            <?= htmlspecialchars_decode($value->url) ?>
                        <?php else : ?>
                            <a class="border-radius" rel="dofollow" href="<?= get_picture("galleries_v/{$gallery->gallery_type}/{$gallery->folder_name}", $value->url) ?>" title="<?= lang("viewItem") ?>" itemprop="contentUrl" data-size="1000x1000">
                                <picture>
                                    <img width="1920" height="1280" loading="lazy" class="img-fluid border-radius lazyload w-100" src="<?= get_picture("galleries_v/{$gallery->gallery_type}/{$gallery->folder_name}", $value->url) ?>" data-src="<?= get_picture("galleries_v/{$gallery->gallery_type}/{$gallery->folder_name}", $value->url) ?>" alt="<?= $value->title ?>" itemprop="thumbnail" width="457" height="315">
                                </picture>
                                <figcaption itemprop="caption description">
                                    <small><?= $value->title ?></small>
                                    <?= $value->description ?>
                                </figcaption>
                            </a>
                        <?php endif ?>
                    </figure>
                <?php endif ?>
            <?php endforeach ?>
        </div>
    </div>
</div>

<!-- End Blog Slider Section -->