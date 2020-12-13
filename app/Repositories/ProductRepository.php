<?php

namespace App\Repositories;

use App\Bootstrap\Database;
use App\Models\Product;

class ProductRepository
{
    private Database $connection;

    public function __construct()
    {
        $this->connection = new Database();
    }

    public function getAll()
    {
        $data = $this->connection
            ->query()
            ->select('*')
            ->from('products')
            ->orderBy('id', 'ASC')
            ->execute()
            ->fetchAllAssociative();

        $products = [];

        foreach ($data as $product) {
            $products[] = Product::create($product);
        }

        return $products;
    }

    public function getBySku(string $sku)
    {
        return $this->connection
            ->query()
            ->select('*')
            ->from('products')
            ->where('sku = :sku')
            ->setParameter('sku', $sku)
            ->execute()
            ->fetchAssociative();
    }

    public function insert(array $data)
    {
        $this->connection
            ->query()
            ->insert('products')
            ->values([
                'sku' => ':sku',
                'name' => ':name',
                'price' => ':price',
                'type' => ':type',
                'size' => ':size',
                'weight' => ':weight',
                'height' => ':height',
                'width' => ':width',
                'length' => ':length'
            ])
            ->setParameters([
                'sku' => $data['sku'],
                'name' => $data['name'],
                'price' => (int)$data['price'],
                'type' => $data['type'],
                'size' => (int)$data['size'],
                'weight' => (int)$data['weight'],
                'height' => (int)$data['height'],
                'width' => (int)$data['width'],
                'length' => (int)$data['length']
            ])
            ->execute();
    }

    public function massDelete()
    {
        $this->connection
            ->query()
            ->delete('products')
            ->execute();
    }
}
