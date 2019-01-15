import React from 'react';
import { Route, Link } from 'react-router-dom'
import axios from 'axios';
import {
  Layout as AntLayout, Menu, Breadcrumb, Icon, Row, Col, List, Avatar
} from 'antd';

const {
  Header, Content, Footer, Sider,
} = AntLayout;

const SubMenu = Menu.SubMenu;


const listData = [];
for (let i = 0; i < 23; i++) {
  listData.push({
    href: 'http://ant.design',
    title: `ant design part ${i}`,
    avatar: 'https://zos.alipayobjects.com/rmsportal/ODTLcjxAfvqbxHnVXCYX.png',
    description: 'Ant Design, a design language for background applications, is refined by Ant UED Team.',
    content: 'We supply a series of design principles, practical patterns and high quality design resources (Sketch and Axure), to help people create their product prototypes beautifully and efficiently.',
  });
}

const IconText = ({ type, text }) => (
  <span>
    <Icon type={type} style={{ marginRight: 8 }} />
    {text}
  </span>
);


class Layout extends React.Component {

  state = {
    collapsed: false,
  };

  componentDidMount() {

  }

  onCollapse = (collapsed) => {
    console.log(collapsed);
    this.setState({ collapsed });
  }

  render() {
    return (
      <AntLayout style={{background: 'none'}}>
        <Header style={{ position: 'fixed', zIndex: 1, width: '100%', padding: '0 50px' }}>
          <div className="logo" />
          <Menu
            theme="dark"
            mode="horizontal"
            defaultSelectedKeys={['2']}
            style={{ lineHeight: '64px' }}
          >
            <Menu.Item key="1">nav 1</Menu.Item>
            <Menu.Item key="2">nav 2</Menu.Item>
            <Menu.Item key="3">nav 3</Menu.Item>
          </Menu>
        </Header>
        <Content style={{ padding: '0 50px', marginTop: 64, height: '100%' }}>
          <Row gutter={16}>
            <Col span={6} />
              <Col span={12}>
              <List
                itemLayout="vertical"
                size="large"
                pagination={{
                  onChange: (page) => {
                    console.log(page);
                  },
                  pageSize: 3,
                }}
                dataSource={listData}
                footer={<div><b>ant design</b> footer part</div>}
                renderItem={item => (
                  <List.Item
                    key={item.title}
                    actions={[<IconText type="star-o" text="156" />, <IconText type="like-o" text="156" />, <IconText type="message" text="2" />]}
                    extra={<img width={272} alt="logo" src="https://gw.alipayobjects.com/zos/rmsportal/mqaQswcyDLcXyDKnZfES.png" />}
                  >
                    <List.Item.Meta
                      avatar={<Avatar src={item.avatar} />}
                      title={<a href={item.href}>{item.title}</a>}
                      description={item.description}
                    />
                    {item.content}
                  </List.Item>
                )}
              />
              </Col>
            <Col span={6} />
          </Row>
        </Content>
      </AntLayout>
    );
  }
}


export default Layout
