
    <?php
        include('loader.php');
        loadTemplateView();
    ?>
<main class="content">
    <a class="btn btn-lg btn-primary mb-3"
        href="">Cadastrar Peça</a>

    <table class="table table-bordered table-striped table-hover">
        <thead>
            <th>Nome</th>
            <th>Fornecedor</th>
            <th>Quantidade</th>
            <th>Alterar</th>
        </thead>
        <tbody>
                <tr>
                    <td>Platô</td>
                    <td>Empresa 1</td>
                    <td>12</td>
                    <td>
                        <a href=""
                            class="btn btn-warning rounded-circle">
                            <i class="icofont-edit"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>Cilindro</td>
                    <td>Empresa 2</td>
                    <td>7</td>
                    <td>
                        <a href="templates/modal.php"
                            class="btn btn-warning rounded-circle">
                            <i class="icofont-edit"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>Platô</td>
                    <td>Empresa 1</td>
                    <td>12</td>
                    <td>
                        <a href=""
                            class="btn btn-warning rounded-circle">
                            <i class="icofont-edit"></i>
                        </a>
                    </td>
                </tr>
        </tbody>
    </table>
</main>