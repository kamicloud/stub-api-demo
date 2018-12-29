import React from 'react';
import { Button, Modal, Form, Input, Radio, Select } from 'antd';
import { connect } from 'react-redux';

import { constants } from '../../../../../actions';
import * as actionCreators from '../../../../../actions';

const FormItem = Form.Item;
const InputGroup = Input.Group;
const Option = Select.Option;

const CollectionCreateForm = Form.create()(
  (props) => {
    const { visible, onCancel, onCreate, form, sidebars, sidebar } = props;
    const { getFieldDecorator } = form;
    return (
      <Modal
        visible={visible}
        title="创建/编辑新列表"
        okText="确认"
        onCancel={onCancel}
        onOk={onCreate}
      >
        <Form layout="vertical">
          <FormItem label="标题">
            {getFieldDecorator('name', {
              initialValue: sidebar.name ? sidebar.name : '',
              rules: [{ required: true, message: 'Please input the title of collection!' }],
            })(
              <Input />
            )}
          </FormItem>
          <FormItem label="URI">
            {getFieldDecorator('uri', {
              initialValue: sidebar.uri ? sidebar.uri : '',
            })(
              <Input />
            )}
          </FormItem>
          <FormItem label="备注">
            {getFieldDecorator('comment', {
              initialValue: sidebar.comment ? sidebar.comment : '',
            })(<Input type="textarea" />)}
          </FormItem>
          <FormItem label="父菜单">
            {getFieldDecorator('parent_id', {
              initialValue: sidebar.parent_id ? sidebar.parent_id.toString() : '0',
            })(
              <Select>
                <Option value="0">无</Option>
                {sidebars.map((sidebar) =>
                  <Option
                    value={sidebar.id.toString()}
                    key={sidebar.id}
                  >{sidebar.name}</Option>
                )}
              </Select>
            )}
          </FormItem>
        </Form>
      </Modal>
    );
  }
);

class CollectionsPage extends React.Component {
  render() {
    const { dispatch } = this.props;
    return (
      <div>
        <Button
          type="primary"
          onClick={() =>
            dispatch({
              type: constants.ADMIN_SIDEBARS_EDIT_MODAL_TOGGLE,
            })
          }
        >新建菜单</Button>
        <CollectionCreateForm
          ref={(form) => {
            this.form = form;
          }}
          visible={this.props.visible}
          sidebar={this.props.sidebar}
          sidebars={this.props.sidebars}
          onCancel={() =>
            dispatch({
              type: constants.ADMIN_SIDEBARS_EDIT_MODAL_TOGGLE,
              form: this.form,
            })
          }
          onCreate={() => {
            const form = this.form;
            const { dispatch } = this.props;
            form.validateFields((err, values) => {
              if (err) {
                return;
              }
              this.props.sidebar.id ? actionCreators.postAdminSidebarsUpdate(this.props.sidebar, values)(dispatch, form) : actionCreators.postAdminSidebarsCreate(values)(dispatch, form);
              console.log('Received values of form: ', values);
            });
          }}
        />
      </div>
    );
  }
}

connect((state) => {
  return {
    sidebar: state.adminSidebarsEditing,
    visible: state.adminSidebarsEditModalShow
  }
})(CollectionsPage)

export { CollectionsPage }
