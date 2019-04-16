<?php

namespace Cb\Marshallers;

use Assert\Assertion;
use Cb\PricePersistenceContracts\Models\Price;
use Exception;

/**
 * Convert Price collection to an Array
 * @package Cb\Marshallers
 */
class PriceCollectionToArrayMarshaller implements MarshallerInterface
{
    /**
     * @inheritdoc
     */
    public function marshall($data)
    {
        $pricesResult = [];

        try {
            Assertion::allIsInstanceOf($data, Price::class);
            
            /** @var Price $price */
            foreach ($data as $price) {
                $pricesResult[] = [
                    'id' => $price->getId(),
                    'startDate' => $price->getStartDate(),
                    'endDate' => $price->getEndDate(),
                    'price' => $price->getPrice(),
                ];
            }
            return $pricesResult;
        } catch (Exception $exception) {
            // TODO: log error and return default exception
            $errorCode = 500;
            throw new Exception('Internal server error', $errorCode, $exception);
        }
    }
}
