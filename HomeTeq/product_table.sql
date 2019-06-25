USE hometeq_db ;
create table product
(
 prodId INT(4) NOT NULL AUTO_INCREMENT PRIMARY KEY,
 prodName  varchar(30) NOT NULL,
 prodPicNameSmall varchar(100) NOT NULL,
 prodPicNameLarge  varchar(100) NOT NULL,
 prodDescripShort  varchar(1000) NULL,
 prodDescripLong  varchar(3000) NULL,
 prodPrice DECIMAL(6,2) NOT NULL,
 prodQuantity INT(4) NOT NULL


)ENGINE = InnoDB;
 select * from product;
 
INSERT INTO Product (prodDescripLong,prodDescripShort,prodName,prodPicNameLarge,prodPicNameSmall,prodPrice,prodQuantity )
VALUES ('John Lewis & Partners Eliza Leather Mini Barrel Shoulder Bag, Yellow','Yellow hand bag','Womens hand bag','Leather Mini Barrel Shoulder Bag','Yellow hand bag',75,100);

INSERT INTO Product (prodDescripLong,prodDescripShort,prodName,prodPicNameLarge,prodPicNameSmall,prodPrice,prodQuantity )
VALUES ('Dior Hypnotic Poison Eau de Toilette Roller-Pearl, 20ml','Dior Hypnotic Poison Eau de Toilette Roller-Pearl ','Womens Fragrance','Dior perfume for womens','Womens Fragrance',33,250);

INSERT INTO Product (prodDescripLong,prodDescripShort,prodName,prodPicNameLarge,prodPicNameSmall,prodPrice,prodQuantity )
VALUES('An elegant facet teardrop pendant, complete with enhanced edges hangs on a delicate sterling silver chain','Birthstone Pendant Necklace','Kit Heath Personalised Sterling Silver Pebble and Tag Birthstone Pendant Necklace','Pendant Necklace',45,300);

INSERT INTO Product (prodDescripLong,prodDescripShort,prodName,prodPicNameLarge,prodPicNameSmall,prodPrice,prodQuantity )
VALUES('cute adjustable fabric bracelet from Merci Maman features','Women Bracelet',' Liberty Bracelet','Sterling Silver Angel Liberty Bracelet','Bracelet',67,600);