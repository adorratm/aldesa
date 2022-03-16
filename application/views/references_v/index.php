<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="inner-banner inner-bg2">
    <img width="1920" height="500" data-src="<?= get_picture("settings_v", $settings->reference_logo) ?>" alt="<?= strto("lower|upper", lang("references")) ?>" class="lazyload w-100 img-fluid">
    <div class="container">
        <div class="inner-title text-center">
            <h3><?= strto("lower|upper", lang("references")) ?></h3>
            <ul>
                <li><a rel="dofollow" href="<?= base_url(); ?>" title="<?= strto("lower|upper", lang("home")) ?>"><?= strto("lower|upper", lang("home")) ?></a></li>
                <li><i class="fa fa-angle-right"></i></li>
                <li><?= strto("lower|upper", lang("references")) ?></li>
            </ul>
        </div>
    </div>
</div>

<!--================= Course Filter Section Start Here =================-->
<div class="product-area pt-100 pb-70">
    <div class="container">
        <div class="row pt-45">
            <div class="col-12">
                <div id="mapsvg-2" class="mb-3"></div>
            </div>
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
<script defer src="<?= asset_url("public/js/raphael.js") ?>"></script>
<script defer src="<?= asset_url("public/js/mapsvg.js") ?>"></script>
<script>
    window.addEventListener("DOMContentLoaded", function() {
        if ($('#mapsvg-2').length > 0) {
            $('#mapsvg-2').mapSvg({
                source: '<?= asset_url("public/images/turkey.svg") ?>',
                
                colors: {
                    base: "#FFFFFF",
                    Background: "#FFFFFF",
                    selected: "#FFFFFF",
                    hover: "#ffffff",
                    selected: -20,
                    selected: 0,
                    hover: 10,
                    hover: -50,
                    disabled: "#FFFFFF",
                    loadingText: "Harita Yükleniyor",
                    stroke: "#FFFFFF",
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
                        tooltip: '<?= $settings->company_name ?>',
                        attr: {
                            fill: '#000',
                            href: 'javascript:void(0)'
                        }
                    },
                    path163: {
                        tooltip: '<?= $settings->company_name ?>',
                        attr: {
                            fill: '#000',
                            href: 'javascript:void(0)'
                        }
                    },
                    path90: {
                        tooltip: '<?= $settings->company_name ?>',
                        attr: {
                            fill: '#000',
                            href: 'javascript:void(0)'
                        }
                    },
                    path1: {
                        tooltip: '<?= $settings->company_name ?>',
                        attr: {
                            fill: '#000',
                            href: 'javascript:void(0)'
                        }
                    }
                },
                tooltipsMode: 'combined',
                zoom: 0,
                pan: 1,
                responsive: 1,
                zoomLimit: [-4, 3],
                onClick: function(e, mapsvg) {
                    let tooltip = this.tooltip;
                    if (tooltip !== "<?= $settings->company_name ?>") {
                        $.get("<?= asset_url("home/getreferences") ?>", {
                            "city": encodeURIComponent(tooltip)
                        }, function(response) {
                            if (response.success) {
                                if (response.references.length === 0) {
                                    $(".referencesTable").fadeOut('slow');
                                }
                                let html = null;
                                response.districts.forEach(function(el, i) {
                                    response.references.forEach(function(reference, index) {
                                        if (reference.district == el.district_id) {
                                            html += '<tr><td>' + el.district + '</td><td>' + response.city + '</td><td>' + reference.title + '</td></tr>';
                                        }
                                    });
                                });
                                if (html !== null) {
                                    $(".referencesTable").fadeIn('slow');
                                    $("#references").html(html);
                                }
                                console.log(response);
                            }
                        }, 'JSON')
                    }
                }
            });
        }
    })
</script>