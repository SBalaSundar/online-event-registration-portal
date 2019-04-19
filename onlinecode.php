<!DOCTYPE html>
<html lang="en" >
<?php
session_start();
if(!$_SESSION['id']){
	echo "<script>alert('Un Authorized Access'); window.location.href='index.php';</script>";
}
else{
?>
<head>

  <meta charset="UTF-8">
  <title>Online Coding</title>
  
  
  
  
      <style>
      body{
background-color:white;
}
.bdy{ 
  display:grid;
  grid-template-columns:repeat(3,1fr);
  grid-auto-rows:100px;
}
.hfullimg{
  grid-column:1/-1;
  grid-row:1/2;
  background-color:#D35400;
}
.cont{
  grid-row:2/10;
  grid-column:1/-1;
  display:grid;
 grid-template-columns:30px 300px 1fr 400px;
  grid-auto-rows:100px;
  
}

.cont1{
  grid-column:2/3;
  grid-row:1/7;
}
.cont2{
  margin:20px;
  grid-column:3/4;
  grid-row:1/7;
  border:1px solid black;
}
p {
  font-size:20px;
}
.cont3{
  grid-column:4/5;
  grid-row:1/3;
display:grid;
  grid-template-columns:1fr 1fr;
  grid-auto-rows:100px;
}
.cont4{
  grid-column:4/5;
  grid-row:3/7;
  border:2px solid white;
}

ul{
  list-style-type:none;
}
li button{
  border:2px solid #74b9ff;
  display:block;
  font-size:15px;
  padding:8.5px;
  width:85%;
}

.ftl{
  grid-row:1/3;
  grid-column:1/2;
  width:60px;
  height:70px;
}
.ftc{
  grid-row:1/2;
  grid-column:2/3;
  justify-self:end;
  width:60px;
  height:70px;
}
.ftr{
   grid-row:1/2;
  grid-column:3/4;
  color:orange;
  font-size:30px;
  padding:30px;
}
.ftl img{width:40px; height:50px;}
.ftc img{width:40px; height:50px;}

#q1,#q2{
  display:none;
}

    </style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>


</head>

<body translate="no" >

  <div class="bdy">
<div class="hfullimg"><img src="oc.png" style="margin:20px 0 0 30%;width:70px;height:60px;"/><b style="font-size:40px;margin-left:30px;">Online Coding Prelims</b>
</div>
  
 <script>
