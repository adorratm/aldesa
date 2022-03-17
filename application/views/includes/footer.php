<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<footer class="footer-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-xxl-3 col-md-6">
                <div class="footer-widget">
                    <?php if (!empty($settings->logo)) : ?>
                        <div class="footer-logo">
                            <a rel="dofollow" href="<?= base_url() ?>" title="<?= $settings->company_name ?>">
                                <picture>
                                    <img width="250" height="130" data-src="<?= get_picture("settings_v", $settings->logo) ?>" alt="<?= $settings->company_name ?>" class="footer-logo-one lazyload img-fluid">
                                </picture>
                                <picture>
                                    <img width="250" height="130" data-src="<?= get_picture("settings_v", $settings->logo) ?>" alt="<?= $settings->company_name ?>" class="footer-logo-two lazyload img-fluid">
                                </picture>
                            </a>
                        </div>
                    <?php endif ?>
                    <ul class="footer-list">
                        <?php if (!empty($settings->address)) : ?>
                            <li>
                                <a rel="dofollow" href="http://maps.google.com/maps?q=<?= urlencode(clean($settings->address)) ?>" target="_blank" title="<?= lang("address") ?>"><i class="fa fa-map-marker"></i> <?= clean($settings->address) ?></a>
                            </li>
                            <li>
                                <a rel="dofollow" href="http://maps.google.com/maps?q=<?= urlencode(clean($settings->address)) ?>" target="_blank" title="<?= lang("map") ?>"><i class="fa fa-map"></i> <?= lang("map") ?></a>
                            </li>
                        <?php endif ?>
                        <?php if (!empty($settings->phone_1)) : ?>
                            <li>
                                <a rel="dofollow" title="<?= lang("phone") ?>" href="tel:<?= str_replace(" ", "", $settings->phone_1) ?>"><i class="fa fa-phone"></i> <?= $settings->phone_1 ?></a>
                            </li>
                        <?php endif ?>
                        <?php if (!empty($settings->phone_2)) : ?>
                            <li>
                                <a rel="dofollow" title="Whatsapp" target="_blank" href="https://api.whatsapp.com/send?phone=<?= str_replace(" ", "", $settings->phone_2) ?>&amp;text=<?= urlencode(lang("hello") . " " . $settings->company_name) ?>."><i class="fa fa-whatsapp"></i> <?= $settings->phone_2 ?></a>
                            </li>
                        <?php endif ?>
                        <?php if (!empty($settings->phone_3)) : ?>
                            <li>
                                <a rel="dofollow" title="<?= lang("phone") ?>" href="tel:<?= str_replace(" ", "", $settings->phone_3) ?>"><i class="fa fa-mobile"></i> <?= $settings->phone_3 ?></a>
                            </li>
                        <?php endif ?>
                        <?php if (!empty(clean($settings->address_2))) : ?>
                            <li>
                                <a rel="dofollow" href="http://maps.google.com/maps?q=<?= urlencode(clean($settings->address_2)) ?>" target="_blank" title="<?= lang("address") ?>"><?= clean($settings->address_2) ?></a>
                            </li>
                            <li>
                                <a rel="dofollow" href="http://maps.google.com/maps?q=<?= urlencode(clean($settings->address_2)) ?>" target="_blank" title="<?= lang("map") ?>"> <?= lang("map") ?></a>
                            </li>
                            <?php if (!empty($settings->phone_1)) : ?>
                                <li>
                                    <a rel="dofollow" title="<?= lang("phone") ?>" href="tel:<?= str_replace(" ", "", $settings->phone_1) ?>"><i class="fa fa-phone"></i> <?= $settings->phone_1 ?></a>
                                </li>
                            <?php endif ?>
                            <?php if (!empty($settings->phone_2)) : ?>
                                <li>
                                    <a rel="dofollow" title="Whatsapp" target="_blank" href="https://api.whatsapp.com/send?phone=<?= str_replace(" ", "", $settings->phone_2) ?>&amp;text=<?= urlencode(lang("hello") . " " . $settings->company_name) ?>."><i class="fa fa-whatsapp"></i> <?= $settings->phone_2 ?></a>
                                </li>
                            <?php endif ?>
                            <?php if (!empty($settings->phone_3)) : ?>
                                <li>
                                    <a rel="dofollow" title="<?= lang("phone") ?>" href="tel:<?= str_replace(" ", "", $settings->phone_3) ?>"><i class="fa fa-mobile"></i> <?= $settings->phone_3 ?></a>
                                </li>
                            <?php endif ?>
                        <?php endif ?>
                        <?php if (!empty($settings->email)) : ?>
                            <li>
                                <a rel="dofollow" title="Email" href="mailto:<?= $settings->email ?>"><i class="fa fa-envelope-open"></i> <?= $settings->email ?></a>
                            </li>
                        <?php endif ?>
                    </ul>
                </div>
            </div>
            <?php if (!empty($footer_menus)) : ?>
                <div class="col-lg-2 col-xxl-3 col-md-6">
                    <div class="footer-widget pl-30 pl-50">
                        <h3><?= lang("corporate") ?></h3>
                        <?= $footer_menus ?>
                    </div>
                </div>
            <?php endif ?>
            <?php if (!empty($footer_categories)) : ?>
                <div class="col-lg-3 col-xxl-3 col-md-6">
                    <div class="footer-widget pl-35">
                        <h3><?= lang("products") ?></h3>
                        <ul class="footer-list">
                            <?php foreach ($footer_categories as $key => $value) : ?>
                                <li><a rel="dofollow" href="<?= base_url(lang("routes_products") . "/" . $value->seo_url) ?>" title="<?= $value->title ?>"><?= $value->title ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            <?php endif ?>
            <div class="col-lg-3 col-xxl-3 col-md-6">
                <div class="footer-widget">
                    <div class="footer-widget">
                        <h3><?= lang("menus") ?></h3>
                        <?php if (!empty($footer_menus2)) : ?>
                            <?= $footer_menus2 ?>
                        <?php endif ?>
                        <ul class="footer-list-two d-inline-flex">
                            <?php if (!empty($settings->facebook)) : ?>
                                <li>
                                    <a rel="dofollow" href="<?= $settings->facebook ?>" title="Facebook" target="_blank">
                                        <i class='fa fa-facebook color'></i>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php if (!empty($settings->twitter)) : ?>
                                <li>
                                    <a rel="dofollow" href="<?= $settings->twitter ?>" title="Twitter" target="_blank">
                                        <i class='fa fa-twitter color'></i>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php if (!empty($settings->instagram)) : ?>
                                <li>
                                    <a rel="dofollow" href="<?= $settings->instagram ?>" title="Instagram" target="_blank">
                                        <i class='fa fa-instagram color'></i>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php if (!empty($settings->linkedin)) : ?>
                                <li>
                                    <a rel="dofollow" href="<?= $settings->linkedin ?>" title="Linkedin" target="_blank">
                                        <i class='fa fa-linkedin color'></i>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php if (!empty($settings->youtube)) : ?>
                                <li>
                                    <a rel="dofollow" href="<?= $settings->youtube ?>" title="Youtube" target="_blank">
                                        <i class='fa fa-youtube color'></i>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php if (!empty($settings->medium)) : ?>
                                <li>
                                    <a rel="dofollow" href="<?= $settings->medium ?>" title="Medium" target="_blank">
                                        <i class='fa fa-medium color'></i>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php if (!empty($settings->pinterest)) : ?>
                                <li>
                                    <a rel="dofollow" href="<?= $settings->pinterest ?>" title="Pinterest" target="_blank">
                                        <i class='fa fa-pinterest color'></i>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php if (!empty($settings->phone_2)) : ?>
                                <li>
                                    <a rel="dofollow" href="https://api.whatsapp.com/send?phone=<?= str_replace(" ", "", $settings->phone_2) ?>&amp;text=<?= urlencode(lang("hello") . " " . $settings->company_name) ?>." title="Whatsapp" target="_blank">
                                        <i class="fa fa-whatsapp color"></i>
                                    </a>
                                </li>
                            <?php endif ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<div class="copy-right-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9 col-md-9">
                <div class="copy-right-text text-center">
                    <p>
                        © 2022 <a rel="dofollow" href="<?= base_url() ?>" title="<?= $settings->company_name ?>"><?= $settings->slogan ?></a> <?= lang("allRightsReserved") ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <a rel="dofollow" href="https://mutfakyapim.com" target="_blank" title="Mutfak Yapım Dijital Reklam Ajansı"><img style="filter:drop-shadow(1px 1px 1px black)" data-src="https://mutfakyapim.com/images/mutfak/logo.png" class="lazyload" height="40" width="176" alt="Mutfak Yapım Dijital Reklam Ajansı"></a>
            </div>
        </div>
    </div>
