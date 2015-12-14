<?php
namespace repat\LaravelDBug;

use Ospinto\dBug;

class DBugHelper
{
   public static function dump($var) {
        new dBug($var);
   }
}