function myFunction(q) {
if(q==1){
    //document.getElementById("qes1").style.fontSize = "35px"; 
 document.getElementById("qes1").style.display="block";
  document.getElementById("qes2").style.display="none";
  document.getElementById("qes3").style.display="none";
  document.getElementById("qes4").style.display="none";
  document.getElementById("qes5").style.display="none";
  document.getElementById("qes6").style.display="none";
  document.getElementById("qes7").style.display="none";
  document.getElementById("qes8").style.display="none";
  document.getElementById("qes9").style.display="none";
  document.getElementById("qes10").style.display="none";
  document.getElementById("qes11").style.display="none";
  document.getElementById("qes12").style.display="none";
  document.getElementById("qes13").style.display="none";
  document.getElementById("qes14").style.display="none";
  document.getElementById("qes15").style.display="none";
}
else if(q==2) {
 document.getElementById("qes1").style.display="none";
  document.getElementById("qes2").style.display="block";
  document.getElementById("qes3").style.display="none";
  document.getElementById("qes4").style.display="none";
  document.getElementById("qes5").style.display="none";
  document.getElementById("qes6").style.display="none";
  document.getElementById("qes7").style.display="none";
  document.getElementById("qes8").style.display="none";
  document.getElementById("qes9").style.display="none";
  document.getElementById("qes10").style.display="none";
  document.getElementById("qes11").style.display="none";
  document.getElementById("qes12").style.display="none";
  document.getElementById("qes13").style.display="none";
  document.getElementById("qes14").style.display="none";
  document.getElementById("qes15").style.display="none";
}
else if(q==3) {
    document.getElementById("qes1").style.display="none";
  document.getElementById("qes2").style.display="none";
  document.getElementById("qes3").style.display="block";
  document.getElementById("qes4").style.display="none";
  document.getElementById("qes5").style.display="none";
  document.getElementById("qes6").style.display="none";
  document.getElementById("qes7").style.display="none";
  document.getElementById("qes8").style.display="none";
  document.getElementById("qes9").style.display="none";
  document.getElementById("qes10").style.display="none";
  document.getElementById("qes11").style.display="none";
  document.getElementById("qes12").style.display="none";
  document.getElementById("qes13").style.display="none";
  document.getElementById("qes14").style.display="none";
  document.getElementById("qes15").style.display="none";
}
else if(q==4) {
    //document.getElementById("demo2").style.fontSize = "35px"; 
 document.getElementById("qes1").style.display="none";
  document.getElementById("qes2").style.display="none";
  document.getElementById("qes3").style.display="none";
  document.getElementById("qes4").style.display="block";
  document.getElementById("qes5").style.display="none";
  document.getElementById("qes6").style.display="none";
  document.getElementById("qes7").style.display="none";
  document.getElementById("qes8").style.display="none";
  document.getElementById("qes9").style.display="none";
  document.getElementById("qes10").style.display="none";
  document.getElementById("qes11").style.display="none";
  document.getElementById("qes12").style.display="none";
  document.getElementById("qes13").style.display="none";
  document.getElementById("qes14").style.display="none";
  document.getElementById("qes15").style.display="none";
}
else if(q==5) {
    //document.getElementById("demo2").style.fontSize = "35px"; 
 document.getElementById("qes1").style.display="none";
  document.getElementById("qes2").style.display="none";
  document.getElementById("qes3").style.display="none";
  document.getElementById("qes4").style.display="none";
  document.getElementById("qes5").style.display="block";
  document.getElementById("qes6").style.display="none";
  document.getElementById("qes7").style.display="none";
  document.getElementById("qes8").style.display="none";
  document.getElementById("qes9").style.display="none";
  document.getElementById("qes10").style.display="none";
  document.getElementById("qes11").style.display="none";
  document.getElementById("qes12").style.display="none";
  document.getElementById("qes13").style.display="none";
  document.getElementById("qes14").style.display="none";
  document.getElementById("qes15").style.display="none";
}
else if(q==6) {
    //document.getElementById("demo2").style.fontSize = "35px"; 
 document.getElementById("qes1").style.display="none";
  document.getElementById("qes2").style.display="none";
  document.getElementById("qes3").style.display="none";
  document.getElementById("qes4").style.display="none";
  document.getElementById("qes5").style.display="none";
  document.getElementById("qes6").style.display="block";
  document.getElementById("qes7").style.display="none";
  document.getElementById("qes8").style.display="none";
  document.getElementById("qes9").style.display="none";
  document.getElementById("qes10").style.display="none";
  document.getElementById("qes11").style.display="none";
  document.getElementById("qes12").style.display="none";
  document.getElementById("qes13").style.display="none";
  document.getElementById("qes14").style.display="none";
  document.getElementById("qes15").style.display="none";
}
else if(q==7) {
    //document.getElementById("demo2").style.fontSize = "35px"; 
 document.getElementById("qes1").style.display="none";
  document.getElementById("qes2").style.display="none";
  document.getElementById("qes3").style.display="none";
  document.getElementById("qes4").style.display="none";
  document.getElementById("qes5").style.display="none";
  document.getElementById("qes6").style.display="none";
  document.getElementById("qes7").style.display="block";
  document.getElementById("qes8").style.display="none";
  document.getElementById("qes9").style.display="none";
  document.getElementById("qes10").style.display="none";
  document.getElementById("qes11").style.display="none";
  document.getElementById("qes12").style.display="none";
  document.getElementById("qes13").style.display="none";
  document.getElementById("qes14").style.display="none";
  document.getElementById("qes15").style.display="none";
}
else if(q==8) {
    //document.getElementById("demo2").style.fontSize = "35px"; 
 document.getElementById("qes1").style.display="none";
  document.getElementById("qes2").style.display="none";
  document.getElementById("qes3").style.display="none";
  document.getElementById("qes4").style.display="none";
  document.getElementById("qes5").style.display="none";
  document.getElementById("qes6").style.display="none";
  document.getElementById("qes7").style.display="none";
  document.getElementById("qes8").style.display="block";
  document.getElementById("qes9").style.display="none";
  document.getElementById("qes10").style.display="none";
  document.getElementById("qes11").style.display="none";
  document.getElementById("qes12").style.display="none";
  document.getElementById("qes13").style.display="none";
  document.getElementById("qes14").style.display="none";
  document.getElementById("qes15").style.display="none";
}
else if(q==9) {
    //document.getElementById("demo2").style.fontSize = "35px"; 
 document.getElementById("qes1").style.display="none";
  document.getElementById("qes2").style.display="none";
  document.getElementById("qes3").style.display="none";
  document.getElementById("qes4").style.display="none";
  document.getElementById("qes5").style.display="none";
  document.getElementById("qes6").style.display="none";
  document.getElementById("qes7").style.display="none";
  document.getElementById("qes8").style.display="none";
  document.getElementById("qes9").style.display="block";
  document.getElementById("qes10").style.display="none";
  document.getElementById("qes11").style.display="none";
  document.getElementById("qes12").style.display="none";
  document.getElementById("qes13").style.display="none";
  document.getElementById("qes14").style.display="none";
  document.getElementById("qes15").style.display="none";
}
else if(q==10) {
    //document.getElementById("demo2").style.fontSize = "35px"; 
 document.getElementById("qes1").style.display="none";
  document.getElementById("qes2").style.display="none";
  document.getElementById("qes3").style.display="none";
  document.getElementById("qes4").style.display="none";
  document.getElementById("qes5").style.display="none";
  document.getElementById("qes6").style.display="none";
  document.getElementById("qes7").style.display="none";
  document.getElementById("qes8").style.display="none";
  document.getElementById("qes9").style.display="none";
  document.getElementById("qes10").style.display="block";
  document.getElementById("qes11").style.display="none";
  document.getElementById("qes12").style.display="none";
  document.getElementById("qes13").style.display="none";
  document.getElementById("qes14").style.display="none";
  document.getElementById("qes15").style.display="none";
}
else if(q==11) {
    //document.getElementById("demo2").style.fontSize = "35px"; 
 document.getElementById("qes1").style.display="none";
  document.getElementById("qes2").style.display="none";
  document.getElementById("qes3").style.display="none";
  document.getElementById("qes4").style.display="none";
  document.getElementById("qes5").style.display="none";
  document.getElementById("qes6").style.display="none";
  document.getElementById("qes7").style.display="none";
  document.getElementById("qes8").style.display="none";
  document.getElementById("qes9").style.display="none";
  document.getElementById("qes10").style.display="none";
  document.getElementById("qes11").style.display="block";
  document.getElementById("qes12").style.display="none";
  document.getElementById("qes13").style.display="none";
  document.getElementById("qes14").style.display="none";
  document.getElementById("qes15").style.display="none";
}
else if(q==12) {
    //document.getElementById("demo2").style.fontSize = "35px"; 
 document.getElementById("qes1").style.display="none";
  document.getElementById("qes2").style.display="none";
  document.getElementById("qes3").style.display="none";
  document.getElementById("qes4").style.display="none";
  document.getElementById("qes5").style.display="none";
  document.getElementById("qes6").style.display="none";
  document.getElementById("qes7").style.display="none";
  document.getElementById("qes8").style.display="none";
  document.getElementById("qes9").style.display="none";
  document.getElementById("qes10").style.display="none";
  document.getElementById("qes11").style.display="none";
  document.getElementById("qes12").style.display="block";
  document.getElementById("qes13").style.display="none";
  document.getElementById("qes14").style.display="none";
  document.getElementById("qes15").style.display="none";
}
else if(q==13) {
    //document.getElementById("demo2").style.fontSize = "35px"; 
 document.getElementById("qes1").style.display="none";
  document.getElementById("qes2").style.display="none";
  document.getElementById("qes3").style.display="none";
  document.getElementById("qes4").style.display="none";
  document.getElementById("qes5").style.display="none";
  document.getElementById("qes6").style.display="none";
  document.getElementById("qes7").style.display="none";
  document.getElementById("qes8").style.display="none";
  document.getElementById("qes9").style.display="none";
  document.getElementById("qes10").style.display="none";
  document.getElementById("qes11").style.display="none";
  document.getElementById("qes12").style.display="none";
  document.getElementById("qes13").style.display="block";
  document.getElementById("qes14").style.display="none";
  document.getElementById("qes15").style.display="none";
}
else if(q==14) {
    //document.getElementById("demo2").style.fontSize = "35px"; 
 document.getElementById("qes1").style.display="none";
  document.getElementById("qes2").style.display="none";
  document.getElementById("qes3").style.display="none";
  document.getElementById("qes4").style.display="none";
  document.getElementById("qes5").style.display="none";
  document.getElementById("qes6").style.display="none";
  document.getElementById("qes7").style.display="none";
  document.getElementById("qes8").style.display="none";
  document.getElementById("qes9").style.display="none";
  document.getElementById("qes10").style.display="none";
  document.getElementById("qes11").style.display="none";
  document.getElementById("qes12").style.display="none";
  document.getElementById("qes13").style.display="none";
  document.getElementById("qes14").style.display="block";
  document.getElementById("qes15").style.display="none";
}
else if(q==15) {
    //document.getElementById("demo2").style.fontSize = "35px"; 
 document.getElementById("qes1").style.display="none";
  document.getElementById("qes2").style.display="none";
  document.getElementById("qes3").style.display="none";
  document.getElementById("qes4").style.display="none";
  document.getElementById("qes5").style.display="none";
  document.getElementById("qes6").style.display="none";
  document.getElementById("qes7").style.display="none";
  document.getElementById("qes8").style.display="none";
  document.getElementById("qes9").style.display="none";
  document.getElementById("qes10").style.display="none";
  document.getElementById("qes11").style.display="none";
  document.getElementById("qes12").style.display="none";
  document.getElementById("qes13").style.display="none";
  document.getElementById("qes14").style.display="none";
  document.getElementById("qes15").style.display="block";
}
}
   function al(){
     alert("are you want submit Exam")
   }
   
   function pr(){
     prompt("are you want submit Exam")
   }
   
