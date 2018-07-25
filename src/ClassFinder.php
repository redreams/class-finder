<?php

declare(strict_types=1);

/*
 * This file is part of the class-finder package.
 *
 * (c) Gennady Knyazkin <dev@gennadyx.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Redreams\ClassFinder;

/**
 * Class ClassFinder
 *
 * @author Gennady Knyazkin <dev@gennadyx.tech>
 */
class ClassFinder
{
    /**
     * Find class and return fully qualified name in the source
     *
     * @param string $source PHP source code
     * @return string|null Fully qualified class name if found, null otherwise
     */
    public static function find(string $source)
    {
        $class = false;
        $namespace = false;
        $tokens = token_get_all($source);
        if (1 === count($tokens) && T_INLINE_HTML === $tokens[0][0]) {
            return null;
        }
        for ($i = 0; isset($tokens[$i]); ++$i) {
            $token = $tokens[$i];
            if (!isset($token[1])) {
                continue;
            }
            if (true === $class && T_STRING === $token[0]) {
                return $namespace.'\\'.$token[1];
            }
            if (true === $namespace && T_STRING === $token[0]) {
                $namespace = $token[1];
                while (isset($tokens[++$i][1]) && in_array($tokens[$i][0], [T_NS_SEPARATOR, T_STRING], true)) {
                    $namespace .= $tokens[$i][1];
                }
                $token = $tokens[$i];
            }
            if (T_CLASS === $token[0]) {
                // Skip usage of ::class constant and anonymous classes
                $skipClassToken = false;
                for ($j = $i - 1; $j > 0; --$j) {
                    if (!isset($tokens[$j][1])
                        || !in_array($tokens[$j][0], [T_WHITESPACE, T_DOC_COMMENT, T_COMMENT], true)
                    ) {
                        break;
                    }
                    if (T_DOUBLE_COLON === $tokens[$j][0] || T_NEW === $tokens[$j][0]) {
                        $skipClassToken = true;
                        break;
                    }
                }
                if (!$skipClassToken) {
                    $class = true;
                }
            }
            if (T_NAMESPACE === $token[0]) {
                $namespace = true;
            }
        }

        return null;
    }
}
