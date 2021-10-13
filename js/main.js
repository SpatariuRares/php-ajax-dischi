Vue.config.devtools = true;
const a =new Vue({
    el:'#root',
    data: {
            discs: [],
            genre: "all",
        },
        created() {
            this.getAlbum();
        },
        methods:{
            getAlbum(){
                    console.log("api/api.php?genre="+this.genre)
                    axios.get("api/api.php?genre="+this.genre)
                    .then((response) => {
                        this.discs = response.data;
                    })
            },
        },
        computed:{
            geners(){
                const genres=[];
                this.discs.forEach((album)=>{
                if(!genres.includes(album.genre)){
                    genres.push(album.genre);
                }
                })
                return genres;
            },
        }
})