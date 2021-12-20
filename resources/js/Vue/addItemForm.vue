<template>
    <div class="add-item">
        <input type="text" placeholder="What's in your mind?" v-model="item.name">
        <font-awesome-icon
        icon="plus-square"
        @click="addItem()"
        :class="[item.name ? 'active' : 'inactive', 'add-icon']"
        />
    </div>
</template>

<script>
export default {
    data: function() {
        return {
            item: {
                name: ""
            }
        }
    },

    methods: {
        addItem(){
            if (this.item.name == '') return;

            axios.post('api/item/store', {
                item: this.item
            })
            .then(res => {
                if (res.status == 201) this.item.name = '';
            }).catch(err => console.log(err));
        }
    }
}
</script>

<style scoped>
.add-item {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
}

.add-item > input {
    width: 70%;
    height: 40px;
    font-size: 25px;
    border-radius: 5px 5px 0px 0px;
    border: 0;
    outline: 0;
    background: rgb(235, 247, 255);
    transition: border-bottom 0.6s ease-in;
    border-bottom: 2px solid rgb(100, 161, 100);
}

.add-icon {
    color: rgb(255, 156, 119);
    font-size: 40px;
    cursor: pointer;
    margin: 5px;
}

.inactive {
    color: rgb(124, 124, 124);
}

.add-icon:hover {
    color: rgb(100, 161, 100);
}
</style>