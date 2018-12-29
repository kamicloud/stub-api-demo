import React from 'react';
import { connect } from 'react-redux';
import { Table } from 'antd';
import { Link } from 'react-router';

import * as actionCreators from '../../../../../actions';

@connect(
  state => ({
    truckRecords: state.allTruckRecords,
  })
)
export default class Layout extends React.Component {
  constructor(props) {
    super(props);
    actionCreators.getClientAllTruckRecordsAction();
  }

  componentDidMount() {

  }

  render() {
    console.log(this.props.truckRecords);

    const columns = [{
      title: 'ID',
      dataIndex: 'id',
      key: 'id',
    }, {
      title: 'TruckId',
      dataIndex: 'truck_id',
      key: 'truck_id',
    }, {
      title: '经度',
      dataIndex: 'latitude',
      key: 'latitude',
    }, {
      title: '纬度',
      dataIndex: 'altitude',
      key: 'altitude',
    }, {
      title: '质量（千克）',
      dataIndex: 'weight',
      key: 'weight',
    }];
    const truckRecords = this.props.truckRecords;



    return (
      this.props.children ? this.props.children : <div
        style={{
        }}
      >
        <div
          style={{
          }}
        >
          <Table
            columns={columns}
            dataSource={truckRecords}
            rowKey='id'
          />
        </div>
      </div>
    )
  }
}
