<?php
namespace Locastic\HpExpressApi;

abstract class SOAPable
{

    public function getAsSOAP()
    {
        foreach ($this as $key => &$value) {
            $this->prepareSOAPrecursive($this->$key);
        }

        return $this;
    }

    private function prepareSOAPrecursive(&$element)
    {
        if (is_array($element)) {
            foreach ($element as $key => &$val) {
                $this->prepareSOAPrecursive($val);
            }
            $element = new \SoapVar($element, SOAP_ENC_OBJECT);
        } elseif (is_object($element)) {
            if ($element instanceof SOAPable) {
                $element->getAsSOAP();
            }
            $element = new \SoapVar($element, SOAP_ENC_OBJECT, null, null, $this->getClassName($element));
        }
    }

    private function getClassName($object)
    {
        $reflect = new \ReflectionClass($object);

        return $reflect->getShortName();
    }

}
