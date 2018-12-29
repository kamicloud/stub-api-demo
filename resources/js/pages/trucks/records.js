import React from 'react';
import { connect } from 'react-redux';
import { Table } from 'antd';
import { Link } from 'react-router';

import * as actionCreators from '../../../../../actions';

@connect(
  state => ({
    truckRecords: state.truckRecords,
  })
)
export default class Layout extends React.Component {
  constructor(props) {
    super(props);
    actionCreators.getClientTruckRecordsAction(this.props.params.truckId);
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

    if (this.map) {
      var line = [];
      truckRecords.map((truckRecord, index) => {

        let point = new BMap.Point(truckRecord.longitude, truckRecord.latitude);
        if (index === 0)
          this.map.centerAndZoom(point, 15);
        var marker = new BMap.Marker(point);        // 创建标注

        this.map.addOverlay(marker);
        if (truckRecords.length !== 0 && index === 0) {
          var label = new BMap.Label('终点', { offset: new BMap.Size(20, -10) });
          marker.setLabel(label);
        } else if (index === truckRecords.length - 1) {
          var label = new BMap.Label('起点', { offset: new BMap.Size(20, -10) });
          marker.setLabel(label);
        }
        line.push(point);
      });
      var polyline = new BMap.Polyline(line, { strokeColor: "blue", strokeWeight: 5, strokeOpacity: 0.5 });   //创建折线
      this.map.addOverlay(polyline);   //增加折线
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

