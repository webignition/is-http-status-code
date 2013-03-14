<?php

namespace webignition\IsHttpStatusCode;


class IsHttpStatusCode {
    
    private static $httpStatusCodeSources = array(
        '100:102',
        '200:208',
        226,
        250,
        '300:308',
        '400:420',
        '422:426',
        428,
        429,
        431,
        444,
        449,
        '450:462',
        '494:497',
        '499:511',
        551,
        598,
        599
    );
    
    private static $httpStatusCodes = null;
    
    public static function check($number) {
        if (!is_int($number) && !ctype_digit($number)) {
            return false;
        }
        
        return in_array((int)$number, self::getHttpStatusCodes());
    }
    
    
    private static function getHttpStatusCodes() {
        if (is_null(self::$httpStatusCodes)) {
            self::$httpStatusCodes = array();
            
            foreach (self::$httpStatusCodeSources as $httpStatusCodeSource) {
                if (is_int($httpStatusCodeSource)) {
                    self::$httpStatusCodes[] = $httpStatusCodeSource;
                } elseif (is_string($httpStatusCodeSource)) {
                    $boundaries = explode(':', $httpStatusCodeSource);
                    
                    for ($statusCode = $boundaries[0]; $statusCode <= $boundaries[1]; $statusCode++) {
                        self::$httpStatusCodes[] = (int)$statusCode;
                    }
                }                
            }
        }
        
        return self::$httpStatusCodes;
    }
    
    
}