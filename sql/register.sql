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
-- Table structure for table `register`
-- 

CREATE TABLE `register` (
  `user` varchar(10) collate utf8_unicode_ci NOT NULL,
  `password` varchar(15) collate utf8_unicode_ci NOT NULL,
  `firstname` varchar(50) collate utf8_unicode_ci NOT NULL,
  `lastname` varchar(50) collate utf8_unicode_ci NOT NULL,
  `address` varchar(300) collate utf8_unicode_ci NOT NULL,
  `phone` varchar(10) collate utf8_unicode_ci NOT NULL,
  `email` varchar(40) collate utf8_unicode_ci NOT NULL,
  `status` varchar(20) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`user`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `register`
-- 

INSERT INTO `register` VALUES ('tak', '1234', 'à¹†à¹„à¸sdjg0oduf0os', 'à¸ªà¸§à¸ªà¸±à¸”à¸µ', 'asdasdsaà¹ˆà¸±à¸¸dasd\r\nà¸à¸«à¸”à¸«à¸', '029110020', 'infernal-slam@hotmail.com', 'user');
INSERT INTO `register` VALUES ('admin', '1234', 'admin', 'admin', 'admin', '0000000000', 'infernal-slam@hotmail.com', 'admin');
INSERT INTO `register` VALUES ('mint', '1234', 'asdfas', 'fasf', 'afs', '029110020', 'infernal-slam@hotmaul.com', 'user');
INSERT INTO `register` VALUES ('kak', 'dfsaf', 'dfd', 'dfd', 'fdfd', '2442', 'infernal-slam@hotmail.com', 'user');
