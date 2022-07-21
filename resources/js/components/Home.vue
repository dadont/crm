<template>
    <div>
        <h1>
            {{ title }}
        </h1>
        <card v-for="(user, index) in users" :user="user" text="some text..."
        v-bind:key="index"/>
    </div>
</template>

<script>
import User from "./users/User";
export default {
    name: "Home",
    components: { 
        card: User,
    },
    data(){
        return {
            title:'Crm Helpdesc',
            users:[
                {
                    name: 'Roman',
                    last_name: 'Davydov'
                },
                {
                    name: 'Roman2',
                    last_name: 'Davydov'
                },
                                {
                    name: 'Roman3',
                    last_name: 'Davydov'
                },
            ],
            name: null,
        }
    },
    methods: {
        addUser(){
            this.users.push(this.name);
            this.clearName();
        },
        clearName(){
            this.name=null;
        },
    },
}
</script>

<style scoped>
</style>