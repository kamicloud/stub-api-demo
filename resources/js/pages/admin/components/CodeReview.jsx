import React from 'react';
import { Table, Badge, Dropdown, Menu, Icon, Button, Modal, Tooltip } from 'antd';

class CodeLine extends React.Component {

  render() {
    return (
      <p>
        <span style={{
          width: '30px',
          display: 'inline-block',
          textAlign: 'right',
          marginRight: '8px',
          verticalAlign: 'top',
        }}>{this.props.line}</span>
        {
          this.props.messages[this.props.line] ?
            <Tooltip title={this.props.messages[this.props.line].message}>
              <span style={{
                background: this.props.messages[this.props.line].type == 'ERROR' ? 'red' : 'yellow',
                width: 'calc(100% - 40px)',
                display: 'inline-block',
              }}>{this.props.content}&nbsp;</span>
            </Tooltip> :
            <span style={{
              width: 'calc(100% - 40px)',
              display: 'inline-block',
            }}>{this.props.content}&nbsp;</span>
        }
      </p>
    );
  }
}

class CodeBlock extends React.Component {
  constructor(props) {
    super(props);
    this.state = {}
  }
  render() {
    var i = 0;
    var contents = [];
    var messages = [];
    for (var j = 0; j < this.props.file.contents.length; j++) {
      for (var k = 0; k < this.props.messages.length; k++) {
        var flag = false;
        this.props.ignores ? this.props.ignores.map((ignore) => {
          if (this.props.messages[k].message.match(ignore.pattern)) {
            flag = true;
            return false;
          }
        }) : null;
        //
        // for (var l = 0; l < this.props.ignores.length; l++) {
        //   if (this.props.messages[k].message.match(this.props.ignores[l].pattern)) {
        //     ignore = true;
        //     break;
        //   }
        // }
        if (flag) continue;
        messages[this.props.messages[k].line] = this.props.messages[k];
        if (j < this.props.messages[k].line + 5 && j > this.props.messages[k].line - 5) {
          contents[j] = true;
        }
      }
    }
    return (
      <div>
        <Button
          type="primary"
          onClick={() => {
            this.setState({
              visible: true,
            });
          }}>查看上下文</Button>
        <Modal
          title="代码上下文"
          visible={this.state.visible}
          onOk={(e) => {
            this.setState({
              visible: false,
            });
          }}
          onCancel={(e) => {
            this.setState({
              visible: false,
            });
          }}
        >
          {this.props.file.contents.map((line) =>
            ++i && contents[i] ?
              <CodeLine
                key={i}
                line={i}
                content={line}
                messages={messages}
              /> : null
          )}
        </Modal>
      </div>
    );
  }
}

export { CodeBlock }
