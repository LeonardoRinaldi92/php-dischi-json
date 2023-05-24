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
                axios.get (this.apiUrl).then( (res) => {
                    this.arrayDischi = res.data;
                })
            },
            creaDettagli(i) {
                const indiceNumero = {
                    numeroArray : i
                }

                axios.post (this.apiUrl, indiceNumero, {headers: {'Content-Type':'multipart/form-data'}})
                .then( (res) => {
                    this.arrayOnScreen = res.data;
                })
            }
        },
        mounted() {
            this.chiamataApi();
        },
    }).mount('#app')