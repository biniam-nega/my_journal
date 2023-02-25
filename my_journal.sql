-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Feb 25, 2023 at 09:30 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `my_journal`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `attached_files`
-- 

CREATE TABLE `attached_files` (
  `id` int(11) NOT NULL auto_increment,
  `journal_id` varchar(11) NOT NULL,
  `filename` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `attached_files`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `journal`
-- 

CREATE TABLE `journal` (
  `id` int(11) NOT NULL auto_increment,
  `poster_id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `text` text NOT NULL,
  `date` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

-- 
-- Table structure for table `users`
-- 

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `users`
-- 

INSERT INTO `users` (`id`, `username`, `password`) VALUES 
(1, 'admin', 'adminpass');
