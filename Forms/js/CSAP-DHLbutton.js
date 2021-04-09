
const buttonCreate = document.getElementById('create');
const buttonRemove = document.getElementById('remove');
const renderApp = document.getElementById('formContainer')

const newForm = () => {
     const formDiv = document.createElement("div");
    formDiv.innerHTML =`<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputLinea">Línea</label>
      <input type="text" class="form-control" id="inputLinea" placeholder="Línea">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEstacion">Estación</label>
      <input type="text" class="form-control" id="inputEstacion" placeholder="Estación">
    </div>
    <div class="form-group col-md-6">
      <label for="inputOperacion">Operación</label>
      <textarea class="form-control" id="inputOperacion" rows="3"></textarea>
    </div>
    <div class="form-group col-md-6">
      <label for="inputLider">Lider</label>
      <input type="text" class="form-control" id="inputLider" placeholder="Lider">
    </div>
    <div class="form-group col-md-4">
      <label for="inputVRT">VRT</label>
      <input type="text" class="form-control" id="inputVRT" placeholder="VRT">
    </div>
    <div class="form-group col-md-4">
      <label for="inputIQ">IQ</label>
      <input type="text" class="form-control" id="inputIQ" placeholder="IQ">
    </div>
    <div class="form-group col-md-4">
      <label for="inputSTA">STA</label>
      <input type="text" class="form-control" id="inputSTA" placeholder="STA">
    </div>
  </div>
  <div class="form-row">
      <div class="form-group col-12">
          <label for="inputTime">Hora de revisión de piezas</label>
          <fieldset disabled>
            <input class="form-control" type="text"  id="inputTime" value=${time}>
          </fieldset>
          <input class="form-control" type="number" placeholder="Piezas"  id="inputPiezas">
      </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputTipo_de_Defecto">Tipo de Defecto</label>
      <input type="text" class="form-control" id="inputTipo_de_Defecto" placeholder="Tipo de Defecto">
    </div>
    <div class="form-group col-md-6">
      <label for="inputAcciones_Correctivas_Inmediatas">Acciones Correctivas Inmediatas</label>
      <textarea class="form-control" id="inputAcciones_Correctivas_Inmediatas" rows="2"></textarea>
  </div>
  </div>     
  <fieldset disabled>
      <div class="form-row">
          <div class="form-group col-12">
              <label for="inputDate">Fecha</label>
              <input class="form-control" type="text"  id="inputDate" value="${date}">
          </div>
      </div>     
  </fieldset>
  <div class="form-row">
    <label for="inputDefecto">Defecto</label>
      <select id="inputDefecto" class="form-control">
        <option selected>Seleccionar</option>
        <option>Operador</option>
        <option>Residente</option>
        <option>Eccelenza</option>
      </select>
    <div class="form-group col-md-6">
      <label for="inputAyuda_Visual">Ayuda Visual</label>
      <input type="file" accept=".png,.jpg,.jpeg" class="form-control-file" id="inputAyuda_Visual" aria-describedby="fileHelp">
      <small id="fileHelp" class="form-text text-muted">Solo ".png , .jpg y .jpeg" extención.</small>
  </div> 
  </div> `;
  renderApp.appendChild(formDiv);

}

const removeForm = () => {
    const nodos = document.getElementById("formContainer");
    nodos.removeChild(nodos.childNodes[0]);
    console.log("hice click")
};

buttonCreate.addEventListener('click', newForm);
buttonRemove.addEventListener('click', removeForm);