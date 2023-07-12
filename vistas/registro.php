<div id='datos' style='display: flex;justify-content:center;margin-top: 30px'>
    <form id='frm'  class='w-75'>
        <h5 style='color:#3B61A8'>DATOS DEL ESPECIALISTA</h5>

        <div class='row mb-3'>
            
           
        </div>
        <div class='row mb-4'>

            <div class='col-sm-12 col-md-8 col-lg-5  mb-4 mb-lg-0'>
                <label for="">Nombres</label><br>
                <input type="text" id="nombres" name='nombres' style='width: 100%'>
                <label class='text-danger ' style='display: none' id="nombres-error">Este campo es requerido</label><br>

            </div>

            <div class='col-sm-12 col-md-8 col-lg-5  mb-4 mb-lg-0'>
                <label for="">Apellidos</label><br>
                <input type="text" id="apellidos" name='apellidos' style='width: 100%'>
                <label class='text-danger ' style='display: none' id="apellidos-error">Este campo es requerido</label><br>

            </div>

            <div class='col-sm-12 col-md-8 col-lg-2  mb-4 mb-lg-0'>
                <label for="">DNI</label><br>
                <input type="number" id="rubro" name='rubro' style='width: 100%'>
                <label class='text-danger ' style='display: none' id="rubro-error">Este campo es requerido</label><br>

            </div>
   
        </div>

        <div class='row mb-3'>
            <div class='col-sm-12 col-md-6 col-lg-6  mb-4 mb-lg-0'>
                <label for="">Especialidad y/o profesión</label><br>
                <input type="text" id="especialidad" name='especialidad' style='width: 100%'>
                <label class='text-danger ' style='display: none' id="especialidad-error">Este campo es requerido</label><br>

            </div>

              <div class='col-sm-12 col-md-6 col-lg-6  mb-4 mb-lg-0'>
                <label for="">Entidad de trabajo</label><br>
                <input type="text" id="entidad" name='entidad' style='width: 100%'>
                <label class='text-danger ' style='display: none' id="entidad-error">Este campo es requerido</label><br>

            </div>

           
        </div>

        <div class='row '>

            <div class='col-sm-12 col-md-6 col-lg-6  mb-4 mb-lg-0'>
                <label for="">Región(es) o zona(s) de trabajo con energías renovables</label><br>
                <input type="text" id="region" name='region'  style='width: 100%'>
                <label class='text-danger' style='display: none' id="region-error">Este campo es requerido</label><br>

            </div>
            <div class='col-sm-12 col-md-6 col-lg-6'>
                <label for="">Correo electronico</label><br>
                <input type="text"  id="correo" name='correo'  style='width: 100%'>
                <label class='text-danger'style='display: none' id="correo-error">Este campo es requerido</label><br>

            </div>
        </div><br>
        <!-- <label class='mt-3 text-success'for="">* Campo obligatorio</label><br> -->

        <button id='btn_iniciar_encuesta' class='mt-2 btn btn-primary '>Registrar</button>
    </form>
</div>

