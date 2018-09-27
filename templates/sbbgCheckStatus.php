<?php
/**
 * Template form that will be used to gather info to run bg checks
 * on users
 *
 * @author  Nick Williams
 * @version 1.0.0
 */

 defined('ABSPATH') || exit();



 $user = get_current_user_id();
 $userOrderID = get_user_meta($user,'sb_bg_check_canidate_order_id');
 $userBGCheckStatus = get_user_meta($cUserID, 'user_bg_check_passed', true);
 ?>

<div>
<?php if($userBGCheckStatus == 1){ ?>
    <h2 class="text-center">Congratulations You have passed your background check!</h2> <br /> 
<?php } else { ?>
<h4> You have already filled out the preliminary information for your background check, if you would like to check your status click the button below </h4>
<button class="sb-bg-order-check" data-id="<?php echo $userOrderID[0]; ?>" data-url="<?php echo admin_url( 'admin-ajax.php' );?>"
data-nonce="<?php echo wp_create_nonce('sb_bg_check_order_status'); ?>">Check Status</button>
<br><br>
</div>
<?php } ?>
