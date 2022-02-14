$(function() {
    $("button").on({
      mouseover: function() {
        $(this).css({
          left: (Math.random() * 200) + "px",
          top: (Math.random() * 200) + "px",
        });
      }
    });
  });

var get = document.getElementById('button');
console.log(get);