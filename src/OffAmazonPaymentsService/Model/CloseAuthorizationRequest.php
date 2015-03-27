<?php

/*******************************************************************************
 *  Copyright 2013 Amazon.com, Inc. or its affiliates. All Rights Reserved.
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *
 *  You may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at:
 *  http://aws.amazon.com/apache2.0
 *  This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR
 *  CONDITIONS OF ANY KIND, either express or implied. See the License
 *  for the
 *  specific language governing permissions and limitations under the
 *  License.
 * *****************************************************************************
 */

    

/**
 * OffAmazonPaymentsService_Model_CloseAuthorizationRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>SellerId: string</li>
 * <li>AmazonAuthorizationId: string</li>
 * <li>ClosureReason: string</li>
 *
 * </ul>
 */ 
class OffAmazonPaymentsService_Model_CloseAuthorizationRequest extends OffAmazonPaymentsService_Model
{

    /**
     * Construct new OffAmazonPaymentsService_Model_CloseAuthorizationRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>SellerId: string</li>
     * <li>AmazonAuthorizationId: string</li>
     * <li>ClosureReason: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'SellerId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'AmazonAuthorizationId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'ClosureReason' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the SellerId property.
     * 
     * @return string SellerId
     */
    public function getSellerId() 
    {
        return $this->_fields['SellerId']['FieldValue'];
    }

    /**
     * Sets the value of the SellerId property.
     * 
     * @param string SellerId
     * @return this instance
     */
    public function setSellerId($value) 
    {
        $this->_fields['SellerId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the SellerId and returns this instance
     * 
     * @param string $value SellerId
     * @return OffAmazonPaymentsService_Model_CloseAuthorizationRequest instance
     */
    public function withSellerId($value)
    {
        $this->setSellerId($value);
        return $this;
    }


    /**
     * Checks if SellerId is set
     * 
     * @return bool true if SellerId  is set
     */
    public function isSetSellerId()
    {
        return !is_null($this->_fields['SellerId']['FieldValue']);
    }

    /**
     * Gets the value of the AmazonAuthorizationId property.
     * 
     * @return string AmazonAuthorizationId
     */
    public function getAmazonAuthorizationId() 
    {
        return $this->_fields['AmazonAuthorizationId']['FieldValue'];
    }

    /**
     * Sets the value of the AmazonAuthorizationId property.
     * 
     * @param string AmazonAuthorizationId
     * @return this instance
     */
    public function setAmazonAuthorizationId($value) 
    {
        $this->_fields['AmazonAuthorizationId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the AmazonAuthorizationId and returns this instance
     * 
     * @param string $value AmazonAuthorizationId
     * @return OffAmazonPaymentsService_Model_CloseAuthorizationRequest instance
     */
    public function withAmazonAuthorizationId($value)
    {
        $this->setAmazonAuthorizationId($value);
        return $this;
    }


    /**
     * Checks if AmazonAuthorizationId is set
     * 
     * @return bool true if AmazonAuthorizationId  is set
     */
    public function isSetAmazonAuthorizationId()
    {
        return !is_null($this->_fields['AmazonAuthorizationId']['FieldValue']);
    }

    /**
     * Gets the value of the ClosureReason property.
     * 
     * @return string ClosureReason
     */
    public function getClosureReason() 
    {
        return $this->_fields['ClosureReason']['FieldValue'];
    }

    /**
     * Sets the value of the ClosureReason property.
     * 
     * @param string ClosureReason
     * @return this instance
     */
    public function setClosureReason($value) 
    {
        $this->_fields['ClosureReason']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the ClosureReason and returns this instance
     * 
     * @param string $value ClosureReason
     * @return OffAmazonPaymentsService_Model_CloseAuthorizationRequest instance
     */
    public function withClosureReason($value)
    {
        $this->setClosureReason($value);
        return $this;
    }


    /**
     * Checks if ClosureReason is set
     * 
     * @return bool true if ClosureReason  is set
     */
    public function isSetClosureReason()
    {
        return !is_null($this->_fields['ClosureReason']['FieldValue']);
    }
}
?>