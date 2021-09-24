<?php 
$users = new users();
$usersLast = $users->getLastUsers();

$events = new events();
$eventsLast = $events->getLast5Events();

$comments = new comments();
$commentsLast = $comments->getLastComments();