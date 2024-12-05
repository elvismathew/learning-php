<?php

$letters = array("abcd", "abc", "de", "hjj", "g", "wer");

$new_letters = array_map('strlen', $letters);

echo min($new_letters);
echo "</br>";
echo max($new_letters);