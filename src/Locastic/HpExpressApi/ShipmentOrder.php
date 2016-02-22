<?php
namespace Locastic\HpExpressApi;

class ShipmentOrder extends SOAPable
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
//    public function __construct($ClientReferenceNumber, $OrderedBy, $SenderContact, $SenderPhone, $SenderEMail, $SenderCountry, $SenderCityName, $SenderCityPOCode, $SenderStreet, $SenderHouseNumber, $RecipientContact, $RecipientPhone, $RecipientEMail, $RecipientCountry, $RecipientCityName, $RecipientCityPOCode, $RecipientStreet, $RecipientHouseNumber, $MainService, $PaymentType, $DeliveryType, $DeliveryCenter, $AdditionalServiceList, $PackageList, $ShippingDocumentNumber, $T2LContents, $Comment, $ReferenceFieldB, $ReferenceFieldC, $ReferenceFieldD)
//    {
//      $this->ClientReferenceNumber = $ClientReferenceNumber;
//      $this->OrderedBy = $OrderedBy;
//      $this->SenderContact = $SenderContact;
//      $this->SenderPhone = $SenderPhone;
//      $this->SenderEMail = $SenderEMail;
//      $this->SenderCountry = $SenderCountry;
//      $this->SenderCityName = $SenderCityName;
//      $this->SenderCityPOCode = $SenderCityPOCode;
//      $this->SenderStreet = $SenderStreet;
//      $this->SenderHouseNumber = $SenderHouseNumber;
//      $this->RecipientContact = $RecipientContact;
//      $this->RecipientPhone = $RecipientPhone;
//      $this->RecipientEMail = $RecipientEMail;
//      $this->RecipientCountry = $RecipientCountry;
//      $this->RecipientCityName = $RecipientCityName;
//      $this->RecipientCityPOCode = $RecipientCityPOCode;
//      $this->RecipientStreet = $RecipientStreet;
//      $this->RecipientHouseNumber = $RecipientHouseNumber;
//      $this->MainService = $MainService;
//      $this->PaymentType = $PaymentType;
//      $this->DeliveryType = $DeliveryType;
//      $this->DeliveryCenter = $DeliveryCenter;
//      $this->AdditionalServiceList = $AdditionalServiceList;
//      $this->PackageList = $PackageList;
//      $this->ShippingDocumentNumber = $ShippingDocumentNumber;
//      $this->T2LContents = $T2LContents;
//      $this->Comment = $Comment;
//      $this->ReferenceFieldB = $ReferenceFieldB;
//      $this->ReferenceFieldC = $ReferenceFieldC;
//      $this->ReferenceFieldD = $ReferenceFieldD;
//    }

    /**
     * @return string
     */
    public function getClientReferenceNumber()
    {
        return $this->ClientReferenceNumber;
    }

    /**
     * @param string $ClientReferenceNumber
     */
    public function setClientReferenceNumber($ClientReferenceNumber)
    {
        $this->ClientReferenceNumber = $ClientReferenceNumber;
    }

    /**
     * @return int
     */
    public function getOrderedBy()
    {
        return $this->OrderedBy;
    }

    /**
     * @param int $OrderedBy
     */
    public function setOrderedBy($OrderedBy)
    {
        $this->OrderedBy = $OrderedBy;
    }

    /**
     * @return string
     */
    public function getSenderContact()
    {
        return $this->SenderContact;
    }

    /**
     * @param string $SenderContact
     */
    public function setSenderContact($SenderContact)
    {
        $this->SenderContact = $SenderContact;
    }

    /**
     * @return string
     */
    public function getSenderPhone()
    {
        return $this->SenderPhone;
    }

    /**
     * @param string $SenderPhone
     */
    public function setSenderPhone($SenderPhone)
    {
        $this->SenderPhone = $SenderPhone;
    }

    /**
     * @return string
     */
    public function getSenderEMail()
    {
        return $this->SenderEMail;
    }

    /**
     * @param string $SenderEMail
     */
    public function setSenderEMail($SenderEMail)
    {
        $this->SenderEMail = $SenderEMail;
    }

    /**
     * @return string
     */
    public function getSenderCountry()
    {
        return $this->SenderCountry;
    }

    /**
     * @param string $SenderCountry
     */
    public function setSenderCountry($SenderCountry)
    {
        $this->SenderCountry = $SenderCountry;
    }

    /**
     * @return string
     */
    public function getSenderCityName()
    {
        return $this->SenderCityName;
    }

    /**
     * @param string $SenderCityName
     */
    public function setSenderCityName($SenderCityName)
    {
        $this->SenderCityName = $SenderCityName;
    }

    /**
     * @return string
     */
    public function getSenderCityPOCode()
    {
        return $this->SenderCityPOCode;
    }

    /**
     * @param string $SenderCityPOCode
     */
    public function setSenderCityPOCode($SenderCityPOCode)
    {
        $this->SenderCityPOCode = $SenderCityPOCode;
    }

    /**
     * @return string
     */
    public function getSenderStreet()
    {
        return $this->SenderStreet;
    }

    /**
     * @param string $SenderStreet
     */
    public function setSenderStreet($SenderStreet)
    {
        $this->SenderStreet = $SenderStreet;
    }

    /**
     * @return string
     */
    public function getSenderHouseNumber()
    {
        return $this->SenderHouseNumber;
    }

    /**
     * @param string $SenderHouseNumber
     */
    public function setSenderHouseNumber($SenderHouseNumber)
    {
        $this->SenderHouseNumber = $SenderHouseNumber;
    }

    /**
     * @return string
     */
    public function getRecipientContact()
    {
        return $this->RecipientContact;
    }

    /**
     * @param string $RecipientContact
     */
    public function setRecipientContact($RecipientContact)
    {
        $this->RecipientContact = $RecipientContact;
    }

    /**
     * @return string
     */
    public function getRecipientPhone()
    {
        return $this->RecipientPhone;
    }

    /**
     * @param string $RecipientPhone
     */
    public function setRecipientPhone($RecipientPhone)
    {
        $this->RecipientPhone = $RecipientPhone;
    }

    /**
     * @return string
     */
    public function getRecipientEMail()
    {
        return $this->RecipientEMail;
    }

    /**
     * @param string $RecipientEMail
     */
    public function setRecipientEMail($RecipientEMail)
    {
        $this->RecipientEMail = $RecipientEMail;
    }

    /**
     * @return string
     */
    public function getRecipientCountry()
    {
        return $this->RecipientCountry;
    }

    /**
     * @param string $RecipientCountry
     */
    public function setRecipientCountry($RecipientCountry)
    {
        $this->RecipientCountry = $RecipientCountry;
    }

    /**
     * @return string
     */
    public function getRecipientCityName()
    {
        return $this->RecipientCityName;
    }

    /**
     * @param string $RecipientCityName
     */
    public function setRecipientCityName($RecipientCityName)
    {
        $this->RecipientCityName = $RecipientCityName;
    }

    /**
     * @return string
     */
    public function getRecipientCityPOCode()
    {
        return $this->RecipientCityPOCode;
    }

    /**
     * @param string $RecipientCityPOCode
     */
    public function setRecipientCityPOCode($RecipientCityPOCode)
    {
        $this->RecipientCityPOCode = $RecipientCityPOCode;
    }

    /**
     * @return string
     */
    public function getRecipientStreet()
    {
        return $this->RecipientStreet;
    }

    /**
     * @param string $RecipientStreet
     */
    public function setRecipientStreet($RecipientStreet)
    {
        $this->RecipientStreet = $RecipientStreet;
    }

    /**
     * @return string
     */
    public function getRecipientHouseNumber()
    {
        return $this->RecipientHouseNumber;
    }

    /**
     * @param string $RecipientHouseNumber
     */
    public function setRecipientHouseNumber($RecipientHouseNumber)
    {
        $this->RecipientHouseNumber = $RecipientHouseNumber;
    }

    /**
     * @return int
     */
    public function getMainService()
    {
        return $this->MainService;
    }

    /**
     * @param int $MainService
     */
    public function setMainService($MainService)
    {
        $this->MainService = $MainService;
    }

    /**
     * @return int
     */
    public function getPaymentType()
    {
        return $this->PaymentType;
    }

    /**
     * @param int $PaymentType
     */
    public function setPaymentType($PaymentType)
    {
        $this->PaymentType = $PaymentType;
    }

    /**
     * @return int
     */
    public function getDeliveryType()
    {
        return $this->DeliveryType;
    }

    /**
     * @param int $DeliveryType
     */
    public function setDeliveryType($DeliveryType)
    {
        $this->DeliveryType = $DeliveryType;
    }

    /**
     * @return string
     */
    public function getDeliveryCenter()
    {
        return $this->DeliveryCenter;
    }

    /**
     * @param string $DeliveryCenter
     */
    public function setDeliveryCenter($DeliveryCenter)
    {
        $this->DeliveryCenter = $DeliveryCenter;
    }

    /**
     * @return AdditionalService[]
     */
    public function getAdditionalServiceList()
    {
        return $this->AdditionalServiceList;
    }

    /**
     * @param AdditionalService[] $AdditionalServiceList
     */
    public function setAdditionalServiceList($AdditionalServiceList)
    {
        $this->AdditionalServiceList = $AdditionalServiceList;
    }

    public function addAdditionalServiceList(AdditionalService $additionalService)
    {
        $this->AdditionalServiceList[] = $additionalService;
    }

    /**
     * @return Package[]
     */
    public function getPackageList()
    {
        return $this->PackageList;
    }

    /**
     * @param Package[] $PackageList
     */
    public function setPackageList($PackageList)
    {
        $this->PackageList = $PackageList;
    }

    public function addPackageList(Package $package)
    {
        $this->PackageList[] = $package;
    }

    /**
     * @return float
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * @param float $Value
     */
    public function setValue($Value)
    {
        $this->Value = $Value;
    }

    /**
     * @return float
     */
    public function getCODAmount()
    {
        return $this->CODAmount;
    }

    /**
     * @param float $CODAmount
     */
    public function setCODAmount($CODAmount)
    {
        $this->CODAmount = $CODAmount;
    }

    /**
     * @return float
     */
    public function getCustoms()
    {
        return $this->Customs;
    }

    /**
     * @param float $Customs
     */
    public function setCustoms($Customs)
    {
        $this->Customs = $Customs;
    }

    /**
     * @return string
     */
    public function getShippingDocumentNumber()
    {
        return $this->ShippingDocumentNumber;
    }

    /**
     * @param string $ShippingDocumentNumber
     */
    public function setShippingDocumentNumber($ShippingDocumentNumber)
    {
        $this->ShippingDocumentNumber = $ShippingDocumentNumber;
    }

    /**
     * @return int
     */
    public function getContents()
    {
        return $this->Contents;
    }

    /**
     * @param int $Contents
     */
    public function setContents($Contents)
    {
        $this->Contents = $Contents;
    }

    /**
     * @return int
     */
    public function getCashPaymentType()
    {
        return $this->CashPaymentType;
    }

    /**
     * @param int $CashPaymentType
     */
    public function setCashPaymentType($CashPaymentType)
    {
        $this->CashPaymentType = $CashPaymentType;
    }

    /**
     * @return EnumTime
     */
    public function getDeliverByTime1()
    {
        return $this->DeliverByTime1;
    }

    /**
     * @param EnumTime $DeliverByTime1
     */
    public function setDeliverByTime1($DeliverByTime1)
    {
        $this->DeliverByTime1 = $DeliverByTime1;
    }

    /**
     * @return EnumTime
     */
    public function getDeliverByTime2()
    {
        return $this->DeliverByTime2;
    }

    /**
     * @param EnumTime $DeliverByTime2
     */
    public function setDeliverByTime2($DeliverByTime2)
    {
        $this->DeliverByTime2 = $DeliverByTime2;
    }

    /**
     * @return dateTime
     */
    public function getCollectByDate()
    {
        return $this->CollectByDate;
    }

    /**
     * @param dateTime $CollectByDate
     */
    public function setCollectByDate($CollectByDate)
    {
        $this->CollectByDate = $CollectByDate;
    }

    /**
     * @return EnumTime
     */
    public function getCollectByTime1()
    {
        return $this->CollectByTime1;
    }

    /**
     * @param EnumTime $CollectByTime1
     */
    public function setCollectByTime1($CollectByTime1)
    {
        $this->CollectByTime1 = $CollectByTime1;
    }

    /**
     * @return EnumTime
     */
    public function getCollectByTime2()
    {
        return $this->CollectByTime2;
    }

    /**
     * @param EnumTime $CollectByTime2
     */
    public function setCollectByTime2($CollectByTime2)
    {
        $this->CollectByTime2 = $CollectByTime2;
    }

    /**
     * @return string
     */
    public function getT2LContents()
    {
        return $this->T2LContents;
    }

    /**
     * @param string $T2LContents
     */
    public function setT2LContents($T2LContents)
    {
        $this->T2LContents = $T2LContents;
    }

    /**
     * @return float
     */
    public function getT2LValue()
    {
        return $this->T2LValue;
    }

    /**
     * @param float $T2LValue
     */
    public function setT2LValue($T2LValue)
    {
        $this->T2LValue = $T2LValue;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->Comment;
    }

    /**
     * @param string $Comment
     */
    public function setComment($Comment)
    {
        $this->Comment = $Comment;
    }

    /**
     * @return string
     */
    public function getReferenceFieldB()
    {
        return $this->ReferenceFieldB;
    }

    /**
     * @param string $ReferenceFieldB
     */
    public function setReferenceFieldB($ReferenceFieldB)
    {
        $this->ReferenceFieldB = $ReferenceFieldB;
    }

    /**
     * @return string
     */
    public function getReferenceFieldC()
    {
        return $this->ReferenceFieldC;
    }

    /**
     * @param string $ReferenceFieldC
     */
    public function setReferenceFieldC($ReferenceFieldC)
    {
        $this->ReferenceFieldC = $ReferenceFieldC;
    }

    /**
     * @return string
     */
    public function getReferenceFieldD()
    {
        return $this->ReferenceFieldD;
    }

    /**
     * @param string $ReferenceFieldD
     */
    public function setReferenceFieldD($ReferenceFieldD)
    {
        $this->ReferenceFieldD = $ReferenceFieldD;
    }

    /**
     * @return int
     */
    public function getOrderNumber()
    {
        return $this->OrderNumber;
    }

    /**
     * @param int $OrderNumber
     */
    public function setOrderNumber($OrderNumber)
    {
        $this->OrderNumber = $OrderNumber;
    }

    /**
     * @return float
     */
    public function getTotal()
    {
        return $this->Total;
    }

    /**
     * @param float $Total
     */
    public function setTotal($Total)
    {
        $this->Total = $Total;
    }

}
