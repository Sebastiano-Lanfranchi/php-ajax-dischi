new Vue({
  el: '#root',
  data:{
  diskList: [],
  genreList : [],
  genreSelect: 'ALL',

},
  mounted(){
    const self = this;
    axios.get('http://localhost/php-ajax-dischi/database/database.php')
    .then(response => {
      self.diskList = response.data;
    });
  },
  methods: {
  filterGenre : function(){
    this.diskList.forEach(item => {
      if(this.genreList.includes(item.genre)){
          return
        }else{
          this.genreList.push(item.genre)
        }
    });
    }

  },
})
Vue.config.devtools = true
