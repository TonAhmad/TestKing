<?php
require_once 'store.php';
require_once 'warehouse.php';

use Store\Product as StoreProduct;
use Warehouse\Product as WarehouseProduct;

$storeProduct = new StoreProduct();
echo $storeProduct->getInfo();
echo "<br>";

$warehouseProduct = new WarehouseProduct();
echo $warehouseProduct->getInfo();
