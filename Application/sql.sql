--创建会员登录信息表。
create table li_member_login_log
(
  member_login_log_id int unsigned auto_increment,
  member_id int unsigned not null default 0,
  login_time int not null default 0,
  login_ip int unsigned not null default 0,
  login_ua varchar(255) not null default '',
  PRIMARY KEY (member_login_log_id),
  index(member_id)

)charset = utf8;
--添加数据到会员登录信息表
insert into li_member_login_log values(null,5,unix_timestamp(),inet_aton('192.168.0.91'),'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.0.2785.113 Safari/537.36');
insert into li_member_login_log values(null,5,unix_timestamp(),inet_aton('192.168.0.91'),'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.0.2785.113 Safari/537.36');
insert into li_member_login_log values(null,5,unix_timestamp(),inet_aton('192.168.0.91'),'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.0.2785.113 Safari/537.36');

--活动表
create table li_event(
  event_id int unsigned auto_increment,
  title varchar(128) not null DEFAULT '',
  PRIMARY  KEY (event_id)
)charset = utf8;
insert into li_event values(23,'双十一大甩卖');
insert into li_event values(25,'国庆狂欢');
insert into li_event values(29,'双十二促销');

create table li_member_event(
  member_event_id int unsigned auto_increment,
  member_id int unsigned not null DEFAULT 0,
  event_id int unsigned not null DEFAULT 0,
  PRIMARY  KEY (member_event_id)
)charset=utf8;
insert into li_member_event values(null,2,23);
insert into li_member_event values(null,2,25);
insert into li_member_event values(null,4,23);
insert into li_member_event values(null,4,29);

















