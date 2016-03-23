import React from 'react';
import {Link} from 'react-router';
import fetch from 'isomorphic-fetch';
import {basename} from '../globals';
import {checkStatus} from '../util';

export default class App extends React.Component{
  constructor(props, context) {
    super(props, context);
    this.state = {
      deelnemers: [
      ],
      deelnemersFetched: false
    };
  }
  // componentDidMount(){
  //   fetch(`${basename}/api`)
  //     .then(checkStatus)
  //     .then(r => r.json())
  //     .then(data => {
  //       data.forEach(o => o.key = o.id);
  //       this.setState({deelnemers: data, deelnemersFetched: true});
  //     })
  //     .catch(() => {
  //       console.error('failed to get deelnemers');
  //     });
  // }
  render() {
    // let {oneliners, onelinersFetched} = this.state;
    return (
      // <div className='site-container'>
      //   <header><h1 className='site-header'><Link to={'/'}>Onelinr</Link></h1></header>
      //   {this.props.children && React.cloneElement(this.props.children, {
      //     oneliners: oneliners,
      //     onelinersFetched: onelinersFetched,
      //     addOneliner: o => this.addOneliner(o),
      //     editOneliner: o => this.editOneliner(o),
      //     deleteOneliner: o => this.deleteOneliner(o),
      //     addComeback: o => this.addComeback(o),
      //     deleteComeback: o => this.deleteComeback(o),
      //     fetchComebacksForOneliner: o => this.fetchComebacksForOneliner(o)
      //   })}
      // </div>
    );
  }






}
