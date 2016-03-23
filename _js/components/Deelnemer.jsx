import React, {Component} from 'react';

export default class Deelnemer extends React.Component {
   constructor(props, context) {
    super(props, context);
    this.state = {};
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
        <td>Remove</td>
      </tr>
    );
  }
}
