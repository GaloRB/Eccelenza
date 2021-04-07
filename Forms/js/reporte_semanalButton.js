
const buttonCreate = document.getElementById('create');
const buttonRemove = document.getElementById('remove');
const renderApp = document.getElementById('formContainer')

const newForm = () => {
     const formDiv = document.createElement("div");
    formDiv.innerHTML =`              <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputCliente">Cliente</label>
      <input type="text" class="form-control" id="inputCliente" placeholder="Cliente">
    </div>
    <div class="form-group col-md-4">
        <label for="inputMes">Mes</label>
        <select id="inputMes" class="form-control">
          <option selected>Eleguir Mes</option>
          <option>Enero</option>
          <option>Febrero</option>
          <option>Marzo</option>
          <option>Abril</option>
          <option>Mayo</option>
          <option>Junio</option>
          <option>Julio</option>
          <option>Agosto</option>
          <option>Septiembre</option>
          <option>Octubre</option>
          <option>Noviembre</option>
          <option>Diciembre</option>
        </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputNombre">Nombre</label>
      <input type="text" class="form-control" id="inputNombre" placeholder="Nombre">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPlanta">Planta</label>
      <input type="text" class="form-control" id="inputPlanta" placeholder="Planta">
    </div>
    <div class="form-group col-md-4">
      <label for="inputSemana">Semana</label>
      <input type="number" class="form-control" id="inputSemana" placeholder="Semana">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-6">
      <fieldset disabled>
        <label for="inputDate">Fecha</label>
        <input class="form-control" type="text"  id="inputDate" value="${date}">
      </fieldset>
    </div>  
    <div class="form-group col-md-6">
      <label for="inputActividad_Diaria">Actividad Diaria</label>
      <textarea class="form-control" id="inputActividad_Diaria" rows="3"></textarea>
    </div>
      <div class="form-group col-md-6">
      <label for="inputReporte_Problema">¿Sé Reportó Algún Problema?</label>
      <select id="inputReporte_Problema" class="form-control">
        <option selected>No</option>
        <option>Sí</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputTipo_Problema">Tipo de Problema</label>
      <select id="inputTipo_Problema" class="form-control">
        <option selected>Problema...</option>
        <option>Tipo 1</option>
        <option>Tipo 2</option>
        <option>Tipo 3</option>
        <option>Tipo 4</option>
        <option>Tipo 5</option>
        <option>Tipo 6</option>
        <option>Tipo 7</option>
        <option>Tipo 8</option>
        <option>Tipo 9</option>
        <option>Tipo 10</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputNo_Parte">Número de Parte</label>
      <input type="text" class="form-control" id="inputNo_Parte" placeholder="Número de Parte">
    </div>
    <div class="form-group col-md-6">
      <label for="inputNo_Rastreo">Número de Ratreo</label>
      <input type="text" class="form-control" id="inputNo_Rastreo" placeholder="Número de Ratreo">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputAcciones_Correctivas">Acciones Correctivas</label>
      <textarea class="form-control" id="inputAcciones_Correctivas" rows="2"></textarea>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputReporte_Planta">Reportado Por (Planta)</label>
      <select id="inputReporte_Planta" class="form-control">
        <option selected>Seleccionar</option>
        <option>Operador</option>
        <option>Residente</option>
        <option>Eccelenza</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputReporte_Cliente">Reportado a (Cliente)</label>
      <select id="inputReporte_Cliente" class="form-control">
        <option selected>Seleccionar</option>
        <option>Operador</option>
        <option>Residente</option>
        <option>Eccelenza</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputReporte_Estatus_Final">Estatus Final</label>
      <select id="inputReporte_Estatus_Final" class="form-control">
        <option selected>Seleccionar</option>
        <option>Verde</option>
        <option>Amarillo</option>
        <option>Rojo</option>
      </select>
    </div>
    <div class="form-group col-md-12">
      <label for="inputAyuda_Visual">Fotos</label>
      <input type="file" accept=".png,.jpg,.jpeg" class="form-control-file" id="inputAyuda_Visual" aria-describedby="fileHelp">
      <small id="fileHelp" class="form-text text-muted">Solo ".png , .jpg y .jpeg" extención.</small>
  </div> 
  </div> `;
  renderApp.appendChild(formDiv);

}

const removeForm = () => {
    const nodos = document.getElementById("formContainer");
    nodos.removeChild(nodos.childNodes[0]);
};

buttonCreate.addEventListener('click', newForm);
buttonRemove.addEventListener('click', removeForm);