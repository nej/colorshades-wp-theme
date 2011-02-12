<?php get_header() ?>

	<div id="container">
		<div id="content">

			<div class="outer_content">
				<div class="content">
				
			<h2 class="page-title"><?php _e( 'Category Archives:', 'coloshades' ) ?> <span><?php single_cat_title() ?></span></h2>
			<?php $categorydesc = category_description(); if ( !empty($categorydesc) ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . $categorydesc . '</div>' ); ?>


			<div id="nav-above" class="navigation">
				<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'coloshades' ) ) ?></div>
				<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'coloshades' ) ) ?></div>
			</div>
			
				</div>
			</div>

<?php while ( have_posts() ) : the_post() ?>

			<div class="outer_content">
				<div class="content">

			<div id="post-<?php the_ID() ?>" class="<?php coloshades_post_class() ?>">
				<h3 class="entry-title"><a href="<?php the_permalink() ?>" title="<?php printf( __( 'Permalink to %s', 'coloshades' ), the_title_attribute('echo=0') ) ?>" rel="bookmark"><?php the_title() ?></a></h3>
				<div class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php unset($previousday); printf( __( '%1$s &#8211; %2$s', 'coloshades' ), the_date( '', '', '', false ), get_the_time() ) ?></abbr></div>
				<div class="entry-content">
<?php the_excerpt(__( 'Read More <span class="meta-nav">&rarr;</span>', 'coloshades' )) ?>

				</div>
				<div class="entry-meta">
					<span class="author vcard"><?php printf( __( 'By %s', 'coloshades' ), '<a class="url fn n" href="' . get_author_link( false, $authordata->ID, $authordata->user_nicename ) . '" title="' . sprintf( __( 'View all posts by %s', 'coloshades' ), $authordata->display_name ) . '">' . get_the_author() . '</a>' ) ?></span>
					<span class="meta-sep">|</span>
<?php if ( $cats_meow = coloshades_cats_meow(', ') ) : // Returns categories other than the one queried ?>
					<span class="cat-links"><?php printf( __( 'Also posted in %s', 'coloshades' ), $cats_meow ) ?></span>
					<span class="meta-sep">|</span>
<?php endif ?>
					<?php the_tags( __( '<span class="tag-links">Tagged ', 'coloshades' ), ", ", "</span>\n\t\t\t\t\t<span class=\"meta-sep\">|</span>\n" ) ?>
<?php edit_post_link( __( 'Edit', 'coloshades' ), "\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t<span class=\"meta-sep\">|</span>\n" ) ?>
					<span class="comments-link"><?php comments_popup_link( __( 'Comments (0)', 'coloshades' ), __( 'Comments (1)', 'coloshades' ), __( 'Comments (%)', 'coloshades' ) ) ?></span>
				</div>
			</div><!-- .post -->
			
				</div>
			</div>

<?php endwhile; ?>

			<div class="outer_content">
				<div class="content">

			<div id="nav-below" class="navigation">
				<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'coloshades' ) ) ?></div>
				<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'coloshades' ) ) ?></div>
			</div>
			
				</div>
			</div>

		</div><!-- #content -->
	</div><!-- #container -->

<?php get_sidebar() ?>
<?php get_footer() ?>