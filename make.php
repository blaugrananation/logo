<?php

require 'gd/Box.php';
require 'gd/Color.php';
require 'gd/HorizontalAlignment.php';
require 'gd/VerticalAlignment.php';
require 'gd/TextWrapping.php';

use GDText\Box;
use GDText\Color;

$img = imagecreatefromjpeg("template.jpg");

$text = isset($_GET['text']) ? substr($_GET['text'], 0, 7) : "";

$length = strlen($text);

$profile = [
	"font-size" => 470,
	"left" => 440,
	"top" => 385,
];

if ($length == 3) $profile['font-size'] = 430;

if ($length == 4) $profile['font-size'] = 350;

if ($length == 5) $profile['font-size'] = 280;

if ($length == 6) $profile['font-size'] = 230;

if ($length == 7) $profile['font-size'] = 200;


$textbox = new Box($img);
$textbox->setFontSize($profile['font-size']);
$textbox->setFontFace('font.ttf');
$textbox->setFontColor(new Color(0, 0, 0));
$textbox->setBox(
    $profile['left'],  // distance from left edge
    $profile['top'],  // distance from top edge
    660, // textbox width
    660  // textbox height
);

// now we have to align the text horizontally and vertically inside the textbox
$textbox->setTextAlign('center', 'center');
// it accepts multiline text
$textbox->draw($text);

header('Content-Type: image/jpeg');
header("Content-Disposition: attachment; filename='$text.png'");
imagejpeg($img);
