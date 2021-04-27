<template>
  <layout />
</template>

<script>
import Layout from "./Layout";

export default {
  components: {
    Layout,
  },
  props: {
    user: String,
  },
};
</script>
