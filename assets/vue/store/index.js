import { createStore } from 'vuex'
import UserModule from '../store/user'
import CvModule from '../store/cv'
import blockLeftModule from '../store/blockLeft'

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
    blockLeft: blockLeftModule
  }
})
