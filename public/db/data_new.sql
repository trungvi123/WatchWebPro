create table `sanpham` (
`id` int(4) not null primary key AUTO_INCREMENT, 
`name` varchar(255) character set utf8, 
`type` varchar(50) character set utf8, 
`typeSearch` varchar(50) character set utf8, 
`old_price` int, 
`new_price` int, 
`img_source` varchar(255), 
`brand` varchar(100), 
`watch_chain` varchar(100) character set utf8, 
`watch_chainSearch` varchar(100) character set utf8, 
`glass_type` varchar(100) character set utf8, 
`color` varchar(50) character set utf8, 
`colorSearch` varchar(50) character set utf8, 
`shape` varchar(50) character set utf8,
`shapeSearch` varchar(50) character set utf8,
`mo_ta` varchar(50) character set utf8
);


INSERT INTO `sanpham` (`id`, `name`, `type`,`typeSearch`, `old_price`, `new_price`, `img_source`, `brand`, `watch_chain`,`watch_chainSearch`, `glass_type`, `color`,`colorSearch`, `shape`,`shapeSearch`) VALUES
(1, 'ĐỒNG HỒ LOUIS ERARD 13900AA05.BDC102 NAM PIN DÂY DA', 'ĐỒNG HỒ NAM','DONG HO NAM', '20217000', '18195300', 'http://mauweb.monamedia.net/dongho/wp-content/uploads/2018/03/13900AA05.BDC102-600x600.jpg', 'Louis erard', 'Dây Da','Day da', 'Kính Sapphire', 'Xanh','Xanh', 'Tròn','Tron'),
(2, 'ĐỒNG HỒ CITIZEN AU1080-20A NAM ECO-DRIVE DÂY VẢI', 'ĐỒNG HỒ NAM','DONG HO NAM', '5600000', '5400000', 'http://mauweb.monamedia.net/dongho/wp-content/uploads/2018/03/dong-ho-citizen-au1080-20a-nam-eco-drive-day-vai-600x600.jpg', 'Citizen', 'Dây Vải','Day Vai', 'Kính Sapphire', 'Trắng','Trang', 'Tròn','Tron'),
(3, 'ĐỒNG HỒ TISSOT T063.907.11.058.00 NAM TỰ ĐỘNG DÂY INOX', 'ĐỒNG HỒ NAM','DONG HO NAM', '', '21940000', 'http://mauweb.monamedia.net/dongho/wp-content/uploads/2018/03/dong-ho-tissot-t063.907.11.058.00-nam-tu-dong-day-inox-600x600.jpg', 'Tissot', 'Dây Inox','Day Inox', 'Kính Sapphire', 'Bạc','Bac', 'Tròn','Tron'),
(4, 'ĐỒNG HỒ SEIKO SGEG99P1 NAM PIN DÂY DA','ĐỒNG HỒ NAM','DONG HO NAM', '','3684000', 'http://mauweb.monamedia.net/dongho/wp-content/uploads/2018/03/dong-ho-seiko-sgeg99p1-nam-pin-day-da-a-600x600.jpg', 'Seiko', 'Dây Da','Day da', 'Kính Sapphire', 'Đen','Den', 'Tròn','Tron'),
(5, 'ĐỒNG HỒ ORIENT FSTAA002W0 NAM PIN DÂY DA','ĐỒNG HỒ NAM','DONG HO NAM', '3042000', '2737000', 'http://mauweb.monamedia.net/dongho/wp-content/uploads/2018/03/FSTAA002W0-600x600.jpg', 'Orient', 'Dây Da','Day da', 'Kính Sapphire', 'Nâu','Nau', 'Chữ nhật','Chu Nhat'),
(6, 'ĐỒNG HỒ OLYM PIANUS OP99141-71AGSK TRẮNG NAM TỰ ĐỘNG DÂY INOX', 'ĐỒNG HỒ NAM','DONG HO NAM', '7680000', '6912000', 'http://mauweb.monamedia.net/dongho/wp-content/uploads/2018/03/dong-ho-olym-pianus-op99141-71agsk-trang-nam-tu-dong-day-inox-600x600.jpg', 'Pianus', 'Dây Kim loại','Day Kim Loai', 'Kính Sapphire', 'Vàng, Bạc','Vang, Bac', 'Tròn','Tron'),
(7, 'ĐỒNG HỒ CASIO GA-110GB-1ADR NAM PIN DÂY NHỰA', 'ĐỒNG HỒ NAM','DONG HO NAM', '4200000', '3900000', 'http://mauweb.monamedia.net/dongho/wp-content/uploads/2018/03/dong-ho-casio-ga-110gb-1adr-nam-pin-day-nhua-600x600.jpg', 'Casio', 'Dây Nhựa','Day Nhua', 'Kính Cường lực', 'Đen','Den', 'Tròn','Tron'),
(8, 'ĐỒNG HỒ CASIO MTP-1374L-1AVDF NAM PIN DÂY DA','ĐỒNG HỒ NAM','DONG HO NAM','1863000','1677000','http://mauweb.monamedia.net/dongho/wp-content/uploads/2018/03/dong-ho-casio-mtp-1374l-1avdf-nam-pin-day-da-a-600x600.jpg','Casio','Dây Da','Day da','Kính Sapphire','Đen','Den','Tròn','Tron'),
(9, 'ĐỒNG HỒ TISSOT T41.1.183.34 NỮ TỰ ĐỘNG DÂY INOX','ĐỒNG HỒ NỮ','DONG HO NU','','1764000','http://mauweb.monamedia.net/dongho/wp-content/uploads/2018/03/dong-ho-tissot-t41.1.183.34-nu-tu-dong-day-inox-600x600.jpg','Tissot','Dây Kim loại','Day Kim Loai','Kính Sapphire','Trắng','Trang','Tròn','Tron'),
(10, 'ĐỒNG HỒ CITIZEN EX1410-88A NỮ ECO-DRIVE DÂY INOX', 'ĐỒNG HỒ NỮ','DONG HO NU','6800000', '6120000','http://mauweb.monamedia.net/dongho/wp-content/uploads/2018/03/EX1410-88A-600x600.jpg', 'Citizen', 'Dây Kim loại','Day Kim Loai', 'Kính Cứng', 'Trắng','Trang', 'Chữ nhật bầu','Chu nhat bau'),
(11, 'ĐỒNG HỒ OGIVAL OG385-032LW-T NỮ PIN DÂY INOX', 'ĐỒNG HỒ NỮ','DONG HO NU', '','9384000', 'http://mauweb.monamedia.net/dongho/wp-content/uploads/2018/03/dong-ho-ogival-og385-032lw-t-nu-pin-day-inox-600x600.jpg', 'Ogival', 'Dây Kim loại','Day Kim Loai', 'Kính Sapphire', 'Bạc','Bac', 'Tròn','Tron'),
(12, 'ĐỒNG HỒ CANDINO C4433/3 NỮ PIN DÂY INOX', 'ĐỒNG HỒ NỮ','DONG HO NU', '4440000', '3900000', 'http://mauweb.monamedia.net/dongho/wp-content/uploads/2018/03/dong-ho-candino-c4433_3-nu-pin-day-inox-600x600.jpg', 'Candino', 'Dây Kim loại','Day Kim Loai', 'Kính Sapphire', 'Bạc','Bac', 'Chữ nhật','Chu Nhat'),
(13, 'ĐỒNG HỒ SKAGEN 885SSLB NỮ PIN DÂY DA', 'ĐỒNG HỒ NỮ','DONG HO NU', '', '5900000', 'http://mauweb.monamedia.net/dongho/wp-content/uploads/2018/03/885sslb-600x600.jpg', 'Skagen', 'Dây Da','Day da', 'Kính Sapphire', 'Đen Bạc','Den Bac', 'Tròn','Tron' ),
(14, 'ĐỒNG HỒ DANIEL WELLINGTON DW00500001 NỮ PIN DÂY INOX', 'ĐỒNG HỒ NỮ','DONG HO NU', '4700000', '4230000', 'http://mauweb.monamedia.net/dongho/wp-content/uploads/2018/03/dong-ho-daniel-wellington-dw00500001-nu-pin-day-inox-600x600.jpg', 'Wellington', 'Dây Kim loại','Day Kim Loai', 'Kính Sapphire', 'Hồng Đen','Hong Đen', 'Tròn','Tron'),
(15, 'ĐỒNG HỒ CASIO GA-100DE-2ADR NỮ PIN DÂY NHỰA', 'ĐỒNG HỒ NỮ','DONG HO NU', '', '4390000', 'http://mauweb.monamedia.net/dongho/wp-content/uploads/2018/03/dong-ho-casio-ga-100de-2adr-nu-pin-day-nhua-600x600.jpg', 'Casio', 'Dây Nhựa','Day Nhua','Kính Sapphire', 'Xanh dương','Xanh duong', 'Tròn','Tron'),
(16, 'ĐỒNG HỒ CASIO LA670WL-1BDF NỮ PIN DÂY DA', 'ĐỒNG HỒ NỮ','DONG HO NU', '851000', '766000', 'http://mauweb.monamedia.net/dongho/wp-content/uploads/2018/03/dong-ho-casio-la670wl-1bdf-nu-pin-day-da-600x600.jpg', 'Casio', 'Dây Da','Day da', 'Kính Sapphire', 'Đen Bạc','Den Bac', 'Tròn','Tron'),
(17, 'ĐỒNG HỒ ĐÔI ALEXANDRE CHRISTIE AC8C26-1LK TRẮNG – AC8C26-1MK TRẮNG PIN DÂY INOX', 'ĐỒNG HỒ ĐÔI','DONG HO DOI', '6080000', '570000', 'http://mauweb.monamedia.net/dongho/wp-content/uploads/2018/03/dong-ho-doi-alexandre-christie-ac8c26-1lk-trang-ac8c26-1mk-trang-pin-day-inox-600x600.jpg', 'Alexandre Christie', 'Dây Kim loại','Day Kim Loai', 'Kính Sapphire', 'Vàng','Vang', 'Tròn','Tron'),
(18, 'ĐỒNG HỒ ĐÔI CASIO MTP-E312D-7BVDF – LTP-E312D-4BVDF PIN DÂY INOX', 'ĐỒNG HỒ ĐÔI','DONG HO DOI', '43240000', '4210000', 'http://mauweb.monamedia.net/dongho/wp-content/uploads/2018/03/dong-ho-casio-mtp-e312d-7bvdf-ltp-e312d-4bvdf-doi-pin-day-inox-a-600x600-300x300.jpg', 'Casio', 'Dây Kim loại','Day Kim Loai','Kính Sapphire', 'Bạc Trắng - Hồng','Bac Trang - Hong', 'Tròn','Tron'),
(19, 'ĐỒNG HỒ ĐÔI CITIZEN BD0030-00A – ER0190-00A PIN DÂY DA', 'ĐỒNG HỒ ĐÔI','DONG HO DOI', '5140000', '4900000', 'http://mauweb.monamedia.net/dongho/wp-content/uploads/2018/03/dong-ho-citizen-bd0030-00a-er0190-00a-doi-pin-day-da-a-600x600.jpg', 'Citizen', 'Dây Kim loại','Day Kim Loai','Kính cứng', 'Đen Trắng','Đen Trang', 'Chữ nhật','Chu Nhat'),
(20, 'ĐỒNG HỒ ĐÔI OLYMPIA STAR OPA58012-07MSK TRẮNG – OPA58012-07LSK TRẮNG PIN DÂY INOX', 'ĐỒNG HỒ ĐÔI','DONG HO DOI', '7728000', '6955000', 'http://mauweb.monamedia.net/dongho/wp-content/uploads/2018/03/dong-ho-doi-olympia-star-opa58012-07msk-trang-opa58012-07lsk-trang-pin-day-inox-600x600-300x300.jpg', 'Olympia Star', 'Dây Inox','Day Inox','Kính Sapphire', 'Vàng Bạc','Vang Bac', 'Tròn','Tron'),
(21, 'ĐỒNG HỒ ĐÔI SUNRISE SG – SL1085.1601 PIN DÂY INOX', 'ĐỒNG HỒ ĐÔI','DONG HO DOI','4700000', '4230000', 'http://mauweb.monamedia.net/dongho/wp-content/uploads/2018/03/dong-ho-doi-sunrise-sg-sl1085.1601-pin-day-inox-600x600.jpg', 'Sunrise SG', 'Dây Kim loại','Day Kim Loai', 'Kính Sapphire', 'Đen','Den', 'Tròn','Tron'),
(22, 'DÂY DA ZRC 654 TASMAN', 'PHỤ KIỆN','PHU KIEN', '710000', '639000', 'http://mauweb.monamedia.net/dongho/wp-content/uploads/2018/03/day-da-zrc-654-tasman-600x600.jpg', 'ZRC', 'Dây da','Day da','Da Bò', 'Nâu','Nau','Tròn','Tron'),
(23, 'HỘP LÊN DÂY CÓT TỰ ĐỘNG ZRC DOUBLE-WATCH WINDER EM03201', 'PHỤ KIỆN','PHU KIEN', '','10500000', 'http://mauweb.monamedia.net/dongho/wp-content/uploads/2018/03/ZRC-DOUBLE-WATCH-WINDER-EM03201-600x600-300x300.jpg', 'ZRC', '','Gỗ cao cấp', 'Đen','Den','Tròn','Tron',"");
create table `thanhvien` (
`id` int(4) not null primary key AUTO_INCREMENT, 
`username` varchar(50) character set utf8 not null,
`phonenumber` varchar(20) not null,
`passwd` varchar(20) not null
);

create table `admin` (
`id` int(4) not null primary key AUTO_INCREMENT, 
`username` varchar(50) character set utf8 not null,
`phonenumber` varchar(20) not null,
`passwd` varchar(20) not null,
`admin_ChucVu` varchar(20) not null
);

create table `danhMuc` (
`id` int(4) not null primary key AUTO_INCREMENT, 
`name` varchar(50) character set utf8 not null,
`mo_ta` varchar(255) not null
);

INSERT INTO `danhmuc` (`id`, `name`,`mo_ta`) VALUES
(1,'GIỚI THIỆU','http://localhost/WatchWebPro/gioiThieu'),
(2,'ĐỒNG HỒ NAM','http://localhost/WatchWebPro/dongHoNam'),
(3,'ĐỒNG HỒ NỮ','http://localhost/WatchWebPro/dongHoNu'),
(4,'ĐỒNG HỒ ĐÔI','http://localhost/WatchWebPro/dongHoDoi'),
(5,'PHỤ KIỆN','http://localhost/WatchWebPro/phuKien'),
(6,'TIN TỨC','http://localhost/WatchWebPro/tinTuc'),
(7,'LIÊN HỆ','http://localhost/WatchWebPro/lienHe');
