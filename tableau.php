<?php
$books = [
    'Heather Ale' =>'1890',
    'Mon ombre' =>'1885',
    'Catriana' => '1893'
];

asort($books);

foreach($books as $book => $bookYear ) {
    echo nl2br("$bookYear - $book\n") ;
}












?> 