import React from 'react';
import Axios from 'axios';
import {
  Comment, Icon, Tooltip, Avatar,
} from 'antd';
import moment from 'moment';


class Article extends React.Component {

  state = {
    article: {

      title: '',
      content: '',
      user: {
        name: '',
      },
      comments: [],
    },

    likes: 0,
    dislikes: 0,
    action: null,
  }
  like = () => {
    this.setState({
      likes: 1,
      dislikes: 0,
      action: 'liked',
    });
  }

  dislike = () => {
    this.setState({
      likes: 0,
      dislikes: 1,
      action: 'disliked',
    });
  }

  componentWillMount() {
    Axios.post('/api/V1/Article/GetArticle', {
      id: 1,
    }).then(({data}) => {
      this.setState({
        article: data.article
      })
    })
  }

  render() {
    const { likes, dislikes, action } = this.state;

    const actions = [
      <span>
        <Tooltip title="Like">
          <Icon
            type="like"
            theme={action === 'liked' ? 'filled' : 'outlined'}
            onClick={this.like}
          />
        </Tooltip>
        <span style={{ paddingLeft: 8, cursor: 'auto' }}>
          {likes}
        </span>
      </span>,
      <span>
        <Tooltip title="Dislike">
          <Icon
            type="dislike"
            theme={action === 'disliked' ? 'filled' : 'outlined'}
            onClick={this.dislike}
          />
        </Tooltip>
        <span style={{ paddingLeft: 8, cursor: 'auto' }}>
          {dislikes}
        </span>
      </span>,
      <span>Reply to</span>,
    ];

    return <div>
      <h1>{this.state.article.title}</h1>
      <h2>{this.state.article.user.name}</h2>
      <div style={{
        wordWrap: 'break-word'
      }}>{this.state.article.content}</div>
            <Comment
        actions={actions}
        author={<a>Han Solo</a>}
        avatar={(
          <Avatar
            src="https://zos.alipayobjects.com/rmsportal/ODTLcjxAfvqbxHnVXCYX.png"
            alt="Han Solo"
          />
        )}
        content={(
          <p>We supply a series of design principles, practical patterns and high quality design resources (Sketch and Axure), to help people create their product prototypes beautifully and efficiently.</p>
        )}
        datetime={(
          <Tooltip title={moment().format('YYYY-MM-DD HH:mm:ss')}>
            <span>{moment().fromNow()}</span>
          </Tooltip>
        )}
      />
    </div>
  }
}

export default Article;
