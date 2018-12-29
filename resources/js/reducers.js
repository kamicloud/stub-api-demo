import {
  ADD_TODO,
  COMPLETE_TODO,
  SET_VISIBILITY_FILTER,
  VisibilityFilters,
  constants
} from './actions';
const { SHOW_ALL } = VisibilityFilters;

export default {
  adminReversionsDetail: (state = {}, action) => {
    switch (action.type) {
      case constants.ADMIN_REVERSIONS_DETAIL:
        return action.data.reversion;
      default:
        return state;
    }
  },
  adminSidebarsEditModalShow: (state = false, action) => {
    switch (action.type) {
      case constants.ADMIN_SIDEBARS_EDIT_MODAL_TOGGLE:
        action.form && action.form.resetFields();
        return !state;
      case constants.ADMIN_SIDEBARS_UPDATE:
        return false;
      case constants.ADMIN_SIDEBARS_CREATE:
        return false;
      default:
        return state;
    }
    return state;
  },
  adminSidebarsEditing: (state, action) => {
    var defaultValues = {
      name: '',
      uri: '',
      comment: '',
      // parent_id: '0'
    };
    switch (action.type) {
      case constants.ADMIN_SIDEBARS_EDIT_MODAL_TOGGLE:
        if (action.sidebar) {
          return Object.assign({}, state, action.sidebar);
        }
        return {};
      case constants.ADMIN_SIDEBARS_UPDATE:
        return action.sidebar;
      default:
        return {};
    }
  },
  ignores: (state = [], action) => {
    switch (action.type) {
      case constants.ADMIN_REVERSIONS_DETAIL:
        return action.data.ignores;
      default:
        return state;
    }
  },
  roles: (state = [], action) => {
    switch (action.type) {
      case constants.ADMIN_ROLES_INIT:
        return action.roles;
      default:
        return state;
    }
  },
  sidebars: (state = [], action) => {
    switch (action.type) {
      case constants.ADMIN_SIDEBARS_INIT:
        return action.data.sidebars
      case constants.ADMIN_SIDEBARS_UPDATE:
        return action.sidebars;
      case constants.ADMIN_SIDEBARS_CREATE:
        return [action.sidebar, ...state];
      default:
        return state;
    }
  },

  truckRecentRecords: (state = [], action) => {
    switch (action.type) {
      case constants.CLIENT_TRUCK_RECENT_RECORDS:
        return action.data.truckRecords;
      default:
        return state;
    }
  },
  allTruckRecords: (state = [], action) => {
    switch (action.type) {
      case constants.CLIENT_ALL_TRUCK_RECORDS:
        return action.data.truckRecords;
      default:
        return state;
    }
  },
  truckRecords: (state = [], action) => {
    switch (action.type) {
      case constants.CLIENT_TRUCK_RECORDS:
        return action.data.truckRecords;
      default:
        return state;
    }
  },
  todos: (state = [], action) => {
    switch (action.type) {
      case ADD_TODO:
        return [
          ...state, {
            text: action.text,
            completed: false
          }
        ]
      case COMPLETE_TODO:
        return [
          ...state.slice(0, action.index),
          Object.assign({}, state[action.index], {
            completed: true
          }),
          ...state.slice(action.index + 1)
        ]
      default:
        return state
    }
  },
  user: (state = {}, action) => {
    switch (action.type) {
      case constants.APP_INIT:
        return action.data.user;
      default:
        return state;
    }
  },




  users: (state = [], action) => {
    switch (action.type) {
      case constants.ADMIN_USERS_INIT:
        console.log('users', action);
        return action.data.users;
      default:
        return state;
    }
  },


  visibilityFilter: (state = SHOW_ALL, action) => {
    switch (action.type) {
      case SET_VISIBILITY_FILTER:
        return action.filter
      default:
        return state
    }
  },
  z: (state = {}, action) => {
    console.log(state, action)
    return state;
  }
}
