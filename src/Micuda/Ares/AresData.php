<?php

namespace Micuda\Ares;

class AresData {

    /*
     * nazev, adresa, IC, DIC
     */

    private $data = [];

    public function setIN($val) {
        return $this->set('in', $val);
    }

    public function setTIN($val) {
        return $this->set('tin', $val);
    }

    public function setCompany($val) {
        return $this->set('company', $val);
    }
    
    public function setStreet($val) {
        return $this->set('street', $val);
    }

    public function setZIP($val) {
        return $this->set('zip', $val);
    }
    
    public function setCity($val) {
        return $this->set('city', $val);
    }
    
    public function setCountry($val) {
        return $this->set('country', $val);
    }
    
    /**
     * 
     * @param string $key
     * @param  $value
     * @return self
     */
    private function set($key, $value) {
        $this->data[$key] = strval($value);
        return $this;
    }

    public function toArray() {
        return $this->data;
    }

    public function reset() {
        $this->data = [];
        return $this;
    }

}
