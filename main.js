const { createApp } = Vue
    
    createApp({
        data() {
            return {
                apiUrl: 'apis/server.php',
                arrayDischi : [],
                arrayOnScreen : [],
            }
        },
        methods: {
            chiamataApi () {
                axios.get ("apis/server.php").then( (res) => {
                    this.arrayDischi = res.data;
                })
            }
        },
        mounted() {
            this.chiamataApi();
        },
    }).mount('#app')