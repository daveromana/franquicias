<?php echo theme_view('_header'); ?>

<div class="main"> <!-- Start of Main Container -->

    <?php
        echo isset($content) ? $content : Template::content();
    ?>
</div>
<?php echo theme_view('_footer', array('show' => false)); ?>