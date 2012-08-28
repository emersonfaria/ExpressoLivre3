<?php
/**
 * Tine 2.0
 * 
 * @package     Tinebase
 * @subpackage  Auth
 * @license     http://www.gnu.org/licenses/agpl.html AGPL Version 3
 * @copyright   Copyright (c) 2009-2013 Serpro (http://www.serpro.gov.br)
 * @author      Mário César Kolling <mario.koling@serpro.gov.br>
 */

/**
 * DigitalCertificate authentication backend
 * 
 * @package     Tinebase
 * @subpackage  Auth
 * @todo verify Digital certificate
 * @todo Create a class Zend_Auth_Adapter_DigitalCertificate
 */
class Tinebase_Auth_ModSsl extends Zend_Auth_Adapter_ModSsl implements Tinebase_Auth_Interface
{
    protected $_identity;
    protected $_credential;
    
    public function setCredential($credential)
    {
        $this->_credential = $credential;
    }
    
    public function setIdentity($value)
    {
        $this->_identity = $value;
    }
}
