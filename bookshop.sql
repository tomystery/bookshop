/*
Navicat MySQL Data Transfer

Source Server         : hah
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : bookshop

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-05-22 17:20:58
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(255) DEFAULT NULL,
  `pwd` varchar(255) DEFAULT NULL,
  `realname` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('5', 'qq', '123', '11', '11');
INSERT INTO `admin` VALUES ('7', '11', '11', '杨洋', '13356678890');
INSERT INTO `admin` VALUES ('23', 'admin', 'admin', '杨燃', '13237081696');

-- ----------------------------
-- Table structure for `article`
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `contents` text,
  `addtime` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES ('5', '热烈祝贺本站隆重上线', '<p>让大家期待已久的网站，今天终于隆重上线啦，欢迎光临了</p>\r\n', '2016-03-28 12:30:09');
INSERT INTO `article` VALUES ('7', '6.1儿童节搞活动啦！', '<p>全场书籍买一送一，有买有送，还包邮费。</p>\r\n', '2017-05-17 22:44:57');

-- ----------------------------
-- Table structure for `cart`
-- ----------------------------
DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usersid` varchar(255) DEFAULT NULL,
  `goodsid` varchar(255) DEFAULT NULL,
  `num` varchar(255) DEFAULT NULL,
  `addtime` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cart
-- ----------------------------
INSERT INTO `cart` VALUES ('41', '1', '24', '1', '2017-04-20', '22', 'img/goods/cover5.jpg');
INSERT INTO `cart` VALUES ('42', '1', '24', '1', '2017-04-20', '22', 'img/goods/cover5.jpg');
INSERT INTO `cart` VALUES ('43', '7', '9', '1', '2017-04-20', '17', 'img/goods/42.jpg');
INSERT INTO `cart` VALUES ('49', '5', '9', '1', '2017-05-18', '17', 'img/goods/42.jpg');
INSERT INTO `cart` VALUES ('50', '5', '9', '4', '2017-05-18', '17', 'img/goods/42.jpg');
INSERT INTO `cart` VALUES ('51', '5', '9', '4', '2017-05-18', '17', 'img/goods/42.jpg');

-- ----------------------------
-- Table structure for `cate`
-- ----------------------------
DROP TABLE IF EXISTS `cate`;
CREATE TABLE `cate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `catename` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cate
-- ----------------------------
INSERT INTO `cate` VALUES ('1', '文艺');
INSERT INTO `cate` VALUES ('2', '经管');
INSERT INTO `cate` VALUES ('3', '社科');
INSERT INTO `cate` VALUES ('4', '生活');
INSERT INTO `cate` VALUES ('5', '教育');
INSERT INTO `cate` VALUES ('6', '科技');
INSERT INTO `cate` VALUES ('7', '童书');
INSERT INTO `cate` VALUES ('8', '进口书');
INSERT INTO `cate` VALUES ('9', '期刊杂志');
INSERT INTO `cate` VALUES ('10', '网文女频');
INSERT INTO `cate` VALUES ('11', '网文男频');

-- ----------------------------
-- Table structure for `course`
-- ----------------------------
DROP TABLE IF EXISTS `course`;
CREATE TABLE `course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `coursename` varchar(255) DEFAULT NULL,
  `contents` text,
  `coursetime` varchar(255) DEFAULT NULL,
  `money` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of course
-- ----------------------------
INSERT INTO `course` VALUES ('1', '啊实打实大师的', '<p>在此添加内容在线促销政策在在</p>\r\n', '20', '500');
INSERT INTO `course` VALUES ('2', '课程1', '<p>课程1课程1课程1课程1课程1课程1课程1</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>课程1课程1课程1课程1课程1课程1课程1</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>课程1课程1课程1课程1课程1课程1课程1</p>\r\n', '20', '500');
INSERT INTO `course` VALUES ('3', '课程2', '<p>课程2课程2课程2课程2课程2课程2课程2</p>\r\n\r\n<p>课程2课程2课程2课程2课程2课程2课程2课程2课程2</p>\r\n\r\n<p>课程2课程2课程2课程2</p>\r\n', '20', '500');
INSERT INTO `course` VALUES ('4', '课程3', '<p>课程3课程3课程3课程3课程3课程3</p>\r\n', '20', '500');
INSERT INTO `course` VALUES ('5', '4444444444445', '<p>在此添加内容44444444</p>\r\n', '44', '444');
INSERT INTO `course` VALUES ('6', '3333', '<p>在此添加内容3333</p>\r\n', '33', '333');

-- ----------------------------
-- Table structure for `details`
-- ----------------------------
DROP TABLE IF EXISTS `details`;
CREATE TABLE `details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ordercode` varchar(255) DEFAULT NULL,
  `usersid` varchar(255) DEFAULT NULL,
  `goodsid` varchar(255) DEFAULT NULL,
  `num` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of details
-- ----------------------------
INSERT INTO `details` VALUES ('8', 'DD5668669325611098', '2', '6 ', '1', '158 ');
INSERT INTO `details` VALUES ('9', 'DD5668669325611098', '2', '3 ', '4', '158 ');
INSERT INTO `details` VALUES ('10', 'DD3798784991768610', '2', '6 ', '1', '158 ');
INSERT INTO `details` VALUES ('11', 'DD3798784991768610', '2', '3 ', '4', '158 ');
INSERT INTO `details` VALUES ('12', 'DD5969765239920798', '3', '7 ', '2', '450 ');
INSERT INTO `details` VALUES ('13', 'DD5969765239920798', '3', '3 ', '4', '158 ');
INSERT INTO `details` VALUES ('14', 'DD2349818161436394', '3', '5 ', '3', '158 ');
INSERT INTO `details` VALUES ('15', 'DD2349818161436394', '3', '4 ', '1', '158 ');
INSERT INTO `details` VALUES ('16', 'DD5399446546461091', '4', '8 ', '4', '1399 ');
INSERT INTO `details` VALUES ('17', 'DD5399446546461091', '4', '4 ', '1', '158 ');
INSERT INTO `details` VALUES ('18', 'DD7747704932430949', '4', '7 ', '5', '450 ');
INSERT INTO `details` VALUES ('19', 'DD7747704932430949', '4', '6 ', '7', '158 ');
INSERT INTO `details` VALUES ('20', 'DD7747704932430949', '4', '5 ', '1', '158 ');
INSERT INTO `details` VALUES ('21', 'DD7097343068365365', '1', '11 ', '1', '2 ');
INSERT INTO `details` VALUES ('22', 'DD1378548183583965', '4', '11 ', '10', '2 ');
INSERT INTO `details` VALUES ('23', 'DD1503577900046882', '4', '2 ', '1', '40 ');
INSERT INTO `details` VALUES ('24', 'DD1503577900046882', '4', '6 ', '1', '6.9 ');
INSERT INTO `details` VALUES ('25', 'DD1503577900046882', '4', '6 ', '1', '6.9 ');
INSERT INTO `details` VALUES ('26', 'DD1617885406357132', '4', '11 ', '1', '2 ');
INSERT INTO `details` VALUES ('27', 'DD8189784048169307', '4', '11 ', '1', '2 ');
INSERT INTO `details` VALUES ('28', 'DD2219884740654683', '1', '27', '1', '21.00');
INSERT INTO `details` VALUES ('29', 'DD8595789563689039', '1', '3', '1', '10');
INSERT INTO `details` VALUES ('30', 'DD3725360824547051', '5', '3', '10', '10');
INSERT INTO `details` VALUES ('31', 'DD4711372759342901', '1', '2', '1', '23');
INSERT INTO `details` VALUES ('32', 'DD7995789599438801', '5', '26', '1', '16.95');
INSERT INTO `details` VALUES ('33', 'DD7995789599438801', '5', '4', '10', '21');
INSERT INTO `details` VALUES ('34', 'DD3937502822424132', '1', '2', '1', '23');
INSERT INTO `details` VALUES ('35', 'DD3937502822424132', '1', '27', '1', '21.00');
INSERT INTO `details` VALUES ('36', 'DD3937502822424132', '1', '27', '1', '21.00');
INSERT INTO `details` VALUES ('37', 'DD3937502822424132', '1', '26', '1', '16.95');
INSERT INTO `details` VALUES ('38', 'DD7576248585504157', '1', '3', '1', '10');
INSERT INTO `details` VALUES ('39', 'DD3772635897964412', '1', '2', '1', '23');
INSERT INTO `details` VALUES ('40', 'DD4301472255860413', '1', '9', '9', '17');
INSERT INTO `details` VALUES ('41', 'DD4301472255860413', '1', '3', '1', '10');
INSERT INTO `details` VALUES ('42', 'DD9796892790340078', '10', '1', '1', '20');
INSERT INTO `details` VALUES ('43', 'DD9384873504286173', '10', '3', '10', '10');
INSERT INTO `details` VALUES ('44', 'DD1059045861260827', '1', '20', '12', '50');
INSERT INTO `details` VALUES ('45', 'DD8593135417666697', '1', '27', '1', '21.00');
INSERT INTO `details` VALUES ('46', 'DD8593135417666697', '1', '21', '1', '32');
INSERT INTO `details` VALUES ('47', 'DD7564399708781838', '1', '23', '1', '23');
INSERT INTO `details` VALUES ('48', 'DD7260531459921168', '1', '23', '1', '23');
INSERT INTO `details` VALUES ('49', 'DD4279291253141398', '1', '11', '10', '20');
INSERT INTO `details` VALUES ('50', 'DD9990387163181556', '10', '7', '10', '31');
INSERT INTO `details` VALUES ('51', 'DD7264432055799065', '10', '1', '1', '20');
INSERT INTO `details` VALUES ('52', 'DD7264432055799065', '10', '27', '1', '21.00');
INSERT INTO `details` VALUES ('53', 'DD8990235873679592', '2', '10', '1', '28');
INSERT INTO `details` VALUES ('54', 'DD3120654062359091', '1', '11', '1', '20');
INSERT INTO `details` VALUES ('55', 'DD3120654062359091', '1', '26', '1', '16.95');
INSERT INTO `details` VALUES ('56', 'DD4432616043350186', '3', '19', '1', '23');
INSERT INTO `details` VALUES ('57', 'DD4432616043350186', '3', '11', '1', '20');
INSERT INTO `details` VALUES ('58', 'DD5240378701235567', '5', '11', '1', '20');
INSERT INTO `details` VALUES ('59', 'DD5240378701235567', '5', '11', '2', '20');
INSERT INTO `details` VALUES ('60', 'DD5240378701235567', '5', '6', '1', '6.9');
INSERT INTO `details` VALUES ('61', 'DD5240378701235567', '5', '6', '12', '7');
INSERT INTO `details` VALUES ('62', 'DD1427606194097585', '5', '11', '1', '20');
INSERT INTO `details` VALUES ('63', 'DD4838442684619948', '5', '26', '1', '17');
INSERT INTO `details` VALUES ('64', 'DD0685731998354338', '5', '9', '1', '17');

-- ----------------------------
-- Table structure for `goods`
-- ----------------------------
DROP TABLE IF EXISTS `goods`;
CREATE TABLE `goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `cateid` int(255) DEFAULT NULL,
  `marketprice` double(255,0) DEFAULT NULL,
  `nowprice` double(255,0) DEFAULT NULL,
  `special` varchar(255) DEFAULT NULL,
  `store` int(255) DEFAULT NULL,
  `sellnum` int(255) DEFAULT NULL,
  `contents` text,
  `author` varchar(255) DEFAULT NULL,
  `press` varchar(255) DEFAULT NULL,
  `publishtime` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of goods
-- ----------------------------
INSERT INTO `goods` VALUES ('1', '红拂夜奔', 'img/goods/11.jpg', 'img/goods/wy1.jpg', '1', '50', '20', '', '98', '2', '《红拂夜奔》是以流氓天才李靖变成皇帝御用工具的故事，表现知识分子在反智社会中的尴尬处境，以及“有趣”在权力操弄下变为“无趣”的过程及其文化。?《唐人故事》弥漫着强烈的童话气息。这些“唐代人物”，主体性极其丰盈，游戏精神高度充沛，乖张有趣，怪念迭出，多是女贼男盗不伦之徒，常有打赌竞赛捣乱之举。故事的每一处转折，完全不靠这些人物在紧急情境中的被动起落（这种情况基本不存在），而是往往由类似这样的句子来完成：“他起初想……后来又改了主意……”也就是说，是人物内心的自主对话造成了情节的突转。这一做法在效果上稚拙可掬，回味起来却寓意无穷，《夜行记》*为典型。《立新街甲一号与昆仑奴》里，每一句“这种感觉，古今无不同”，即实现一次高效率的时空转换，同时为全篇确立了诗的节奏。《红线盗盒》中，红线这个精灵古怪的小蛮婆，彻底颠覆了象征着等级、官本和男权的薛嵩的权威，这一颠覆也释放出阅读者对“阴暗传统”的攻击快感。《红拂夜奔》（后来长篇小说《红拂夜奔》的雏形）的伪史插叙和故事悬念相映成趣，漫画夸张的人物和精神自由的主题相互彰显。而《舅舅情人》，则是我所见到的关于“暗恋”的小说中*奇特的一部。谁能说清小女孩和王安之间“绿色的爱”到底为何物？作者似乎在说：这是一种纯粹的精神之爱，女孩得到了她对此爱的验证，就离开了王安的生活，王安的妻子也得以释放回家与他团聚，还改正了自己爱吃醋的毛病。十足的大团圆结尾。? 童话都是大团圆结尾。这一时期的王小波愿意孩子似的相信：阴暗滞重的世界终将没落，美好的自由将如不竭的清泉，洗去人类的贫乏与忧郁。', '王小波', '北京联合出版社', '2016-05-01');
INSERT INTO `goods` VALUES ('2', '白说', 'img/goods/12.jpg', 'img/goods/wy2.jpg', '1', '34', '23', '', '96', '4', '\r\n《白说》是央视资深新闻人白岩松继《幸福了吗》《痛并快乐着》之后的全新作品，一部“自传”式的心灵履历。通过近年来于各个场合与公众的深入交流，以平等自由的态度，分享其世界观和价值观。时间跨度长达十五年，涵盖时政、教育、改革、音乐、阅读、人生等多个领域，温暖发声，理性执言。 在有权保持沉默的年纪拒绝沉默，为依然热血有梦的人们敲鼓拨弦。尽管“说话不是件好玩的事儿”，依然向往“说出一个更好点儿的未来”，就算“说了白说”，可是“不说，白不说”。', '白岩松', '长江文艺出版社', '2015-09-01');
INSERT INTO `goods` VALUES ('3', '我们从未陌生过', 'img/goods/13.jpg', 'img/goods/wy3.jpg', '1', '32', '10', '', '77', '35', '韩寒亲任主编的“ONE·一个”精选书系第七部《我们从未陌生过》，APP精选27篇好文独家放送。\r\n　　特邀何炅、张皓宸、大冰、荞麦、咸贵人的独家好文', '韩寒', '浙江文艺出版社', '2015-08-01');
INSERT INTO `goods` VALUES ('4', '蚂蚁金服', 'img/goods/21.jpg', 'img/goods/jg1.jpg', '2', '32', '21', '', '90', '12', '支付宝、余额宝等超过六亿用户使用的创新产品到底是怎样诞生的？\r\n马云等企业高层在蚂蚁金服发展中做出了哪些重要决策？\r\n为什么蚂蚁金服能够从支付领域一步步进入金融领域？\r\n蚂蚁金服是用什么力量改变了中国金融体系的面貌？\r\n为什么是蚂蚁金服而不是其他企业，成为当今全球估值*的科技金融企业？\r\n推动蚂蚁金服这家科技金融标杆性企业不断前进的密码是什么？\r\n面对未来更加激烈的竞争，蚂蚁金服的胜算几何？\r\n对世界的互联网金融企业而言，蚂蚁金服有哪些值得借鉴之处？\r\n从宏观上来看，金融科技领域创新创业的正确打开方式是什么？\r\n从全球来看，科技金融行业的发展逻辑和未来趋势如何？\r\n1.独一无二：本书是目前第yi部关于蚂蚁金服这个科技金融标杆性企业的传记。\r\n2.客观真实：作者独家深入专访多位蚂蚁金服创始人、高管和合作伙伴；蚂蚁金服不对采访和写作进行干预，保证了写作内容的独立性和客观性、真实性。 \r\n3.全面翔实：全景展示蚂蚁金服的过去、现在和未来。聚焦公司成长关键节点，翔实披露关键性的鲜为人知的决策过程，生动讲述支付宝、余额宝、快捷支付、芝麻信用等产品诞生的故事，全面阐述蚂蚁金服发展过程中的曲折和坎坷历程。\r\n4.多维展示：书中还配以公司发展过程中大量珍贵的图片，多维展示蚂蚁金服真实创业创新生态。\r\n5.实用借鉴：高度提炼和深度披露蚂蚁金服成功的“秘诀”：用户*、价值观主导、用业务锤炼组织。书中包含马云、彭蕾、井贤栋等企业高管在企业发展过程中可供借鉴的商业理念、运作模式、用人之道、企业文化建设等企业管理的智慧。', '由曦', '中信出版社', '2017-04-01');
INSERT INTO `goods` VALUES ('5', '余生太短，要和有趣的人在一起', 'img/goods/22.jpg', 'img/goods/jg2.jpg', '2', '32', '24', '', '100', '4', '在如林的世界里，永远不缺少各式各样的生活，可唯独，有趣的，*难做到\r\n有趣=有见识 有姿势 有品位，有趣就是说话风趣，人格可信，见识高明，眼神清澈\r\n有趣≠有用or有颜or有钱，这世界好看的皮囊太多，有趣的灵魂太少\r\n做有趣的人，和有趣的人在一起，让生活打击你，直到它打不动。\r\n◎人生的美好，不在于挣了多少钞票，不在于拥有多高的颜值，不分年龄、国界，而是在于能和一个有趣的人，把生活过的有滋有味有趣有料。\r\n◎杨熹文、萌叔、陆JJ、极乐等22个有趣的热文作者，22种不同的有趣姿势，告诉你，会讲段子、会逗你笑并不够有趣，真正十足的有趣是明明是在讲道理，却让你觉得新奇。\r\n◎余生太短，于日用必需的物件和人情以外，我们必须还有一点无用的游戏与乐趣，生活才觉得有意思。\r\n◎为什么要和有趣的人在一起？因为只要和有趣的人在一起，不管在哪里，生活都是种种有趣，种种可爱。和有趣的人在一起，一碗粥也能喝出玫瑰的气息。\r\n◎这世上好看的人很多，有趣的人太少，如果遇到可以聊、可以爱的人，请细细珍惜。\r\n', '麦子熟了', '北京联合出版公司', '2017-02-01');
INSERT INTO `goods` VALUES ('6', '李嘉诚：我一生的理念', 'img/goods/31.jpg', 'img/goods/renwen1.jpg', '3', '14', '7', '', '85', '25', '这本李嘉诚的传记，尚未问世就吸引了来自世界各地的目光，引发出版界、财经界、网络世界的大震荡：各大出版机构重金预定，为获得版权展开激烈争夺；商业大佬争相试读，阅后一致强烈推荐、口碑传送；成千上万网友奔走相告，为一睹本书内容而绞尽脑汁、用尽办法…… 　　在这本书中，李嘉诚毫无隐瞒地、诚挚地透漏了他传奇而跌宕的一生，讲述自己从青年时代到成长为亚洲首富的全过程，包含人生转折点上每一个隐秘而关键的细节。 　　他倾心道来自己对于商业的理解、经商和财富之道，如何抓住人生中转瞬即逝的机遇，如何滚雪球一般积累自己的财富，如何判断经济的趋势和未来的方向从而长期保持财富…… 　　年近九十岁的李嘉诚，他用自己独特的样本式的传奇经历，将人生历程、成功之道、财富之悟熔于一炉，将自己一直秉承不弃的人生理念贯穿其中，造就了这部深含智慧、独具韵味而又深刻到直抵你内心的传世之作。\r\n\r\n', '李永宁', '清华大学出版社', '2014-10-01');
INSERT INTO `goods` VALUES ('7', '人类简史', 'img/goods/32.jpg', 'img/goods/renwen2.jpg', '3', '56', '31', '', '90', '17', '本书是作者潜心多年，精心写成的重磅力作，从宇宙的起源、人类的诞生到宗教的萌芽，从原始人部落之间的争端到第二次世界大战的爆发，作者将人类从无到有、从古至今的关键点和细节逐一讲述，风趣而幽默，犀利而深刻。翻开这本书，您将跟随作者感受三百万年人类发展史，六千年人类文明史。', '亚特伍德', '九州出版社', '2016-05-01');
INSERT INTO `goods` VALUES ('8', '好妈妈胜过好老师2：自由的孩子最自觉', 'img/goods/41.jpg', 'img/goods/shenhuo1.jpg', '1', '39', '29', '是', '100', '4', '<p>实操性超强的家教书！叛逆、厌学、早熟、二胎、坏朋友、性教育&hellip;所有问题，都有答案！《好妈妈胜过好老师》作者突破之作。从22万案例中提炼出98个典型家庭教育问题。673万妈妈亲身实践，管用！</p>\r\n', '尹建莉', '百花洲文艺出版社', '2016-07-01');
INSERT INTO `goods` VALUES ('9', '走遍中国', 'img/goods/42.jpg', 'img/goods/shenhuo2.jpg', '4', '26', '17', '', '90', '10', '\r\n《走遍中国》一改传统旅游手册的面目，集中介绍景区（点）的同时，为游客更多地展示了该地区代表性图片。全书以地域划分章节，中国34个行政区划*价值的旅游景点一一陈列，让读者在舒适的环境中就可以“游览”神州美景。通过这一篇篇汩汩流淌的文字，通过这一张张精心挑选的图画，抵达你向往的内心，从而走向更远！', '《图说天下·国家地理系列》编委会', '北京联合出版公司', '2014-04-01');
INSERT INTO `goods` VALUES ('10', '最强大脑:写给中国人的记忆魔法书', 'img/goods/51.jpg', 'img/goods/jiaoyu1.jpg', '5', '39', '28', '', '99', '1', '记性不好成绩差？ 记忆大师来帮你！ 王峰是世界上记忆力最好的人，但他并非天生如此，在接触记忆法之前，他只是一个普通的大学生。而半年之后，他震惊世界，成为一名世界记忆大师。 这一切，全赖于记忆法的学习以及不懈的努力。\r\n', '王峰,陈林,刘苏', '北京大学出版社', '2017-01-01');
INSERT INTO `goods` VALUES ('11', '假如给我三天光明', 'img/goods/52.jpg', 'img/goods/jiaoyu2.jpg', '5', '26', '20', '', '71', '29', '全书包括“我生活的故事”和“假如给我三天光明”两部分。“我的生活的故事”主要写海伦·凯勒童年到大学一年级的生活，“假如给我三天光明”是海伦·凯勒最广为人知的一篇文章。', '凯勒', '安徽教育出版社', '2015-01-01');
INSERT INTO `goods` VALUES ('12', '这才是最强PPT', 'img/goods/61.jpg', 'img/goods/keji1.jpg', '6', '88', '34', null, null, null, '　选对模板，你的PPT就会有美的生产力；用好文字，你的PPT就会变成一个天才演讲家；图片用出彩，你的PPT就会有超强的职场电波；色彩用妙，你的PPT就会像一位洞悉心理的专家；版式设计绝了，你的PPT每一个元素都会说话……', '胡燕', '北京联合出版公司', '2017-01-01');
INSERT INTO `goods` VALUES ('13', 'Java从入门到精通', 'img/goods/62.jpg', 'img/goods/keji2.jpg', '6', '56', '22', null, null, null, '《Java从入门到精通（第3版）》从初学者角度出发，通过通俗易懂的语言、丰富多彩的实例，详细介绍了使用Java语言进行程序开发需要掌握的知识。', '明日科技', '清华大学出版社', '2016-07-09');
INSERT INTO `goods` VALUES ('14', '十万个为什么', 'img/goods/71.jpg', 'img/goods/tongshu1.jpg', '7', '44', '33', null, null, null, '《十万个为什么》就像一位经验丰富的老人，无论你问些什么，上至天文、下至地理、风土人情、锦绣山河、科学疑案等很多是你疑惑不解的问题，都可以在这套经典的书中找到答案。', '本丛书编委会', '世界图书出版公司', '2009-01-01');
INSERT INTO `goods` VALUES ('15', '小狗钱钱', 'img/goods/72.jpg', 'img/goods/tongshu2.jpg', '7', '23', '21', null, null, null, '吉娅是一个普通的12岁女孩，一次偶然的机会，她救助了一只受伤的小狗，并给它取名叫“钱钱”。没想到，钱钱居然是一位深藏不露的理财高手，它彻底改变了吉娅一家人的财富命运……“欧洲第一理财大师”博多·舍费尔用生动的理财童话，教会你如何从小学会支配金钱，而不是受金钱的支配；如何像富人那样思考，正确地认识和使用金钱；如何进行理财投资，找到积累资产的方法，早日实现财务自由！', '(德)博多·舍费尔', '四川少儿出版社', '2014-03-01');
INSERT INTO `goods` VALUES ('16', '我的第一本韩语漫画口语书：从零开始学韩语', 'img/goods/81.jpg', 'img/goods/eport1.jpg', '8', '55', '33', null, null, null, '《我的第一本韩语漫画口语书：从零开始学韩语》是一本专为韩语零基础的人或者是基础较差的人精心编写的。全书主要由30 天的学习内容构成，按照主题分门别类地将口语学习中的单词、句子和对话通过漫画的形式展现在读者的面前。这样一来，不仅加强了读者对所学内容的理解，更为学习增添了趣味。另外，书中还补充了大量的韩国俗语，读者在练习轻松说韩语的同时，也能够加深对韩国文化的理解。最后，本书还配有大量的练习题，可以供读者边学边用，把书上的知识真正转变成自己的东西。另外，本书内文附带MP3 学习光盘，可以让读者实现听、说、读、写一体化学习，轻松说地道韩语！', '优尼创新外语研发中心', '人民邮电出版社', '2015-02-01');
INSERT INTO `goods` VALUES ('17', '《哈佛商业评论》', 'img/goods/91.jpg', 'img/goods/zazhi1.jpg', '9', '23', '12', null, null, null, '人力资源作为第一资源，其在中国经济与企业转型成长过程中的作用方式，已经开始发生深刻的改变。我国产业长期所依赖的低劳动力成本比较优势，时值今日已经大势已去。在我国经济过去连续十余年实现两位数高增长的同时，我国企业的人工成本总体上也实现了年均10% 左右的增长，增速显著高于发达国家和地区；但同时，我国在人力资本投资、劳动产生率以及人力资本贡献率等方面在全球范围内仍处于较低的水平。尤其当前在我国经济进入到减速换挡的“新常态”背景下，人力资源供需结构失衡、核心人才竞争加剧、人力成本持续高企、人员效能相对不足等现实，已经成为我国企业面临的重大挑战。', '哈佛商业评论', '浙江人民出版社', '2015-06-01');
INSERT INTO `goods` VALUES ('18', '一念路向北', 'img/goods/101.jpg', 'img/goods/nvpin1.jpg', '1', '34', '12', '否', '100', '0', '<p>根据本书改编的电视剧《一念向北》由刘恺威、张俪领衔主演！有谁会知道，她和他结婚两年，明明执手同行，共枕同眠，心和心，却隔了天涯那么远？如果一切可以重新来过，她可不可以回到那个盛夏，不去摘那田田荷叶中最美的荷花？那么，她就不会掉进池塘...</p>\r\n', '吉祥夜', '新华出版社', '2015-02-01');
INSERT INTO `goods` VALUES ('19', '世界之游', 'img/goods/111.jpg', 'img/goods/nanpin1.jpg', '11', '34', '23', null, '20', '1', '由于游戏开始公测，司栩然幸运地被游戏公司抽中，免费的获得游戏装备，司栩然原本想卖了游戏装备，发笔横财，可惜，天公不作美，绑定了身份。不能转移或销售，司栩然只好答应杜翎的请求，一起进入游戏。牵扯到一段酸辛的故事，一个不被认同的人，生出...', '羽毛在打盹', '网络出版', '2016-09-23');
INSERT INTO `goods` VALUES ('20', '图解舌诊：伸伸舌头百病消', 'img/goods/cover1.jpg', '', '1', '100', '50', '是', '100', '12', '<p>诊断是分析疾病，保证健康的关键一步，这一步一旦错了，到了后面越容易出问题！</p>\r\n', '李爱萍', '新华出版社', '2015-02-28');
INSERT INTO `goods` VALUES ('21', '一个禅者眼中的男女', 'img/goods/cover2.jpg', '', '1', '66', '32', '否', '100', '1', '<p>勘破恒常的迷思，直抵无常的本相。林谷芳，禅</p>\r\n', '林谷芳', '四川少儿出版社', '2015-02-08');
INSERT INTO `goods` VALUES ('22', '10年涨薪30倍：财务专场透视', 'img/goods/cover3.jpg', '', '1', '55', '23', '是', '50', '0', '<p><span style=\"color:rgb(102, 102, 102); font-family:simsun,arial; font-size:12px\">擅长业务的财务会办事，懂人情的财务易升职。本书基于作者在外企10年工作期间的真实经历，描写了如何从一个财务&ldquo;小白&rdquo;，奋斗到财务部不可或缺的成本经理，包括财务部内部的工作安排，各个岗位的特色，经理们之间的勾心斗角，绩效考核，业务技能提升，师傅带徒弟，同时展示外资跨国企业在内部人才政策和生产运营方面的管理方法和工具。从各行业通用的职场江湖生存技巧到专业领域的规划选择，本书既涵盖了作者本人的职场感悟，也从不同方面对职场人士提出发展建议。</span></p>\r\n', '李燕翔', '人民邮电出版社', '2015-02-09');
INSERT INTO `goods` VALUES ('23', '从零开始学炒外汇', 'img/goods/cover4.jpg', '', '1', '44', '23', '是', '100', '2', '<p>走进汇市，转变理念认识外汇的理财功能</p>\r\n', '储天一', '新华出版社', '2015-02-10');
INSERT INTO `goods` VALUES ('24', 'Cocos2D权威指南', 'img/goods/cover5.jpg', '', '1', '44', '22', '是', '0', '0', '<p>为什么要写这本书在大学期间，我开始对软件方面感兴趣</p>\r\n', '王寒，曲光辉，周雪彬', '浙江教育出版社', '2015-02-11');
INSERT INTO `goods` VALUES ('25', '世界很好，而你刚好发光', 'img/goods/cover6.jpg', '', '1', '77', '34', '是', '100', '0', '<p>情感暖心 短篇故事 心灵励志，对现代人的爱情</p>\r\n', '凌小汐', '北京联合出版社', '2015-02-12');
INSERT INTO `goods` VALUES ('26', '股票技术分析全书', 'img/goods/cover.jpg', '', '1', '55', '17', '否', '99', '4', '<p>这本股票技术书能帮你解决众多的股票难题</p>\r\n', '王达菲', '人民出版社', '2015-06-09');
INSERT INTO `goods` VALUES ('27', '再忙也要知道的成功定律', 'img/goods/cover_2.jpg', '', '1', '77', '21', '', '99', '5', '本套装包含《再忙也要看的77条心理定律》《再忙也要看的66条沟通定律》本套书不仅详尽分析了每个心理定律，既有对这些定律的详尽介绍，同时也举出了生动详实的例子加以说明，使这些定律更实用，更具指导意义。而且以通俗易懂和幽默风趣的文字详尽分析了66条与沟通密切相关的定律、效应和法则，并举出生动详实的案例加以说明，让你学会人际交往中的实用方法，帮助你洞悉人生真谛，找到开启心锁的钥匙。', '刘鹏，邹明', '江西工业出版社', '2017-07-21');
INSERT INTO `goods` VALUES ('28', '11', 'img/goods/1495068059.jpeg', null, '5', '28', '12', '否', '12', '0', '<p>jwvjfveflv,elf</p>\r\n', null, null, null);

-- ----------------------------
-- Table structure for `orders`
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ordercode` varchar(255) DEFAULT NULL,
  `usersid` varchar(255) DEFAULT NULL,
  `total` varchar(255) DEFAULT NULL,
  `addtime` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `receiver` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of orders
-- ----------------------------
INSERT INTO `orders` VALUES ('10', 'DD7097343068365365', '1', '2', '2016-04-04', '完成', '张三', '13812368448', '北京市长安街108号');
INSERT INTO `orders` VALUES ('16', 'DD2219884740654683', '1', '21', '2017-04-17', '取消', '111', '11111', '1111');
INSERT INTO `orders` VALUES ('17', 'DD8595789563689039', '1', '10', '2017-04-17', '取消', '111', '11111', '1111');
INSERT INTO `orders` VALUES ('18', 'DD3725360824547051', '5', '100', '2017-04-17', '取消', 'aa', 'aaa', 'aaa');
INSERT INTO `orders` VALUES ('19', 'DD4711372759342901', '1', '23', '2017-04-17', '未发货', '111', 'gg', '1111');
INSERT INTO `orders` VALUES ('20', 'DD7995789599438801', '5', '226.95', '2017-04-17', '未发货', '杨燃', '12', '江西');
INSERT INTO `orders` VALUES ('21', 'DD3937502822424132', '1', '81.95', '2017-04-17', '已发货', '222', '2222', '222');
INSERT INTO `orders` VALUES ('22', 'DD7576248585504157', '1', '10', '2017-04-17', '未发货', '111', 'lll', 'hhhkk');
INSERT INTO `orders` VALUES ('23', 'DD1148163634209140', '1', '0', '2017-04-17', '未发货', '111', '444', '222');
INSERT INTO `orders` VALUES ('24', 'DD3772635897964412', '1', '23', '2017-04-17', '已发货', 'dddd', 'kkkk', 'jjjjj');
INSERT INTO `orders` VALUES ('26', 'DD4021580561422075', '12', '0', '2017-04-18', '未发货', 'eeee', 'eeeee', 'eeeee');
INSERT INTO `orders` VALUES ('27', 'DD9796892790340078', '10', '20', '2017-04-18', '未发货', '1111', '1111', '11111');
INSERT INTO `orders` VALUES ('28', 'DD9384873504286173', '10', '100', '2017-04-18', '未发货', '1111', '111111', '11111');
INSERT INTO `orders` VALUES ('29', 'DD1059045861260827', '1', '600', '2017-04-18', '未发货', '11111', '555555', '13333');
INSERT INTO `orders` VALUES ('30', 'DD8593135417666697', '1', '53', '2017-04-18', '已发货', '', '', '');
INSERT INTO `orders` VALUES ('31', 'DD7564399708781838', '1', '23', '2017-04-18', '取消', '11111', '1111', '1111');
INSERT INTO `orders` VALUES ('32', 'DD7260531459921168', '1', '23', '2017-04-18', '取消', 'kkkk', 'gggg', 'lllll');
INSERT INTO `orders` VALUES ('33', 'DD4279291253141398', '1', '200', '2017-04-19', '取消', '杨燃', '11111', '快看快看');
INSERT INTO `orders` VALUES ('34', 'DD9990387163181556', '10', '310', '2017-04-19', '未发货', '东大道', '东大道', '顶顶顶顶');
INSERT INTO `orders` VALUES ('35', 'DD7264432055799065', '10', '41', '2017-04-19', '未发货', '大女神的', '得分', '大大v');
INSERT INTO `orders` VALUES ('36', 'DD8990235873679592', '2', '28', '2017-04-19', '已发货', '份饭', '热疯了', '份饭');
INSERT INTO `orders` VALUES ('37', 'DD3120654062359091', '1', '36.95', '2017-04-19', '取消', 'jjj', 'jj', 'jjj');
INSERT INTO `orders` VALUES ('38', 'DD4432616043350186', '3', '43', '2017-04-21', '完成', '杨燃', '13237081696', '江西省华东交大');
INSERT INTO `orders` VALUES ('39', 'DD5240378701235567', '5', '150.9', '2017-05-17', '已发货', '分工', '发而非', '是C');
INSERT INTO `orders` VALUES ('40', 'DD1427606194097585', '5', '20', '2017-05-18', '未发货', '111', '1111', '我问问');
INSERT INTO `orders` VALUES ('41', 'DD4838442684619948', '5', '17', '2017-05-18', '未发货', '111', '订单', '222');
INSERT INTO `orders` VALUES ('42', 'DD0685731998354338', '5', '17', '2017-05-18', '未发货', '111', '1', '1');

-- ----------------------------
-- Table structure for `topic`
-- ----------------------------
DROP TABLE IF EXISTS `topic`;
CREATE TABLE `topic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usersid` varchar(255) DEFAULT NULL,
  `goodsid` varchar(255) DEFAULT NULL,
  `num` varchar(255) DEFAULT NULL,
  `contents` text,
  `addtime` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of topic
-- ----------------------------
INSERT INTO `topic` VALUES ('8', '4', '6 ', '5', 'lll', '2017-04-09 03:49:18');
INSERT INTO `topic` VALUES ('9', '4', '11 ', '3', 'vdfbgfn', '2017-04-09 05:08:14');
INSERT INTO `topic` VALUES ('13', '1', '23', '3', '还行吧，就是页数不太多', '2017-04-18 18:28:27');
INSERT INTO `topic` VALUES ('14', '1', '23', '5', '哈哈又是我，帮朋友带一本，质量不错额，是正版书籍。', '2017-04-18 18:44:08');
INSERT INTO `topic` VALUES ('15', '10', '27', '5', '急急急', '2017-04-19 08:36:04');
INSERT INTO `topic` VALUES ('16', '3', '11', '5', '这本书很好，个人很喜欢', '2017-04-21 15:23:55');
INSERT INTO `topic` VALUES ('17', '3', '19', '4', '印刷质量很好的一本书啊，可惜内容不够满意', '2017-04-21 15:24:53');
INSERT INTO `topic` VALUES ('18', '5', '6', '5', '还不错 ，是正品啊', '2017-05-17 15:32:15');
INSERT INTO `topic` VALUES ('19', '5', '6', '3', '这次在买了15本书，而且还有满减活动。速度是没的说的。下单的第二天就收到货了，快递员派送的速度也非常快。书都有塑封包装，正版，让人放心。好评！以后就在你这上买书了！', '2017-05-17 17:12:40');
INSERT INTO `topic` VALUES ('20', '5', '11', '3', '这次买的东西实在是太太太划算了，一口气买了二十多本书，用了卷之后，很优惠，书的质量非常好，还是很相信的正品保证的，但其中买的四世同堂和高尔基的童年不是很满意，因为，一个是精简本，也就是只有大概内容，书的详情里面没有介绍清楚，另外一本质量就是次品，好几都连在一起，而且剪裁的非常不好', '2017-05-17 17:13:34');
INSERT INTO `topic` VALUES ('21', '5', '3', '5', '第一次从网上买这么多求。很满意。以后会经常光顾本店的。祝卖家生意兴隆', '2017-05-17 17:14:03');
INSERT INTO `topic` VALUES ('22', '5', '26', '4', '\r\n2017-05-02 08:25\r\n解忧杂货店\r\n在这家店里买了这个产品，觉得很惊喜，对我来说实惠又好用，收到以后我就迫不及待地想评论了，先说一下整体感受，那就是很意外，这个价格能买到这个产品真的很划算，对于学生党来说很好了，犹豫的朋友们也不要再犹豫了，抓紧时间下手吧，他家东西一直不错，喜欢喜欢，如果有机会，下次我还会再囤一点，毕竟好货不怕多嘛，也是希望下次卖家可以多点优惠，这样买的人会更多啦。总之，我觉得买这个你不会上当不会吃亏，毕竟大家都说好，如果心动你就买吧，错过这村没这店了，还有买完以后记得评论。总之我很满意这次购物，客服也很耐心解决了我的问题，谢谢你们！我不是托，只是买的东西太多了我又懒，一个个评论太麻烦了，所以如果你看见这条评论就说明我给这见商品打90月分以上，值得购买哈哈哈哈哈哈哈终于打完了红红火火恍恍惚惚！9.9买的还要啥自行车！！', '2017-05-17 17:14:27');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(255) DEFAULT NULL,
  `pwd` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `realname` varchar(255) DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('2', '1234234112234', '234234', '13236778890', '北京市', 'Larry', '女');
INSERT INTO `users` VALUES ('3', '345345', '345345', '12222223334', '江西省', '杨平', '女');
INSERT INTO `users` VALUES ('5', '13237081696', 'yr19940228', '13345567890', '上海市', 'Mary yang', '女');
INSERT INTO `users` VALUES ('6', '13237081695', '11', null, null, null, null);
