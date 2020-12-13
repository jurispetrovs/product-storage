<?php

namespace App\Services\ProductServices;

use App\Repositories\ProductRepository;

class ImportProductService
{
    private ProductRepository $productRepository;

    public function __construct()
    {
        $this->productRepository = new ProductRepository();
    }

    public function execute(array $data)
    {
        $this->productRepository->insert($data);
    }
}