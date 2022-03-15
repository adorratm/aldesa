<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!--================= Breadcrumbs Section Start Here =================-->
<div class="react-breadcrumbs">
    <div class="breadcrumbs-wrap">
        <img width="1920" height="500" data-src="<?= !empty($reference->banner_url) ? get_picture("references_v",$reference->banner_url) : get_picture("settings_v", $settings->reference_logo) ?>" alt="<?= strto("lower|upper", $reference->title) ?>" class="lazyload w-100 img-fluid">
        <div class="breadcrumbs-inner">
            <div class="container">
                <div class="breadcrumbs-text">
                    <h1 class="breadcrumbs-title"><?= strto("lower|upper", $reference->title) ?></h1>
                    <div class="back-nav">
                        <ul>
                            <li><a rel="dofollow" href="<?= base_url(); ?>" title="<?= strto("lower|upper", lang("home")) ?>"><?= strto("lower|upper", lang("home")) ?></a></li>
                            <li><a rel="dofollow" href="<?= base_url("routes_references") ?>"><?= strto("lower|upper", lang("academicDepartments")) ?></a></li>
                            <li><?= strto("lower|upper", $reference->title) ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================= Breadcrumbs Section End Here =================-->

<!--================= Course Filter Section Start Here =================-->
<div class="back__course__page_grid react-courses__single-page pb---60 pt---60">
    <div class="container pb---60">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-single-inner">
                    <div class="blog-content">
                        <img width="1920" height="1280" loading="lazy" data-src="<?= get_picture("references_v", $reference->img_url) ?>" alt="<?= $reference->title ?>" class="img-fluid border-radius w-100 lazyload mb-4" style="min-height:200px;object-fit:cover">
                        <h2><?= $reference->title ?></h2>
                        <ul class="list-inline mb-3">
                            <li class="list-inline-item"><?= lang("referenceCategories") ?> :</li>
                            <?php foreach ($categories as $k => $v) : ?>
                                <?php if ($v->id == $reference->category_id) : ?>
                                    <li class="list-inline-item"><a style="font-size: 13px;color: black;font-weight: 700;" rel="dofollow" href="<?= base_url(lang("routes_references") . "/{$v->seo_url}") ?>" title="<?= $v->title ?>"> <span> <?= $v->title ?></span></a></li>
                                <?php endif ?>
                            <?php endforeach ?>
                        </ul>
                        <hr>
                        <?= $reference->content ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 md-mt-60">
                <div class="react-sidebar ml----30">
                    <div class="widget back-search">
                        <h3 class="widget-title"><?= lang("searchReferences") ?></h3>
                        <?php $csrf = array(
                            'name' => $this->security->get_csrf_token_name(),
                            'hash' => $this->security->get_csrf_hash()
                        ); ?>
                        <form action="<?= base_url(lang("routes_references")) ?>" method="GET" enctype="multipart/form-data">
                            <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
                            <input name="search" type="search" placeholder="<?= lang("searchReferences") ?>..." required>
                            <button aria-label="<?= $settings->company_name ?>" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="widget react-categories-course">
                        <h3 class="widget-title"><?= lang("referenceCategories") ?></h3>
                        <ul class="recent-category">
                            <?php foreach ($categories as $k => $v) : ?>
                                <li><a rel="dofollow" href="<?= base_url(lang("routes_references") . "/{$v->seo_url}") ?>" title="<?= $v->title ?>"><?= $v->title ?></a></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================= Course Filter Section End Here =================-->