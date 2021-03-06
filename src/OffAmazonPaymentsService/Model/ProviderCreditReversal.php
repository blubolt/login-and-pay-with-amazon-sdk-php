<?php

/*******************************************************************************
 *  Copyright 2011 Amazon.com, Inc. or its affiliates. All Rights Reserved.
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
 * OffAmazonPaymentsService_Model_ProviderCreditReversal
 * 
 * Properties:
 * <ul>
 * 
 * <li>ProviderId: string</li>
 * <li>CreditReversalAmount: OffAmazonPaymentsService_Model_Price</li>
 *
 * </ul>
 */ 
class OffAmazonPaymentsService_Model_ProviderCreditReversal extends OffAmazonPaymentsService_Model
{

    /**
     * Construct new OffAmazonPaymentsService_Model_ProviderCreditReversal
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ProviderId: string</li>
     * <li>CreditReversalAmount: OffAmazonPaymentsService_Model_Price</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'ProviderId' => array('FieldValue' => null, 'FieldType' => 'string'),

        'CreditReversalAmount' => array('FieldValue' => null, 'FieldType' => 'OffAmazonPaymentsService_Model_Price'),

        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the ProviderId property.
     * 
     * @return string ProviderId
     */
    public function getProviderId() 
    {
        return $this->_fields['ProviderId']['FieldValue'];
    }

    /**
     * Sets the value of the ProviderId property.
     * 
     * @param string ProviderId
     * @return this instance
     */
    public function setProviderId($value) 
    {
        $this->_fields['ProviderId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the ProviderId and returns this instance
     * 
     * @param string $value ProviderId
     * @return OffAmazonPaymentsService_Model_ProviderCreditReversal instance
     */
    public function withProviderId($value)
    {
        $this->setProviderId($value);
        return $this;
    }


    /**
     * Checks if ProviderId is set
     * 
     * @return bool true if ProviderId  is set
     */
    public function isSetProviderId()
    {
        return !is_null($this->_fields['ProviderId']['FieldValue']);
    }

    /**
     * Gets the value of the CreditReversalAmount.
     * 
     * @return Price CreditReversalAmount
     */
    public function getCreditReversalAmount() 
    {
        return $this->_fields['CreditReversalAmount']['FieldValue'];
    }

    /**
     * Sets the value of the CreditReversalAmount.
     * 
     * @param Price CreditReversalAmount
     * @return void
     */
    public function setCreditReversalAmount($value) 
    {
        $this->_fields['CreditReversalAmount']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the CreditReversalAmount  and returns this instance
     * 
     * @param Price $value CreditReversalAmount
     * @return OffAmazonPaymentsService_Model_ProviderCreditReversal instance
     */
    public function withCreditReversalAmount($value)
    {
        $this->setCreditReversalAmount($value);
        return $this;
    }


    /**
     * Checks if CreditReversalAmount  is set
     * 
     * @return bool true if CreditReversalAmount property is set
     */
    public function isSetCreditReversalAmount()
    {
        return !is_null($this->_fields['CreditReversalAmount']['FieldValue']);

    }




}