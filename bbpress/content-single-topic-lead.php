<?php

/**
 * Single Topic Lead Content Part
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

<div class="topic-lead">


  <div class="author">

      <?php bbp_topic_author_link( array( 'sep' => '', 'show_role' => false ) ); ?>
      <?php do_action( 'bbp_theme_after_topic_author_details' ); ?>
      <div id="country" style="float:inherit;margin-right:.5em;"> <?php  $user = get_userdata( bbp_get_reply_author_id() );  $country = xprofile_get_field_data( 42, $user->ID ); dh_get_flag_by_location($country); ?></div>

      <?php
        $user = get_userdata( bbp_get_reply_author_id() );
        if ( !empty( $user->user_nicename ) ) {
          $user_nicename = $user->user_nicename;
          echo "<a href='/community/members/".$user_nicename."/'>" . $user_nicename . '</a>';
        }
      ?>
        <h1><?php the_title(); ?></h1>
<div class="date"><?php bbp_topic_post_date(); ?></div>

    </div>




  <div class="content">
    <?php do_action( 'bbp_template_before_lead_topic' ); ?>
    <?php do_action( 'bbp_theme_before_topic_content' ); ?>
    <?php bbp_topic_content(); ?>
    <?php do_action( 'bbp_theme_after_topic_content' ); ?>
    <?php do_action( 'bbp_template_after_lead_topic' ); ?>
  </div>
   <div class="actions">
    <?php do_action( 'bbp_theme_before_topic_admin_links' ); ?>
    <?php bbp_topic_admin_links(); ?>
    <?php do_action( 'bbp_theme_after_topic_admin_links' ); ?>
  </div>

</div>
