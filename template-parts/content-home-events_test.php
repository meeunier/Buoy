<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

	<?php //Get upcoming events
    $events = eo_get_events(array(
         'numberposts'        => 5,
         'events_start_after' => 'today',
         'showpastevents'     => true,
      ));

    if( $events ){
        echo '<ul>';
        foreach( $events as $event ){
          printf("<li><a href='%s' >%s</a> from %s</li>",
               get_the_permalink( $post->ID ),
               get_the_title( $post->ID ),
               eo_get_the_start( 'M', $post->ID, $post->occurrence_id )
          );
         }
        echo '</ul>';
    }else{
        echo 'No Upcoming Events';
    }
			?>
