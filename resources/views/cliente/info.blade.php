
  <!-- Modal -->
  <div class="modal fade" id="edit{{$cliente->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">EDITAR CLIENTE</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('home.update',$cliente->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        <div class="modal-body">
            <div class="mb-3">
              <label for="" class="form-label">NOMBRE</label>
              <input type="text"
                class="form-control" name="Nombre" id="" aria-describedby="helpId" placeholder=""value="{{$cliente->Nombre}}">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">TELEFONO</label>
                <input type="text"
                  class="form-control" name="Telefono" id="" aria-describedby="helpId" placeholder=""value="{{$cliente->Telefono}}">
              </div>

              <div class="mb-3">
                <label for="" class="form-label">CORREO</label>
                <input type="email"
                  class="form-control" name="Correo" id="" aria-describedby="helpId" placeholder=""value="{{$cliente->Correo}}">
              </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="delete{{$cliente->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">ELIMINAR CLIENTE</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('home.destroy',$cliente->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('DELETE')
        <div class="modal-body">
            ESTAS SEGURO DE ELIMINAR A </strong> {{$cliente->Nombre}} ?</strong>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Eliminar</button>
        </div>
        </form>
      </div>
    </div>
  </div>
