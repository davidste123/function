<strong><span style="font-family: 'times new roman', times, serif; font-size: 18pt;"><a href="https://findcaringarea.tk/">Home</a> &gt; Population prediction</span></strong>
<h3><img src="https://findcaringarea.tk/wp-content/uploads/2018/09/line-chart-300x300.png" alt="" width="48" height="48" class="wp-image-304 alignleft" /></h3>
<span style="font-size: 24pt;"><strong>Future Elderly Population</strong></span>
<?php global $wpdb;
$getage = $wpdb->get_results("SELECT * FROM `Population2` WHERE `Age`='65-69';");
$getage2 = $wpdb->get_results("SELECT * FROM `Population2` WHERE `Age`='70-74';");
$getage3 = $wpdb->get_results("SELECT * FROM `Population2` WHERE `Age`='75-79';");
?>
 <script>
  var labels=<?php echo json_encode($getage,JSON_PRETTY_PRINT)?>;
  var label2=<?php echo json_encode($getage2,JSON_PRETTY_PRINT)?>;
  var label3=<?php echo json_encode($getage3,JSON_PRETTY_PRINT)?>;
</script>

<?php global $wpdb;
$getarea = $wpdb->get_results("SELECT * FROM `Areapopulation` WHERE `Agegroup`='65-69';");
$getarea2 = $wpdb->get_results("SELECT * FROM `Areapopulation` WHERE `Agegroup`='70-74';");
$getarea3 = $wpdb->get_results("SELECT * FROM `Areapopulation` WHERE `Agegroup`='75-79';");
?>
 <script>
  var areadata=<?php echo json_encode($getarea,JSON_PRETTY_PRINT)?>;
 var areadata2=<?php echo json_encode($getarea2,JSON_PRETTY_PRINT)?>;
 var areadata3=<?php echo json_encode($getarea3,JSON_PRETTY_PRINT)?>;
	console.log(areadata);
</script>

&nbsp;
<style type="text/css">
tr.noBorder td {
  border: 0;
}
.button1 {
    background-color: #555555;
    border: none;
    color: white;
    padding: 5px 5px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;}

.button2 {
    background-color: #555555;
    border: none;
    color: white;
    padding: 15px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 30px;}

.dropbtn2 {
    cursor: pointer;
    font-size: 16px;    
    border: none;
    outline: none;
    color: black;
    padding: 14px 16px;
    background-color: red;
    font-family: inherit;
    margin: 0;
    display: inline-block;
}
.navbar2 a:hover, .dropdown2:hover .dropbtn2, .dropbtn2:focus {
    background-color: red;
}
.dropdown-content2 {
    display: none;
    position: absolute;
    background-color: white;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}
.dropdown-content2 a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}
.dropdown-content2 a:hover {
    background-color: #ddd;
}
.show2 {
    display: block;
}
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<p class="font1" id="demo"></p>
<div class="tablesize" id="table1">
  <table>
    <tr class="noBorder"> 
<td><button class="button2" onclick="line1()" value="">Basic</button></td>  
<td><button class="button2" onclick="line2()">Victoria</button> </td></tr>
</table>
</div>
<div class="tablesize2" id='table2'>
  <table style="width:90%">
    <tr>
      <h1 id='Areachoose' style="display: none; color:red">Choose the area<h1>
      </tr>
    <tr>
  <td><button class="button1" id="hideone"  style="display:none" onclick="Melbourne()">Melbourne</button></td>
   <td><button class="button1" id="hideone1" name ="area" style="display: none;" onclick="Ballart()">Ballarat</button></td>
   <td><button class="button1" id="hideone2" name ="area" style="display:none" onclick="Bendigo()">Bendigo</button></td>
 </tr>
   <tr>
   <td><button class="button1" id="hideone3" name ="area" style="display:none" onclick="Geelong()">Geelong</button></td>
    <td><button class="button1" id="hideone4" name ="area" style="display:none" onclick="Hume()">Hume</button></td>
    <td><button class="button1" id="hideone5" name ="area" style="display:none" onclick="latrobe()">Latrobe</button></td>  
   </tr>
   <tr>
    <td><button class="button1" id="hideone6" name ="area" style="display:none" onclick="Northwest()">North-West</button></td>
    <td><button class="button1" id="hideone7" name ="area" style="display:none" onclick="Shepparton()">Shepparton</button></td>
    <td><button class="button1" id="hideone8" name ="area" style="display:none" onclick="Warrnambol()">Warrnambol</button></td>
