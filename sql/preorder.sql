-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jun 03, 2015 at 08:22 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `web`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `preorder`
-- 

CREATE TABLE `preorder` (
  `orders` varchar(30) collate utf8_unicode_ci NOT NULL,
  `user` varchar(30) collate utf8_unicode_ci NOT NULL,
  `statusorder` varchar(5) collate utf8_unicode_ci NOT NULL,
  `money` int(5) NOT NULL,
  `id` int(100) NOT NULL auto_increment,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=125 ;

-- 
-- Dumping data for table `preorder`
-- 

INSERT INTO `preorder` VALUES ('6', 'mint', '1', 174, 113);
INSERT INTO `preorder` VALUES ('1', 'tak', '5', 160, 121);
INSERT INTO `preorder` VALUES ('1', 'tak', '5', 160, 118);
INSERT INTO `preorder` VALUES ('4', 'mint', '5', 220, 112);
INSERT INTO `preorder` VALUES ('1', 'mint', '4', 128, 107);
INSERT INTO `preorder` VALUES ('2', 'mint', '4', 116, 108);
INSERT INTO `preorder` VALUES ('4', 'mint', '4', 176, 109);
INSERT INTO `preorder` VALUES ('4', 'mint', '1', 44, 110);
INSERT INTO `preorder` VALUES ('1', 'mint', '5', 160, 111);
INSERT INTO `preorder` VALUES ('1', 'tak', '5', 160, 119);
INSERT INTO `preorder` VALUES ('1', 'tak', '5', 160, 122);
INSERT INTO `preorder` VALUES ('1', 'tak', '1', 32, 123);
INSERT INTO `preorder` VALUES ('4', 'tak', '1', 44, 124);
