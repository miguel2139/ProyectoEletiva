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
namespace ps_metrics_module_v4_0_6\PhpCsFixer\Fixer\NamespaceNotation;

use ps_metrics_module_v4_0_6\PhpCsFixer\AbstractFixer;
use ps_metrics_module_v4_0_6\PhpCsFixer\Fixer\WhitespacesAwareFixerInterface;
use ps_metrics_module_v4_0_6\PhpCsFixer\FixerDefinition\CodeSample;
use ps_metrics_module_v4_0_6\PhpCsFixer\FixerDefinition\FixerDefinition;
use ps_metrics_module_v4_0_6\PhpCsFixer\FixerDefinition\FixerDefinitionInterface;
use ps_metrics_module_v4_0_6\PhpCsFixer\Tokenizer\Token;
use ps_metrics_module_v4_0_6\PhpCsFixer\Tokenizer\Tokens;
/**
 * @author Bram Gotink <bram@gotink.me>
 * @author Dariusz Rumiński <dariusz.ruminski@gmail.com>
 */
final class NoLeadingNamespaceWhitespaceFixer extends AbstractFixer implements WhitespacesAwareFixerInterface
{
    /**
     * {@inheritdoc}
     */
    public function isCandidate(Tokens $tokens) : bool
    {
        return $tokens->isTokenKindFound(\T_NAMESPACE);
    }
    /**
     * {@inheritdoc}
     */
    public function getDefinition() : FixerDefinitionInterface
    {
        return new FixerDefinition('The namespace declaration line shouldn\'t contain leading whitespace.', [new CodeSample('<?php
 namespace Test8a;
    namespace Test8b;
')]);
    }
    /**
     * {@inheritdoc}
     */
    protected function applyFix(\SplFileInfo $file, Tokens $tokens) : void
    {
        for ($index = \count($tokens) - 1; 0 <= $index; --$index) {
            $token = $tokens[$index];
            if (!$token->isGivenKind(\T_NAMESPACE)) {
                continue;
            }
            $beforeNamespaceIndex = $index - 1;
            $beforeNamespace = $tokens[$beforeNamespaceIndex];
            if (!$beforeNamespace->isWhitespace()) {
                if (!self::endsWithWhitespace($beforeNamespace->getContent())) {
                    $tokens->insertAt($index, new Token([\T_WHITESPACE, $this->whitespacesConfig->getLineEnding()]));
                }
                continue;
            }
            $lastNewline = \strrpos($beforeNamespace->getContent(), "\n");
            if (\false === $lastNewline) {
                $beforeBeforeNamespace = $tokens[$index - 2];
                if (self::endsWithWhitespace($beforeBeforeNamespace->getContent())) {
                    $tokens->clearAt($beforeNamespaceIndex);
                } else {
                    $tokens[$beforeNamespaceIndex] = new Token([\T_WHITESPACE, ' ']);
                }
            } else {
                $tokens[$beforeNamespaceIndex] = new Token([\T_WHITESPACE, \substr($beforeNamespace->getContent(), 0, $lastNewline + 1)]);
            }
        }
    }
    private static function endsWithWhitespace(string $str) : bool
    {
        if ('' === $str) {
            return \false;
        }
        return '' === \trim(\substr($str, -1));
    }
}
