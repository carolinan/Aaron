<?php
/**
 * Widget API: WP_Widget_Recent_Posts class
 *
 * The testimonial widget requires the Jetpack plugin.
 *
 * @link Learn more: https://wordpress.org/plugins/jetpack/
 *
 * @package Aaron
 */

/**
 * Register our testimonial widget.
 */
function aaron_testimonial_widget() {
	register_widget( 'Aaron_Testimonial_Widget' );
}
add_action( 'widgets_init', 'aaron_testimonial_widget' );


/**
 * Theme specific class used to implement a Recent Posts widget.
 */
class Aaron_Testimonial_Widget extends WP_Widget {

	/**
	 * Sets up a new Recent Posts widget instance.
	 */
	public function __construct() {
		$widget_ops = array(
			'classname'                   => 'aaron-testimonials',
			'description'                 => __( 'Your site&#8217;s most recent Testimonials.', 'aaron' ),
			'customize_selective_refresh' => true,
		);
		parent::__construct( 'aaron-testimonials', __( 'Aaron: Testimonials', 'aaron' ), $widget_ops );
		$this->alt_option_name = 'aaron_testimonials';
	}

	/**
	 * Outputs the content for the current Recent Posts widget instance.
	 *
	 * @param array $args     Display arguments including 'before_title', 'after_title',
	 *                        'before_widget', and 'after_widget'.
	 * @param array $instance Settings for the current Recent Posts widget instance.
	 */
	public function widget( $args, $instance ) {
		if ( ! isset( $args['widget_id'] ) ) {
			$args['widget_id'] = $this->id;
		}

		$title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : '';

		/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
		$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );

		$number = ( ! empty( $instance['number'] ) ) ? absint( $instance['number'] ) : 5;
		if ( ! $number ) {
			$number = 1;
		}
		$display_horizontally = isset( $instance['display_horizontally'] ) ? $instance['display_horizontally'] : false;

		/**
		 * Filters the arguments for the Recent Posts widget.
		 *
		 * @see WP_Query::get_posts()
		 *
		 * @param array $args An array of arguments used to retrieve the recent posts.
		 */
		$r = new WP_Query(
			apply_filters(
				'widget_posts_args',
				array(
					'post_type'           => 'jetpack-testimonial',
					'posts_per_page'      => $number,
					'no_found_rows'       => true,
					'post_status'         => 'publish',
					'ignore_sticky_posts' => true,
				)
			)
		);

		if ( $r->have_posts() ) {
			if ( $display_horizontally ) {
				echo '<section class="widget aaron-testimonials horizontal-testimonials">';
			} else {
				echo $args['before_widget'];
			}
			if ( $title ) {
				echo $args['before_title'] . $title . $args['after_title'];
			} ?>
			<ul>
			<?php
			while ( $r->have_posts() ) {
				$r->the_post();
				?>
				<li class="jetpack-testimonial">
					<div class="entry-content">
					<?php
					the_content();
					?>
					</div><!-- .testimonial-content -->
					<?php
					the_title( '<h2 class="entry-title">-', '</h2>' );

					if ( has_post_thumbnail() ) {
						the_post_thumbnail( 'thumbnail' );
					}
					?>
				</li>
				<?php } ?>
			</ul>
			<?php echo $args['after_widget']; ?>
			<?php
			// Reset the global $the_post as this query will have stomped on it.
			wp_reset_postdata();
		}
	}

	/**
	 * Handles updating the settings for the current Recent Posts widget instance.
	 *
	 * @param array $new_instance New settings for this instance as input by the user via
	 *                            WP_Widget::form().
	 * @param array $old_instance Old settings for this instance.
	 * @return array Updated settings to save.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance                         = $old_instance;
		$instance['title']                = sanitize_text_field( $new_instance['title'] );
		$instance['number']               = (int) $new_instance['number'];
		$instance['display_horizontally'] = isset( $new_instance['display_horizontally'] ) ? (bool) $new_instance['display_horizontally'] : false;
		return $instance;
	}

	/**
	 * Outputs the settings form for the Recent Posts widget.
	 *
	 * @param array $instance Current settings.
	 */
	public function form( $instance ) {
		$title                = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
		$number               = isset( $instance['number'] ) ? absint( $instance['number'] ) : 1;
		$display_horizontally = isset( $instance['display_horizontally'] ) ? (bool) $instance['display_horizontally'] : false;
		?>
		<p><label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title:', 'aaron' ); ?></label>
		<input class="widefat" 
		id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" 
		name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" 
		type="text" 
		value="<?php echo esc_attr( $title ); ?>" /></p>

		<p><label for="<?php echo esc_attr( $this->get_field_id( 'number' ) ); ?>"><?php esc_html_e( 'Number of testimonials to show:', 'aaron' ); ?></label>
		<input class="tiny-text"
		id="<?php echo esc_attr( $this->get_field_id( 'number' ) ); ?>" 
		name="<?php echo esc_attr( $this->get_field_name( 'number' ) ); ?>" 
		type="number" step="1" min="1" 
		value="<?php echo esc_attr( $number ); ?>" size="3" /></p>

		<p><input class="checkbox" type="checkbox"<?php checked( $display_horizontally ); ?> 
		id="<?php echo esc_attr( $this->get_field_id( 'display_horizontally' ) ); ?>" 
		name="<?php echo esc_attr( $this->get_field_name( 'display_horizontally' ) ); ?>" />
		<label for="<?php echo esc_attr( $this->get_field_id( 'display_horizontally' ) ); ?>">
		<?php esc_html_e( 'Display testimonials as a full width horizontal list.', 'aaron' ); ?></label></p>
		<?php
	}
}
