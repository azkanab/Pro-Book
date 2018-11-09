-- MySQL dump 10.16  Distrib 10.2.14-MariaDB, for osx10.13 (x86_64)
--
-- Host: localhost    Database: bookStore
-- ------------------------------------------------------
-- Server version	5.7.21

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Book`
--

DROP TABLE IF EXISTS `Book`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Book` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `book_title` text,
  `book_description` text,
  `author` text,
  `rating` float DEFAULT NULL,
  `link_picture` text,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Book`
--

LOCK TABLES `Book` WRITE;
/*!40000 ALTER TABLE `Book` DISABLE KEYS */;
INSERT INTO `Book` VALUES (1,'To All the Boys I\'ve Loved Before','What if all the crushes you ever had found out how you felt about them…all at once?  Sixteen-year-old Lara Jean Song keeps her love letters in a hatbox her mother gave her. They are not love letters that anyone else wrote for her, these are ones she has written. One for every boy she has ever loved--five in all. When she writes, she pours out her heart and soul and says all the things she would never say in real life, because her letters are for her eyes only. Until the day her secret letters are mailed, and suddenly, Lara Jeans love life goes from imaginary to out of control','Jenny Han',3.16667,'https://upload.wikimedia.org/wikipedia/en/b/b8/To_All_the_Boys_I%27ve_Loved_Before_poster.jpg'),(2,'Crazy Rich Asians','Ketika Rachel Chu, dosen ekonomi keturunan Cina, setuju untuk pergi ke Singapura bersama kekasihnya, Nick, ia membayangkan rumah sederhana, jalan-jalan keliling pulau, dan menghabiskan waktu bersama pria yang mungkin akan menikah dengannya itu. Ia tidak tahu bahwa rumah keluarga Nick bagai istana, bahwa ia akan lebih sering naik pesawat pribadi daripada mobil, dan dengan pria incaran se-Asia dalam pelukannya, Rachel seperti dimusuhi semua wanita. Di dunia yang kemewahannya tak pernah terbayangkan oleh Rachel itu, ia bertemu Astrid, si It Girl Singapura; Eddie, yang keluarganya jadi penghuni tetap majalah-majalah sosialita Hong Kong; dan Eleanor, ibu Nick, yang punya pendapat sangat kuat tentang siapa yang boleh—dan tidak boleh—dinikahi putranya. Dengan latar berbagai tempat paling eksklusif di Timur Jauh—dari penthouse-penthouse mewah Shanghai hingga pulau-pulau pribadi di Laut Cina Selatan—Crazy Rich Asians bercerita tentang kalangan jet set Asia, dengan sempurna menggambarkan friksi antara golongan Orang Kaya Lama dan Orang Kaya Baru, serta antara Cina Perantauan dan Cina Daratan.','Kevin Kwan',3,'https://cdn.gramedia.com/uploads/items/9786020314433_kaya-tujuh-turunan_crazy_rich_asians.jpg'),(3,'Rich People Problems','When Nicholas Young hears that his grandmother, Su Yi, is on her deathbed, he rushes to be by her bedside—but he is not alone. The entire Shang-Young clan has convened from all corners of the globe to stake claim on their matriarchs massive fortune. With each family member vying to inherit Tyersall Park—a trophy estate on 64 prime acres in the heart of Singapore—Nicholas childhood home turns into a hotbed of speculation and sabotage. As her relatives fight over heirlooms, Astrid Leong is at the center of her own storm, desperately in love with her old sweetheart Charlie Wu, but tormented by her ex-husband—a man hell bent on destroying Astrids reputation and relationship. Meanwhile Kitty Pong, married to Chinas second richest man, billionaire Jack Bing, still feels second best next to her new step-daughter, famous fashionista Colette Bing.','Kevin Kwan',3,'https://images-na.ssl-images-amazon.com/images/I/81PUqxFx0EL.jpg'),(4,'Hai, Miiko 30!','Miiko, siswi kelas 6 SD, selalu penuh semangat!\nKehidupan Miiko selalu ramai dan penuh warna! Misalnya saat membantu Mari-chan untuk membuat komik dan mengantarnya ke kantor redaksi majalah. Kemudian juga ada hubungan cinta segitiga antara Yoshida yang menyukai Miiko dan Haruna yang menyukai Yoshida.\nBacalah dan jalani keseharian yang ceria bersama Miiko!','Eriko Ono',3,'https://cdn.gramedia.com/uploads/items/9786024287474_Hai-Miiko-30-edisi-khusus.jpg'),(5,'P.S. I Still Love You','Given the way love turned her heart in the New York Times bestselling To All The Boys I’ve Loved Before, which School Library Journal called a “lovely, lighthearted romance,” it’s no surprise that Laura Jean still has letters to write. Lara Jean didn’t expect to really fall for Peter.  She and Peter were just pretending. Except suddenly they weren’t. Now Lara Jean is more confused than ever.  When another boy from her past returns to her life, Lara Jean’s feelings for him return too. Can a girl be in love with two boys at once?  In this charming and heartfelt sequel to the New York Times bestseller To All the Boys I’ve Loved Before, we see first love through the eyes of the unforgettable Lara Jean. Love is never easy, but maybe that’s part of what makes it so amazing.','Jenny Han',5,'https://upload.wikimedia.org/wikipedia/en/thumb/4/4e/P.S._I_Still_Love_You_cover.jpg/220px-P.S._I_Still_Love_You_cover.jpg'),(6,'Paper Towns','Quentin Jacobsen has spent a lifetime loving the magnificently adventurous Margo Roth Spiegelman from afar. So when she cracks open a window and climbs back into his life–dressed like a ninja and summoning him for an ingenious campaign of revenge–he follows. After their all-nighter ends and a new day breaks, Q arrives at school to discover that Margo, always an enigma, has now become a mystery. But Q soon learns that there are clues–and they’re for him. Urged down a disconnected path, the closer he gets, the less Q sees of the girl he thought he knew.','John Green',0,'https://cdn.waterstones.com/bookjackets/large/9781/4088/9781408848180.jpg'),(7,'An Abundance of Katherines\n','When it comes to relationships, everyone has a type. Colin Singleton’s type is girls named Katherine. He has dated–and been dumped by–19 Katherines. In the wake of The K-19 Debacle, Colin–an anagram-obsessed washed-up child prodigy–heads out on a road trip with his overweight, Judge Judy- loving friend Hassan. With 10,000 dollars in his pocket and a feral hog on his trail, Colin is on a mission to prove a mathematical theorem he hopes will predict the future of any relationship (and conceivably win the girl)?','John Green',0,'http://t3.gstatic.com/images?q=tbn:ANd9GcQYBmy-eBSlElOyBnL30j2AqjRNMEJWOUIJWBRWQPiWA6mw-zUI'),(8,'Fangirl','Cath is a Simon Snow fan.\nOkay, everybody is a Simon Snow fan, but for Cath it’s something more. Fandom is life. It’s what got her and her sister, Wren, through losing their mom. It’s what kept them close.\nAnd now that she’s starting college, introverted Cath isn’t sure what’s supposed to get her through. She’s got a surly roommate with a charming, always-around boyfriend, a fiction-writing professor who thinks fanfiction is the end of the civilized world, a handsome classmate who only wants to talk about words . . . And she can’t stop worrying about her dad, who’s loving and fragile and has never really been alone.\nFor Cath, the question is: Can she do this? Can she make it without Wren holding her hand? Is she ready to start living her own life? Writing her own stories?\nAnd does she even want to move on if it means leaving Simon Snow behind?\n','Rainbow Rowell',4,'https://static1.squarespace.com/static/5504b49be4b0953c7cb8e0d4/t/55260a51e4b080e2d1bc0776/1428026872053/?format=1500w'),(9,'Geek Girl, #1','Harriet Manners knows that a cat has 32 muscles in each ear, a “jiffy” lasts 1/100th of a second, and the average person laughs 15 times per day. She knows that bats always turn left when exiting a cave and that peanuts are one of the ingredients of dynamite.\nBut she doesn’t know why nobody at school seems to like her.\nSo when Harriet is spotted by a top model agent, she grabs the chance to reinvent herself. Even if it means stealing her best friend’s dream, incurring the wrath of her arch enemy Alexa, and repeatedly humiliating herself in front of impossibly handsome model Nick. Even if it means lying to the people she loves.\nVeering from one couture disaster to the next with the help of her overly enthusiastic father and her uber-geeky stalker, Toby, Harriet begins to realise that the world of fashion doesn’t seem to like her any more than the real world did.\nAs her old life starts to fall apart, will Harriet be able to transform herself before she ruins everything?\n','Holly Smale',0,'https://images-na.ssl-images-amazon.com/images/I/51xSL-hxcLL._SX321_BO1,204,203,200_.jpg'),(10,'Eleanor and Park','Set over the course of one school year in 1986, this is the story of two star-crossed misfits-smart enough to know that first love almost never lasts, but brave and desperate enough to try. When Eleanor meets Park, you’ll remember your own first love-and just how hard it pulled you under.\n','Rainbow Rowell',0,'http://t0.gstatic.com/images?q=tbn:ANd9GcQOll9yMKu3iOPDlxFF7z4k5Cnks14z8ITUfNrNwIj1jN5jzDcw'),(11,'Looking for Alaska','Miles Halter is fascinated by famous last words–and tired of his safe life at home. He leaves for boarding school to seek what the dying poet Francois Rabelais called the “Great Perhaps.” Much awaits Miles at Culver Creek, including Alaska Young. Clever, funny, screwed-up, and dead sexy, Alaska will pull Miles into her labyrinth and catapult him into the Great Perhaps.\n','John Green',0,'https://vignette.wikia.nocookie.net/johngreen/images/1/12/Lookingforalaska.jpeg/revision/latest/scale-to-width-down/250?cb=20140516173910'),(12,'If I Stay','For seventeen-year-old Mia, surrounded by a wonderful family, friends and a gorgeous boyfriend decisions might seem tough, but they’re all about a future full of music and love, a future that’s brimming with hope.\nBut life can change in an instant.\nA cold February morning . . . a snowy road . . . and suddenly all of Mia’s choices are gone. Except one.\nAs alone as she’ll ever be, Mia must make the most difficult choice of all.\nHaunting, heartrending and ultimately life-affirming, If I Stay will make you appreciate all that you have, all that you’ve lost - and all that might be.\n','Gayle Forman',0,'http://3.bp.blogspot.com/-C2gmFcOoQxk/U8nxwSTH8OI/AAAAAAAABOA/3tiCy6H18oU/s1600/ifistay.jpg'),(13,'Me Before You','Louisa Clark is an ordinary young woman living an exceedingly ordinary life—steady boyfriend, close family—who has never been farther afield than their tiny village. She takes a badly needed job working for ex-Master of the Universe Will Traynor, who is wheelchair-bound after an accident. Will has always lived a huge life—big deals, extreme sports, worldwide travel—and now he’s pretty sure he cannot live the way he is.\n\nWill is acerbic, moody, bossy—but Lou refuses to treat him with kid gloves, and soon his happiness means more to her than she expected. When she learns that Will has shocking plans of his own, she sets out to show him that life is still worth living.\n\nA love story for this generation, Me Before You brings to life two people who couldn’t have less in common—a heartbreakingly romantic novel that asks, What do you do when making the person you love happy also means breaking your own heart?\n','Jojo Moyes',0,'https://images.gr-assets.com/books/1539892546l/17347634.jpg'),(14,'The Fault in Our Stars','Despite the tumor-shrinking medical miracle that has bought her a few years, Hazel has never been anything but terminal, her final chapter inscribed upon diagnosis. But when a gorgeous plot twist named Augustus Waters suddenly appears at Cancer Kid Support Group, Hazel’s story is about to be completely rewritten.\n','John Green',0,'https://images.gr-assets.com/books/1360206420l/11870085.jpg'),(15,'Diary of a Wimpy Kid #11','The pressure’s really piling up on Greg Heffley. His mom thinks video games are turning his brain to mush, so she wants her son to put down the controller and explore his \"creative side\".\n\nAs if that’s not scary enough, Halloween is just around the corner and the frights are coming at Greg from every angle.\n\nWhen he discovers a bag of gummy worms, it sparks an idea. Can Greg get his mom off his back by making a movie.... and will he become rich and famous in the progress? Or will doubling down on this path just double Greg’s troubles?','Jeff Kinney',0,'https://images.gr-assets.com/books/1478660898l/30051627.jpg'),(16,'Diary of a Wimpy Kid #12','Greg Heffley and his family are getting out of town.\nWith the cold weather setting in and the stress of the Christmas holiday approaching, the Heffleys decide to escape to a tropical island resort for some much-needed rest and relaxation. A few days in paradise should do wonders for Greg and his frazzled family.\nBut the Heffleys soon discover that paradise isn’t everything it’s cracked up to be. Sun-poisoning, stomach troubles and venomous creatures all threaten to ruin the family’s vacation.\nCan their trip be saved, or will this island getaway end in disaster?\n','Jeff Kinney',5,'https://images-na.ssl-images-amazon.com/images/I/51IO%2Brh-xGL._SX331_BO1,204,203,200_.jpg'),(17,'Diary of a Wimpy Kid #13','When a wintry blast closes down Greg Heffley’s middle school, it turns his neighborhood into a battleground, complete with snow forts, alliances, betrayals, and epic snowball fights. Will Greg Heffley and his best friend Rowley survive?..Or will they fall like his helpless knights?\n','Jeff Kinney',3,'http://t3.gstatic.com/images?q=tbn:ANd9GcRIqiFmet5FxM0fQ3MSad6W43XX8iopo7ic8vbpllZu3sE9vELs');
/*!40000 ALTER TABLE `Book` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Review`
--

