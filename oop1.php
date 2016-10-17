<?php
class car{
    public $color;
    public  function setColor($cname) {
        return 'Car color :'.$this->color=$cname;
}}
    $newcar=new car;
    echo $newcar->setColor('blue');
    echo '<hr>';

    echo $newcar->setColor('green');
    
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

