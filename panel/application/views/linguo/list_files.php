<div id="page-wrapper">
    <div id="page-inner">

        <div class="row">
            <h3>
                <div class="col-md-3">
                    DİL DOSYALARI
                </div>
                <div class="col-md-9 text-right">
                    <?php
                    if ($can_write) {
                    ?>
                        <button class="btn btn-info" data-toggle="modal" data-target="#newFileModal">Dosya Ekle</button>
                        <?php
                        if (($master_language_id !== false) && $master_language_id !== $language_id) {
                        ?>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#syncLanguageFilesModal">Dosyaları Varsayılan Dilden Senkronize Et</button>
                    <?php
                        }
                    }
                    ?>
                    <?php
                    if ($language['is_master'] == '0') {
                    ?>
                        <button class="btn btn-warning" id="btn-set_master">Varsayılan Dil Olarak Belirle</button>
                    <?php
                    }
                    ?>
                </div>
            </h3>
        </div>
        <!-- /. ROW  -->
        <hr />

        <div class="row">
            <div class="col-lg-12">
                <ul class="nav" id="main-menu">
                    <?php
                    foreach ($files as $file_id => $file) {
                    ?>
                        <li>
                            <i class="fa fa-folder"></i>
                            <?php echo $file['folder']; ?>
                            <a href="<?php echo $linguo_url; ?>/<?php echo $language_id; ?>/<?php echo $file_id; ?>">
                                <?php echo $file['name']; ?>
                                <div class="pull-right">
                                    <button class="btn btn-danger btn-xs delete_file" id="del-<?php echo ($language_id); ?>-<?php echo ($file_id); ?>"><i class="fa fa-remove"></i></button>
                                </div>
                            </a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>