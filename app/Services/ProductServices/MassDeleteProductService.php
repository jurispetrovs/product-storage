<?php

namespace App\Services\ProductServices;

use App\Repositories\ProductRepository;

class MassDeleteProductService
{
    private ProductRepository $productRepository;

    public function __construct()
    {
        $this->productRepository = new ProductRepository();
    }

    public function execute(array $products)
    {
        foreach ($products as $key => $product)
        {
            $this->productRepository->deleteBySky($key);
        }
    }
}
