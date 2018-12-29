# Teacher

> {warning} * 老师控制器用来提供前台老师接口


---

  - [UpdateUserName](#UpdateUserName)
  - [List](#List)

<a name="UpdateUserName"></a>
## UpdateUserName

> {warning} * 更新用户的昵称

### Requests
|Key|Description|Type|Required|
|:-|:-|:-|:-|
|userId |* 用户id|`int`|true|
|name | |`String`|true|

### Responses
|Key|Description|Type|Required|
|:-|:-|:-|:-|
|user | |[`Models.User`](/docs/{{version}}/generated/models#User)|true|

<a name="List"></a>
## List

> {warning} * 约课搜索老师

### Requests
|Key|Description|Type|Required|
|:-|:-|:-|:-|
|sType |* 教材分类|`Integer`|true|
|catalog | |[`Enums.TeacherCatalog`](/docs/{{version}}/generated/enums#TeacherCatalog)| |
|date | |`Date`| |
|p |* 分页|`int`| |
|bind | |`boolean`| |
|gender | |[`Enums.Gender`](/docs/{{version}}/generated/enums#Gender)| |
|toolAllow | |[`Enums.ToolAllow`](/docs/{{version}}/generated/enums#ToolAllow)| |
|marks | |`int[]`| |
|timeHH | |`int`| |
|timeMM | |`int`| |

### Responses
|Key|Description|Type|Required|
|:-|:-|:-|:-|
|teachers |* 搜索到的老师，也不知道加什么注释<br>* 反正加一点试试呗|[`Models.Teacher[]`](/docs/{{version}}/generated/models#Teacher)|true|