</div>


<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe.
	It's a separate element, as animating opacity is faster than rgba() . -->
    <div class="pswp__bg"></div>

    <!--Slides wrapper with overflow:hidden . -->
    <div class="pswp__scroll-wrap">

        <!--Container that holds slides . PhotoSwipe keeps only 3 slides in DOM to save memory . -->
        <!--don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">

            <div class="pswp__top-bar">

                <!--  Controls are self-explanatory. Order can be changed. -->

                <div class="pswp__counter"></div>

                <button class="pswp__button pswp__button--close" title="Kapat (Esc)"></button>

                <button class="pswp__button pswp__button--fs" title="Tam Ekran"></button>

                <button class="pswp__button pswp__button--zoom" title="Yakınlaştır / Uzaklaştır"></button>

                <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>

            <button class="pswp__button pswp__button--arrow--left" title="Önceki (arrow left)">
            </button>

            <button class="pswp__button pswp__button--arrow--right" title="Sonraki (arrow right)">
            </button>

            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>

        </div>

    </div>
</div>
<!--================= Scroll to Top End =================-->
<!-- Jquery -->
<script src="<?= asset_url("public/js/jquery.min.js") ?>"></script>
<!-- #Jquery -->
<!--FOOTER END-->
<?php if (!empty($settings->address)) : ?>
    <a rel="dofollow" class="fixed-maps bg-primary map-address" href="<?= base_url() ?>" data-destination="<?= $settings->address ?>" title="<?= lang("getDirections") ?>" data-bs-toggle="tooltip" data-bs-placement="top"><i class="fa fa-map"></i></span></a>
