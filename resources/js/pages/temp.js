import React from 'react';
import { connect } from 'react-redux';
import { Table } from 'antd';

import * as actionCreators from './actions';

@connect(
  state => ({
    truckRecords: state.truckRecords,
  })
)
export default class Layout extends React.Component {
  constructor(props) {
    super(props);
    actionCreators.getClientTruckRecordsAction();
  }

  componentDidMount() {

    this.map = new BMap.Map("test");                  // 将标注添加到地图中
    this.map.enableScrollWheelZoom(true);
  }

  render() {
    console.log(this.props.truckRecords);

    const columns = [{
      title: '时间',
      dataIndex: 'time',
      key: 'time',
    }, {
      title: '质量（千克）',
      dataIndex: 'weight',
      key: 'weight',
    }];
    const truckRecords = this.props.truckRecords;

    if (this.map)
      for (var i = 0; i < 50; i++) {
        var point = new BMap.Point(truckRecords[i].longitude, truckRecords[i].latitude);
        this.map.centerAndZoom(point, 15);
        var marker = new BMap.Marker(point);        // 创建标注
        this.map.addOverlay(marker);
      }
    return (
      this.props.children ? this.props.children : <div
        style={{
          height: '100%',
        }}
      >
        <div
          style={{
            width: '400px',
            height: '100%',
            display: 'inline-block',
            position: 'fixed',
          }}
        >
          <Table
            columns={columns}
            dataSource={truckRecords}
            rowKey='id'
          />
        </div>
        <div
          id="test"
          style={{
            height: '100%',
            width: 'calc(100% - 400px)',
            display: 'inline-block',
            marginLeft: '400px',
          }}
        >

        </div>
      </div>
    )
  }
}
