
<template>
    <div>
        <h1>
            {{ title }}
        </h1>
        <user-card
            v-for="(user, index) in users"            
            :user="user"
            text="some text..."
            v-bind:key="index"
            />        
    </div>
</template>

<script>
import User from "../components/users/User.vue";
export default {
    name: "UserList",
        components: { 
        'user-card': User,},
     data(){
        return {
            title:'Crm Helpdesc',
            users:[
                {
                    name: 'Roman',
                    last_name: 'Davydov',
                    role: 'admin'
                },
                {
                    name: 'Vova',
                    last_name: 'Udav',
                    role: 'manager'
                },
                {
                    name: 'Semen',
                    last_name: 'Petrov',
                    role: 'client'
                },
                {
                    name: 'Baba',
                    last_name: 'Vanya',
                    role: 'client'
                },
                {
                    name: 'Ivan',
                    last_name: 'Petrov',
                    role: 'manager'
                },
            ],

        }
    },
}
</script>

<style scoped>
</style>