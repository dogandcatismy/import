<?php

namespace tests;

class MyGreeter
{
    public function hello(){
        $hour = date('H');
        $text = '';
        if($hour >= 6 && $hour < 12){
            $text = 'Good morning';
        }else if($hour>=12 && $hour<18){
            $text = 'Good afternoon';
        }else if($hour >= 18 && $hour < 24 || $hour>=0 && $hour<6){
            $text = 'Good evening';
        }
        return $text;
    }
}