require('./bootstrap.js');

import React from 'react'
import { render } from 'react-dom'
import { createBrowserHistory } from 'history';

import { Provider } from 'react-redux'
import { createStore, applyMiddleware } from 'redux'
import { combineReducers } from 'redux';
import { BrowserRouter, Route } from 'react-router-dom'

import * as actionCreators from './actions';

import AdminLayout from './pages/admin/Layout';
import ClientLayout from './pages/client/Layout';

const reducer = require('./reducers').default;
console.log(reducer)
const store = createStore(
  combineReducers(reducer),
  applyMiddleware(store => next => action => {
    console.log('dispatching', action)
    let result = next(action)
    console.log('next state', store.getState())
    return result
  })
);

const history = createBrowserHistory()

actionCreators.getInitAction();

render(
  <Provider
    store={store}
  >
    <BrowserRouter>
      <div>
        <Route exact path="/" component={ClientLayout}/>
        <Route path="/admin" component={AdminLayout} />
      </div>
    </BrowserRouter>
  </Provider>
  , document.getElementById('app'));

export const dispatch = store.dispatch;



// export default route = {
//   path: '/',
//   component: require('./layout'),
//   childRoutes: [{
//     path: '',
//     component: require('./pages/client/layout'),
//     childRoutes: [
//       {
//         path: '',
//         component: require('./pages/client/pages/login/index'),
//       }, {
//         path: 'login',
//         component: require('./pages/client/pages/login/index'),
//       },
//     ]
//   }, {
//     path: 'admin',
//     component: require('./pages/admin/layout'),
//     childRoutes: [
//       {
//         path: 'notes',
//         component: App2,
//       }, {
//         path: 'reversions',
//         component: require('./pages/admin/pages/reversions/layout'),
//         childRoutes: [
//           { path: ':id', component: require('./pages/admin/pages/reversions/pages/reversion') },
//           { path: 'figures', component: require('./pages/admin/pages/reversions/pages/figures') },
//         ]
//       }, {
//         path: 'roles',
//         component: require('./pages/admin/pages/roles/layout'),
//         childRoutes: [

//         ]
//       }, {
//         path: 'sidebars',
//         component: require('./pages/admin/pages/sidebars/layout'),
//         childRoutes: [
//           // { path: 'create', component: require('./pages/admin/pages/sidebars/pages/edit') },
//         ],
//       }, {
//         path: 'users',
//         component: require('./pages/admin/pages/users/layout'),
//         childRoutes: [
//           // { path: '', component: require('./pages/admin/pages/pages/pages/reversion') }
//         ]
//       },
//     ]
//   }]
// };
