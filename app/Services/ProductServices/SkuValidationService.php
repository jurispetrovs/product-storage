<?php

namespace App\Services\ProductServices;

use App\Repositories\ProductRepository;

class SkuValidationService
{
    private ProductRepository $productRepository;

    public function __construct()
    {
        $this->productRepository = new ProductRepository();
    }

    public function execute(string $sku): string
    {
        $response = $this->productRepository->getBySku($sku);

        if ($response) {
            return "false";
        }

        return "true";
    }
}