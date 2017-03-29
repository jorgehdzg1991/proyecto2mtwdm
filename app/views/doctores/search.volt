<div class="row">
    <nav>
        <ul class="pager">
            <li class="previous">{{ link_to("doctores/index", "Go Back") }}</li>
            <li class="next">{{ link_to("doctores/new", "Create ") }}</li>
        </ul>
    </nav>
</div>

<div class="page-header">
    <h1>Search result</h1>
</div>

{{ content() }}

<div class="row">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id</th>
            <th>Personas</th>
            <th>Especialidad</th>
            <th>Configuraciones</th>
            <th>Credenciales</th>

                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        {% if page.items is defined %}
        {% for doctore in page.items %}
            <tr>
                <td>{{ doctore.getId() }}</td>
            <td>{{ doctore.getPersonasId() }}</td>
            <td>{{ doctore.getEspecialidad() }}</td>
            <td>{{ doctore.getConfiguracionesId() }}</td>
            <td>{{ doctore.getCredencialesId() }}</td>

                <td>{{ link_to("doctores/edit/"~doctore.getId(), "Edit") }}</td>
                <td>{{ link_to("doctores/delete/"~doctore.getId(), "Delete") }}</td>
            </tr>
        {% endfor %}
        {% endif %}
        </tbody>
    </table>
</div>

<div class="row">
    <div class="col-sm-1">
        <p class="pagination" style="line-height: 1.42857;padding: 6px 12px;">
            {{ page.current~"/"~page.total_pages }}
        </p>
    </div>
    <div class="col-sm-11">
        <nav>
            <ul class="pagination">
                <li>{{ link_to("doctores/search", "First") }}</li>
                <li>{{ link_to("doctores/search?page="~page.before, "Previous") }}</li>
                <li>{{ link_to("doctores/search?page="~page.next, "Next") }}</li>
                <li>{{ link_to("doctores/search?page="~page.last, "Last") }}</li>
            </ul>
        </nav>
    </div>
</div>
