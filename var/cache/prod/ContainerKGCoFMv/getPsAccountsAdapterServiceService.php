<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\Module\PsEventbus\Service\PsAccountsAdapterService' shared service.

return $this->services['PrestaShop\\Module\\PsEventbus\\Service\\PsAccountsAdapterService'] = new \PrestaShop\Module\PsEventbus\Service\PsAccountsAdapterService(($this->services['ps_eventbus.helper.module'] ?? ($this->services['ps_eventbus.helper.module'] = new \PrestaShop\Module\PsEventbus\Helper\ModuleHelper())));
