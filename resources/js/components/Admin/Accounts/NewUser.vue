<template>
  <div>

    <div class="row">
      <div class="col-12">
        <div class="page-title-box">
          <h4 class="mb-sm-0">Users
          </h4>

        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">

        <div class="card">
          <div class="card-header">
            <div class="d-flex align-items-center">
              <div class="flex-grow-1">
                <h6 class="card-title mb-0">Create/Edit Account</h6>
              </div>
              <a :href="route('admin.accounts.index')" class="btn btn-sm btn-outline-primary">Back</a>
            </div>
          </div>

          <div class="card-body">
            <form @submit.prevent="submit" ref="formContainer" class="gy-3 form-settings vld-parent"
              @keydown="form.onKeydown($event)">
              <div class="row">
                <div class="col-md-5">
                  <div class="form-group mb-3">
                    <label class="form-label" for="name">Name</label>
                    <div class="form-control-wrap">
                      <input type="text" class="form-control" placeholder="" v-model="form.name"
                        :class="{ 'is-invalid': form.errors.has('name') }" id="name">
                      <has-error :form="form" field="name"></has-error>
                    </div>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="form-group mb-3">
                    <label class="form-label" for="email">Email</label>
                    <div class="form-control-wrap">
                      <input type="email" class="form-control" placeholder="" v-model="form.email"
                        :class="{ 'is-invalid': form.errors.has('email') }" id="email">
                      <has-error :form="form" field="email"></has-error>
                    </div>
                  </div>
                </div>


                <div class="col-md-4">
                  <div class="form-group mb-3">
                    <label class="form-label" for="password">Password</label>
                    <div class="form-control-wrap">
                      <input type="text" class="form-control" v-model="form.password"
                        :class="{ 'is-invalid': form.errors.has('password') }" id="password">
                      <has-error :form="form" field="password"></has-error>
                    </div>
                  </div>
                </div>


              </div>


              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <a class="btn btn-primary" :href="route('admin.accounts.index')">Back</a>
                    <Button :form="form" class="btn btn-primary float-end">
                      Save
                    </Button>
                  </div>

                </div>
              </div>
            </form>
          </div>
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

  data: function () {
    return {
      editing_data: '',
      form_data: '',

      form: new Form({
        name: '',
        email: '',
        password: ''
      }),
    }
  },


  methods: {
    submit() {

      if (this.editing_data == '') {

        this.form.post(this.route('api.admin.accounts.store'))
          .then(({
            data
          }) => {
            this.$toast.open('Operation Successful');
            this.form.reset()
            this.form.clear()
            this.editing_data = ''
          })
          .catch((error) => {
            loader.hide()
          });

      } else {

        this.$modal.show('dialog', {
          title: '<span class="dialog-popup" >Are you sure about this?</span>',
          buttons: [{
            title: 'No',
            handler: () => {
              this.$modal.hide('dialog')
            }
          },
          {
            title: 'Yes',
            handler: () => {

              this.form.patch(this.route('api.admin.accounts.update', this.editing_data.uuid))
                .then(({
                  data
                }) => {

                  this.$modal.hide('dialog')
                  this.$toast.open('Operation Successful');

                })
                .catch((error) => {
                  this.$modal.hide('dialog')
                });



            }
          },

          ]
        })
      }

    },
    getFormData() {
      axios.get(this.route("api.admin.accounts.accounts.form"))
        .then(response => {
          this.form_data = response.data
        })
        .catch(error => {

        });


    },

  },
  created() {
    if (this.route().params.user) {
      this.editing_data = window.app.user
      var user = window.app.user

      this.form.name = user.name
      this.form.phone = user.phone
      this.form.email = user.email


    } else {
      this.form.password = 'PASS1234'
    }
    this.getFormData()
  },

}

</script>