<?php endif ?>
<a rel="dofollow" class="fixed-phone bg-danger" href="<?= base_url() ?>" data-bs-toggle="modal" data-bs-target="#phoneModal" title="<?= lang("phone") ?>" data-toggle="tooltip" data-bs-placement="top"><i class="fa fa-phone"></i></a>
<?php if (!empty($settings->phone_2)) : ?>
    <a rel="dofollow" target="_blank" class="fixed-whatsapp bg-success" href="https://api.whatsapp.com/send?phone=<?= str_replace(" ", "", $settings->phone_2) ?>&amp;text=<?= urlencode(lang("hello") . " " . $settings->company_name) ?>." title="WhatsApp" data-bs-toggle="tooltip" data-bs-placement="top"><i class="fa fa-whatsapp"></i></a>
<?php endif ?>
<!--layout end-->
<!-- SCRIPTS -->
<!-- Lazysizes -->
<script async defer src="<?= asset_url("public/js/lazysizes.min.js") ?>"></script>
<!-- #Lazysizes -->

<!-- iziToast -->
<script defer src="<?= asset_url("public/js/iziToast.min.js") ?>"></script>
<!-- #iziToast -->

<!-- iziModal -->
<script async defer src="<?= asset_url("public/js/iziModal.min.js") ?>"></script>
<!-- #iziModal -->

<script defer src="<?= asset_url("public/js/maskedinput.min.js") ?>"></script>

<!-- PhotoSwipe -->
<script async defer src="<?= asset_url("public/photoswipe/photoswipe.min.js") ?>"></script>
<script async defer src="<?= asset_url("public/photoswipe/photoswipe-ui-default.min.js") ?>"></script>

