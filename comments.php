<!-- <h3 class="h3">Написати коментар</h2> -->
<?php $args = array(
	'walker'            => null,
	'max_depth'         => '',
	'style'             => 'ul',
	'callback'          => null,
	'end-callback'      => null,
	'type'              => 'all',
	'reply_text'        => 'Відповісти',
	'page'              => '',
	'per_page'          => '',
	'avatar_size'       => null,
	'reverse_top_level' => null,
	'reverse_children'  => '',
	'format'            => 'html5', // or 'xhtml' if no 'HTML5' theme support
	'short_ping'        => false,   // @since 3.6
        'echo'              => true     // boolean, default is true
); ?>

 <?php wp_list_comments($args, $comments); ?>
<?php
 $form_args = array(
        // change the title of send button 
        'label_submit'=>'Написати',
        // change the title of the reply section
        'title_reply'=>'Напишіть коментар',
        // remove "Text or HTML to be displayed after the set of comment fields"
        'comment_notes_after' => '',
        // redefine your own textarea (the comment body)
        'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( '', 'noun' ) . '</label><br /><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>',
);

comment_form($form_args);