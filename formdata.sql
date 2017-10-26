-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jul 26, 2017 at 05:02 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `formdata`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `cart`
-- 

CREATE TABLE `cart` (
  `id` int(11) NOT NULL auto_increment,
  `userid` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `productname` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `mrp` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `cart`
-- 

INSERT INTO `cart` VALUES (1, 1, 'UDIT FALOR', 'Clamp 250X250', 'pieces', '50', '5000', '8559949898', 'Sector-3, Plot No. 90, Vidhyadhar Nagar', 'falorudit@gmail.com');
INSERT INTO `cart` VALUES (2, 1, 'UDIT FALOR', 'Bottom Pipe Clamp', 'kg', '150', '45000', '8559949898', 'Sector-3, Plot No. 90, Vidhyadhar Nagar', 'falorudit@gmail.com');
INSERT INTO `cart` VALUES (4, 8, 'Narendra Falor', 'Clamp 250X250', 'kg', '31', '9300', '9829276210', 'f-796', 'shobhitmarketing16@gmail.com');

-- --------------------------------------------------------

-- 
-- Table structure for table `categorydetails`
-- 

CREATE TABLE `categorydetails` (
  `id` int(11) NOT NULL auto_increment,
  `cid` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `parent` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

-- 
-- Dumping data for table `categorydetails`
-- 

INSERT INTO `categorydetails` VALUES (6, 'C001', 'Sprinkler', '0', 'Sprinkler 1.jpg');
INSERT INTO `categorydetails` VALUES (7, 'C002', 'Foot Batten', '0', 'clamp-foot-batten-250x250.jpg');

-- --------------------------------------------------------

-- 
-- Table structure for table `gallerydetails`
-- 

CREATE TABLE `gallerydetails` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(30) NOT NULL,
  `thumbnail` varchar(80) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- 
-- Dumping data for table `gallerydetails`
-- 

INSERT INTO `gallerydetails` VALUES (1, 'Pune', 'IMG_20170624_215916_420.jpg');
INSERT INTO `gallerydetails` VALUES (2, 'Bike Trip', 'IMG-20170625-WA0013.jpg');
INSERT INTO `gallerydetails` VALUES (3, 'Pune darshan', 'IMG_20170621_071241_HDR.jpg');
INSERT INTO `gallerydetails` VALUES (4, 'Extra', 'IMG-20170626-WA0006.jpg');

-- --------------------------------------------------------

-- 
-- Table structure for table `galleryimages`
-- 

CREATE TABLE `galleryimages` (
  `id` int(11) NOT NULL auto_increment,
  `galleryid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

-- 
-- Dumping data for table `galleryimages`
-- 

INSERT INTO `galleryimages` VALUES (17, 3, 'Shanivar Wada', 'IMG_20170622_094213.jpg');
INSERT INTO `galleryimages` VALUES (11, 1, '1', 'IMG_4681.JPG');
INSERT INTO `galleryimages` VALUES (12, 1, '2', 'IMG_4684.JPG');
INSERT INTO `galleryimages` VALUES (13, 1, 'Image 3', 'IMG_4693.JPG');
INSERT INTO `galleryimages` VALUES (16, 3, 'Image 1', 'IMG_20170622_093001.jpg');
INSERT INTO `galleryimages` VALUES (18, 3, 'Shanivar Wada 2', 'IMG_20170622_095018.jpg');
INSERT INTO `galleryimages` VALUES (19, 2, 'group', 'IMG-20170625-WA0003.jpg');
INSERT INTO `galleryimages` VALUES (20, 2, 'Second', 'IMG-20170625-WA0009.jpg');
INSERT INTO `galleryimages` VALUES (21, 2, 'Image 3', 'IMG-20170625-WA0015.jpg');
INSERT INTO `galleryimages` VALUES (22, 2, 'Image 4', 'IMG-20170625-WA0021.jpg');
INSERT INTO `galleryimages` VALUES (23, 4, 'Ice Cream', 'IMG-20170626-WA0006.jpg');
INSERT INTO `galleryimages` VALUES (24, 4, 'Ice Factory Icecream', 'IMG-20170626-WA0004.jpg');

-- --------------------------------------------------------

-- 
-- Table structure for table `inputform`
-- 

CREATE TABLE `inputform` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `state` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `date` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

-- 
-- Dumping data for table `inputform`
-- 

INSERT INTO `inputform` VALUES (13, 'harsh', 28, 'Rajasthan', 'male', 2, 3, 1994, 'harshrathi123@yahoo.com', '123456', '');
INSERT INTO `inputform` VALUES (14, 'Udit Falor', 20, 'Rajasthan', 'male', 22, 12, 1996, 'udit_2212@yahoo.com', '123456', 'IMG_20170410_003741_096.jpg');

-- --------------------------------------------------------

-- 
-- Table structure for table `productdetails`
-- 

CREATE TABLE `productdetails` (
  `id` int(11) NOT NULL auto_increment,
  `pid` varchar(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(250) NOT NULL,
  `image` varchar(50) NOT NULL,
  `category` varchar(40) NOT NULL,
  `mrp` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

-- 
-- Dumping data for table `productdetails`
-- 

INSERT INTO `productdetails` VALUES (6, 'P001', 'Clamp 250X250', 'Clamp of various size available', 'clamp-250x250.jpg', '6', 100);
INSERT INTO `productdetails` VALUES (10, 'P002', 'Bottom Pipe Clamp', 'Highly Stable, Made of Iron, Galvanised, Ungalvanised', 'bottom-pipe-clamp-250x250.jpg', '6', 150);
INSERT INTO `productdetails` VALUES (11, 'P003', 'Foot Batten', 'Various Size of Foot Batten Available', 'clamp-foot-batten-250x250.jpg', '7', 1800);
INSERT INTO `productdetails` VALUES (12, 'P004', 'Foot Batten Galvanized ', 'Fully Galvanized Foot Batten', 'Foot batten 2.jpg', '7', 750);

-- --------------------------------------------------------

-- 
-- Table structure for table `signinform`
-- 

CREATE TABLE `signinform` (
  `emailid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `signinform`
-- 

INSERT INTO `signinform` VALUES ('shobhitmarketing16@gmail.com', '123456');
INSERT INTO `signinform` VALUES ('falorudit@gmail.com', '123456');

-- --------------------------------------------------------

-- 
-- Table structure for table `signupform`
-- 

CREATE TABLE `signupform` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

-- 
-- Dumping data for table `signupform`
-- 

INSERT INTO `signupform` VALUES (1, 'UDIT FALOR', '8559949898', 'Sector-3, Plot No. 90, Vidhyadhar Nagar', 'falorudit@gmail.com', '12345');
INSERT INTO `signupform` VALUES (8, 'Narendra Falor', '9829276210', 'f-796', 'shobhitmarketing16@gmail.com', '123456');

-- --------------------------------------------------------

-- 
-- Table structure for table `user`
-- 

CREATE TABLE `user` (
  `emailid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `user`
-- 

INSERT INTO `user` VALUES ('harshrathi123@yahoo.com', '123456');
INSERT INTO `user` VALUES ('udit_2212@yahoo.com', '123456');
