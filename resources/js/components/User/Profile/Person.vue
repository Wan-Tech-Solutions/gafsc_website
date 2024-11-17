<template>
  <div>

    <h5 class="card-title mb-3">Personal Info</h5>

    <form @submit.prevent="submit" ref="formContainer" class="gy-3 form-settings vld-parent"
          @keydown="form.onKeydown($event)">
          <div class="row  mb-3 ">
            <div class="col-lg-2">
              <div class="form-group"><label class="form-label" for="prefix">Prefix</label>
              </div>
            </div>
            <div class="col-lg-10">
              <div class="form-group">
                <div class="form-control-wrap">
                  <select name="" id="" type="text" class="form-control form-control-sm" placeholder="" v-model="form.prefix"
                    :class="{ 'is-invalid': form.errors.has('prefix') }">
                    <option value="">Select..</option>
                    <option value="Dr.">Dr.</option>
                    <option value="Hon.">Hon.</option>
                    <option value="Mr.">Mr.</option>
                    <option value="Mrs.">Mrs.</option>
                    <option value="Ms.">Ms.</option>
                    <option value="Prof.">Prof.</option>
                    <option value="Rev.">Rev.</option>
                  </select>
                  <has-error :form="form" field="prefix"></has-error>
                </div>
              </div>
            </div>
          </div>


          <div class="row  mb-3 ">
            <div class="col-lg-2">
              <div class="form-group"><label class="form-label" for="first_name">First Name</label>
                <!-- <span class="form-note">Specify the first_name of your hotel.</span> -->
              </div>
            </div>
            <div class="col-lg-10">
              <div class="form-group">
                <div class="form-control-wrap">
                  <input type="text" class="form-control form-control-sm" placeholder="" v-model="form.first_name"
                    :class="{ 'is-invalid': form.errors.has('first_name') }" id="first_name">
                  <has-error :form="form" field="first_name"></has-error>
                </div>
              </div>
            </div>
          </div>

          <div class="row  mb-3 ">
            <div class="col-lg-2">
              <div class="form-group"><label class="form-label" for="other_names">Other Names</label>
                <!-- <span class="form-note">Specify the other_names of your hotel.</span> -->
              </div>
            </div>
            <div class="col-lg-10">
              <div class="form-group">
                <div class="form-control-wrap">
                  <input type="text" class="form-control form-control-sm" placeholder="" v-model="form.other_names"
                    :class="{ 'is-invalid': form.errors.has('other_names') }" id="other_names">
                  <has-error :form="form" field="other_names"></has-error>
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
                  <input type="text" disabled class="form-control form-control-sm" placeholder="" :value="form.email"
                    :class="{ 'is-invalid': form.errors.has('email') }" id="email">
                  <has-error :form="form" field="email"></has-error>
                </div>
              </div>
            </div>
          </div>

          <div class="row  mb-3 ">
            <div class="col-lg-2">
              <div class="form-group"><label class="form-label" for="phone">Country</label>
                <!-- <span class="form-note">Specify the phone of your hotel.</span> -->
              </div>
            </div>
            <div class="col-lg-10">
              <div class="form-group">
                <div class="form-control-wrap">
                  <select name="" id="" type="text" class="form-control form-control-sm" placeholder="" v-model="form.country"
                    :class="{ 'is-invalid': form.errors.has('country') }">
                    <option value="">Select..</option>
                    <option v-for="(country,index) in countries" :key="index" :value="index">{{ index }} -
                      {{ country }}</option>
                  </select>
                  <has-error :form="form" field="country"></has-error>
                </div>
              </div>
            </div>
          </div>

          <div class="row  mb-3 ">
            <div class="col-lg-2">
              <div class="form-group"><label class="form-label" for="phone">Phone</label>
                <!-- <span class="form-note">Specify the phone of your hotel.</span> -->
              </div>
            </div>
            <div class="col-lg-10">
              <div class="form-group">
                <div class="form-control-wrap">
                  <input type="text" class="form-control form-control-sm" placeholder="" v-model="form.phone"
                    :class="{ 'is-invalid': form.errors.has('phone') }" id="phone">
                  <has-error :form="form" field="phone"></has-error>
                </div>
              </div>
            </div>
          </div>

          <div class="row  mb-3 ">
            <div class="col-lg-2">
              <div class="form-group"><label class="form-label" for="address">Address</label>
                <!-- <span class="form-note">Specify the address of your hotel.</span> -->
              </div>
            </div>
            <div class="col-lg-10">
              <div class="form-group">
                <div class="form-control-wrap">
                  <textarea class="form-control form-control-sm" placeholder="" rows="3" v-model="form.address"
                    :class="{ 'is-invalid': form.errors.has('address') }" id="address"></textarea>
                  <has-error :form="form" field="address"></has-error>
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
        prefix: '',
        first_name: '',
        other_names: '',
        phone: '',
        country: '',
        address:'',
      })
    }),
    methods: {
      submit() {

        let loader = this.$loading.show({
          container: this.$refs.formContainer,
        });

        this.form.post(this.route('api.app.profile.personal-info'))
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
        axios.get(this.route("api.app.profile.user"))
          .then(response => {

            this.form.name = response.data.data.name
            this.form.email = response.data.data.email
            this.form.prefix = response.data.data.prefix
            this.form.first_name = response.data.data.first_name
            this.form.other_names = response.data.data.other_names
            this.form.phone = response.data.data.phone
            this.form.user_id = response.data.data.user_id
            this.form.dob = response.data.data.dob
            this.form.country = response.data.data.country
            this.form.address = response.data.data.address




            this.user = response.data.data

          })
          .catch(error => {

          });


      },

      getCountries() {
        axios.get(this.route("api.countries"))
          .then(response => {
            this.countries = response.data
          })
          .catch(error => {

          });


      },


    },
    created() {
      this.getProfile()
      this.getCountries()
    },

  }

</script>
