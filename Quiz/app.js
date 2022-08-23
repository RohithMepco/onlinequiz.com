$(document).ready(function(){
  $.ajax({
    url: "http://localhost/Quiz/data.php",
    method: "GET",
    success: function(data) {
      console.log(data);
	   var player = [];
      var score = [];

      for(var i in data) {
        player.push( data[i].username);
	
        score.push(data[i].max_mark);
      }

      var chartdata = {
        labels: player,
        datasets : [
          {
            label: 'User Marks',
            backgroundColor: 'orange',
            borderColor: 'black',
            hoverBackgroundColor: 'deepskyblue',
            hoverBorderColor: 'purple',
            data: score
          }
        ]
      };

      var ctx = $("#mycanvas");

      var barGraph = new Chart(ctx, {
        type: 'bar',
        data: chartdata
      });
   
    },
    error: function(data) {
      console.log(data);
    }
  });
});