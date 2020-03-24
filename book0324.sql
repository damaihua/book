/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50520
Source Host           : localhost:3306
Source Database       : book

Target Server Type    : MYSQL
Target Server Version : 50520
File Encoding         : 65001

Date: 2020-03-24 21:59:42
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for book_ad
-- ----------------------------
DROP TABLE IF EXISTS `book_ad`;
CREATE TABLE `book_ad` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `content` varchar(32) NOT NULL,
  `image` varchar(64) NOT NULL,
  `url` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=125 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of book_ad
-- ----------------------------
INSERT INTO `book_ad` VALUES ('119', 'FDSFD', './Uploads/thumb_5343ad416c841.jpg', 'fdsfds');
INSERT INTO `book_ad` VALUES ('120', 'fdsfdsf', 'Uploads/90/5346365e188fd.jpg', 'fdsfdsf');
INSERT INTO `book_ad` VALUES ('121', 'fdsfdsfdsqqqq', 'Uploads/90/53463670bab5b.jpg', 'saxsssa');
INSERT INTO `book_ad` VALUES ('122', 'fdsfdsfdsfbbvcbcb', 'Uploads/90/5346368ce3c7b.jpg', 'bcxbcxbcx');
INSERT INTO `book_ad` VALUES ('123', '', 'Uploads/ad/5e73167e13f85.png', 'http://');

