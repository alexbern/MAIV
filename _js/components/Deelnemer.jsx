import React, {Component} from 'react';
import {basename} from '../globals';
import {checkStatus} from '../util';

export default class Deelnemer extends React.Component {
   constructor(props, context) {
    super(props, context);
    this.state = {};
  }
  deleteClicked(e){
    e.preventDefault();
    console.log(this.props);
    this.props.deleteDeelnemer(this.props.id);
  }
  render() {
    let {id, naam, klas, school, status, gemeente, email, foto} = this.props;

    if (status == 0){
      status = 'PENDING';
    }

    if (status == 1){
      status = 'ACCEPTED';
    }

    return (
      <tr className="comeback">
        <td>{id}</td>
        <td>{foto}</td>
        <td>{naam}</td>
        <td>{school}</td>
        <td>{klas}</td>
        <td>{gemeente}</td>
        <td>{email}</td>
        <td className="status">{status}</td>
        <td>Accept</td>
        <td onClick={e=> this.deleteClicked(e)}>Remove</td>
      </tr>
    );
  }
}