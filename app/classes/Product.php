<?php
namespace App\classes;
class Product
{
    protected $products = [];
    public function getAllProduct()
    {
        return [
            0 => [
                'id'          => 1,
                'name'        => 'T-Shirt',
                'category'    => 'Man Fashion',
                'brand'       => 'Yellow',
                'price'       => '500',
                'description' => 'Good product',
                'image'       => 'a1.jpg'
            ],
            1 => [
                'id'          => 2,
                'name'        => 'Smart Watch',
                'category'    => 'Man Fashion',
                'brand'       => 'Rolex',
                'price'       => '500000',
                'description' => 'Good product',
                'image'       => 'a2.jpg'
            ],
            2 => [
                'id'          => 3,
                'name'        => 'Mask',
                'category'    => 'Man Fashion',
                'brand'       => 'Yellow',
                'price'       => '300',
                'description' => 'Good product',
                'image'       => 'a3.jpg'
            ],
        ];
    }
    public function getAllProductById($id)
    {
        $this->products = $this->getAllProduct();
        foreach ($this->products as $product)
        {
            if ($product['id'] == $id)
            {
                return $product;
            }
        }
    }
}