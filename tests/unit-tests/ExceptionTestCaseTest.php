<?php
/**
 * Created by PhpStorm.
 * User: Bartosz Bartniczak <kontakt@bartoszbartniczak.pl>
 */

namespace BartoszBartniczak\TestCase;


class ExceptionTestCaseTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @covers \BartoszBartniczak\TestCase\ExceptionTestCase::__construct
     */
    public function testConstructor()
    {

        $exceptionTestCase = $this->getMockBuilder(ExceptionTestCase::class)
            ->getMockForAbstractClass();
        /* @var $exceptionTestCase ExceptionTestCase */

        $this->assertInstanceOf(TestCase::class, $exceptionTestCase);

    }

}
