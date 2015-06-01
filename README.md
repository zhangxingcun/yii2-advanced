Yii 2 Advanced 带有登录和权限管理
============================

与原项目区别:

	1)前后台登录分开.通过后台管理前台.
	前台假设给会员使用member
	后台假设给公司使用user


	
	2)权限管理采用 https://github.com/mdmsoft/yii2-admin
	前后台分别设置权限管理
	采用文件存储,放在子项目/rbac目录
	
	

安装:

	1)克隆
	git clone git@github.com:zhangxingcun/yii2-advanced
	
	2)可以不用,安装失败时再运行	
	composer global require fxp/composer-asset-plugin dev-master
	
	3)部署	
	cd yii2-advanced
	composer install 
	
	4)配置环境
	init
	
	5)配置参数,主要是数据库
	
	6)数据库迁移
	yii migrate
	如果使用admin的菜单,需要迁移
	yii migrate --migrationPath=@mdm/admin/migrations
	
	6)创建后台第一个用户,默认为管理员.后续用户需要配置
	yii init/user
	
	7)开始