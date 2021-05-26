<template>
  <DashBoardComponent>
    <div slot="slot-dashboard">
      <div>
        <b-alert show variant="primary">Primary Alert</b-alert>
        <b-alert show variant="secondary">Secondary Alert</b-alert>
        <b-alert show variant="success">Success Alert</b-alert>
        <b-alert show variant="danger">Danger Alert</b-alert>
        <b-alert show variant="warning">Warning Alert</b-alert>
        <b-alert show variant="info">Info Alert</b-alert>
        <b-alert show variant="light">Light Alert</b-alert>
        <b-alert show variant="dark">Dark Alert</b-alert>
      </div>
    </div>
  </DashBoardComponent>
</template>

<script>
import DashBoardComponent from "../Components/DashBoardComponent";

export default {
  components: {
    DashBoardComponent,
  },
};
</script>

