<?php
/*$d='d';
echo "kdd";*/
//print "hi";
#printf($d);


// define('l', 'php');

// $ar = array(23 => 1, 2, 3, 4, 9 => 90);
// print_r($ar);
// // echo $ar; ==>error



// if (false) {
//     echo "t";
// } else {
//     echo "f";
// }
// $n = 1;
// switch ($n) {
//     case 1:
//         echo "1";
//         break;
//     case 2:
//         echo '20';
//         break;
//     default:
//         echo "default";
// }



$books = [
    [
        'name' => 'book1',
        'price' => 122
    ],
    [
        'name' => 'book2',
        'price' => 300
    ],
    [
        'name' => 'book2',
        'price' => 200
    ]
];

foreach($books as $book){
    echo $book['name'];
}


