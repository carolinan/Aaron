<?php
/**
 * Custom template tags for this theme.
 *
 * @package aaron
 */

if ( ! function_exists( 'aaron_posted_on' ) ) {
	/**
	 * Prints HTML with meta information for the current post-date/time and author.
	 */
	function aaron_posted_on() {
		echo '<div class="entry-meta">';
		if ( ! is_front_page() && ! is_home() ) {
			aaron_breadcrumbs();
		}

		if ( ! get_theme_mod( 'aaron_hide_author' ) ) {

			$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
			if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
				$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
			}

			$time_string = sprintf( $time_string,
				esc_attr( get_the_date( 'c' ) ),
				esc_html( get_the_date() ),
				esc_attr( get_the_modified_date( 'c' ) ),
				esc_html( get_the_modified_date() )
			);
			echo get_avatar( get_the_author_meta( 'ID' ), 30 );

			$posted_on = sprintf(
			_x( 'on %s', 'post date', 'aaron' ), $time_string);

			$byline = '<a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a>';

			echo '<span class="byline author vcard">' . $byline . '</span><span class=" posted-on"> ' . $posted_on . '</span>';
		}
		echo '</div><!-- .entry-meta -->';
	}
}



if ( ! function_exists( 'aaron_entry_footer' ) ) {

	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function aaron_entry_footer() {

		if ( ! get_theme_mod( 'aaron_hide_meta' ) ) {
			echo '<footer class="entry-footer">';
			// Hide category and tag text for pages.
			if ( 'post' === get_post_type() ) {

				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( esc_html__( ', ', 'aaron' ) );
				if ( $categories_list ) {
					printf( '<span class="cat-links"><i aria-hidden="true"></i>' . esc_html__( 'Categories: %1$s', 'aaron' ) . '</span>', $categories_list );
				}

				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', esc_html__( ', ', 'aaron' ) );
				if ( $tags_list ) {
					printf( '<span class="tags-links"><i aria-hidden="true"></i> ' . esc_html__( 'Tags: %1$s', 'aaron' ) . '</span>', $tags_list );
				}
			}

			if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
				echo '<span class="comments-link"><i aria-hidden="true"></i>';
				comments_popup_link( esc_html__( 'Leave a comment', 'aaron' ), esc_html__( '1 Comment', 'aaron' ), esc_html__( '% Comments', 'aaron' ) );
				echo '</span>';
			}

			/* translators: % is the post title */
			edit_post_link( sprintf( esc_html__( 'Edit %s', 'aaron' ), get_the_title() ), '<span class="edit-link"><i aria-hidden="true"></i>', '</span>' );

			/* Display jetpack's share if it's active*/
			if ( function_exists( 'sharing_display' ) ) {
				echo sharing_display();
			}

			/* Display jetpack's like  if it's active */
			if ( class_exists( 'Jetpack_Likes' ) ) {
			    $aaron_custom_likes = new Jetpack_Likes;
			    echo $aaron_custom_likes->post_likes( '' );
			}
			echo '</footer><!-- .entry-footer -->';
		}
	}
}


if ( ! function_exists( 'aaron_portfolio_footer' ) ) {

	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function aaron_portfolio_footer() {
		if ( ! get_theme_mod( 'aaron_hide_meta' ) ) {
			echo '<footer class="entry-footer">';

			global $post;

			echo '<a href="' . esc_url( home_url( '/portfolio/' ) ) . '"><b>' . esc_html__( 'Portfolio','aaron' ) . '</b></a><br/><br/>';
			echo the_terms( $post->ID, 'jetpack-portfolio-type', '<span class="jetpack-portfolio-type"><i aria-hidden="true"></i>' . esc_html__( 'Project Type: ','aaron' ) ,', ', '</span>' );

			echo the_terms( $post->ID, 'jetpack-portfolio-tag', '<span class="tags-links"><i aria-hidden="true"></i>' . esc_html__( 'Project Tags: ', 'aaron' ),', ', '</span>' );

			/* translators: % is the post title */
			edit_post_link( sprintf( esc_html__( 'Edit %s', 'aaron' ), get_the_title() ), '<span class="edit-link"><i aria-hidden="true"></i>', '</span>' );

			/* Display jetpack's share if it's active*/
			if ( function_exists( 'sharing_display' ) ) {
				echo sharing_display();
			}

			/* Display jetpack's like  if it's active */
			if ( class_exists( 'Jetpack_Likes' ) ) {
			    $aaron_custom_likes = new Jetpack_Likes;
			    echo $aaron_custom_likes->post_likes( '' );
			}
			echo '</footer><!-- .entry-footer -->';
		}
	}
}


add_filter( 'excerpt_more', 'aaron_excerpt_more',100 );
function aaron_excerpt_more( $more ) {
	global $id;
	return '&hellip; ' . aaron_continue_reading( $id );
}

add_filter( 'get_the_excerpt', 'aaron_custom_excerpt_more',100 );
function aaron_custom_excerpt_more( $output ) {
	if ( has_excerpt() && ! is_attachment() ) {
		global $id;
		$output .= ' ' . aaron_continue_reading( $id );
	}
	return $output;
}

function aaron_continue_reading( $id ) {
	return '<a class="more-link" href="' . esc_url( get_permalink( $id ) ) . '">' . sprintf( esc_html__( 'Continue Reading %s', 'aaron' ), get_the_title( $id ) ) . '</a>';
}

if ( ! function_exists( 'aaron_breadcrumbs' ) ) {

	function aaron_breadcrumbs() {
		if ( get_theme_mod( 'aaron_breadcrumb' ) ) {
			?>
				<nav class="crumbs" aria-label="breadcrumb" role="navigation">
					<span class="screen-reader-text"><?php esc_html_e( 'You are here: ', 'aaron' ); ?></span>
					<ul>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'aaron' ); ?></a></li>
						<?php
						if ( count( get_the_category() ) ) {
							$aaron_category = get_the_category();
							if ( $aaron_category[0] ) {
								echo '<li> &#x279c; ';
								echo '<a href="' . esc_url( get_category_link( $aaron_category[0]->term_id ) ) . '">' . esc_html( $aaron_category[0]->cat_name ) . '</a></li>';
							}
						}
						echo '<li> &#x279c;  ';
						?>
						<?php the_title(); ?>
					</li>
					</ul>
				</nav>
			<?php
		}
	}
}
