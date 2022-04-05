<template>
    <div class="card">
        <h5 class="card-header">{{ updatedAt }}</h5>
        <div class="card-body">
            <h5 class="card-title">{{post.title}}</h5>
            <p class="card-text">{{post.content}}</p>
        </div>
    </div>
</template>

<script>
export default {
    name: 'PostCard',
    props: ['post'],
    computed: {
        updatedAt(){
            const date = new Date(this.post.updated_at);
            let day = date.getDate();
            let month = date.getMonth() + 1;
            const year = date.getFullYear();
            const hour = date.getHours();
            const minute = date.getMinutes();

            if (day < 10) day = "0" + day;
            if (month < 10) month = "0" + month;

            return `${day}/${month}/${year} - ${hour}:${minute}`;
        }
    },
}
</script>

<style>

</style>