</script>
 <div class="cont"> 
 <div class="cont1">
 <ul>
<li><button type="button" onclick="myFunction(1)">Question 1</button> </li>
<li><button type="button" onclick="myFunction(2)">Question 2</button> </li>
<li><button type="button" onclick="myFunction(3)">Question 3</button> </li>
<li><button type="button" onclick="myFunction(4)">Question 4</button> </li>
<li><button type="button" onclick="myFunction(5)">Question 5</button> </li>
<li><button type="button" onclick="myFunction(6)">Question 6</button> </li>
<li><button type="button" onclick="myFunction(7)">Question 7</button> </li>
<li><button type="button" onclick="myFunction(8)">Question 8</button> </li>
<li><button type="button" onclick="myFunction(9)">Question 9</button> </li>
<li><button type="button" onclick="myFunction(10)">Question 10</button> </li>
<li><button type="button" onclick="myFunction(11)">Question 11</button> </li>
<li><button type="button" onclick="myFunction(12)">Question 12</button> </li>
<li><button type="button" onclick="myFunction(13)">Question 13</button> </li>
<li><button type="button" onclick="myFunction(14)">Question 14</button> </li>
<li><button type="button" onclick="myFunction(15)">Question 15</button> </li>
    </ul>
    </div>
  <div class="cont2">
