<script>
   import {Errors} from '../utils/Errors.js';
    export default {
       
        data() {
            return {
               name: '',
               description: '',
               errors: new Errors()
                
            }
        },

        methods: {
        	onSubmit() {
        		axios.post('/projects', {
        			name: this.name,
        			description: this.description
        		})
				  .then(this.onSuccess)
				  .catch(this.onError);
        	},

        	onSuccess(response) {
        		alert('Form submitted successfully');

        		this.name = '';
        		this.description = '';
        	},

        	onError(error) {
        		this.errors.record(error.response.data);
        	}
        }
       
    }
</script>