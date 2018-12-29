import React from 'react';
import { Table, Badge, Dropdown, Menu, Icon, Button, Modal, Tooltip, notification } from 'antd';
import { Link } from 'react-router-dom';

export default class Reversions extends React.Component {
  constructor(props) {
    super(props);
  }

  initData = () => {
    this.setState({ loading: true });

    axios.get(
      '/admin/reversions'
    ).then(response => {
      this.setState({
        loading: false,
        reversions: response.data.reversions,
      });
    }).catch(response => {
      // 列出响应错误信息...
    });
  }

  createReversion = () => {
    this.setState({ createLoading: true });
    axios.get(
      '/admin/reversions/create'
    ).then(response => {
      this.setState({
        createLoading: false,
        reversions: response.data.reversions
      });
      this.openNotificationWithIcon('success');
    }).catch(response => {
    });
  }

  componentWillMount() {
    this.initData();
  }

  openNotificationWithIcon = (type) => {
    notification[type]({
      message: '生成审计成功',
      description: '新审计已经置入您的操作区域',
    });
  };

  render(text, record, index) {
    console.log(this.state);
    const columns = [{
      title: '版本号',
      dataIndex: 'id',
      key: 'id',
      width: '20%',
    }, {
      title: 'PHPCS',
      dataIndex: 'phpcs_count',
      key: 'phpcs_count',
      width: '15%',
      render: (text) => (
        text + '个文件存在潜在问题'
      )
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
        <Link to={'/admin/reversion/' + record.id}><Button
          type="primary"
        >查看详情</Button></Link>
      ),
    }];
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
          dataSource={this.state.reversions}
        />
      </div>
    );
  }
}

