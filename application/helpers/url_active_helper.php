<?php

function put_link($text, $link): string
{
    $url = '<a class="nav-link" href="' . base_url($link) . '">' . $text . '</a>';
    if (explode(base_url(), current_url())[1] == $link) {
        $url = '<a class="nav-link active" aria-current="page" href="' . base_url($link) . '">' . $text . '</a>';
    }
    return $url;
}