DROP TABLE IF EXISTS `Review`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Review` (
  `review_id` int(11) NOT NULL AUTO_INCREMENT,
  `rating` float DEFAULT NULL,
  `description` text,
  `book_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`review_id`),
  KEY `fk_user_id_idx` (`user_id`),
  KEY `fk_book_id_review_idx` (`book_id`),
  CONSTRAINT `fk_book_id_review` FOREIGN KEY (`book_id`) REFERENCES `Book` (`book_id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_user_id_review` FOREIGN KEY (`user_id`) REFERENCES `User` (`user_id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Review`
--

LOCK TABLES `Review` WRITE;
/*!40000 ALTER TABLE `Review` DISABLE KEYS */;
INSERT INTO `Review` VALUES (1,5,'Buku ini keren bet bet bet bet ',1,1),(2,1,'karena bikin aing baper jadi aing kasih 1 ya LUVV',1,2),(3,3,'Oh andaikan aku bisa seperti ini juga sama faizzun :(',1,3),(4,4,'Lu gila ya',1,4),(5,3,'Padahal masih lebih kaya gua',2,1),(6,5,'Gradasi warnanya apa ya?',2,4),(7,3,'Gua lebih keren',3,1),(11,5,'Duh jadi inget mantan :(',5,4),(12,3,'Untungnya hidupku tidak seburuk itu',17,6),(13,1,'Dasar crazy',2,1),(18,4,'Banyak nih yang ngefans sama aku',8,1),(19,3,'Tappei buat aku plis :(',4,1),(20,5,'It reminds me of my childhood',16,1),(21,2,'asda',1,3),(22,4,'cool',1,3);
/*!40000 ALTER TABLE `Review` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `User`
--

DROP TABLE IF EXISTS `User`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `User` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text,
  `name` text,
  `email` text,
  `password` text,
  `address` text,
  `phone` text,
  `link_pict` text,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `User`
--

LOCK TABLES `User` WRITE;
/*!40000 ALTER TABLE `User` DISABLE KEYS */;
INSERT INTO `User` VALUES (1,'azkanab','Azka Nabilah Mumtaz','azkanabilah@gmail.com','141098','Dago Asri 1 C-33	  						  						  						  						  						  						  						  					','081234561789','../upload/default.jpg'),(2,'aganisokoy','Sinaga Yoko','yokosinaga@gmail.com','tayotayo','Ganesha no. 10','0888888888','../upload/default.jpg'),(3,'yasyagayor','Bukan siapa siapa','yasyagayor@gmail.com','yasyagayor','asds','0888 kapan2 kedupan','../upload/yasyagayor.jpg'),(4,'yulyharuka','Yuly Haruka','yulyharuka@gmail.com','tayo1234','Jl. Kanayakan Baru','08119987359','../upload/default.jpg'),(5,'pocopoco','Poco','pocong@gmail.com','pocopoco','poco','085719070289','../upload/pocopoco.jpg'),(6,'adylanrff','Adylan Roaffa Ilmy','adyl4n@gmail.com','tayotayo','toko odidang','0987654321','../upload/default.jpg'),(7,'yasyayasya','Yasya','yasya@gmail.com','yasya','yasya rusyda ','085719070289','../upload/default.jpg'),(8,'hbbrindabernat','Habibi Rinda Bernat','berbinda@gmail.com','12345','Di hati rinda ','081310804346','../upload/default.jpg');
/*!40000 ALTER TABLE `User` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL,
  `jumlah_order` int(11) NOT NULL,
  `order_date` date DEFAULT NULL,
  `review_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`order_id`),
  KEY `fk_user_id_idx` (`user_id`),
  KEY `fk_book_id_idx` (`book_id`),
  CONSTRAINT `fk_book_id` FOREIGN KEY (`book_id`) REFERENCES `Book` (`book_id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `User` (`user_id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,1,1,1,'2018-12-21',1),(2,1,3,3,'1997-11-01',7),(3,1,4,1,'1999-11-11',19),(4,1,2,2,'2018-10-24',13),(5,1,1,2,'2018-10-25',NULL),(6,1,16,9,'2018-10-25',20),(7,1,8,5,'2018-10-25',18),(8,3,1,3,'2018-10-25',22),(9,3,1,2,'2018-10-25',21),(10,3,2,1,'2018-10-25',NULL),(11,3,4,3,'2018-10-25',NULL),(12,3,1,2,'2018-10-25',NULL),(13,3,1,3,'2018-10-25',NULL),(14,3,1,3,'2018-10-25',NULL);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-10-26  9:49:40
