<?php 

add_action( 'after_setup_theme', 'lkdkamp_setup' );

if ( ! function_exists( 'lkdkamp_setup' ) ):

function lkdkamp_setup() {

	// post-thumb active!
	add_theme_support( 'post-thumbnails' );

}
endif;

/* wp_nav_menu() fonk., anasayfayi gosterme */
function lkdkamp_page_menu_args( $args ) {
	$args['show_home'] = false;
	return $args;
}
add_filter( 'wp_page_menu_args', 'lkdkamp_page_menu_args' );

/* register sidebars */
function lkdkamp_widgets_init() {

	register_sidebar( array(
		'name' => __( 'Right', 'lkd_kamp' ),
		'id' => 'right',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );

}
add_action( 'widgets_init', 'lkdkamp_widgets_init' );

/* thumb size */
add_image_size( 'sliderimg', 904, 304, false );

/* list sub-pages */
function lkdkamp_list_pages( $pageid ) {
	$parent_id = get_post_ancestors( $pageid );
	$parent_id = $parent_id[0];
	if($parent_id) $pageid = $parent_id;
	
	$args = array(
		'depth'        => 0,
		'show_date'    => '',
		'date_format'  => get_option('date_format'),
		'child_of'     => $pageid,
		'exclude'      => '',
		'include'      => '',
		'title_li'     => '',
		'echo'         => 1,
		'authors'      => '',
		'sort_column'  => 'menu_order',
		'link_before'  => '',
		'link_after'   => '',
		'walker'       => '' );
	
	return wp_list_pages($args);
}

/* list images */
function lkdkamp_list_images( $pageid ) {
		
	$args = array(
	'order'          => 'ASC',
	'orderby'        => 'menu_order',
	'post_type'      => 'attachment',
	'post_parent'    => $pageid,
	'post_mime_type' => 'image,video,text',
	'post_status'    => null,
	'numberposts'    => -1,
	);
	$attachments = get_posts($args);

		if ($attachments) {
			echo '<div id="slider">';
		    foreach ($attachments as $attachment) {
		    	$attachement_url=wp_get_attachment_url($attachment->ID);
		    	echo "<li>";
		    	if(stristr($attachment->post_mime_type, "video/")!==FALSE) {
		    		echo "<object width=\"736\" height=\"358\" id=\"undefined\" name=\"undefined\" data=\"".get_template_directory_uri()."/js/player.swf\" type=\"application/x-shockwave-flash\"><param name=\"movie\" value=\"".get_template_directory_uri()."/js/player.swf\" /><param name=\"allowfullscreen\" value=\"true\" /><param name=\"allowscriptaccess\" value=\"always\" /><param name=\"flashvars\" value='config={\"clip\":{\"url\":\"".$attachement_url."\",\"scaling\":\"orig\"},\"playlist\":[{\"url\":\"".$attachement_url."\"}]}' /></object>";
		    	} else if(stristr($attachment->post_mime_type, "image/")!==FALSE) {
	    			echo "<img src='".$attachement_url."' />";
	    		} else if(stristr($attachment->post_mime_type, "text/")!==FALSE) {
	    			$text=file($attachement_url);
	    			echo $text[0];
	    		}
	    		echo "</li>";
		}
		echo '</div>';
	}
	
}

add_action('register_form','lkdkamp_show_extra_fields');
add_action('register_post','lkdkamp_check_fields',10,3);
add_action('user_register','lkdkamp_register_extra_fields',10,3);

function lkdkamp_show_extra_fields(){
    ?>
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript">
    	jQuery(document).ready(function(){
    		jQuery(".register").html("Kampa başvurmak için aşağıdaki formu doldurunuz.");
    		jQuery("p#reg_passmail").html("Başvurunuzu son katılım tarihinden önce güncellemek için e-posta adresinize bir parola gelecektir.");
    		jQuery("#github").hide();
    		if(jQuery("#user_education").indexOf("Java")==-1) jQuery("#github").show();
    	});
    </script>
    <style>
    #login {
      padding:24px 0;
    }
    .login h1 a {
      background-image: url(<?php bloginfo( 'template_url' ); ?>/images/logo.png);
      background-size: 274px 100px;
      height:100px;
    }
    .element {
      background:none repeat scroll 0 0 #FBFBFB;
      border:1px solid #E5E5E5;
      font-size:24px;
      margin-bottom:16px;
      margin-right:6px;
      margin-top:2px;
      padding:3px;
      width:97%;
    }
    </style>
    <p><label>Ad<br/>
      <input id="user_first" type="text" tabindex="20" size="25" value="<?php if(isset($_POST['first'])) echo $_POST['first']; ?>" name="first"/>
      </label></p>
    <p><label>Soyad<br/>
      <input id="user_last" type="text" tabindex="20" size="25" value="<?php if(isset($_POST['last'])) echo $_POST['last']; ?>" name="last"/>
      </label></p>
    <p><label>Telefon<br/>
      <input id="user_telephone" class="element" type="text" tabindex="20" size="25" value="<?php if(isset($_POST['telephone'])) echo $_POST['telephone']; ?>" name="telephone"/>
      </label></p>
    <p><label>Kurum/Üniversite<br/>
      <input id="user_institution" class="element" type="text" tabindex="20" size="25" value="<?php if(isset($_POST['institution'])) echo $_POST['institution']; ?>" name="institution"/>
      </label></p>
    <p><label>Mesleğiniz<br/>
      <input id="user_job" class="element" type="text" tabindex="20" size="25" maxlength="10" value="<?php if(isset($_POST['job'])) echo $_POST['job']; ?>" name="job"/>
      </label></p>
<?php $educations_arg = array( 
	    'post_parent' => 13,
	    'post_type'   => 'any', 
	    'numberposts' => -1,
	    'post_status' => 'any'
	);
	$educations = get_children($educations_arg); ?>
    <p><label>Katılmak İstediginiz Eğitim<br/>
      <select id="user_education" class="element" tabindex="20" name="education">
      	<?php foreach ($educations as $education) { ?>
      		<option value="<?php echo $education->post_title; ?>" <?php if(isset($_POST['education']) && $_POST['education']==$education->post_title) echo "selected"; ?>><?php echo $education->post_title; ?></option>
      	<?php } ?>
      </select>
      </label></p>
    <p id="github"><label>Github Hesabınız<br/>
      <input id="user_github" class="element" type="text" tabindex="20" size="25" maxlength="10" value="<?php if(isset($_POST['github'])) echo $_POST['github']; ?>" name="github"/>
      </label></p>
    <?php
}

