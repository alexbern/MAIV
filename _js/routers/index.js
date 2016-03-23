import React from 'react';
import {Router, browserHistory, Route, IndexRoute, useRouterHistory} from 'react-router';
import {App} from '../pages';
import {basename} from '../globals';

export default () => (
  <Router history={browserHistory}>
    <Route path="/cms" component={App} />
  </Router>
);
