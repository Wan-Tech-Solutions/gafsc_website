<template>
  <div>
    <div class="card text-left">
      <div class="card-header align-items-center d-flex">
        <span class="card-title mb-0 flex-grow-1">Downloads</span>
        <div class="flex-shrink-0">
          <a :href="route('admin.download.create')" type="button" class="btn btn-soft-primary btn-sm">
            New Download
          </a>
        </div>
      </div>

      <div class="card-body">

        <div class="table-responsive">

          <table class="table table-sm books-table table-striped" data-auto-responsive="true">

            <button id="refresh_table" style="display:none" ref="refresh_table">refresh table</button>
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Description</th>
                <th scope="col">...</th>
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

      form: new Form({
        // name: '',
      }),

    }
  },


  methods: {

    makeDatatable() {
      var this_component = this;
      $(document).ready(function () {
        var table = $('.books-table').DataTable({
          ajax: this_component.route('api.admin.download.index'),
          serverSide: true,
          columns: [
            {
              data: 'id',
              searchable: false,
              sortable: false,
              orderable: false,
              render: function (data, type, row, meta) {
                return meta.row + meta.settings._iDisplayStart + 1 + '.';
              }
            },

            {
              data: 'description',
              name: 'description',
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
          // stateSave: true,
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

      });

    },

  },
  created() {

    this.makeDatatable()
  },

}

</script>
