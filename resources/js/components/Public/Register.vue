<template>
  <div>

    <ul class="nav nav-tabs nav-justified nav-border-top nav-border-top-primary mb-3" role="tablist">

      <li class="nav-item" role="presentation">
        <a class="nav-link " :class="form.account_type == 'user' ? 'btn btn-primary btn-block' : ''"
          @click="setForm('user')" data-bs-toggle="tab" href="ui-tabs.html#nav-border-justified-home" role="tab"
          aria-selected="true">
          <i class="ri-user-line align-middle me-1"></i> INDIVIDUAL
        </a>
      </li>

      <li class="nav-item" role="presentation">
        <a class="nav-link " :class="form.account_type == 'business' ? 'btn btn-primary btn-block' : ''"
          @click="setForm('business')" data-bs-toggle="tab" href="ui-tabs.html#nav-border-justified-profile" role="tab"
          aria-selected="false" tabindex="-1">
          <i class="ri-home-line  me-1 align-middle"></i> BUSINESS
        </a>
      </li>





    </ul>




    <div class="nk-block">
      <form @submit.prevent="submit" ref="formContainer" class="gy-3 form-settings vld-parent"
        @keydown="form.onKeydown($event)">


        <div v-if="form.account_type != ''">
          <div class="form-group mb-3" v-if="form.account_type == 'business'">
            <!-- <div class="form-label-group">
              <label class="form-label" for="business_name">Business Name
              </label></div> -->
            <div class="form-control-wrap"><input type="text" v-model="form.business_name" class="form-control "
                :class="{ 'is-invalid': form.errors.has('business_name') }" :required="form.account_type == 'business'"
                placeholder="eg. Business Name">
              <has-error :form="form" field="business_name"></has-error>
            </div>
          </div>



          <div class="form-group mb-3" v-if="form.account_type == 'user'">
            <!-- <div class="form-label-group"><label class="form-label" for="first_name">First Name
              </label></div> -->
            <div class="form-control-wrap"><input type="text" name="first_name" class="form-control "
                :class="{ 'is-invalid': form.errors.has('first_name') }" id="first_name" v-model="form.first_name"
                required autocomplete="first_name" autofocus placeholder="First Name">
              <has-error :form="form" field="first_name"></has-error>

            </div>

          </div>

          <div class="form-group mb-3" v-if="form.account_type == 'user'">
            <!-- <div class="form-label-group"><label class="form-label" for="other_names">Other Names
              </label></div> -->
            <div class="form-control-wrap"><input type="text" name="other_names" class="form-control "
                :class="{ 'is-invalid': form.errors.has('other_names') }" id="other_names" v-model="form.other_names"
                required autocomplete="other_names" autofocus placeholder="Other Names">
              <has-error :form="form" field="other_names"></has-error>

            </div>

          </div>

          <div class="form-group mb-3">
            <!-- <div class="form-label-group">
              <label class="form-label" v-if="form.account_type == 'business' " for="email">Business Email</label>
              <label class="form-label" v-else for="email">Email</label>
            </div> -->
            <div class="form-control-wrap"><input type="text" name="email" class="form-control "
                :class="{ 'is-invalid': form.errors.has('email') }" id="email" v-model="form.email" required
                autocomplete="email" autofocus
                :placeholder="form.account_type == 'business' ? 'Business email' : 'Personal email'">
              <has-error :form="form" field="email"></has-error>
            </div>
          </div>

          <div class="row no-gutters">
            <div class="col-md-3">
              <div class="form-group mb-3">
                <!-- <div class="form-label-group">
                  <label class="form-label" for="country">Country</label>
                </div> -->
                <div class="form-control-wrap">
                  <select name="" id="" type="text" class="form-control " required placeholder="" v-model="form.country"
                    :class="{ 'is-invalid': form.errors.has('country') }">
                    <option value="">Country..</option>
                    <option v-for="(country, index) in countries" :key="index" :value="index">{{ index }} -
                      {{ country }}</option>
                  </select>
                  <has-error :form="form" field="country"></has-error>
                </div>
              </div>
            </div>

            <div class="col-md-9">
              <div class="form-group mb-3">

                <div class="form-control-wrap"><input type="text" name="phone" class="form-control "
                    :class="{ 'is-invalid': form.errors.has('phone') }" id="phone" v-model="form.phone" required
                    autocomplete="phone" autofocus placeholder="Active phone number">
                  <has-error :form="form" field="phone"></has-error>
                </div>
              </div>
            </div>
          </div>


          <div class="form-group mb-3" v-if="form.account_type == 'user'">
            <div class="form-control-wrap">
              <VueFileAgent :uploadUrl="this.route('upload')" :theme="'list'" :accept="'image/*,'" :maxSize="'2MB'"
                :multiple="false" :uploadHeaders="uploadHeaders" :helpText="'Upload a recognized ID card '" :errorText="{
                  type: 'Invalid file type. Only images',
                  size: 'Files should not exceed 10MB in size',
                }" v-model="fileRecords" @upload="onUpload($event)"></VueFileAgent>
              <has-error :form="form" field="identity"></has-error>
              <input type="hidden" name="identity" class="form-control "
                :class="{ 'is-invalid': form.errors.has('identity') }" id="identity" v-model="form.identity" required
                autocomplete="identity">

            </div>
          </div>

          <div class="form-group mb-3">

            <div class="form-control-wrap">
              <div class="input-group">
                <input :type="showPassword == 0 ? 'password' : 'text'" class="form-control  "
                  :class="{ 'is-invalid': form.errors.has('password') }" id="password" v-model="form.password" required
                  name="password" placeholder="Enter your Password">


                <div class="input-group-append">
                  <button class="btn btn-default btn-block w-100 d-grid " @click="togglePassword" type="button"><i
                      class="fa my-1" :class="showPassword == 0 ? 'fa-eye' : 'fa-eye-low-vision'"
                      ref="togglePassword"></i></button>
                </div>
              </div>

              <password-meter :password="form.password" @score="onScore" />
              <small class="text-muted">Use 8 or more characters with a mix of letters, numbers & symbols</small>
            </div>

          </div>

          <div class="form-group mb-3">
            <div class="form-control-wrap">
              <input :type="showPassword == 0 ? 'password' : 'text'" class="form-control  "
                :class="{ 'is-invalid': form.errors.has('password_confirmation') }" id="password_confirmation"
                v-model="form.password_confirmation" required name="password_confirmation"
                placeholder="Confirm your Password">
              <has-error :form="form" field="password"></has-error>
            </div>
          </div>

          <div class="form-group">
            <button class="btn btn-primary btn-block w-100 d-grid">
              Sign Up
            </button>
          </div>

        </div>



      </form>
    </div>

    <hr>


  </div>
