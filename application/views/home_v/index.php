<?php if (!empty($slides)) : ?>
    <!-- Start Main Slides Area -->
    <div class="main-slides-area">
        <div class="home-slides owl-carousel owl-theme">
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
                                <?php $sUrl = base_url(lang("routes_products") . "/" . $sPage->url) ?>
                            <?php endif ?>
                        <?php endif ?>
                        <?php if (!empty($value->service_id) && $value->service_id > 0) : ?>
                            <?php $sService = $this->general_model->get("services", null, ["isActive" => 1, "id" => $value->service_id]); ?>
                            <?php if (!empty($sService)) : ?>
                                <?php $sUrl = base_url(lang("routes_services") . "/" . lang("routes_service_detail") . "/" . $sService->url) ?>
                            <?php endif ?>
                        <?php endif ?>
                    <?php endif ?>
                    <div class="main-slides-item">
                        <?php if ($value->allowButton) : ?>
                            <a rel="dofollow" target="<?= $value->target ?>" href="<?= $sUrl ?>" title="<?= $value->title ?>"><img width="1920" height="1280" class="lazyload img-fluid w-100 owl-lazy" data-src="<?= get_picture("slides_v", $value->img_url) ?>" alt="<?= $value->title ?>"></a>
                        <?php else : ?>
                            <img width="1920" height="1280" class="lazyload img-fluid w-100 owl-lazy" data-src="<?= get_picture("slides_v", $value->img_url) ?>" alt="<?= $value->title ?>">
                        <?php endif ?>
                        <div class="container">
                            <div class="main-slides-content">
                                <p class="sub-title d-none"><?= $value->title ?></p>
                                <h2 class="d-none"><?= $value->description ?></h2>

                                <div class="slides-btn">
                                    <?php if ($value->allowButton) : ?>
                                        <a class="default-btn" rel="dofollow" target="<?= $value->target ?>" title="<?= $value->button_caption ?>" href="<?= $sUrl ?>">
                                            <?= $value->button_caption ?>
                                        </a>
                                    <?php endif ?>
                                    <?php if (!empty($value->video_url)) : ?>
                                        <div class="event__video-btn--play">
                                            <a rel="dofollow" href="<?= $value->video_url ?>" class="default-btn  popup-youtube" title="<?= $value->video_caption ?>">
                                                <i class="fa fa-play"></i>
                                                <?php if (!empty($value->video_caption)) : ?>
                                                    <em><?= $value->video_caption ?></em>
                                                <?php endif ?>
                                            </a>
                                        </div>
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
    <!-- End Main Slides Area -->
<?php endif ?>

<?php if (!empty($homeitems)) : ?>
    <!--=================  Popular Topics Section Start Here ================= -->
    <div class="react_populars_topics react_populars_topics2 pt---60 pb---60 graybg-home">
        <div class="container">
            <div class="row">
                <?php foreach ($homeitems as $key => $value) : ?>
                    <?php if (strtotime($value->sharedAt) <= strtotime("now")) : ?>
                        <div class="col-md-3 align-items-stretch align-content-stretch align-self-stretch">
                            <div class="item__inner h-100">
                                <div class="icon">
                                    <img class="lazyload" data-src="<?= get_picture("homeitems_v", $value->img_url) ?>" alt="<?= $value->title ?>">
                                </div>
                                <div class="react-content">
                                    <h3 class="react-title"><?= $value->title ?></h3>
                                    <?= $value->content ?>
                                </div>
                            </div>
                        </div>
                    <?php endif ?>
                <?php endforeach ?>
            </div>
        </div>
    </div>
    <!--=================  Popular Topics Section End Here ================= -->
<?php endif ?>


<!-- Start Benefits Area -->
<?php if (!empty($pages[array_keys($pages)[0]])) : ?>
    <?php $aboutPage = $pages[array_keys($pages)[0]] ?>
    <?php if ($aboutPage->id == 1) : ?>
        <div class="benefits-area ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="benefits-content">
                            <h3><?= $aboutPage->title ?></h3>
                            <p><?= strip_tags(mb_word_wrap($aboutPage->content, 375, "...")) ?></p>

                            <ul class="benefits-list">
                                <li class="my-3 me-3"><a href="<?= base_url(lang("routes_page") . "/" . $aboutPage->url) ?>"> <?= $aboutPage->title ?> <i class="fa fa-arrow-right"></i></a></li>
                                <li class="last-li my-3 ms-0">
                                    <a href="mailto:<?= $settings->email ?>"><i class="fa fa-arrow-right"></i> <?= strto("lower|ucfirst",lang("contact")) ?> : <?= $settings->email ?></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="benefits-image">
                            <img width="1000" height="1000" data-src="<?= get_picture("pages_v", $aboutPage->img_url) ?>" class="lazyload border-radius" alt="<?= $settings->company_name ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif ?>
<?php endif ?>
<!-- End Benefits Area -->

