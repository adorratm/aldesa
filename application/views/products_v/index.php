<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="inner-banner inner-bg2">
    <img width="1920" height="400" data-src="<?= !empty($products_category->banner_url) ? get_picture("product_categories_v", $products_category->banner_url) : get_picture("settings_v", $settings->product_logo) ?>" class="img-fluid w-100 lazyload" alt="<?= strto("lower|upper", lang("products")) ?>">
    <div class="container">
        <div class="inner-title text-center">
            <h3><?= strto("lower|upper", (!empty($products_category) ? $products_category->title : lang("products"))) ?></h3>
            <ul>
                <li><a rel="dofollow" href="<?= base_url(); ?>" title="<?= strto("lower|upper", lang("home")) ?>"><?= strto("lower|upper", lang("home")) ?></a></li>
                <li><i class="fa fa-angle-right"></i></li>
                <?php if (!empty($products_category)) : ?>
                    <li><a href="<?= base_url(lang("routes_products")); ?>" rel="dofollow" title="<?= strto("lower|upper", lang("products")) ?>"><?= strto("lower|upper", lang("products")) ?></a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li><?= strto("lower|upper", $products_category->title) ?></li>
                <?php else : ?>
                    <li><?= strto("lower|upper", lang("products")) ?></li>
                <?php endif ?>
            </ul>
        </div>
    </div>
</div>



<div class="product-area pt-100 pb-70">
    <div class="container">
        <div class="row pt-45">
            <?php if (!empty($this->uri->segment(3)) && !is_numeric($this->uri->segment(3))) : ?>
                <?php if (!empty($products)) : ?>
                    <?php foreach ($products as $key => $value) : ?>
                        <?php if (strtotime($value->sharedAt) <= strtotime("now")) : ?>
                            <div class="col-sm-6 col-lg-4 mb-3">
                                <div class="single-product h-100">
                                    <a rel="dofollow" href="<?= base_url(lang("routes_products") . "/" . lang("routes_product") . "/{$value->url}" . (!empty($_GET["key"]) ? "?key=" . clean($_GET["key"]) : null)) ?>" title="<?= $value->title ?>">
                                        <img width="1920" height="1280" loading="lazy" data-src="<?= get_picture("products_v", $value->img_url) ?>" alt="<?= $value->title ?>" class="img-fluid lazyload">
                                    </a>
                                    <div class="product-content">
                                        <h3 class="text-center">
                                            <a class="text-center" rel="dofollow" href="<?= base_url(lang("routes_products") . "/" . lang("routes_product") . "/{$value->url}" . (!empty($_GET["key"]) ? "?key=" . clean($_GET["key"]) : null)) ?>" title="<?= $value->title ?>"><?= $value->title ?></a>
                                        </h3>
                                        <span>
                                            <?php $i = 1 ?>
                                            <?php $count = count(explode(",", $value->category_ids)) ?>
                                            <?php foreach (explode(",", $value->category_titles) as $k => $v) : ?>
                                                <?php $seo_url = explode(",", $value->category_seos)[$k]; ?>
                                                <?php if ($i < $count) : ?>
                                                    <a style="color:#0d0d0dd1;" rel="dofollow" href="<?= base_url(lang("routes_products") . "/{$seo_url}" . (!empty($_GET["key"]) ? "?key=" . clean($_GET["key"]) : null)) ?>" title="<?= $v ?>"><?= $v ?></a>,
                                                <?php else : ?>
                                                    <a style="color:#0d0d0dd1;" rel="dofollow" href="<?= base_url(lang("routes_products") . "/{$seo_url}" . (!empty($_GET["key"]) ? "?key=" . clean($_GET["key"]) : null)) ?>" title="<?= $v ?>"><?= $v ?></a>
                                                <?php endif ?>
                                                <?php $i++ ?>
                                            <?php endforeach ?>
                                        </span>
                                    </div>
                                </div>
                            </div>

                        <?php endif ?>
                    <?php endforeach ?>
                    <?php if (!empty($links)) : ?>
                        <div class="col-12 text-center">
                            <?= $links ?>
                        </div>
                    <?php endif ?>
                <?php else : ?>
                    <div class="col-12">
                        <div class="alert w-100" role="alert">
                            <h4 class="alert-heading text-green"><?= lang("cannotFindProductTitle") ?></h4>
                        </div>
                    </div>
                <?php endif ?>
            <?php else : ?>
                <?php if (!empty($categories)) : ?>
                    <?php foreach ($categories as $key => $value) : ?>
                        <div class="col-sm-6 col-lg-4 mb-3">
                            <div class="single-product h-100">
                                <a rel="dofollow" href="<?= base_url(lang("routes_products")  . "/{$value->seo_url}" . (!empty($_GET["key"]) ? "?key=" . clean($_GET["key"]) : null)) ?>" title="<?= $value->title ?>">
                                    <img width="1920" height="1280" loading="lazy" data-src="<?= get_picture("product_categories_v", $value->img_url) ?>" alt="<?= $value->title ?>" class="img-fluid lazyload">
                                </a>
                                <div class="product-content">
                                    <h3 class="text-center">
                                        <a class="text-center" rel="dofollow" href="<?= base_url(lang("routes_products") . "/{$value->seo_url}" . (!empty($_GET["key"]) ? "?key=" . clean($_GET["key"]) : null)) ?>" title="<?= $value->title ?>"><?= $value->title ?></a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                <?php endif ?>
            <?php endif ?>
        </div>
    </div>
</div>