<form method="POST" action="answer.php">
<div id="qes1" style="display:none;margin-left:30px;margin-top: 0px;"></br>
<p><b>Predict the output for All 15 questions.</b></p>
<p>#include<stdio.h></br>
void main()</br>{</br>
&nbsp;&nbsp;&nbsp;int a[4]={3,4,5,6};</br>
&nbsp;&nbsp;&nbsp;printf(“%d %d\n”,3[a],a[3]);</br>
&nbsp;&nbsp;&nbsp;printf(“%d”,*a);</br>
&nbsp;&nbsp;&nbsp;getch();</br>
}</p>
</br>
<textarea rows = "5" cols = "60" name = "ans1">
            Type your Answer here.
</textarea>
</div>
<div id="qes2" style="display:none;margin-left:30px;margin-top: 0px;"></br>
   <p> #include<stdio.h></br>
int main()</br>{</br>
&nbsp;&nbsp;&nbsp;int i=3;</br>
&nbsp;&nbsp;&nbsp;int j=sizeof(++i + ++i);</br>
&nbsp;&nbsp;&nbsp;printf(“%d %d”,i,j)</br>
}</P>
</br><textarea rows = "5" cols = "60" name = "ans2">
            Type your Answer here.
</textarea>
</div>
<div id="qes3" style="display:none;margin-left:30px;margin-top: 0px;"></br></br>
<p>#include<stdio.h></br>
int main()</br>{</br>
&nbsp;&nbsp;&nbsp;int i=5;</br>
&nbsp;&nbsp;&nbsp;- - i;</br>
&nbsp;&nbsp;&nbsp;printf(“%d”, i);</br>
&nbsp;&nbsp;&nbsp;main(i);</br>
}</p>
</br><textarea rows = "5" cols = "60" name = "ans3">
            Type your Answer here.
