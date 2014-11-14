<?php
require_once("HelperFunctions.php");

class TestOfProductRoutes extends HelperFunctions {

    function testGetProductsByUser() {
        $response = parent::callGet("/products/1/en/");

        $this->assertTrue($response->status == 200);
        $this->assertTrue(count($response->data) > 0);
    }

    function testGetProductsAll() {
        $response = parent::callGet("/products/en/");

        $this->assertTrue($response->status == 200);
        $this->assertTrue(count($response->data) > 0);
    }

}
?>