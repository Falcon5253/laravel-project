<template>
    <div v-show="this.name != null" class="alert alert-primary" role="alert">
        Добавлена новая статья: <strong>{{this.name}}</strong>
    </div>
</template>

<script>
    export default {
        data(){
            return {name:null}
        },
        methods:{
            // showAlert() {

            // });
        },
        created() {
            Window.Echo.channel('test').listen('PublicArticleEvent', (name)=>{
                console.log(name);
                this.name=name[1];
            });
        }
    }
</script>