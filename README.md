# 插件
> composer require gaotiefeng/tool

## snowflake
```php
$snowflake = new Snowflake();
$snowflake = new Snowflake(12345,67891);//工作机器id
$snowflake->setStartTimeStamp(strtotime('2020-09-09')*1000);
$id = $snowflake->id();
```
