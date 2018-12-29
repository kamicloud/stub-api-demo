import React from 'react';
import { Table, Button } from 'antd';
import { connect } from 'react-redux';

// import { CollectionsPage } from '../components/edit';
import { constants } from '../../../../../actions'
import * as actionCreators from '../../../../../actions';

@connect(
  state => ({
    visible: state.adminSidebarsEditModalShow,
    users: state.users,
  })
)
export default class Index extends React.Component {

  componentWillMount() {
    const { dispatch } = this.props;
    actionCreators.getAdminUsersAction()(dispatch);
  }

  render() {
    const { dispatch } = this.props;
    const columns = [{
      title: 'ID',
      dataIndex: 'id',
      key: 'id',
      width: '5%',
    }, {
      title: '昵称',
      dataIndex: 'name',
      key: 'name',
      width: '10%',
    }, {
      title: 'Email',
      dataIndex: 'email',
      key: 'email',
      width: '20%',
    }, {
      title: '角色',
      key: 'roles',
      render: (text, record, index) => {
        return (
          record.roles.map((role, index) =>
            index == 0 ? role.name : '，' + role.name
          )
        );
      }
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

    // <CollectionsPage
    //   visible={this.props.visible}
    //   sidebars={this.props.sidebars}
    // />
    return (
      <div>
        <div style={{ marginBottom: 16 }}>
        </div>
        <Table
          rowKey='id'
          pagination={false}
          defaultExpandAllRows={true}
          columns={columns}
          dataSource={this.props.users}
        />
      </div>
    );
  }
}
