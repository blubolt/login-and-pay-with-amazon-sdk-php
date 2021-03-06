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
 * OffAmazonPaymentsService_Model_ReverseProviderCreditResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>ProviderCreditReversalDetails: OffAmazonPaymentsService_Model_ProviderCreditReversalDetails</li>
 *
 * </ul>
 */ 
class OffAmazonPaymentsService_Model_ReverseProviderCreditResult extends OffAmazonPaymentsService_Model
{

    /**
     * Construct new OffAmazonPaymentsService_Model_ReverseProviderCreditResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ProviderCreditReversalDetails: OffAmazonPaymentsService_Model_ProviderCreditReversalDetails</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (

        'ProviderCreditReversalDetails' => array('FieldValue' => null, 'FieldType' => 'OffAmazonPaymentsService_Model_ProviderCreditReversalDetails'),

        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the ProviderCreditReversalDetails.
     * 
     * @return ProviderCreditReversalDetails ProviderCreditReversalDetails
     */
    public function getProviderCreditReversalDetails() 
    {
        return $this->_fields['ProviderCreditReversalDetails']['FieldValue'];
    }

    /**
     * Sets the value of the ProviderCreditReversalDetails.
     * 
     * @param ProviderCreditReversalDetails ProviderCreditReversalDetails
     * @return void
     */
    public function setProviderCreditReversalDetails($value) 
    {
        $this->_fields['ProviderCreditReversalDetails']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the ProviderCreditReversalDetails  and returns this instance
     * 
     * @param ProviderCreditReversalDetails $value ProviderCreditReversalDetails
     * @return OffAmazonPaymentsService_Model_ReverseProviderCreditResult instance
     */
    public function withProviderCreditReversalDetails($value)
    {
        $this->setProviderCreditReversalDetails($value);
        return $this;
    }


    /**
     * Checks if ProviderCreditReversalDetails  is set
     * 
     * @return bool true if ProviderCreditReversalDetails property is set
     */
    public function isSetProviderCreditReversalDetails()
    {
        return !is_null($this->_fields['ProviderCreditReversalDetails']['FieldValue']);

    }




}