<?php

namespace DrestClientTests;

use DrestClient\Response;
use DrestCommon\Representation\Json;

class ResponseTest extends DrestClientTestCase
{

    public function testResponseObjectConstruction()
    {
        $representation = new Json();
        $response = new Response($representation);

        $this->assertEquals($representation, $response->getRepresentation());
    }


    public function testResponseObjectConstructionWithCustomResponse()
    {
        $representation = new Json();
        $symResponse = \Symfony\Component\HttpFoundation\Response::create();
        $response = new Response($representation, $symResponse);

        $this->assertEquals($representation, $response->getRepresentation());
    }


}
