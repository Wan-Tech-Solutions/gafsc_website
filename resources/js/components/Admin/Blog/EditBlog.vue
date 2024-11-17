<template>
  <div>
    <form @submit.prevent="submit" ref="formContainer" class="gy-3 form-settings vld-parent"
      @keydown="form.onKeydown($event)">
      <div class="card text-left">
        <div class="card-body">

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
              <label class="form-label" for="content">Content</label>
              <Editor api-key="n8i4irbhq9tzz05wr1bfdap2fzlyngcg58tj1oxm2fsdrcak" :init="myInit" v-model="form.content" />
              <has-error :form="form" field="content"></has-error>
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group mb-3 ">
              <label class="form-label" for="">Upload Image</label>
              <VueFileAgent :uploadUrl="this.route('api.admin.upload.blog') + '?image=' + blog.id" :theme="'list'"
                :accept="'image/*,'" :maxSize="'10MB'" :multiple="false" :uploadHeaders="uploadHeaders"
                :helpText="'Click or drop file here to upload'" :errorText="{
                  type: 'Invalid file type. Only images',
                  size: 'Files should not exceed 10MB in size',
                }" v-model="images" @upload="onUpload($event)"></VueFileAgent>
              <has-error :form="form" field="image"></has-error>
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

          <a class="btn btn-primary" :href="route('admin.blog.index')"> Back</a>
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
    Editor
  },
  data: () => ({
    blog: '',
    images: [],

    uploadHeaders: {
      "X-CSRF-TOKEN": document.head.querySelector("[name=csrf-token]").content
    },

    form: new Form({
      title: '',
      published_by: 'Admin',
      image: '',
      content: '',
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

            this.form.patch(this.route('api.admin.blog.update', this.blog.uuid))
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
    this.blog = window.app.blog
    var data = window.app.blog
    this.form.title = data.title
    this.form.content = data.content
    this.form.published_by = data.published_by
    this.form.status = data.status
  },
  mounted() {

  }

}
</script>
