<template>
  <div>
      <div v-for="(item, index) in items" :key="index">
        <list-item :item="item" v-on:itemchanged="$emit('reloadlist')" />
      </div>
  </div>
</template>


<script>
import ListItem from './listItem'
export default {
  props: ['items'],
  components: {
    ListItem
  }
}
</script>

<style>

</style>