// Handling sign out button dropdown
$('.dropdown').mouseover(function() {
  $(this).dropdown({transition: 'slide down'})
});

// Sidebar
$('.ui.sidebar').sidebar('attach events', '.toc.item');

// Semantic form validation
$("#emailForm")
  .form({
      on: 'blur',
      inline: true,
      fields: {
        email: {
          identifier : 'email',
          rules: [
            {
              type   : 'empty',
              prompt : 'Please enter an email address!'
            }
          ]
        },
        emailBody: {
          identifier : 'emailBody',
          rules: [
           {
            type   : 'empty',
            prompt : 'Email must have a body!'
           },
           {
            type   : 'maxLength[500]',
            prompt : 'E-mail must be < 500 characters!'
           }
          ]
        }
      }
  });

// Smooth scroll to position
$(".about, .portfolio, .contact").on("click", function() {
    
    var classes = $(this).attr("class");
    var getClass = classes.replace("item ", "");

    $('html, body').animate({
        scrollTop: $("#" + getClass).offset().top -70
    }, 'slow');
});

// Form loading after submit
$("#formSubmit").on("click", function() {
  $(this).addClass("loading");
})

// Handling Like Button
$(".likeButton").on("click", function() {

  var getID = $(this).attr("id");
  var spanClass = "." + getID;
  var currentCount = Number($(spanClass).text());
  var selector = "#" + getID + " div";
  var likeSelector = "#" + getID + " .status";
  var user = $(".username").text();

  var isLiked = $(this).children().hasClass("green");

  isLiked ? 
  currentCount = subtractCounter(getID, spanClass, currentCount, selector, likeSelector) : 
  currentCount = addCounter(getID, spanClass, currentCount, selector, likeSelector);

  $(spanClass).text(currentCount);

  $.ajax({
    type: "POST",
    data: {
      "name"    : getID,
      "isLiked" : isLiked,
      "user"    : user
    },
    url: "../php/updateLikes.php"
  })

});

// Increment/Decrement Functions

function addCounter(id, spanClass, currentCount, selector, likeSelector) {
  
  currentCount++;

  $(selector).removeClass("blue").addClass("green");

  $(likeSelector).text("Liked");
  return currentCount;
}

function subtractCounter(id, spanClass, currentCount, selector, likeSelector) {
  
  currentCount--;

  $(selector).removeClass("green").addClass("blue");

  $(likeSelector).text("Like");
  return currentCount;
}