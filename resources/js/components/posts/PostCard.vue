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
            let date = new Date(this.post.updated_at);
            let day = date.getDate();
            let month = date.getMonth() + 1;
            let year = date.getFullYear();
            let hour = date.getHours();
            let minute = date.getMinutes();
            let seconds = date.getSeconds();

            if (day < 10) day = "0" + day;
            if (month < 10) month = "0" + month;
            if (minute = '0') minute = "0" + minute;
            if (seconds = '0') seconds = "0" + seconds;

            return `${day}/${month}/${year} ${hour}:${minute}:${seconds}`;
        }
    },
}
</script>

<style>

</style>