<?php if (!empty($services)) : ?>
    <!--================= Blog Section Start Here =================-->
    <div class="react-blog__area blog__area pt---60 pb---60">
        <div class="container blog__width">
            <div class="react__title__section text-center">
                <h2 class="react__tittle"><?= lang("academicDepartments") ?></h2>
                <img loading="lazy" class="lazyload" data-src="<?= asset_url("public/images/line.webp") ?>" alt="<?= $settings->company_name ?>">
            </div>
            <div class="row">
                <?php foreach ($services as $key => $value) : ?>
                    <?php if (strtotime($value->sharedAt) <= strtotime("now")) : ?>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 align-content-stretch align-items-stretch align-self-stretch mb-4">
                            <div class="blog__card mb-50 h-100">
                                <div class="blog__thumb w-img p-relative">
                                    <a class="blog__thumb--image" rel="dofollow" href="<?= base_url(lang("routes_services") . "/" . lang("routes_service_detail") . "/{$value->seo_url}") ?>" title="<?= $value->title ?>">
                                        <img loading="lazy" class="lazyload" data-src="<?= get_picture("services_v", $value->img_url) ?>" alt="<?= $value->title ?>">
                                    </a>
                                </div>
                                <div class="blog__card--content">
                                    <div class="blog__card--content-area mb-25">
                                        <h3 class="blog__card--title"><a rel="dofollow" href="<?= base_url(lang("routes_services") . "/" . lang("routes_service_detail") . "/{$value->seo_url}") ?>" title="<?= $value->title ?>"><?= $value->title ?></a></h3>
                                        <p><?= mb_word_wrap(clean(strip_tags($value->content)), 125, "...") ?></p>
                                    </div>
                                    <div>
                                        <a class="custom-button" rel="dofollow" href="<?= base_url(lang("routes_services") . "/" . lang("routes_service_detail") . "/{$value->seo_url}") ?>" title="<?= $value->title ?>"><?= lang("viewService") ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif ?>
                <?php endforeach ?>
                <div class="my-4 text-center col-12"><a class="custom-button" rel="dofollow" href="<?= base_url(lang("routes_services")) ?>" title="<?= lang("academicDepartments") ?>"><?= strto("lower|upper", lang("academicDepartments")) ?></a></div>
            </div>

        </div>
    </div>
    <!--================= Blog Section End Here =================-->
<?php endif ?>

<?php if (!empty($homeitemsFooter)) : ?>
    <!--=================  Popular Topics Section Start Here ================= -->
    <div class="react_populars_topics react_populars_topics2 pt---60 pb---60 graybg-home">
        <div class="container">
            <div class="row">
                <?php foreach ($homeitemsFooter as $key => $value) : ?>
                    <?php if (strtotime($value->sharedAt) <= strtotime("now")) : ?>
                        <div class="col-md-3 align-items-stretch align-content-stretch align-self-stretch">
                            <div class="item__inner h-100">
                                <div class="icon">
                                    <img class="lazyload" data-src="<?= get_picture("homeitems_v", $value->img_url) ?>" alt="<?= $value->title ?>">
                                </div>
                                <div class="react-content">
                                    <h3 class="react-title"><?= $value->title ?></h3>
                                    <?= $value->content ?>
                                </div>
                            </div>
                        </div>
                    <?php endif ?>
                <?php endforeach ?>
            </div>
        </div>
    </div>
    <!--=================  Popular Topics Section End Here ================= -->
<?php endif ?>

<!--=================  Video Section Start Here ================= -->
<?php if (!empty($gallery) && !empty($gallery_items)) : ?>
    <div class="high_quality-section pt---60 pb---60">
        <div class="container">
            <div class="react__title__section-all">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h6><?= $settings->company_name ?></h6>
                        <h2 class="react__tittle"><?= $gallery->title ?></h2>
                    </div>
                </div>
            </div>
            <div class="react-tab-gird">
                <div class="tab-content text-center">
                    <img class="shape__1 lazyload" data-src="<?= asset_url("public/images/tab/shape_01.webp") ?>" alt="image">
                    <img class="shape__2 lazyload" data-src="<?= asset_url("public/images/tab/shape_02.webp") ?>" alt="image">
                    <img class="shape__3 lazyload" data-src="<?= asset_url("public/images/tab/shape_03.webp") ?>" alt="image">
                    <?php $i = 0 ?>
                    <?php foreach ($gallery_items as $key => $value) : ?>
                        <div class="tab-pane <?= $i == 0 ? "active" : null ?>" id="video<?= $key ?>">
                            <?= htmlspecialchars_decode($value->url) ?>
                        </div>
                        <?php $i++ ?>
                    <?php endforeach; ?>
                </div>
                <ul class="nav nav-tabs" id="myTab">
                    <?php $i = 0 ?>
                    <?php foreach ($gallery_items as $key => $value) : ?>
                        <li class="nav-item <?= $i == 0 ? "active" : null ?>">
                            <a class="nav-link <?= $i == 0 ? "active" : null ?>" href="#video<?= $key ?>" aria-controls="video<?= $key ?>" data-bs-toggle="tab">
                                <em class="icon"><i class="fa text-primary fa-play fa-2x"></i></em>
                                <em class="text"><?= !empty($value->title) ? $value->title : lang("watch") ?></em>
                            </a>
                        </li>
                        <?php $i++ ?>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
    </div>
    <!--=================  Video Section End Here ================= -->
<?php endif ?>