<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.sell.product.footer_type' shared service.

return $this->services['form.type.sell.product.footer_type'] = new \PrestaShopBundle\Form\Admin\Sell\Product\FooterType(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getLanguages(), ($this->services['prestashop.adapter.shop.url.product_provider'] ?? $this->load('getPrestashop_Adapter_Shop_Url_ProductProviderService.php')), ($this->services['prestashop.adapter.shop.url.product_preview_provider'] ?? $this->load('getPrestashop_Adapter_Shop_Url_ProductPreviewProviderService.php')), ($this->services['prestashop.router'] ?? $this->load('getPrestashop_RouterService.php')));
