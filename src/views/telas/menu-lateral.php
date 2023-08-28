<sidebar id="menu-lateral" class="menu-lateral">
    <div class="conteudo-esquerdo">
        <div class="principal">
            <a class="principal__logo" href=""><img src="<?php $_SERVER['DOCUMENT_ROOT']?>/Athernos/src/assets/imgs/logo-teste.png" alt=""></a>
            <section class="usuario">
                <h2 class="principal__title">
                Bem Vindo <br><span class='principal__title--destack'> Admin</span>
                    
                    <!-- <?php echo "Bem vindo " . "<br><span class='principal__title--destack'>" . $_SESSION['nome'] . "</span>"; ?> -->
                </h2>
            </section>
            <nav class="nav-bar">
                <div class="box-nav-bar">
                    <span class="nav-bar__title">
                    <svg class="ico-nav" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="512" height="512"><path d="M23.61,10.836l-1.718-3.592c-.218-.455-.742-.678-1.219-.517l-8.677,2.896L3.307,6.728c-.477-.159-1.001,.062-1.219,.518L.436,10.719c-.477,.792-.567,1.743-.247,2.609,.31,.84,.964,1.491,1.801,1.795l-.006,2.315c0,2.157,1.373,4.065,3.419,4.747l4.365,1.456c.714,.237,1.464,.356,2.214,.356s1.5-.119,2.214-.357l4.369-1.456c2.044-.682,3.418-2.586,3.419-4.738l.006-2.322c.846-.296,1.508-.945,1.819-1.788,.316-.858,.228-1.8-.198-2.5Zm-21.416,.83l1.318-2.763,7.065,2.354-1.62,3.256c-.242,.406-.729,.584-1.174,.436l-5.081-1.695c-.298-.099-.53-.324-.639-.618-.108-.293-.078-.616,.13-.97Zm3.842,8.623c-1.228-.41-2.053-1.555-2.052-2.848l.004-1.65,3.164,1.055c1.346,.446,2.793-.09,3.559-1.372l.277-.555-.004,6.979c-.197-.04-.391-.091-.582-.154l-4.365-1.455Zm11.896-.002l-4.369,1.456c-.19,.063-.384,.115-.58,.155l.004-6.995,.319,.64c.557,.928,1.532,1.46,2.562,1.46,.318,0,.643-.051,.96-.157l3.16-1.053-.004,1.651c0,1.292-.825,2.435-2.052,2.844Zm4-7.645c-.105,.285-.331,.504-.619,.601l-5.118,1.705c-.438,.147-.935-.036-1.136-.365l-1.654-3.322,7.064-2.357,1.382,2.88c.156,.261,.187,.574,.081,.859ZM5.214,5.896c-.391-.391-.391-1.023,0-1.414L9.111,.586c.779-.779,2.049-.779,2.828,0l1.596,1.596c.753-.385,1.738-.27,2.353,.345l2.255,2.255c.391,.391,.391,1.023,0,1.414s-1.023,.391-1.414,0l-2.255-2.255-3.151,3.151c-.195,.195-.451,.293-.707,.293s-.512-.098-.707-.293c-.391-.391-.391-1.023,0-1.414l2.147-2.147-1.53-1.53-3.897,3.896c-.195,.195-.451,.293-.707,.293s-.512-.098-.707-.293Z"/></svg>
                        Produtos
                        <svg style="display:none;" class="svg-cima" xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="512" height="512"><path d="M18,15.5a1,1,0,0,1-.71-.29l-4.58-4.59a1,1,0,0,0-1.42,0L6.71,15.21a1,1,0,0,1-1.42-1.42L9.88,9.21a3.06,3.06,0,0,1,4.24,0l4.59,4.58a1,1,0,0,1,0,1.42A1,1,0,0,1,18,15.5Z"/></svg>
                        <svg class="svg-baixo" xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="512" height="512"><path d="M18.71,8.21a1,1,0,0,0-1.42,0l-4.58,4.58a1,1,0,0,1-1.42,0L6.71,8.21a1,1,0,0,0-1.42,0,1,1,0,0,0,0,1.41l4.59,4.59a3,3,0,0,0,4.24,0l4.59-4.59A1,1,0,0,0,18.71,8.21Z"/></svg>
                    </span>
                    <div class="nav-bar__itens">
                            <a class="nav-bar__item" href="#">Listar Produtos</a></li>
                        <?php //if($_SESSION['nivel'] >= 1){ ?> 
                            <a class="nav-bar__item" href="#">Importar Planilha</a>
                            <a class="nav-bar__item" href="#">Cadastrar Produtos</a>
                            <a class="nav-bar__item" href="#">Entrada de Produtos</a>
                            <a class="nav-bar__item" href="#">Saída de Produtos</a>
                        
                        <!-- <?php //} if($_SESSION['nivel'] >= 2){?> -->
                            <a class="nav-bar__item" href="#">Relatório de Entrada/Saída</a>
                        <!-- <?php //} ?> -->
                    </div>
                </div>
                <div class="box-nav-bar">
                    <!-- <?php //if($_SESSION['nivel'] > 1){ ?> -->
                        <span class="nav-bar__title">
                            <svg class="ico-nav" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="512" height="512"><path d="M12,16a4,4,0,1,1,4-4A4,4,0,0,1,12,16Zm0-6a2,2,0,1,0,2,2A2,2,0,0,0,12,10Zm6,13A6,6,0,0,0,6,23a1,1,0,0,0,2,0,4,4,0,0,1,8,0,1,1,0,0,0,2,0ZM18,8a4,4,0,1,1,4-4A4,4,0,0,1,18,8Zm0-6a2,2,0,1,0,2,2A2,2,0,0,0,18,2Zm6,13a6.006,6.006,0,0,0-6-6,1,1,0,0,0,0,2,4,4,0,0,1,4,4,1,1,0,0,0,2,0ZM6,8a4,4,0,1,1,4-4A4,4,0,0,1,6,8ZM6,2A2,2,0,1,0,8,4,2,2,0,0,0,6,2ZM2,15a4,4,0,0,1,4-4A1,1,0,0,0,6,9a6.006,6.006,0,0,0-6,6,1,1,0,0,0,2,0Z"/></svg>
                            Usuarios
                            <svg class="svg-cima" xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="512" height="512"><path d="M18,15.5a1,1,0,0,1-.71-.29l-4.58-4.59a1,1,0,0,0-1.42,0L6.71,15.21a1,1,0,0,1-1.42-1.42L9.88,9.21a3.06,3.06,0,0,1,4.24,0l4.59,4.58a1,1,0,0,1,0,1.42A1,1,0,0,1,18,15.5Z"/></svg>
                            <svg style="display:none;" class="svg-baixo" xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="512" height="512"><path d="M18.71,8.21a1,1,0,0,0-1.42,0l-4.58,4.58a1,1,0,0,1-1.42,0L6.71,8.21a1,1,0,0,0-1.42,0,1,1,0,0,0,0,1.41l4.59,4.59a3,3,0,0,0,4.24,0l4.59-4.59A1,1,0,0,0,18.71,8.21Z"/></svg>
                        </span>
                        <div class="nav-bar__itens hide">
                            <a class="nav-bar__item" href='Athernos/src/views/telas/listaUsuario.php'>Listar Usuários</a>
                            <a class="nav-bar__item" href='#'>Cadastrar Usuario</a>
                        </div>
                    <!-- <?php //} ?> -->
                </div>
            </nav>
        </div>
        <footer class="footer">
            <div class="box-conta">
                <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="512" height="512"><path d="M12,12A6,6,0,1,0,6,6,6.006,6.006,0,0,0,12,12ZM12,2A4,4,0,1,1,8,6,4,4,0,0,1,12,2Z"/><path d="M12,14a9.01,9.01,0,0,0-9,9,1,1,0,0,0,2,0,7,7,0,0,1,14,0,1,1,0,0,0,2,0A9.01,9.01,0,0,0,12,14Z"/></svg>
                <div class="itens-conta">
                    <a href="">Minha Conta</a>
                    <a href="">Configurações</a>
                </div>
            </div>
    
            
        </footer>
    </div>
    <div class="icon-menu">
        <button id="menu-hamburguer">
            <svg class="svg-esquerda" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="512" height="512"><path d="M11.189,6.707,9.775,5.293,4.482,10.586a2,2,0,0,0,0,2.828l5.293,5.293,1.414-1.414L5.9,12Z"/><path d="M18.189,6.707,16.775,5.293l-6,6a1,1,0,0,0,0,1.414l6,6,1.414-1.414L12.9,12Z"/></svg>
            <svg class="svg-direita" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="512" height="512"><path d="M19.1,10.586,13.811,5.293,12.4,6.707,17.689,12,12.4,17.293l1.415,1.414L19.1,13.414A2,2,0,0,0,19.1,10.586Z"/><path d="M12.811,11.293l-6-6L5.4,6.707,10.689,12,5.4,17.293l1.415,1.414,6-6A1,1,0,0,0,12.811,11.293Z"/></svg>
        </button>
        <a href=""><svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="512" height="512"><path d="M22.829,9.172,18.95,5.293a1,1,0,0,0-1.414,1.414l3.879,3.879a2.057,2.057,0,0,1,.3.39c-.015,0-.027-.008-.042-.008h0L5.989,11a1,1,0,0,0,0,2h0l15.678-.032c.028,0,.051-.014.078-.016a2,2,0,0,1-.334.462l-3.879,3.879a1,1,0,1,0,1.414,1.414l3.879-3.879a4,4,0,0,0,0-5.656Z"/><path d="M7,22H5a3,3,0,0,1-3-3V5A3,3,0,0,1,5,2H7A1,1,0,0,0,7,0H5A5.006,5.006,0,0,0,0,5V19a5.006,5.006,0,0,0,5,5H7a1,1,0,0,0,0-2Z"/></svg></a>
    </div>
</sidebar>