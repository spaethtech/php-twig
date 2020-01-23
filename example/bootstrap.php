<?php
declare(strict_types=1);
require_once __DIR__ . "/../vendor/autoload.php";

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$twig = new Environment(
    new FilesystemLoader([ realpath(__DIR__."/views/") ]),
    [ "cache" => realpath(__DIR__."/views/.cache/") ]
);

$twig->addGlobal("home", "/index.php");
$twig->addExtension(new \MVQN\Twig\Extensions\SwitchExtension());

