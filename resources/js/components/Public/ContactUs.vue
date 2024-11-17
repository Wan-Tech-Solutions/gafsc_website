<template>
  <div>
    <div class="nk-block">
      <form @submit.prevent="submit" ref="formContainer" class="gy-3 form-settings vld-parent"
        @keydown="form.onKeydown($event)">

        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="form-group">
              <input type="text" :class="{ 'is-invalid': form.errors.has('name') }" v-model="form.name" name="name"
                id="name" class="form-control" required="" data-error="Please enter your name" placeholder="Name">
              <has-error :form="form" field="email"></has-error>
            </div>
          </div>

          <div class="col-lg-6 col-md-6">
            <div class="form-group">
              <input type="email" :class="{ 'is-invalid': form.errors.has('email') }" v-model="form.email" name="email"
                id="email" class="form-control" required="" data-error="Please enter your email" placeholder="Email">
              <has-error :form="form" field="email"></has-error>
            </div>
          </div>

          <div class="col-lg-6 col-md-6">
            <div class="form-group">
              <input type="text" name="phone_number" :class="{ 'is-invalid': form.errors.has('phone_number') }"
                v-model="form.phone_number" id="phone_number" required="" data-error="Please enter your number"
                class="form-control" placeholder="Phone">
              <has-error :form="form" field="email"></has-error>
            </div>
          </div>



          <div class="col-lg-12 col-md-12">
            <div class="form-group">
              <textarea name="message" :class="{ 'is-invalid': form.errors.has('message') }" v-model="form.message"
                class="form-control" id="message" cols="30" rows="6" required="" data-error="Write your message"
                placeholder="Your Message"></textarea>
              <has-error :form="form" field="email"></has-error>
            </div>
          </div>

          <div class="col-lg-12 col-md-12">
            <button class="btn btn-primary btn-block w-100 d-grid">
              Send
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

    form: new Form({
      name: '',
      email: '',
      phone_number: '',
      message: '',
    })
  }),
  methods: {
    submit() {


      let loader = this.$loading.show({
        container: this.$refs.formContainer,
      });

      this.$modal.hide('dialog')

      this.form.post(this.route('contact_us'))
        .then(({
          data
        }) => {

          this.$toast.open('Mail sent successfully');
          loader.hide()
          this.form.reset()
          this.form.clear()

        })
        .catch((error) => {
          loader.hide()
        });
    },

  },
  created() { },

}

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
