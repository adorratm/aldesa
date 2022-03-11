<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!-- Start Page Banner -->
<div class="page-banner-area">
    <img width="1920" height="400" data-src="<?= !empty($products_category->banner_url) ? get_picture("product_categories_v", $products_category->banner_url) : get_picture("settings_v", $settings->product_logo) ?>" class="img-fluid w-100 lazyload" alt="<?= strto("lower|upper", lang("products")) ?>">
    <div class="container">
        <div class="page-banner-content">
            <h2><?= strto("lower|upper", (!empty($products_category) ? $products_category->title : lang("products"))) ?></h2>
        </div>
    </div>
</div>
<!-- End Page Banner -->


<div class="blog-area pt-100 pb-100">
    <div class="container">
        <div class="row">
            <?php if (!empty($this->uri->segment(3)) && !is_numeric($this->uri->segment(3))) : ?>
                <?php if (!empty($products)) : ?>
                    <?php foreach ($products as $key => $value) : ?>
                        <?php if (strtotime($value->sharedAt) <= strtotime("now")) : ?>
                            <div class="col-sm-6 col-lg-4 mb-3">
                                <div class="single-blog h-100">
                                    <div class="blog-image">
                                        <a rel="dofollow" href="<?= base_url(lang("routes_products") . "/" . lang("routes_product") . "/{$value->url}" . (!empty($_GET["key"]) ? "?key=" . clean($_GET["key"]) : null)) ?>" title="<?= $value->title ?>">
                                            <img width="1920" height="1280" loading="lazy" data-src="<?= get_picture("products_v", $value->img_url) ?>" alt="<?= $value->title ?>" class="img-fluid lazyload">
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <h3>
                                            <a rel="dofollow" href="<?= base_url(lang("routes_products") . "/" . lang("routes_product") . "/{$value->url}" . (!empty($_GET["key"]) ? "?key=" . clean($_GET["key"]) : null)) ?>" title="<?= $value->title ?>"><?= $value->title ?></a>
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
                            <div class="single-blog h-100">
                                <div class="blog-image">
                                    <a rel="dofollow" href="<?= base_url(lang("routes_products")  . "/{$value->seo_url}" . (!empty($_GET["key"]) ? "?key=" . clean($_GET["key"]) : null)) ?>" title="<?= $value->title ?>">
                                        <img width="1920" height="1280" loading="lazy" data-src="<?= get_picture("product_categories_v", $value->img_url) ?>" alt="<?= $value->title ?>" class="img-fluid lazyload">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <h3>
                                        <a rel="dofollow" href="<?= base_url(lang("routes_products") . "/{$value->seo_url}" . (!empty($_GET["key"]) ? "?key=" . clean($_GET["key"]) : null)) ?>" title="<?= $value->title ?>"><?= $value->title ?></a>
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