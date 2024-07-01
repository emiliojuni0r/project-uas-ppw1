<!-- connect -->
<?php
include 'db_connect.php';

// Get category filter from URL if exists
$category_id = isset($_GET['category_id']) ? intval($_GET['category_id']) : 0;

if ($category_id > 0) {
    // Join Product and Category tables and filter by category_id
    $sql = "SELECT p.*, c.name AS category_name
            FROM product p 
            JOIN category c ON p.category_id = c.category_id 
            WHERE p.category_id = $category_id";
} else {
    // show all product (the default one)
    $sql = "SELECT *
            FROM Product";
    // JOIN Category c ON p.category_id = c.category_id";
}