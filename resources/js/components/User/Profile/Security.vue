<template>
  <div>

    <form @submit.prevent="submit" ref="formContainer" class="gy-3 form-settings vld-parent"
      @keydown="form.onKeydown($event)">

      <div class="row  mb-3 mt-2">
        <div class="col-lg-2">
          <div class="form-group"><label class="form-label" for="current_password">Current Password </label>
            <!-- <span class="form-note">Specify the current_password of your hotel.</span> -->
          </div>
        </div>
        <div class="col-lg-10">
          <div class="form-group">
            <div class="form-control-wrap">
              <input type="password" class="form-control  form-control-sm" placeholder="" v-model="form.current_password"
                :class="{ 'is-invalid': form.errors.has('current_password') }" id="current_password">
              <has-error :form="form" field="current_password"></has-error>
            </div>
          </div>
        </div>
      </div>

      <div class="row  mb-3">
        <div class="col-lg-2">
          <div class="form-group"><label class="form-label" for="new_password">New Password </label>
            <!-- <span class="form-note">Specify the new_password of your hotel.</span> -->
          </div>
        </div>
        <div class="col-lg-10">
          <div class="form-group">
            <div class="form-control-wrap">
              <input type="password" class="form-control  form-control-sm" placeholder="" v-model="form.new_password"
                :class="{ 'is-invalid': form.errors.has('new_password') }" id="new_password">
              <has-error :form="form" field="new_password"></has-error>
            </div>
          </div>
        </div>
      </div>

      <div class="row  mb-3">
        <div class="col-lg-2">
          <div class="form-group"><label class="form-label" for="password_confirmation">Confirm Password </label>
            <!-- <span class="form-note">Specify the password_confirmation of your hotel.</span> -->
          </div>
        </div>
        <div class="col-lg-10">
          <div class="form-group">
            <div class="form-control-wrap">
              <input type="password" class="form-control  form-control-sm" placeholder=""
                v-model="form.password_confirmation" :class="{ 'is-invalid': form.errors.has('password_confirmation') }"
                id="password_confirmation">
              <has-error :form="form" field="password_confirmation"></has-error>
            </div>
          </div>
        </div>
      </div>



      <div class="row  mb-3">
        <div class="col-lg-2"></div>
        <div class="col-lg-10">
          <div class="form-group mt-2">
            <Button :form="form" class="btn btn-primary btn-sm">
              Save
            </Button>
          </div>

        </div>
      </div>
    </form>


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
    AlertError
  },
  data: () => ({
    form: new Form({
      roles: [],
      name: '',
      email: '',
    })
  }),
  methods: {
    submit() {

      this.$modal.show('dialog', {
        title: '<span class="dialog-popup text-center" >Are you sure?</span>',
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

            this.form.post(this.route('api.app.profile.password'))
              .then(({
                data
              }) => {
                loader.hide()
                this.$toast.open('Operation Successful');
                this.form.reset()
                this.form.clear()

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

  },

}

</script>
