    <?php
        include('loader.php');
        loadTemplateView();
    ?>
<main class="content">
    <a class="btn btn-lg btn-primary mb-3"
        href="">Produzir Embreagem</a>

    <table class="table table-bordered table-striped table-hover">
        <thead>
            <th>Nome</th>
            <th>Quantidade</th>
            <th>Status</th>
            <th>Concluir</th>
        </thead>
        <tbody>
                <tr>
                    <td>Embreagem Volvo 429231HS</td>
                    <td>1</td>
                    <td>em produção</td>
                    <td>
					<a href="" 
                            class="btn btn-success rounded-circle mr-2">
                            <i class="icofont-check"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>Embreagem Mercedes GAS214212</td>
                    <td>2</td>
                    <td>concluído</td>
                    <td>
					
                    </td>
                </tr>
        </tbody>
    </table>
</main>