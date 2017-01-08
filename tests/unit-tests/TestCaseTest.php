<?php
/**
 * Created by PhpStorm.
 * User: Bartosz Bartniczak <kontakt@bartoszbartniczak.pl>
 */

namespace BartoszBartniczak\TestCase;


class TestCaseTest extends \PHPUnit_Framework_TestCase
{

    public function testConstructor(){

        $testCase = $this->getMockBuilder(TestCase::class)
            ->getMockForAbstractClass();
        /* @var $testCase TestCase */
        $this->assertInstanceOf(\PHPUnit_Framework_TestCase::class, $testCase);
    }

}
