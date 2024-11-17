<template>
  <div>
    <div class="card text-left">
      <div class="card-header align-items-center d-flex">
        <span class="card-title mb-0 flex-grow-1">Users</span>
        <div class="flex-shrink-0">
          <a :href="route('admin.accounts.create')" type="button" class="btn btn-soft-primary btn-sm">
            New User
          </a>
        </div>
      </div>

      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-sm referral-table table-striped" data-auto-responsive="true">

            <button id="refresh_table" style="display:none" ref="refresh_table">refresh table</button>
            <thead>
              <tr>
                <th style="width:1%">#</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>&nbsp;</th>
              </tr>
            </thead>
          </table>
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

import Editor from '@tinymce/tinymce-vue'

export default {
  components: {
    Button,
    HasError,
    AlertError,
    Editor
  },

  data: function () {
    return {
      downlines: '',
      templates: '',
      template: '',

      referrer_link: this.route('register'),
      form: new Form({
        // name: '',
      }),
      mailForm: new Form({
        to: '',
        content: '',
        subject: '',
      })
    }
  },


  methods: {


    makeDatatable() {
      var this_component = this;

      $(document).ready(function () {
        var table = $('.referral-table').DataTable({
          ajax: this_component.route('api.admin.accounts.users-datatable'),
          serverSide: true,
          columns: [{
            data: 'id',
            searchable: false,
            sortable: false,
            orderable: false,
            render: function (data, type, row, meta) {
              return meta.row + meta.settings._iDisplayStart + 1 + '.';
            }
          },
          {
            data: 'name',
            name: 'name',
          },
          {
            data: 'email',
            name: 'email'
          },
          {
            data: 'action',
            name: 'action',
            className: "text-center",
            searchable: false,
            sortable: false,
            orderable: false,
          },
          ],
          scrollY: 960,
          scrollCollapse: true,
          stateSave: true,
          pagingType: "full_numbers",
          processing: true,
          drawCallback: function () {
            $('.table tbody td').addClass("blurry");
            //   $('.table tbody').fadeIn(800);
            setTimeout(function () {
              $('.table tbody td').removeClass("blurry");
            }, 200);
          }

        });

        $('#refresh_table').on('click', function () {
          table.draw()
        })

        $('.table tbody').on('click', '.btn-delete', function () {

          this_component.$modal.show('dialog', {
            title: '<span class="dialog-popup" >Are you sure about this?</span>',
            buttons: [{
              title: 'No',
              handler: () => {
                this_component.$modal.hide('dialog')
              }
            },
            {
              title: 'Yes',
              handler: () => {

                axios.delete($(this).data('href'))
                  .then(response => {

                    this_component.$modal.hide('dialog')
                    this_component.$toast.open('Operation Successful');
                    $('#refresh_table').click()

                  })
                  .catch(error => {
                    this_component.$modal.hide('dialog')
                  });
              }
            },

            ]
          })

        })

        $('.table tbody').on('click', '.btn-block', function () {

          this_component.$modal.show('dialog', {
            title: '<span class="dialog-popup" >Are you sure about this?</span>',
            buttons: [{
              title: 'No',
              handler: () => {
                this_component.$modal.hide('dialog')
              }
            },
            {
              title: 'Yes',
              handler: () => {

                axios.delete($(this).data('href'))
                  .then(response => {

                    this_component.$modal.hide('dialog')
                    this_component.$toast.open('Operation Successful');
                    $('#refresh_table').click()

                  })
                  .catch(error => {
                    this_component.$modal.hide('dialog')
                  });
              }
            },

            ]
          })

        })


      });

    },

  },
  created() {

    this.makeDatatable()
  },

}

</script>
