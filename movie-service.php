<?php
session_start();
$movies = [
    ['Title'=> 'Superman (1941)', 'Movieposter' => './images/superman.jpg', 'Summary' => "Is it a bird? Is it a plane? No its Superman! 
Watch the incredible man, faster than a speeding bullet, more powerful than a locomotion in his most challenging situations to date. We have superman playing making his first animated appearance", 'Rating' => 'PG', 
    'Genre' => 'Animated, Children', 'Timigs' => 'Monday 1:00 pm, Sunday 12:00 pm', 'Type' => 'CH'],
    
   ['Title'=> 'Phantom of the Opera (1925)', 'Movieposter' => './images/phantom_1925.jpg', 'Summary' => "The classic silent horror romance brought to life, "
        . "one murdering at a time. The grand Paris Opera House is so terribly haunted,"
        . "<br>but by who and what? There will be murder, there will be mayhem, all in the name of true love.", 'Rating' => 'M', 
    'Genre' => 'Horror, Romance', 'Timigs' => 'Monday 9:00 pm, Wednesday 1:00 pm', 'Type' => 'RC'],
    
    ['Title'=> 'Sherlock Holmes and The Secret Weapon (1943)', 'Movieposter' => './images/sherlock.png', 'Summary' => "Do you have an unquenchable taste for mystery?, "
        . "Do you have an unquenchable taste for mystery?,"
        . "<br>Sherlock Holmes certainly does and Dr. Watson certainly do, but can they solve the Nazi Mystery? Set against the backdrop of World War 2, watch as your two favourite crime solvers face their biggest challenge yet!", 'Rating' => 'M', 
    'Genre' => 'Horror, Romance', 'Timigs' => 'Friday 1:00 pm, Sunday 6:00 pm', 'Type' => 'AC'],
   
    ['Title'=> 'Hemp For Victory (1942)', 'Movieposter' => './images/hemp_for_victory_1942.png', 'Summary' => "Do you love seeing US policy turn and back-flip as much as we do?"
        . " If this is the case prepare yourself for this hallmark film produced by the United State Department of Agriculture advocating for the growth of as many hemp based products as possible."
        . "<br>Learn about different uses for hemp and gain an insight into how US policy can shift depending on the backdrop of the times through this historical classic. ", 'Rating' => 'PG', 
    'Genre' => 'Education, Documentary', 'Timigs' => ' Monday 6:00 pm, Sunday 3:00 pm', 'Type' => 'AF'],
];

echo json_encode($movies);
?>