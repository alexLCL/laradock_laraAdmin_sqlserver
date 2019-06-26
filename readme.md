
## 关于此实例

环境选用[laradock](http://laradock.io/)，请自行去官网下载安装，完成后需要做以下配置：
- 如果需要在本地安装sqlserver数据库的话，把env里面的 WORKSPACE_INSTALL_MSSQL改为true
- 然后安装php的sqlsrv扩展，把env中的 PHP_FPM_INSTALL_MSSQL改为true
- 之后再env中添加一条 DB_HOST=mssql

后台模板使用[Laravel-Admin](https://laravel-admin.org/docs/zh/installation) 

![效果图](https://raw.githubusercontent.com/alexLCL/laradock_laravel-Admin_sqlserver/master/public/upload/20190626173006.png)

