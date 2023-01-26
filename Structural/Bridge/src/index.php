<?php

require __DIR__ . '/../vendor/autoload.php';

use Funlife\Bridge\HTMLRenderer;
use Funlife\Bridge\JsonRenderer;
use Funlife\Bridge\Page;
use Funlife\Bridge\Product;
use Funlife\Bridge\ProductPage;
use Funlife\Bridge\SimplePage;

function clientCode(Page $page)
{
    echo $page->view();
}

$HTMLRenderer = new HTMLRenderer();
$JSONRenderer = new JsonRenderer();

$page = new SimplePage($HTMLRenderer, "Home", "Welcome to our website!");
echo "HTML view of a simple content page:\n";
clientCode($page);
echo "\n\n";

/**
 * The Abstraction can change the linked Implementation at runtime if needed.
 */
$page->changeRenderer($JSONRenderer);
echo "JSON view of a simple content page, rendered with the same client code:\n";
clientCode($page);
echo "\n\n";


$product = new Product(
    "123",
    "Star Wars, episode1",
    "A long time ago in a galaxy far, far away...",
    "/images/star-wars.jpeg",
    39.95
);

$page = new ProductPage($HTMLRenderer, $product);
echo "HTML view of a product page, same client code:\n";
clientCode($page);
echo "\n\n";

$page->changeRenderer($JSONRenderer);
echo "JSON view of a simple content page, with the same client code:\n";
clientCode($page);
