<?php

function countWords($str){

    $words = str_word_count(strtolower($str),2);

    print_r(array_count_values($words));
}
countWords("Next time there won't be a next time.");

?>