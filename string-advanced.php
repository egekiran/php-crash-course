<?php

// This script demonstrates various advanced string operations in PHP.
$mb_string = "世界!";
var_dump(mb_strlen($mb_string));

$url = "https://example.com/path?key=value&special=@#$%";
var_dump(urlencode($url));
var_dump(urldecode(urlencode($url)));

$html = '<p>This is a <strong>test</strong> string with <a href="#">links</a>.</p>';
var_dump(htmlentities($html));

$encoded = base64_encode("Hello World!");

var_dump(base64_decode($encoded));