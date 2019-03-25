# Article

---

  - [CreateArticle](#CreateArticle)
  - [GetArticle](#GetArticle)
  - [GetArticles](#GetArticles)

<a name="CreateArticle"></a>
## CreateArticle

`POST`

`/api/v1/article/create_article`


> {warning} 添加文章

### Requests
|Key|Description|Type|Required|
|:-|:-|:-|:-|
|title | |`String`|true|
|content | |`String`|true|

### Responses
|Key|Description|Type|Required|
|:-|:-|:-|:-|
|article | |[`Models.Article`](/docs/{{version}}/generated/models#Article)|true|

<a name="GetArticle"></a>
## GetArticle

`POST`

`/api/v1/article/get_article`


> {warning} 取得一篇文章

### Requests
|Key|Description|Type|Required|
|:-|:-|:-|:-|
|id | |`Integer`|true|

### Responses
|Key|Description|Type|Required|
|:-|:-|:-|:-|
|article | |[`Models.Article`](/docs/{{version}}/generated/models#Article)|true|

<a name="GetArticles"></a>
## GetArticles

`POST`

`/api/v1/article/get_articles`


> {warning} 获取文章列表

### Responses
|Key|Description|Type|Required|
|:-|:-|:-|:-|
|articles | |[`Models.Article[]`](/docs/{{version}}/generated/models#Article)|true|

