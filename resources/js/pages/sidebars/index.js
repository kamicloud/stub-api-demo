import React from 'react';
import { Table, Button } from 'antd';
import { connect } from 'react-redux';

import { CollectionsPage } from './components/edit';
import { adminSidebarsEdit } from '../actions'
import { constants } from '../../../../../actions'
import * as actionCreators from '../../../../../actions';

@connect(
  state => ({
    visible: state.adminSidebarsEditModalShow,
    sidebars: state.sidebars,
  }),
)
export default class Index extends React.Component {
  constructor(props) {
    super(props);
    actionCreators.getAdminSidebarsAction();
  }

  render() {
    const { dispatch } = this.props;
    const columns = [{
      title: '标题',
      dataIndex: 'name',
      key: 'name',
      width: '10%',
    }, {
      title: 'URI',
      dataIndex: 'uri',
      key: 'age',
      width: '20%',
    }, {
      title: '备注',
      dataIndex: 'comment',
      key: 'comment',
    }, {
      title: '创建时间',
      dataIndex: 'created_at',
      key: 'created_at',
      width: '20%',
    }, {
      title: '修改时间',
      dataIndex: 'updated_at',
      key: 'updated_at',
      width: '20%',
    }, {
      title: '操作',
      dataIndex: 'operation',
      render: (text, record, index) => {
        return (
          <a
            onClick={() =>
              dispatch({
                type: constants.ADMIN_SIDEBARS_EDIT_MODAL_TOGGLE,
                sidebar: record
              })
            }
          >修改</a>
        );
      },
    }];
    return (
      <div>
        <div style={{ marginBottom: 16 }}>
          <CollectionsPage
            visible={this.props.visible}
            sidebars={this.props.sidebars}
          />
        </div>
        <Table
          rowKey='id'
          pagination={false}
          defaultExpandAllRows={true}
          columns={columns}
          loading={actionCreators.loading['getAdminSidebarsAction']}
          dataSource={this.props.sidebars}
        />
      </div>
    );
  }
}
