<div class="container-fluid" id="diario">
    <h4>pagina de informes</h4>
    <hr>
    <div class="row g-2">
        <div class="col-4">

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Fecha inicial</label>
                <input type="date" class="form-control form-control-sm" id="exampleFormControlInput1">
            </div>
        </div>
        <div class="col-4">
            <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">Fecha final</label>
                <input type="date" class="form-control form-control-sm" id="exampleFormControlInput2">
            </div>
        </div>


        <div class="col-4">
            <label for="exampleFormControlInput1" class="form-label">Categoria</label>
            <select class="form-select form-select-sm" aria-label="Default select example">
                <option selected>Todas</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
    </div>
    <hr>

    <h4>Resultados</h4>
    <div class="container-fluid" >
        <br>
        <div class="table-responsive">
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
</div>

<!-- cosantruir una consulta que en la fecha actual muestre la sumatoria de las cantidaddes de productos vendidos -->
<!-- factura de venta  -->

<!-- 

SELECT P.nombre as Nombre, sum(V.cantidad) as Cantidad, sum(V.total) AS Total from ventas V INNER join productos P on V.idproducto = P.id GROUP BY V.idproducto order by Cantidad DESC;
 -->