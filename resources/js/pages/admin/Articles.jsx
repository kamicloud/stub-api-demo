import React from 'react';
import Axios from 'axios';
import { Table, Badge, Dropdown, Menu, Icon, Button, Modal, Tooltip, notification, Avatar  } from 'antd';
import { Link } from 'react-router-dom';
import API from '../../apis/API.js';

const columns = [{
  title: 'ID',
  dataIndex: 'id',
  key: 'id',
  width: '20%',
}, {
  title: '作者',
  dataIndex: 'author',
  key: 'author',
  render: (text, {user}) => (
    <React.Fragment>
      <Avatar size={64} icon="user" src={user.avatar} /> {user.name}
    </React.Fragment>
  )
}, {
  title: '标题',
  dataIndex: 'title',
  key: 'title',
  width: '15%',
}, {
  title: 'PHPSTAN',
  dataIndex: 'phpstan_count',
  key: 'phpstan_count',
  width: '15%',
  render: (text) => (
    text + '个文件存在潜在问题'
  )
}, {
  title: '生成时间',
  dataIndex: 'created_at',
  key: 'created_at',
  width: '15%',
}, {
  title: '操作',
  dataIndex: 'operation',
  key: 'operation',
  width: '10%',
  render: (text, record, index) => (
    <Link to={'/admin/article/' + record.id}><Button
      type="primary"
    >查看详情</Button></Link>
  ),
}];

class Articles extends React.Component {
  state = {
    createLoading: false,
    data: [],
  }
  componentDidMount() {
    API.Article.GetArticles({}).then(({data}) => {
      this.setState({
        data: data.articles,
      });
    })
  }
  render() {
    return (
      <div>
        <div style={{ marginBottom: 16 }}>
          <Button
            type="primary"
            onClick={this.createReversion}
            loading={this.state.createLoading}
          >生成审计</Button>
          <Button
            type="primary"
            onClick={this.initData}
            loading={this.state.loading}
          >重新加载</Button>
        </div>
        <Table
          columns={columns}
          rowKey='id'
          dataSource={this.state.data}
        />
      </div>
    )
  }
}



export default Articles;
