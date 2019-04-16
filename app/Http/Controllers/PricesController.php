<?php

namespace Cb\Http\Controllers;

use Cb\Marshallers\PriceCollectionToArrayMarshaller;
use Cb\RestFramework\Http\Request;
use Cb\RestFramework\ServiceManager\FactoryInterface;
use Cb\Services\Prices\PricesGetAllInterface;
use Cb\Services\Prices\PricesGetAllServiceFactory;
use Cb\PricePersistenceContracts\Models\Price;
use Exception;

/**
 * Prices resource REST API controller to handler HTTP requests
 */
class PricesController
{
    /**
     * Get all available prices
     */
    public function getAll()
    {
        try {
            $marshaller = new PriceCollectionToArrayMarshaller();
            /** @var FactoryInterface $priceGetAllServiceFactory */
            $priceGetAllServiceFactory = new PricesGetAllServiceFactory();
            /** @var PricesGetAllInterface $priceGetAllService */
            $priceGetAllService = $priceGetAllServiceFactory->createService();
            /** @var Price[] $priceCollection */
            $priceCollection = $priceGetAllService->getAll();
            /** @var mixed[] $priceList */
            $priceList = $marshaller->marshall($priceCollection);
            $response = [
                'data' => $priceList,
            ];
        } catch (Exception $exception) {
            $response = $this->getErrorResponse($exception);
        }

        $this->setHeaders();
        // TODO: this response shouold be part of a separate JsonResponse class
        echo json_encode($response);
    }

    /**
     * Get a single Price
     * @param Request $request
     */
    public function get(Request $request)
    {
        echo 'GET method';
    }

    /**
     * Create a Price
     * @param Request $request
     */
    public function create(Request $request)
    {
        echo 'CREATE method';
    }

    /**
     * Update a Price
     * @param Request $request
     */
    public function update(Request $request)
    {
        echo 'UPDATE method';
    }

    /**
     * Delete a Price
     * @param Request $request
     */
    public function delete(Request $request)
    {
        echo 'DELETE method';
    }

    /**
     * Set response headers
     * TODO: This should be part of Framework Response class when it is created
     */
    private function setHeaders()
    {
        header('Content-Type: application/json');
    }

    /**
     * TODO: This should be on Framework ErrorResponse handler when it is created
     * @param Exception $exception
     * @return mixed[]
     */
    private function getErrorResponse(Exception $exception)
    {
        return [
            'error' => [
                'status' => $exception->getCode(),
                'detail' => $exception->getMessage(),
            ],
        ];
    }
}
