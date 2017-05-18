<?php

require  "trans_es.php";




function trans($key) {
global $trans;
 $translation = $key;

  if( array_key_exists($key, $trans) ) {
    $translation = $trans[$key];
  }
  return $translation;
}
