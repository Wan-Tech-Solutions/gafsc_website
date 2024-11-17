<template>
  <div>
    <button class="btn btn-primary" type="button" @click="getUsers()">Load users over api</button>

    <pre>
       {{ users }}
    </pre>

  </div>
</template>

<script>
  import Form from 'vform'


  export default {
    data: () => ({
      users: '',
      form: new Form({
        email: '',
        password: '',
      })
    }),
    methods: {
      async login() {
        const response = await this.form.post('/api/auth/token')
        // ...
      },
      getUsers() {
        axios.get(this.route('users.index'))
          .then(response => {

            this.users = response.data

             this.$toast.open('Howdy!');

          })
          .catch(error => {
          //   console.log(error)
          //    this.$toast.error(error.response.statusText, error.response.status);
          //   this.$toast.error('Welcome!', 'Hey');
          });

      }

    },
    mounted() {
      // console.log(this)
      // this.$toast.open('Howdy!');
      // this.toast.open('Howdy!');


      console.log('Component mounted.')
    },

  }

</script>
