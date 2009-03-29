# phpMyAdmin SQL Dump
# version 2.5.4
# http://www.phpmyadmin.net
#
# Host: localhost
# Generation Time: Mar 27, 2009 at 06:22 PM
# Server version: 5.0.27
# PHP Version: 5.1.6
# 
# Database : `agoradb`
# 

# --------------------------------------------------------

#
# Table structure for table `answers`
#

CREATE TABLE `answers` (
  `answer_id` tinyint(3) unsigned NOT NULL auto_increment,
  `question_id` tinyint(3) unsigned NOT NULL default '0',
  `poll_id` mediumint(8) unsigned NOT NULL default '0',
  `text` varchar(255) NOT NULL default '',
  `counter` mediumint(8) unsigned NOT NULL default '0',
  PRIMARY KEY  (`answer_id`,`question_id`,`poll_id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

# --------------------------------------------------------

#
# Table structure for table `confirmations`
#

CREATE TABLE `confirmations` (
  `e_mail` varchar(50) NOT NULL default '',
  `poll_id` mediumint(9) unsigned NOT NULL default '0',
  `question_id` tinyint(4) unsigned NOT NULL default '0',
  `answer_id` tinyint(4) unsigned NOT NULL default '0',
  `expiration` date NOT NULL default '0000-00-00',
  `nonce` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`e_mail`,`poll_id`,`question_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Table structure for table `managers`
#

CREATE TABLE `managers` (
  `manager_id` smallint(4) unsigned NOT NULL default '0',
  `password` varchar(255) NOT NULL default '',
  `information` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`manager_id`),
  UNIQUE KEY `manager_id` (`manager_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Table structure for table `polls`
#

CREATE TABLE `polls` (
  `poll_id` mediumint(8) unsigned NOT NULL auto_increment,
  `poll_title` varchar(255) NOT NULL default '',
  `manager_id` smallint(4) unsigned NOT NULL default '0',
  `type` tinyint(3) NOT NULL default '0',
  `start_date` date NOT NULL default '0000-00-00',
  `stop_date` date NOT NULL default '0000-00-00',
  PRIMARY KEY  (`poll_id`)
) ENGINE=MyISAM AUTO_INCREMENT=76 DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

# --------------------------------------------------------

#
# Table structure for table `questions`
#

CREATE TABLE `questions` (
  `question_id` tinyint(3) unsigned NOT NULL auto_increment,
  `poll_id` mediumint(8) unsigned NOT NULL default '0',
  `text` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`question_id`,`poll_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

# --------------------------------------------------------

#
# Table structure for table `remote_polls`
#

CREATE TABLE `remote_polls` (
  `poll_id` mediumint(9) NOT NULL default '0',
  `host_id` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`poll_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

# --------------------------------------------------------

#
# Table structure for table `voters`
#

CREATE TABLE `voters` (
  `user_id` varchar(100) NOT NULL default '',
  `poll_id` mediumint(8) unsigned NOT NULL default '0',
  `password` varchar(255) NOT NULL default '',
  `voted` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`user_id`,`poll_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

