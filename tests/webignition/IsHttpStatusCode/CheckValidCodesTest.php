<?php

namespace webignition\IsHttpStatusCode;

class CheckValidCodesTest extends \PHPUnit_Framework_TestCase {
    
    public function testCheck() {
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(100));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(101));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(102));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(200));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(201));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(202));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(203));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(204));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(205));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(206));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(207));        
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(208));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(226));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(250));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(300));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(301));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(302));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(303));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(304));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(305));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(306));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(307));        
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(308));        
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(401));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(402));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(403));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(404));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(405));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(406));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(407));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(408));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(409));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(410));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(411));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(412));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(413));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(414));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(415));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(416));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(417));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(418));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(419));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(420));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(428));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(429));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(431));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(444));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(449));        
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(450));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(451));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(452));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(453));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(454));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(455));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(456));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(457));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(458));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(459));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(460));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(461));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(462));        
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(494));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(495));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(496));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(497));        
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(499));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(500));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(501));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(502));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(503));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(504));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(505));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(506));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(507));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(508));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(509));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(510));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(511));        
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(551));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(598));
        $this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(599));
        
        
        
    }  
    
}