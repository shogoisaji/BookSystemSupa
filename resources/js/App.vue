import { getPosts } from './api'

export default {
  mounted() {
    getPosts().then(...) 
  }
}