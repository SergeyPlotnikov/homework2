<?php
/**
 * Created by PhpStorm.
 * User: Serhii
 * Date: 11.05.2018
 * Time: 21:45
 */
include_once '../../vendor/autoload.php';
$emojiGenerator = new \Cryptocurrency\Task2\EmojiGenerator();
foreach ($emojiGenerator->generate() as $emoji) {
    echo $emoji . '<br>';
}