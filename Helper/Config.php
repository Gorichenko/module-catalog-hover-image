<?php

namespace VOID\CatalogHoverImage\Helper;

/**
 * Class Config
 */
class Config extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * Get module settings
     *
     * @param string $key
     * @return mixed
     */
    public function getConfigModule($key)
    {
        return $this->scopeConfig
            ->getValue(
                'void_hover_image_catalog/general/' . $key,
                \Magento\Store\Model\ScopeInterface::SCOPE_STORE
            );
    }

    /**
     * @return bool
     */
    public function isEnabled()
    {
        if ($this->getConfigModule('enabled')
            && $this->isModuleOutputEnabled('VOID_CatalogHoverImage')
        ) {
            return true;
        }
        return false;
    }
}
