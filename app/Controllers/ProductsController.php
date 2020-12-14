<?php

namespace App\Controllers;

use App\Services\ProductServices\ImportProductService;
use App\Services\ProductServices\MassDeleteProductService;
use App\Services\ProductServices\ShowProductList;
use App\Services\ProductServices\SkuValidationService;

class ProductsController
{
    public function index()
    {
        $products = (new ShowProductList())->execute();

        return require_once __DIR__ . '/../../resources/views/ProductListView.php';
    }

    public function show()
    {
        return require_once __DIR__ . '/../../resources/views/CreateProductView.php';
    }

    public function create()
    {
        $data = $_POST;

        (new ImportProductService())->execute($data);

        header('Location: /product/list');
    }

    public function delete()
    {
        if(isset($_POST['products'])) {
            (new MassDeleteProductService())->execute($_POST['products']);
        }

        header('Location: /product/list');
    }

    public function skuValidation()
    {
        $sku = $_POST['sku'];

        echo (new SkuValidationService())->execute($sku);
    }
}
