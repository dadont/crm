<template>
    <div>
        <h1>User Name: {{user.name}}</h1>
        <h1>User E-mail: {{user.email}}</h1>
    </div>    
</template>

<script>

export default {
    name: "UserPage",
    data(){
        return {
            userId: null,
            user: {},
        };
    },
    async mounted(){
        this.userId = this.$route.params.id;
        let result =  await axios.get(`/users/${this.userId}`);
        this.user = result.data;
        
    }

    }
</script>

<style scoped>
</style>