</textarea>
      </div>
<div id="qes4" style="display:none;margin-left:30px;margin-top: 0px;"></br>
<p>#include<stdio.h></br>
int main()</br>{</br>
&nbsp;&nbsp;&nbsp;char str1 []=”computer”;</br>
&nbsp;&nbsp;&nbsp;char str2[]=”computer”;</br>
&nbsp;&nbsp;&nbsp;if(str1==str2)</br>&nbsp;&nbsp;&nbsp;{</br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(“\n Equal”);</br>
&nbsp;&nbsp;&nbsp;}</br>
&nbsp;&nbsp;&nbsp;else</br>&nbsp;&nbsp;&nbsp;{</br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(“UnEqual”);</br>
&nbsp;&nbsp;&nbsp;}</br> }</p>
	</br><textarea rows = "5" cols = "60" name = "ans4">
            Type your Answer here.
</textarea>
</div>
<div id="qes5" style="display:none;margin-left:30px;margin-top: 0px;"></br>
<p>#include<stdio.h></br>
main()</br>{</br>
&nbsp;&nbsp;&nbsp;char *ptr;</br>
&nbsp;&nbsp;&nbsp;int i;</br>
&nbsp;&nbsp;&nbsp;for(int i=0;i<3;i++)</br>&nbsp;&nbsp;&nbsp;{</br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;scanf(“%s”,(ptr+i)); // Input: University Visvesvaraya College</br>
&nbsp;&nbsp;&nbsp;}</br>
&nbsp;&nbsp;&nbsp;for(i=0;i<3;i++)</br>&nbsp;&nbsp;&nbsp;{</br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(“%c”,*(ptr+i));</br>
&nbsp;&nbsp;&nbsp;}</br>
&nbsp;&nbsp;&nbsp;for(i=0;i<3;i++)</br>&nbsp;&nbsp;&nbsp;{</br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(“%s”,(ptr+i));</br>
&nbsp;&nbsp;&nbsp;}</br>
}</p>
<textarea rows = "5" cols = "60" name = "ans5">
            Type your Answer here.
</textarea>
</div>
<div id="qes6" style="display:none;margin-left:30px;margin-top: 0px;"></br>
<p>#include<stdio.h></br>
main()</br>{</br>
&nbsp;&nbsp;&nbsp;char str1[]=”<font size="4">MEPCO SCHLENK ENGINEERING COLLEGE;</font>"</br>
&nbsp;&nbsp;&nbsp;int n=strlen(str1);</br>
&nbsp;&nbsp;&nbsp;for(i=n;i>=0;i--)</br>&nbsp;&nbsp;&nbsp;{</br>
&nbsp;&nbsp;&nbsp;prinft(“%c”,str1[i]);
</br>&nbsp;&nbsp;&nbsp;} </br>
}</p>
</br><textarea rows = "5" cols = "60" name = "ans6">
            Type your Answer here.
</textarea></div>      
<div id="qes7" style="display:none;margin-left:30px;margin-top: 0px;"></br>
<p>#include<stdio.h></br>
#define i 5</br>
void main()</br>
{</br>
&nbsp;&nbsp;&nbsp;clrscr();</br>
&nbsp;&nbsp;&nbsp;#define i 5+1;</br>
&nbsp;&nbsp;&nbsp;printf(“%d”,i);</br>
}</p>
</br><textarea rows = "5" cols = "60" name = "ans7">
            Type your Answer here.
</textarea>
</div>
<div id="qes8" style="display:none;margin-left:30px;margin-top: 0px;"></br>
<p>	#include<stdio.h></br>
viod main()</br>{</br>
&nbsp;&nbsp;&nbsp;printf(“%d”,2<<3);</br>
&nbsp;&nbsp;&nbsp;printf(“%d”,32>>2);</br>
}</p>
</br><textarea rows = "5" cols = "60" name = "ans8">
            Type your Answer here.
