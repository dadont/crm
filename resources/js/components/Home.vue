<template>
    <div>
        <ul>
            <li>
                <router-link to="/users">User List</router-link>                
            </li>
            <li>
                <router-link to="/admin">AdminPage</router-link>
            </li>
        </ul>
        
        
        <router-view/>
    </div>    
</template>

<script>

export default {
    name: "Home",

    }
</script>

<style scoped>
</style>