function lkdkamp_check_fields($login, $email, $errors) {
  global $firstname, $lastname, $telephone, $institution, $job, $education, $github;

  if ($_POST['first'] == '') {
    $errors->add('empty_realname', "<strong>HATA</strong>: Lütfen adınızı yazın.");
  } else {
    $firstname = $_POST['first'];
  }

  if ($_POST['last'] == '') {
    $errors->add('empty_realname', "<strong>HATA</strong>: Lütfen soyadınızı yazın.");
  } else {
    $lastname = $_POST['last'];
  }

  if ($_POST['telephone'] == '') {
    $errors->add('empty_realname', "<strong>HATA</strong>: Telefon alanı boş.");
  } else {
    $telephone = $_POST['telephone'];
  }
  
  if ($_POST['institution'] == '') {
    $errors->add('empty_realname', "<strong>HATA</strong>: Kurum/Üniversite alanı boş.");
  } else {
    $institution = $_POST['institution'];
  }

  if ($_POST['job'] == '') {
    $errors->add('empty_realname', "<strong>HATA</strong>: Mesleğiniz alanı boş.");
  } else {
    $job = $_POST['job'];
  }

  if ($_POST['education'] == '') {
    $errors->add('empty_realname', "<strong>HATA</strong>: Katılmak istediğiniz eğitimi şeçin.");
  } else {
    $job = $_POST['education'];
  }

  if ($_POST['github'] == '' && stristr($_POST['education'], "Java")===TRUE) {
    $errors->add('empty_realname', "<strong>HATA</strong>: Github hesabınızı doldurmadınız.");
  } else {
    $job = $_POST['github'];
  }

}

