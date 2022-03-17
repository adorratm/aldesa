<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="inner-banner inner-bg2">
    <img width="1920" height="500" data-src="<?= get_picture("settings_v", $settings->reference_logo) ?>" alt="<?= strto("lower|upper", lang("references")) ?>" class="lazyload w-100 img-fluid">
    <div class="container">
        <div class="inner-title text-center">
            <h3><?= strto("lower|upper", !empty($category) ? $category->title : lang("references")) ?></h3>
            <ul>
                <li><a rel="dofollow" href="<?= base_url(); ?>" title="<?= strto("lower|upper", lang("home")) ?>"><?= strto("lower|upper", lang("home")) ?></a></li>
                <li><i class="fa fa-angle-right"></i></li>
                <?php if (!empty($category)) : ?>
                    <li><a href="<?= base_url(lang("routes_references")); ?>" rel="dofollow" title="<?= strto("lower|upper", lang("references")) ?>"><?= strto("lower|upper", lang("references")) ?></a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li><?= strto("lower|upper", $category->title) ?></li>
                <?php else : ?>
                    <li><?= strto("lower|upper", lang("references")) ?></li>
                <?php endif ?>
            </ul>
        </div>
    </div>
</div>

<!--================= Course Filter Section Start Here =================-->
<div class="product-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <?php if (!empty($category) && $category->showMap) : ?>
                <div class="col-12">
                    <div id="mapsvg-2" class="mb-3 bg-white"></div>
                </div>
            <?php endif ?>
            <div class="col-lg-12">
                <h3><?= lang("searchReferences") ?></h3>
                <?php $csrf = array(
                    'name' => $this->security->get_csrf_token_name(),
                    'hash' => $this->security->get_csrf_hash()
                ); ?>
                <form onsubmit="return false" action="<?= !empty($this->uri->segment(3) && !is_numeric($this->uri->segment(3))) ? base_url(lang("routes_references") . "/" . $this->uri->segment(3)) : base_url(lang("routes_references")) ?>" method="POST" enctype="multipart/form-data">
                    <div class="input-group">
                        <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
                        <input class="form-control" name="search" type="search" placeholder="<?= lang("searchReferences") ?>..." required>
                        <button class="default-btn searchReference btn rounded-0" data-country="<?= $category->showMap ? "Turkey" : null ?>" aria-label="<?= $settings->company_name ?>" type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </form>
                <div class="faq-area pt-45">
                    <div class="faq-accordion">
                        <ul class="accordion referencesTable">

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
<!--================= Course Filter Section End Here =================-->

