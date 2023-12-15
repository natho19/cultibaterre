<?php

function cultibaterre_pagination($pages = '', $range = 2) {
	$showitems = ($range * 2) + 1;
	global $paged;

	if (empty($paged)) $paged = 1;

	if ($pages == '') {
		global $wp_query;
		$pages = $wp_query->max_num_pages;
		if (!$pages) $pages = 1;
	}
	
	if (1 != $pages) {
	    echo '<div class="projects-details__pagination clearfix">';
        echo '<ul>';
			
	 	if ($paged > 1) echo '<li><div class="previous"><p><a href="' . get_pagenum_link($paged - 1) . '"><span class="icon-right-arrow-2"></span>Précédent</a></p></div></li>';
		
		if ($paged < $pages) echo '<li><div class="next"><p><a href="' . get_pagenum_link($paged + 1) . '">Suivant <span class="icon-right-arrow-2"></span></a></p></div></li>';

	 	echo '</ul>';
        echo '</div>';
	}
}