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
namespace ps_metrics_module_v4_0_6\PhpCsFixer\Fixer\StringNotation;

use ps_metrics_module_v4_0_6\PhpCsFixer\AbstractFixer;
use ps_metrics_module_v4_0_6\PhpCsFixer\FixerDefinition\CodeSample;
use ps_metrics_module_v4_0_6\PhpCsFixer\FixerDefinition\FixerDefinition;
use ps_metrics_module_v4_0_6\PhpCsFixer\FixerDefinition\FixerDefinitionInterface;
use ps_metrics_module_v4_0_6\PhpCsFixer\Preg;
use ps_metrics_module_v4_0_6\PhpCsFixer\Tokenizer\Token;
use ps_metrics_module_v4_0_6\PhpCsFixer\Tokenizer\Tokens;
/**
 * @author Gregor Harlan
 */
final class NoTrailingWhitespaceInStringFixer extends AbstractFixer
{
    /**
     * {@inheritdoc}
     */
    public function isCandidate(Tokens $tokens) : bool
    {
        return $tokens->isAnyTokenKindsFound([\T_CONSTANT_ENCAPSED_STRING, \T_ENCAPSED_AND_WHITESPACE, \T_INLINE_HTML]);
    }
    /**
     * {@inheritdoc}
     */
    public function isRisky() : bool
    {
        return \true;
    }
    /**
     * {@inheritdoc}
     */
    public function getDefinition() : FixerDefinitionInterface
    {
        return new FixerDefinition('There must be no trailing whitespace in strings.', [new CodeSample("<?php \$a = '  \n    foo \n';\n")], null, 'Changing the whitespaces in strings might affect string comparisons and outputs.');
    }
    /**
     * {@inheritdoc}
     */
    protected function applyFix(\SplFileInfo $file, Tokens $tokens) : void
    {
        for ($index = $tokens->count() - 1, $last = \true; $index >= 0; --$index, $last = \false) {
            /** @var Token $token */
            $token = $tokens[$index];
            if (!$token->isGivenKind([\T_CONSTANT_ENCAPSED_STRING, \T_ENCAPSED_AND_WHITESPACE, \T_INLINE_HTML])) {
                continue;
            }
            $isInlineHtml = $token->isGivenKind(\T_INLINE_HTML);
            $regex = $isInlineHtml && $last ? '/\\h+(?=\\R|$)/' : '/\\h+(?=\\R)/';
            $content = Preg::replace($regex, '', $token->getContent());
            if ($token->getContent() === $content) {
                continue;
            }
            if (!$isInlineHtml || 0 === $index) {
                $this->updateContent($tokens, $index, $content);
                continue;
            }
            $prev = $index - 1;
            if ($tokens[$prev]->equals([\T_CLOSE_TAG, '?>']) && Preg::match('/^\\R/', $content, $match)) {
                $tokens[$prev] = new Token([\T_CLOSE_TAG, $tokens[$prev]->getContent() . $match[0]]);
                $content = \substr($content, \strlen($match[0]));
                $content = \false === $content ? '' : $content;
                // @phpstan-ignore-line due to https://github.com/phpstan/phpstan/issues/1215 , awaiting PHP8 as min requirement of Fixer
            }
            $this->updateContent($tokens, $index, $content);
        }
    }
    private function updateContent(Tokens $tokens, int $index, string $content) : void
    {
        if ('' === $content) {
            $tokens->clearAt($index);
            return;
        }
        $tokens[$index] = new Token([$tokens[$index]->getId(), $content]);
    }
}
