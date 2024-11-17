<template>
  <form @submit.prevent="submit" ref="formContainer" class="gy-3 form-settings vld-parent"
    @keydown="form.onKeydown($event)">
    <div class="card text-left">
      <div class="card-body">

        <div class="row">


          <div class="col-md-12">
            <div class="form-group mb-3 ">
              <label class="form-label" for="position">Position</label>
              <input type="text" class="form-control" placeholder="" v-model="form.position"
                :class="{ 'is-invalid': form.errors.has('position') }" id="position">
              <has-error :form="form" field="position"></has-error>
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group mb-3 ">
              <label class="form-label" for="description">Description</label>
              <Editor api-key="n8i4irbhq9tzz05wr1bfdap2fzlyngcg58tj1oxm2fsdrcak" :init="myInit"
                v-model="form.description" />
              <has-error :form="form" field="description"></has-error>
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group mb-3">
              <label class="form-label d-block" for="deadline">Deadline</label>
              <date-picker placeholder=" " :editable="false" input-class="form-control " v-model="form.deadline"
                valueType="format"></date-picker>
              <has-error :form="form" field="deadline"></has-error>
            </div>
          </div>


        </div>


        <a class="btn btn-primary" :href="route('admin.career.index')"> Back</a>
        <Button :form="form" class="btn btn-primary float-end">
          Save
        </Button>

      </div>
    </div>
  </form>
</template>

<script>
import Form from 'vform'
import {
  Button,
  HasError,
  AlertError
} from 'vform/src/components/bootstrap5'

import DatePicker from 'vue2-datepicker';
import 'vue2-datepicker/index.css';

import Editor from '@tinymce/tinymce-vue'

export default {
  components: {
    Button,
    HasError,
    AlertError,
    Editor,
  },
  data: () => ({
    career: '',

    form: new Form({
      category: '',
      answer: '',
      question: '',
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

            this.form.patch(this.route('api.admin.career.update', this.career.uuid))
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
  },
  created() {
    this.career = window.app.career
    var data = window.app.career
    this.form.position = data.position
    this.form.description = data.description
    this.form.deadline = data.deadline
  },
  mounted() {

  }

}
</script>

<style>
.mx-datepicker {
  width: 100%
}
</style>
