<?php
namespace EleMe\OpenApi\Test;



use EleMe\OpenApi\Kernel\Config;
use EleMe\OpenApi\Kernel\EasySDKKernel;

use PHPUnit\Framework\TestCase;


final class ClientTest extends TestCase{




    public function testA()
    {
        $a = 'a1111';
        echo $a;
        self::assertEquals($a,'a1111');
    }
    public function testSign(){
        $config = new Config();
        $config ->appId = '2222';
        $kernel = new EasySDKKernel($config);
        $systemParams = [
            "a" => "2",
            "b" => "1",
            "c" => "3",
        ];
        $bizParams = [
        ];
        $myParams = [

        ];

        $a = $kernel->sign($systemParams,$bizParams,$myParams,"123456");
        self::assertEquals($a,'39506941ce7fac032cd410529ac2796640b706684289224651de8d16272af8bc');
    }
}