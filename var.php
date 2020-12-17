<?php
// The begginin of our PHP  - the world of variables!

//Think abouut a  varible as a container for content!!

// Be consisten in your naming conventions!!!!

//$firstName = 'Jesus'; // end of PHP statement needs to be ended with asemi- colon
//Jesus is assignned to the variable $firstName
//$firstName ='Jesus';     
//$firstName ='Sara';     
//$firstName ='Elizabeth';     
$lastName = 'Rodriguez';



//echo $firstName. ' '.$lastName;

echo $lastName;
echo '<br>';

$firstName[]= 'Jesus';
$firstName[]= 'Sara';
$firstName[]= 'Elizabeth';
$firstName[]= 'Kamala';
$firstName[]= 'Gretchen';
// The above is an index array

$firstName =['Jesus', 'Sara', 'Elizabeth', 'Kamala', 'Gretchen'];
$firstName = array('Jesus', 'Sara', 'Elizabeth', 'Kamala', 'Gretchen');

print_r($firstName);
echo '<br>';

echo $firstName[1];

$show = array
    ('Name' => 'The Crown',
     'Actor' =>'Dexter',
     'Genre' => 'Historical Fiction');

$showName = 'THE Crown';
$showActor = 'Clair Foy';
$showGenre = 'Historical Fiction';

echo '<p>My favorite show is '.$showName. ', starring '.$showActor.' which is a ' .$showGenre. '</p>';

//In an array, you have a key and a value. In an associative array you have a key aa  a value.


//echo '<2> ' .$firstName.' </h2>';
// up to this point, we used single quotes, and I LOVE single quotes
// What happens when we use double quotes???
// '.$variable.'


//echo "<h1>$firtNamee </h1">;

//up to this point, our data type has been a string


$begAlpha = 'abc';
$begAlph2 = 'def';

echo '<br';
echo $begAlpha . $begAlph2;

echo '<br';
$begAlpha = 'abc';
$begAlpha = 'def';


echo $begAlpha;
echo '<br';

$begAlpha = 'abc';
$begAlpha .= 'def';


echo $begAlpha;
echo '<br';

// Let's work with numbers!!!

$x = 5;
echo $x;
$x *= 5;
echo '<br>';
echo $x;
$y = 100;
$y *= .095;
echo '<br>';
$y_num = number_format($y,2);
echo '<br>';

echo 'My tax rate for 100 dollars is $'.$y_num.'';


$a = 20;
$a /= 2;
echo '<br>';
echo $a;







