<?php
  include_once('includes/logica/functions.php');
  include_once('includes/logica/conecta.php');
  include_once('includes/componentes/cabecalho.php');
  include_once('includes/componentes/header.php');
?>
<body>
    <main>
        <section>
            <div>
                <h1>Ibovespa hoje</h1>
            </div>
            <div>
                <div class="tradingviewIbov" id="chart"></div>
               
            </div>
        </section>
    </main>
    <script type="text/javascript" src="js/scripts.js" defer></script>
</body>
<?php
    require_once('includes/componentes/footer.php');
?>

