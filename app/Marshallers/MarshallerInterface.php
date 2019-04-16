<?php

namespace Cb\Marshallers;

use Exception;

/**
 * Convert given data to expected data structure
 * @package Cb\Marshallers
 */
interface MarshallerInterface
{
    /**
     * Convert given data to expected data structure
     * @param mixed $data
     * @return mixed
     * @throws Exception
     */
    public function marshall($data);
}
