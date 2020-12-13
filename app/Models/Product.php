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

    public function getSku(): string
    {
        return $this->sku;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): string
    {
        return number_format(($this->price / 100), 2);
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getSize(): ?string
    {
        return $this->size;
    }

    public function getWeight(): ?string
    {
        return $this->weight;
    }

    public function getHeight(): ?string
    {
        return $this->height;
    }

    public function getLength(): ?string
    {
        return $this->length;
    }

    public function getWidth(): ?string
    {
        return $this->width;
    }

    public static function create(array $data): self
    {
        return new self(
            $data['sku'],
            $data['name'],
            $data['type'],
            $data['price'],
            $data['size'],
            $data['weight'],
            $data['height'],
            $data['width'],
            $data['length']
        );
    }
}