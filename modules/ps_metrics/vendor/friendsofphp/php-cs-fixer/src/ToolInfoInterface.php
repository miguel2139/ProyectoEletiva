<?php

declare (strict_types=1);
/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace ps_metrics_module_v4_0_6\PhpCsFixer;

/**
 * @internal
 */
interface ToolInfoInterface
{
    public function getComposerInstallationDetails() : array;
    public function getComposerVersion() : string;
    public function getVersion() : string;
    public function isInstalledAsPhar() : bool;
    public function isInstalledByComposer() : bool;
    public function getPharDownloadUri(string $version) : string;
}
