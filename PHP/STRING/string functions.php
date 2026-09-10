<?php
    echo strlen( "hello world!" );  //outputs 12
    echo strlen( "łódź" );  //outputs 7
    // polskie znaki w unicode zajmują dwa bajty

    echo mb_strlen( "łódź" );  //outputs 4
?>


<?php
    echo str_word_count("hello world!");  //outputs 2
?>