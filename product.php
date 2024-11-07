<?php

require_once 'namespace_store.php';
require_once 'namespace_warehouse.php';

use Store\Product as StoreProduct;
use Warehouse\Product as WarehouseProduct;

$storeProduct = new StoreProduct;
$warehouseProduct = new WarehouseProduct;

echo $storeProduct->getInfo();
echo "<br>";
echo $warehouseProduct->getInfo();

?>