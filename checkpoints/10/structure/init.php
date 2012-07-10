<?php
function printRefreshTimestamp() {
    echo 'Page last retrieved ' . date('H:ia M jS, Y');
}

$title = "The Doomsday Weekly";
$tagline = "The Last News Source You'll Ever Need";
$checklist_items = array(
    array(
        'source' => 'Stephen',
        'tip' => 'Dig a bomb shelter',
    ),
    array(
        'source' => 'Joe',
        'tip' => 'Stockpile guns for inevitable zombie invasion',
    ),
    array(
        'source' => 'Abby',
        'tip' => 'Fashion tinfoil hats to prevent alien mind control',
    ),
    array(
        'source' => 'Mary',
        'tip' => 'Obtain SPF 1,000,000 sunscreen for stronger solar rays, due to meteor impact pushing Earth closer to Sun',
    )
);

$user = 'Visitor';
if (isset($_GET['user'])) {
    $user = $_GET['user'];
}