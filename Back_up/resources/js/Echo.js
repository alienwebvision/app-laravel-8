window.Echo.channel('lara8_scketio_database_post-created')
    .listen('PostCreated', (e) => {

        console.log(e)
        console.log(e.post())

    })