</tr>
  </table>
</div>
<canvas id="linechart" style="height: 300px; width: 100%;"> </canvas>

<script>
function line1() {
  var texthide=document.getElementById("Areachoose");
  texthide.style.display="none";
  var hideline=document.getElementById('hideone');
  hideline.style.display="none";
  var hideline1=document.getElementById('hideone1');
  hideline1.style.display="none";
  var hideline2=document.getElementById('hideone2');
  hideline2.style.display="none";
  var hideline3=document.getElementById('hideone3');
  hideline3.style.display="none";
  var hideline4=document.getElementById('hideone4');
  hideline4.style.display="none";
  var hideline5=document.getElementById('hideone5');
  hideline5.style.display="none";
  var hideline6=document.getElementById('hideone6');
  hideline6.style.display="none";
  var hideline7=document.getElementById('hideone7');
  hideline7.style.display="none";
  var hideline8=document.getElementById('hideone8');
  hideline8.style.display="none";
document.getElementById("demo").innerHTML="The Victorian population rising trend";
         console.log(labels);
var Yearlabel=[];
         var agedata=[];
         for (var j=0;j<labels.length;j++){
        var test2 =labels[j]['Number'];
        agedata.push(test2);
    }
var agedata2=[];
for (var j=0;j<label2.length;j++){
        var test2 =label2[j]['Number'];
        agedata2.push(test2);}
var agedata3=[];
for (var j=0;j<label3.length;j++){
        var test2 =label3[j]['Number'];
        agedata3.push(test2);}
    console.log(agedata);
        for (var i=0;i<labels.length;i++){
            var test1 =labels[i]['Year'];
            Yearlabel.push(test1);}
        var lineChartData = {
            labels: Yearlabel,
            datasets:[{ 
        data: agedata2,
        label: "70-74",
        borderColor: "#e8c3b9",
        fill: false
      }, {
                label:'65-69',
                data: agedata,
                borderColor:"#8e5ea2",
                fill:false
            },{
                label:'75-79',
                data: agedata3,
                borderColor:"#c45850",
                fill:false
            }
            ]
        }
    var myLine = document.getElementById("linechart");
    var ctx = myLine.getContext("2d");
    var myNewChart = new Chart(ctx , {
    type: "line",
    data: lineChartData, 
    options:{
      title:{
        display:true,
        text:"Victoria future 50 years"
      }
    }
});
}
function line2(){
  var textshow=document.getElementById("Areachoose");
  textshow.style.display="";
  var newline=document.getElementById('hideone');
  console.log(newline);
  newline.style.display="";
  var newline1=document.getElementById('hideone1');
  newline1.style.display="";
  var newline2=document.getElementById('hideone2');
  newline2.style.display="";
  var newline3=document.getElementById('hideone3');
  newline3.style.display="";
  var newline4=document.getElementById('hideone4');
  newline4.style.display="";
  var newline5=document.getElementById('hideone5');
  newline5.style.display="";
  var newline6=document.getElementById('hideone6');
  newline6.style.display="";
  var newline7=document.getElementById('hideone7');
  newline7.style.display="";
  var newline8=document.getElementById('hideone8');
  newline8.style.display="";
  document.getElementById("demo").innerHTML="Choose the area interested";
  var lineChartData = {
            labels: ["2011", "2016", "2021", "2026", "2031", "2036"],
            datasets:[
              {label:'65-69',
              data:[114,111,11,12,333,444],
              borderColor:"#3e95cd",
              fill:false},
            ]
        }
    var myLine = document.getElementById("linechart");
    var ctx = myLine.getContext("2d");
    var myNewChart = new Chart(ctx , {
    type: "line",
    data: lineChartData, 
    options:{
      title:{
        display:true,
        text:"population2"
      }
    }
});
}
function Melbourne(){
document.getElementById("demo").innerHTML="Melbourne population";
  var Melbourne=[];
  var labelyear=[];
  for (var i=0;i<areadata.length;i++){
        var Meldata =areadata[i]['Melbourn'];
        Melbourne.push(Meldata);}
    console.log(Melbourne);
    for (var i=0;i<areadata.length;i++){
      var test1 =areadata[i]['Year'];
      labelyear.push(test1);}
var Mel2=[];
for (var j=0;j<areadata2.length;j++){
        var test2 =areadata2[j]['Melbourn'];
        Mel2.push(test2);}
var Mel3=[];
for (var j=0;j<areadata3.length;j++){
        var test2 =areadata3[j]['Melbourn'];
        Mel3.push(test2);}
      var lineChartData = {
            labels: labelyear,
            datasets:[
              {label:'70-74',
              data:Mel2,
              borderColor:"#3e95cd",
              fill:false},
              {label:'65-69',
                data: Melbourne,
                borderColor:"#8e5ea2",
                fill:false
            },{
                label:'75-79',
                data: Mel3,
                borderColor:"#c45850",
                fill:false
            }
            ]
        }
    var myLine = document.getElementById("linechart");
    var ctx = myLine.getContext("2d");
    var myNewChart = new Chart(ctx , {
    type: "line",
    data: lineChartData, 
    options:{
      title:{
        display:true,
        text:"Melbourne"
      }
    }
});
}
 function Ballart(){
document.getElementById("demo").innerHTML="Ballarat population";
  var Ballart=[];
  var labelyear=[];
  for (var i=0;i<areadata.length;i++){
        var baldata =areadata[i]['Ballarat'];
        Ballart.push(baldata);}
    for (var i=0;i<areadata.length;i++){
      var test1 =areadata[i]['Year'];
      labelyear.push(test1);}
var Bal2=[];
for (var j=0;j<areadata2.length;j++){
        var test2 =areadata2[j]['Ballarat'];
        Bal2.push(test2);}
var Bal3=[];
for (var j=0;j<areadata3.length;j++){
        var test2 =areadata3[j]['Ballarat'];
        Bal3.push(test2);}
console.log(Bal3);
      var lineChartData = {
            labels: labelyear,
            datasets:[
              {label:'70-74',
              data:Bal2,
              borderColor:"#3e95cd",
              fill:false},
              {label:'65-69',
                data:  Ballart,
                borderColor:"#8e5ea2",
                fill:false
            },{
                label:'75-79',
                data: Bal3,
                borderColor:"#c45850",
                fill:false
            }
            ]
        }
    var myLine = document.getElementById("linechart");
    var ctx = myLine.getContext("2d");
    var myNewChart = new Chart(ctx , {
    type: "line",
    data: lineChartData, 
    options:{
      title:{
        display:true,
        text:"Ballart"
      }
    }
});
}
function Bendigo(){
document.getElementById("demo").innerHTML="Bendigo population";
  var Bendigo=[];
  var labelyear=[];
  for (var i=0;i<areadata.length;i++){
        var baldata =areadata[i]['Bendigo'];
        Bendigo.push(baldata);}
console.log(Bendigo);
    for (var i=0;i<areadata.length;i++){
      var test1 =areadata[i]['Year'];
      labelyear.push(test1);}
var Bal2=[];
for (var j=0;j<areadata2.length;j++){
        var test2 =areadata2[j]['Bendigo'];
        Bal2.push(test2);}
var Bal3=[];
for (var j=0;j<areadata3.length;j++){
        var test2 =areadata3[j]['Bendigo'];
        Bal3.push(test2);}
      var lineChartData = {
            labels: labelyear,
            datasets:[
              {label:'70-74',
              data:Bal2,
              borderColor:"#3e95cd",
              fill:false},
              {label:'65-69',
                data:  Bendigo,
                borderColor:"#8e5ea2",
                fill:false
            },{
                label:'75-79',
                data: Bal3,
                borderColor:"#c45850",
                fill:false
            }
            ]
        }
    var myLine = document.getElementById("linechart");
    var ctx = myLine.getContext("2d");
    var myNewChart = new Chart(ctx , {
    type: "line",
    data: lineChartData, 
    options:{
      title:{
        display:true,
        text:"Bendigo"
      }
    }
});
}
function Geelong(){
document.getElementById("demo").innerHTML="Geelong population";
  var Melbourne=[];
  var labelyear=[];
  for (var i=0;i<areadata.length;i++){
        var Meldata =areadata[i]['Geelong'];
        Melbourne.push(Meldata);}
    console.log(Melbourne);
    for (var i=0;i<areadata.length;i++){
      var test1 =areadata[i]['Year'];
      labelyear.push(test1);}
var Mel2=[];
for (var j=0;j<areadata2.length;j++){
        var test2 =areadata2[j]['Geelong'];
        Mel2.push(test2);}
var Mel3=[];
for (var j=0;j<areadata3.length;j++){
        var test2 =areadata3[j]['Geelong'];
        Mel3.push(test2);}
console.log(Mel3);
      var lineChartData = {
            labels: labelyear,
            datasets:[
              {label:'70-74',
              data:Mel2,
              borderColor:"#3e95cd",
              fill:false},
              {label:'65-69',
                data: Melbourne,
                borderColor:"#8e5ea2",
                fill:false
            },{label:'75-79',
                data: Mel3,
                borderColor:"#c45850",
                fill:false
            }
            ]
        }
    var myLine = document.getElementById("linechart");
    var ctx = myLine.getContext("2d");
    var myNewChart = new Chart(ctx , {
    type: "line",
    data: lineChartData, 
    options:{
      title:{
        display:true,
        text:"Geelong"
      }
    }
});
}
 function Hume(){
document.getElementById("demo").innerHTML="Hume population";
  var Melbourne=[];
  var labelyear=[];
  for (var i=0;i<areadata.length;i++){
        var Meldata =areadata[i]['Hume'];
        Melbourne.push(Meldata);}
    console.log(Melbourne);
    for (var i=0;i<areadata.length;i++){
      var test1 =areadata[i]['Year'];
      labelyear.push(test1);}
var Mel2=[];
for (var j=0;j<areadata2.length;j++){
        var test2 =areadata2[j]['Hume'];
        Mel2.push(test2);}
var Mel3=[];
for (var j=0;j<areadata3.length;j++){
        var test2 =areadata3[j]['Hume'];
        Mel3.push(test2);}
      var lineChartData = {
            labels: labelyear,
            datasets:[
              {label:'70-74',
              data:Mel2,
              borderColor:"#3e95cd",
              fill:false},
              {label:'65-69',
                data: Melbourne,
                borderColor:"#8e5ea2",
                fill:false
            },{
                label:'75-79',
                data: Mel3,
                borderColor:"#c45850",
                fill:false
            }
            ]
        }
    var myLine = document.getElementById("linechart");
    var ctx = myLine.getContext("2d");
    var myNewChart = new Chart(ctx , {
    type: "line",
    data: lineChartData, 
    options:{
      title:{
        display:true,
        text:"Hume"
      }
    }
});
} 
function latrobe(){
document.getElementById("demo").innerHTML="Latrobe population";
  var Melbourne=[];
  var labelyear=[];
  for (var i=0;i<areadata.length;i++){
        var Meldata =areadata[i]['Latrobe'];
        Melbourne.push(Meldata);}
    console.log(Melbourne);
    for (var i=0;i<areadata.length;i++){
      var test1 =areadata[i]['Year'];
      labelyear.push(test1);}
var Mel2=[];
for (var j=0;j<areadata2.length;j++){
        var test2 =areadata2[j]['Latrobe'];
        Mel2.push(test2);}
var Mel3=[];
for (var j=0;j<areadata3.length;j++){
        var test2 =areadata3[j]['Latrobe'];
        Mel3.push(test2);}
      var lineChartData = {
            labels: labelyear,
            datasets:[
              {label:'70-74',
              data:Mel2,
              borderColor:"#3e95cd",
              fill:false},
              {label:'65-69',
                data: Melbourne,
                borderColor:"#8e5ea2",
                fill:false
            },{
                label:'75-79',
                data: Mel3,
                borderColor:"#c45850",
                fill:false
            }
            ]
        }
    var myLine = document.getElementById("linechart");
    var ctx = myLine.getContext("2d");
    var myNewChart = new Chart(ctx , {
    type: "line",
    data: lineChartData, 
    options:{
      title:{
        display:true,
        text:"Latrobe"
      }
    }
});
}
 function Northwest(){
document.getElementById("demo").innerHTML="Northwest population";
  var Melbourne=[];
  var labelyear=[];
  for (var i=0;i<areadata.length;i++){
        var Meldata =areadata[i]['North-West'];
        Melbourne.push(Meldata);}
    console.log(Melbourne);
    for (var i=0;i<areadata.length;i++){
      var test1 =areadata[i]['Year'];
      labelyear.push(test1);}
var Mel2=[];
for (var j=0;j<areadata2.length;j++){
        var test2 =areadata2[j]['North-West'];
        Mel2.push(test2);}
var Mel3=[];
for (var j=0;j<areadata3.length;j++){
        var test2 =areadata3[j]['North-West'];
        Mel3.push(test2);}
      var lineChartData = {
            labels: labelyear,
            datasets:[
              {label:'70-74',
              data:Mel2,
              borderColor:"#3e95cd",
              fill:false},
              {label:'65-69',
                data: Melbourne,
                borderColor:"#8e5ea2",
                fill:false
            },{
                label:'75-79',
                data: Mel3,
                borderColor:"#c45850",
                fill:false
            }
            ]
        }
    var myLine = document.getElementById("linechart");
    var ctx = myLine.getContext("2d");
    var myNewChart = new Chart(ctx , {
    type: "line",
    data: lineChartData, 
    options:{
      title:{
        display:true,
        text:"North-west"
      }
    }
});
}
function Shepparton(){
document.getElementById("demo").innerHTML="Shepparton population";
  var Melbourne=[];
  var labelyear=[];
  for (var i=0;i<areadata.length;i++){
        var Meldata =areadata[i]['Shepparton'];
        Melbourne.push(Meldata);}
    console.log(Melbourne);
    for (var i=0;i<areadata.length;i++){
      var test1 =areadata[i]['Year'];
      labelyear.push(test1);}
var Mel2=[];
for (var j=0;j<areadata2.length;j++){
        var test2 =areadata2[j]['Shepparton'];
        Mel2.push(test2);}
var Mel3=[];
for (var j=0;j<areadata3.length;j++){
        var test2 =areadata3[j]['Shepparton'];
        Mel3.push(test2);}
      var lineChartData = {
            labels: labelyear,
            datasets:[
              {label:'70-74',
              data:Mel2,
              borderColor:"#3e95cd",
              fill:false},
              {label:'65-69',
                data: Melbourne,
                borderColor:"#8e5ea2",
                fill:false
            },{
                label:'75-79',
                data: Mel3,
                borderColor:"#c45850",
                fill:false
            }
            ]
        }
    var myLine = document.getElementById("linechart");
    var ctx = myLine.getContext("2d");
    var myNewChart = new Chart(ctx , {
    type: "line",
    data: lineChartData, 
    options:{
      title:{
        display:true,
        text:"Shepparton"
      }
    }
});
}
function Warrnambol(){
document.getElementById("demo").innerHTML="Warrnambol population";
  var Melbourne=[];
  var labelyear=[];
  for (var i=0;i<areadata.length;i++){
        var Meldata =areadata[i]['Warrnambol'];
        Melbourne.push(Meldata);}
    console.log(Melbourne);
    for (var i=0;i<areadata.length;i++){
      var test1 =areadata[i]['Year'];
      labelyear.push(test1);}
var Mel2=[];
for (var j=0;j<areadata2.length;j++){
        var test2 =areadata2[j]['Warrnambol'];
        Mel2.push(test2);}
var Mel3=[];
for (var j=0;j<areadata3.length;j++){
        var test2 =areadata3[j]['Warrnambol'];
        Mel3.push(test2);}
      var lineChartData = {
            labels: labelyear,
            datasets:[
              {label:'70-74',
              data:Mel2,
              borderColor:"#3e95cd",
              fill:false},
              {label:'65-69',
                data: Melbourne,
                borderColor:"#8e5ea2",
                fill:false
            },{
                label:'75-79',
                data: Mel3,
                borderColor:"#c45850",
                fill:false
            }
            ]
        }
    var myLine = document.getElementById("linechart");
    var ctx = myLine.getContext("2d");
    var myNewChart = new Chart(ctx , {
    type: "line",
    data: lineChartData, 
    options:{
      title:{
        display:true,
        text:"Warrnambol"
      }
    }
});
}
</script>

