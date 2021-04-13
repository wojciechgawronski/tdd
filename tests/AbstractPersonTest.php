<?php

use App\AbstractPerson;
use App\Doctor;
use PHPUnit\Framework\TestCase;

class AbstractPersonTest extends TestCase
{
    public function testNameAndTitleIsReturned()
    {
        $doctor = new Doctor('Woj');

        $this->assertEquals('Dr. Woj', $doctor->getNameAndTitle());
    }

    public function testNameAndTitleIsReturnedFromGetTitle()
    {
        // 7 parameters... to much!
        // $mock = $this->getMockForAbstractClass(AbstractPerson::class);
        // lets do this another way

        $mock = $this->getMockBuilder(AbstractPerson::class)
                    ->setConstructorArgs(['Woj'])
                    ->getMockForAbstractClass();
        
        $mock->method('getTitle')
                ->willReturn('Dr.');

        $this->assertEquals('Dr. Woj', $mock->getNameAndTitle());
    }
}
