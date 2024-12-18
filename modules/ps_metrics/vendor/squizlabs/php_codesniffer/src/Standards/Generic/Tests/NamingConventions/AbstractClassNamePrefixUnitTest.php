<?php

/**
 * Unit test class for the AbstractClassNamePrefix sniff.
 *
 * @author  Anna Borzenko <annnechko@gmail.com>
 * @license https://github.com/PHPCSStandards/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
 */
namespace ps_metrics_module_v4_0_6\PHP_CodeSniffer\Standards\Generic\Tests\NamingConventions;

use ps_metrics_module_v4_0_6\PHP_CodeSniffer\Tests\Standards\AbstractSniffUnitTest;
/**
 * Unit test class for the AbstractClassNamePrefix sniff.
 *
 * @covers \PHP_CodeSniffer\Standards\Generic\Sniffs\NamingConventions\AbstractClassNamePrefixSniff
 */
final class AbstractClassNamePrefixUnitTest extends AbstractSniffUnitTest
{
    /**
     * Returns the lines where errors should occur.
     *
     * The key of the array should represent the line number and the value
     * should represent the number of errors that should occur on that line.
     *
     * @return array<int, int>
     */
    public function getErrorList()
    {
        return [3 => 1, 13 => 1, 18 => 1, 23 => 1, 42 => 1];
    }
    //end getErrorList()
    /**
     * Returns the lines where warnings should occur.
     *
     * The key of the array should represent the line number and the value
     * should represent the number of warnings that should occur on that line.
     *
     * @return array<int, int>
     */
    public function getWarningList()
    {
        return [];
    }
    //end getWarningList()
}
//end class
