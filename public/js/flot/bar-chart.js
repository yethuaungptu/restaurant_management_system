$(document).ready(function(){
    
    /* Make some random data for Flot Line Chart*/
    
    var data1 = [[1,($('#data2').val()/$('#topO').val())*100], [2,($('#data3').val()/$('#topO').val())*100], [3,($('#data4').val()/$('#topO').val())*100], [4,($('#data5').val()/$('#topO').val())*100], [5,($('#data6').val()/$('#topO').val())*100], [6,($('#data7').val()/$('#topO').val())*100], [7,($('#data8').val()/$('#topO').val())*100], [8,($('#data9').val()/$('#topO').val())*100], [9,($('#data10').val()/$('#topO').val())*100], [10,($('#data11').val()/$('#topO').val())*100]];
    var data2 = [[1,($('#men2').val()/$('#topM').val())*100], [2,($('#men3').val()/$('#topM').val())*100], [3,($('#men4').val()/$('#topM').val())*100], [4,($('#men5').val()/$('#topM').val())*100], [5,($('#men6').val()/$('#topM').val())*100], [6,($('#men7').val()/$('#topM').val())*100], [7,($('#men8').val()/$('#topM').val())*100], [8,($('#men9').val()/$('#topM').val())*100], [9,($('#men10').val()/$('#topM').val())*100], [10,($('#men11').val()/$('#topM').val())*100]];
    // var ch = $('#data1').val().split('|').map(function (val) {
    //     return JSON.parse(val);
    // });

    for (var i = 0; i< 10; i++){
        console.log($('#data'+(i+2)).val());
    }


    /* Create an Array push the data + Draw the bars*/
    
    var barData = new Array();

    barData.push({
            data : data1,
            label: 'New visitor',
            bars : {
                    show : true,
                    align: "center",
                    barWidth : 0.4,
                    order : 1,
                    lineWidth: 0,
                    fillColor: '#63A8EB'
            }
    });
    
    barData.push({
            data : data2,
            label: 'New orders',
            bars : {
                    show : true,
                    align: "center",
                    barWidth : 0.4,
                    order : 2,
                    lineWidth: 0,
                    fillColor: '#E9585B'
            }
    });
    
    
    /* Let's create the chart */
    if ($('#bar-chart')[0]) {
        $.plot($("#bar-chart"), barData, {
            grid : {
              show : false,
              hoverable : true,
              clickable : true
            },
    
            legend:{
                show : false
            }
        });
    }
      
});