<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);

require 'vendor/autoload.php';

$server = 'irc.freenode.com';
$port = 6667;
$nick = 'ftybot';
$channels = ['#goondev'];

$uri = sprintf("tcp://%s:%d", $server, $port);

$irc = new \Hoa\Irc\Client(new \Hoa\Socket\Client($uri));

$bot = new \IrcBot\Bot($irc, $nick, $channels);

$bot->addCommand(new \IrcBot\Commands\PowerCommand());
$bot->addCommand(new \IrcBot\Commands\AirStreamAsNumber());

$bot->connect();