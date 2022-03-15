<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!--================= Breadcrumbs Section Start Here =================-->
<div class="react-breadcrumbs">
    <div class="breadcrumbs-wrap">
        <img width="1920" height="500" data-src="<?= get_picture("settings_v", $settings->reference_logo) ?>" alt="<?= strto("lower|upper", lang("references")) ?>" class="lazyload w-100 img-fluid">
        <div class="breadcrumbs-inner">
            <div class="container">
                <div class="breadcrumbs-text">
                    <h1 class="breadcrumbs-title"><?= strto("lower|upper", lang("references")) ?></h1>
                    <div class="back-nav">
                        <ul>
                            <li><a rel="dofollow" href="<?= base_url(); ?>" title="<?= strto("lower|upper", lang("home")) ?>"><?= strto("lower|upper", lang("home")) ?></a></li>
                            <li><?= strto("lower|upper", lang("references")) ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================= Breadcrumbs Section End Here =================-->

<!--================= Course Filter Section Start Here =================-->
<div class="react-course-filter back__course__page_grid back__course__page_grid_left pb---60 pt---60">
    <div class="container pb---60">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <?php foreach ($references as $key => $value) : ?>
                        <?php if (strtotime($value->sharedAt) <= strtotime("now")) : ?>
                            <div class="single-studies col-lg-6 grid-item align-content-stretch align-items-stretch align-self-stretch mb-4">
                                <div class="inner-course h-100">
                                    <div>
                                        <a rel="dofollow" href="<?= base_url(lang("routes_references") . "/" . lang("routes_reference_detail") . "/{$value->seo_url}") ?>" title="<?= $value->title ?>">
                                            <img width="1920" height="1280" loading="lazy" data-src="<?= get_picture("references_v", $value->img_url) ?>" alt="<?= $value->title ?>" class="lazyload rounded img-fluid">
                                        </a>
                                    </div>
                                    <div class="case-content">
                                        <h4 class="case-title"> <a rel="dofollow" href="<?= base_url(lang("routes_references") . "/" . lang("routes_reference_detail") . "/{$value->seo_url}") ?>" title="<?= $value->title ?>"><?= $value->title ?></a></h4>
                                        <ul class="meta-course">
                                            <?php foreach ($categories as $k => $v) : ?>
                                                <?php if ($v->id == $value->category_id) : ?>
                                                    <li><a class="text-secondary" rel="dofollow" href="<?= base_url(lang("routes_references") . "/{$v->seo_url}") ?>" title="<?= $v->title ?>"><i class="fa fa-folder"></i> <?= $v->title ?></a></li>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        </ul>
                                        <div class="my-3">
                                            <?= mb_word_wrap($value->content, 150, "...") ?>
                                        </div>
                                        <div>
                                            <a class="custom-button" rel="dofollow" href="<?= base_url(lang("routes_references") . "/" . lang("routes_reference_detail") . "/{$value->seo_url}") ?>" title="<?= $value->title ?>"><?= lang("viewReference") ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif ?>
                    <?php endforeach ?>
                </div>
                <!--================= Pagination Section Start Here =================-->
                <?= $links ?>
                <!--================= Pagination Section End Here =================-->
            </div>
            <div class="col-lg-4">
                <div class="react-sidebar ml----30">
                    <div class="widget back-search">
                        <h3 class="widget-title"><?= lang("searchReferences") ?></h3>
                        <?php $csrf = array(
                            'name' => $this->security->get_csrf_token_name(),
                            'hash' => $this->security->get_csrf_hash()
                        ); ?>
                        <form action="<?= !empty($this->uri->segment(3) && !is_numeric($this->uri->segment(3))) ? base_url(lang("routes_references") . "/" . $this->uri->segment(3)) : base_url(lang("routes_references")) ?>" method="GET" enctype="multipart/form-data">
                            <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
                            <input name="search" type="search" placeholder="<?= lang("searchReferences") ?>..." required>
                            <button aria-label="<?= $settings->company_name ?>" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!--================= Course Filter Section End Here =================-->