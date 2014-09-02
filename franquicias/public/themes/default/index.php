<?php echo theme_view('_header'); ?>


<div class="main"> <!-- Start of Main Container -->
    <?php
        echo Template::message();
        echo isset($content) ? $content : Template::content();
    ?>
</div>
<?php echo theme_view('_footer'); ?>