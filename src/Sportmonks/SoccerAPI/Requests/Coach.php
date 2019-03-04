<?php

namespace Sportmonks\SoccerAPI\Requests;


use Sportmonks\SoccerAPI\SoccerAPIClient;

class Coach extends SoccerAPIClient {


    public function byId($coachId)
    {
        return $this->call('coach/' . $coachId);
    }

}
