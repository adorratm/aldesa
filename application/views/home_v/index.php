<?php if (!empty($slides)) : ?>
    <div class="slider-area">
        <div class="home-slider owl-carousel owl-theme">
            <?php $i = 0 ?>
            <?php foreach ($slides as $key => $value) : ?>
                <?php if (strtotime($value->sharedAt) <= strtotime("now")) : ?>
                    <?php if ($value->allowButton) : ?>
                        <?php $sUrl = null; ?>
                        <?php if (!empty($value->button_url)) : ?>
                            <?php $sUrl = $value->button_url ?>
                        <?php endif ?>
                        <?php if (!empty($value->category_id) && $value->category_id > 0) : ?>
                            <?php $sCategory = $this->general_model->get("product_categories", null, ["isActive" => 1, "id" => $value->category_id]); ?>
                            <?php if (!empty($sCategory)) : ?>
                                <?php $sUrl = base_url(lang("routes_products") . "/" . $sCategory->seo_url) ?>
                            <?php endif ?>
                        <?php endif ?>
                        <?php if (!empty($value->product_id) && $value->product_id > 0) : ?>
                            <?php $sProduct = $this->general_model->get("products", null, ["isActive" => 1, "id" => $value->product_id]); ?>
                            <?php if (!empty($sProduct)) : ?>
                                <?php $sUrl = base_url(lang("routes_products") . "/" . lang("routes_product") . "/" . $sProduct->url) ?>
                            <?php endif ?>
                        <?php endif ?>
                        <?php if (!empty($value->page_id) && $value->page_id > 0) : ?>
                            <?php $sPage = $this->general_model->get("product_categories", null, ["isActive" => 1, "id" => $value->page_id]); ?>
                            <?php if (!empty($sPage)) : ?>
                                <?php $sUrl = base_url(lang("routes_products") . "/" . $sPage->seo_url) ?>
                            <?php endif ?>
                        <?php endif ?>
                        <?php if (!empty($value->service_id) && $value->service_id > 0) : ?>
                            <?php $sService = $this->general_model->get("services", null, ["isActive" => 1, "id" => $value->service_id]); ?>
                            <?php if (!empty($sService)) : ?>
                                <?php $sUrl = base_url(lang("routes_services") . "/" . lang("routes_service_detail") . "/" . $sService->url) ?>
                            <?php endif ?>
                        <?php endif ?>
                    <?php endif ?>
                    <div class="slider-item">
                        <?php if ($value->allowButton) : ?>
                            <a rel="dofollow" target="<?= $value->target ?>" href="<?= $sUrl ?>" title="<?= $value->title ?>"><img width="1920" height="1280" class="lazyload img-fluid w-100 owl-lazy" data-src="<?= get_picture("slides_v", $value->img_url) ?>" alt="<?= $value->title ?>"></a>
                        <?php else : ?>
                            <img width="1920" height="1280" class="lazyload img-fluid w-100 owl-lazy" data-src="<?= get_picture("slides_v", $value->img_url) ?>" alt="<?= $value->title ?>">
                        <?php endif ?>
                        <div class="container">
                            <div class="slider-content">
                                <span><?= $settings->company_name ?></span>
                                <h1><?= $value->title ?></h1>
                                <p>
                                    <?= $value->description ?>
                                </p>
                                <div class="slider-btn">
                                    <?php if ($value->allowButton) : ?>
                                        <a class="get-btn" rel="dofollow" target="<?= $value->target ?>" title="<?= $value->button_caption ?>" href="<?= $sUrl ?>">
                                            <?= $value->button_caption ?>
                                        </a>
                                    <?php endif ?>
                                    <?php if (!empty($value->video_url)) : ?>
                                        <a rel="dofollow" href="<?= $value->video_url ?>" class="get-btn custom-popup ms-1 popup-youtube" title="<?= $value->video_caption ?>">
                                            <i class="fa fa-play me-1"></i>
                                            <?php if (!empty($value->video_caption)) : ?>
                                                <?= $value->video_caption ?>
                                            <?php endif ?>
                                        </a>
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $i++ ?>
                <?php endif ?>
            <?php endforeach ?>
        </div>
    </div>
<?php endif ?>

<?php if (!empty($homeitems)) : ?>
    <div class="choose-area pt-100 pb-70">
        <div class="container">
            <div class="row pt-45">
                <?php foreach ($homeitems as $key => $value) : ?>
                    <?php if (strtotime($value->sharedAt) <= strtotime("now")) : ?>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mb-3 align-items-stretch align-content-stretch align-self-stretch">
                            <div class="choose-card h-100">
                                <?php if (!empty($value->img_url)) : ?>
                                    <div class="choose-icon">
                                        <img class="lazyload" data-src="<?= get_picture("homeitems_v", $value->img_url) ?>" alt="<?= $value->title ?>">
                                    </div>
                                <?php endif ?>
                                <div class="content">
                                    <h3><?= $value->title ?></h3>
                                    <?= $value->content ?>
                                </div>
                            </div>
                        </div>
                    <?php endif ?>
                <?php endforeach ?>
            </div>
        </div>
    </div>
