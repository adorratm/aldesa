<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="inner-banner inner-bg2">
    <img width="1920" height="400" data-src="<?= get_picture("settings_v", $settings->contact_logo) ?>" class="img-fluid w-100 lazyload" alt="<?= strto("lower|upper", lang("contact")) ?>">
    <div class="container">
        <div class="inner-title text-center">
            <h3><?= strto("lower|upper", lang("contact")) ?></h3>
            <ul>
                <li><a rel="dofollow" href="<?= base_url(); ?>" title="<?= strto("lower|upper", lang("home")) ?>"><?= strto("lower|upper", lang("home")) ?></a></li>
                <li><i class="fa fa-angle-right"></i></li>
                <li><?= strto("lower|upper", lang("contact")) ?></li>
            </ul>
        </div>
    </div>
</div>




<div class="contact-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="contact-form">
                    <div class="section-title">
                        <span class="span-bg"><?= strto("lower|upper", lang("contact")) ?></span>
                        <h2><?= lang("contactForm") ?></h2>
                        <p><?= lang("contactFormDesc") ?></p>
                    </div>
                    <?php $csrf = array(
                        'name' => $this->security->get_csrf_token_name(),
                        'hash' => $this->security->get_csrf_hash()
                    ); ?>
                    <form onsubmit="return false" enctype="multipart/form-data" method="POST" id="contact-form">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="full_name" id="full_name" placeholder="<?= lang("namesurname") ?>" required minlength="2" maxlength="70">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="<?= lang("emailaddress") ?>" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="<?= lang("phonenumber") ?>" required minlength="11" maxlength="19">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="<?= lang("subject") ?>" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="comment" class="form-control" id="comment" cols="30" rows="8" placeholder="<?= lang("message") ?>" required></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <button aria-label="<?= $settings->company_name ?>" type="submit" class="default-btn btnSubmitForm" data-url="<?= base_url(lang("routes_contact-form")) ?>">
                                    <?= lang("submit") ?>
                                    <i class="fa fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                        <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-sidebar">
                    <h2><?= lang("contactInformation") ?></h2>
                    <div class="row">
                        <div class="col-lg-12 col-md-4">
                            <div class="contact-card">
                                <div class="content">
                                    <h3><?= lang("address") ?></h3>
                                    <p>
                                        <a class="my-3" rel="dofollow" href="http://maps.google.com/maps?q=<?= urlencode(clean($settings->address)) ?>" target="_blank" title="<?= lang("address") ?>"><i class="fa fa-map-marker"></i> <?= clean($settings->address) ?></a>
                                    </p>
                                    <p>
                                        <a class="my-3" rel="dofollow" href="http://maps.google.com/maps?q=<?= urlencode(clean($settings->address)) ?>" target="_blank" title="<?= lang("map") ?>"><i class="fa fa-map-marked"></i> <?= lang("map") ?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-4">
                            <div class="contact-card">
                                <div class="content">
                                    <h3><?= strto("lower|ucfirst", lang("contact")) ?></h3>
                                    <p><a class="my-3" rel="dofollow" title="<?= lang("phone") ?>" href="tel:<?= $settings->phone_1 ?>"><i class="fa fa-phone"></i> <?= $settings->phone_1 ?></a></p>
                                    <p><a class="my-3" rel="dofollow" title="Whatsapp" target="_blank" href="https://api.whatsapp.com/send?phone=<?= str_replace(" ", "", $settings->phone_2) ?>&amp;text=<?= urlencode(lang("hello") . " " . $settings->company_name) ?>."><i class="fa fa-whatsapp"></i> <?= $settings->phone_2 ?></a></p>
                                    <p><a class="my-3" rel="dofollow" title="<?= lang("phone") ?>" href="tel:<?= $settings->phone_2 ?>"><i class="fa fa-mobile"></i> <?= $settings->phone_2 ?></a></p>
                                    <p><a class="my-3" rel="dofollow" title="Email" href="mailto:<?= $settings->email ?>"><i class="fa fa-envelope-open"></i> <?= $settings->email ?></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-4">
                            <div class="contact-card">
                                <div class="content">
                                    <h3><?= lang("social") ?></h3>
                                    <?php if (!empty($settings->facebook)) : ?>
                                        <p>
                                            <a class="my-3" rel="dofollow" href="<?= $settings->facebook ?>" title="Facebook" target="_blank">
                                                <i class='fa fa-facebook color fa-2x'></i> Facebook
                                            </a>
                                        </p>
                                    <?php endif ?>
                                    <?php if (!empty($settings->twitter)) : ?>
                                        <p>
                                            <a class="my-3" rel="dofollow" href="<?= $settings->twitter ?>" title="Twitter" target="_blank">
                                                <i class='fa fa-twitter color fa-2x'></i> Twitter
                                            </a>
                                        </p>
                                    <?php endif ?>
                                    <?php if (!empty($settings->instagram)) : ?>
                                        <p>
                                            <a class="my-3" rel="dofollow" href="<?= $settings->instagram ?>" title="Instagram" target="_blank">
                                                <i class='fa fa-instagram color fa-2x'></i> Instagram
                                            </a>
                                        </p>
                                    <?php endif ?>
                                    <?php if (!empty($settings->linkedin)) : ?>
                                        <p>
                                            <a class="my-3" rel="dofollow" href="<?= $settings->linkedin ?>" title="Linkedin" target="_blank">
                                                <i class='fa fa-linkedin color fa-2x'></i> Linkedin
                                            </a>
                                        </p>
                                    <?php endif ?>
                                    <?php if (!empty($settings->youtube)) : ?>
                                        <p>
                                            <a class="my-3" rel="dofollow" href="<?= $settings->youtube ?>" title="Youtube" target="_blank">
                                                <i class='fa fa-youtube color fa-2x'></i> Youtube
                                            </a>
                                        </p>
                                    <?php endif ?>
                                    <?php if (!empty($settings->medium)) : ?>
                                        <p>
                                            <a class="my-3" rel="dofollow" href="<?= $settings->medium ?>" title="Medium" target="_blank">
                                                <i class='fa fa-medium color fa-2x'></i> Medium
                                            </a>
                                        </p>
                                    <?php endif ?>
                                    <?php if (!empty($settings->pinterest)) : ?>
                                        <p>
                                            <a class="my-3" rel="dofollow" href="<?= $settings->pinterest ?>" title="Pinterest" target="_blank">
                                                <i class='fa fa-pinterest color fa-2x'></i> Pinterest
                                            </a>
                                        </p>
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="map-area">
    <div class="container-fluid m-0 p-0">
        <?= htmlspecialchars_decode($settings->map) ?>
    </div>
</div>