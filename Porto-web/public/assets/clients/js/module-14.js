$(document).ready(function(){
    $('.sidebar-menu li.has-child > a .icon').click(function(e){
         e.preventDefault();
         $(this).parent().parent().toggleClass('menu-open');
    });
})

$(document).ready(function(){
    $('.color-menu li.has-child > a .icon').click(function(e){
         e.preventDefault();
         $(this).parent().parent().toggleClass('menu-open');
    });
})

let min = 50;
let max = 1700;

const calcLeftPosition = value => 100 / (1700 - 50) *  (value - 50);

$('#rangeMin').on('input', function(e) {
  const newValue = parseInt(e.target.value);
  if (newValue > max) return;
  min = newValue;
  $('#thumbMin').css('left', calcLeftPosition(newValue) + '%');
  $('#min').html(newValue);
  $('#line').css({
    'left': calcLeftPosition(newValue) + '%',
    'right': (100 - calcLeftPosition(max)) + '%'
  });
});

$('#rangeMax').on('input', function(e) {
  const newValue = parseInt(e.target.value);
  if (newValue < min) return;
  max = newValue;
  $('#thumbMax').css('left', calcLeftPosition(newValue) + '%');
  $('#max').html(newValue);
  $('#line').css({
    'left': calcLeftPosition(min) + '%',
    'right': (100 - calcLeftPosition(newValue)) + '%'
  });
});



