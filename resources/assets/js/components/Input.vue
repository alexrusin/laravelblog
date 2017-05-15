<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Input Component</div>

                    <div class="panel-body">
                   
                         <input type="text" id="input" v-model = "message">
                         <button class="btn btn-primary" v-on:click="addName" v-if="showInput">Submit</button> 
                         <div>
                         {{propData}}
                         {{message}}
                         </div>
                         <ul>
                             <li v-for="name in names">{{name}}</li>
                         </ul>
                         <!-- Trigger the modal with a button -->
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" v-if="displayButton">Delete Button</button>
                            <are-you-sure target-url="products" v-on:file-deleted="fileDeleted"></are-you-sure>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import AreYouSure from './AreYouSure.vue'
    export default {
        components: {
            AreYouSure,
          },
        data() {
            return {
                message: "",
                names:[],
                showInput: true,
                displayButton: true,
            }
        },
        props: ['propData'],
        methods: {
            addName() {
                this.names.push(this.message);
                this.message = "";
                console.log(this.names.length);
                if (this.names.length > 2) {
                    this.showInput = false;
                }
            },

            fileDeleted() {
                this.displayButton = false;
            }
        }

    }
</script>