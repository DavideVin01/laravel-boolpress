<template>
    <div class="card">
        <h5 class="card-header">{{ post.updated_at }}</h5>
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
}
</script>

<style>

</style>