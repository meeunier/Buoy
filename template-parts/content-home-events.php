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
						echo '<ul>';
						foreach ($events as $event):
								 //Check if all day, set format accordingly
								 $format = ( eo_is_all_day($event->ID) ? get_option('date_format') : get_option('date_format').' '.get_option('time_format') );
								 printf(
											'<li class="single-event">
											<a href="%s">
											<p class="event-date">
												<span class="event-day">%s</span>
												<span class="event-month">%s</span>
											</p>
												<p class="event-meta">
												<span class="event-title">%s</span>
											</p>
											</a>
											</li>',
											get_permalink($event->ID),
											eo_get_the_start( 'd', $event->ID,null,$event->occurrence_id),
											eo_get_the_start( 'M', $event->ID,null,$event->occurrence_id),
											get_the_title($event->ID)

								 );
						endforeach;
						echo '</ul>';
			 endif;
			?>
