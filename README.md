# IFrame
自制PHP框架



### 01composer说明
01）curl -sS https://getcomposer.org/installer | php
下载后是一个 composer.phar 二进制包

02） 创建 composer.json文件
改成国内的镜像包，否则会很慢，参考： https://pkg.phpcomposer.com/
```
 "repositories": {
        "packagist": {
            "type": "composer",
            "url": "https://packagist.phpcomposer.com"
        }
    }

```

03）composer.phar install 
