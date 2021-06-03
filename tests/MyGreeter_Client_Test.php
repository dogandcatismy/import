<?php

namespace Tests;

class MyGreeter_Client_Test extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->greeter = new MyGreeter();
    }

    public function test_Instance()
    {
        //echo '333';
        $this->assertEquals(
            get_class($this->greeter),
            'tests\MyGreeter'
        );
    }

    public function test_getGreeting()
    {
        $result = $this->greeter->hello();
        $this->assertContains($result,['Good morning', 'Good afternoon', 'Good evening']);
    }
}
