##  LNMP docker-compose 示范例子
### docker-compose Demo for LNMP

目录结构：
```
.
├── conf                        //  配置文件
│   ├── mysql                   //  MySQL 配置，可以将mysql的配置文件放这里。
│   ├── nginx                   //  Nginx 配置，包括各个虚拟服务器的配置亦可放这里，若设置了 default.conf 则会替代image中自带的。
│   │   └── conf.d
│   │       ├── default.conf
│   │       └── home.conf
│   └── php                     //  PHP-FPM 配置。包括 php.ini
│       ├── Dockerfile
│       └── php.ini
├── docker-compose.yml          //  LNMP 总配置文件，启动文件
├── logs                        //  项目日志文件夹
│   ├── mysql
│   ├── nginx
│   └── php
├── mysql                       //  mysql数据存储的地方。
└── www                         //  项目代码
    ├── home
    │   └── index.html
    ├── index.html
    ├── index.php
    └── i.php
```

##  使用
### Usage

```bash
$   git clone git@github.com:JZLeung/docker-lnmp.git
$   cd docker-lnmp
$   docker-compose up
```
