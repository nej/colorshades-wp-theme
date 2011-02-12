<?php get_header() ?>

	<div id="container">
		<div id="content">

<?php the_post() ?>

			<div class="outer_content">
				<div class="content">

			<h2 class="page-title author"><?php printf( __( 'Author Archives: <span class="vcard">%s</span>', 'coloshades' ), "<a class='url fn n' href='$authordata->user_url' title='$authordata->display_name' rel='me'>$authordata->display_name</a>" ) ?></h2>
			<?php $authordesc = $authordata->user_description; if ( !empty($authordesc) ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . $authordesc . '</div>' ); ?>

			<div id="nav-above" class="navigation">
				<div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&larr;</span> Older posts', 'coloshades' )) ?></div>
				<div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&rarr;</span>', 'coloshades' )) ?></div>
			</div>

<?php rewind_posts() ?>

<?php while ( have_posts() ) : the_post() ?>

			<div id="post-<?php the_ID() ?>" class="<?php coloshades_post_class() ?>">
				<h3 class="entry-title"><a href="<?php the_permalink() ?>" title="<?php printf( __( 'Permalink to %s', 'coloshades' ), the_title_attribute('echo=0') ) ?>" rel="bookmark"><?php the_title() ?></a></h3>
				<div class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php unset($previousday); printf( __( '%1$s &#8211; %2$s', 'coloshades' ), the_date( '', '', '', false ), get_the_time() ) ?></abbr></div>
				<div class="entry-content">
<?php the_excerpt(__( 'Read More <span class="meta-nav">&rarr;</span>', 'coloshades' )) ?>

				</div>
				<div class="entry-meta">
					<span class="cat-links"><?php printf( __( 'Posted in %s', 'coloshades' ), get_the_category_list(', ') ) ?></span>
					<span class="meta-sep">|</span>
					<?php the_tags( __( '<span class="tag-links">Tagged ', 'coloshades' ), ", ", "</span>\n\t\t\t\t\t<span class=\"meta-sep\">|</span>\n" ) ?>
<?php edit_post_link(__('Edit', 'coloshades'), "\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t<span class=\"meta-sep\">|</span>\n"); ?>
					<span class="comments-link"><?php comments_popup_link( __( 'Comments (0)', 'coloshades' ), __( 'Comments (1)', 'coloshades' ), __( 'Comments (%)', 'coloshades' ) ) ?></span>
				</div>
			</div><!-- .post -->

<?php endwhile ?>

			<div id="nav-below" class="navigation">
				<div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&larr;</span> Older posts', 'coloshades' )) ?></div>
				<div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&rarr;</span>', 'coloshades' )) ?></div>
			</div>
			
				</div>
			</div>

		</div><!-- #content -->
	</div><!-- #container -->

<?php get_sidebar() ?>
<?php get_footer() ?>