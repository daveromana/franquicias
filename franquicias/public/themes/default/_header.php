<?php
    Assets::add_js( array('bootstrap.min.js','jquery-ui.js','easyResponsiveTabs.js','responsive-nav.js'));
    Assets::add_css( array('bootstrap.min.css', 'bootstrap.css','style.css','bootstrap-responsive.min.css','jquery-ui.css','jquery-ui.theme.css'));

    $inline  = '$(".dropdown-toggle").dropdown();';
    $inline .= '$(".tooltips").tooltip();';

    Assets::add_js( $inline, 'inline' );
?>
<!doctype html>
<head>
    <meta charset="utf-8">

    <title><?php echo isset($page_title) ? $page_title .' : ' : ''; ?> <?php if (class_exists('Settings_lib')) e(settings_item('site.title')); else echo 'Bonfire'; ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php echo Assets::css(); ?>

    <link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--webfont-->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
    <script type="text/javascript">
                   // $(document).ready(function () {
                        $('#horizontalTab').easyResponsiveTabs({
                            type: 'default', //Types: default, vertical, accordion           
                            width: 'auto', //auto or any width like 600px
                            fit: true   // 100% fit in a container
                        });
                    //});
    </script>    
</head>
<body>
<!----- start-header---->
 <div class="wrapper">

 <!----start-header---->
         <div class="header">
           <div class="container header_top">
                <div class="logo">
                  <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="" width="193" height="56"></a>
                </div>
                <?php echo  isset($current_user) ? theme_view('_sitenav'):''; ?>
                <div class="clearfix"> </div>
                <!----//End-top-nav---->
             </div>
        </div>
    <!----- //End-header---->