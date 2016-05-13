-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jun 03, 2015 at 08:21 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `web`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `orders`
-- 

CREATE TABLE `orders` (
  `orders` varchar(30) collate utf8_unicode_ci NOT NULL,
  `nameorder` varchar(100) collate utf8_unicode_ci NOT NULL,
  `price` int(6) NOT NULL,
  PRIMARY KEY  (`orders`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `orders`
-- 

INSERT INTO `orders` VALUES ('1', 'Almond Butterscotch Coffee', 32);
INSERT INTO `orders` VALUES ('2', 'Blueberry Surprise', 29);
INSERT INTO `orders` VALUES ('3', 'Cookies & Cream', 44);
INSERT INTO `orders` VALUES ('4', 'Italian Mocha', 44);
INSERT INTO `orders` VALUES ('5', 'Triple chocolate', 169);
INSERT INTO `orders` VALUES ('6', 'White Choc Macadamia', 174);