</textarea>
</div>
<div id="qes9" style="display:none;margin-left:30px;margin-top: 0px;"></br>
<p>#include<stdio.h></br>
junk(k,l)</br>
int k,*l;</br>
{</br>
&nbsp;&nbsp;&nbsp;k=k**1;</br>
&nbsp;&nbsp;&nbsp;*l= *l **l;</br>
}</br>
int main()</br>{</br>
&nbsp;&nbsp;&nbsp;int k=-5,l=-2;</br>
&nbsp;&nbsp;&nbsp;clscr();</br>
&nbsp;&nbsp;&nbsp;junk(k,&l);</br>
&nbsp;&nbsp;&nbsp;printf(“%d,%d”,k,l);</br>
}</p>
</br><textarea rows = "5" cols = "60" name = "ans9">
            Type your Answer here.
</textarea>
</div>
<div id="qes10" style="display:none;margin-left:30px;margin-top: 0px;"></br>
<p>#include<stdio.h></br>
main()</br>{</br>
&nbsp;&nbsp;&nbsp;int a=100;</br>
&nbsp;&nbsp;&nbsp;printf(“%d %d %d”,a++,++a,a++);</br>
}</p>
</br><textarea rows = "5" cols = "60" name = "ans10">
            Type your Answer here.
</textarea>
</div>
<div id="qes11" style="display:none;margin-left:30px;margin-top: 0px;"></br>
<p>#include<stdio.h></br>
main()</br>{</br>
&nbsp;&nbsp;&nbsp;int a= 2;</br>
&nbsp;&nbsp;&nbsp;switch(a)</br>&nbsp;&nbsp;&nbsp;{</br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case 1:</br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(“ One”);</br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;</br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case 2:</br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(“ Two”);</br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case 3:</br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(“ Three”);</br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default :</br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(“ABCD”);</br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;</br>
&nbsp;&nbsp;&nbsp;} </br>
}</p>
<textarea rows = "5" cols = "60" name = "ans11">
            Type your Answer here.
</textarea>
</div>
<div id="qes12" style="display:none;margin-left:30px;margin-top: 0px;"></br>
<p>	#include<stdio.h></br>
void main()</br>{</br>
&nbsp;&nbsp;&nbsp;char s[]=”inw\0ard”;</br>
&nbsp;&nbsp;&nbsp;for(;s[i];)</br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(“%c%c%c%c”,s[i],*(s+i),*(i+s),i[s]);</br>
}</p>
</br><textarea rows = "5" cols = "60" name = "ans12">
            Type your Answer here.
</textarea>
</div>
<div id="qes13" style="display:none;margin-left:30px;margin-top: 0px;"></br>
<p>	#include<stdio.h></br>
fun(int n)</br>{</br>
&nbsp;&nbsp;&nbsp;if(n>90)</br>&nbsp;&nbsp;&nbsp;{ </br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return n-20 </br>
&nbsp;&nbsp;&nbsp;}</br>
&nbsp;&nbsp;&nbsp;return fun(fun(n+21));</br>
}</br>
main()</br>{</br>
&nbsp;&nbsp;&nbsp;int n=87;</br>
&nbsp;&nbsp;&nbsp;printf(“%d”fun(n));</br>
}</p>
</br><textarea rows = "5" cols = "60" name = "ans13">
            Type your Answer here.
</textarea>
</div>
<div id="qes14" style="display:none;margin-left:30px;margin-top: 0px;"></br>
<p>#include<stdio.h></br>
main()</br>{ </br>
&nbsp;&nbsp;&nbsp;printf(“%d”,printf(“ABCD”));</br>
}</p>
	</br><textarea rows = "5" cols = "60" name = "ans14">
            Type your Answer here.
</textarea>
</div>
<div id="qes15" style="display:none;margin-left:30px;margin-top: 0px;"></br>
	Print Your Name without the Use of semicolon in C
	</br><textarea rows = "30" cols = "60" name = "ans15">
            Type your Answer here.
</textarea>
</div>
   </div>
 
<div class="cont3">
  <ul>
    <li id="t1"><button type="submit" onclick="al()"
 style="border:1px solid tomato;color:white;background-color:tomato;font-size:20px;padding:10px;">Finish Test</button></form></li>
    </br>
  </ul>
</div>
   
<div class="cont4"><h1>Time --</h1><p>2:0</p> </div>
</div>


</div>
</body>

</html>
 <?php
 }
 ?>
