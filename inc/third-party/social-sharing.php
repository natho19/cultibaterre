<?php

function cultibaterre_social_sharing($content)
{
    global $post;

    if (is_single()) {
        // Get site name
        $site_title = get_bloginfo('name');

        // Get current page URL 
        $URL = urlencode(get_permalink());

        // Get current page title
        $title = htmlspecialchars(urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8');

        // Construct sharing URL without using any script
        $twitterURL = 'https://twitter.com/intent/tweet?text=' . $title . '&amp;url=' . $URL . '&amp;via=' . $site_title;
        $facebookURL = 'https://www.facebook.com/sharer/sharer.php?u=' . $URL;
        $linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&url=' . $URL . '&amp;title=' . $title;
        // $newlinkedInURL = 'https://www.linkedin.com/sharing/share-offsite/?url=' . $URL;

        // Add sharing button at the end of post/page content
        $content .= '<div class="tag-social-link">';
        $content .= '<div class="tag-social-link__social-links">';
        $content .= '<ul>';

        // Twitter
        $content .= '<li class="single_post_share_twitter">';
        $content .= '<a href="' . $twitterURL . '" target="_blank"><i class="fab fa-twitter"></i></a>';
        $content .= '</li>';

        // Facebook
        $content .= '<li>';
        $content .= '<a href="' . $facebookURL . '" target="_blank"><i class="fab fa-facebook"></i></a>';
        $content .= '</li>';

        // LinkedIn
        $content .= '<li class="single_post_share_linkedin">';
        $content .= '<a href="' . $linkedInURL . '" target="_blank"><i class="fab fa-linkedin"></i></a>';
        $content .= '</li>';

        $content .= '</ul>';
        $content .= '</div>';
        $content .= '</div>';

        return $content;
    } else {
        // if not a post/page then don't include sharing button
        return $content;
    }
};

add_filter('the_content', 'cultibaterre_social_sharing');