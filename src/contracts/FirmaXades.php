<?php
namespace Stibenamm\FirmaXadesCR\Contracts;

interface FirmaXades
{
   /**
   * Sign the xml file
   * @param  string $pfx
   * @param  string $pin
   * @param  string $input
   * @param  integer $output
   * @param  string $path
   */
    public function firmarXml($pfx,$pin,$input,$output,$path=null);
}
