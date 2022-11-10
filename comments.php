<?php

if(! have_comments())
{
    echo "no comments yet";
}else{
    echo get_comments_number()." comments";
}

if(comments_open()){
    comment_form(
        array(
        'class_form' => ''
        )
        );
}

?>