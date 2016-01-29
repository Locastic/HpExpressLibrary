<?php
namespace Locastic\HpExpressApi;

class ShipmentOrder
{

    /**
     * @var string $ClientReferenceNumber
     * @access public
     */
    public $ClientReferenceNumber = null;

    /**
     * @var int $OrderedBy
     * @access public
     */
    public $OrderedBy = null;

    /**
     * @var string $SenderContact
     * @access public
     */
    public $SenderContact = null;

    /**
     * @var string $SenderPhone
     * @access public
     */
    public $SenderPhone = null;

    /**
     * @var string $SenderEMail
     * @access public
     */
    public $SenderEMail = null;

    /**
     * @var string $SenderCountry
     * @access public
     */
    public $SenderCountry = null;

    /**
     * @var string $SenderCityName
     * @access public
     */
    public $SenderCityName = null;

    /**
     * @var string $SenderCityPOCode
     * @access public
     */
    public $SenderCityPOCode = null;

    /**
     * @var string $SenderStreet
     * @access public
     */
    public $SenderStreet = null;

    /**
     * @var string $SenderHouseNumber
     * @access public
     */
    public $SenderHouseNumber = null;

    /**
     * @var string $RecipientContact
     * @access public
     */
    public $RecipientContact = null;

    /**
     * @var string $RecipientPhone
     * @access public
     */
    public $RecipientPhone = null;

    /**
     * @var string $RecipientEMail
     * @access public
     */
    public $RecipientEMail = null;

    /**
     * @var string $RecipientCountry
     * @access public
     */
    public $RecipientCountry = null;

    /**
     * @var string $RecipientCityName
     * @access public
     */
    public $RecipientCityName = null;

    /**
     * @var string $RecipientCityPOCode
     * @access public
     */
    public $RecipientCityPOCode = null;

    /**
     * @var string $RecipientStreet
     * @access public
     */
    public $RecipientStreet = null;

    /**
     * @var string $RecipientHouseNumber
     * @access public
     */
    public $RecipientHouseNumber = null;

    /**
     * @var int $MainService
     * @access public
     */
    public $MainService = null;

    /**
     * @var int $PaymentType
     * @access public
     */
    public $PaymentType = null;

    /**
     * @var int $DeliveryType
     * @access public
     */
    public $DeliveryType = null;

    /**
     * @var string $DeliveryCenter
     * @access public
     */
    public $DeliveryCenter = null;

    /**
     * @var AdditionalService[] $AdditionalServiceList
     * @access public
     */
    public $AdditionalServiceList = null;

    /**
     * @var Package[] $PackageList
     * @access public
     */
    public $PackageList = null;

    /**
     * @var float $Value
     * @access public
     */
    public $Value = null;

    /**
     * @var float $CODAmount
     * @access public
     */
    public $CODAmount = null;

    /**
     * @var float $Customs
     * @access public
     */
    public $Customs = null;

    /**
     * @var string $ShippingDocumentNumber
     * @access public
     */
    public $ShippingDocumentNumber = null;

    /**
     * @var int $Contents
     * @access public
     */
    public $Contents = null;

    /**
     * @var int $CashPaymentType
     * @access public
     */
    public $CashPaymentType = null;

    /**
     * @var EnumTime $DeliverByTime1
     * @access public
     */
    public $DeliverByTime1 = null;

    /**
     * @var EnumTime $DeliverByTime2
     * @access public
     */
    public $DeliverByTime2 = null;

    /**
     * @var dateTime $CollectByDate
     * @access public
     */
    public $CollectByDate = null;

    /**
     * @var EnumTime $CollectByTime1
     * @access public
     */
    public $CollectByTime1 = null;

    /**
     * @var EnumTime $CollectByTime2
     * @access public
     */
    public $CollectByTime2 = null;

    /**
     * @var string $T2LContents
     * @access public
     */
    public $T2LContents = null;

    /**
     * @var float $T2LValue
     * @access public
     */
    public $T2LValue = null;

    /**
     * @var string $Comment
     * @access public
     */
    public $Comment = null;