-- ----------------------------
-- Table structure for book_admin
-- ----------------------------
DROP TABLE IF EXISTS `book_admin`;
CREATE TABLE `book_admin` (
  `admin_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(30) NOT NULL,
  `admin_pwd` varchar(32) NOT NULL,
  `admin_email` varchar(255) DEFAULT NULL,
  `group_id` tinyint(1) unsigned DEFAULT NULL,
  `login_time` varchar(10) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of book_admin
-- ----------------------------
INSERT INTO `book_admin` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', '245629560@qq.com', '1', '1234567895');
INSERT INTO `book_admin` VALUES ('8', 'gouugolei', '21232f297a57a5a743894a0e4a801fc3', '245629560@qq.com', '2', '');

-- ----------------------------
-- Table structure for book_apply
-- ----------------------------
DROP TABLE IF EXISTS `book_apply`;
CREATE TABLE `book_apply` (
  `user_id` tinyint(4) NOT NULL,
  `realy_name` varchar(255) DEFAULT NULL,
  `card_no` varchar(18) NOT NULL,
  `bank_type` varchar(255) NOT NULL DEFAULT '支付宝',
  `bank_no` varchar(19) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `test_chapter` text NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of book_apply
-- ----------------------------
INSERT INTO `book_apply` VALUES ('28', '勾国磊', '411381198808052013', '支付宝', '1111111111111111111', '0', 'aaaaaaaaaaaaaaaaaaa1111aaaaaaaaaaaaaaaaaaaaa1111111111111&lt;br /&gt;');

-- ----------------------------
-- Table structure for book_book
-- ----------------------------
DROP TABLE IF EXISTS `book_book`;
CREATE TABLE `book_book` (
  `book_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `book_name` varchar(255) NOT NULL,
  `book_cat` tinyint(3) NOT NULL,
  `user_id` tinyint(4) unsigned NOT NULL,
  `book_cover` varchar(255) NOT NULL,
  `book_info` varchar(255) NOT NULL,
  `book_size` int(10) unsigned NOT NULL,
  `progress` tinyint(2) NOT NULL DEFAULT '55',
  `tags` varchar(255) DEFAULT NULL,
  `flags` varchar(255) DEFAULT NULL,
  `recommend` int(11) DEFAULT '0',
  `public_time` varchar(10) NOT NULL,
  `update_time` varchar(10) NOT NULL,
  `total` int(11) NOT NULL,
  `needscore` tinyint(255) NOT NULL DEFAULT '0',
  `writer` varchar(255) NOT NULL,
  `hits` int(8) NOT NULL DEFAULT '0',
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of book_book
-- ----------------------------
INSERT INTO `book_book` VALUES ('70', '超级武器交换系统', '1', '0', 'Uploads/cover/5e7826e3b9d2c.jpg', '因为一起意外事故，秦观来到了79年。叮咚！超级武器交换系统启动！坦克太落后了，从2020年的武器坟场里面，交换个M551谢登里坦克过来！谢里登还不够？那T-72行不行？M1A2行不行？豹2怎么样？只有一架米格-23，怎么仿制？还是交换个雄猫过来吧！什么？除了武器坟场，还有机床坟场，黄金坟场？这些都可以&lt;br /&gt;', '782', '57', '科幻', 'a,d', '0', '1584932746', '1585054026', '5', '3', '华雄', '0');
INSERT INTO `book_book` VALUES ('82', '乔布斯传', '49', '0', 'Uploads/cover/5e79e0b1d3b2b.jpg', '苹果教父跌宕起伏的传奇人生&lt;br /&gt;\r\n年轻人热血创业的偶像&lt;br /&gt;\r\n震撼世界的新潮科技之先锋人物&lt;br /&gt;\r\n做每一件事并不是为了赚钱，而是为了要改变世界。你的时间有限，所以不要为别人而活，不要被教条所限，不要活在别人的观念里，不要让别人的意见左右自己内心的声音。最重要的是，勇敢地去追随自己的心灵和直觉，只有自己的心灵和直觉才知道你自己的真实想法，其他一切都是次要的。', '0', '56', '传奇 传记', 'a', '0', '1585045681', '', '0', '0', '佚名', '0');
INSERT INTO `book_book` VALUES ('83', '李世民的奋斗', '6', '0', 'Uploads/cover/5e79e32be295a.jpg', '关于李世民，你又真正了解多少呢?他为什么要在危难时刻挺而走险发动玄武门之变?为什么能够在决定唐朝命运的决战中面对重重困境一举击败两大巨头王世充与窦建德?为什么要执意出征导致隋朝灭亡、凶猛彪悍的高句丽?为什么要突然废默已做了十八年太子、自己极其宠爱的李承乾?为什么要立懦弱的、与自己妃子武则天还有暖昧关系的李治为最后接班人?等等这些谜团，本书将为你一一解开。翻开本书，你将真正领略到李世民的雄才伟略和文治武功，真正感受到他的手段与谋略，他的痛苦与快乐。《李世民的奋斗》下册“贞观之治?守业”主要讲述李世民人生最后', '0', '56', '历史', 'a', '0', '1585046315', '1585046519', '2', '0', '佚名', '0');
INSERT INTO `book_book` VALUES ('84', '开放你的人生', '4', '0', 'Uploads/cover/5e79e75638a8b.jpg', '本书契合开放的时代，开启了一场意义深远的人生价值观讨论，倡导开放式人生，呼唤人生也要开放，它或许将彻底改变我们许多人的人生命运，并进而推动中华民族深化开放，走向世界。本书融开放式人生鲜活的案例和哲理性的醒世妙语为一体，激励广大的中国人，尤其是有志青年，冲破封闭的囚笼，敢于解放自己的人生，勇于追求人生的成功。强调生活在开放的时代、开放的中国，如果渴望人生的成功，除了开放人生，我们没有更好的选择。作者王辉耀先生是欧美同学会副会长，拥有丰富的开放式人生阅历。本书不是空洞的说教，而是基于对200多位中国开放式人生', '0', '58', '励志', 'a', '0', '1585047382', '1585047770', '4', '6', '王辉耀', '0');
INSERT INTO `book_book` VALUES ('85', '世界的秩序', '50', '0', 'Uploads/cover/5e79e992a2a2d.jpg', '在大自然中，有些力量是我们无法控制的……受一个神秘人物的委托，考古学家托马苏前往突尼斯寻找和打捞一艘古代沉船，殊不知，从此被拖入一系列错综复杂恐怖事件当中。他被怀疑杀人，遭到了许多蒙面杀手的暗算和多国警方的追捕，成了一个逃犯。故事相继发生在巴黎、伦敦、耶路撒冷、纽约和莫斯科，融历险、侦探、恐怖事件、神秘因素和情感纠葛为一体。这是一本建立在历史、宗教、建筑知识基础上的小说，虚构与现实、象征与思辨交织在一起，一种不可思议的事物完全颠覆了我们与世界的关系。', '0', '55', '探险', 'a', '0', '1585047954', '', '0', '0', '德尼·雷佩', '0');
INSERT INTO `book_book` VALUES ('86', '至顺镇江志', '2', '0', 'Uploads/cover/5e79eb82ae73f.jpg', '暂缺《至顺镇江志》简介', '0', '55', '国风 古籍', 'a', '0', '1585048450', '', '0', '0', ' 	元·脱因', '0');

-- ----------------------------
-- Table structure for book_cats
-- ----------------------------
DROP TABLE IF EXISTS `book_cats`;
CREATE TABLE `book_cats` (
  `cat_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(30) NOT NULL,
  `ordernum` int(2) DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `total` int(4) NOT NULL DEFAULT '0',
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `cat_sortname` varchar(20) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of book_cats
-- ----------------------------
INSERT INTO `book_cats` VALUES ('1', '玄幻仙侠', '10', '1', '1', '0', '玄幻');
INSERT INTO `book_cats` VALUES ('2', '古风古韵', '3', '1', '0', '0', '古风');
INSERT INTO `book_cats` VALUES ('3', '文学作品', '4', '1', '0', '0', '文学');
INSERT INTO `book_cats` VALUES ('4', '成功励志', '5', '1', '1', '0', '励志');
INSERT INTO `book_cats` VALUES ('6', '历史传奇', '6', '1', '1', '0', '历史');
INSERT INTO `book_cats` VALUES ('49', '人文社科', '1', '1', '1', '0', '人文');
INSERT INTO `book_cats` VALUES ('50', '悬疑探险', '2', '1', '1', '0', '悬疑');
INSERT INTO `book_cats` VALUES ('55', '新书上传', '1', '1', '10', '1', '新书');
INSERT INTO `book_cats` VALUES ('56', '情节展开', '1', '1', '10', '1', '展开');
INSERT INTO `book_cats` VALUES ('57', '精彩纷呈', '1', '1', '11', '1', '高潮');
INSERT INTO `book_cats` VALUES ('58', '接近尾声', '1', '1', '11', '1', '尾声');
INSERT INTO `book_cats` VALUES ('59', '已经完本', '1', '1', '11', '1', '完本');

-- ----------------------------
-- Table structure for book_chapter
-- ----------------------------
DROP TABLE IF EXISTS `book_chapter`;
CREATE TABLE `book_chapter` (
  `chapter_id` int(10) NOT NULL AUTO_INCREMENT,
  `book_id` tinyint(3) unsigned NOT NULL,
  `chapter_title` varchar(255) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `chapter_size` int(10) NOT NULL,
  `charge` tinyint(1) NOT NULL,
  `much` int(2) unsigned NOT NULL DEFAULT '0',
  `update_time` varchar(10) NOT NULL,
  PRIMARY KEY (`chapter_id`)
) ENGINE=InnoDB AUTO_INCREMENT=189 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of book_chapter
-- ----------------------------
INSERT INTO `book_chapter` VALUES ('174', '70', '第一章 平行世界醒来', '超级武器交换系统', '                                    “秦观，醒醒。”\r\n\r\n    “秦观，你怎么样了？”\r\n\r\n    耳边传来了一个个的声音，比较嘈杂，但是都带着关心。\r\n\r\n    于是，秦观慢慢地睁开了眼睛，当映入眼帘的全部都是穿着军绿色的粗帆布的工作服的人的时候，秦观就再次闭上了眼睛。\r\n\r\n    一定是看错了，我一定是在做梦，秦观这样告诉自己，等到我再次醒来，一定会看到自己熟悉的场景的。\r\n\r\n    但是没有用，当秦观再次醒来的时候，依旧看到的是刚刚的那群人，尤其是靠着最近的那个壮汉，五官也是相当的奇特，脸盘大，颧骨比较高，眼睛是凹进去的，                                ', '323', '0', '0', '1585053998');
INSERT INTO `book_chapter` VALUES ('175', '70', '第二章 坦克不合适', '超级武器交换系统', '                                                                                                            秦观是什么？\r\n\r\n    这个平行世界的秦观，只是侥幸进入了坦克厂的佼佼者而已，他只是4447厂一个最普通的生产线上的工人而已，这种话，怎么能由他说出来？要是个坦克专家说还差不多。\r\n\r\n    果然，听到了秦观的话，皮鞋男脸色变了。\r\n\r\n    “秦观，你在瞎说什么？在杨少校面前居然敢说这没边际的话？”\r\n\r\n    说话的是4447厂的车间主任，张向阳，他已经四十多岁了，算是比较年轻的了，前些年靠着自己的本事，成功地把老车间主任给搞下去，他成功地上位了。\r\n\r\n    之后，就在这个位置上干了下去                                                                                                ', '459', '0', '0', '1585054026');
INSERT INTO `book_chapter` VALUES ('176', '70', '第三章 系统激活', '超级武器交换系统', '                                                                                                                                                                                    杨少校的脸上阴晴不定，显示他内心正在泛起波澜，接着，他说话了：“你说我们的坦克不适合边界的战场，那你有什么好主意？我们除了62式，就是59式，但是59式太重，根本就不适合邻国的山地丛林的环境。”\r\n\r\n    如果59能上，何必用薄皮大馅的62式？如果眼前的这名年轻的工人只会耍嘴皮子的话，那自己可是会发怒的。\r\n\r\n    使用62式坦克，那是上级，最高军委做出的决定，只要62式坦克的质量达到了设计要求，他就没有太多的责任。\r\n\r\n    轻型战车，如何抵挡火箭筒一类的轻武器？对秦观来说，这个命题的答案太简单了。\r\n\r\n    他只要动动脑子，就能想出来了，后世几乎所有的轻型车辆，都披挂着格栅装甲，不就是用来防备火箭筒的吗？简单有效可靠。\r\n\r\n    就在他的脑子急速思考着武器系统的时候，却听到了脑子里出现了意外的声音。\r\n\r\n    “超级军工交换系统被激活，现在进行初始化，准备与宿主大脑进行融合。”\r\n\r\n    怎么回事？脑子里怎么会有个东西在发出声音？此时，秦观惊恐地想要大喊，却发现自己什么都喊不出来，他的挣扎就是徒劳的，他不会动。\r\n\r\n    大脑里出现了一个进度条，这个进度条在慢慢地动着，百分之一，百分之二…此时秦观的大脑是空白的，就被这个系统给慢慢地占据了，零星的思考，都集中在了这个问题上。\r\n\r\n    难道那个小小的击中自己大脑的高能粒子，其实内部是有大千世界的？就像是三体里面把质子展开，内部世界暴露一样。\r\n\r\n    这个粒子撞击到了自己的大脑，内部世界被撞散，只留下了这个系统，同时撞击的能量，把自己送到了这里？\r\n\r\n    这个系统，为何会被激活？是因为自己刚刚用大脑来想武器装备吗？军工交换系统又是怎么回事？\r\n\r\n    在无数个为什么中，军工交换系统的初始化，终于达到了百分之百。\r\n\r\n    “喂，你究竟是什么东西？”秦观只要意识一动，就能够和大脑里面的这个东西交流了。\r\n\r\n    “军工交换系统，来自一颗质子，现在，我已经和你完全进行了融合，从此之后，你就可以在这个世界上横着走了，嘎嘎。”\r\n\r\n    看来这系统还相当的骄傲的，只不过，现在的秦观可不买账：“那我怎么会在这里？不仅仅后退了四十年，还换了个平行世界？”\r\n\r\n    “那是当然的了。要不你怎么从坟场里拉装备啊，我们从2020年的世界而来，你可以告诉我，随便把2020年的世界各地的武器坟场里面的装备，都可以拉过来。”\r\n\r\n    坟场？拉武器？秦观顿时就是一个激灵，虽然主业是核物理，但是从初中开始，秦观就已经是一名不折不扣的军迷了。\r\n\r\n    就拿美国来说，当武器退役之后，并不会销毁，而是会找些空旷的地方储存起来，这就是武器坟场。\r\n\r\n    其中最著名的，就是鹰国的戴维斯蒙森空军基地。在这个占地2600英亩的地方，保存了价值350亿美元的退役军机。这里既是封存场，也是一个放置场。4200架飞机放置在此处，有些只是在部署间歇期暂存于该基地，但超过80％的飞机最终将在此结束使命，永久封存。\r\n\r\n    除了鹰国，熊国，汉国，等等，几乎每一个国家，都会有相当数量的武器坟场。\r\n\r\n    这些武器并不会被销毁，就是万一当大规模的战争来临的时候，是可以重新启封，投入战争之中的。\r\n\r\n    对后世来说，这些武器也许是太旧了，没有任何先进性了，但是在这个时代，那就是绝对的先进性的了。\r\n\r\n    听到了大脑里面的系统的沾沾自喜的样子，秦观明白了，人家的确有这个本钱，可以把相对这个时空先进的东西给拉过来。\r\n\r\n    这套系统，叫做军工交换系统，为何不叫做拉装备系统？此时现在秦观还是不太明白，但是，不用太明白，现在自己还客气什么。\r\n\r\n    “给我来一辆坦克，嗯，也不用太先进，T-72就够了。”秦观说道。\r\n\r\n    带着这辆坦克，回厂里研究去，足能够提前20年把99式给搞出来。\r\n\r\n    就在这时，系统却打了个呵欠：“不行，精神点太少了，刚刚融合的时候就已经用光了，嗯，我先宕机了。”                                                                                                                                                                ', '2022', '0', '0', '1584971377');
INSERT INTO `book_chapter` VALUES ('180', '70', '第六章', '超级武器交换系统', '                                                                        第六章内容                                                                ', '141', '1', '2', '1584973442');
INSERT INTO `book_chapter` VALUES ('181', '70', '第七章', '超级武器交换系统', '第七章内容', '0', '1', '1', '1584973394');
INSERT INTO `book_chapter` VALUES ('183', '83', '序一 远古的游历', '李世民的奋斗', '                                    李世民派使者忽悠高延寿，说：我只是看到你们国内乱臣贼子弑君才来兴师问罪，与兄弟打仗并非我的本意。我军粮草现在供应不上，所以才打下几座城来补充一下，等你们恢复了正常秩序，我就还给你们。\r\n\r\n很明显，这是李世民故意放的烟雾弹，高延寿居然连这些鬼话也相信，还以为李世民真的怕他，从此不加戒备。\r\n\r\n可就在他在营中看热闹，等待唐军休整的时候，李世民已经展开了对高句丽军的战略包围，并在当夜召集各军事将领召开紧急会议，沟通了他们的意见后，李世民紧急命令：李世勣率总管张士贵等马步军十四总管，带领一万五千名步骑兵抢占西岭制高点，引诱敌军出击；长孙无忌、牛进达率马步军二十六总管，带领一万一千名精兵埋伏在山北峡谷之中，准备迂回到敌军背后，发起突袭《全唐文·破高丽赐酺诏》：“行军大总管李勣，率总管虢国公张士贵等马步军十四总管，当其西南面；又命赵国公无忌，率马步军二十六总管，驰自东谷，合其来道，抵背扼喉，塞其归路。”《旧唐书》：“太宗夜召诸将，躬自指麾，遣李勣率步骑一万五千于城西岭为阵；长孙无忌率牛进达等精兵一万一千以为奇兵，自山北于狭谷出，以冲其后。”《资治通鉴》：“上夜召文武计事，命李世勣将步骑万五千陈于西岭；长孙无忌将精兵万一千为奇兵，自山北出于狭谷以冲其后。”。而李世民自己则亲率步骑四千，暗中携带战鼓和号角，藏好战旗，“潜鼓角，偃旌帜”，悄悄地占据北山，准备伺机而动。\r\n\r\n李世民下令各路兵马，只要听到鼓角声就一齐发起攻击。另外他还命有关部门把受降的帐篷都搭好了，说：明日午时，就在这里举行受降仪式。看来小李同学已经做好胜利的准备了。\r\n\r\n难道一向强悍的高句丽，就这么不堪一击？战场瞬息万变，李世民真会如愿以偿吗？\r\n\r\n火山，就在爆发前的一刻。                                ', '795', '0', '0', '1585046999');
INSERT INTO `book_chapter` VALUES ('184', '83', '二 真实是上帝的事业', '李世民的奋斗', '                                    高延寿腹背受敌，大为恐惧，惊慌失措之下，正想分兵抵抗，可是阵型已经被打乱，哪里还有你显摆的机会，他根本无法组织起有效的抵抗。高句丽军顿时大溃，如同羊群见猛虎，纷纷溃散逃命，作鸟兽散。\r\n\r\n兵败如山倒，猝不及防的高句丽军已经溃不成军，全线崩溃。\r\n\r\n唐军乘胜追击，一举消灭高句丽军两万多人，斩首二万余级，据说敌人的首级都堆成了山，可见战斗之惨烈。\r\n\r\n此战，唐军中诞生了一位超级战斗英雄，此人姓薛名礼，说这名儿恐怕没几个人知道，说他薛仁贵，那可就是大明星了。\r\n\r\n战斗中天降大雨，正是雷电交加之际，一个身着白衣的年轻人，手持长戟，腰挎两弓，大声呼喊着向前冲去，率先杀入敌阵，所向无敌！敌军纷纷溃败，唐军乘势追杀，大败敌军。\r\n\r\n白衣青年奋不顾身，置生死于度外，大有当年李世民的风采，冲锋陷阵，所向披靡。\r\n\r\n他就是薛仁贵，这一年，他二十七岁。                                ', '444', '0', '0', '1585047013');
INSERT INTO `book_chapter` VALUES ('185', '84', '开放的时代　成就开放式人生', '开放你的人生', ' 这些年来，特别是在做社团工作和社会交往中，经常接触青年人，有时去各大学演讲，也经常会有很多人来向我倾诉自己的失败：\r\n\r\n    ◆一个寄宿中学的高中生说：他真的不知道什么是成功，因为他在生活当中没有成就感和被尊重感。父母规定好了一切：读哪所学校，选哪个专业，假期培养什么爱好，甚至交什么样的朋友；学校又规定必须留短发、穿校服、接受寄宿的封闭式管理，甚至连喜怒哀乐都作要求——一次考试发挥不好，他没有表现出沮丧，老师因此当众不点名地批评他没有上进心。\r\n\r\n    ◆一个普通高校的大学生说：自己的人生糟糕透了。他在一个连一家上市公司都没有的小城市读书，处处讲人情关系，假期找不到好的企业兼职或实习；学校三流，老师们不能给予任何就业帮助；学的是最冷门的哲学专业，市场没有这方面需求，能提供就业机会的研究教育机构已经饱和。而如果跨专业找工作，大学等于白读了，工作也一样不好找。因此，他认定自己很失败，认定自己将来会加入“毕业就失业”的百万大军。\r\n\r\n    ◆一个名牌大学的研究生说：他感觉自己的生活很失败。他从小到大一直是父母和老师的骄傲，从重点高中到名牌大学，一帆风顺，读研也顺理成章，他也理所当然地认为读研后肯定会有更好的前途。结果，毕业之后，他发现那些已经工作三年的大学同学，有的已经开始创业，有的已经成为中层主管或经理，就连一些工作一般的同学都积累了一定的经验、人脉、业绩和资金。而自己这个过去的“尖子生”，在相关专业和职位上的竞争力却反而“高不成，低不就”，创业更是不敢奢谈。\r\n\r\n    ◆一个毕业后立刻回国的海归说：他实在不知道怎么去获得成功的感觉。他出生在一个典型的中产家庭，从美国留学回来，发现自己花掉父母几十万的大半积蓄后，却陷入于“失败”的包围当中。他没有成为无业的“海带”，也没有成为“金龟”，但跟身边的人比，明显付出与产出不成正比。他所在那个中产社区的不少童年伙伴，用相当于他学费的钱做生意，早已经建立了自己的企业。因此，社区里的人凡谈“留学无用”和海归“水土不服”，就必举他为例。\r\n\r\n    ◆一个工作已经几年的年轻人说：他觉得自己天天就是在混日子。虽然专业对口，并且从一毕业就做这份工作，富有经验，但他并不喜欢自己的专业（大学是被调剂录取的），也不喜欢这份工作。这类技术型工作永远是年轻人的“专利”，他迟早也要面临转型。可是，创业缺乏条件，转行转业又没有经验、业绩、专业，以他现在的“工龄”，如果要像一个新手一样低薪换行又于心不甘，即将三十成家而立的现实状态也不许可。于是，他也只能一直这样混着：不满意现状却又一直安于现状。\r\n\r\n    ◆还有一个呆在机关的中年朋友告诉我：他很迷茫。到了他这个年龄，升职的希望已经很小，做现在的工作又没有激情，每天朝九晚五，日日机械重复，时刻应付办公室内复杂的“人际政治”。他觉得自己的人生不能再耽搁下去了，可是人到中年，上有老，下有小，而且多年没有经历过市场“风雨”。所以，风险和压力又使他不敢轻举妄动，他真不知道自己该何去何从。\r\n\r\n    ……\r\n\r\n    这些疑惑都只指向一个问题——如何拥有自己的成功。 ', '1297', '0', '0', '1585047421');
INSERT INTO `book_chapter` VALUES ('186', '84', '心态不开放使人不受欢迎', '开放你的人生', ' 心态不开放使人不受欢迎\r\n\r\n    生活中太多这样的例子，A君兼容不了多元的价值观，总是看什么都不顺眼，非常愤世，喜欢“指导”别人的工作和生活方式。结果，他“脾气很好，品德很好，为人正直”，却依然成为一个不受欢迎的人。\r\n\r\n    再如B君，不能理解和包容“新人类”的生活方式，当然也没有办法跨越代沟。因此，他总是对孙子进行“思想工作”和“教育工作”，而且是旧的思路和过去几十年形成的那一套说辞，结果，孙子敬而远之，什么事都不找他，不问他。与B君仿佛仅有血缘关系上的亲情。\r\n\r\n    心态开放者，通常先有问题再有答案，有证据才有事实，就事论事，就人论人。心态保守者则常常先有立场和结论，先有思维和方法，常常以一元化的价值、一成不变的方法处理事情，犯教条主义和经验主义的错误。\r\n\r\n    梅菲特（北京）公司董事长喻恒曾这样形容心态带给人生的变化：“世上有四种不同的人：第一种人是口袋里没钱，心里也没钱，他可以比较轻松地过一辈子；第二种人是口袋里没钱，心里有钱，他会痛苦地过一辈子；第三种人，口袋里有钱，心里也有钱，他会累一辈子；第四种人是口袋里有钱但心里没钱，他就可以快乐地过一辈子。因此，面对金钱要有理智开放的心态，要学会支配金钱而不能被金钱所支配。”\r\n\r\n    只有开放的社会，才能为个人的奋斗提供多元化而非零和竞争的成功渠道。但是，也只有心态开放的人，才能善于把握时代和社会所提供的机会。\r\n\r\n    开放式心态的基本构造\r\n\r\n    心态开放与保守的区别\r\n\r\n    我在不同的高校担任客座教授时，经常跟学生探讨人生哲学。也许因为欧美同学会商会会长的身份，关于“开放”这一话题，每次都会成为热点议题。曾经有个学生很激烈地说：“我觉得心态的开放与保守，对个人的成功影响很小。许多心态保守的人一样非富即贵，一样能够成功，一样可以出国留学。”\r\n\r\n    我欣赏他敢于有自己独立的观点，但却并不认同他的看法：“心态的开放和保守，当然跟一个人是否出国、是否富贵、是否成功没有必然联系。但是，相对地说，心态开放者还是远比保守者更容易成功。心态开放者，更见多识广，更能够学习和借鉴有用的知识，更善于与人沟通合作，自然也就会有更多的机会成功。退一步讲，即使心态保守的人成功了，我相信更开放的心理也会使他如虎添翼。”\r\n\r\n    心态开放为什么能够成为开放式人生的起点？除了开放的时代要求我们非如此不可之外，另外一个根本原因就是开放的心态本身的基本构造，决定了它在任何时代，都应该成为一个人的重要素质。\r\n\r\n    图1-1：开放式心态的构成要素\r\n\r\n    1．强烈的进取心\r\n\r\n    如果有一种力量能使我们本能地张开双臂去迎接人生，那就只能是我们的进取心和志向。进取心总是促使我们打开人生大门，寻求更广阔的发展空间，这也是开放式心态的首要构成。\r\n\r\n    进取心可以包含很多词语的含义：雄心与野心，志向与欲望等。个人有强烈的进取心，才能有改变现状的强烈动力，才能对在这个世界上实现自己的抱负怀有兴趣，进而寻求并肩作战的伙伴和朋友，接纳各种思想、方法、技能，越挫越勇，做出各种各样的人生努力。\r\n\r\n    进取心使杨宁建立空中网\r\n\r\n    2004年在纳斯达克上市的空中网的创始人杨宁就是个进取心非常强的人。1998年，他斯坦福大学毕业，不顾家人期望他留在美国的意见，毅然和周云帆、陈一舟回国创业。当时，雄心勃勃的杨宁甚至要给这个网站取名为“中国人”，但因为“中国”这两个字无法注册，他才不得已才把名字改为Chinaren。\r\n\r\n    互联网寒冬到来后，杨宁和Chinaren网站都难逃厄运，Chinaren被迫连同200多名员工，加上几个创始人一年的工作合同，一起卖给了搜狐。这是一个让杨宁终生难忘的日子，但他的进取之心依然没有熄灭。\r\n\r\n    两年之后，在北京后海一间平房里，一个十几个人的公司成立了，名字叫做空中网。从搜狐辞职出来的杨宁在公司黑板上写下“新浪、搜狐、网易、腾讯”四个互联网大鳄名字，然后在后面加上“空中”两个大字，对团队说：“我们以后将是和他们齐名的公司！”\r\n\r\n    当时，杨宁和周云帆卖掉搜狐的股票，加上一个朋友的投资共带着50万美元就上了路——“我们的很多竞争对手都有几千万甚至上亿美元现金在银行放着”。资金成了首难，杨宁和周云帆首次创业的投资方包括高盛在内，都拒绝再次投资。但杨宁和周云帆没有放弃，奔赴香港中环一个楼一个楼的“扫楼”找投资机构。一个星期之后，碰壁无数次的他们遇见了当时在香港德丰杰工作的张帆，但张帆的推荐依然被董事会拒绝。最后，张帆直奔美国找大老板改变了空中网的命运。张帆后来回忆说正是因为这两个人强烈的进取心，所以在“香港只见了一面，直觉上我就已经决定帮助他们”。\r\n\r\n    人生犹如一次大海远航，不知道终点，也无法回头，我们甚至可能不知道该往哪个方向行驶，当然也无法规划和勾勒出未来蓝图。但是没有关系，在我研究采访的这数百位成功者当中，不少人进入现在的行业，做现在的事，完全是一种偶然。当然，没有偶然的是这些人从还没有成功之前，就对建立事业充满了强烈的持续的渴望。\r\n\r\n    这种渴望也就是进取心，进取心与目标的区别在于，它指向一个前进的方向，却没有具体的落点和彼岸。所以，大多数开放型成功者的人生也常常充满了灵活的转型和转身，他们不会把自己封闭在某一行业、职业、专业上，就算不到现在这一领域创业，他们将来也一定会在另外一个行业创业。他们所强烈企求的只是实现自身价值和社会价值、条条大路通罗马的成功而已。\r\n\r\n    因此，我们的人生也许不一定要拥有一个可以终生不变的目标，但一定需要有进取精神——永远向上向前的指南针。也许眼前大雾迷茫，也许看不到前面的终点，但我们依然要昂着头，注视着未来的大方向。', '2405', '1', '1', '1585047722');
INSERT INTO `book_chapter` VALUES ('187', '84', '开明大度，兼容差异', '开放你的人生', '开明大度，兼容差异\r\n\r\n    我十分崇尚北大老校长蔡元培先生倡导的“思想自由、兼容并包”的精神。海纳百川，有容乃大。开放的心态还是一种心胸，这种心胸外化的突出表现为：\r\n\r\n    ——有容人的肚量，能够容忍异己，欣赏与自己价值观不同的人。所谓“内举不避亲，外举不避仇”，这就是容人。\r\n\r\n    ——有容事的开明，能够接受别人的批评，包容甚至是错误的“异见”，当然也不会因为别人的恶意批评而影响主观判断。法国思想家孟德斯鸠曾说，“我不同意你说的每一句话，但我誓死捍卫你说话的权利”，这是容事。\r\n\r\n    ——有包容差异的头脑，并且还善于利用各种差异所带来的机会。\r\n\r\n    杰普培训曾被某些媒体称为“中国高端IT培训第一品牌”，在海外呆过13年的CEO赵敏谈到自己之所以选择高端IT培训作为创业方向，就是因为发现了中美之间IT业的差异。\r\n\r\n    赵敏曾打算做软件业，但他在国内接触不少IT企业后却改变了主意。他发现中国IT企业的高端业务都很急需人才，这个缺口跟美国的情况差不多。但差异就出现在高端IT人才培训上，中国不但缺乏人才，而且缺乏相应的培训，层次低、不规范、不具规模，可以说高端IT培训几乎为零。因此，赵敏意识到这是个巨大商机：“我们一起回国的六个人，在国外都有很丰富很全面的实践以及教学经验，为何不把自己多年的技术和经验，传授给国内更多的IT行业人士呢？这似乎比自己亲自去做编程更有意义。”\r\n\r\n    心态开放要能理解差异\r\n\r\n    天津天士力制药公司总经理李文就认为，开放首先要能兼容差异。李文在英国工作学习两年后回国，曾感觉不适应：“我刚去英国的时候不懂得开车让道，有人让我就心安理得地开过去，但时间长了我也开始学着给别人让道，并慢慢成为习惯。”后来“回到国内，我反而对开车抢道、排队夹塞很不适应”。\r\n\r\n    但正是“有了出国的经历，我反而开始理解国人的这种行为”，“中国向来缺少private的观念，中国人习惯了什么东西都是国家的、集体的、公共的，很少有东西是公民自己的。没有尊重私有权的观念，当然无所谓尊重个人的权益。”\r\n\r\n    因此，李文得到的留学感悟是：“不管是留学、居住、参观考察，见识一下不同的社会形态，对日后的生活工作都大有帮助。倒不是说人家的社会一定有多先进，而是通过差异比较，可以反过来更理解国内的现象。理解并不是赞成，但是只有理解差异性是多样性世界的客观表达，你才能在差异中协同。而把握了这一点，就是把握了社会生活最基本的规律。” ', '1054', '1', '2', '1585047746');
INSERT INTO `book_chapter` VALUES ('188', '84', '思维灵活、善于人生调整', '开放你的人生', '  思维灵活、善于人生调整\r\n\r\n    一个拥有开放心态的人，通常也不会是一个特别固执的人。\r\n\r\n    心态不开放，便会意识不到形势的变化，只认一个理，只信奉一元的价值观，一条道走到黑，或者说一棵树上吊死。其实，“条条大路通罗马”、“战术是灵活的”、“事情是可以变通的”，只要合理，就不拒绝改变，这才是开放者所应有的心态。《易经》里不是说“穷则变，变则通，通则久”吗？\r\n\r\n    事情是可以变通的\r\n\r\n    曾担任过微软中国区主席和盛大公司总裁的唐骏，曾应邀在我主编的《缤纷海归》一书中撰文谈人生感悟。这位著名的职业经理人就将“父亲盖房子”列为少年时代对自己最有影响的事之一。\r\n\r\n    他说：“在我的整个少年时代，全家的重心和精力都放在盖房子上。因为在城里盖房子几乎是不可能的，于是我爸爸用了数年的时间和无数的心血跑各种关系，打擦边球，终于在江苏常州的城郊买下一块地建成了房子。这件事对我来说，让我知道了事情都是可以变通的，循规蹈矩、墨守成规很难做成事情，一种方法不行，还可以用别的很多方法。”\r\n\r\n    后来，唐骏大学毕业后非常想出国，他考上了北京邮电大学的研究生，但北邮出国名额已经用完。于是，他就给北京每个高校打电话，询问有没有剩余的出国名额。当打听到北广还有出国名额时，他就拿着考研成绩单要求转入北广读研。北广老师说：“你考虑清楚，尽管我们有名额，但你错过了时间，出国还要由教育部批准。”唐骏还是没有放弃，他打听到教育部主管此事的是李司长，就在教育部门口站了整整几天。早上见到李司长就说“李司长您早”；中午出来则说“李司长您出来吃饭？”下班的时候便说“您下班了”？等到第六天，李司长终于告诉他：你可以出国了。\r\n\r\n    俗话说“树挪死，人挪活”，在社会底线认可的前提之下，没有什么不可以调整，重要的是要能“活”。不要怕改变，更可怕的是成为生活的奴隶！毕竟是你要适应这个社会，而非这个社会来适应你。\r\n\r\n    上个世纪改革开放之初，当大多数人都还在迷恋机关铁饭碗时，不少人就因为敢于“下海”、“出国”、“创业”、调整自己的人生定位而取得成功。譬如王中军在物资出版社第一个辞职当个体户，这是体制内跑到体制外，他后来创办了华谊兄弟；再如国金证券首席经济学家金岩石博士，初中毕业时到开滦煤矿当了七年井下维修工，后来考上大学读研读博留学并成为大学教师，再后来“下海”在美国创办三普证券，并于1997年在纳斯达克借壳上市，再后回国在著名证券公司担任首席经济学家，最后甚至去电视台当起了财经节目主持人；包括我自己当年离开对外经贸部出国读MBA，也是人生大方向的调整。', '1096', '1', '3', '1585047770');

-- ----------------------------
-- Table structure for book_collect
-- ----------------------------
DROP TABLE IF EXISTS `book_collect`;
CREATE TABLE `book_collect` (
  `collect_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `book_id` tinyint(4) NOT NULL,
  `user_id` tinyint(4) NOT NULL,
  `collect_time` varchar(255) NOT NULL,
  PRIMARY KEY (`collect_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of book_collect
-- ----------------------------

-- ----------------------------
-- Table structure for book_comment
-- ----------------------------
DROP TABLE IF EXISTS `book_comment`;
CREATE TABLE `book_comment` (
  `comment_id` tinyint(4) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` tinyint(4) NOT NULL,
  `book_id` tinyint(4) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `time` int(10) unsigned NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of book_comment
-- ----------------------------
INSERT INTO `book_comment` VALUES ('2', '36', '33', '什么鸡巴破书啊', '11111111', '1397199579');
INSERT INTO `book_comment` VALUES ('3', '36', '33', '什么鸡巴破书啊', '11111111', '1397199889');
INSERT INTO `book_comment` VALUES ('5', '36', '33', '什么鸡巴破书啊', '11111111', '1397199899');
INSERT INTO `book_comment` VALUES ('6', '36', '33', '什么鸡巴破书啊', '11111111', '1397199903');
INSERT INTO `book_comment` VALUES ('7', '27', '33', '这是一本什么样的破书啊', '啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊', '1397203886');
INSERT INTO `book_comment` VALUES ('9', '72', '27', '推荐', '非常好', '1584798343');

-- ----------------------------
-- Table structure for book_consult
-- ----------------------------
DROP TABLE IF EXISTS `book_consult`;
CREATE TABLE `book_consult` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `user` varchar(32) NOT NULL,
  `content` text NOT NULL,
  `time` varchar(10) NOT NULL,
  `replay` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of book_consult
-- ----------------------------

-- ----------------------------
-- Table structure for book_history
-- ----------------------------
DROP TABLE IF EXISTS `book_history`;
CREATE TABLE `book_history` (
  `id` tinyint(3) NOT NULL AUTO_INCREMENT,
  `user_id` tinyint(3) NOT NULL,
  `book_id` tinyint(4) NOT NULL,
  `read_time` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of book_history
-- ----------------------------
INSERT INTO `book_history` VALUES ('1', '28', '14', '1396015317');

-- ----------------------------
-- Table structure for book_letter
-- ----------------------------
DROP TABLE IF EXISTS `book_letter`;
CREATE TABLE `book_letter` (
  `letter_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `letter_from` varchar(30) DEFAULT NULL,
  `letter_to` varchar(30) DEFAULT NULL,
  `letter_title` varchar(100) DEFAULT NULL,
  `letter_content` text,
  `status` int(1) unsigned NOT NULL DEFAULT '0',
  `from_sta` tinyint(1) NOT NULL DEFAULT '1',
  `to_sta` tinyint(1) NOT NULL DEFAULT '1',
  `time` int(10) NOT NULL,
  PRIMARY KEY (`letter_id`)
) ENGINE=InnoDB AUTO_INCREMENT=185 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of book_letter
-- ----------------------------
INSERT INTO `book_letter` VALUES ('179', '28', 'admin', '勾国磊', 'ddddddddddd', '0', '1', '1', '1396868035');
INSERT INTO `book_letter` VALUES ('180', '28', 'gouguolei', '这是修改前日志标', 'ssssssssssss', '1', '1', '1', '1396868059');
INSERT INTO `book_letter` VALUES ('181', '39', 'gouguolei', '测试11', 'sssssssssssss', '1', '1', '1', '1396868889');
INSERT INTO `book_letter` VALUES ('182', '28', 'gouguolei', 'aaaa', 'aaaaaaaaaaaaaaaaaa', '0', '1', '1', '1397142097');
INSERT INTO `book_letter` VALUES ('183', '39', 'author', '111111111', '11111111111', '0', '1', '1', '1397186355');
INSERT INTO `book_letter` VALUES ('184', '72', '网站管理员', '致读者的一封信', '啊啊啊', '0', '1', '1', '1584535950');

-- ----------------------------
-- Table structure for book_link
-- ----------------------------
DROP TABLE IF EXISTS `book_link`;
CREATE TABLE `book_link` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `url` varchar(64) NOT NULL,
  `intro` varchar(255) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of book_link
-- ----------------------------
INSERT INTO `book_link` VALUES ('18', '东游记飞', '西天', '中南科技大会计年度空c间方面你都没那么', '经济快递南京c', '3324324ccc', '1');
INSERT INTO `book_link` VALUES ('21', '百度', 'http://www.baidu.com', 'hzehjisjhjajjjnfjsnmfnsmnfmnmnfs', '257034155@qq.com', '18812889765', '1');

-- ----------------------------
-- Table structure for book_menu
-- ----------------------------
DROP TABLE IF EXISTS `book_menu`;
CREATE TABLE `book_menu` (
  `id` tinyint(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `position` varchar(10) NOT NULL DEFAULT 'header',
  `ordernum` tinyint(2) DEFAULT '50',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of book_menu
-- ----------------------------
INSERT INTO `book_menu` VALUES ('1', '在线书库', '/index.php/booksear/index.html', '1', 'header', '1');
INSERT INTO `book_menu` VALUES ('2', '排行榜', '/index.php/book/rank.html', '1', 'header', '2');
INSERT INTO `book_menu` VALUES ('3', '免费专区', '/index.php/book/free.html', '1', 'header', '3');
INSERT INTO `book_menu` VALUES ('4', 'VIP专区', '/index.php/book/vip.html', '1', 'header', '4');
INSERT INTO `book_menu` VALUES ('5', '订阅记录', '/index.php/member/order.html', '1', 'header', '5');
INSERT INTO `book_menu` VALUES ('6', '在线充值', '/index.php/member/pay.html', '1', 'header', '6');
INSERT INTO `book_menu` VALUES ('7', '会员中心', '/index.php/member/index.html', '1', 'header', '7');
INSERT INTO `book_menu` VALUES ('10', '关于我们', '/page/', '1', 'footer', '8');
INSERT INTO `book_menu` VALUES ('11', '后台登陆', '/admin.php/login', '1', 'footer', '12');
INSERT INTO `book_menu` VALUES ('12', '申请友情链接', '/links/add', '1', 'footer', '10');
INSERT INTO `book_menu` VALUES ('13', '联系我们', '/', '1', 'footer', '9');
INSERT INTO `book_menu` VALUES ('14', '帮助中心', '/', '1', 'footer', '10');
INSERT INTO `book_menu` VALUES ('15', '用户规则', '/', '1', 'footer', '11');

-- ----------------------------
-- Table structure for book_notice
-- ----------------------------
DROP TABLE IF EXISTS `book_notice`;
CREATE TABLE `book_notice` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `admin` varchar(32) NOT NULL,
  `title` varchar(32) NOT NULL,
  `content` varchar(64) NOT NULL,
  `time` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of book_notice
-- ----------------------------

-- ----------------------------
-- Table structure for book_order
-- ----------------------------
DROP TABLE IF EXISTS `book_order`;
CREATE TABLE `book_order` (
  `order_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `user_id` tinyint(4) NOT NULL,
  `book_id` int(3) NOT NULL,
  `chapter_id` varchar(255) NOT NULL,
  `order_time` varchar(10) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of book_order
-- ----------------------------
INSERT INTO `book_order` VALUES ('1', '27', '14', '2', '1234567897');
INSERT INTO `book_order` VALUES ('2', '28', '33', '17', '4567832145');
INSERT INTO `book_order` VALUES ('3', '36', '33', '12', '');
INSERT INTO `book_order` VALUES ('5', '36', '33', '16,17,20,21,22,23', '');
INSERT INTO `book_order` VALUES ('6', '36', '33', '15', '');
INSERT INTO `book_order` VALUES ('7', '72', '33', '12', '');

-- ----------------------------
-- Table structure for book_pages
-- ----------------------------
DROP TABLE IF EXISTS `book_pages`;
CREATE TABLE `book_pages` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(32) NOT NULL,
  `content` text NOT NULL,
  `public_time` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of book_pages
-- ----------------------------
INSERT INTO `book_pages` VALUES ('9', '团队介绍', '很久很久的更好的解决1打开几点上课1你开房间都是免费带你们', '');
INSERT INTO `book_pages` VALUES ('11', '联系我们', '地址： 海军\r\n\r\n邮箱：489348938js\r\n\r\n电话：1', '');
INSERT INTO `book_pages` VALUES ('13', '用户协议', '保守好似火炬大厦你妈叫你打麻将多少级', '');
INSERT INTO `book_pages` VALUES ('14', '隐私策略', '保护隐私权利', '');
INSERT INTO `book_pages` VALUES ('15', '法律声明', '手机开机付款尽快发多少就看你们分开计算', '');
INSERT INTO `book_pages` VALUES ('16', '常见问题', '灭绝的你就按你忙你的什么没打算你们', '');
INSERT INTO `book_pages` VALUES ('17', '签约流程', '免费算命，尺码，2拉拉手吗，吗，打开', '');
INSERT INTO `book_pages` VALUES ('18', '投稿流程', '即可v迷，没持续快速开始即可即可你都看美女美女', '');
INSERT INTO `book_pages` VALUES ('19', '合作伙伴', '百度 新浪 搜狐等', '');
INSERT INTO `book_pages` VALUES ('20', '联盟伙伴', '红袖添香 小说网等', '');

-- ----------------------------
-- Table structure for book_paycard
-- ----------------------------
DROP TABLE IF EXISTS `book_paycard`;
CREATE TABLE `book_paycard` (
  `paycard_id` int(3) NOT NULL AUTO_INCREMENT,
  `paycard_score` int(4) NOT NULL,
  `paycard_money` int(11) NOT NULL,
  PRIMARY KEY (`paycard_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of book_paycard
-- ----------------------------
INSERT INTO `book_paycard` VALUES ('1', '10000', '100');
INSERT INTO `book_paycard` VALUES ('2', '5000', '50');
INSERT INTO `book_paycard` VALUES ('3', '3000', '30');
INSERT INTO `book_paycard` VALUES ('4', '2000', '20');
INSERT INTO `book_paycard` VALUES ('7', '20000', '200');

-- ----------------------------
-- Table structure for book_role
-- ----------------------------
DROP TABLE IF EXISTS `book_role`;
CREATE TABLE `book_role` (
  `role_id` tinyint(4) unsigned NOT NULL AUTO_INCREMENT,
  `role_name` varchar(30) NOT NULL,
  `role_type` int(11) NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of book_role
-- ----------------------------
INSERT INTO `book_role` VALUES ('1', '任意操作', '1');
INSERT INTO `book_role` VALUES ('2', '显示小说列表', '2');
INSERT INTO `book_role` VALUES ('3', '增加小说', '2');
INSERT INTO `book_role` VALUES ('4', '修改小说', '2');
INSERT INTO `book_role` VALUES ('5', '删除小说', '2');
INSERT INTO `book_role` VALUES ('6', '显示章节列表', '2');
INSERT INTO `book_role` VALUES ('7', '增加章节', '2');
INSERT INTO `book_role` VALUES ('8', '修改章节', '2');
INSERT INTO `book_role` VALUES ('9', '删除章节', '2');
INSERT INTO `book_role` VALUES ('10', '显示分类列表', '2');
INSERT INTO `book_role` VALUES ('11', '增加分类', '2');
INSERT INTO `book_role` VALUES ('12', '修改分类', '2');
INSERT INTO `book_role` VALUES ('13', '删除分类', '2');
INSERT INTO `book_role` VALUES ('14', '显示会员列表', '3');
INSERT INTO `book_role` VALUES ('15', '增加会员', '3');
INSERT INTO `book_role` VALUES ('16', '修改会员', '3');
INSERT INTO `book_role` VALUES ('17', '删除会员', '3');
INSERT INTO `book_role` VALUES ('18', '显示权限列表', '6');
INSERT INTO `book_role` VALUES ('19', '显示用户组', '6');
INSERT INTO `book_role` VALUES ('20', '增加用户组', '6');
INSERT INTO `book_role` VALUES ('21', '修改用户组', '6');
INSERT INTO `book_role` VALUES ('22', '删除用户组', '6');
INSERT INTO `book_role` VALUES ('23', '显示单页列表', '7');
INSERT INTO `book_role` VALUES ('24', '增加单页列表', '7');
INSERT INTO `book_role` VALUES ('25', '修改单页', '7');
INSERT INTO `book_role` VALUES ('26', '删除单页', '7');
INSERT INTO `book_role` VALUES ('27', '显示广告列表', '7');
INSERT INTO `book_role` VALUES ('28', '增加广告', '7');
INSERT INTO `book_role` VALUES ('29', '修改广告', '7');
INSERT INTO `book_role` VALUES ('30', '删除广告', '7');
INSERT INTO `book_role` VALUES ('31', '显示友情链接列表', '7');
INSERT INTO `book_role` VALUES ('32', '增加友情链接', '7');
INSERT INTO `book_role` VALUES ('33', '修改友情链接', '7');
INSERT INTO `book_role` VALUES ('34', '删除友情链接', '7');
INSERT INTO `book_role` VALUES ('35', '基本参数设置', '1');
INSERT INTO `book_role` VALUES ('36', '显示菜单列表', '1');
INSERT INTO `book_role` VALUES ('37', '增加菜单', '1');
INSERT INTO `book_role` VALUES ('38', '修改菜单', '1');
INSERT INTO `book_role` VALUES ('39', '删除菜单', '1');
INSERT INTO `book_role` VALUES ('40', '数据库备份/还原', '1');

-- ----------------------------
-- Table structure for book_role_group
-- ----------------------------
DROP TABLE IF EXISTS `book_role_group`;
CREATE TABLE `book_role_group` (
  `group_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `group_name` varchar(32) NOT NULL,
  `role_id` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of book_role_group
-- ----------------------------
INSERT INTO `book_role_group` VALUES ('1', '超级管理员', null);
INSERT INTO `book_role_group` VALUES ('2', '信息发布员', null);
INSERT INTO `book_role_group` VALUES ('3', '小说管理员', null);
INSERT INTO `book_role_group` VALUES ('4', '章节管理员', null);
INSERT INTO `book_role_group` VALUES ('5', '会员管理员', null);
INSERT INTO `book_role_group` VALUES ('6', '积分管理员', null);
INSERT INTO `book_role_group` VALUES ('7', '系统管理员', null);
INSERT INTO `book_role_group` VALUES ('8', '稿费管理员', null);
INSERT INTO `book_role_group` VALUES ('9', '论坛管理员', null);
INSERT INTO `book_role_group` VALUES ('14', '小说', 'blist,clist,catlist,mlist,alis');

-- ----------------------------
-- Table structure for book_siteset
-- ----------------------------
DROP TABLE IF EXISTS `book_siteset`;
CREATE TABLE `book_siteset` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `site_name` varchar(32) NOT NULL,
  `site_keywords` varchar(255) DEFAULT NULL,
  `site_descript` varchar(255) DEFAULT NULL,
  `site_copyright` varchar(255) DEFAULT NULL,
  `site_beian` varchar(200) DEFAULT NULL,
  `site_style` varchar(20) NOT NULL DEFAULT 'default',
  `site_logo` varchar(255) NOT NULL DEFAULT 'uploads',
  `site_status` tinyint(1) NOT NULL DEFAULT '0',
  `close_info` varchar(255) NOT NULL DEFAULT '抱歉，网站暂时关闭',
  `allow_reg` tinyint(1) NOT NULL DEFAULT '1',
  `reg_send_email` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of book_siteset
-- ----------------------------
INSERT INTO `book_siteset` VALUES ('1', '在线书城', '在线读书，提供文学、文艺、教育、小说等图书', '致力于打造好看的小说阅读网，提供免费的教育、文艺图书', '版权仅自己所有', '100000', 'default', 'Uploads/logo/5341509131390.png', '1', '抱歉，网站升级，敬请期待', '1', '1');

-- ----------------------------
-- Table structure for book_user
-- ----------------------------
DROP TABLE IF EXISTS `book_user`;
CREATE TABLE `book_user` (
  `user_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pwd` varchar(32) NOT NULL,
  `user_type` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `user_status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `reg_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of book_user
-- ----------------------------
INSERT INTO `book_user` VALUES ('27', 'zhangsan', 'zhangsan@163.com', 'e10adc3949ba59abbe56e057f20f883e', '1', '1', '1396245879');
INSERT INTO `book_user` VALUES ('28', 'gouguolei', 'gouguolei@vip.qq.com', '21232f297a57a5a743894a0e4a801fc3', '1', '1', '1396249781');
INSERT INTO `book_user` VALUES ('29', 'jiang', 'dsadsadsadsa', '8ce87b8ec346ff4c80635f667d1592ae', '1', '1', '1396253567');
INSERT INTO `book_user` VALUES ('35', 'jiangjiang', '3213213214321', '25d55ad283aa400af464c76d713c07ad', '1', '1', '1396267300');
INSERT INTO `book_user` VALUES ('36', '笑三少', '11111111111111111@qq.com', 'e10adc3949ba59abbe56e057f20f883e', '2', '1', '1396014700');
INSERT INTO `book_user` VALUES ('38', '唐家三少', 'qqqq@2222.com', 'e10adc3949ba59abbe56e057f20f883e', '2', '1', '1396495491');
INSERT INTO `book_user` VALUES ('39', 'author', '245629560@qq.com', '21232f297a57a5a743894a0e4a801fc3', '2', '1', '1396539654');
INSERT INTO `book_user` VALUES ('40', 'gouguoyin', 'gouguolei@vip.qq.com', '21232f297a57a5a743894a0e4a801fc3', '1', '1', '1396791679');
INSERT INTO `book_user` VALUES ('41', 'zhoulu', '245629560@qq.com', '21232f297a57a5a743894a0e4a801fc3', '1', '1', '1396791903');
INSERT INTO `book_user` VALUES ('55', 'dertyyuu', 'gouguolei@vip.qq.com', '21232f297a57a5a743894a0e4a801fc3', '1', '1', '1396793375');
INSERT INTO `book_user` VALUES ('56', 'tghkklkll', 'gouguolei@vip.qq.com', '21232f297a57a5a743894a0e4a801fc3', '1', '1', '1396793437');
INSERT INTO `book_user` VALUES ('64', 'hjkl', 'gouguolei@vip.qq.com', '21232f297a57a5a743894a0e4a801fc3', '1', '1', '1396794463');
INSERT INTO `book_user` VALUES ('68', 'aaaaaaaaaaa', 'gouguolei@vip.qq.com', '74b87337454200d4d33f80c4663dc5e5', '1', '1', '1396810849');
INSERT INTO `book_user` VALUES ('69', '123456', '123@qq.com', 'e10adc3949ba59abbe56e057f20f883e', '1', '1', '1397199797');
INSERT INTO `book_user` VALUES ('72', 'damaihua', '1506419724@qq.com', 'e10adc3949ba59abbe56e057f20f883e', '1', '1', '1584438517');
INSERT INTO `book_user` VALUES ('73', 'wulilisi', '11111@qq.com', 'e10adc3949ba59abbe56e057f20f883e', '1', '1', '1584799886');

-- ----------------------------
-- Table structure for book_user_info
-- ----------------------------
DROP TABLE IF EXISTS `book_user_info`;
CREATE TABLE `book_user_info` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `user_sex` tinyint(1) NOT NULL DEFAULT '0',
  `user_id` tinyint(4) NOT NULL,
  `user_nicename` varchar(30) DEFAULT NULL,
  `user_avatar` varchar(50) DEFAULT '/public/images/avatar.php.gif',
  `user_score` int(10) DEFAULT '0',
  `user_info` varchar(255) DEFAULT '这个家伙很懒，什么也没留下',
  `lv_id` tinyint(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of book_user_info
-- ----------------------------
INSERT INTO `book_user_info` VALUES ('2', '2', '39', '妙笔生花', 'Uploads/avatar/1396664041_162.jpg', '20000', '这个家伙很懒，什么也没留下', '1');
INSERT INTO `book_user_info` VALUES ('28', '1', '28', '天使街23号', 'Uploads/avatar/1397142578_162.jpg', '9003', '非著名北漂挨踢男、程序猿，伪文艺2B青年，资深屌丝； 本来名字很独特，但很无辜地被叫成勾勾，瞬间被萌化了。据说爱美女，爱网络，爱旅游，各种控，各种宅，不纠结会死星人，不折腾会死星人。此人纯属虚构，如有雷同，纯属被抄袭……\r\n', '1');
INSERT INTO `book_user_info` VALUES ('29', '0', '36', '笑三少', '/public/images/avatar.php.gif', '99999939', '这个家伙很懒，什么也没留下', '1');
INSERT INTO `book_user_info` VALUES ('30', '0', '38', '唐家三少', '/public/images/avatar.php.gif', '9999990', '这个家伙很懒，什么也没留下', '1');
INSERT INTO `book_user_info` VALUES ('31', '0', '70', null, '/public/images/avatar.php.gif', '0', '这个家伙很懒，什么也没留下', '1');
INSERT INTO `book_user_info` VALUES ('32', '0', '71', null, '/public/images/avatar.php.gif', '0', '这个家伙很懒，什么也没留下', '1');
INSERT INTO `book_user_info` VALUES ('33', '0', '72', null, '/public/images/avatar.php.gif', '1995', '这个家伙很懒，什么也没留下', '1');
INSERT INTO `book_user_info` VALUES ('34', '0', '73', null, '/public/images/avatar.php.gif', '0', '这个家伙很懒，什么也没留下', '1');

-- ----------------------------
-- Table structure for book_user_lv
-- ----------------------------
DROP TABLE IF EXISTS `book_user_lv`;
CREATE TABLE `book_user_lv` (
  `lv_id` tinyint(2) NOT NULL AUTO_INCREMENT,
  `lv_name` varchar(20) NOT NULL,
  `lv_score` varchar(5) NOT NULL,
  PRIMARY KEY (`lv_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of book_user_lv
-- ----------------------------
INSERT INTO `book_user_lv` VALUES ('1', '普通会员', '0');
INSERT INTO `book_user_lv` VALUES ('2', '铁牌会员', '100');
INSERT INTO `book_user_lv` VALUES ('3', '铜牌会员', '500');
INSERT INTO `book_user_lv` VALUES ('4', '银牌会员', '1000');
INSERT INTO `book_user_lv` VALUES ('5', '金牌会员', '1500');
INSERT INTO `book_user_lv` VALUES ('6', 'VIP会员', '2000');
