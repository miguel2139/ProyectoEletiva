<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\Module\PrestashopCheckout\Logger\LoggerHandlerFactory' shared service.

return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerHandlerFactory'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerHandlerFactory(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerDirectory'] ?? ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerDirectory'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerDirectory('8.0.1', \dirname(__DIR__, 4))))->getPath(), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerFilename'] ?? $this->load('getLoggerFilenameService.php'))->get(), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerConfiguration'] ?? $this->load('getLoggerConfigurationService.php'))->getMaxFiles(), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerConfiguration'] ?? $this->load('getLoggerConfigurationService.php'))->getLevel());
