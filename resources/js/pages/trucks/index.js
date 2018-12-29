import React from 'react';
import { connect } from 'react-redux';
import { Table } from 'antd';
import { browserHistory } from 'react-router';

import * as actionCreators from '../../../../../actions';

@connect(
  state => ({
    truckRecentRecords: state.truckRecentRecords,
  })
)
export default class Index extends React.Component {
  constructor(props) {
    super(props);
    actionCreators.getClientTruckRecentRecordsAction();
  }

  componentDidMount() {

    this.map = new BMap.Map("test");                  // 将标注添加到地图中
    this.map.enableScrollWheelZoom(true);
  }

  render() {
    console.log(this.props.truckRecentRecords);

    const columns = [{
      title: '时间',
      dataIndex: 'time',
      key: 'time',
    }, {
      title: '质量（千克）',
      dataIndex: 'weight',
      key: 'weight',
    }];
    const truckRecentRecords = this.props.truckRecentRecords;
    var addMarker = (truckRecentRecord) => {
      var point = new BMap.Point(truckRecentRecord.longitude, truckRecentRecord.latitude);
      var marker = new BMap.Marker(point);        // 创建标注
      this.map.centerAndZoom(point, 15);
      marker.addEventListener("click", () => {
        var p = marker.getPosition();  //获取marker的位置
        browserHistory.push('/trucks/' + truckRecentRecord.truck_id + '/records');
      });
      return marker;
    }
    if (this.map)
      for (var i = 0; i < truckRecentRecords.length; i++) {
        this.map.addOverlay(addMarker(truckRecentRecords[i]));
      }
    return (
      this.props.children ? this.props.children : <div
        style={{
          height: '100%',
        }}
      >
        <div
          id="test"
          style={{
            height: '100%',
            width: '100%',
            display: 'inline-block',
          }}
        >

        </div>
      </div>
    )
  }
}
