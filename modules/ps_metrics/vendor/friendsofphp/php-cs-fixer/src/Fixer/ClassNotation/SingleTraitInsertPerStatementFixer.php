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
namespace ps_metrics_module_v4_0_6\PhpCsFixer\Fixer\ClassNotation;

use ps_metrics_module_v4_0_6\PhpCsFixer\AbstractFixer;
use ps_metrics_module_v4_0_6\PhpCsFixer\FixerDefinition\CodeSample;
use ps_metrics_module_v4_0_6\PhpCsFixer\FixerDefinition\FixerDefinition;
use ps_metrics_module_v4_0_6\PhpCsFixer\FixerDefinition\FixerDefinitionInterface;
use ps_metrics_module_v4_0_6\PhpCsFixer\Preg;
use ps_metrics_module_v4_0_6\PhpCsFixer\Tokenizer\CT;
use ps_metrics_module_v4_0_6\PhpCsFixer\Tokenizer\Token;
use ps_metrics_module_v4_0_6\PhpCsFixer\Tokenizer\Tokens;
final class SingleTraitInsertPerStatementFixer extends AbstractFixer
{
    public function getDefinition() : FixerDefinitionInterface
    {
        return new FixerDefinition('Each trait `use` must be done as single statement.', [new CodeSample('<?php
final class Example
{
    use Foo, Bar;
}
')]);
    }
    /**
     * {@inheritdoc}
     *
     * Must run before BracesFixer, SpaceAfterSemicolonFixer.
     */
    public function getPriority() : int
    {
        return 36;
    }
    public function isCandidate(Tokens $tokens) : bool
    {
        return $tokens->isTokenKindFound(CT::T_USE_TRAIT);
    }
    protected function applyFix(\SplFileInfo $file, Tokens $tokens) : void
    {
        for ($index = \count($tokens) - 1; 1 < $index; --$index) {
            if ($tokens[$index]->isGivenKind(CT::T_USE_TRAIT)) {
                $candidates = $this->getCandidates($tokens, $index);
                if (\count($candidates) > 0) {
                    $this->fixTraitUse($tokens, $index, $candidates);
                }
            }
        }
    }
    /**
     * @param int[] $candidates ',' indexes to fix
     */
    private function fixTraitUse(Tokens $tokens, int $useTraitIndex, array $candidates) : void
    {
        foreach ($candidates as $commaIndex) {
            $inserts = [new Token([CT::T_USE_TRAIT, 'use']), new Token([\T_WHITESPACE, ' '])];
            $nextImportStartIndex = $tokens->getNextMeaningfulToken($commaIndex);
            if ($tokens[$nextImportStartIndex - 1]->isWhitespace()) {
                if (1 === Preg::match('/\\R/', $tokens[$nextImportStartIndex - 1]->getContent())) {
                    \array_unshift($inserts, clone $tokens[$useTraitIndex - 1]);
                }
                $tokens->clearAt($nextImportStartIndex - 1);
            }
            $tokens[$commaIndex] = new Token(';');
            $tokens->insertAt($nextImportStartIndex, $inserts);
        }
    }
    /**
     * @return int[]
     */
    private function getCandidates(Tokens $tokens, int $index) : array
    {
        $indexes = [];
        $index = $tokens->getNextTokenOfKind($index, [',', ';', '{']);
        while (!$tokens[$index]->equals(';')) {
            if ($tokens[$index]->equals('{')) {
                return [];
                // do not fix use cases with grouping
            }
            $indexes[] = $index;
            $index = $tokens->getNextTokenOfKind($index, [',', ';', '{']);
        }
        return \array_reverse($indexes);
    }
}
