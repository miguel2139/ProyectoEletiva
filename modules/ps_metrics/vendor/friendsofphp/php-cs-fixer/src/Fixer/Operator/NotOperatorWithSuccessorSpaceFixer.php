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
namespace ps_metrics_module_v4_0_6\PhpCsFixer\Fixer\Operator;

use ps_metrics_module_v4_0_6\PhpCsFixer\AbstractFixer;
use ps_metrics_module_v4_0_6\PhpCsFixer\FixerDefinition\CodeSample;
use ps_metrics_module_v4_0_6\PhpCsFixer\FixerDefinition\FixerDefinition;
use ps_metrics_module_v4_0_6\PhpCsFixer\FixerDefinition\FixerDefinitionInterface;
use ps_metrics_module_v4_0_6\PhpCsFixer\Tokenizer\Tokens;
/**
 * @author Javier Spagnoletti <phansys@gmail.com>
 */
final class NotOperatorWithSuccessorSpaceFixer extends AbstractFixer
{
    /**
     * {@inheritdoc}
     */
    public function getDefinition() : FixerDefinitionInterface
    {
        return new FixerDefinition('Logical NOT operators (`!`) should have one trailing whitespace.', [new CodeSample('<?php

if (!$bar) {
    echo "Help!";
}
')]);
    }
    /**
     * {@inheritdoc}
     *
     * Must run after ModernizeStrposFixer, UnaryOperatorSpacesFixer.
     */
    public function getPriority() : int
    {
        return -10;
    }
    /**
     * {@inheritdoc}
     */
    public function isCandidate(Tokens $tokens) : bool
    {
        return $tokens->isTokenKindFound('!');
    }
    /**
     * {@inheritdoc}
     */
    protected function applyFix(\SplFileInfo $file, Tokens $tokens) : void
    {
        for ($index = $tokens->count() - 1; $index >= 0; --$index) {
            $token = $tokens[$index];
            if ($token->equals('!')) {
                $tokens->ensureWhitespaceAtIndex($index + 1, 0, ' ');
            }
        }
    }
}
