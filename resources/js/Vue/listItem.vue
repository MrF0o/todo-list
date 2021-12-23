<template>
  <div :class="[item.completed ? 'completed': '', 'item']">
    <input type="checkbox"
    v-model="item.completed"
    @change="updateChange()">
      <span>{{item.name}}</span>
    <font-awesome-icon
        icon="trash"
        @click="trashItem()"
        class="trash-icon"
    />
  </div>
</template>

<script>
export default {
  props: ["item"],
  methods: {
    trashItem() {
      axios.delete('api/item/'+ this.item.id)
      .then(res => {
        this.$emit('itemchanged');
      }).catch(err => console.log(err));
    },

    updateChange() {
      axios.put('api/item/'+ this.item.id, {
        item: this.item
      })
      .then(res => {
        this.$emit('itemchanged');
      }).catch(err => console.log(err));
    }
  }
}
</script>

<style scoped>
.item {
  font-size: 20px;
  width: 100%;
  padding: 8px;
  /* border-bottom: 2px solid rgb(206, 206, 206); */
  display: flex;
  /* justify-content: center; */
  align-items: center;
}

.item:hover {
  background: rgb(238, 247, 253);
}

.item > input {
  width: 30px;
  height: 30px;
  cursor: pointer;
}

.trash-icon {
  color: rgb(124, 124, 124);
  margin-left: auto;
  cursor: pointer;
}

.trash-icon:hover {
  color: rgb(165, 69, 69);
}

.completed {
  text-decoration: line-through;
}

</style>