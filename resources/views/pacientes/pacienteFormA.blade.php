<h1>{{ $modo  }} Paciente </h1>
<div class="row">
<div class="form-group col-md-6"> <label for="inputState">Tipo de documento:</label> <select id="inputState" class="form-control"> <option selected>Choose...</option> <option>...</option> </select> </div>

    <br>
    
    <div class="col-6">
    <label for="">Identificacion:</label>
    <input class="form-control"  type="text" name="ApellidoPaterno" value="" id="ApellidoPaterno">
    </div>

    </div>
    <br>
    <div class="row">
    <div class="col-6">
    <label for="">Primer nombre:</label>
    <input class="form-control"  type="text" name="ApellidoPaterno" value="" id="ApellidoPaterno">
    </div>
    <br>
    
    <div class="col-6">
    <label for="">Segundo nombre:</label>
    <input class="form-control"  type="text" name="ApellidoPaterno" value="" id="ApellidoPaterno">
    </div>

    </div>
    <br>

    <div class="row">
    <div class="col-6">
    <label for="">Primer apellido:</label>
    <input class="form-control" type="text" name="Nombre" value=""  id="Nombre">
    </div>

    <br>
    
    <div class="col-6">
    <label for="">Segundo apellido:</label>
    <input class="form-control"  type="text" name="ApellidoPaterno" value="" id="ApellidoPaterno">
    </div>

    <br>

    </div>

    <br>
    <div class="row">
    <div class="col-6">
    <label for="">Fecha de nacimiento:</label>
    <input class="form-control" type="date" name="" value=""  id="Nombre">
    </div>

    <br>
    
    <div class="col-6">
    <label for="">Lugar de nacimiento:</label>
    <input class="form-control"  type="text" name="" value="" id="ApellidoPaterno">
    </div>

    </div>
    <br>
    <div class="row">
    <div class="form-group col-md-6"> <label for="inputState">sexo:</label> <select id="inputState" class="form-control"> <option selected>Choose...</option> <option>...</option> </select> </div>
    <div class="form-group col-md-6"> <label for="inputState">Grupo sanguineo:</label> <select id="inputState" class="form-control"> <option selected>Choose...</option> <option>...</option> </select> </div>


    </div>




    <br>
    <div class="d-flex justify-content-center align-items-center">
    <label for="Enviar"></label>
    <input class="btn btn-primary"  type="submit" value="{{ $modo }} datos">
    </div>

