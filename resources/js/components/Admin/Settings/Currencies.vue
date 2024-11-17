<template>
  <div>

    <div class="card card-bordered card-preview vld-parent" ref="formContainer">
      <div class="card-inner">
        <div class="table-responsive">
          <form @submit.prevent="submit" class="">

            <div class="table-responsive">
              <table class="table table-sm">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Currency</th>
                    <th>&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="(currency, index) in form.currencies" :key="index">
                    <td style="width:2%">{{ index + 1 }}.</td>
                    <td style="width:96%"><input class="form-control" type="text"
                        :class="{ 'is-invalid': form.errors.has(`currencies.${index}.currency`) }"
                        v-model="currency.currency" placeholder="Currency-Abbreviation eg.  Bitcoin-BTC">
                      <has-error :form="form" :field="`currencies.${index}.currency`">
                      </has-error>
                    </td>
                    <td><button type="button" class="btn btn-sm btn-outline-danger"
                        @click="deleteCurrency(index)">-</button></td>
                  </tr>
                  <tr>
                    <td class="text-center" colspan="3"><button type="button" class="btn btn-primary btn-sm"
                        @click="addCurrency()">+</button></td>
                  </tr>
                </tbody>
                <tfoot>
                  <tr class="">
                    <th colspan="3" class="">
                      <div class="d-flex justify-content-end">
                        <Button :form="form" class="btn btn-lg btn-outline-primary btn-sm ">
                          Save
                        </Button>
                      </div>


                    </th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </form>
        </div>
      </div>
    </div>

  </div>
</template>

<script>
  import Form from 'vform'
  import {
    Button,
    HasError,
    AlertError
  } from 'vform/src/components/bootstrap5'


  export default {
    components: {
      Button,
      HasError,
      AlertError,
    },
    data: () => ({
      db_data: '',
      form: new Form({
        currencies: [],
      })
    }),
    methods: {

      addCurrency() {
        this.form.currencies.push({
          currency: "",
        });
      },
      deleteCurrency: function (index) {
        this.form.currencies.splice(index, 1)
      },

      submit() {




        this.$modal.show('dialog', {
          title: '<span class="dialog-popup text-center" >Are you sure about this?</span>',
          buttons: [{
              title: 'No',
              handler: () => {
                this.$modal.hide('dialog')
                loader.hide()
              }
            },
            {
              title: 'Yes',
              handler: () => {
                let loader = this.$loading.show({
                  container: this.$refs.formContainer,
                });

                this.$modal.hide('dialog')

                this.form.post(this.route('api.admin.settings.currency'))
                  .then(({
                    data
                  }) => {

                    loader.hide()
                    this.$toast.open('Operation Successful');

                  })
                  .catch((error) => {
                    loader.hide()
                  });
              }
            }

          ]
        })

      },

    },
    created() {

      window.config.config.currencies.forEach(element => {
        this.form.currencies.push({
          currency: element.currency
        })
      });
    },

  }

</script>