<!-- Site Scripts -->
<script defer src="<?= asset_url("public/js/bootstrap.bundle.min.js") ?>"></script>
<script defer src="<?= asset_url("public/js/owl.carousel.min.js") ?>"></script>
<script defer src="<?= asset_url("public/js/wow.min.js") ?>"></script>
<script defer src="<?= asset_url("public/js/meanmenu.js") ?>"></script>
<script defer src="<?= asset_url("public/js/custom.js") ?>"></script>

<?php if ($this->uri->segment(3) === lang("routes_product")) : ?>
    <script defer src="<?= asset_url("public/js/fancybox.min.js") ?>"></script>
<?php endif ?>


<script defer src="<?= asset_url("public/js/app.js") ?>"></script>
<!-- #Site Scripts -->

<!-- SCRIPTS -->
<script>
    window.addEventListener('DOMContentLoaded', function() {
        $(document).on("click", ".map-address", function(e) {
            e.preventDefault();
            e.stopImmediatePropagation();
            let dest = $(this).data("destination");
            if (navigator.geolocation) {
                if ((navigator.platform.indexOf("iPhone") != -1) ||
                    (navigator.platform.indexOf("iPad") != -1) ||
                    (navigator.platform.indexOf("iPod") != -1))
                    window.open("comgooglemapsurl://maps.google.com/maps/dir/?api=1&destination=" + dest + "&travelmode=driving");
                else {
                    window.open("https://www.google.com/maps/dir/?api=1&destination=" + dest + "&travelmode=driving");
                }
            } else {
                iziToast.show({
                    type: "error",
                    title: "<?= lang("error") ?>",
                    message: "<?= lang("allowGeoLocation") ?>",
                    position: "topCenter"
                });
            }
        });
        $(document).ready(function(data) {
            data.mask.definitions['~'] = '[+-]';
            $('input[type="tel"]').mask('0999 999 99 99');
        });
    });
</script>
<?php $this->load->view("includes/alert") ?>

<div class="modal fade" id="phoneModal" tabindex="-1" aria-labelledby="phoneModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="phoneModalLabel"><?= lang("phone") ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="<?= lang("close") ?>"></button>
            </div>
            <div class="modal-body">
                <div class="row text-center justify-content-center">
                    <?php if (!empty($settings->phone_1)) : ?>
                        <div class="col">
                            <a target="_blank" href="tel:<?= str_replace(" ", "", $settings->phone_1) ?>" class="text-dark-green" data-toggle="tooltip" data-placement="bottom" rel="dofollow" title="<?= lang("phone") ?>" data-title="<?= lang("phone") ?>">
                                <i class="fa fa-phone bg-danger p-3 text-white"></i> <?= $settings->phone_1 ?>
                            </a>
                        </div>
                    <?php endif ?>
                    <?php if (!empty($settings->phone_2)) : ?>
                        <div class="col">
                            <a target="_blank" href="tel:<?= str_replace(" ", "", $settings->phone_2) ?>" class="text-dark-green" data-toggle="tooltip" data-placement="bottom" rel="dofollow" title="<?= lang("phone") ?>" data-title="<?= lang("phone") ?>">
                                <i class="fa fa-phone bg-danger p-3 text-white"></i> <?= $settings->phone_2 ?>
                            </a>
                        </div>
                    <?php endif ?>
                    <?php if (!empty($settings->phone_3)) : ?>
                        <div class="col">
                            <a target="_blank" href="tel:<?= str_replace(" ", "", $settings->phone_3) ?>" class="text-dark-green" data-toggle="tooltip" data-placement="bottom" rel="dofollow" title="<?= lang("phone") ?>" data-title="<?= lang("phone") ?>">
                                <i class="fa fa-phone bg-danger p-3 text-white"></i> <?= $settings->phone_3 ?>
                            </a>
                        </div>
                    <?php endif ?>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><?= lang("close") ?></button>
            </div>
        </div>
    </div>
</div>
</body>

</html>