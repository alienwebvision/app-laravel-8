import Vue from 'vue'

window.Echo.channel('lara8_socketio_database_post-created')
    .listen('PostCreated', (e) => {

        // console.log(e)
        console.log(e.post)

        Vue.$vToastify.success(`Item: ${e.post.content}`, `Novo Pregão: ${e.post.title}`)
        // Vue.$vToastify.success(`Título do post ${e.post.name}`, 'Novo Post')

    })
