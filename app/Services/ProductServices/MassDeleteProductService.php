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

    public function execute()
    {
        $this->productRepository->massDelete();
    }
}
