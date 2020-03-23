<?php

/**
 * Cookie Consent Module
 *
 * @author    Peter McWilliams <pmcwilliams@augustash.com>
 * @copyright Copyright (c) 2020 August Ash (https://www.augustash.com)
 */

namespace Augustash\CookieConsent\Block;

use Augustash\CookieConsent\Api\ConfigInterface;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

/**
 * Banner block class.
 */
class Banner extends Template
{
    /**
     * Banner template.
     *
     * @var string
     */
    protected $_template = 'Augustash_CookieConsent::banner.phtml';

    /**
     * Current store code.
     *
     * @var string
     */
    protected $storeCode;

    /**
     * @var \Augustash\CookieConsent\Api\ConfigInterface
     */
    protected $config;

    /**
     * Constructor.
     *
     * Initialize class dependencies.
     *
     * @param \Magento\Backend\Block\Template\Context $context
     * @param \Augustash\CookieConsent\Api\ConfigInterface $config
     * @param array $data
     */
    public function __construct(
        Context $context,
        ConfigInterface $config,
        array $data = []
    ) {
        $this->config = $config;
        $this->storeCode = $data['store_code'] ?? null;
        parent::__construct($context, $data);
    }

    /**
     * Get module's configuration.
     *
     * @return \Augustash\CookieConsent\Api\ConfigInterface
     */
    public function getConfig(): ConfigInterface
    {
        return $this->config;
    }

    /**
     * Returns the configured enabled value.
     *
     * @return bool
     */
    public function isEnabled(): bool
    {
        return $this->getConfig()
            ->isEnabled('store', $this->storeCode);
    }

    /**
     * Returns the configured cookie domain value.
     *
     * @return string
     */
    public function getDomain(): string
    {
        return $this->getConfig()
            ->getDomain('store', $this->storeCode);
    }

    /**
     * Returns the configured message value.
     *
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->getConfig()
            ->getMessage('store', $this->storeCode);
    }

    /**
     * Returns the configured button text value.
     *
     * @return string|null
     */
    public function getButtonText(): ?string
    {
        return $this->getConfig()
            ->getButtonText('store', $this->storeCode);
    }

    /**
     * Returns the configured banner color value.
     *
     * @return string|null
     */
    public function getBannerColor(): ?string
    {
        return $this->getConfig()
            ->getBannerColor('store', $this->storeCode);
    }

    /**
     * Returns the configured banner text color value.
     *
     * @return string|null
     */
    public function getBannerTextColor(): ?string
    {
        return $this->getConfig()
            ->getBannerTextColor('store', $this->storeCode);
    }

    /**
     * Returns the configured button color value.
     *
     * @return string|null
     */
    public function getButtonColor(): ?string
    {
        return $this->getConfig()
            ->getButtonColor('store', $this->storeCode);
    }

    /**
     * Returns the configured button text color value.
     *
     * @return string|null
     */
    public function getButtonTextColor(): ?string
    {
        return $this->getConfig()
            ->getButtonTextColor('store', $this->storeCode);
    }
}
