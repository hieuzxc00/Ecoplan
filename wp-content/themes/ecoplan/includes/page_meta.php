<?php
$GLOBALS['title'] = get_field('meta_title') ?: get_the_title()."｜Website";
$GLOBALS['keywords'] = get_field('meta_keywords') ?: "";
$GLOBALS['description'] = get_field('meta_description') ?: "";
$GLOBALS['h1'] = get_field('meta_h1') ?: get_the_title();
?>