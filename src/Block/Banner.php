<?php

/**
 * Cookie Consent Module
 *
 * @author    Peter McWilliams <pmcwilliams@augustash.com>
 * @copyright Copyright (c) 2020 August Ash (https://www.augustash.com)
 */

namespace Augustash\CookieConsent\Block;

use Augustash\CookieConsent\Api\ConfigInterface;
use Magento\Cms\Helper\Page as PageHelper;
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
     * Cms page
     *
     * @var \Magento\Cms\Helper\Page
     */
    protected $cmsPageHelper;

    /**
     * Constructor.
     *
     * Initialize class dependencies.
     *
     * @param \Magento\Backend\Block\Template\Context $context
     * @param \Augustash\CookieConsent\Api\ConfigInterface $config
     * @param \Magento\Cms\Helper\Page $cmsPageHelper
     * @param array $data
     */
    public function __construct(
        Context $context,
        ConfigInterface $config,
        PageHelper $cmsPageHelper,
        array $data = []
    ) {
        $this->config = $config;
        $this->cmsPageHelper = $cmsPageHelper;
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
     * Returns the configured use transition value.
     *
     * @return bool
     */
    public function hasTransition(): bool
    {
        return $this->getConfig()
            ->hasTransition('store', $this->storeCode);
    }

    /**
     * Returns the configured position value.
     *
     * @return string
     */
    public function getPosition(): string
    {
        $position = $this->getConfig()->getPosition('store', $this->storeCode);

        return ($position != 'top-static') ? $position : 'top';
    }

    /**
     * Returns the configured layout value.
     *
     * @return string
     */
    public function getLayout(): string
    {
        return $this->getConfig()
            ->getLayout('store', $this->storeCode);
    }

    /**
     * Returns the configured compliance value.
     *
     * @return string
     */
    public function getComplianceType(): string
    {
        return $this->getConfig()
            ->getComplianceType('store', $this->storeCode);
    }

    /**
     * Returns the static value.
     *
     * @return string
     */
    public function isStatic(): string
    {
        $position = $this->getConfig()->getPosition('store', $this->storeCode);

        return ($position != 'top-static') ? 'false' : 'true';
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
     * Returns the configured show link value.
     *
     * @return string
     */
    public function showLink(): string
    {
        return ($this->getConfig()->showLink('store', $this->storeCode))
            ? 'true' : 'false';
    }

    /**
     * Returns the configured link text value.
     *
     * @return string|null
     */
    public function getLinkText(): ?string
    {
        return $this->getConfig()
            ->getLinkText('store', $this->storeCode);
    }

    /**
     * Returns the configured link text value.
     *
     * @return string|null
     */
    public function getCmsUrl(): ?string
    {
        $pageId = $this->getConfig()->getCmsPage('store', $this->storeCode);
        if (!$pageId) {
            return null;
        }

        return $this->cmsPageHelper->getPageUrl($pageId);
    }

    /**
     * Returns the configured cookie name value.
     *
     * @return string
     */
    public function getCookieName(): string
    {
        return $this->getConfig()
            ->getCookieName('store', $this->storeCode);
    }

    /**
     * Returns the configured cookie path value.
     *
     * @return string
     */
    public function getCookiePath(): string
    {
        return $this->getConfig()
            ->getCookiePath('store', $this->storeCode);
    }

    /**
     * Returns the configured cookie domain value.
     *
     * @return string
     */
    public function getCookieDomain(): string
    {
        return $this->getConfig()
            ->getCookieDomain('store', $this->storeCode);
    }

    /**
     * Returns the configured cookie expiry in days value.
     *
     * @return int
     */
    public function getCookieExpiry(): int
    {
        return $this->getConfig()
            ->getCookieExpiry('store', $this->storeCode);
    }

    /**
     * Returns the configured cookie secure value.
     *
     * @return string
     */
    public function isCookieSecure(): string
    {
        return $this->getConfig()->isCookieSecure('store', $this->storeCode)
            ? 'true' : 'false';
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
