<?php

/**@author Eric Rosário <ericsantos.r@hotmail.com>
 * @version 0.1
 * @package vendor
 * @subpackage chillerlan
 * @link https://github.com/EricDevBA/qrcode-php
 * 
 */

require_once 'vendor/autoload.php';

use chillerlan\QRCode\QRCode;
use chillerlan\QRCode\QROptions;

$data = 'https://github.com/EricDevBA'; //Url do QRCODE

$options = new QROptions([
    'version' => 5,
    'eccLevel' => QRCode::ECC_L, //ERROR Correction

]);

echo '<h1>Meu QRCODE</h1>
<img src="' . (new QRcode($options))->render($data) . '" />'; //Gerando o QRCODE

?>