    /**
     * @var string $ReferenceFieldB
     * @access public
     */
    public $ReferenceFieldB = null;

    /**
     * @var string $ReferenceFieldC
     * @access public
     */
    public $ReferenceFieldC = null;

    /**
     * @var string $ReferenceFieldD
     * @access public
     */
    public $ReferenceFieldD = null;

    /**
     * @var int $OrderNumber
     * @access public
     */
    public $OrderNumber = null;

    /**
     * @var float $Total
     * @access public
     */
    public $Total = null;

    /**
     * @param string $ClientReferenceNumber
     * @param int $OrderedBy
     * @param string $SenderContact
     * @param string $SenderPhone
     * @param string $SenderEMail
     * @param string $SenderCountry
     * @param string $SenderCityName
     * @param string $SenderCityPOCode
     * @param string $SenderStreet
     * @param string $SenderHouseNumber
     * @param string $RecipientContact
     * @param string $RecipientPhone
     * @param string $RecipientEMail
     * @param string $RecipientCountry
     * @param string $RecipientCityName
     * @param string $RecipientCityPOCode
     * @param string $RecipientStreet
     * @param string $RecipientHouseNumber
     * @param int $MainService
     * @param int $PaymentType
     * @param int $DeliveryType
     * @param string $DeliveryCenter
     * @param AdditionalService[] $AdditionalServiceList
     * @param Package[] $PackageList
     * @param string $ShippingDocumentNumber
     * @param string $T2LContents
     * @param string $Comment
     * @param string $ReferenceFieldB
     * @param string $ReferenceFieldC
     * @param string $ReferenceFieldD
     * @access public
     */
    public function __construct($ClientReferenceNumber, $OrderedBy, $SenderContact, $SenderPhone, $SenderEMail, $SenderCountry, $SenderCityName, $SenderCityPOCode, $SenderStreet, $SenderHouseNumber, $RecipientContact, $RecipientPhone, $RecipientEMail, $RecipientCountry, $RecipientCityName, $RecipientCityPOCode, $RecipientStreet, $RecipientHouseNumber, $MainService, $PaymentType, $DeliveryType, $DeliveryCenter, $AdditionalServiceList, $PackageList, $ShippingDocumentNumber, $T2LContents, $Comment, $ReferenceFieldB, $ReferenceFieldC, $ReferenceFieldD)
    {
      $this->ClientReferenceNumber = $ClientReferenceNumber;
      $this->OrderedBy = $OrderedBy;
      $this->SenderContact = $SenderContact;
      $this->SenderPhone = $SenderPhone;
      $this->SenderEMail = $SenderEMail;
      $this->SenderCountry = $SenderCountry;
      $this->SenderCityName = $SenderCityName;
      $this->SenderCityPOCode = $SenderCityPOCode;
      $this->SenderStreet = $SenderStreet;
      $this->SenderHouseNumber = $SenderHouseNumber;
      $this->RecipientContact = $RecipientContact;
      $this->RecipientPhone = $RecipientPhone;
      $this->RecipientEMail = $RecipientEMail;
      $this->RecipientCountry = $RecipientCountry;
      $this->RecipientCityName = $RecipientCityName;
      $this->RecipientCityPOCode = $RecipientCityPOCode;
      $this->RecipientStreet = $RecipientStreet;
      $this->RecipientHouseNumber = $RecipientHouseNumber;
      $this->MainService = $MainService;
      $this->PaymentType = $PaymentType;
      $this->DeliveryType = $DeliveryType;
      $this->DeliveryCenter = $DeliveryCenter;
      $this->AdditionalServiceList = $AdditionalServiceList;
      $this->PackageList = $PackageList;
      $this->ShippingDocumentNumber = $ShippingDocumentNumber;
      $this->T2LContents = $T2LContents;
      $this->Comment = $Comment;
      $this->ReferenceFieldB = $ReferenceFieldB;
      $this->ReferenceFieldC = $ReferenceFieldC;
      $this->ReferenceFieldD = $ReferenceFieldD;
    }

}
