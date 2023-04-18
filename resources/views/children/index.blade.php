<div class="col-md-12">
              <div class="tile">
                <h4 class="mb-3">Meus fillos</h4>
                <div class="tile-body">
                  <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="tableUsuarios">
                      <thead>
                        <tr>
                          <th>Nome</th>
                          <th>Apelidos</th>
                          <th>Data de nacemento</th>
                          <th>Curso escolar</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($children as $child)
                        <tr>
                          <td>{{$child->name}}</td>
                          <td>{{$child->surname}}</td>
                          <td>{{$child->birth_date}}</td>
                          <td>{{$child->school_year}}</td>
                          <td>
                            <div class="d-flex">
                              <a href="{{ route('children.edit', $child->id) }}" class="btn btn-sm btn-success text-white rounded-50 d-inline" style="background-color: #009688">Edit</a>
                              <form method="POST" action="{{ route('children.destroy', $child->id) }}" class="d-inline ml-2">
                                  {{ csrf_field() }}
                                  {{ method_field('DELETE') }}
                                  <button type="submit" class="btn btn-sm btn-danger rounded-50" onclick="return confirm('¿Estás seguro de que quieres eliminar este hijo?')"  style="background-color: #C4262E">X</button>
                              </form>
                          </div>
                            </form>
                          </td>
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>