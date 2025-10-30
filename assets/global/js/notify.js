
  document.addEventListener('alpine:init', () => {

    const notification = document.querySelector('div.notify')

    if (notification) {
      setTimeout(() => {
        notification.remove()
      }, notify.timeout)
    }
  })
