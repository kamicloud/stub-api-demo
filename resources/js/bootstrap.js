// import "babel-polyfill";
// import { createBrowserHistory } from 'history';
import axios from 'axios';
import { message, Button } from 'antd';

window.axios = axios;
/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

// const history = createBrowserHistory()

/**
 * Vue is a modern JavaScript library for building interactive web interfaces
 * using reactive data binding and reusable components. Vue's API is clean
 * and simple, leaving you to focus on building your next great project.
 */

// window.Vue = require('vue');
/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */


axios.defaults.headers.common = {
  'X-Requested-With': 'XMLHttpRequest'
};

axios.interceptors.request.use(function (config) {
  config.url = config.url + '?' + Date.parse(new Date());
  return config;
}, function (error) {
  // Do something with request error
  return Promise.reject(error);
});
axios.interceptors.response.use(function (config) {
  console.log('config', config);
  let { data } = config;
  if (data.status != 0) {
    message.error(data.message);
  } else {
    config.data = data.data;
  }
  return config;
}, function (error) {
  switch (error.response.status) {
    case 401:
      console.log(401)
      // history.push('/login');
      break;
    case 405:
      'MethodNotAllowedHttpException ';
      break;
    case 500:
      console.log('ERROR 500')
      break;
    default:

  }
  return Promise.reject(error);
});
/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from "laravel-echo"

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: 'your-pusher-key'
// });


// var requirejs = require('requirejs');

// requirejs.config({
//     //Pass the top-level main.js/index.js require
//     //function to requirejs so that node modules
//     //are loaded relative to the top-level JS file.
//     paths: {
//         'CKEDITOR': '/plugins/ckeditor/ckeditor.js'
//     },
//     nodeRequire: require,
//     shim: {
//         'CKEDITOR': {
//             exports: 'CKEDITOR',
//         }
//     }
// });
