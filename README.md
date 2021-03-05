# FancyIndex-theme.php

## 效果展示

[ipv4](https://ipv4.yocen.top:21443)
[ipv6](https://ipv6.yocen.top)

## 需要提前nginx编译fancyindex模块

建议在nginx定义的根目录下新建module文件夹，然后git clone此项目

## 安装
在nginx配置文件的location/{ }中增加以下

```
fancy_index_header = /module/fancyindex/header.php;
fancy_index_footer = /module/fancyindex/footer.php;
```

## License - 开源协议

[GPL](https://github.com/zhangyucheng1021/FancyIndex-theme.php/blob/main/LICENSE)
