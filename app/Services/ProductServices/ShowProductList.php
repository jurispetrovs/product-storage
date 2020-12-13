<?php

namespace App\Services\ProductServices;

use App\Repositories\ProductRepository;

class ShowProductList
{
    private ProductRepository $productRepository;

    public function __construct()
    {
        $this->productRepository = new ProductRepository();
    }

    public function execute(): array
    {
        return $this->productRepository->getAll();
    }
}