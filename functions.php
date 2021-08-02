<?php

// Tornar o template disponível para tradução
// A tradução pode ser feita em /languages/
load_theme_textdomain('mycustomtheme', TEMPLATEPATH . '/languages');

$locale = get_locale();
$locale_file = TEMPLATEPATH . "/languages/$locale.php";
if (is_readable($locale_file))
    require_once($locale_file);

// Puxar o número de página
function get_page_number()
{
    if (get_query_var('paged')) {
        print ' | ' . __('Page ', 'mycustomtheme') . get_query_var('paged');
    }
} // end get_page_number


// Chamada customizada de comentários
function custom_comments($comment, $args, $depth)
{
    $GLOBALS['comment'] = $comment;
    $GLOBALS['comment_depth'] = $depth;
?>
    <li id="comment-<?php comment_ID() ?>" <?php comment_class() ?>>
        <div class="comment-author vcard"><?php commenter_link() ?></div>
        <div class="comment-meta"><?php printf(
                                        __('Posted %1$s at %2$s <span class="meta-sep">|</span> <a href="%3$s" title="Permalink to this comment">Permalink</a>', 'seu-template'),
                                        get_comment_date(),
                                        get_comment_time(),
                                        '#comment-' . get_comment_ID()
                                    );
                                    edit_comment_link(__('Edit', 'seu-template'), ' <span class="meta-sep">|</span> <span class="edit-link">', '</span>'); ?></div>
        <?php if ($comment->comment_approved == '0') _e("\t\t\t\t\t<span class='unapproved'>Your comment is awaiting moderation.</span>\n", 'seu-template') ?>
        <div class="comment-content">
            <?php comment_text() ?>
        </div>
        <?php // echo the comment reply link
        if ($args['type'] == 'all' || get_comment_type() == 'comment') :
            comment_reply_link(array_merge($args, array(
                'reply_text' => __('Reply', 'seu-template'),
                'login_text' => __('Log in to reply.', 'seu-template'),
                'depth' => $depth,
                'before' => '<div class="comment-reply-link">',
                'after' => '</div>'
            )));
        endif;
        ?>
    <?php } // end custom_comments

// Chamada customizada para listar trackbacks
function custom_pings($comment, $args, $depth)
{
    $GLOBALS['comment'] = $comment;
    ?>
    <li id="comment-<?php comment_ID() ?>" <?php comment_class() ?>>
        <div class="comment-author"><?php printf(
                                        __('By %1$s on %2$s at %3$s', 'seu-template'),
                                        get_comment_author_link(),
                                        get_comment_date(),
                                        get_comment_time()
                                    );
                                    edit_comment_link(__('Edit', 'seu-template'), ' <span class="meta-sep">|</span> <span class="edit-link">', '</span>'); ?></div>
        <?php if ($comment->comment_approved == '0') _e('\t\t\t\t\t<span class="unapproved">Your trackback is awaiting moderation.</span>\n', 'seu-template') ?>
        <div class="comment-content">
            <?php comment_text() ?>
        </div>
    <?php } // end custom_pings

// Produz um avatar compatível com hCard
function commenter_link()
{
    $commenter = get_comment_author_link();
    if (preg_match('<a[^>]* class=[^>]+>', $commenter)) {
        $commenter = preg_replace('(<a[^>]* class=[\'"]?)', '\\1url ', $commenter);
    } else {
        $commenter = preg_replace('(<a )/', '\\1class="url "', $commenter);
    }
    $avatar_email = get_comment_author_email();
    //80 é a dimensão em pixeis para o seu gravatar.
    $avatar = str_replace("class='avatar", "class='photo avatar", get_avatar($avatar_email, 80));
    echo $avatar . ' <span class="fn n">' . $commenter . '</span>';
} // end commenter_link