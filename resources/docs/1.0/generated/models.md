  - [User](#User)
  - [UserProfile](#UserProfile)
  - [SharePayload](#SharePayload)
  - [Teacher](#Teacher)

<a name="User"></a>
## User

> {warning} * 用户信息
* 第二行

### Attributes
|Key|Description|Type|Required|
|:-|:-|:-|:-|
|id |* 一个注释|`Integer`|true|
|name |* 这里只是留了一个备注|`String`|true|
|email |* 用户的状态|`String`|true|
|createdAt | |`Date`| |
|updatedAt | |`Date`| |
|child | |[`Models.User`](/docs/{{version}}/generated/models#User)| |
|children | |[`Models.User[]`](/docs/{{version}}/generated/models#User)| |

<a name="UserProfile"></a>
## UserProfile

> {warning} * 用户的基本信息

### Attributes
|Key|Description|Type|Required|
|:-|:-|:-|:-|
|name | |`String`|true|
|age | |`Integer`|true|

<a name="SharePayload"></a>
## SharePayload

> {warning} * 一个分享场景的抽象

### Attributes
|Key|Description|Type|Required|
|:-|:-|:-|:-|
|title |* 分享的标题|`String`|true|
|description |* 分享的描述|`String`|true|
|icon |* 一个缩略图|`String`|true|
|url |* 点进去的链接|`String`|true|

<a name="Teacher"></a>
## Teacher

> {warning} * 模拟一个老师的信息

### Attributes
|Key|Description|Type|Required|
|:-|:-|:-|:-|
|teacherId | |`int`|true|
|nickname | |`String`|true|
|pic | |`String`|true|
|marks | |`int[]`|true|
|catalog | |[`Enums.TeacherCatalog`](/docs/{{version}}/generated/enums#TeacherCatalog)|true|
|teachers | |`Teacher[]`|true|
|goodCmtRate |* 好评率，以1为单位|`float`|true|
|isMyFave | |`boolean`|true|
|openClass | |`int[]`|true|
|okClass | |`int`|true|
|classNum | |`int`|true|
|sortTchTime | |`Date`|true|
|isRecommended | |`boolean`|true|

