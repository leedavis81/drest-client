<?php
namespace DrestClient;

use DrestCommon\Representation\AbstractRepresentation;
use DrestCommon\Response\Response as DrestResponse;

class Response extends DrestResponse
{
    /**
     * Representation object
     * @var \DrestCommon\Representation\AbstractRepresentation
     */
    protected $representation;

    /**
     * Create an instance of client response and wrap the representation object
     */
    public function __construct(AbstractRepresentation $representation, $response_object = null)
    {
        $this->representation = $representation;

        parent::__construct($response_object);
    }

    /**
     * Get the responded representation object
     * @return \DrestCommon\Representation\AbstractRepresentation
     */
    public function getRepresentation()
    {
        return $this->representation;
    }
}
