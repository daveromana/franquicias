<!--div class="masthead">
    <ul class="nav nav-pills pull-right">
        <li <?php echo check_class('home'); ?>><a href="<?php echo site_url(); ?>"><?php e( lang('bf_home') ); ?></a></li>
        <?php if (empty($current_user)) :?>
            <li><a href="<?php echo site_url(LOGIN_URL); ?>">Sign In</a></li>
        <?php else: ?>
            <li <?php echo check_method('profile'); ?>><a href="<?php echo site_url('/users/profile'); ?>"> <?php e(lang('bf_user_settings')); ?> </a></li>
            <li><a href="<?php echo site_url('/logout') ?>"><?php e( lang('bf_action_logout')); ?></a></li>
        <?php endif; ?>
    </ul>

    <h3 class="muted"><?php if (class_exists('Settings_lib')) e(settings_item('site.title')); else echo 'Bonfire'; ?></h3>
</div-->
<div class="menu">
    <a class="toggleMenu" href="#"><img src="<?php echo base_url(); ?>assets/images/nav_icon.png" alt="" /> </a>
    <ul class="nav" id="nav">
      <li <?php echo (!$this->uri->segment(1)) ? 'class="current"':''; ?>><a href="<?php echo base_url(); ?>">Inicio</a></li>
      <li <?php echo ($this->uri->segment(1)=="cuentas") ? 'class="current"':''; ?>><a href="<?php echo base_url(); ?>index.php/cuentas/consultar">Cuentas</a></li>  
      <li><a href="">Pedidos</a></li>          
      <div class="clearfix"></div>
    </ul>
</div>   
