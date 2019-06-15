<?php
require '../vendor/autoload.php';

use Stibenamm\FirmaXadesCR\firmador;

$pfx    = 'RepMyS_dev.p12'; // Ruta del archivo de la llave criptográfica (*.p12)
$pin    = '2019'; // PIN de 4 dígitos de la llave criptográfica
$xml    = 'FACe_50610061900310111085400200001010000000819136576840.xml'; // String XML ó Ruta del archivo XML (comprobante electrónico)
$ruta   = 'FACe_50610061900310111085400200001010000000819136576840_firmado.XML'; // Ruta del nuevo arhivo XML cuando se desea guardar en disco

$firmador = new firmador();
// Se firma XML y se recibe un string resultado en Base64
$base64 = $firmador->firmarXml($pfx, $pin, $xml, $firmador::TO_BASE64_STRING);
print_r($base64);

// Se firma XML y se recibe un string resultado en Xml
$xml_string = $firmador->firmarXml($pfx, $pin, $xml, $firmador::TO_XML_STRING);
print_r($xml_string);

// Se firma XML, se guarda en disco duro ($ruta) y se recibe el número de bytes del archivo guardado. En caso de error se recibe FALSE
$archivo = $firmador->firmarXml($pfx, $pin, $xml, $firmador::TO_XML_FILE, $ruta);
print_r($archivo);
