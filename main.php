<?php
include 'setting.php';
global $connect_info;

$dss = extract_from_database($connect_info, 'tags');
$total_count_links = count($dss);
?>

<div class="list-themes">
    <?php if ($total_count_links > 0) {
             foreach ($dss as $s) { ?>
                <div class="card-theme"><?php echo $s['name']; ?></div>
    <?php
        }
    } ?>
</div>
