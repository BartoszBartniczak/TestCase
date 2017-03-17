<?php
/**
 * Created by PhpStorm.
 * User: Bartosz Bartniczak <kontakt@bartoszbartniczak.pl>
 */

namespace BartoszBartniczak\TestCase;

use PHPUnit\Framework\TestCase as PHPUnitTestCase;

class TestCaseTest extends PHPUnitTestCase
{

    public function testConstructor(){

        $testCase = $this->getMockBuilder(TestCase::class)
            ->getMockForAbstractClass();
        /* @var $testCase TestCase */
        $this->assertInstanceOf(PHPUnitTestCase::class, $testCase);
    }

}
