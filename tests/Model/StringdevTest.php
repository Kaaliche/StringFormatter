<?php

namespace tests\Model;

use Model\Stringdev;
use PHPUnit\Framework\TestCase;

class StringdevTest extends TestCase {

    private $str1;
    private $str2;

    public function setUp(){
        $this->str1="provencal";
        $this->str2="legaullois";
    }

    public function testConcat() {
        $str = new Stringdev();
        $actual = $str->concat($this->str1,$this->str2);
        $this->assertSame('provencallegaullois',$actual);
    }

    public function testToCamelCase(){
        $str = new Stringdev();
        $actual = $str->toCamelCase($this->str1,$this->str2);
        $this->assertSame('ProvencalLegaullois',$actual);
    }

    public function testPrefixFalse(){
        $str = new Stringdev();
        $actual = $str->prefix($this->str1,$this->str2);
        $this->assertSame('provencallegaullois',$actual);
    }

    public function testPrefixTrue(){
        $str = new Stringdev();
        $actual = $str->prefix($this->str1,$this->str2,true);
        $this->assertSame('Provencallegaullois',$actual);
    }

    public function testSuffixFalse(){
        $str = new Stringdev();
        $actual = $str->suffix($this->str2,$this->str1);
        $this->assertSame('provencallegaullois',$actual);
    }

    public function testSuffixTrue(){
        $str = new Stringdev();
        $actual = $str->suffix($this->str2,$this->str1, true);
        $this->assertSame('provencalLegaullois',$actual);
    }
}