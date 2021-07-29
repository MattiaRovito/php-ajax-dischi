const app = new Vue({
    el: '#app',
    data: {
        url : 'api/api-db.php',
        urlSocial : 'api/api-social.php',
        songs : '',
        social : '',
      
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
        axios 
            .get(this.urlSocial)
            .then(res => {
                // console.log(res.data);
                this.social = res.data;
                // console.log(this.social);
            })
            .catch(error => {
                console.log(error);
            })

    }
})