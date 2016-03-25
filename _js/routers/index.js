import React from 'react';
import {Router, browserHistory, Route} from 'react-router';
import {App} from '../pages';

export default () => (
  <Router history={browserHistory}>
    <Route path="/admin" component={App} />
  </Router>
);
