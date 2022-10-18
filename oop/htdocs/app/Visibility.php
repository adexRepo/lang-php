<?php

/* -------------------------------------------------------------------------- */
/*                                 VISIBILITY                                 */
/* -------------------------------------------------------------------------- */

/*
 * Visibility / Access modifier adalah kemampuan properties, function dan constant
 * dapat diakses dari mana saja.
 * Secara default, properties, function dan constant yang kita buat di dalam class
 * bisa diakses dari mana saja, atau artinya dia adalah public
 * Selain public, masih ada beberapa visibility lainnya
 * 
 * Secara default kata kunci var untuk properties adalah sifatnya public
 * 
 * public   : Class (Y) | Subclass(Y) | World (Y)
 * protected: Class (Y) | Subclass(Y) | World (N)
 * private  : Class (Y) | Subclass(N) | World (N)
 */


require_once '../data/Product.php';

 $product = new Product("Apple",10000);
 $productDummy = new ProductDummy("Apple",10000);

//  echo $product->name . PHP_EOL; // err : Cannot access private property Product::$name
//  echo $product->price . PHP_EOL; // err : Cannot access private property Product::$name

 echo $product->getName() . PHP_EOL; // Apple
 echo $product->getPrice() . PHP_EOL; // 10000


 $productDummy->info(); // Product Dummy
