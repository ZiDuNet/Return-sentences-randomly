# Return-sentences-randomly
# API源码——随机返回数据库中的一个句子

### DEMO

随机一句情话API：https://blog.mcloc.cn/archives/604.html

随机一个句子 API接口：https://blog.mcloc.cn/archives/618.html

### 实例

一个可留言的恋爱计时HTML页面 [Love-Page](https://github.com/androidmumo/Love-Page)

### 使用方法

前提：数据库/数据表请自行创建

1.在`conn.php`中修改数据库连接信息。

2.在`index.php`中修改数据表信息。

##### 参数、返回格式

| 参数名 | 是否必须 | 参数   | 返回格式                                         | 备注                                                         |
| ------ | -------- | ------ | ------------------------------------------------ | ------------------------------------------------------------ |
| type   | 否       | json   | JSON                                             | -                                                            |
| type   | 否       | string | STRING                                           | -                                                            |
| id     | 否       | string | 结合`type`输出，若不指定`type`则默认输出字符串。 | id有范围限制：最小值为`0`；最大值为数据表长度，目前为`2799`。 |
| 空     | -        | -      | STRING                                           | -                                                            |

详情请移步至我的博客[随机一个句子 API接口](https://blog.mcloc.cn/archives/618.html)。