$(document).ready(function() {
    $(".link1[data-dynamic='true']").click(function(e) {
      e.preventDefault();
      var url = $(this).attr("href");
      loadDynamicContent(url);
    });
  
    function loadDynamicContent(url) {
      $.ajax({
        url: url,
        success: function(response) {
          $("#content-container").html(response);
        }
      });
    }
  });