<?php
$lastvisited = date("D M j G:i: Y");
$expire = 60 * 60 * 24 * 60 + time();

setcookie('lastvisited', $lastvisited, $expire);
if (isset($_COOKIE['lastvisited'])) {
    $visited = $_COOKIE['lastvisited'];
    echo '<h1>lastvisit is</h1> ' . $visited;
} else {
    echo 'refresh the page';
}
?>