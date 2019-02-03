# User

> {warning} 用户控制器


---

  - [CreateUser](#CreateUser)
  - [GetUsers](#GetUsers)

<a name="CreateUser"></a>
## CreateUser
### Requests
|Key|Description|Type|Required|
|:-|:-|:-|:-|
|email |查询的ID|`String`|true|
|emails | |`String[]`|true|
|gender | |`Gender`|true|
|genders | |`Gender[]`|true|
|id | |`Integer`|true|
|ids | |`Integer[]`|true|

### Responses
|Key|Description|Type|Required|
|:-|:-|:-|:-|
|user | |`User`|true|
|users | |`User[]`|true|

<a name="GetUsers"></a>
## GetUsers
### Requests
|Key|Description|Type|Required|
|:-|:-|:-|:-|
|id |查询的ID|`Integer`|true|
|gender | |`Gender`|true|
|page | |`Integer`| |
|testUser | |`User`| |
|testUsers | |`User[]`| |

### Responses
|Key|Description|Type|Required|
|:-|:-|:-|:-|
|val | |`String`|true|
|user | |`User`|true|

