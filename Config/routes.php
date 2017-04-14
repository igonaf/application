<?php
return [
    "home" => [
        "pattern" => "/",
        "method" => "GET",
        "controller" => "Index",
        "action" => "index"
    ],
    "product_list" => [
        "pattern" => "/products",
        "method" => "GET",
        "controller" => "Products",
        "action" => "getProducts"
    ],
    "single_product" => [
        "pattern" => "/product/{id}",
        "method" => "GET",
        "controller" => "Products",
        "action" => "getProduct",
        "params" => [
            "id" => "\d+",
        ]
    ],
    "create_product" => [
        "pattern" => "/product",
        "method" => "POST",
        "controller" => "Products",
        "action" => "createProduct"
    ],
    "delete_product" => [
        "pattern" => "/product/{id}",
        "method" => "DELETE",
        "controller" => "Products",
        "action" => "deleteProduct",
        "params" => [
            "id" => "\d+",
        ]
    ],
    "update_product" => [
        "pattern" => "/product/{id}",
        "method" => "PUT",
        "controller" => "Products",
        "action" => "updateProduct",
        "params" => [
            "id" => "\d+",
        ]
    ]
];