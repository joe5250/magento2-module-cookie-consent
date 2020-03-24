<?php

/**
 * Cookie Consent Module
 *
 * @author    Peter McWilliams <pmcwilliams@augustash.com>
 * @copyright Copyright (c) 2020 August Ash (https://www.augustash.com)
 */

namespace Augustash\CookieConsent\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

/**
 * Banner compliance class.
 * @api
 */
class Compliance implements OptionSourceInterface
{
    /**
     * Options getter.
     *
     * @return array
     */
    public function toOptionArray(): array
    {
        return [
            [
                'value' => 'info',
                'label' => __('Inform users')
            ],
            [
                'value' => 'opt-in',
                'label' => __('Ask users to opt-in')
            ],
            [
                'value' => 'opt-out',
                'label' => __('Let users opt-out')
            ],
        ];
    }

    /**
     * Get options in "key-value" format.
     *
     * @return array
     */
    public function toArray(): array
    {
        return [
            'info' => __('Inform users'),
            'opt-in' => __('Ask users to opt-in'),
            'opt-out' => __('Let users opt-out'),
        ];
    }
}
