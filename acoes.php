<?php
  include_once('includes/logica/functions.php');
  include_once('includes/logica/conecta.php');
  include_once('includes/componentes/cabecalho.php');
  include_once('includes/componentes/header.php');
?>
<body id="ibovespa">
    <main >
        <section id="ibov">
            <div class="titulo">
                <h1>Ibovespa hoje</h1>
            </div>
            <div >
                <div class="tradingviewIbov" id="chart"></div>
               
            </div>
        </section>
    </main>
    <script type="text/javascript" src="js/scripts.js" defer></script>

<?php
    require_once('includes/componentes/footer.php');
?>
</body>
</html>
