<?php

define('BOOK','Perfect PHP');
$value = 'BOOK';
//echo $value, PHP_EOL; //BOOK
echo constant($value), PHP_EOL; //Perfect_PHP
//echo PHP_OS, PHP_EOL; 
//echo E_WARNING, PHP_EOL; 
//var_dump(get_defined_constants());

echo __FILE__, PHP_EOL; 
echo __LINE__, PHP_EOL; 
