<template>
  <div>
    <div class="card text-left">
      <div class="card-body">

        <div class="table-responsive">

          <table class="table table-sm  table-striped" data-auto-responsive="true">

            <button id="refresh_table" style="display:none" ref="refresh_table">refresh table</button>
            <thead>
              <tr>
                <th style="width:1%">#</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>ID</th>
                <th>Country</th>
                <th>Referred By</th>
                <th>Downlines</th>
                <th>Investment Status</th>
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

export default {
  components: {
    Button,
    HasError,
    AlertError,
  },

  data: function () {
    return {
      referrer_link: this.route('register'),
      form: new Form({
        // name: '',
      }),
    }
  },


  methods: {
    submit() {

    },

    makeDatatable() {
      var this_component = this;

      $(document).ready(function () {
        var table = $('.table').DataTable({
          ajax: this_component.route('api.admin.accounts.pending-users-datatable'),
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
            data: 'full_name',
            name: 'first_name',
          },
          {
            data: 'email',
            name: 'email'
          },
          {
            data: 'identity',
            name: 'identity',
            className: "text-center",
            searchable: false,
            sortable: false,
            orderable: false,
          },
          {
            data: 'country',
            name: 'country'
          },
          {
            data: 'referrer',
            name: 'referred_by'
          },
          {
            data: 'downlines_count',
            name: 'referred_by'
          },
          {
            data: 'investment',
            name: 'investment',
            className: "text-center",
            searchable: false,
            sortable: false,
            orderable: false,
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


        $('.table tbody').on('click', '.btn-approve', function () {

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
                this_component.$modal.hide('dialog')

                axios.post($(this).data('href'))
                  .then(response => {


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

      });

    },

    doCopy(referrer_link) {

      var this_component = this;
      this.$copyText(referrer_link).then(function (e) {
        this_component.$toast.open('Coppied to clipboard');
      }, function (e) {
        console.log(e)
      })
    }

  },
  created() {
    // this.referrer_link = window.data.referral_link

    // console.log(window.data)

    this.makeDatatable()

  },

}

</script>
