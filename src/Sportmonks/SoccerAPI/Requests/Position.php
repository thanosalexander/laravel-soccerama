<?php

namespace Sportmonks\SoccerAPI\Requests;


use Sportmonks\SoccerAPI\SoccerAPIClient;

class Position extends SoccerAPIClient {

    public function all()
    {
        return $this->callData('positions');
    }



}
