  - [User](#User)
  - [UserProfile](#UserProfile)
  - [SharePayload](#SharePayload)
  - [Article](#Article)
  - [TeacherLeaveRecord](#TeacherLeaveRecord)
  - [Teacher](#Teacher)
  - [ArticleComment](#ArticleComment)

<a name="User"></a>
## User

> {warning} 用户信息
第二行

### Attributes
|Key|Description|Type|Required|
|:-|:-|:-|:-|
|id |一个注释|`Integer`|true|
|name |这里只是留了一个备注|`String`|true|
|avatar | |`String`|true|

<a name="UserProfile"></a>
## UserProfile

> {warning} 用户的基本信息

### Attributes
|Key|Description|Type|Required|
|:-|:-|:-|:-|
|name | |`String`|true|
|age | |`Integer`|true|

<a name="SharePayload"></a>
## SharePayload

> {warning} 一个分享场景的抽象

### Attributes
|Key|Description|Type|Required|
|:-|:-|:-|:-|
|title |分享的标题|`String`|true|
|description |分享的描述|`String`|true|
|icon |一个缩略图|`String`|true|
|url |点进去的链接|`String`|true|

<a name="Article"></a>
## Article
### Attributes
|Key|Description|Type|Required|
|:-|:-|:-|:-|
|id | |`Integer`| |
|title | |`String`|true|
|content | |`String`| |
|user | |`User`|true|
|status | |`ArticleStatus`|true|
|commentsCount | |`Integer`| |
|favorite |需要时用于标记是否收藏|`Boolean`| |
|hot |是否是添加火热标记|`Boolean`| |
|createdAt | |`Date`|true|

<a name="TeacherLeaveRecord"></a>
## TeacherLeaveRecord
### Attributes
|Key|Description|Type|Required|
|:-|:-|:-|:-|
|id | |`Integer`|true|
|tname | |`String`|true|
|reason | |`TeacherLeaveReason`|true|

<a name="Teacher"></a>
## Teacher

> {warning} 模拟一个老师的信息

### Attributes
|Key|Description|Type|Required|
|:-|:-|:-|:-|
|teacherId | |`int`|true|
|nickname | |`String`|true|
|pic | |`String`|true|
|marks | |`int[]`|true|
|catalog | |`TeacherCatalog`|true|
|teachers | |`Teacher[]`|true|
|goodCmtRate |好评率，以1为单位|`float`|true|
|isMyFave | |`boolean`|true|
|openClass | |`int[]`|true|
|okClass | |`int`|true|
|classNum | |`int`|true|
|sortTchTime | |`Date`|true|
|isRecommended | |`boolean`|true|

<a name="ArticleComment"></a>
## ArticleComment
### Attributes
|Key|Description|Type|Required|
|:-|:-|:-|:-|
|id | |`Integer`|true|
|user | |`User`|true|
|content | |`String`|true|
|createdAt | |`Date`|true|

