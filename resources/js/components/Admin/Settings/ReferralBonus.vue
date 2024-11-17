<template>
  <div>

    <div class="card card-bordered card-preview vld-parent" ref="formContainer">
      <div class="card-inner">
        <div class="table-responsive">
          <form @submit.prevent="submit" class="">

            <div class="table-responsive">
              <table class="table table-sm">
                <tbody>

                  <tr>
                    <td>
                      <div class="form-group mb-3 ">
                        <label class="form-label" for="first_level">First Level</label>
                        <input type="text" class="form-control" placeholder="" v-model="form.first_level"
                          :class="{ 'is-invalid': form.errors.has('first_level') }" id="first_level">
                        <has-error :form="form" field="first_level"></has-error>
                      </div>
                    </td>
                    <td>
                      <div class="form-group mb-3 ">
                        <label class="form-label" for="second_level">Second Level</label>
                        <input type="text" class="form-control" placeholder="" v-model="form.second_level"
                          :class="{ 'is-invalid': form.errors.has('second_level') }" id="second_level">
                        <has-error :form="form" field="second_level"></has-error>
                      </div>
                    </td>
                    <td>
                      <div class="form-group mb-3 ">
                        <label class="form-label" for="third_level">Third Level</label>
                        <input type="text" class="form-control" placeholder="" v-model="form.third_level"
                          :class="{ 'is-invalid': form.errors.has('third_level') }" id="third_level">
                        <has-error :form="form" field="third_level"></has-error>
                      </div>
                    </td>
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
        first_level: 10,
        second_level: 5,
        third_level: 2.5,
      })
    }),
    methods: {

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

                this.form.post(this.route('api.admin.settings.bonus'))
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
      this.form.first_level=window.config.config.first_level
      this.form.second_level=window.config.config.second_level
      this.form.third_level=window.config.config.third_level
    },

  }

</script>
