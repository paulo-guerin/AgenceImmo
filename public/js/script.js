// MAP
class Map {
    static init () {
        let map = document.querySelector('#map')
        if (map === null) {
            return
        }
        let icon = L.icon({
            iconUrl: '../media/marker-icon.png'
        })
        let center = [map.dataset.lat, map.dataset.lng]
        map = L.map('map').setView(center, 13)
        let token = 'pk.eyJ1IjoiZ3JhZmlrYXJ0IiwiYSI6ImNqaHoxancyOTBxNXkzcW10MHI3NXZrNjkifQ.yWqQe1qK_RtMA2Z4qABvmg'
        L.tileLayer(`https://api.mapbox.com/v4/mapbox.streets/{z}/{x}/{y}.png?access_token=${token}`, {
            maxZoom: 18,
            minZoom: 12,
            attribution: '© <a href="https://www.mapbox.com/feedback/">Mapbox</a> © <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map)
        L.marker(center, {icon: icon}).addTo(map)
    }
}

Map.init()

// Autocompletion localisation Admin
var inputAddress = document.querySelector('#property_address')
if (inputAddress !== null) {
  var place = places({
    container: inputAddress
  })
  place.on('change', e => {
    document.querySelector('#property_city').value = e.suggestion.city
    document.querySelector('#property_postalCode').value = e.suggestion.postcode
    document.querySelector('#property_lat').value = e.suggestion.latlng.lat
    document.querySelector('#property_lng').value = e.suggestion.latlng.lng
  })
}

// Autocompletion localisation filter
var searchAddress = document.querySelector('#search_address')
if (searchAddress !== null) {
  var place = places({
    container: searchAddress
  })
  place.on('change', e => {
    document.querySelector('#lat').value = e.suggestion.latlng.lat
    document.querySelector('#lng').value = e.suggestion.latlng.lng
  })
}

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

$('select').select2();


// Formulaire de contact show au clic du bouton Contacter
$('#contactButton').click(e => {
    e.preventDefault()
    $('#contactForm').slideDown();
    $('#contactButton').slideUp();
})

// View Grid & List
$('.grid').click(e => {
    e.preventDefault()
    $('.list-index').hide();
    $('.grid-index').show();
})

$('.list').click(e => {
    e.preventDefault()
    $('.grid-index').hide();
    $('.list-index').show();
})


console.log('HELLO WORLD !!!');

  