<script defer src="<?= asset_url("public/js/raphael.js") ?>"></script>
<script defer src="<?= asset_url("public/js/mapsvg.js") ?>"></script>
<script>
    window.addEventListener("DOMContentLoaded", function() {
        if ($('#mapsvg-2').length > 0) {
            $('#mapsvg-2').mapSvg({
                source: '<?= asset_url("public/images/turkey.svg") ?>',
                colors: {
                    baseDefault: '#fff',
                    base: "#FFFFFF",
                    background: "#FFFFFF",
                    selected: "#FFFFFF",
                    hover: "#ffffff",
                    selected: -20,
                    selected: 0,
                    hover: 10,
                    hover: -50,
                    disabled: "#FFFFFF",
                    loadingText: "Harita Yükleniyor",
                    stroke: "#fff",
                },
                width: 1920,
                disableAll: false,
                marks: [],
                regions: {
                    path9: {
                        tooltip: 'Manisa',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path13: {
                        tooltip: 'Aydın',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path66: {
                        tooltip: 'Şırnak',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path83: {
                        tooltip: 'Siirt',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path80: {
                        tooltip: 'Hakkari',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path81: {
                        tooltip: 'Van',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path85: {
                        tooltip: 'Ağrı',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path87: {
                        tooltip: 'Iğdır',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path77: {
                        tooltip: 'Artvin',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path78: {
                        tooltip: 'Ardahan',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path79: {
                        tooltip: 'Kars',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path51: {
                        tooltip: 'Amasya',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path52: {
                        tooltip: 'Tokat',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path54: {
                        tooltip: 'Sivas',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path61: {
                        tooltip: 'Malatya',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path64: {
                        tooltip: 'Adıyaman',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path88: {
                        tooltip: 'Şanlıurfa',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path32: {
                        tooltip: 'Kastamonu',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path65: {
                        tooltip: 'Mardin',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path71: {
                        tooltip: 'Diyarbakır',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path63: {
                        tooltip: 'Elazığ',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path73: {
                        tooltip: 'Tunceli',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path67: {
                        tooltip: 'Giresun',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path69: {
                        tooltip: 'Gümüşhane',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path68: {
                        tooltip: 'Trabzon',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path74: {
                        tooltip: 'Bayburt',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path62: {
                        tooltip: 'Erzincan',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path72: {
                        tooltip: 'Batman',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path70: {
                        tooltip: 'Bingöl',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path75: {
                        tooltip: 'Rize',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path76: {
                        tooltip: 'Erzurum',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path84: {
                        tooltip: 'Muş',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path82: {
                        tooltip: 'Bitlis',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path32: {
                        tooltip: 'Kastamonu',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path34: {
                        tooltip: 'Çankırı',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path39: {
                        tooltip: 'Kırıkkale',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path40: {
                        tooltip: 'Kırşehir',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path42: {
                        tooltip: 'Aksaray',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path48: {
                        tooltip: 'Niğde',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path55: {
                        tooltip: 'Adana',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path56: {
                        tooltip: 'Osmaniye',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path57: {
                        tooltip: 'Hatay',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path58: {
                        tooltip: 'Kilis',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path59: {
                        tooltip: 'Gaziantep',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path60: {
                        tooltip: 'Kahramanmaraş',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path49: {
                        tooltip: 'Kayseri',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path41: {
                        tooltip: 'Nevşehir',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path50: {
                        tooltip: 'Yozgat',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path35: {
                        tooltip: 'Çorum',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path36: {
                        tooltip: 'Samsun',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path37: {
                        tooltip: 'Sinop',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path53: {
                        tooltip: 'Ordu',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path11: {
                        tooltip: 'Uşak',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path4: {
                        tooltip: 'Kütahya',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path25: {
                        tooltip: 'Bilecik',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path3: {
                        tooltip: 'Eskişehir',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path10: {
                        tooltip: 'Afyon',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path43: {
                        tooltip: 'Isparta',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path45: {
                        tooltip: 'Antalya',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path44: {
                        tooltip: 'Burdur',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path89: {
                        tooltip: 'Düzce',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path2: {
                        tooltip: 'Konya',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path46: {
                        tooltip: 'Karaman',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path47: {
                        tooltip: 'Mersin',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path29: {
                        tooltip: 'Bolu',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path30: {
                        tooltip: 'Zonguldak',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path33: {
                        tooltip: 'Karabük',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path31: {
                        tooltip: 'Bartın',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path12: {
                        tooltip: 'Denizli',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path86: {
                        tooltip: 'Muğla',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path5: {
                        tooltip: 'Balıkesir',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path20: {
                        tooltip: 'Çanakkale',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path216: {
                        tooltip: 'Çanakkale',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path217: {
                        tooltip: 'Çanakkale',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path21: {
                        tooltip: 'Çanakkale',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path19: {
                        tooltip: 'Tekirdağ',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path15: {
                        tooltip: 'Edirne',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path17: {
                        tooltip: 'İstanbul',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path18: {
                        tooltip: 'İstanbul',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path27: {
                        tooltip: 'Kocaeli',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path28: {
                        tooltip: 'Yalova',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path16: {
                        tooltip: 'Kırklareli',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path26: {
                        tooltip: 'Sakarya',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path14: {
                        tooltip: 'İzmir',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path24: {
                        tooltip: 'Bursa',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    path38: {
                        tooltip: 'Ankara',
                        attr: {
                            fill: '#2f3192',
                            href: 'javascript:void(0)'
                        }
                    },
                    rect0: {
                        disabled: true,
                        tooltip: '<?= $settings->company_name ?>',
                        attr: {
                            fill: '#fff',
                            href: 'javascript:void(0)'
                        }
                    },
                    path163: {
                        disabled: true,
                        tooltip: '<?= $settings->company_name ?>',
                        attr: {
                            fill: '#fff',
                            href: 'javascript:void(0)'
                        }
                    },
                    path90: {
                        tooltip: '<?= $settings->company_name ?>',
                        disabled: true,
                        attr: {
                            stroke: '#fff',
                            fill: '#fff',
                            href: 'javascript:void(0)',
                        },
                    },
                    path1: {
                        tooltip: '<?= $settings->company_name ?>',
                        disabled: true,
                        attr: {
                            stroke: '#fff',
                            fill: '#fff',
                            href: 'javascript:void(0)',
                        },
                    },
                    path331: {
                        disabled: true,
                        attr: {
                            stroke: '#fff',
                            fill: '#fff'
                        }
                    },
                    path327: {
                        disabled: true,
                        attr: {
                            stroke: '#fff',
                            fill: '#fff'
                        }
                    },
                    path328: {
                        disabled: true,
                        attr: {
                            stroke: '#fff',
                            fill: '#fff'
                        }
                    },
                    path329: {
                        disabled: true,
                        attr: {
                            stroke: '#fff',
                            fill: '#fff'
                        }
                    },
                    path330: {
                        disabled: true,
                        attr: {
                            stroke: '#fff',
                            fill: '#fff'
                        }
                    },
                    path332: {
                        disabled: true,
                        attr: {
                            stroke: '#fff',
                            fill: '#fff'
                        }
                    },
                    path333: {
                        disabled: true,
                        attr: {
                            stroke: '#fff',
                            fill: '#fff'
                        }
                    },
                    path334: {
                        disabled: true,
                        attr: {
                            stroke: '#fff',
                            fill: '#fff'
                        }
                    },
                },
                tooltipsMode: 'combined',
                zoom: 0,
                pan: 1,
                responsive: 1,
                zoomLimit: [-4, 3],
                onClick: function(e, mapsvg) {
                    let tooltip = this.tooltip;
                    if (tooltip !== "<?= $settings->company_name ?>") {
                        $.post("<?= asset_url("home/references") ?>", {
                            "country": "Turkey",
                            "city": encodeURIComponent(tooltip),
                            "search": $("input[name='search']").val(),
                            "<?= $this->security->get_csrf_token_name() ?>": "<?= $this->security->get_csrf_hash() ?>"
                        }, function(response) {
                            if (response.success) {
                                if (response.references.length === 0) {
                                    $(".referencesTable").fadeOut('fast');
                                }
                                let html = '';
                                if (response.references.length > 0) {

                                    let i = 0
                                    response.references.forEach(function(reference, index) {
                                        html += '<li class="accordion-item">' +
                                            '<a class="accordion-title ' + (i == 0 ? "active" : '') + '" href="javascript:void(0)">' + '<em class="fa fa-map-marker"></em> <i class="fa fa-chevron-down"></i> ' + reference.city + ' - ' + reference.district + '</a>' +
                                            '<div class="accordion-content" style="display:' + (i == 0 ? "block" : 'none') + '">' +
                                            '<div class="product-area">' +
                                            '<div class="row">' +
                                            '<div class="col-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4 align-content-stretch align-items-stretch align-self-stretch mb-3">' +
                                            '<div class="single-product p-2 h-100">' +
                                            '<a rel="dofollow" onclick="event.preventDefault()" href="<?= base_url(lang("routes_references") . "/" . (!empty($category) ? $category->seo_url : null)) ?>" title="' + reference.title + '">' +
                                            '<img width="1920" height="1280" loading="lazy" data-src="<?= get_picture("settings_v", $settings->logo) ?>" alt="' + reference.title + '" class="lazyload rounded img-fluid">' +
                                            '</a>' +
                                            '<div class="product-content">' +
                                            '<h3 class="text-center"> <a rel="dofollow" onclick="event.preventDefault()" href="<?= base_url(lang("routes_references") . "/" . (!empty($category) ? $category->seo_url : null)) ?>" title="' + reference.title + '">' + reference.title + '</a></h3>' +
                                            '<span class="d-block"><a class="text-secondary" rel="dofollow" href="<?= base_url(lang("routes_references") . "/" . (!empty($category) ? $category->seo_url : null)) ?>" title="<?= !empty($category->title) ? $category->title : null ?>"><i class="fa fa-folder"></i> <?= !empty($category->title) ? $category->title : null ?></a></span>' +
                                            '<div class="my-3">' +
                                            reference.content +
                                            '</div></div></div></div>' +
                                            '</div></div></div></li>';
                                        i++;
                                    });
                                } else {
                                    html += '<div class="alert alert-danger" role="alert">' +
                                        '<?= lang("referenceNotFound") ?>' +
                                        '</div>'
                                }
                                if (html !== '') {
                                    $(".referencesTable").fadeIn('fast');
                                    $(".referencesTable").html(html);
                                    $('html, body').animate({
                                        scrollTop: $(".faq-area").offset().top - 200
                                    }, 250);
                                }

                            }
                        }, 'JSON')
                    }
                },
            });
            $(document).on("click", ".searchReference", function(e) {
                e.preventDefault();
                e.stopImmediatePropagation();
                if ($("input[name='search']").val() !== '') {
                    $.post("<?= asset_url("home/references") ?>", {
                        "country": $(this).data("country"),
                        "search": $("input[name='search']").val(),
                        "<?= $this->security->get_csrf_token_name() ?>": "<?= $this->security->get_csrf_hash() ?>"
                    }, function(response) {
                        if (response.success) {
                            if (response.references.length === 0) {
                                $(".referencesTable").fadeOut('fast');
                            }
                            let html = '';
                            if (response.references.length > 0) {

                                let i = 0
                                response.references.forEach(function(reference, index) {
                                    html += '<li class="accordion-item">' +
                                        '<a class="accordion-title ' + (i == 0 ? "active" : '') + '" href="javascript:void(0)">' + '<em class="fa fa-map-marker"></em> <i class="fa fa-chevron-down"></i> ' + reference.city + ' - ' + reference.district + '</a>' +
                                        '<div class="accordion-content" style="display:' + (i == 0 ? "block" : 'none') + '">' +
                                        '<div class="product-area">' +
                                        '<div class="row">' +
                                        '<div class="col-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4 align-content-stretch align-items-stretch align-self-stretch mb-3">' +
                                        '<div class="single-product p-2 h-100">' +
                                        '<a rel="dofollow" onclick="event.preventDefault()" href="<?= base_url(lang("routes_references") . "/" . (!empty($category) ? $category->seo_url : null)) ?>" title="' + reference.title + '">' +
                                        '<img width="1920" height="1280" loading="lazy" data-src="<?= get_picture("settings_v", $settings->logo) ?>" alt="' + reference.title + '" class="lazyload rounded img-fluid">' +
                                        '</a>' +
                                        '<div class="product-content">' +
                                        '<h3 class="text-center"> <a rel="dofollow" onclick="event.preventDefault()" href="<?= base_url(lang("routes_references") . "/" . (!empty($category) ? $category->seo_url : null)) ?>" title="' + reference.title + '">' + reference.title + '</a></h3>' +
                                        '<span class="d-block"><a class="text-secondary" rel="dofollow" href="<?= base_url(lang("routes_references") . "/" . (!empty($category) ? $category->seo_url : null)) ?>" title="<?= !empty($category->title) ? $category->title : null ?>"><i class="fa fa-folder"></i> <?= !empty($category->title) ? $category->title : null ?></a></span>' +
                                        '<div class="my-3">' +
                                        reference.content +
                                        '</div></div></div></div>' +
                                        '</div></div></div></li>';
                                    i++;
                                });
                            } else {
                                html += '<div class="alert alert-danger" role="alert">' +
                                    '<?= lang("referenceNotFound") ?>' +
                                    '</div>'
                            }
                            if (html !== '') {
                                $(".referencesTable").fadeIn('fast');
                                $(".referencesTable").html(html);
                                $('html, body').animate({
                                    scrollTop: $(".faq-area").offset().top - 200
                                }, 250);
                            }

                        }
                    }, 'JSON')
                }
            });
            setTimeout(function() {
                $("path#path334").attr("stroke", "#fff").remove();
                $("path#path333").attr("stroke", "#fff").remove();
                $("path#path332").attr("stroke", "#fff").remove();
                $("path#path331").attr("stroke", "#fff").remove();
                $("path#path330").attr("stroke", "#fff").remove();
                $("path#path329").attr("stroke", "#fff").remove();
                $("path#path328").attr("stroke", "#fff").remove();
                $("path#path327").attr("stroke", "#fff").remove();
            }, 500);

        }
    })
</script>