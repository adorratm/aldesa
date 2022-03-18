<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="inner-banner inner-bg2">
    <img width="1920" height="400" data-src="<?= get_picture("settings_v", $settings->blog_logo) ?>" class="img-fluid w-100 lazyload" alt="<?= strto("lower|upper", lang("blog")); ?>">
    <div class="container">
        <div class="inner-title text-center">
            <h3><?= !empty($category) ? strto("lower|upper",$category->title) : strto("lower|upper", lang("blog")); ?></h3>
            <ul>
                <li><a rel="dofollow" href="<?= base_url(); ?>" title="<?= strto("lower|upper", lang("home")) ?>"><?= strto("lower|upper", lang("home")) ?></a></li>
                <li><i class="fa fa-angle-right"></i></li>
                <?php if (!empty($category)) : ?>
                    <li><a href="<?= base_url(lang("routes_blog")); ?>" rel="dofollow" title="<?= strto("lower|upper", lang("blog")) ?>"><?= strto("lower|upper", lang("blog")) ?></a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li><?= strto("lower|upper", $category->title) ?></li>
                <?php else:?>
                    <li><?= strto("lower|upper", lang("blog")); ?></li>
                <?php endif ?>
            </ul>
        </div>
    </div>
</div>



<div class="blog-details-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <?php foreach ($blogs as $key => $value) : ?>
                        <?php if (strtotime($value->sharedAt) <= strtotime("now")) : ?>
                            <div class="col-lg-12 col-md-6">
                                <div class="blog-card blog-card-bg">
                                    <div class="blog-img">
                                        <a rel="dofollow" href="<?= base_url(lang("routes_blog") . "/" . lang("routes_blog_detail") . "/{$value->seo_url}") ?>" title="<?= $value->title ?>">
                                            <img width="1920" height="1280" loading="lazy" data-src="<?= get_picture("blogs_v", $value->img_url) ?>" alt="<?= $value->title ?>" class="lazyload img-fluid" width="400" height="400">
                                        </a>
                                        <span class="date"><?= iconv("ISO-8859-9", "UTF-8", @strftime("%d %B %Y, %A %X", strtotime($value->updatedAt))); ?></span>
                                    </div>
                                    <div class="content">
                                        <h3><a rel="dofollow" href="<?= base_url(lang("routes_blog") . "/" . lang("routes_blog_detail") . "/{$value->seo_url}") ?>" title="<?= $value->title ?>"><?= $value->title ?></a></h3>
                                        <ul class="list-unstyled">
                                            <?php foreach ($categories as $k => $v) : ?>
                                                <?php if ($v->id == $value->category_id) : ?>
                                                    <li><a class="text-secondary" rel="dofollow" href="<?= base_url(lang("routes_blog") . "/{$v->seo_url}") ?>" title="<?= $v->title ?>"><i class="fa fa-folder"></i> <?= $v->title ?></a></li>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        </ul>
                                        <p><?= mb_word_wrap($value->content, 500, "...") ?></p>
                                        <a rel="dofollow" href="<?= base_url(lang("routes_blog") . "/" . lang("routes_blog_detail") . "/{$value->seo_url}") ?>" title="<?= $value->title ?>" class="read-more-btn"><?= lang("viewBlog") ?></a>
                                    </div>
                                </div>
                            </div>
                        <?php endif ?>
                    <?php endforeach ?>
                    <div class="col-lg-12 col-md-12">
                        <?= $links ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="side-bar-wrap">
                    <div class="search-widget">
                        <?php $csrf = array(
                            'name' => $this->security->get_csrf_token_name(),
                            'hash' => $this->security->get_csrf_hash()
                        ); ?>
                        <form class="search-form" action="<?= !empty($this->uri->segment(3) && !is_numeric($this->uri->segment(3))) ? base_url(lang("routes_blog") . "/" . $this->uri->segment(3)) : base_url(lang("routes_blog")) ?>" method="GET" enctype="multipart/form-data">
                            <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
                            <input class="form-control" name="search" type="search" placeholder="<?= lang("searchBlog") ?>..." required>
                            <button type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>
                    <?php if (!empty($categories)) : ?>
                        <div class="side-bar-widget">
                            <h3 class="title"><?= lang("blogCategories") ?></h3>
                            <div class="side-bar-categories">
                                <ul>
                                    <?php foreach ($categories as $k => $v) : ?>
                                        <?php if ($v->id == $value->category_id) : ?>
                                            <li> <a rel="dofollow" href="<?= base_url(lang("routes_blog") . "/{$v->seo_url}") ?>" title="<?= $v->title ?>"><?= $v->title ?></a></li>
                                        <?php endif ?>
                                    <?php endforeach ?>
                                </ul>
                            </div>
                        </div>
                    <?php endif ?>
                    <?php if (!empty($latestBlog)) : ?>
                        <div class="side-bar-widget">
                            <h3 class="title"><?= lang("latestBlog") ?></h3>
                            <div class="widget-popular-post">
                                <?php foreach ($latestBlog as $key => $value) : ?>
                                    <?php if (strtotime($value->sharedAt) <= strtotime("now")) : ?>
                                        <article class="item">
                                            <a class="thumb" href="<?= base_url(lang("routes_blog") . "/" . lang("routes_blog_detail") . "/{$value->seo_url}") ?>">
                                                <img width="1920" height="1280" loading="lazy" data-src="<?= get_picture("blogs_v", $value->img_url) ?>" alt="<?= $value->title ?>" class="lazyload img-fluid full-image cover bg1" width="150" height="150">
                                            </a>
                                            <div class="info">
                                                <h4 class="title-text">
                                                    <a rel="dofollow" href="<?= base_url(lang("routes_blog") . "/" . lang("routes_blog_detail") . "/{$value->seo_url}") ?>" title="<?= $value->title ?>">
                                                        <?= $value->title ?>
                                                    </a>
                                                </h4>
                                                <p><?= iconv("ISO-8859-9", "UTF-8", @strftime("%d %B %Y, %A %X", strtotime($value->updatedAt))); ?></p>
                                            </div>
                                        </article>
                                    <?php endif ?>
                                <?php endforeach ?>
                            </div>
                        </div>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</div>