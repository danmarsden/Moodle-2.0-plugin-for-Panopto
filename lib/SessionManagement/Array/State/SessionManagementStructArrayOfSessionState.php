<?php
/**
 * File for class SessionManagementStructArrayOfSessionState
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for SessionManagementStructArrayOfSessionState originally named ArrayOfSessionState
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/SessionManagement.svc?xsd=xsd2}
 * @package SessionManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class SessionManagementStructArrayOfSessionState extends SessionManagementWsdlClass
{
    /**
     * The SessionState
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var SessionManagementEnumSessionState
     */
    public $SessionState;
    /**
     * Constructor method for ArrayOfSessionState
     * @see parent::__construct()
     * @param SessionManagementEnumSessionState $_sessionState
     * @return SessionManagementStructArrayOfSessionState
     */
    public function __construct($_sessionState = NULL)
    {
        parent::__construct(array('SessionState'=>$_sessionState),false);
    }
    /**
     * Get SessionState value
     * @return SessionManagementEnumSessionState|null
     */
    public function getSessionState()
    {
        return $this->SessionState;
    }
    /**
     * Set SessionState value
     * @param SessionManagementEnumSessionState $_sessionState the SessionState
     * @return SessionManagementEnumSessionState
     */
    public function setSessionState($_sessionState)
    {
        return ($this->SessionState = $_sessionState);
    }
    /**
     * Returns the current element
     * @see SessionManagementWsdlClass::current()
     * @return SessionManagementEnumSessionState
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see SessionManagementWsdlClass::item()
     * @param int $_index
     * @return SessionManagementEnumSessionState
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see SessionManagementWsdlClass::first()
     * @return SessionManagementEnumSessionState
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see SessionManagementWsdlClass::last()
     * @return SessionManagementEnumSessionState
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see SessionManagementWsdlClass::last()
     * @param int $_offset
     * @return SessionManagementEnumSessionState
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Add element to array
     * @see SessionManagementWsdlClass::add()
     * @uses SessionManagementEnumSessionState::valueIsValid()
     * @param SessionManagementEnumSessionState $_item
     * @return SessionManagementEnumSessionState
     */
    public function add($_item)
    {
        return SessionManagementEnumSessionState::valueIsValid($_item)?parent::add($_item):false;
    }
    /**
     * Returns the attribute name
     * @see SessionManagementWsdlClass::getAttributeName()
     * @return string SessionState
     */
    public function getAttributeName()
    {
        return 'SessionState';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SessionManagementWsdlClass::__set_state()
     * @uses SessionManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SessionManagementStructArrayOfSessionState
     */
    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array,$_className);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
