<?php

namespace Micuda\Ares;

use Micuda\Ares\Request;

class Ares {

    /** @var \Micuda\Ares\Request\IRequest */
    private $request;
    
    public function __construct(Request\IRequest $request = NULL) {
        $this->request = is_null($request) ? new Request\BasicGetRequest(): $request;
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