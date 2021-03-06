import React from 'react';
import fetch from 'isomorphic-fetch';
import {basename} from '../globals';
import {checkStatus} from '../util';
import {find} from 'lodash';
import {Deelnemer} from '../components';

export default class App extends React.Component{
  constructor(props, context) {
    super(props, context);
    this.state = {
      deelnemers: [
      ],
      deelnemersFetched: false
    };
  }
  deleteDeelnemer(id){
    fetch(`${basename}/api/${id}`, {
      method: 'DELETE'
    })
      .then(checkStatus)
      .then(r => r.json())
      .then(d => {
        this.refresh();
      })
      .catch(() => {
        console.error('failed to delete deelnemer');
      });
  }
  updateDeelnemer(id){
    let deelnemers = this.state.deelnemers.concat();
    console.log(id);
    let existingDeelnemer = find(deelnemers, o => o.id === id);
    if (!existingDeelnemer){
      return;
    }
    fetch(`${basename}/api/${id}`, {
      method: 'PUT',
      body: JSON.stringify(existingDeelnemer),
      headers: new Headers({'Content-Type': 'application/json'})
    })
      .then(checkStatus)
      .then(r => r.json())
      .then(d=>{
        this.refresh();
      }
      )
      .catch(() => {
        console.error('failed to edit deelnemer');
      });
    this.setState({deelnemers});
  }
  componentDidMount(){
    fetch(`${basename}/api`)
      .then(checkStatus)
      .then(r => r.json())
      .then(data => {
        data.forEach(o => o.key = o.id);
        this.setState({deelnemers: data, deelnemersFetched: true});
      })
      .catch(() => {
        console.error('failed to get deelnemers');
      });
  }
  refresh(){
    fetch(`${basename}/api`)
      .then(checkStatus)
      .then(r => r.json())
      .then(data => {
        data.forEach(o => o.key = o.id);
        this.setState({deelnemers: data, deelnemersFetched: true});
      })
      .catch(() => {
        console.error('failed to get deelnemers');
      });
  }
  renderDeelnemers(deelnemers){
    return deelnemers.map(deelnemer=>{
      return <Deelnemer {...deelnemer} deleteDeelnemer={id => this.deleteDeelnemer(id)} updateDeelnemer={id => this.updateDeelnemer(id)}/>;
    });
  }
  render() {
    let deelnemers = this.state.deelnemers.concat();
    return (
      <table className="site-container">
        <thead>
          <tr>
            <th>#Id</th>
            <th>Foto</th>
            <th>Name</th>
            <th>School</th>
            <th>Klas</th>
            <th>Location</th>
            <th>Email</th>
            <th>Status</th>
            <th>Accept</th>
            <th>Remove</th>
          </tr>
        </thead>
        <tbody>
          {
            this.renderDeelnemers(deelnemers)
          }
        </tbody>
      </table>
    );
  }
}
