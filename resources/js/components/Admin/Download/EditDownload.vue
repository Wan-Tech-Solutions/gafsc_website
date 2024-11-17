<template>
  <div>
    <form @submit.prevent="submit" ref="formContainer" class="gy-3 form-settings vld-parent"
      @keydown="form.onKeydown($event)">
      <div class="card text-left">
        <div class="card-body">

          <div class="row">
            <div class="col-md-12">
              <div class="form-group mb-3 ">
                <label class="form-label" for="title">Title</label>
                <input type="text" class="form-control" placeholder="" v-model="form.title"
                  :class="{ 'is-invalid': form.errors.has('title') }" id="title">
                <has-error :form="form" field="title"></has-error>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group mb-3">
                <label class="form-label" for="sub_title">Sub Title</label>
                <input type="text" class="form-control" placeholder="" v-model="form.sub_title"
                  :class="{ 'is-invalid': form.errors.has('sub_title') }" id="sub_title">
                <has-error :form="form" field="sub_title"></has-error>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group mb-3 ">
                <label class="form-label" for="order_of_appearance">Order Of Appearance</label>
                <input type="number" class="form-control" placeholder="" v-model="form.order_of_appearance"
                  :class="{ 'is-invalid': form.errors.has('order_of_appearance') }" id="order_of_appearance">
                <has-error :form="form" field="order_of_appearance"></has-error>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group mb-3 ">
                <label class="form-label" for="status">Status</label>
                <select class="form-control" placeholder="" v-model="form.status"
                  :class="{ 'is-invalid': form.errors.has('status') }">
                  <option value="0">Hide</option>
                  <option value="1">Show</option>
                </select>
                <has-error :form="form" field="status"></has-error>
              </div>
            </div>



            <div class="col-md-12">
              <div class="form-group mb-3 ">
                <label class="form-label" for="">Upload Banner</label>
                <VueFileAgent :uploadUrl="this.route('api.admin.upload.banner') + '?banner=' + banner.id" :theme="'list'"
                  :accept="'image/*,'" :maxSize="'50MB'" :multiple="false" :uploadHeaders="uploadHeaders"
                  :helpText="'Click or drop file here to upload'" :errorText="{
                    type: 'Invalid file type. Only images',
                    size: 'Files should not exceed 50MB in size',
                  }" v-model="banners" @upload="onUpload($event)"></VueFileAgent>
                <has-error :form="form" field="banner"></has-error>
              </div>
            </div>

          </div>

          <a class="btn btn-primary" :href="route('admin.banner.index')"> Back</a>

          <Button :form="form" class="btn btn-primary float-end">
            Save
          </Button>

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
    AlertError,
  },
  data: () => ({
    banner: '',
    banner: [],

    uploadHeaders: {
      "X-CSRF-TOKEN": document.head.querySelector("[name=csrf-token]").content
    },

    form: new Form({
      title: '',
      sub_title: '',
      banner: '',
      order_of_appearance: 1,
      status: 1,
    }),

  }),
  methods: {
    submit() {

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

            this.$modal.hide('dialog')
            let loader = this.$loading.show({
              container: this.$refs.formContainer,
            });

            this.form.patch(this.route('api.admin.banner.update', this.banner.uuid))
              .then(({
                data
              }) => {

                loader.hide()
                this.$toast.open('Saved');

              })
              .catch((error) => {
                loader.hide()
              });

          }
        },

        ]
      })

    },
    onUpload(responses) {
      this.form.banner = responses[0].data.media
    },
  },
  created() {
    this.banner = window.app.banner
    var data = window.app.banner
    this.form.title = data.title
    this.form.sub_title = data.sub_title
    this.form.order_of_appearance = data.order_of_appearance
    this.form.status = data.status
  },
  mounted() {

  }

}
</script>
