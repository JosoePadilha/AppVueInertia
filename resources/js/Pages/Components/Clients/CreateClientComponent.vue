<template>
  <DashBoardComponent>
    <div slot="slot-dashboard">
      <b-card-group deck>
        <b-card bg-variant="light" header="Cadastro de cliente">
          <b-container fluid>
            <b-form>
              <div>
                <b-row>
                  <b-col cols="12" sm="12" md="12" lg="6">
                    <b-form-group>
                      <b-form-input
                        placeholder="Nome do cliente"
                        id="input-horizontal"
                      ></b-form-input>
                    </b-form-group>
                  </b-col>
                  <b-col cols="12" sm="12" md="12" lg="3">
                    <b-form-group>
                      <b-form-input
                        placeholder="Celular do cliente"
                        id="input-horizontal"
                      ></b-form-input>
                    </b-form-group>
                  </b-col>
                  <b-col cols="12" sm="12" md="12" lg="3">
                    <b-form-group>
                      <b-form-input
                        placeholder="CPF do cliente"
                        id="input-horizontal"
                      ></b-form-input>
                    </b-form-group>
                  </b-col>
                </b-row>
              </div>
            </b-form>
          </b-container>
        </b-card>
      </b-card-group>
    </div>
  </DashBoardComponent>
</template>

<script>
import DashBoardComponent from "../DashBoardComponent";

export default {
  components: {
    DashBoardComponent,
  },
};
</script>

<style>
</style>
