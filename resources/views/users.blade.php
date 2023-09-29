@include('header')
<div class="container text-center" style="padding-top: 80px">
    <div class="row align-items-center">
        <div class="col align-self-center">
            <h1 class="text-center">Usuários</h1>
            <br>
            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                <label class="btn btn-outline-primary" for="btnradio1">Cadastrar Usuário</label>
            </div>
            <br>
            <br>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <select class="form-select" aria-label="Default select example">
                    <option selected>CPF</option>
                    <option value="1">Nome</option>
                    <option value="2">Cód</option>
                </select>
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col align-self-center" style="padding-top: 30px;">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col" class="col" style="max-width: 40px">Cód.</th>
                    <th scope="col" class="col" style="min-width: 180px" >Nome</th>
                    <th scope="col" class="col" style="max-width: 120px">CPF</th>
                </tr>
                </thead>
                <tbody class="table-group-divider">
                <tr>
                    <th scope="row">1</th>
                    <td><a class="nav-link" href="#">Mark</a></td>
                    <td>0123456789</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td><a class="nav-link" href="#">Jacob</a></td>
                    <td>0123456789</td>

                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td><a class="nav-link" href="#">Larry the Bird</a></td>
                    <td>0123456789</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group me-2" role="group" aria-label="First group">
                    <button type="button" class="btn btn-outline-secondary">Anterior</button>
                    <button type="button" class="btn btn-outline-secondary">1</button>
                    <button type="button" class="btn btn-outline-secondary">2</button>
                    <button type="button" class="btn btn-outline-secondary">3</button>
                    <button type="button" class="btn btn-outline-secondary">4</button>
                    <button type="button" class="btn btn-outline-secondary">Próxima</button>
                </div>
            </div>
        </div>
    </div>
</div>
@include('footer')
