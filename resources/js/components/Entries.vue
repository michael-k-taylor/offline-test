<template>
    <div class="card card-default" v-if="loaded">
        <div class="card-header">Entries</div>
        <div class="card-body col-sm-12">
            <div v-for="(entry, key) in this.entries">
                <p>
                    <b>Name: </b>{{ entry.name }}<br/>
                    <b>Email: </b>{{ entry.email }}<br/>
                </p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                entries: [],
                loaded: false
            };
        },
        async created() {
            await this.get_entries();
        },
        mounted() {
            window.events.$on('get-entries', this.get_entries);
        },
        methods: {
            get_entries: function () {
                var self = this;
                db.entries
                    .toArray()
                    .then(function (entries) {
                        self.entries = entries;
                    }).then(function (entries) {
                    self.loaded = true;
                });
            }
        }
    }
</script>
