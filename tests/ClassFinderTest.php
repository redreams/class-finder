<?php

/*
 * This file is part of the class-finder package.
 *
 * (c) Gennady Knyazkin <dev@gennadyx.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Redreams\ClassFinder\Tests;

use Redreams\ClassFinder\ClassFinder;
use PHPUnit\Framework\TestCase;

class ClassFinderTest extends TestCase
{
    public function testFind()
    {
        $source = "<?php namespace PhpClassTest; class PhpClass {}";
        $this->assertEquals('PhpClassTest\\PhpClass', ClassFinder::find($source));
        $this->assertEquals(null, ClassFinder::find(''));
    }
}
