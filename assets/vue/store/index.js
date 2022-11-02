import { createStore } from 'vuex'
import UserModule from '../store/user'
import CvModule from '../store/cv'

export default createStore({
  state: {
  },
  getters: {
  },
  mutations: {
  },
  actions: {
  },
  modules: {
    user: UserModule,
    cv: CvModule,
  }
})
