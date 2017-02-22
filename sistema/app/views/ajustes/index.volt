<div class="row">
    <form class="col-xs-12 col-lg-4">
        {{ form('ajustes/index', 'class': 'form-horizontal', 'id': 'frmTest') }}

        <div class="form-group">
            <label for="txtEmail">Email</label>
            {{ email_field('id': 'txtEmail', 'class': 'form-control') }}
        </div>

        <div class="form-group">
            <label for="txtPassword">Email</label>
            <input type="password" id="txtPassword" class="form-control">
        </div>

        <button class="btn btn-primary">Enviar</button>

        </form>
    </div>
</div>