<?php
namespace Locastic\HpExpressApi;

class EnumBarcodeType
{
    const __default = 'BARCODE_3P';
    const BARCODE_3P = 'BARCODE_3P';
    const BARCODE_CUSTOM = 'BARCODE_CUSTOM';

    public static function getAllConsts()
    {
        return (new \ReflectionClass(get_class()))->getConstants();
    }
}
