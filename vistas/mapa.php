<!DOCTYPE html>
<html>
<head>
	<title>Maps</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel='stylesheet' href="../src/css/estilos.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<style>
  #c-img {
	height: 500px;
}
body{
  /* background: #000; */
  /* color:white; */
}

table{
  border:1px solid white;
  border-collapse:collapse
}

tr, th{
  border:1px solid white;
  color:white;

}
.img{
  position:absolute;
  top:160px;
  left:0;
}

.grilla{
  position:absolute;
  top:190px;
  left:253px;
  z-index: 10;
}
th{
  width:41px;
  height:30px;
  cursor :pointer;
  text-align:center;
  font-size:11px;
}

.color{
  color:yellow;
}

#lista-div{
  position:absolute;
  top:180px;
 left:750px;
}

.boton-finalizar{
  position:absolute;
  top:180px;
 left:950px;
 padding:12px;
}

.label{
  margin-top:-10px;
  line-height:10px;

}

.dato{
  opacity:0;
}

.tra{
  opacity:1;
}


</style>
<body>
<h5 class='pt-1 pl-3' style='color:#3B61A8'>SELECCIONAR EN EL MAPA</h5>
        <label class='pl-3'>Enumere todas las zonas donde se realiza la pesca.  El mapa      puede demorar en cargar el mapa unos minutos. </label>




    <div class='img'> <img id='c-img' src="../src/img/mapa.jpg" alt=""></div>
  <div class='grilla'>
    <table id='tabla'>
        <tr>
            <th class='dato' >93</th>
            <th class='dato' >77</th>
            <th class='dato' >61</th>
            <th class='dato' >47</th>
            <th class='dato' >34</th>
            <th class='dato' >18</th>
            <th class='dato' >7</th>
            <th class='dato' >1</th>
        </tr>
        <tr>
            <th class='dato'>94</th>
            <th class='dato'>78</th>
            <th class='dato'>62</th>
            <th class='dato'>48</th>
            <th class='dato'>35</th>
            <th class='dato'>19</th>
            <th class='dato'>8</th>
            <th class='dato'>2</th>
        </tr>
        <tr>
            <th class='dato'>95</th>
  
            <th style=' text-align:left;' class='dato'>79</th>
            <th style='vertical-align:bottom' class='dato'>63</th>
            <th style=' text-align:right'  class='dato'>49</th>
            <th class='dato'>36</th>
            <th class='dato'>20</th>
            <th class='dato'>9</th>
            <th class='dato'>3</th>
        </tr>
        <tr>
            <th class='dato'>96</th>
            <th class='dato'>80</th>
            <th class='dato'>64</th>
            <th class='dato'>50</th>
            <th class='dato'>37</th>
            <th class='dato'>21</th>
            <th class='dato'>10</th>
            <th class='dato'>4</th>
        </tr>
        <tr>
            <th class='dato'>97</th>
            <th class='dato'>81</th>
            <th class='dato'>65</th>
            <th class='dato'>51</th>
            <th style='vertical-align:top' class='dato'>38</th>
            <th  style='vertical-align: sub;text-align:right'  class='dato'>22</th>
            <th class='dato'>11</th>
            <th class='dato'>5</th>
        </tr>
        <tr>
            <th class='dato'>98</th>
            <th class='dato'>82</th>
            <th class='dato'>66</th>
            <th class='dato'>52</th>
            <th class='dato'>39</th>
            <th class='dato'>23</th>
            <th class='dato'>12</th>
            <th class='dato'>6</th>
        </tr>
        <tr>
            <th class='dato'>99</th>
            <th class='dato'>83</th>
            <th class='dato'>67</th>
            <th class='dato'>53</th>
            <th class='dato'>40</th>
            <th class='dato'>24</th>
            <th class='dato'>13</th>
            <!-- <th class='dato'>6</th> -->
        </tr>
        <tr>
            <th class='dato'>100</th>
            <th class='dato'>84</th>
            <th class='dato'>68</th>
            <th class='dato'>54</th>
            <th class='dato'>41</th>
            <th class='dato'>25</th>
            <th class='dato'>14</th>
        </tr>
        <tr>
            <th  style='vertical-align: sub' class='dato'>101</th>
            <th  style='vertical-align: sub' class='dato'>85</th>
            <th  style='vertical-align: sub' class='dato'>69</th>
            <th class='dato'>55</th>
            <th class='dato'>42</th>
            <th class='dato'>26</th>
            <th class='dato'>15</th>
        </tr>  
        <tr>
            <th class='dato'>102</th>
            <th class='dato'>86</th>
            <th class='dato'>70</th>
            <th class='dato'>56</th>
            <th class='dato'></th>
            <th class='dato'>27</th>
            <th class='dato'>16</th>
        </tr>

        <tr>
            <th class='dato'>103</th>
            <th class='dato'>87</th>
            <th class='dato'>71</th>
            <th class='dato'></th>
            <th class='dato'></th>
            <th class='dato'>28</th>
            <th class='dato'>17</th>
        </tr>

        <tr>
            <th class='dato'>104</th>
            <th class='dato'>88</th>
            <th class='dato'>72</th>
            <th class='dato'></th>
            <th class='dato'></th>
            <th class='dato'>29</th>
        </tr>

        <tr>
            <th class='dato'>105</th>
            <th class='dato'>89</th>
            <th class='dato'>73</th>
            <th   style='vertical-align: bottom' class='dato'>57</th>
            <th  style='vertical-align:bottom' class='dato'>43</th>
            <th class='dato'>30</th>
        </tr>

        <tr>
            <th class='dato'>106</th>
            <th class='dato'>90</th>
            <th class='dato'>74</th>
            <th class='dato'>58</th>
            <th class='dato'>44</th>
            <th class='dato'>31</th>
        </tr>
        <tr>
            <th class='dato'>107</th>
            <th class='dato'>91</th>
            <th class='dato'>75</th>
            <th class='dato'>59</th>
            <th class='dato'>45</th>
            <th class='dato'>32</th>
        </tr>
        <!-- <tr>
            <th class='dato'>108</th>
            <th class='dato'>92</th>
            <th class='dato'>76</th>
            <th class='dato'>60</th>
            <th class='dato'>46</th>
            <th class='dato'>33</th>
        </tr> -->

    </table>
    </div>

    <div id='lista-div'>
        <div class="alert alert-primary" role="alert">
             Zonas de Pesca
        </div>
        <div id='lista'>
        </div>
    </div>

    <div>
              
              <button id='btn-6' class='boton-finalizar btn btn-primary'>Finalizar encuesta</button>
    </div>

<script>

  // jQuery
$('#tabla').on('click', '.dato',e =>{
   let data=e.target;

  if(data.classList[1]!='color')
  {

    data.classList.add('color');
   data.classList.add('tra');

  }
  else{
    data.classList.remove('color');
   data.classList.remove('tra');
  }

  let numeros =document.querySelectorAll('.dato')

  // console.log(numeros)

  let array=[]
  for(let i=0;i<107;i++)
  {
    console.log(numeros[i].classList)
    if(numeros[i].classList[1]=='color')
    {
      array.push(numeros[i].innerHTML)
    }
  }
  let campo=''
  // console.log(array.length)
  for(let i=0;i<array.length;i++)
  {
    campo=campo+`<div class="label alert alert-secondary" role="alert">
    ${array[i]}
</div>
 `
    
  }
  // console.log(campo)
  $('#lista').html(campo)


});  




   


</script>




</body>
</html>


<!-- var coord = {lat:-13.8235346 ,lng: -76.3551179}; -->