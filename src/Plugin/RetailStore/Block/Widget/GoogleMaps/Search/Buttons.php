<?php

declare(strict_types=1);

namespace Infrangible\RetailStoreHyva\Plugin\RetailStore\Block\Widget\GoogleMaps\Search;

/**
 * @author      Andreas Knollmann
 * @copyright   2014-2024 Softwareentwicklung Andreas Knollmann
 * @license     http://www.opensource.org/licenses/mit-license.php MIT
 */
class Buttons
{
    /** @noinspection PhpUnusedParameterInspection */
    public function aroundGetTemplateName(
        \Infrangible\RetailStore\Block\Widget\GoogleMaps\Search\Buttons $subject,
        callable $proceed): string
    {
        return 'Infrangible_RetailStoreHyva::search/buttons.phtml';
    }
}
