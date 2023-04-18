<form method="POST" action="{{ route('children.store') }}">
    @csrf
    <div>
        <h6 class="mb-0 mt-3">Nome:</h6>
        <input class="form-control" type="text" name="name" id="name" required>
    </div>
    <div>
        <h6 class="mb-0 mt-3">Apelido:</h6>
        <input class="form-control" type="text" name="surname" id="surname" required>
    </div>
    <div>
        <h6 class="mb-0 mt-3">Data de nacemento:</h6>
        <input class="form-control" type="date" name="birth_date" id="birth_date" required>
    </div>
    <div>
        <h6 class="mb-0 mt-3">Curso escolar:</h6>
        <select class="form-control" name="school_year" id="school_year" required>
            <option class="form-control" value="4_EI">4º Educación Infantil</option>
            <option class="form-control" value="5_EI">5º Educación Infantil</option>
            <option class="form-control" value="6_EI">6º Educación Infantil</option>
            <option class="form-control" value="1_EP">1º Educación Primaria</option>
            <option class="form-control" value="2_EP">2º Educación Primaria</option>
            <option class="form-control" value="3_EP">3º Educación Primaria</option>
            <option class="form-control" value="4_EP">4º Educación Primaria</option>
            <option class="form-control" value="5_EP">5º Educación Primaria</option>
            <option class="form-control" value="6_EP">6º Educación Primaria</option>
        </select>
    </div>
    <div>
        <button class="btn btn-success btn-custom px-4 mt-3" type="submit"  style="background-color: #009688;color: white;">
        Engadir fillo
        </button>
    </div>
</form>
