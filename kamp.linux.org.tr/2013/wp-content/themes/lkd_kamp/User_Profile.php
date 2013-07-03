<?php
/*
Template Name: Custom_Profiler
*/
?>
<?php get_header();?>

<article>

<?php
//load the function that updates the data
require_once (TEMPLATEPATH . '/Profile/profile.php');

//check if the user is logged in
if ( is_user_logged_in() ){
    //enter page to use to redirect
	$redirect = '/basvurum';  //by page slug

	//get current user information
	wp_get_current_user();
	$user_id = $current_user->ID;

    $current_telephone = esc_attr( get_the_author_meta( 'telephone', $user_id ) );
    $current_institution = esc_attr( get_the_author_meta( 'institution', $user_id ) );
    $current_age = esc_attr( get_the_author_meta( 'age', $user_id ) );
    $current_job = esc_attr( get_the_author_meta( 'job', $user_id ) );
    $current_lkd = esc_attr( get_the_author_meta( 'lkd', $user_id ) );
    $current_inetd = esc_attr( get_the_author_meta( 'inetd', $user_id ) );
    $current_education = esc_attr( get_the_author_meta( 'education', $user_id ) );
    $current_educationTwo = esc_attr( get_the_author_meta( 'educationTwo', $user_id ) );
    $current_educationThree = esc_attr( get_the_author_meta( 'educationThree', $user_id ) );
    $current_github = esc_attr( get_the_author_meta( 'github', $user_id ) );
    $current_notes = esc_attr( get_the_author_meta( 'notes', $user_id ) );
    $current_place = esc_attr( get_the_author_meta( 'place', $user_id ) );

	$meta = get_user_meta($user_id, 'profile');
	
	//check if the submit button was pressed
	if (isset($_POST['submit'])) {
	   //email validation
	   if(is_email($_POST['USER']['user_email'])){
	   //if yes, call to update the data	     
	     update_data($user_id,$redirect);	
		 //if email is invalid, tell the user   
	   } else {
        $message .= 'Gecersiz%20E-posta:%20'.$_POST['USER']['user_email'];
        //wp_safe_redirect( home_url().$redirect.'&update='.$message ); ?>
        <script type="text/javascript">
        <!--
            window.location= <?php echo "'" . home_url().$redirect.'?update='.$message . "'"; ?>;
        //-->
        </script>
        <?php
       }

	 }

?>  <div style="float:right;"><a href="<?php echo wp_logout_url( home_url() ); ?>">Çıkış Yap</a></div>
    <h1>Başvurum</h1>
	<?php if(!empty($_GET['update'])){ ?>
    <div style="color: #fff; background: #E6702E; width: 100%; padding: 5px; font-weight: bold; text-align: center; font-size: 11px; margin: 0 0 10px 0;">
        <?php echo $_GET['update']; ?>
    </div>
    <?php }//let the user know if data is updated ?>

	<form class="profileform" method="post" action="">
        <aside>
            <strong>Kişisel Bilgiler</strong>
            <ul>		
                <li><label for="first_name">Ad </label><input type="text" name="USER[first_name]" value="<?php if(!empty($current_user->user_firstname)){ echo $current_user->user_firstname;} ?>" /></li>
        		<li><label for="last_name">Soyad </label><input type="text" name="USER[last_name]" value="<?php if(!empty($current_user->user_lastname)){ echo $current_user->user_lastname;} ?>" /></li>
                <li><label for="age">Yaşınız</label><input type="text" name="META[age]" value="<?php  if(!empty($current_age)){ echo $current_age;}  ?>" /></li>
                <li><label for="telephone">Telefon</label><input type="text" name="META[telephone]" value="<?php  if(!empty($current_telephone)){ echo $current_telephone;}  ?>" /></li>
                <li><label for="institution">Kurum/Üniversite</label><input type="text" name="META[institution]" value="<?php  if(!empty($current_institution)){ echo $current_institution;}  ?>" /></li>
                <li><label for="job">Meslek</label><input type="text" name="META[job]" value="<?php  if(!empty($current_job)){ echo $current_job;}  ?>" /></li>
            </ul>
        </aside>
        
        <aside>
            <strong>Erişim Bilgileri</strong>
            <ul>
                <li><label for="user_login">Kullanıcı Adı </label><?php if(!empty($current_user->user_login)){ echo $current_user->user_login;} ?></li>
                <li><label for="user_email">E-posta </label><input type="text" name="USER[user_email]" value="<?php if(!empty($current_user->user_email)){ echo $current_user->user_email;} ?>" /></li>
                <li><label for="user_pass">Parola </label><input type="password" name="USER[user_pass]" value="" /></li>
                <li><label for="github">Github Hesabı</label><input type="text" name="META[github]" value="<?php  if(!empty($current_github)){ echo $current_github;}  ?>" /></li>
                <li><label for="user_notes">İletmek istediğiniz notlar</label>
                    <textarea name="META[notes]"><?php  if(!empty($current_notes)){ echo $current_notes;}  ?></textarea>
                </li>
            </ul>
        </aside>
		
        <aside>
        <strong>Başvuru Bilgileri</strong>
        <ul>
        <li><label for="education">Katılmak İstediginiz Eğitim</label>
        <?php $educationPage = get_page_by_title( 'Kurslar' );
              $educations_arg = array( 
                'post_parent' => $educationPage->ID,
                'post_type'   => 'any', 
                'numberposts' => -1,
                'post_status' => 'any'
            );
            $educations = get_children($educations_arg); ?>
          <select id="education" name="META[education]">
            <option value="">Hiçbiri</option>
            <?php foreach ($educations as $education) { ?>
                <option value="<?php echo $education->post_title; ?>" <?php if($current_education==$education->post_title) echo "selected"; ?>><?php echo $education->post_title; ?></option>
            <?php } ?>
        </select><li>
        <li><label for="educationTwo">Eğitim için varsa 2. Tercihiniz</label>
          <select id="educationTwo" name="META[educationTwo]">
            <option value="">Yok</option>
            <?php foreach ($educations as $educationTwo) { ?>
                <option value="<?php echo $educationTwo->post_title; ?>" <?php if($current_educationTwo==$educationTwo->post_title) echo "selected"; ?>><?php echo $educationTwo->post_title; ?></option>
            <?php } ?>
        </select><li>
        <li><label for="educationThree">Eğitim için varsa 3. Tercihiniz</label>
          <select id="educationThree" name="META[educationThree]">
            <option value="">Yok</option>
            <?php foreach ($educations as $educationThree) { ?>
                <option value="<?php echo $educationThree->post_title; ?>" <?php if($current_educationThree==$educationThree->post_title) echo "selected"; ?>><?php echo $educationThree->post_title; ?></option>
            <?php } ?>
        </select><li>
        <li><label for="lkd">LKD üyesi iseniz üye numaranız</label><input type="text" name="META[lkd]" value="<?php  if(!empty($current_lkd)){ echo $current_lkd;}  ?>" /></li>
        <li><label for="inetd">INETD üyesi iseniz üye numaranız</label><input type="text" name="META[inetd]" value="<?php  if(!empty($current_inetd)){ echo $current_inetd;}  ?>" /></li>
        <li><label for="place">Yurtta konaklamak istiyor musun?</label>
          <select id="place" name="META[place]">
            <option value="Hayır" <?php if($current_place=="Hayır") echo "selected"; ?>>Hayır</option>
            <option value="Kredi Yurtlar" <?php if($current_place=="Kredi Yurtlar") echo "selected"; ?>>Kredi Yurtlar</option>
            <option value="Herhangi Bir Yurt" <?php if($current_place=="Herhangi Bir Yurt") echo "selected"; ?>>Herhangi Bir Yurt</option>
        </select><li>
        </ul>
        </aside>

        <aside id="submitButton"><input type="submit" value="Başvurumu Güncelle" name="submit"/></aside>

        <div class="clear"></div>
        
	</form>
    </ul>
   <!-- WEB FORM END -->

<?php 
} //end if user logged in

//Else user is not logged in
else { 

 //we give a message telling the user the 'WHY' and the 'HOW'
  echo '<h2>Bu sayfayı görüntüleyebilmek için <a href="'.wp_login_url( get_permalink() ).'" title="Giriş Yap">giriş</a> yapmalısınız. </h2>';
  ?>

<?php } //end else ?>

<div style="height:100px;"></div>

</article>

<?php get_footer(); ?>
