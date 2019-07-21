# MoneyGame

> {warning} 垃圾游戏相关接口


---

  - [GetQuestions](#GetQuestions)
  - [AddQuestion](#AddQuestion)

<a name="GetQuestions"></a>
## GetQuestions

`POST`

`/api/v1/money_game/get_questions`

### Requests
|Key|Description|Type|Required|
|:-|:-|:-|:-|
|page | |`Integer`|true|

### Responses
|Key|Description|Type|Required|
|:-|:-|:-|:-|
|questions | |[`Models.MoneyGameQuestion[]`](/docs/{{version}}/generated/models#MoneyGameQuestion)|true|

<a name="AddQuestion"></a>
## AddQuestion

`POST`

`/api/v1/money_game/add_question`

### Requests
|Key|Description|Type|Required|
|:-|:-|:-|:-|
|question | |`String`|true|
|answer | |`String`|true|

