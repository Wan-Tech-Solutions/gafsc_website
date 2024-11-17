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
                        <label class="form-label" for="phone">Phone</label>
                        <input type="text" class="form-control" placeholder="" v-model="form.phone"
                          :class="{ 'is-invalid': form.errors.has('phone') }" id="phone">
                        <has-error :form="form" field="phone"></has-error>
                      </div>
                    </td>
                    <td>
                      <div class="form-group mb-3 ">
                        <label class="form-label" for="email">Email</label>
                        <input type="email" class="form-control" placeholder="" v-model="form.email"
                          :class="{ 'is-invalid': form.errors.has('email') }" id="email">
                        <has-error :form="form" field="email"></has-error>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2">
                      <div class="form-group mb-3 ">
                        <label class="form-label" for="email_notification"> Email Notification (Receive system
                          notifications vis this email)</label>
                        <input type="email" class="form-control" placeholder="admin@carlcorp.com"
                          v-model="form.email_notification"
                          :class="{ 'is-invalid': form.errors.has('email_notification') }" id="email_notification">
                        <has-error :form="form" field="email_notification"></has-error>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2">
                      <div class="form-group mb-3 ">
                        <label class="form-label" for="address">Address</label>
                        <textarea class="form-control" rows="3" placeholder="" v-model="form.address"
                          :class="{ 'is-invalid': form.errors.has('address') }" id="address"></textarea>
                        <has-error :form="form" field="address"></has-error>
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
      phone: '',
      email: '',
      address: '',
      email_notification: '',
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

            this.form.post(this.route('api.admin.settings.contact'))
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
    this.form.phone = window.config.config.contact.phone
    this.form.email = window.config.config.contact.email
    this.form.address = window.config.config.contact.address
    this.form.email_notification = window.config.config.email_notification


  },

}

</script>
