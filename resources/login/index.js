import React from 'react';
import { Form, Icon, Input, Button, Checkbox } from 'antd';
import { connect } from 'react-redux';

import { createBrowserHistory } from 'history';

// import { CollectionsPage } from '../components/edit';
import { constants } from '../../../../actions'
import * as actionCreators from '../../../../actions';

const FormItem = Form.Item;

const history = createBrowserHistory()

class NormalLoginForm extends React.Component {

  componentWillMount() {
    const { dispatch } = this.props;
    // actionCreators.getAdminSidebarsAction()(dispatch);
  }

  handleSubmit = (e) => {
    e.preventDefault();
    this.props.form.validateFields((err, values) => {
      if (!err) {
        axios.post(
          '/login',
          values
        ).then(response => {
          history.goBack();
          history.push('http://laravel.test/admin/reversions');
          console.log(response.data);
        }).catch(response => {
          // 列出响应错误信息...
        });
        console.log('Received values of form: ', values);
      }
    });
  }

  render() {
    const { dispatch } = this.props;
    const { getFieldDecorator } = this.props.form;
    return (
      <Form
        onSubmit={this.handleSubmit}
        className="login-form"
        style={{
          maxWidth: 300,
          margin: '200px auto'
        }}
      >
        <FormItem>
          {getFieldDecorator('email', {
            rules: [{ required: true, message: 'Please input your username!' }],
          })(
            <Input prefix={<Icon type="user" style={{ fontSize: 13 }} />} placeholder="Username" />
          )}
        </FormItem>
        <FormItem>
          {getFieldDecorator('password', {
            rules: [{ required: true, message: 'Please input your Password!' }],
          })(
            <Input prefix={<Icon type="lock" style={{ fontSize: 13 }} />} type="password" placeholder="Password" />
          )}
        </FormItem>
        <FormItem>
          {getFieldDecorator('remember', {
            valuePropName: 'checked',
            initialValue: true,
          })(
            <Checkbox>Remember me</Checkbox>
          )}
          <a className="login-form-forgot" href="">Forgot password</a>
          <Button type="primary" htmlType="submit" className="login-form-button">
            Log in
           </Button>
          Or <a href="">register now!</a>
        </FormItem>
      </Form>
    );
  }
}
const WrappedNormalLoginForm = Form.create()(NormalLoginForm);
export default connect((state) => {
  return {
  }
})(WrappedNormalLoginForm)
