/* Cafe Table */
CREATE TABLE cafes
(cafeId INT(4) NOT NULL AUTO_INCREMENT,
cafeName VARCHAR(40) NOT NULL,
isActive BIT(1) DEFAULT 1 NOT NULL,
PRIMARY KEY (cafeId));

/* Category Table */
CREATE TABLE categories
(categoryId INT(4) NOT NULL AUTO_INCREMENT,
categoryName VARCHAR(40) NOT NULL,
isActive BIT(1) DEFAULT 1 NOT NULL,
PRIMARY KEY (categoryId));

/* Item Table */
CREATE TABLE items
(itemId INT(4) NOT NULL AUTO_INCREMENT
, itemName VARCHAR(40) NOT NULL
, description VARCHAR(100)
, price FLOAT(6,2)
, picture VARCHAR(100)
, isActive BIT(1) DEFAULT 1 NOT NULL
, isSpecial BIT(1) DEFAULT 0 NOT NULL
, cafeId INT(4) NOT NULL
, categoryId INT(4) NOT NULL
/* , cafeItemId INT(13) NOT NULL */
, PRIMARY KEY (itemId)
, FOREIGN KEY (cafeId) REFERENCES cafes (cafeId)
, FOREIGN KEY (categoryId) REFERENCES categories (categoryId)
/*, FOREIGN KEY (CIID) REFERENCES CI (CIID) */
);

/* CafeItem Table */
CREATE TABLE cafeItems
(cafeItemId INT(4) NOT NULL AUTO_INCREMENT,
itemId INT(4) NOT NULL,
cafeId INT(4) NOT NULL,
PRIMARY KEY (cafeItemId));

/* extra tables*/
CREATE TABLE information
(infoId INT(4) NOT NULL AUTO_INCREMENT
, detail VARCHAR(1000)
, PRIMARY KEY (infoId)
);