function lkdkamp_register_extra_fields($user_id, $password="", $meta=array())  {
  $userdata = array();
  $userdata['ID'] = $user_id;
  $userdata['first_name'] = $_POST['first'];
  $userdata['last_name'] = $_POST['last'];
  wp_update_user($userdata);
  update_usermeta( $user_id, 'telephone', $_POST['telephone'] );
  update_usermeta( $user_id, 'institution', $_POST['institution'] );
  update_usermeta( $user_id, 'job', $_POST['job'] );
  update_usermeta( $user_id, 'education', $_POST['education'] );
  update_usermeta( $user_id, 'github', $_POST['github'] );
}

add_action( 'show_user_profile', 'lkdkamp_show_extra_profile_fields' );
add_action( 'edit_user_profile', 'lkdkamp_show_extra_profile_fields' );

function lkdkamp_show_extra_profile_fields( $user ) {
  $current_telephone = esc_attr( get_the_author_meta( 'telephone', $user->ID ) );
  $current_institution = esc_attr( get_the_author_meta( 'institution', $user->ID ) );
  $current_job = esc_attr( get_the_author_meta( 'job', $user->ID ) );
  $current_education = esc_attr( get_the_author_meta( 'education', $user->ID ) );
  $current_github = esc_attr( get_the_author_meta( 'github', $user->ID ) );
    ?>
    <h3>Katılım Formu</h3>
    <table class="form-table">
      <tr>
        <th><label for="telephone">Telefon</label></th>
        <td>
          <input type="text" name="telephone" id="telephone" size="10" maxlength="200" value="<?php echo $current_telephone ?>" class="regular-text" />
        </td>
      </tr>
      <tr>
        <th><label for="institution">Kurum/Üniversite</label></th>
        <td>
          <input type="text" name="institution" id="institution" size="10" maxlength="200" value="<?php echo $current_institution ?>" class="regular-text" />
        </td>
      </tr>
      <tr>
        <th><label for="job">Mesleği</label></th>
        <td>
          <input type="text" name="job" id="job" size="10" maxlength="200" value="<?php echo $current_job ?>" class="regular-text" />
        </td>
      </tr>
      <tr>
        <th><label for="education">Eğitim</label></th>
        <td>
          <?php $educations_arg = array( 
          	    'post_parent' => 13,
          	    'post_type'   => 'any', 
          	    'numberposts' => -1,
          	    'post_status' => 'any'
          	);
          	$educations = get_children($educations_arg); ?>
            <select id="education" name="education">
            	<option value="">Hiçbiri</option>
            	<?php foreach ($educations as $education) { ?>
            		<option value="<?php echo $education->post_title; ?>" <?php if($current_education==$education->post_title) echo "selected"; ?>><?php echo $education->post_title; ?></option>
            	<?php } ?>
            </select>
        </td>
      </tr>
      <tr>
        <th><label for="github">Github Hesabı</label></th>
        <td>
          <input type="text" name="github" id="job" size="10" maxlength="200" value="<?php echo $current_github ?>" class="regular-text" />
        </td>
      </tr>
    </table>
    <?php
}

add_action( 'personal_options_update', 'lkdkamp_save_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'lkdkamp_save_extra_profile_fields' );

function lkdkamp_save_extra_profile_fields($user_id) {
  if ( !current_user_can('edit_user', $user_id) ) {
    return false;
  }
  update_usermeta( $user_id, 'telephone', $_POST['telephone'] );
  update_usermeta( $user_id, 'institution', $_POST['institution'] );
  update_usermeta( $user_id, 'job', $_POST['job'] );
  update_usermeta( $user_id, 'education', $_POST['education'] );
  update_usermeta( $user_id, 'github', $_POST['github'] );
}

function lkdkamp_registration_redirect()
{
    return home_url( '/kamp-basarili-kayit' );
}
add_filter( 'registration_redirect', 'lkdkamp_registration_redirect' );

function my_login_redirect( $redirect_to, $request, $user ){
    //is there a user to check?
    if( isset( $user->roles ) && is_array( $user->roles ) ) {
        //check for admins
        if( in_array( "administrator", $user->roles ) ) {
            // redirect them to the default place
            return $redirect_to;
        } else {
            return home_url();
        }
    }
    else {
        return $redirect_to;
    }
}
add_filter("login_redirect", "my_login_redirect", 10, 3);