<template>
  <div>



    <div class="nk-block">
      <form @submit.prevent="submit" ref="formContainer" class="gy-3 form-settings vld-parent"
        @keydown="form.onKeydown($event)">

          <div class="form-group">
            <div class="form-label-group"><label class="form-label" for="email">Email
              </label></div>
            <div class="form-control-wrap"><input type="text" name="email" class="form-control form-control-lg"
                :class="{ 'is-invalid': form.errors.has('email') }" id="email" v-model="form.email" required
                autocomplete="email" autofocus placeholder="eg. john.doe@gmail.com">
                <has-error :form="form" field="email"></has-error>
            </div>
          </div>

          <div class="form-group">
            <div class="form-label-group"><label class="form-label" for="password">Password
              </label></div>

            <div class="form-control-wrap"><a :href="route('register')+'#'"
                class="form-icon form-icon-right passcode-switch lg" data-target="password"><em
                  class="passcode-icon icon-show icon ni ni-eye"></em><em
                  class="passcode-icon icon-hide icon ni ni-eye-off"></em></a>
              <input type="password" class="form-control form-control-lg "
                :class="{ 'is-invalid': form.errors.has('password') }" id="password" v-model="form.password" required
                name="password" placeholder="Enter your Password">

              <has-error :form="form" field="password"></has-error>
            </div>

          </div>

          <div class="form-group">
            <button class="btn btn-lg btn-primary btn-block">
              Sign In
            </button>
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


  export default {
    components: {
      Button,
      HasError,
      AlertError
    },
    data: () => ({

      form: new Form({
        email: '',
        password: '',
      })
    }),
    methods: {
      submit() {


        let loader = this.$loading.show({
          container: this.$refs.formContainer,
        });

        this.$modal.hide('dialog')

        this.form.post(this.route('sign-in'))
          .then(({
            data
          }) => {

            // window.location.href = data.redirect;
            // loader.hide()

          })
          .catch((error) => {
            // loader.hide()
          });
      },
      onScore({
        score,
        strength
      }) {
        this.strength = strength; // one of : 'risky', 'guessable', 'weak', 'safe' , 'secure'
        this.score = score;
      }

    },
    created() {

      // alert()
    },

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
