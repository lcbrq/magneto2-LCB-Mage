<?php
/**
 * Magento 1 Mage class replacement
 *
 * @category   LCB
 * @package    LCB_Mage
 * @author     Silpion Tomasz Gregorczyk <tom@leftcurlybracket.com>
 */

namespace LCB\Mage\Framework;

use Magento\Store\Model\StoreManagerInterface;
use LCB\Mage\Model\Core\Locale as Locale;

class App
{
    /**
     * @return \Magento\Store\Model\Store
     */
    public function getStore()
    {
        return \Magento\Framework\App\ObjectManager::getInstance()->create(StoreManagerInterface::class)->getStore();
    }
    
    /**
     * @return \Magento\Store\Model\Website
     */
    public function getWebsite()
    {
        return \Magento\Framework\App\ObjectManager::getInstance()->create(StoreManagerInterface::class)->getWebsite();
    }

    /**
     * @return \Magento\Framework\Locale\Resolver
     */
    public function getLocale()
    {
        return \Magento\Framework\App\ObjectManager::getInstance()->create(Locale::class);
    }

}
