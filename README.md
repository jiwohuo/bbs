# bbs
基本功能：

1、发布留言。
2、展示留言。
3、删除留言。
  
数据库表sql:

CREATE TABLE `message` (
 `id` tinyint(1) NOT NULL auto_increment,
 `user` varchar(25) NOT NULL, 
 `title` varchar(50) NOT NULL, 
 `content` tinytext NOT NULL, 
 `lastdate` timestamp NOT NULL, 
 PRIMARY KEY (`id`) 
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
