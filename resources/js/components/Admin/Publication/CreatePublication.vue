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
              <div class="form-group mb-3 ">
                <label class="form-label" for="type">Type</label>
                <select class="form-control" placeholder="" v-model="form.type"
                  :class="{ 'is-invalid': form.errors.has('type') }" id="type">
                  <option value="">Select...</option>
                  <option value="ARTICLE">ARTICLE</option>
                  <option value="PUBLICATION">PUBLICATION</option>
                </select>

                <has-error :form="form" field="type"></has-error>
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group mb-3 ">
                <label class="form-label" for="content">Content</label>
                <Editor api-key="n8i4irbhq9tzz05wr1bfdap2fzlyngcg58tj1oxm2fsdrcak" :init="myInit"
                  v-model="form.content" />
                <has-error :form="form" field="content"></has-error>
              </div>
            </div>

            <div class="col-md-12">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group mb-3 ">
                    <label class="form-label" for="published_by">Published By</label>
                    <input type="text" class="form-control" placeholder="" v-model="form.published_by"
                      :class="{ 'is-invalid': form.errors.has('published_by') }" id="published_by">
                    <has-error :form="form" field="published_by"></has-error>
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
              </div>
            </div>

          </div>


          <a class="btn btn-primary" :href="route('admin.publication.index')"> Back</a>
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

import Editor from '@tinymce/tinymce-vue'

export default {
  components: {
    Button,
    HasError,
    AlertError,
    Editor,
  },
  data: () => ({
    form: new Form({
      title: '',
      content: '',
      type: '',
      published_by: '',
      status: 1,
    }),
    myInit: {
      // a11y_advanced_options: true,
      plugins: 'lists link image table code help wordcount autoresize',
      toolbar: 'bullist numlist',
      min_height: 500,
      max_height: 600,
      file_picker_types: 'image',
      image_title: false,
      automatic_uploads: true,
      images_upload_url: '/api/v1.0/admin/image-upload',
      file_picker_callback: (cb, value, meta) => {

        var input = document.createElement('input');
        input.setAttribute('type', 'file');
        input.setAttribute('accept', 'image/*');
        input.onchange = function () {
          var file = this.files[0];

          var reader = new FileReader();
          reader.readAsDataURL(file);
          reader.onload = function () {
            var id = 'blobid' + (new Date()).getTime();
            var blobCache = tinymce.activeEditor.editorUpload.blobCache;
            var base64 = reader.result.split(',')[1];
            var blobInfo = blobCache.create(id, file, base64);
            blobCache.add(blobInfo);
            cb(blobInfo.blobUri(), {
              title: file.name
            });
          };
        };
        input.click();
      },
      // image_list: images
    },

  }),
  methods: {
    submit() {

      let loader = this.$loading.show({
        container: this.$refs.formContainer,
      });

      this.form.post(this.route('api.admin.publication.store'))
        .then(({
          data
        }) => {
          this.form.reset()
          this.form.clear()

          loader.hide()
          this.$toast.open('Saved');
        })
        .catch((error) => {
          loader.hide()
        });

    },
  },
  created() {
  },
  mounted() {


  }

}

</script>
