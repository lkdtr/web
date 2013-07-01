<?php
function update_data($user_id,$redirect){
require_once(ABSPATH . 'wp-admin/includes/admin.php');
$message = '';
//shorten $_POST arrays to clean up code viewing
$USER = $_POST['USER'];
$META = $_POST['META'];
//add the user ID to update to the User Array
$USER['ID'] = $user_id;

    //password validation - we don't want an empty value, or
	//a value not to our preference (min/max characters, etc)
	if(!empty($USER['user_pass'])){
	  //ensure the password is atleast 6 characters long
	  if(strlen($USER['user_pass']) < 6){ 
		   $message .= 'Parolaniz%206%20karakter%20uzunlugunda%20olmali';			   
	  }
	} 
	  else{ unset($USER['user_pass']);} //we filter out the user_pass key when we update

	try{		
		if(empty($message)){
		  //update the USER data to the wp_user table
		 wp_update_user($USER);
           
		  //update our META data
		 update_usermeta( $user_id, 'telephone', $META['telephone'], false );
		 update_usermeta( $user_id, 'institution', $META['institution'], false );
		 update_usermeta( $user_id, 'age', $META['age'], false );
		 update_usermeta( $user_id, 'job', $META['job'], false );
		 update_usermeta( $user_id, 'lkd', $META['lkd'], false );
		 update_usermeta( $user_id, 'inetd', $META['inetd'], false );
		 update_usermeta( $user_id, 'education', $META['education'], false );
		 update_usermeta( $user_id, 'github', $META['github'], false );

		   //print_r($USER);
		  $message .= 'Guncelleme%20Basarili'; //success message
		}
		else{ throw new Exception($message);}	
	  }
	catch (Exception $e) {
	    //catch any errors and display them
		$message .= 'HATA:%20'.  $e->getMessage(). "\n";
	  }

	//redirect to refresh the page
	//wp_redirect( home_url().$redirect.'?update='.$message, 301 ); ?>
	<script type="text/javascript">
	<!--
	    window.location= <?php echo "'" . home_url().$redirect.'?update='.$message . "'"; ?>;
	//-->
	</script>
<?php }
?>