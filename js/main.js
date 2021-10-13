Vue.config.devtools = true;
const a =new Vue({
    el:'#root',
    data: {
            discs: []
        },
        created() {
            axios.get('http://localhost/php-dischi/api/api.php')
            .then((response) => {this.discs = response.data;})
        }
})