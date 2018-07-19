<?php 
	require_once 'controllers/CategoriesController.php';
	require_once 'controllers/CustomersController.php';
	require_once 'controllers/ProductsController.php';
	require_once 'controllers/SalesController.php';
	require_once 'controllers/UsersController.php';
	require_once 'controllers/TemplateController.php';

	require 'models/Categories.php';
	require 'models/Customers.php';
	require 'models/Products.php';
	require 'models/Sales.php';
	require 'models/Users.php';

	$template = new TemplateController();
	$template -> ctrTemplate(); 
