<h1 class="d-none"><?= $settings->company_name ?></h1>




<header class="top-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-10 col-md-9">
                <div class="header-left">
                    <div class="header-left-card">
                        <ul>
                            <?php if (!empty($settings->email)) : ?>
                                <li>
                                    <a rel="dofollow" href="mailto:<?= $settings->email ?>" title="Email">
                                        <div class="head-icon">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <?= $settings->email ?>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php if (!empty($settings->phone_1)) : ?>
                                <li>
                                    <a rel="dofollow" href="tel:<?= str_replace(" ", "", $settings->phone_1) ?>" title="<?= lang("phone") ?>">
                                        <div class="head-icon">
                                            <i class="fa fa-phone me-1"></i>
                                        </div>
                                        <?= $settings->phone_1 ?>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php if (!empty($settings->address)) : ?>
                                <li>
                                    <a rel="dofollow" href="http://maps.google.com/maps?q=<?= urlencode(clean($settings->address)) ?>" target="_blank" title="<?= lang("address") ?>">
                                        <div class="head-icon">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        <?= clean($settings->address) ?>
                                    </a>
                                </li>
                            <?php endif ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3">
                <div class="header-right">
                    <div class="top-social-link">
                        <ul>
                            <?php if (!empty($settings->facebook)) : ?>
                                <li>
                                    <a rel="dofollow" href="<?= $settings->facebook ?>" title="Facebook" target="_blank">
                                        <i class="fa fa-facebook color"></i>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php if (!empty($settings->twitter)) : ?>
                                <li>
                                    <a rel="dofollow" href="<?= $settings->twitter ?>" title="Twitter" target="_blank">
                                        <i class="fa fa-twitter color"></i>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php if (!empty($settings->instagram)) : ?>
                                <li>
                                    <a rel="dofollow" href="<?= $settings->instagram ?>" title="Instagram" target="_blank">
                                        <i class="fa fa-instagram color"></i>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php if (!empty($settings->linkedin)) : ?>
                                <li>
                                    <a rel="dofollow" href="<?= $settings->linkedin ?>" title="Linkedin" target="_blank">
                                        <i class="fa fa-linkedin color"></i>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php if (!empty($settings->youtube)) : ?>
                                <li>
                                    <a rel="dofollow" href="<?= $settings->youtube ?>" title="Youtube" target="_blank">
                                        <i class="fa fa-youtube color"></i>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php if (!empty($settings->medium)) : ?>
                                <li>
                                    <a rel="dofollow" href="<?= $settings->medium ?>" title="Medium" target="_blank">
                                        <i class="fa fa-medium color"></i>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php if (!empty($settings->pinterest)) : ?>
                                <a rel="dofollow" href="<?= $settings->pinterest ?>" title="Pinterest" target="_blank">
                                    <i class="fa fa-pinterest color"></i>
                                </a>
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
</header>


<div class="navbar-area">

    <div class="mobile-nav">
        <a class="logo" rel="dofollow" href="<?= base_url() ?>" title="<?= $settings->company_name ?>">
            <picture>
                <img width="250" height="130" data-src="<?= get_picture("settings_v", $settings->logo) ?>" alt="<?= $settings->company_name ?>" class="lazyload logo-one img-fluid">
            </picture>
            <picture>
                <img width="250" height="130" data-src="<?= get_picture("settings_v", $settings->logo) ?>" alt="<?= $settings->company_name ?>" class="lazyload logo-two img-fluid">
            </picture>
        </a>
    </div>

    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light ">
                <a class="navbar-brand" rel="dofollow" href="<?= base_url() ?>" title="<?= $settings->company_name ?>">
                    <picture>
                        <img width="250" height="130" data-src="<?= get_picture("settings_v", $settings->logo) ?>" alt="<?= $settings->company_name ?>" class="lazyload logo-one img-fluid">
                    </picture>
                    <picture>
                        <img width="250" height="130" data-src="<?= get_picture("settings_v", $settings->logo) ?>" alt="<?= $settings->company_name ?>" class="lazyload logo-two img-fluid">
                    </picture>
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <?= $menus ?>
                    <div class="others-options d-flex align-items-center">
                        <div class="option-item">
                            <a rel="dofollow" href="<?= lang("appointmentLink") ?>" target="_blank" title="<?= lang("makeAppointment") ?>" class="default-btn"><?= lang("makeAppointment") ?></a>
                        </div>
                        <?php if (!empty($languages)) : ?>
                            <div class="option-item">
                                <div class="dropdown">
                                    <a rel="dofollow" title="<?=$settings->company_name?>" href="<?=base_url()?>" class="default-btn dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                        <?= strto("lower|upper",$lang) ?>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <?php foreach ($languages as $key => $value) : ?>
                                            <li><a rel="dofollow" href="<?= asset_url("home/".lang("routes_change-language") . "?lang=" . $value) ?>" class="dropdown-item <?= ($value === $lang ? "active" : null) ?>"><?= strto("lower|upper", $value) ?></a></li>
                                        <?php endforeach ?>
                                    </ul>
                                </div>
                            </div>
                        <?php endif ?>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="side-nav-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="circle-inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>
            <div class="container">
                <div class="side-nav-inner">
                    <div class="side-nav  justify-content-center align-items-center">
                        <div class="side-item d-flex align-items-center">
                            <div class="option-item">
                                <a rel="dofollow" href="<?= lang("appointmentLink") ?>" target="_blank" title="<?= lang("makeAppointment") ?>" class="default-btn"><?= lang("makeAppointment") ?></a>
                            </div>
                            <?php if (!empty($languages)) : ?>
                            <div class="option-item ms-1">
                                <div class="dropdown">
                                    <a rel="dofollow" title="<?=$settings->company_name?>" href="<?=base_url()?>" class="default-btn dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                        <?= strto("lower|upper",$lang) ?>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <?php foreach ($languages as $key => $value) : ?>
                                            <li><a rel="dofollow" href="<?= asset_url("home/".lang("routes_change-language") . "?lang=" . $value) ?>" class="dropdown-item <?= ($value === $lang ? "active" : null) ?>"><?= strto("lower|upper", $value) ?></a></li>
                                        <?php endforeach ?>
                                    </ul>
                                </div>
                            </div>
                        <?php endif ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>