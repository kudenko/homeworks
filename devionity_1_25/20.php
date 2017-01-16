<?php

      $bookOne = array('style' => 'fantazy',
                      'author' => ' J. R. R. Tolkien',
                        'name' => 'The Lord of the Rings',
                       'price' => 150);

      $bookTwo = array('style' => 'horror',
                      'author' => 'S. King',
                        'name' => 'Under the Doome',
                       'price' => 200);

      $bookThree = array('style' => 'science fiction',
                        'author' => 'Robert A. Heinlein',
                          'name' => 'The Door into Summer',
                         'price' => 250);

    $myArray = array($bookOne, $bookTwo, $bookThree);

    echo '<pre>';
    print_r ($myArray);
    echo '</pre>';
 ?>
