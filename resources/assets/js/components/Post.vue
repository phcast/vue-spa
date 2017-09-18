<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ post.title }}</div>

                    <div class="panel-body">
                        <div class="bs-collout bs-collout-danger">
                            <p>{{ post.body }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                post: {}
            }
        },
        mounted() {
            //console.log(this.$router);
            axios.get('/api/posts/'+this.$route.params.id).then(response => {

                this.post = response.data;
            });
        }
    }
</script>
