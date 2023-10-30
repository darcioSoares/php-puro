<nav class="container mt-5 p-4 border rounded-3 shadow-sm bg-light">
    <div class="row align-items-center">
        <div class="col">
            <h4>
                Aplicacao PHP
            </h4>
        </div>

        <div class="col text-center">
            <a href="?rota=home">Home</a>
            <span>|</span>
            <a href="?rota=page1">Page 1</a>
            <span>|</span>
            <a href="?rota=page2">Page 2</a>
            <span>|</span>
            <a href="?rota=logout">Logout</a>
        </div>

        <div class="col text-end">
            <span>
                <strong> <?= $_SESSION['usuario']?> </strong>
            </span>
            <span>|</span> <a href="?rota=logout">Logout</a>
        </div>
    </div>
</nav>