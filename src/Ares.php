<?php

namespace Micuda\Ares;

class Ares {
    use \Nette\SmartObject;
    
    /** @var \Micuda\Ares\Request\IRequest */
    private $request;
    
    public function __construct(\Micuda\Ares\Request\IRequest $request = NULL) {
        $this->request = ($request === NULL) ? new \Micuda\Ares\Request\BasicGetRequest(): $request;
    }

    /**
     * Loads the fresh data.
     * @param integer $in
     * @return AresData
     */
    public function loadData($in) {
        $this->request->reset();
        return $this->request->getData($in);
    }
    
    /**
     * Gets the temporary data.
     * @return AresData
     */
    public function getData() {
        return $this->request->getData();
    }
}
