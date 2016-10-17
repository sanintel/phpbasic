<?php
$height=['john'=>179, 'suse'=>175,'robert'=>185];
print_r($height);
echo '<hr>';
//echo 'suse:'.$height['suse'];
foreach ($height as $key => $value) {
    echo 'key:'.$key.'/value:'.$value;
    echo '<hr>';
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

