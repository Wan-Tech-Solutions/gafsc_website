<template>
  <div>

    <h5 class="card-title mb-3">Personal Info</h5>

    <form @submit.prevent="submit" ref="formContainer" class="gy-3 form-settings vld-parent"
      @keydown="form.onKeydown($event)">

      <div class="row  mb-3 ">
        <div class="col-lg-2">
          <div class="form-group"><label class="form-label" for="name">Name</label>
            <!-- <span class="form-note">Specify the name of your hotel.</span> -->
          </div>
        </div>
        <div class="col-lg-10">
          <div class="form-group">
            <div class="form-control-wrap">
              <input type="text" class="form-control form-control-sm" placeholder="" v-model="form.name"
                :class="{ 'is-invalid': form.errors.has('name') }" id="name">
              <has-error :form="form" field="name"></has-error>
            </div>
          </div>
        </div>
      </div>

      <div class="row  mb-3 ">
        <div class="col-lg-2">
          <div class="form-group"><label class="form-label" for="email">Email</label>
            <!-- <span class="form-note">Specify the email of your hotel.</span> -->
          </div>
        </div>
        <div class="col-lg-10">
          <div class="form-group">
            <div class="form-control-wrap">
              <input type="text" class="form-control form-control-sm" placeholder="" v-model="form.email"
                :class="{ 'is-invalid': form.errors.has('email') }" id="email">
              <has-error :form="form" field="email"></has-error>
            </div>
          </div>
        </div>
      </div>


      <div class="row  mb-3 ">
        <div class="col-lg-2"></div>
        <div class="col-lg-10">
          <div class="form-group">
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
    user: '',
    countries: '',

    form: new Form({
      name: '',
      email: '',
    })
  }),
  methods: {
    submit() {

      let loader = this.$loading.show({
        container: this.$refs.formContainer,
      });

      this.form.post(this.route('api.admin.profile.personal-info'))
        .then(({
          data
        }) => {
          loader.hide()
          this.$toast.open('Operation Successful');

          // this.form = data.data

        })
        .catch((error) => {
          loader.hide()
        });
    },

    getProfile() {
      axios.get(this.route("api.admin.profile.user"))
        .then(response => {

          this.form.name = response.data.data.name
          this.form.email = response.data.data.email
          this.form.user_id = response.data.data.user_id





          this.user = response.data.data

        })
        .catch(error => {

        });


    },
  },
  created() {
    this.getProfile()
  },

}

</script>
