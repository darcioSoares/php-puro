<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

<div class="d-flex flex-column mt-5 text-center">
    <h3>Home</h3>
    <p>Usuario logado : <strong> <?= $_SESSION['usuario']?> </strong></p>
</div>

<div id="app">

    <h1>{{name}}</h1>

    <h2 v-on:click="teste">teste</h2>

</div>
<script>
    const page1 = {
        data(){
            return{
                name:"Darcio"
            }

        }, methods:{
            teste(){
                alert("teste")
            }
        }
    }

    Vue.createApp(page1).mount("#app")
        
    
</script>

