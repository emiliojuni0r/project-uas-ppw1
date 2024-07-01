CREATE TABLE Customer (
    customer_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20),
    address VARCHAR(255),
    password VARCHAR(100) NOT NULL
);

CREATE TABLE Category (
    category_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL
);

CREATE TABLE Brand (
    brand_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL
);

CREATE TABLE Product (
    product_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    price DECIMAL(10, 2) NOT NULL,
    stock INT NOT NULL,
    category_id INT,
    brand_id INT,
    image VARCHAR(255),
    FOREIGN KEY (category_id) REFERENCES Category(category_id),
    FOREIGN KEY (brand_id) REFERENCES Brand(brand_id)
);

CREATE TABLE `Order` (
    order_id INT AUTO_INCREMENT PRIMARY KEY,
    customer_id INT,
    order_date DATE NOT NULL,
    total_amount DECIMAL(10, 2) NOT NULL,
    status VARCHAR(100) NOT NULL,
    FOREIGN KEY (customer_id) REFERENCES Customer(customer_id)
);

CREATE TABLE Order_Detail (
    order_detail_id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT,
    product_id INT,
    quantity INT NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (order_id) REFERENCES `Order`(order_id),
    FOREIGN KEY (product_id) REFERENCES Product(product_id)
);
-- //////////////////////////////////////////////////////////////////////
-- coba insert brand
INSERT INTO Brand (name) VALUES 
('ardiles'),
('ortuseight'),
('ballerbro'),
('anta'),
('nike'),
('adidas'),
('mizuno'),
('Puma');

-- SELECT * FROM Brand;
-- DELETE FROM Brand WHERE brand_id > 7;

-- coba insert category 
INSERT INTO Category (name) VALUES 
('Basketball'),
('Football'),
('Volley'),
('Running');

