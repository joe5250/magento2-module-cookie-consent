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
 * Banner position class.
 * @api
 */
class Position implements OptionSourceInterface
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
                'value' => 'bottom',
                'label' => __('Banner Bottom')
            ],
            [
                'value' => 'top',
                'label' => __('Banner Top')
            ],
            [
                'value' => 'top-static',
                'label' => __('Banner Top (push-down)')
            ],
            [
                'value' => 'bottom-left',
                'label' => __('Floating Left')
            ],
            [
                'value' => 'bottom-right',
                'label' => __('Floating Right')
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
            'bottom' => __('Banner Bottom'),
            'top' => __('Banner Top'),
            'top-static' => __('Banner Top (push-down'),
            'bottom-left' => __('Floating Left'),
            'bottom-right' => __('Floating Right'),
        ];
    }
}
