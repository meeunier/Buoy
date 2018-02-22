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
												<span class="event-country">%s</span>
												<span class="event-title">%s</span>
												<span class="event-venue">%s%s %s</span>
											</p>
											</a>
											</li>',
											get_permalink($event->ID),
											eo_get_the_start( 'd', $event->ID,null,$event->occurrence_id),
											eo_get_the_start( 'M', $event->ID,null,$event->occurrence_id),
											get_post_meta($event->ID, 'event-country', true),
											get_the_title($event->ID),
											get_post_meta($event->ID, 'event-city', true),
											get_post_meta($event->ID, 'event-state', true) ?  ',' :  '',
											get_post_meta($event->ID, 'event-state', true)

								 );
						endforeach;
						echo '</ul>';
			 endif;
			?>
