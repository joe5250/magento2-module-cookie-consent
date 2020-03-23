<?php

/**
 * Cookie Consent Module
 *
 * @author    Peter McWilliams <pmcwilliams@augustash.com>
 * @copyright Copyright (c) 2020 August Ash (https://www.augustash.com)
 */

namespace Augustash\CookieConsent\Model;

use Augustash\CookieConsent\Api\ConfigInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

/**
 * Configuration class.
 */
class Config implements ConfigInterface
{
    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $scopeConfig;

    /**
     * Constructor.
     *
     * Initialize class dependencies.
     *
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * {@inheritdoc}
     */
    public function getConfigValue(
        $field,
        $scope = ScopeInterface::SCOPE_STORES,
        $scopeCode = null
    ) {
        return $this->scopeConfig->getValue(
            $field,
            $scope,
            $scopeCode
        );
    }

    /**
     * {@inheritdoc}
     */
    public function isEnabled(
        $scope = ScopeInterface::SCOPE_STORES,
        $scopeCode = null
    ): bool {
        return (bool) $this->scopeConfig->getValue(
            self::XML_PATH_COOKIE_CONSENT_ENABLED,
            $scope,
            $scopeCode
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getDomain(
        $scope = ScopeInterface::SCOPE_STORES,
        $scopeCode = null
    ): string {
        $domain = $this->scopeConfig->getValue(
            self::XML_PATH_COOKIE_CONSENT_COOKIE_DOMAIN,
            $scope,
            $scopeCode
        );

        return $domain ?? '';
    }

    /**
     * {@inheritdoc}
     */
    public function getMessage(
        $scope = ScopeInterface::SCOPE_STORES,
        $scopeCode = null
    ): ?string {
        return $this->scopeConfig->getValue(
            self::XML_PATH_COOKIE_CONSENT_MESSAGE,
            $scope,
            $scopeCode
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getButtonText(
        $scope = ScopeInterface::SCOPE_STORES,
        $scopeCode = null
    ): ?string {
        return $this->scopeConfig->getValue(
            self::XML_PATH_COOKIE_CONSENT_BUTTON_TEXT,
            $scope,
            $scopeCode
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getBannerColor(
        $scope = ScopeInterface::SCOPE_STORES,
        $scopeCode = null
    ): ?string {
        return $this->scopeConfig->getValue(
            self::XML_PATH_COOKIE_CONSENT_BANNER_COLOR,
            $scope,
            $scopeCode
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getBannerTextColor(
        $scope = ScopeInterface::SCOPE_STORES,
        $scopeCode = null
    ): ?string {
        return $this->scopeConfig->getValue(
            self::XML_PATH_COOKIE_CONSENT_BANNER_TEXT_COLOR,
            $scope,
            $scopeCode
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getButtonColor(
        $scope = ScopeInterface::SCOPE_STORES,
        $scopeCode = null
    ): ?string {
        return $this->scopeConfig->getValue(
            self::XML_PATH_COOKIE_CONSENT_BUTTON_COLOR,
            $scope,
            $scopeCode
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getButtonTextColor(
        $scope = ScopeInterface::SCOPE_STORES,
        $scopeCode = null
    ): ?string {
        return $this->scopeConfig->getValue(
            self::XML_PATH_COOKIE_CONSENT_BUTTON_TEXT_COLOR,
            $scope,
            $scopeCode
        );
    }
}
