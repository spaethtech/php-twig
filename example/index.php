<?php
declare(strict_types=1);
require_once __DIR__ . "/bootstrap.php";

/**
 * Use an immediately invoked function here, to avoid global namespace pollution...
 *
 * @author Ryan Spaeth <rspaeth@mvqn.net>
 *
 */

echo $twig->render("test.html.twig", [ "type" => "integer", "value" => "123" ]);





