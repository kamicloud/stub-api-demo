import axios from 'axios';
import { dispatch } from './app';

export const constants = {
  APP_INIT: 'APP_INIT',

  ADMIN_REVERSIONS_DETAIL: 'ADMIN_REVERSIONS_DETAIL',

  ADMIN_ROLES_INIT: 'ADMIN_ROLES_INIT',

  ADMIN_SIDEBARS_EDIT_MODAL_TOGGLE: 'ADMIN_SIDEBARS_EDIT_MODAL_TOGGLE',
  ADMIN_SIDEBARS_INIT: 'ADMIN_SIDEBARS_INIT',
  ADMIN_SIDEBARS_CREATE: 'ADMIN_SIDEBARS_CREATE',
  ADMIN_SIDEBARS_UPDATE: 'ADMIN_SIDEBARS_UPDATE',


  ADMIN_USERS_INIT: 'ADMIN_USERS_INIT',
};
export const loading = [];
export const ADD_TODO = 'ADD_TODO';
export const COMPLETE_TODO = 'COMPLETE_TODO';
export const SET_VISIBILITY_FILTER = 'SET_VISIBILITY_FILTER';
export const ADMIN_SIDEBARS_EDIT_MODAL_TOGGLE = 'ADMIN_SIDEBARS_EDIT_MODAL_TOGGLE';
export const ADMIN_SIDEBARS_EDIT = 'ADMIN_SIDEBARS_ADD';

/*
 * 其它的常量
 */

export const VisibilityFilters = {
  SHOW_ALL: 'SHOW_ALL',
  SHOW_COMPLETED: 'SHOW_COMPLETED',
  SHOW_ACTIVE: 'SHOW_ACTIVE'
};

/*
 * action 创建函数
 */

export const getInitAction = async () => {
  if (loading['getInitAction']) return;
  loading['getInitAction'] = true;
  const response = await axios.get('/');
  dispatch({ type: constants.APP_INIT, data: response.data })
  loading['getInitAction'] = false;
};


export const getAdminRolesAction = () => {
  return async (dispatch) => {
    try {
      const response = await axios.get('/admin/roles');
      if (!response) return false;
      else {
        dispatch({ type: constants.ADMIN_ROLES_INIT, roles: response.data.roles })
      }
    } catch(error) {
      console.log('error: ', error)
    }
  }
}

export const getAdminUsersAction = () => {
  return async (dispatch) => {
    try {
      const response = await axios.get('/admin/users');
      if (!response) return false;
      else {
        dispatch({ type: constants.ADMIN_USERS_INIT, data: response.data })
      }
    } catch(error) {
      console.log('error: ', error)
    }
  }
}

export const getAdminReversionAction = async id => {
  // if (loading['getInitAction']) return;
  // loading['getInitAction'] = true;
  const response = await axios.get('/admin/reversions/' + id);
  dispatch({ type: constants.ADMIN_REVERSIONS_DETAIL, data: response.data })
  // loading['getInitAction'] = false;
}

export const getAdminSidebarsAction = async () => {
  if (loading['getAdminSidebarsAction'] == true) return;
  loading['getAdminSidebarsAction'] = true;
  try {
    const response = await axios.get('/admin/sidebars');
    if (!response) return false;
    else {
      loading['getAdminSidebarsAction'] = false;
      dispatch({ type: constants.ADMIN_SIDEBARS_INIT, data: response.data })
    }
  } catch(error) {
    console.log('error: ', error)
  }
}

export const postAdminSidebarsUpdate = (old, data) => {
  return async (dispatch, form) => {
    try {
      const response = await axios.patch('/admin/sidebars/' + old.id, data);
      if (!response) return false;
      else {
        dispatch({
          type: constants.ADMIN_SIDEBARS_UPDATE,
          sidebar: response.data.sidebar,
          sidebars: response.data.sidebars,
        });
        form.resetFields();
      }
    } catch(error) {
      console.log('error: ', error)
    }
  }
}

export const postAdminSidebarsCreate = (data) => {
  return async (dispatch, form) => {
    try {
      const response = await axios.post('/admin/sidebars', data);
      if (!response) return false;
      else {
        dispatch({ type: constants.ADMIN_SIDEBARS_CREATE, sidebar: response.data.sidebar });
        form.resetFields();
      }
    } catch(error) {
      console.log('error: ', error)
    }
  }
}

export function adminSidebarsEdit(sidebar = null) {
  return { type: ADMIN_SIDEBARS_EDIT, sidebar };
}

export function addTodo(text) {
  console.log('addTodo', text)
  return { type: ADD_TODO, text, data: 'sfdsfds' }
}

export function completeTodo(index) {
  console.log('completeTodo', index)
  return { type: COMPLETE_TODO, index }
}

export function setVisibilityFilter(filter) {
  console.log('setVisibilityFilter', filter)
  return { type: SET_VISIBILITY_FILTER, filter }
}
