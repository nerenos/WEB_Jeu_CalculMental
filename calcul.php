<style>
.titre{width:780px;padding:10px;text-align:center;}
.bulcalc{width:60px;height:60px;border-radius:10px;background-image:url("./images/calcul.bmp");padding: 95px 25px 9px 35px;}
.txt{width:60px;text-align:center;}
.inrep{width:60px;text-align:center;}
.butrep{width:60px;text-align:center;border:1px solid grey;border-radius:5px;background:blue;}
.res{width:60px;text-align:center;}
.cour{position:relative;left:200px;top:px;width:60px;height:50px;background-image:url('./images/cour.gif');}
.carot{position:relative;left:350px;top:-47px;width:60px;height:45px;background-image:url('./images/carotte.gif');}
.gagne{position:relative;padding: 200px 75px 0px 75px;background-image:url("./images/gagne.gif");left:300px;visibility:hidden;width:50px;}
</style>
<div id="jeu"><div class="titre">Aide PINPIN le lapin à avancer vers la carotte en répondant aux calculs posé par la chévre.</div>
<div id="bulcalc" class="bulcalc"><div class="txt" id="txt"></div><input id="rep" class="inrep" type="txt" value="" onKeyPress="if(event.keyCode == 13) calc();"><div class="butrep" onclick="javascript:calc();">ok</div><div id="res" class="res"></div></div><div id="cour" class="cour"></div><div class="carot"></div></div><div id="gagne" class="gagne" onclick="javascript:reset();">Gagné<br>Niveau suivant</div>
<script language=javascript>
var n=0;
var a = 0;
var b = 0;
var c = 0;
var ycour = 200;
var f=1;
function calc(){
var rep = document.getElementById("rep").value;
if(rep==c){
a=Math.floor((Math.random()*11));
b=Math.floor((Math.random()*11));
if(n==0){s= ' + ';
c=a+b;}
if(n==1){s= ' x ';
c=a*b;}
document.getElementById('txt').innerHTML = a + s + b + " =";
if(f==0){
document.getElementById('res').innerHTML = "BRAVO";
document.getElementById('res').style.color = "green";
if(ycour==220){
document.getElementById('jeu').style.display= "none";
document.getElementById('gagne').style.visibility= "visible";}
ycour = ycour + 10;
document.getElementById('cour').style.left=ycour;
}
f=0;
}
else {
document.getElementById('res').innerHTML = 'FAUX';
document.getElementById('res').style.color = "red";
}
document.getElementById('rep').value = '';
}

function reset(){
var a = 0;
var b = 0;
var c = 0;
var ycour = 200;
var f=1;
n=1;
document.getElementById('cour').style.left=ycour;
document.getElementById('jeu').style.display= "block";
document.getElementById('gagne').style.visibility= "hidden";
calc();}

calc();
</script>