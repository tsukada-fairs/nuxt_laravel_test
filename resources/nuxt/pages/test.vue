<template>
  <div>
    <h1>{{ message }}</h1>
  </div>
</template>
<script lang="ts">
import Vue from "vue"

export default Vue.extend({
  data: function () {
    return {
      message: "hello2345",
    }
  },
  mounted: function () {
    // let text: string = "good morning"
  },
})
</script>
