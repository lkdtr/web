<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>

<div id="page">
  <div class="wrapper" id="content"
    style="background: #FFF url('<?php bloginfo('template_url'); ?>/images/warning.jpg') bottom right no-repeat">
    <p class="warning">
      Üzgünüz, aradığınız sayfa bulunamadı!<br /><br />
      Lütfen girdiğiniz bağlantı adresini kontrol edin veya aşağıda yer alan arama bölümünden arama yapınız.
    </p>
  </div>
  <?php include 'bottom_area.php'; ?>
  <?php get_footer(); ?>
</div>