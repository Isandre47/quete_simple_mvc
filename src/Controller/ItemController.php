<?php

namespace Controller;

use Model\ItemManager;

class ItemController{
    public function index(){
        $itemsManager = new ItemManager();
        $items = $itemsManager->selectAllItems();
        require __DIR__ . '/../View/item.php';
    }
}
?>