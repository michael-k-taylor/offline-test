<template>
    <div class="card card-default">
        <div class="card-header">Insert</div>
        <div class="card-body col-sm-12">
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Name" v-model="name"/>
            </div>
            <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Email" v-model="email"/>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-secondary" v-on:click="submit_form" value="Submit"/>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                name: '',
                email: ''
            };
        },
        mounted() {
        },
        methods: {
            submit_form: function () {
                window.db.entries.add({
                    name: this.name,
                    email: this.email
                }).then(function(){
                    window.events.$emit('get-entries');
                }).catch(function (err) {
                    console.log(err);
                });
            }
        }
    }
</script>
