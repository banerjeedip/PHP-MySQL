# PHP-MySQL
Creating a user form for a dropdown menu and connecting it with a database 
Setup a database using the information below.
--
-- Table structure for table `test_assign_option_product`
--

CREATE TABLE IF NOT EXISTS `test_assign_option_product` (
  `option_id` bigint(20) NOT NULL default '0',
  `product_id` bigint(20) NOT NULL default '0'
);

--
-- Dumping data for table `test_assign_option_product`
--

INSERT INTO `test_assign_option_product` VALUES(1, 1);
INSERT INTO `test_assign_option_product` VALUES(1, 2);
INSERT INTO `test_assign_option_product` VALUES(2, 3);
INSERT INTO `test_assign_option_product` VALUES(2, 4);
INSERT INTO `test_assign_option_product` VALUES(3, 1);
INSERT INTO `test_assign_option_product` VALUES(5, 1);
INSERT INTO `test_assign_option_product` VALUES(3, 2);
INSERT INTO `test_assign_option_product` VALUES(5, 2);
INSERT INTO `test_assign_option_product` VALUES(1, 5);
INSERT INTO `test_assign_option_product` VALUES(6, 5);
INSERT INTO `test_assign_option_product` VALUES(2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `test_categories`
--

CREATE TABLE IF NOT EXISTS `test_categories` (
  `cat_id` bigint(20) NOT NULL auto_increment,
  `cat_name` varchar(255) NOT NULL default '',
  `cat_parent_id` bigint(20) default NULL,
  PRIMARY KEY  (`cat_id`)
);

--
-- Dumping data for table `test_categories`
--

INSERT INTO `test_categories` VALUES(1, 'All Cars', NULL);
INSERT INTO `test_categories` VALUES(2, 'Domestic Cars', 1);
INSERT INTO `test_categories` VALUES(3, 'Import Cars', 1);
INSERT INTO `test_categories` VALUES(4, 'Luxury Import Cars', 3);
INSERT INTO `test_categories` VALUES(5, 'Budget Import Cars', 3);
INSERT INTO `test_categories` VALUES(6, 'Luxury Domestic', 2);
INSERT INTO `test_categories` VALUES(7, 'Budget Domestic', 2);
INSERT INTO `test_categories` VALUES(8, 'German Luxury Cars', 4);

-- --------------------------------------------------------

--
-- Table structure for table `test_options`
--

CREATE TABLE IF NOT EXISTS `test_options` (
  `option_id` bigint(20) NOT NULL auto_increment,
  `option_name` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`option_id`)
);

--
-- Dumping data for table `test_options`
--

INSERT INTO `test_options` VALUES(1, 'Green');
INSERT INTO `test_options` VALUES(2, 'Blue');
INSERT INTO `test_options` VALUES(3, 'Black');
INSERT INTO `test_options` VALUES(4, 'Yellow');
INSERT INTO `test_options` VALUES(5, 'Brown');
INSERT INTO `test_options` VALUES(6, 'Silver');

-- --------------------------------------------------------

--
-- Table structure for table `test_products`
--

CREATE TABLE IF NOT EXISTS `test_products` (
  `product_id` bigint(20) NOT NULL auto_increment,
  `product_name` varchar(255) NOT NULL default '',
  `cat_id` bigint(20) NOT NULL default '0',
  PRIMARY KEY  (`product_id`)
);

--
-- Dumping data for table `test_products`
--

INSERT INTO `test_products` VALUES(1, 'Chevy', 7);
INSERT INTO `test_products` VALUES(2, 'BMW', 8);
INSERT INTO `test_products` VALUES(3, 'Ford', 7);
INSERT INTO `test_products` VALUES(4, 'Mercedes', 8);
INSERT INTO `test_products` VALUES(5, 'Honda', 5);
INSERT INTO `test_products` VALUES(6, 'Toyota', 5);
INSERT INTO `test_products` VALUES(7, 'Lexus', 4);
INSERT INTO `test_products` VALUES(8, 'Acura', 4);
INSERT INTO `test_products` VALUES(9, 'Chrysler', 1);
INSERT INTO `test_products` VALUES(10, 'Cadillac', 6);

Complete all tasks below.
3. Upload the PHP files you created using the Browse button below and click "FINISH TEST" at the bottom of this page before the 90 minute limit to complete this exam.










Test Tasks:
1. Given the following database tables:

test_products
product_id - product id, primary key
product_name - name of the product
cat_id - product category id - foreign key from test_categories table

test_categories
cat_id - category id, primary key
cat_name - name of the category
cat_parent_id - id of category's parent category (1:1 Relationship)
Create a PHP script that will display a form with a SELECT (dropdown) field populated with all products in the `test_products` table and a SUBMIT button. Allow the user to select a product and submit the form. After the form is submitted, display a hierarchy of categories in which the selected product is located.
For example: If the user selects "Honda" and submits the form, the system should display:
"All Cars -> Import Cars -> Budget Import Cars -> Honda"
This should be done DYNAMICALLY based on the data found in `test_products` and `test_categories`. The category path has to be generated in PHP based on the data in the database. 
2. Given two additional database tables:

test_options
option_id - product option id, primary key
option_name - name of the option

test_assign_product_option
option_id - id of product option - foreign key from test_options
product_id - id of product - foreign key from test_products
Create a PHP sript that will display a list of ALL products THAT HAVE AT LEAST ONE option. Next to the product name, display its parent category and its options. The options should be displayed in a SELECT drop down box.
For example, a listing for Honda would show:
Honda (Budget Import Cars)
[ -- SELECT OPTION -- ]
[ Green ]
[ Blue ]
[ Silver ] 
File 1 (required): 
File 2 (optional): 
File 3 (optional): 
File 4 (optional): 
File 5 (optional): 

