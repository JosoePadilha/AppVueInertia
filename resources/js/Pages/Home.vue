<template>
  <layout>
    <div>
      <ol>
        <li v-for="(users, index) in user" :key="index">
          {{ users }}
        </li>
      </ol>
    </div>
  </layout>
</template>

<script>
import Layout from "../Layout";

export default {
  components: {
    Layout,
  },
  props: {
    user: String,
  },
};
</script>