<?php endif ?>

<!-- Start Benefits Area -->
<?php if (!empty($pages[0])) : ?>
    <?php if (!empty($pages[array_keys($pages)[0]])) : ?>
        <?php $aboutPage = $pages[array_keys($pages)[0]] ?>
        <div class="about-area pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <?php if (!empty($aboutPage->img_url)) : ?>
                        <div class="col-lg-6">
                            <div class="about-img">
                                <img width="1000" height="1000" data-src="<?= get_picture("pages_v", $aboutPage->img_url) ?>" class="lazyload img-fluid" alt="<?= $settings->company_name ?>">
                                <div class="about-img-shape">
                                    <div class="shape-1">
                                        <img class="img-fluid lazyload" data-src="<?= asset_url("public/images/about/shape1.webp") ?>" alt="<?= $settings->company_name ?>">
                                    </div>
                                    <div class="shape-2">
                                        <img class="img-fluid lazyload" data-src="<?= asset_url("public/images/about/shape2.webp") ?>" alt="<?= $settings->company_name ?>">
                                    </div>
                                    <div class="shape-3">
                                        <img class="img-fluid lazyload" data-src="<?= asset_url("public/images/about/shape2.webp") ?>" alt="<?= $settings->company_name ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif ?>
                    <div class="col-lg-<?= (!empty($aboutPage->img_url) ? "6" : "12") ?>">
                        <div class="about-content">
                            <div class="section-title">
                                <span><?= $settings->company_name ?></span>
                                <h2><?= $aboutPage->title ?></h2>
                                <p><?= strip_tags(mb_word_wrap($aboutPage->content, 375, "...")) ?></p>
                            </div>
                            <ul class="d-flex">
                                <li>
                                    <a class="default-btn" href="<?= base_url(lang("routes_page") . "/" . $aboutPage->url) ?>"> <?= $aboutPage->title ?> <i class="text-white fa fa-arrow-right"></i></a>
                                </li>
                                <li class="ms-1">
                                    <a class="default-btn" href="mailto:<?= $settings->email ?>"><i class="text-white fa fa-envelope-open"></i> <?= strto("lower|ucfirst", lang("contact")) ?> : <?= $settings->email ?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif ?>
<?php endif ?>
<!-- End Benefits Area -->

<?php if (!empty($productCategories)) : ?>
    <div class="project-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center"><span>Aldesa</span>
                <h2><?= lang("products") ?></h2>
            </div>
            <div class="tab project-tab">
                <ul class="tabs text-center active">
                    <?php $i = 0 ?>
                    <?php foreach ($productCategories as $pcKey => $pcValue) : ?>
                        <li class="<?= $i == 0 ? "current" : null ?>">
                            <a rel="dofollow" title="<?= $pcValue->title ?>" href="<?= base_url(lang("routes_products") . "/" . $pcValue->seo_url) ?>" onclick="return false"><?= $pcValue->title ?></a>
                        </li>
                    <?php endforeach ?>
                </ul>
                <div class="tab_content current active pt-45">
                    <?php $i = 0 ?>
                    <?php foreach ($productCategories as $pcKey => $pcValue) : ?>
                        <?php
                        $wheres["p.isActive"] = 1;
                        $wheres["pi.isCover"] = 1;
                        $wheres["p.isWeddingProduct"] = 0;
                        $wheres["p.lang"] = $lang;
                        $wheres["pc.id"] = $pcValue->id;
                        $joins = ["products_w_categories pwc" => ["p.id = pwc.product_id", "left"], "product_categories pc" => ["pwc.category_id = pc.id", "left"], "product_variation_groups pvg" => ["p.id = pvg.product_id", "left"], "product_images pi" => ["pi.product_id = p.id", "left"]];
                        $select = "p.content content,GROUP_CONCAT(pc.seo_url) category_seos,GROUP_CONCAT(pc.title) category_titles,GROUP_CONCAT(pc.id) category_ids,p.id,p.title,p.url,pi.url img_url,IFNULL(pvg.price,p.price) price,IFNULL(pvg.discount,p.discount) discount,IFNULL(pvg.stock,p.stock) stock,IFNULL(pvg.stockStatus,p.stockStatus) stockStatus,p.isDiscount isDiscount,p.sharedAt";
                        $distinct = true;
                        $groupBy = ["p.id", "pwc.product_id"];
                        $products = $this->general_model->get_all("products p", $select, "RAND()", $wheres, [], $joins, [6], [], $distinct, $groupBy);
                        ?>
                        <?php if (!empty($products)) : ?>
                            <div class="tabs_item <?= $i == 0 ? "current active" : null ?>">
                                <div class="project-tab-item">
                                    <div class="row">
                                        <?php foreach ($products as $key => $value) : ?>
                                            <div class="col-lg-4 col-md-6 mb-3 align-items-stretch align-self-stretch align-content-stretch">
                                                <div class="project-card border h-100">
                                                    <a rel="dofollow" title="<?= $value->title ?>" href="<?= base_url(lang("routes_products") . "/" . lang("routes_product") . "/" . $value->url) ?>">
                                                        <img data-src="<?= get_picture("products_v", $value->img_url) ?>" alt="<?= $value->title ?>" class="lazyload img-fluid">
                                                    </a>
                                                    <div class="project-content">
                                                        <h3><a rel="dofollow" title="<?= $value->title ?>" href="<?= base_url(lang("routes_products") . "/" . lang("routes_product") . "/" . $value->url) ?>"><?= $value->title ?></a></h3>
                                                        <div class="content">
                                                            <a rel="dofollow" title="<?= $value->title ?>" href="<?= base_url(lang("routes_products") . "/" . lang("routes_product") . "/" . $value->url) ?>" class="project-more">
                                                                <?= lang("viewProduct") ?>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach ?>
                                    </div>
                                </div>
                            </div>
                        <?php endif ?>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
