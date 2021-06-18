<?php
//voor iedere table loader nodig, tenzij je die niet gaat gebruiken
class ProductLoader
{

    private array $products;



    public function __construct()
    {
        // cant use Product parameters here right?
        $connection = Database::openConnection();
        $handle = $connection->prepare('SELECT * FROM product');
        $handle->execute();
        $selectedProducts = $handle->fetchAll();

       
        foreach ($selectedProducts as $product) {
  
            $this->products = (new Product($product['id'], $product['name'], $product['price']));
            //tijdelijke variable $products
        }
    }

    public function getAllProducts() {
        return $this->products;
    }


    public function getProductById($id) {
   //als id die we ingeven gelijk is aan productID, dan willen we die row returnen  \ $id geven we in, zoeken we op
   //nu krijgen we 1 product terug, als we zouden zoeken op naam of prijs zouden we duplicates kunnen krijgen
       foreach( $this->products as $product ) {
           if ($product->getProductId() === $id ){
              return $product; 
               
           }
       }
    }
}
