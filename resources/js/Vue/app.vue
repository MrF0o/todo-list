<template>
    <div class="container">
        <div class="heading">
            <h3 class="title">Liste des tâches</h3>
            <add-item-form :items="items"/>
        </div>
        <hr/>
        <list-view :items="items" class="list" v-on:reloadlist="getList()" />
    </div>
</template>

<script>

import addItemForm from './addItemForm'
import listView from './listView';

export default {
    data: function () {
        return {
            items: []
        }
    },
    methods: {
        getList() {
            axios.get('api/items')
            .then(res => {
                this.items = res.data
            })
            .catch(err => console.log(err));
        }
    },
    created(){
        this.getList();
    },
    components: {
        addItemForm,
        listView
    }
}
</script>

<style scoped>

.container {
    width: 50%;
    display: flex;
    margin: auto;
    flex-wrap: wrap;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background: rgb(235, 247, 255);
    margin-top: 40px;
    border-radius: 5px;
}

.heading {
    width: 100%;
    text-align: center;
    font-size: 25px;
}

.list {
    padding: 5px;
    margin-top: 10px;
}

hr {
    margin: 10px 0;
    height: 3px;
    width: 100%;
    border: 0;
    background: white;
}
</style>