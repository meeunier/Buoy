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

	<?php $events = eo_get_events(array(
			'numberposts'=>5,
			'event_start_after'=>'today',
			'showpastevents'=>true,//Will be deprecated, but set it to true to play it safe.
			 ));
			 if($events):
				 		$venue_id = eo_get_venue($event->ID);
				 		$address_details = eo_get_venue_address($venue_id);
						echo '<ul>';
						foreach ($events as $event):
								 printf(
											'<li class="single-event">
											<a href="%s">
											<p class="event-date">
												<span class="event-day">%s</span>
												<span class="event-month">%s</span>
											</p>
												<p class="event-meta">
												<span class="event-country">USA</span>
												<span class="event-title">%s</span>
												<span class="event-venue">%s</span>
											</p>
											</a>
											</li>',
											get_permalink($event->ID),
											eo_get_the_start( 'd', $event->ID,null,$event->occurrence_id),
											eo_get_the_start( 'M', $event->ID,null,$event->occurrence_id),
											get_the_title($event->ID),
											get_post_meta($event->ID, 'event-venue', true)

								 );
						endforeach;
						echo '</ul>';
			 endif;
			?>
