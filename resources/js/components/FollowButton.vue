<template>
  <div>
    <a class="btn btn-secondary ml-4 mb-2" href="#" role="button" @click="followUser"><i class="fas fa-signature"></i> Follow</a>
  </div>
</template>

<script>
    export default {
        props: ['userId'],

        mounted() {
            console.log('Component mounted.')
        },

        methods: {
          followUser(){
            axios.post('/follow/' + this.userId)
              .then(response => {
                alert(response.data);
              });
          }
        }
    }
</script>
