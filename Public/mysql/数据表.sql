--1. 创建分类表bg_cate
create table bg_cate(
    cate_id tinyint unsigned not null auto_increment comment '主键',
    cate_name varchar(32) not null comment '分类名称',
    cate_description text comment '分类描述',
    is_show enum('0','1') not null default '0' comment '0:显示 1:不显示',
    primary key (cate_id)
)engine=Innodb charset=utf8 comment '分类表';

--给分类表模拟两条数据
insert into bg_cate values (1,'php7','展示php7最强大、最先进的核心技术','0');
insert into bg_cate values (2,'Ajax','Ajax是每个项目必须要使用的技术','0');


--2. 创建博文数据表bg_blog
整型类型 tinyint(255) smallint(65535)  mediumint(1600多万) int(40多亿) bigint
create table bg_blog(
    blog_id int unsigned not null auto_increment comment '主键',
    blog_title varchar(200) not null comment '博文的标题',
    blog_content text comment '博文内容',
    author_id smallint unsigned not null default 0 comment '作者id',
    cate_id tinyint unsigned not null comment '分类id',
    add_time int unsigned not null comment '博文添加时间',
    upd_time int unsigned not null comment '博文修改时间',
    is_show  enum('0','1') not null default '0' comment '0:显示 1:不显示',
    is_del enum('0','1') not null default '0' comment '0:正常 1:删除',
    primary key (blog_id)
)engine=Innodb charset=utf8 comment '博文表';

comment:给字段/数据表做注释
unsigned:无符号型
    例如tinyint有符号型表示范围：-128~127之间
               无符号型表示范围：0-255之间
not null            : 内容不能为空，给该数据表添加数据的时候该“字段”必须填充上
        例如：insert into 表名 (字段，字段) values (xxx,xxx);
              “字段”要把全部"not null"的给设置上
not null default xxx: 内容不能为空，如果为空就通过default默认内容填充
            该字段在形成insert语句的时候“是否”设置都可以

enum:枚举/单选类型，该类型再数据库底层运行的时候走整型数据,速度快

--给博文表模拟两条记录
insert into bg_blog (blog_title,blog_content,cate_id,add_time,upd_time) values ('页面重构css技巧总结（转发）','1.如何让文字在容器内垂直居中？ (1)方法：为容器添加line-height属性，使得line-height的值等于容器的height。 (2)代码 [html] view plain copy print?在CODE上查看代码片派生到我的代码片 (3)原理1.如何让文字在容器内垂直居中？ (1)方法：为容器添加line-height属性，使得line-height的值等于容器的height。 (2)代码 [html] view plain copy print?在CODE上查看代码片派生到我的代码片 (3)原理','2',unix_timestamp(),unix_timestamp());
insert into bg_blog (blog_title,blog_content,cate_id,add_time,upd_time) values ('男子10米气步枪：中国排世界前二选手均止步资格赛','中新网里约热内卢8月8日电(记者 宋方灿) 8日，里约奥运会男子10米气步枪比赛打响，在首先进行的资格赛中，中国选手曹逸飞以625.5环的总成绩排名第9，最后一刻惨遭淘汰。另外一名中国选手杨浩然只打出620.5环的成绩，排名31提前出局。 　　曹逸飞和杨浩中新网里约热内卢8月8日电(记者 宋方灿) 8日，里约奥运会男子10米气步枪比赛打响，在首先进行的资格赛中，中国选手曹逸飞以625.5环的总成绩排名第9，最后一刻惨遭淘汰。另外一名中国选手杨浩然只打出620.5环的成绩，排名31提前出局。 　　曹逸飞和杨浩','2',unix_timestamp(),unix_timestamp());

mysql函数：
    unix_timestamp() 可以获取当前时间的时间戳信息(类似php的time()函数)
    from_unixtime() 可以把时间戳信息转化为格式化时间(类似php的date()函数)

--3. 会员表bg_user
create table bg_user(
    user_id smallint unsigned not null auto_increment comment '主键',
    user_name  varchar(32) not null comment '会员名称',
    user_pwd char(32) not null comment '密码',
    user_email varchar(64) not null default '' comment '邮箱地址',
    user_tel char(11) not null default '' comment '手机号码',
    user_sex enum('0','1','2') not null default '0' comment '0:男  1:女  2:保密',
    add_time int not null comment '注册时间',
    login_time int not null comment '最近登录时间',
    primary key (user_id)
)engine=Innodb charset=utf8 comment '会员表';

char：内容长度固定
varchar：内容长度不固定
