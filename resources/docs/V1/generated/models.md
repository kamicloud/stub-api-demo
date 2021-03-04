  - [MoneyGameQuestion垃圾游戏问题](#MoneyGameQuestion)
  - [ArticleComment](#ArticleComment)
  - [Article](#Article)
  - [SharePayload一个分享场景的抽象](#SharePayload)
  - [TeacherLeaveRecord](#TeacherLeaveRecord)
  - [Teacher模拟一个老师的信息](#Teacher)
  - [UserProfile用户的基本信息](#UserProfile)
  - [`REST`User用户信息](#User)

<a name="MoneyGameQuestion"></a>
## MoneyGameQuestion垃圾游戏问题
### Attributes
|Key|Description|Type|Required|
|:-|:-|:-|:-|
|id | |`Integer`|true|
|question | |`String`|true|
|answer | |`String`|true|

<a name="ArticleComment"></a>
## ArticleComment
### Attributes
|Key|Description|Type|Required|
|:-|:-|:-|:-|
|id | |`Integer`|true|
|user | |[`Models.User`](/docs/{{version}}/generated/models#User)|true|
|content | |`String`|true|
|createdAt | |`Date`|true|

<a name="Article"></a>
## Article
### Attributes
|Key|Description|Type|Required|
|:-|:-|:-|:-|
|id | |`Integer`| |
|title | |`String`|true|
|content | |`String`| |
|user | |[`Models.User`](/docs/{{version}}/generated/models#User)|true|
|status | |[`Enums.ArticleStatus`](/docs/{{version}}/generated/enums#ArticleStatus)|true|
|commentsCount | |`Integer`| |
|favorite |需要时用于标记是否收藏|`Boolean`| |
|hot |是否是添加火热标记|`Boolean`| |
|createdAt | |`DateYm`|true|

<a name="SharePayload"></a>
## SharePayload一个分享场景的抽象
### Attributes
|Key|Description|Type|Required|
|:-|:-|:-|:-|
|title |分享的标题|`String`|true|
|description |分享的描述|`String`|true|
|icon |一个缩略图|`String`|true|
|url |点进去的链接|`String`|true|

<a name="TeacherLeaveRecord"></a>
## TeacherLeaveRecord
### Attributes
|Key|Description|Type|Required|
|:-|:-|:-|:-|
|id | |`Integer`|true|
|tname | |`String`|true|
|reason | |[`Enums.TeacherLeaveReason`](/docs/{{version}}/generated/enums#TeacherLeaveReason)|true|

<a name="Teacher"></a>
## Teacher模拟一个老师的信息
### Attributes
|Key|Description|Type|Required|
|:-|:-|:-|:-|
|teacherId | |`int`|true|
|nickname | |`String`|true|
|pic | |`String`|true|
|marks | |`int[]`|true|
|catalog | |[`Enums.TeacherCatalog`](/docs/{{version}}/generated/enums#TeacherCatalog)|true|
|teachers | |[`Models.Teacher[]`](/docs/{{version}}/generated/models#Teacher)|true|
|goodCmtRate |好评率，以1为单位|`float`|true|
|isMyFave | |`boolean`|true|
|openClass | |`int[]`|true|
|okClass | |`int`|true|
|classNum | |`int`|true|
|sortTchTime | |`Date`|true|
|isRecommended | |`boolean`|true|

<a name="UserProfile"></a>
## UserProfile用户的基本信息
### Attributes
|Key|Description|Type|Required|
|:-|:-|:-|:-|
|name | |`String`|true|

<a name="User"></a>
## `REST`User用户信息
`/api/v1/restful/user`[DOC](https://laravel.com/docs/master/controllers#resource-controllers)

> {primary} 用户信息
第二行

### Attributes
|Key|Description|Type|Required|
|:-|:-|:-|:-|
|id |一个注释|`Integer`|true|
|name |这里只是留了一个备注|`String`|true|
|avatar | |`String`|true|

