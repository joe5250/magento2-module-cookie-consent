<?php

/**
 * Cookie Consent Module
 *
 * @author    Peter McWilliams <pmcwilliams@augustash.com>
 * @copyright Copyright (c) 2020 August Ash (https://www.augustash.com)
 */

namespace Augustash\CookieConsent\Api;

use Magento\Store\Model\ScopeInterface;

/**
 * Service interface responsible for exposing configuration options.
 * @api
 */
interface ConfigInterface
{
    /**
     * Configuration constants.
     */
    const XML_PATH_COOKIE_CONSENT_ENABLED = 'cookie_consent/general/enabled';
    const XML_PATH_COOKIE_CONSENT_MESSAGE = 'cookie_consent/general/message';
    const XML_PATH_COOKIE_CONSENT_BUTTON_TEXT = 'cookie_consent/general/button_text';
    const XML_PATH_COOKIE_CONSENT_COOKIE_DOMAIN = 'cookie_consent/cookie/domain';
    const XML_PATH_COOKIE_CONSENT_BANNER_COLOR = 'cookie_consent/theme/banner_color';
    const XML_PATH_COOKIE_CONSENT_BANNER_TEXT_COLOR = 'cookie_consent/theme/banner_text_color';
    const XML_PATH_COOKIE_CONSENT_BUTTON_COLOR = 'cookie_consent/theme/button_color';
    const XML_PATH_COOKIE_CONSENT_BUTTON_TEXT_COLOR = 'cookie_consent/theme/button_text_color';

    /**
     * Retrieves the module's config value for specified field.
     *
     * @param string $field
     * @param string $scope
     * @param null|string|\Magento\Store\Model\Store $scopeCode
     * @return mixed
     */
    public function getConfigValue(
        $field,
        $scope = ScopeInterface::SCOPE_STORES,
        $scopeCode = null
    );

    /**
     * Retrieves the module's enabled status.
     *
     * @param int|string|\Magento\Store\Model\Store $store
     * @return bool
     */
    public function isEnabled(
        $scope = ScopeInterface::SCOPE_STORES,
        $scopeCode = null
    ): bool;

    /**
     * Returns the configured cookie domain value.
     *
     * @param string $scope
     * @param null|string|\Magento\Store\Model\Store $scopeCode
     * @return string
     */
    public function getDomain(
        $scope = ScopeInterface::SCOPE_STORES,
        $scopeCode = null
    ): string;

    /**
     * Returns the configured message value.
     *
     * @param string $scope
     * @param null|string|\Magento\Store\Model\Store $scopeCode
     * @return string|null
     */
    public function getMessage(
        $scope = ScopeInterface::SCOPE_STORES,
        $scopeCode = null
    ): ?string;

    /**
     * Returns the configured button text value.
     *
     * @param string $scope
     * @param null|string|\Magento\Store\Model\Store $scopeCode
     * @return string|null
     */
    public function getButtonText(
        $scope = ScopeInterface::SCOPE_STORES,
        $scopeCode = null
    ): ?string;

    /**
     * Returns the configured banner color value.
     *
     * @param string $scope
     * @param null|string|\Magento\Store\Model\Store $scopeCode
     * @return string|null
     */
    public function getBannerColor(
        $scope = ScopeInterface::SCOPE_STORES,
        $scopeCode = null
    ): ?string;

    /**
     * Returns the configured banner text color value.
     *
     * @param string $scope
     * @param null|string|\Magento\Store\Model\Store $scopeCode
     * @return string|null
     */
    public function getBannerTextColor(
        $scope = ScopeInterface::SCOPE_STORES,
        $scopeCode = null
    ): ?string;

    /**
     * Returns the configured button color value.
     *
     * @param string $scope
     * @param null|string|\Magento\Store\Model\Store $scopeCode
     * @return string|null
     */
    public function getButtonColor(
        $scope = ScopeInterface::SCOPE_STORES,
        $scopeCode = null
    ): ?string;

    /**
     * Returns the configured button text color value.
     *
     * @param string $scope
     * @param null|string|\Magento\Store\Model\Store $scopeCode
     * @return string|null
     */
    public function getButtonTextColor(
        $scope = ScopeInterface::SCOPE_STORES,
        $scopeCode = null
    ): ?string;
}