<?php endif ?>

<?php if (!empty($homeitemsFooter)) : ?>
    <div class="achievements-area pt-100 pb-70">
        <div class="container">
            <div class="row pt-45">
                <?php $i = 1 ?>
                <?php foreach ($homeitemsFooter as $key => $value) : ?>
                    <?php if (strtotime($value->sharedAt) <= strtotime("now")) : ?>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mb-3 align-items-stretch align-content-stretch align-self-stretch">
                            <div class="achievements-card achievements-bg-<?= $i ?> h-100">
                                <?php if (!empty($value->img_url)) : ?>
                                    <img class="lazyload" data-src="<?= get_picture("homeitems_v", $value->img_url) ?>" alt="<?= $value->title ?>">
                                <?php endif ?>
                                <h3><?= $value->title ?></h3>
                                <span><?= $value->content ?></span>
                            </div>
                        </div>
                        <?php $i++ ?>
                    <?php endif ?>
                <?php endforeach ?>
            </div>
        </div>
    </div>
<?php endif ?>

<?php if (!empty($testimonials)) : ?>
    <div class="service-area pricing-bg pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span><?= $settings->company_name ?></span>
                <h2><?= lang("whyChooseUs") ?></h2>
            </div>
            <div class="service-slider owl-carousel owl-theme pt-45">
                <?php foreach ($testimonials as $key => $value) : ?>
                    <div class="service-item h-100">
                        <?php if (!empty($value->img_url)) : ?>
                            <a href="<?= base_url() ?>" onclick="return false" class="service-icon">
                                <img data-src="<?= get_picture("testimonials_v", $value->img_url) ?>" alt="<?= $value->title ?>" class="lazyload rounded-circle" width="60" height="60">
                            </a>
                        <?php endif ?>
                        <h3><a href="<?= base_url() ?>" onclick="return false"><?= $value->title ?></a></h3>
                        <?= $value->content ?>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
<?php endif ?>

<?php if (!empty($blogs)) : ?>
    <div class="blog-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span><?= $settings->company_name ?></span>
                <h2><?= lang("blog") ?></h2>
            </div>
            <div class="row pt-45">
                <?php foreach ($blogs as $key => $value) : ?>
                    <?php if (strtotime($value->sharedAt) <= strtotime("now")) : ?>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-3">
                            <div class="blog-card blog-card-bg h-100">
                                <div class="blog-img">
                                    <a rel="dofollow" href="<?= base_url(lang("routes_blog") . "/" . lang("routes_blog_detail") . "/{$value->seo_url}") ?>" title="<?= $value->title ?>">
                                        <img loading="lazy" class="lazyload" data-src="<?= get_picture("blogs_v", $value->img_url) ?>" alt="<?= $value->title ?>">
                                    </a>
                                    <span class="date"><?= iconv("ISO-8859-9", "UTF-8", @strftime("%d %B %Y, %A %X", strtotime($value->updatedAt))); ?></span>
                                </div>
                                <div class="content">
                                    <h3>
                                        <a rel="dofollow" href="<?= base_url(lang("routes_blog") . "/" . lang("routes_blog_detail") . "/{$value->seo_url}") ?>" title="<?= $value->title ?>"><?= $value->title ?></a>
                                    </h3>
                                    <p>
                                        <?= mb_word_wrap(clean(strip_tags($value->content)), 125, "...") ?>
                                    </p>
                                    <a class="read-more-btn" rel="dofollow" href="<?= base_url(lang("routes_services") . "/" . lang("routes_service_detail") . "/{$value->seo_url}") ?>" title="<?= $value->title ?>"><?= lang("viewService") ?></a>

                                </div>
                            </div>
                        </div>
                    <?php endif ?>
                <?php endforeach ?>
                <div class="my-4 text-center col-12"><a class="default-btn" rel="dofollow" href="<?= base_url(lang("routes_blog")) ?>" title="<?= lang("blog") ?>"><?= strto("lower|upper", lang("blog")) ?></a></div>
            </div>

        </div>
    </div>
    <!--================= Blog Section End Here =================-->
<?php endif ?>