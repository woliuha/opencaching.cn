<div class='okd_top_pad'>
    <div class='okd_switcher'>
        <select id='switcher'>
            <?php foreach ($vars['installations'] as $inst) { ?>
                <option value='<?= $inst['okapi_base_url'] ?>'<?= $inst['selected'] ? " selected current='true'" : "" ?>><?= $inst['site_name'] ?></option>
            <?php } ?>
        </select>
    </div>
</div>