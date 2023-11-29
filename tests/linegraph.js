$(document).ready(function(){
  $.ajax({
    url : "data.php",
    type : "GET",
    success : function(data){
      console.log(data);

      var userid = [];
      var facebook_follower = [];
      var twitter_follower = [];
      var googleplus_follower = [];

      for(var i in data) {
        userid.push( data[i].CurrDate);
        facebook_follower.push(data[i].Freq);
        twitter_follower.push(data[i].twitter);
        googleplus_follower.push(data[i].googleplus);
      }

      var chartdata =  {
    labels : ["CAReS Expense per Day","Closed 12-to-1 and 5","Delivery Scan","Departure Scans","Derived LIBs","DNED","DNS"],
    datasets : [
        {
            fillColor : "rgba(99,123,133,0.4)",
            strokeColor : "rgba(220,220,220,1)",
            pointColor : "rgba(220,220,220,1)",
            pointStrokeColor : "#fff",
            data : [65,54,30,81,56,55,40]
        },
        {
            fillColor : "rgba(219,186,52,0.4)",
            strokeColor : "rgba(220,220,220,1)",
            pointColor : "rgba(220,220,220,1)",
            pointStrokeColor : "#fff",
            data : [20,60,42,58,31,21,50]
        },
    ]
}

      var ctx = $("#mycanvas");

      var LineGraph = new Chart(ctx, {
        type: 'line',
        data: chartdata
      });
    },
    error : function(data) {

    }
  });
});