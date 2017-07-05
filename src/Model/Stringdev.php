<?php

namespace Model;

class Stringdev{


    public function __construct(){}

    public function concat($str1, $str2){
        return $strcat = $str1 . $str2;
    }

    public function toCamelCase($str1, $str2){
        return $this->concat(ucfirst(strtolower($str1)),ucfirst(strtolower($str2)));
    }

    public function prefix($strpre, $strsuf, $camelcase = false){
        if($camelcase == true){
            return $this->concat(ucfirst(strtolower($strpre)),$strsuf);
        }
        return $this->concat($strpre,$strsuf);
    }

    public function suffix($strsuf, $strpre, $camelcase = false){
        if($camelcase == true){
            return $this->concat($strpre,ucfirst(strtolower($strsuf)));
        }
        return $this->concat($strpre,$strsuf);
    }
}