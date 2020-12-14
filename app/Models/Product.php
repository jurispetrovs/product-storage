<?php

namespace App\Models;

class Product
{
    private string $sku;
    private string $name;
    private string $price;
    private string $type;
    private ?string $size;
    private ?string $weight;
    private ?string $height;
    private ?string $width;
    private ?string $length;

    public function __construct(
        string $sku,
        string $name,
        string $price,
        string $type,
        ?string $size,
        ?string $weight,
        ?string $height,
        ?string $width,
        ?string $length
    )
    {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->type = $type;
        $this->size = $size;
        $this->weight = $weight;
        $this->height = $height;
        $this->width = $width;
        $this->length = $length;
    }

    public function sku(): string
    {
        return $this->sku;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function price(): string
    {
        return number_format(($this->price / 100), 2);
    }

    public function type(): string
    {
        return $this->type;
    }

    public function size(): ?string
    {
        return number_format(($this->size / 100), 2);
    }

    public function weight(): ?string
    {
        return number_format(($this->weight / 100), 2);
    }

    public function height(): ?string
    {
        return number_format(($this->height / 100), 2);
    }

    public function width(): ?string
    {
        return number_format(($this->width / 100), 2);
    }

    public function length(): ?string
    {
        return number_format(($this->length / 100), 2);
    }

    public static function create(array $data): self
    {
        return new self(
            $data['sku'],
            $data['name'],
            $data['price'],
            $data['type'],
            $data['size'],
            $data['weight'],
            $data['height'],
            $data['width'],
            $data['length']
        );
    }
}