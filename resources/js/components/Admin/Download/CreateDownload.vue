<template>
  <div>
    <form @submit.prevent="submit" ref="formContainer" class="gy-3 form-settings vld-parent"
      @keydown="form.onKeydown($event)">
      <div class="card text-left">
        <div class="card-body">

          <div class="row">
            <div class="col-md-12">
              <div class="form-group mb-3 ">
                <label class="form-label" for="description">Description</label>
                <input type="text" class="form-control" placeholder="" v-model="form.description"
                  :class="{ 'is-invalid': form.errors.has('description') }" id="description">
                <has-error :form="form" field="description"></has-error>
              </div>
            </div>


            <div class="col-md-12">
              <div class="form-group mb-3 ">
                <label class="form-label" for="">Upload File</label>
                <VueFileAgent :uploadUrl="this.route('api.admin.upload.download')" :theme="'list'"
                  :accept="'image/*,.pdf'" :maxSize="'50MB'" :multiple="false" :uploadHeaders="uploadHeaders"
                  :helpText="'Click or drop file here to upload'" :errorText="{
                    type: 'Invalid file type. Only images',
                    size: 'Files should not exceed 50MB in size',
                  }" v-model="files" @upload="onUpload($event)"></VueFileAgent>
                <has-error :form="form" field="download"></has-error>
              </div>
            </div>

          </div>


          <a class="btn btn-primary" :href="route('admin.download.index')"> Back</a>
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
    files: [],
    uploadHeaders: {
      "X-CSRF-TOKEN": document.head.querySelector("[name=csrf-token]").content
    },

    form: new Form({
      description: '',
      download: '',
    }),

  }),
  methods: {
    submit() {

      let loader = this.$loading.show({
        container: this.$refs.formContainer,
      });

      this.form.post(this.route('api.admin.download.store'))
        .then(({
          data
        }) => {
          this.form.reset()
          this.form.clear()

          loader.hide()
          this.$toast.open('Saved');

          this.files = []

        })
        .catch((error) => {
          loader.hide()
        });

    },


    onUpload(responses) {
      this.form.download = responses[0].data.media
    },
  },
  created() {
  },
  mounted() {


  }

}

</script>
