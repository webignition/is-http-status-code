<?php

namespace webignition\IsHttpStatusCode;

class CheckInvalidValuesTest extends \PHPUnit_Framework_TestCase {
    
    public function testCheck() {
        $this->assertFalse(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(true));
        $this->assertFalse(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(false));
        $this->assertFalse(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(3.14));
        $this->assertFalse(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(-1));
        $this->assertFalse(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(99));
        $this->assertFalse(\webignition\IsHttpStatusCode\IsHttpStatusCode::check('foo'));        
    }  
    
}