<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Framework\Locale;

/**
 * Provides access to currency config information
 *
 * @api
 */
interface CurrencyInterface
{
    /**
     * Retrieve currency code
     *
     * @return string
     */
    public function getDefaultCurrency();

    /**
     * Create \Magento\Framework\Currency object for current locale
     *
     * @param   string $currency
     * @return  \Magento\Framework\Currency
     */
    public function getCurrency($currency);
}
