<?php
declare(strict_types=1);
namespace rspaeth\Twig\Extensions;

use rspaeth\Twig\TokenParsers\SwitchTokenParser;
use Twig\Extension\AbstractExtension;

/**
 * Class SwitchExtension
 *
 * @package rspaeth\Twig
 * @author Ryan Spaeth <rspaeth@mvqn.net>
 * @final
 */
final class SwitchExtension extends AbstractExtension
{
    /**
     * @return string The extension's name.
     */
    public function getName(): string
    {
        return "switch";
    }

    /**
     * @inheritDoc
     */
    public function getTokenParsers(): array
    {
        return [ new SwitchTokenParser() ];
    }

}
