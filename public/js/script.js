console.log('HELLO');

// AJAX Suppression des images Espace Admin
document.querySelectorAll('[data-delete]').forEach(a => {
    a.addEventListener('click', e => {
        e.preventDefault()
        fetch(a.getAttribute('href'), {
            method: 'DELETE',
            headers: {
                'X-Requested-Width': 'XMLHttpRequest',
                'Content-Type': 'application/json'           
            },
            body: JSON.stringify({'_token': a.dataset.token})
        })  .then(response => response.json())
            .then(data => {
                if (data.success) {
                    a.parentNode.parentNode.removeChild(a.parentNode)
                } else {
                    alert(data.error)
                }
            })
        .catch(e => alert(e))
    })
})

// Carousel show
$('.slider-slick').slick({
    dots: true,
    arrows: true
});

// Formualire de contact show au clic du bouton Contacter
$('#contactButton').click(e => {
    e.preventDefault()
    $('#contactForm').slideDown();
    $('#contactButton').slideUp();
})
  