</template>

<script>
import Form from 'vform'
import {
  Button,
  HasError,
  AlertError
} from 'vform/src/components/bootstrap5'

import passwordMeter from "vue-simple-password-meter";


export default {
  components: {
    passwordMeter,
    Button,
    HasError,
    AlertError
  },
  data: () => ({
    countries: '',
    fileRecords: [],
    uploadHeaders: {
      "X-CSRF-TOKEN": document.head.querySelector("[name=csrf-token]").content
    },
    showPassword: 0,
    form: new Form({
      account_type: 'user',
      first_name: '',
      other_names: '',
      email: '',
      password: '',
      password_confirmation: '',
      business_name: '',
      ref: '',
      country: '',
      identity: '',
    })
  }),
  methods: {
    submit() {


      let loader = this.$loading.show({
        container: this.$refs.formContainer,
      });

      this.$modal.hide('dialog')

      this.form.post(this.route('sign-up'))
        .then(({
          data
        }) => {

          window.location.href = data.redirect;
          loader.hide()

        })
        .catch((error) => {
          loader.hide()
        });
    },
    onScore({
      score,
      strength
    }) {
      this.strength = strength; // one of : 'risky', 'guessable', 'weak', 'safe' , 'secure'
      this.score = score;
    },
    setForm(account_type) {
      this.form.account_type = account_type
    },
    getCountries() {
      axios.get(this.route("api.countries"))
        .then(response => {
          this.countries = response.data
        })
        .catch(error => {

        });


    },
    onUpload(responses) {
      this.form.identity = responses[0].data

    },

    togglePassword() {
      this.showPassword = !this.showPassword
    }



  },
  created() {
    this.getCountries()
    this.form.ref = window.carlcorp.ref



  },

}


// $(".toggle-password").click(function () {
//   alert()
//   $(this).toggleClass("fa-eye fa-eye-low-vision");
//   var input = $('#password');
//   if (input.attr("type") == "password") {
//     input.attr("type", "text");
//   } else {
//     input.attr("type", "password");
//   }
// });


</script>


<style>
.po-password-strength-bar {
  border-radius: 2px;
  transition: all 0.2s linear;
  height: 5px;
  margin-top: 8px;
}

.po-password-strength-bar.risky {
  background-color: #df0e1c;
  width: 10%;
}

.po-password-strength-bar.guessable {
  background-color: #ee741c;
  width: 32.5%;
}

.po-password-strength-bar.weak {
  background-color: #dcb533;
  width: 55%;
}

.po-password-strength-bar.safe {
  background-color: #a9df35;
  width: 100%;
}

.po-password-strength-bar.secure {
  background-color: #07bb3d;
  width: 100%;
}
</style>
