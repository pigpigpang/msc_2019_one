# msc_2019_one

 ## 学会git的基本使用
        每次git建新库，会有基本语句的提示，了解基本语句
        对空文件夹执行 git init 进行git的初始化，使其变成可用git的目录
        git add . 表示将当前目录的所有东西加入
        git commit -m "这里填写备注"
        git push -u origin master
        这是基本常用语句，学会利用百度
        把出的问题，error 复制到百度学习
        
        个人推荐的
        git的学习网站 https://www.liaoxuefeng.com/wiki/896043488029600 
## vscode的基本使用
        我个人是将vscode仅仅当做一门编辑器来用，加了插件以后，括号有彩虹颜色
        逻辑有对应线标注
        学会合理使用加入插件

        可以百度一些常用的vscode插件，然后自己根据自己习惯和需要，自行添加

## wampserver的基本使用
        wamp是windows + apache + mysql +php 的缩写
        简单讲，就是个人本地服务器
        打开wamp一般会有一个小黑框一闪而过
        看电脑右下角，如果有个绿色的小框框，就代表三个服务都成功开启
        如果不是绿色，是橙色（黄色）或者红色，根据相关提示，百度解决方法

        wamp里面，有一些基本设置要改

### 必需
            1. 默认的mysql（数据库）的服务器端和XX端的语言 都是 latin，这就导致了如果中文存入，会乱码或者存不进去，或者报错的问题
                检测方法，打开wamp，然后左键点击右下角的小绿框，选择mysql列的mysql控制台，（默认用户名是 root ， 密码为空）
                输入命令 show variables like "character%";
                观察，如果是latin就需要更改，如果都是 utf-8 则不需要更改
                解决办法
                    打开wamp，然后左键点击右下角的小绿框，选择mysql列的 mysql.ini ，即 windows下的mysql的配置文件
                    在 client 项下面 加 default-character-set=utf8
                    在 mysqld 项下面 加 character-set-server=utf8
                    重启mysql服务，然后再次检测。
                    如果还是 latin ，可以 在mysql项也加 default-character-set=utf8
        
### 可选
            1. apache 默认 www 目录，apache默认的www目录是在 apache 目录下，如果wamp被安装在c盘，这里建议更改www目录
                因为本地服务器是在www目录下检索文件，如果不更改www目录，可能www目录在c盘会非常乱
                可自行百度（我忘记具体改什么了）
                推荐： 每次项目或者有问题，都在www目录用英文建立相关文件夹，用新的文件夹操作
            
            2. php一些相关内容的更改（我没改）
                感兴趣可自行百度

