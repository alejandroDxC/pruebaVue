<html>
    <title> APP WEB</title>
    <head>
    
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.1/axios.js"> </script>
  <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


  <body>
  
  <div id="app" >
    <div class="formRegistro">
      <div class="logo"></div>
      <div class="logo">
      <hr />
      <div class="nombre">ALejando Estos son tus datos</div>

      <div class="espacionombreform"></div>
   

        <label for="nombre"><div class="nombreInput">Nombre Completo</div></label>
        <input type='text' id="nombre" name="nombre" value="" class="input" required /> 
       
        <br />

        <label for="tipoid"><div class="nombreInput"> Identificación </div></label>
        <select id="tipoid" name="tipoid" value="" class="input" required >
          <option value="CC">Cedula de ciudadania</option>
        </select>

        <br />

        <label for="numeroid"><div class="nombreInput"> Numero de identificación</div></label>
        <input type='text' id="numeroid" name="numeroid" value="" class="input" required />
        
         <br />

        <label for="fecha"><div class="nombreInput">Fecha De Nacimiento</div></label>
        <input type='date' id="fecha" name="fecha" value="" class="input" required /> 
        
        <br />
<br />
       <input type="checkbox" id="acepto" name="acepto" required/>
        <label for="acepto" class="nombreInput">  Acepto terminos y condiciones </label>

         <br />     
        <br />
        <button @click="enviar"  value=""  class="enviar">      Actualizar datos   </button>

    </div>

  </div>
</div>
  <script>


    let app = new Vue ({
        el: "#app",
  data: {
    
    nombre:"",
    tipoid:"",
    numeroid:"",
    fecha:"",
    acepto:""

  },

  methods:{

enviar:function() {

  this.nombre = document.getElementById('nombre').value,
  this.tipoid = document.getElementById('tipoid').value,
  this.numeroid = document.getElementById('numeroid').value
  this.fecha = document.getElementById('fecha').value
  this.acepto = document.getElementById('acepto').value 


  this.altaUsuario();

},
altaUsuario:function(){
  
  let headers = {
            "Access-Control-Allow-Headers" : "Content-Type",
            "Access-Control-Allow-Origin: *":'*',
            "Access-Control-Allow-Methods": "POST"
        } 
     

  
  axios.post('http://localhost/pruebaAlejandro/php/crud.php',{nombre:this.nombre,tipoid:this.tipoid,numeroid:this.numeroid,fecha:this.fecha,acepto:this.acepto},headers).then(response => {

      if(response.statusText === "OK")
      Swal({
          icon: 'success',
          title: 'registro guardado con exito',
          text: 'el registro a quedado guardado con exito!',
      });


  }).catch(error => {
    
  });
},
  }
})  ;
</script>

<style>
#app {
  font-family: Signika;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
@font-face {
  font-family: "signika-bold";
  src: url("./assets/fonts/Signika-Bold.ttf");
}

@font-face {
  font-family: "signika-light";
  src: url("./assets/fonts/Signika-Light.ttf");
}

.formRegistro {
  background-image: url("./assets/background-sky.svg");
  background-repeat: no-repeat;
  width: 21%;
  margin: 6rem 46rem;
  padding: 1rem;
  border: 3px solid #000;
   background-size: 100% 100%;
     background-size: cover;

}


.nombre {
  font-family: signika-bold;
   margin: 0px 91px 0px 0px;
}


.nombreInput {
  font-family: signika-light;
   margin: 18px 0px 0px 0px;
}

hr {
 width: 84%;
 margin: 9px 0px;
}

.logo {
  padding: 3rem;
}
.espacionombreform {
  padding: 2rem;
}
input[type=text],input[type=date],
select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #000;
  border-radius: 34px;
  box-sizing: border-box;
    background-color  : #95bfcb;
  color: white;
}
 
.enviar{
 background-color: #c39b52;
 font-family: signika-bold;
  border: none;
  border-radius: 32px;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}

</style>

  </body>  
</html>