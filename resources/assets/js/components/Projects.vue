<script>
 
   import Form from '../utils/Form.js';
    export default {
       
        data() {
            return {
              
              form: new Form({
                 name: '',
                 description: '',
              }),
                
            }
        },

         methods: {
            onSubmit() {
                this.form.submit('post', '/projects')
                .then(data=> alert('handling it'))
                .catch(errors =>{
                });
                
            },

        }
       
    }
</script>