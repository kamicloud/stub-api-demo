import React from 'react';
import { connect } from 'react-redux';
import { Table, Badge, Dropdown, Menu, Icon, Button, Modal, Tooltip, Switch } from 'antd';

import { filterIgnores } from '../helper';
import * as actionCreators from '../../actions';
import { CodeBlock } from './components/CodeReview';



class Reversion extends React.Component {
  constructor(props) {
    super(props);
    actionCreators.getAdminReversionAction(props.match.params.id);
    this.state = {}
  }

  render(text, record, index) {
    const expandedRowRender = (row) => {
      const columns = [
        { title: '信息', dataIndex: 'message', key: 'message' },
        {
          title: '异常类型',
          dataIndex: 'type',
          key: 'type',
          render: (text) =>
            text === 'ERROR' ? <span><Badge status="error" />错误</span> : <span><Badge status="warning" />警告</span>
        }, {
          title: '行',
          dataIndex: 'line',
          key: 'line'
        }, {
          title: '操作',
          dataIndex: 'operation',
          key: 'operation',
          render: (text, record, index) => (
            <CodeBlock
              messages={[record]}
              index={index}
              file={row}
            />
          ),
        },
      ];
      return (
        <Table
          rowKey='id'
          columns={columns}
          dataSource={row.messages}
          pagination={false}
        />
      );
    };
    const ignores = this.props.ignores;
    const columns = [{
      title: '文件',
      dataIndex: 'name',
      key: 'name',
      width: '60%',
      render: (text) => (
        text.replace(/\/private\/var\/www\/laravel\//, '')
      )
    }, {
      title: '警告',
      dataIndex: 'warnings',
      key: 'warnings',
      width: '15%',
      render: (text, record, index) => {
        var count = 0;
        for (var i = 0; i < record.messages.length; i++) {
          if (!filterIgnores(record.messages[i], ignores) && record.messages[i].type === 'WARNING') {
            count++;
          }
        }
        return count;
      },
    }, {
      title: '错误',
      dataIndex: 'errors',
      key: 'errors',
      width: '15%',
      render: (text, record, index) => {
        var count = 0;
        for (var i = 0; i < record.messages.length; i++) {
          if (!filterIgnores(record.messages[i], ignores) && record.messages[i].type === 'ERROR') {
            count++;
          }
        }
        return count;
      },
    }, {
      title: '操作',
      dataIndex: 'operation',
      key: 'operation',
      width: '10%',
      render: (text, record, index) => (
        <CodeBlock
          messages={record.messages}
          ignores={this.props.ignores}
          index={index}
          file={record}
        />
      ),
    }];
    return (
      <div>
        <div style={{ marginBottom: 16 }}>
          <Button
            type="primary"
            onClick={() =>
              this.setState({ visible: true })
            }
          >显示条件</Button>
          <Modal
            title="Basic Modal"
            visible={this.state.visible}
            onOk={this.handleOk}
            onCancel={() =>
              this.setState({ visible: false })
            }
          >
            {
              this.props.ignores ? this.props.ignores.map((ignore) =>
                <div
                  key={ignore.id}
                >{ignore.pattern}
                  <Switch size="small" /></div>
              ) : null
            }
          </Modal>
        </div>
        <Table
          columns={columns}
          expandedRowRender={expandedRowRender}
          rowKey='id'
          dataSource={this.props.reversion.phpcs}
        />
        <Table
          columns={columns}
          expandedRowRender={expandedRowRender}
          rowKey='id'
          dataSource={this.props.reversion.phpstan}
        />
      </div>
    );
  }
}

export default connect((state) => {
  return {
    reversion: state.adminReversionsDetail,
    ignores: state.ignores,
  }
})(Reversion)
