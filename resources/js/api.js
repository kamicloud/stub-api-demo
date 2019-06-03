import axios from 'axios';


export default {
  admin: {
    article: {
      getArticles: async (data) => {
        return await axios.post('/api/v1/article/get_articles', data);
      }
    }
  }
}
