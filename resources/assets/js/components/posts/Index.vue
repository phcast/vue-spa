<template>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">文章列表</div>

                    <div class="panel-body">
                        <div v-for="post in posts" :key="post.id" class="bs-collout bs-collout-danger">
                            <h4>
                                <router-link :to="{ name:'posts',params: { id: post.id } }">{{ post.title }}</router-link>
                            </h4>
                            <p>{{ post.body }}</p>
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
                posts: []
            }
        },
        mounted() {
            axios.get('/api/posts').then(response => {
                console.log(response.data.data);
                this.posts = response.data.data;
            });
        }
    }
</script>
