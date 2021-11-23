const $$ = jQuery

$$(document).on('ready',() => {
  $$('.cardboard-map').on('click',(evt) => {
    var x = evt.pageX - $$('.cardboard-map').offset().left - 20;
    var y = evt.pageY - $$('.cardboard-map').offset().top - 42;
    $$.post(ajaxurl,{
      action: 'cardboard_worldmap_create_point',
      pos_x: x,
      pos_y: y,
      point_name: $$('#cardboard-worldmap-point-name').val()
    })
    .then(() => {
      window.location.reload()
    })
  })

  $$('.cardboard-map-marker').on('click',(evt) => {
    $$.post(ajaxurl,{
      action: 'cardboard_worldmap_delete_point',
      id: evt.target.dataset.netid
    })
    .then(() => {
      window.location.reload()
    })
    evt.stopPropagation()
  })

})