-- SELECT * FROM Category;
-- coba insert product
INSERT INTO Product (name, description, price, stock, category_id, brand_id, image) 
VALUES (
    'Anta kyrie 1', 
    'Brand New In Box <br>
    Brand : Anta <br>
    color : Purple (artist on court colorway) <br>
    Upper Material : Lether + Textile TPU + Carbon <br>
    100% Original
    ',
    124.99, 
    20, 
    1, 
    4, 
    'img/products/product1_kyrie.jpg'
);
INSERT INTO Product (name, description, price, stock, category_id, brand_id, image) 
VALUES (
    'Ballerbro RX7', 
    'Local Product <br>
	 Size : 7 <br>
	 Bladder : Butyl <br>
     Material : Rubber <br>
     Suitable for playing outdoors <br>
    ',
    10.37, 
    57, 
    1, 
    3, 
    'img/products/product3_BBRX7.jpg'
);
INSERT INTO Product (name, description, price, stock, category_id, brand_id, image) 
VALUES (
    'Ardiles AD 1K', 
    'Material : Breathable mesh Upper <br>
    UltraGrip Outsole <br>
    PowerShock+ Insole <br>
    Megatonic Tech <br>
    High Density Weaving Tape <br>
    ',
    37.57, 
    5, 
    1, 
    1, 
    'img/products/product2_ad1k.jpg'
);
INSERT INTO Product (name, description, price, stock, category_id, brand_id, image) 
VALUES (
    'Nike Mercurial Superfly IV', 
    'Brand : nike <br>
    upper material : flyknit <br>
    Carbon fibre plate <br>
    Flywire cables <br>
    light weight <br>
    ',
    150.00, 
    3, 
    2, 
    5, 
    'img/products/product4_mercurial.png'
);
INSERT INTO Product (name, description, price, stock, category_id, brand_id, image) 
VALUES (
    'Ortuseight Insignia FG', 
    'Brand : ortuseight <br>
    Color : Black/White/Cyan <br>
    Upper : Sythentic <br>
    Outsole : TPU <br>
    Weight : +/- 173 gram <br>
    Brand new in box <br>
    ',
    14.74, 
    30, 
    2, 
    2, 
    'img/products/product5_insignia.jpg'
);
INSERT INTO Product (name, description, price, stock, category_id, brand_id, image) 
VALUES (
    'Jersey Manchester United Home 23/24', 
    'Brand : Adidas <br>
    Color : red <br>
    Crewneck rib <br>
    Slim fit <br>
    100% recycled polyester <br>
    AEROREADY <br>
    ',
    55.52, 
    17, 
    2, 
    6, 
    'img/products/product6_jerseyfootball.jpg'
);
INSERT INTO Product (product_id,name, description, price, stock, category_id, brand_id, image) 
VALUES (7,
    'Jersey Borussia Dortmund Home 24/25', 
    'Brand : Puma <br>
    Color : black/yellow <br>
    DRYCELL SWEAT-WICKING TECHNOLOGY <br>
    100% RECYCLED POLYESTER <br>
    OFFICIAL LICENSED MERCHANDISE <br>
    ',
    60.52, 
    11, 
    2, 
    8, 
    'img/products/product7_jerseyfootball2.png'
);
INSERT INTO Product (name, description, price, stock, category_id, brand_id, image) 
VALUES (
    'Mizuno Wave Momentum 2', 
    'Brand : Mizuno <br>
    Color : white/blue <br>
    100% Original <br>
    DynamotionFit <br>
    XG Rubber <br>
    Mizuno Intercool <br>
    Durashield <br>
    Removable Insock <br>
    Air Mesh <br>
    ',
    88.49, 
    12, 
    3, 
    7, 
    'img/products/product8_mizunowave.jpg'
);
INSERT INTO Product (name, description, price, stock, category_id, brand_id, image) 
VALUES (
    'Mizuno Volleyball Ball', 
    'Brand : Mizuno <br>
    Color : white <br>
    Volleyball Ball <br>
    100% Original <br>
    ',
    30.23, 
    30, 
    3, 
    7, 
    'img/products/product9_mizunoball.jpg'
);
INSERT INTO Product (name, description, price, stock, category_id, brand_id, image) 
VALUES (
    'Mizuno T10 Plus volleyball Kneepad', 
    'Brand : Mizuno <br>
    Color : Black <br>
    Knee Pad <br>
    100% Original <br>
    ',
    20.99, 
    25, 
    3, 
    7, 
    'img/products/product10_mizunokneepad.png'
);
INSERT INTO Product (name, description, price, stock, category_id, brand_id, image) 
VALUES (
    'Ardiles Nfinity Raiton', 
    'Brand : Ardiles <br>
    Color : orange/white/black <br>
    Raiton speed <br>
    Neo foam+ <br>
    100% Original <br>
    Brand new in Box <br>
    ',
    35.72, 
    18, 
    4, 
    1, 
    'img/products/product11_nfinity.jpg'
);
INSERT INTO Product (name, description, price, stock, category_id, brand_id, image) 
VALUES (
    'Ortuseight Phyton', 
    'Brand : Ortuseight <br>
    Color Black/grey/white <br>
    Upper material : Sythentic <br>
    Outsole : IP <br>
    Weight : +/- 192 gram <br>
    100% Original <br>
    Brand new in Box <br>
    ',
    18.23, 
    21, 
    4, 
    2, 
    'img/products/product12_ortuseightphyton.jpg'
);
INSERT INTO Product (name, description, price, stock, category_id, brand_id, image) 
VALUES (
    'Adidas Running Gear Bottle Bag', 
    'Brand : Adidas <br>
    Dimensions: 39.5 cm x 15 cm x 6.5 cm <br>
    colour: Black <br>
    Adjustable waist strap with buckle closure <br>
    Side stretch pocket with zip closure <br>
    Tie cord closure on top of bottle holder <br>
    100% recycled polyester plain weave <br>
    ',
    35.00, 
    18, 
    4, 
    6, 
    'img/products/product13_bottlebag.jpeg'
);
INSERT INTO Product (name, description, price, stock, category_id, brand_id, image) 
VALUES (
    'Mizuno Morelia Neo IV Pro FG', 
    'Brand : Mizuno <br>
    Color : White/Radiant Red/Hot Coral <br>
    Made with premium materials <br>
    lightweight <br>
    K-leather <br>
    ZeroGlide Lite sockline <br>
    FG soleplate <br>
    Flat outsole (TPU resin) <br>
    Weigt : +/- 240 gram <br>
    100% Original <br>
    Brand new in Box <br>
    ',
    80.00, 
    14, 
    2, 
    7, 
    'img/products/product14_mizunomorelio.png'
);
INSERT INTO Product (name, description, price, stock, category_id, brand_id, image) 
VALUES (
    'Ardiles AD2 Cyclone', 
    'Brand : Ardiles <br>
    Color : Blue/yellow <br>
    Upper : Breathable mesh <br>
    Rapid Technology <br>
    Velcro strap <br>
    UltraGrip Outsole <br>
    100% Original <br>
    Brand new in box  <br>
    ',
    33.44, 
    40, 
    1, 
    1, 
    'img/products/product15_ardilesad2.jpg'
);

-- SELECT * FROM product;


