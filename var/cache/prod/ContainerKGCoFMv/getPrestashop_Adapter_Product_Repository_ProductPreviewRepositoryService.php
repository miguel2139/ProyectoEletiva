<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.product.repository.product_preview_repository' shared service.

return $this->services['prestashop.adapter.product.repository.product_preview_repository'] = new \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductPreviewRepository(($this->services['prestashop.adapter.product.repository.product_repository'] ?? $this->load('getPrestashop_Adapter_Product_Repository_ProductRepositoryService.php')), ($this->services['prestashop.adapter.product.image.repository.product_image_repository'] ?? $this->load('getPrestashop_Adapter_Product_Image_Repository_ProductImageRepositoryService.php')));
