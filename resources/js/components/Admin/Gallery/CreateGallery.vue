<template>
  <div>
    <form @submit.prevent="submit" ref="formContainer" class="gy-3 form-settings vld-parent"
      @keydown="form.onKeydown($event)">
      <div class="card text-left">
        <div class="card-body">

          <div class="row">
            <div class="col-md-12">
              <div class="form-group mb-3 ">
                <label class="form-label" for="group">Group</label>
                <input type="text" class="form-control" placeholder="" v-model="form.group"
                  :class="{ 'is-invalid': form.errors.has('group') }" id="group">
                <has-error :form="form" field="group"></has-error>
              </div>
            </div>

            <div class="col-md-12" v-if="form.group != ''">
              <div class="form-group mb-3 ">
                <label class="form-label" for="">Upload Images</label>
                <vue-dropzone ref="myVueDropzone" v-on:vdropzone-sending="sendingEvent" @vdropzone-success="fileUploaded"
                  id="dropzone" :options="dropzoneOptions"></vue-dropzone>
                <has-error :form="form" field="image"></has-error>
              </div>
            </div>

          </div>


          <a class="btn btn-primary" :href="route('admin.gallery.index')"> Back</a>

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

import vue2Dropzone from 'vue2-dropzone'
import 'vue2-dropzone/dist/vue2Dropzone.min.css'

export default {
  components: {
    Button,
    HasError,
    AlertError,
    vueDropzone: vue2Dropzone
  },
  data: () => ({
    dropzoneOptions: {
      url: '/api/v1.0/admin/gallery-upload',
      thumbnailWidth: 150,
      maxFilesize: 5,
      headers: {
        "X-CSRF-TOKEN": document.head.querySelector("[name=csrf-token]").content
      }
    },

    form: new Form({
      group: '',
      image: '',
    }),

  }),
  methods: {
    submit() {

      let loader = this.$loading.show({
        container: this.$refs.formContainer,
      });

      this.form.post(this.route('api.admin.gallery.store'))
        .then(({
          data
        }) => {
          // this.form.reset()
          // this.form.clear()

          loader.hide()
          this.$toast.open('Saved');

          this.images = []

        })
        .catch((error) => {
          loader.hide()
        });

    },
    fileUploaded(file, response) {
      this.$toast.open('Success');
      // this.$refs.myVueDropzone.removeAllFiles()
    },
    sendingEvent(file, xhr, formData) {
      formData.append('group', this.form.group);
    }
  },
  created() {
  },
  mounted() {


  }

}

</script>
