const app = new Vue({
    el: '#app',
    data: {
        url : 'api/api-db.php',
        songs : ''
      
    },
    methods: {
     
    },
    mounted() {
        axios
            .get(this.url)
            .then(response => {
                // console.log(response.data);
                this.songs = response.data;
                // console.log(this.songs);
            })
            .catch(error => {
                console.log(error);
            })
    }
})