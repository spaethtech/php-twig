<?php
declare(strict_types=1);
namespace UCRM\Twig\Extensions;

use MVQN\Twig\TokenParsers\SwitchTokenParser;

/**
 * Class Extension
 *
 * @package MVQN\Twig
 * @author Ryan Spaeth <rspaeth@mvqn.net>
 * @final
 */
final class SwitchExtension extends \Twig_Extension implements \Twig_Extension_GlobalsInterface
{
    public function getName(): string
    {
        return "switch";
    }

    public function getTokenParsers(): array
    {
        return [
            new SwitchTokenParser(),
        ];
    }

    public function getFilters(): array
    {

        return [
            //new \Twig_SimpleFilter('without', [$this, 'withoutFilter']),
        ];
    }

    public function getFunctions(): array
    {
        return [
            //new \Twig_SimpleFunction('getFootHtml', [$this, 'getFootHtml']),
        ];
    }

    public function getGlobals(): array
    {
        return [
            //'now' => new \DateTime(),
        ];
    }


}