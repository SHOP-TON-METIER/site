$(document).ready(function () {
  let nombre = 0
  let panierdata = localStorage.getItem('shoptonmetier')
  $.each(JSON.parse(panierdata), function () {
    nombre++
  })
  $('.pastille').html(nombre)
  if (nombre === 0) {
    $('.pastille').hide()
  }

  $('.ajouter-panier').on('click', function () {
    nombre++
    $('.pastille').html(nombre)
    if (nombre === 1) {
      $('.pastille').show()
    }
  })

  $('.supprimer-panier').on('click', function () {
    nombre--
    $('.pastille').html(nombre)
    if (nombre === 0) {
      $('.pastille').hide()
    }
  })

  //   $('.metier svg').click(function () {
  //     console.log('clicjkn')

  //   })
})
