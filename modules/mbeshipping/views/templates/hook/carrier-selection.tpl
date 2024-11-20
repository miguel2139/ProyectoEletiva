{**
* 2017-2022 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
* @author    MBE Worldwide
* @copyright 2017-2024 MBE Worldwide
* @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
* International Registered Trademark & Property of MBE Worldwide
*}

<div
  data-carrier-id="{$carrier->id|escape:'htmlall':'UTF-8'}"
  class="gelproximity-app gelproximity-app--{$prestashop_version|escape:'htmlall':'UTF-8'} row checkout-plugin-{$checkoutPlugin}"
>
  {if $is_sandbox_mode}
    <div class="gelproximity-app-sandbox-mode-alert alert alert-warning">{l s='Sandbox mode is active' mod='mbeshipping'}</div>
  {/if}
  <div class="col-sm-12 gelproximity-app__selection">
    <div class="gelproximity-app__selection-trigger">
      <button
        type="button"
        id="gelproximity-app-pick-point-select-button"
        class="gelproximity-app__pick-button btn btn-primary">
        <div>
          <span class="gelproximity-app__pick-button-text">{l s='Select the pick-up point' mod='mbeshipping'}</span>
          {if $prestashop_version == '17'}
          <i class="material-icons" aria-hidden="true">chevron_right</i>
          {else}
          <i class="icon-chevron-right right"></i>
          {/if}
        </div>
      </button>
    </div>
    <div id="gelproximity-app__selection-button-sdk-wrapper"></div>
    <div class="gelproximity-app__selection-details"></div>
  </div>
</div>