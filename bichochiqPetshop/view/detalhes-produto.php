<?php
include("blades/header.php");
?>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/fonts.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <div class="menu-screen"></div>
    <div class="selected-products">
        <div class="selected-products__button">
            <div class="icon">
                <!-- CODIGO INJETADO POR JAVASCRIPT -->
            </div>
        </div>

        <div class="selected-products__list">
            <div class="selected-products__title">
                <h1>Meu Carrinho</h1>
            </div>
            <div class="selected-products__infos">
                <!-- CODIGO INJETADO POR JAVASCRIPT -->
            </div>
            <div class="selected-products__subtotal">
                <!-- CODIGO INJETADO POR JAVASCRIPT -->
            </div>
        </div>
    </div>

    <div class="login-modal">
        <h1 class="login-modal__title">Login</h1>
        <form class="form">
            <p class="login-account__text">Não tem uma conta? <a href="#" class="login-account__link">Crie sua conta</a>, leva menos de um minuto.</p>
        
            <div class="login-account">
                <div class="login-input">
                    <label class="login-input__label">E-mail</label>    
                    <input type="email" class="login-input__input" />
                </div>
                <div class="login-input">
                    <label class="login-input__label">Senha</label>    
                    <input type="password" class="login-input__input" />
                </div>
            </div>

            <div class="remember">  
                <div class="form-check">
                    <input type="checkbox" id="remember-me">
                    <label for="remember-me">Lembrar de mim</label>
                </div>

                <a href="#">Esqueceu sua senha?</a>
            </div>

            <div class="doLogin-social-media">
                <button type="submit" class="submit-button">Entrar</button>
                <p class="divisory"></p>
                <div class="social-medias">
                    <a href="#">
                        <svg width="22" height="14" viewBox="0 0 22 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22 6H20V4H18V6H16V8H18V10H20V8H22M7 6V8.4H11C10.8 9.4 9.8 11.4 7 11.4C4.6 11.4 2.7 9.4 2.7 7C2.7 4.6 4.6 2.6 7 2.6C8.4 2.6 9.3 3.2 9.8 3.7L11.7 1.9C10.5 0.7 8.9 0 7 0C3.1 0 0 3.1 0 7C0 10.9 3.1 14 7 14C11 14 13.7 11.2 13.7 7.2C13.7 6.7 13.7 6.4 13.6 6H7Z" fill="black"/>
                        </svg>
                    </a>

                    <a href="#">
                        <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.46 2C20.69 2.35 19.86 2.58 19 2.69C19.88 2.16 20.56 1.32 20.88 0.31C20.05 0.81 19.13 1.16 18.16 1.36C17.37 0.5 16.26 0 15 0C12.65 0 10.73 1.92 10.73 4.29C10.73 4.63 10.77 4.96 10.84 5.27C7.27998 5.09 4.10998 3.38 1.99998 0.79C1.62998 1.42 1.41998 2.16 1.41998 2.94C1.41998 4.43 2.16998 5.75 3.32998 6.5C2.61998 6.5 1.95998 6.3 1.37998 6V6.03C1.37998 8.11 2.85998 9.85 4.81998 10.24C4.19071 10.4122 3.53007 10.4362 2.88998 10.31C3.16158 11.1625 3.69351 11.9084 4.41099 12.4429C5.12847 12.9775 5.99543 13.2737 6.88998 13.29C5.37361 14.4904 3.49397 15.1393 1.55998 15.13C1.21998 15.13 0.879978 15.11 0.539978 15.07C2.43998 16.29 4.69998 17 7.11998 17C15 17 19.33 10.46 19.33 4.79C19.33 4.6 19.33 4.42 19.32 4.23C20.16 3.63 20.88 2.87 21.46 2Z" fill="black"/>
                        </svg>
                    </a>

                    <a href="#">
                        <svg width="11" height="20" viewBox="0 0 11 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.11999 3.32003H11V0.14003C10.0897 0.045377 9.17514 -0.00135428 8.25999 2.98641e-05C5.53999 2.98641e-05 3.67999 1.66003 3.67999 4.70003V7.32003H0.609985V10.88H3.67999V20H7.35998V10.88H10.42L10.88 7.32003H7.35998V5.05003C7.35998 4.00003 7.63999 3.32003 9.11999 3.32003Z" fill="black"/>
                        </svg>
                    </a>
                </div>
            </div>
        </form>
    </div>

    <div class="create-account">
        <h1 class="login-modal__title">Cadastrar</h1>
        <form class="form">
            <div class="form-container__create">
                <div class="login-account">
                    <div class="login-input">
                        <label class="login-input__label">Nome</label>    
                        <input type="text" class="login-input__input" />
                    </div>
                    <div class="login-input">
                        <label class="login-input__label">E-mail</label>    
                        <input type="email" class="login-input__input" />
                    </div>
                    <div class="login-input">
                        <label class="login-input__label">Senha</label>    
                        <input type="password" class="login-input__input" />
                    </div>
                    <div class="login-input">
                        <label class="login-input__label">Repitir a senha</label>    
                        <input type="password" class="login-input__input" />
                    </div>
                </div>

                <div class="important-create">
                    <div class="important">
                        <svg width="26" height="28" viewBox="0 0 26 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 17.1747V10.8253C1 8.68932 2.136 6.71465 3.98133 5.63998L9.98133 2.14798C11.8467 1.06265 14.152 1.06265 16.0173 2.14798L22.0173 5.63998C23.864 6.71465 25 8.68932 25 10.8253V17.1747C25 19.3107 23.864 21.2853 22.0187 22.36L16.0187 25.852C14.1533 26.9373 11.848 26.9373 9.98267 25.852L3.98267 22.36C2.136 21.2853 1 19.3107 1 17.1747V17.1747Z" stroke="#1D9BF0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <p>Importante! <br> Preencha todos os dados</p>
                    </div>
                    <button type="submit" class="submit-button" id="cadastrarUsuario">Cadastar</button>
                </div>
            </div>

            <div class="form-container__congratulations">
                <div class="congratulations-dog">
                    <img src="imgs/Petshop_files/congratulations-dog.png" alt="">
                </div>
                <div class="btt-dog amareloOuro"></div>
                <div class="btt-dog-h azul">
                    <p>Cadastrado com sucesso!</p>
                    <p>Bem-vindo ao <span>BichoChic</span></p>
                </div>
                <div class="comeback">
                    <a href="principal.php">Voltar para a home</a>
                </div>
            </div>
        </form>
    </div>

    <!-- css -- 0.0 -->
    <nav class="nav-space">
        <div class="search-navbar__desktop">
            <div class="search-desktop">
                <?php
                    include('blades/search.php');
                ?> 
            </div>

            <div class="navbar-desktop">
                <?php 
                    include('blades/navbar.php');
                ?>
            </div>
        </div>
        
        
        <div class="search-navbar__mobile">
            <div class="search-mobile">
                <?php
                    include('blades/search-mobile.php');
                ?> 
            </div>

            <div class="navbar-mobile">
                <?php 
                    include('blades/navbar-mobile.php');
                ?>
            </div>
        </div>
               
    </nav>

    <!-- css - 0.5 -->
    <header class="carrossel">
        <?php 
            include('blades/carrossel-slide.php');
        ?>
    </header>

    <div class="products-super">
        <div class="super-order">
            <div class="super-order__container">
                <div class="super-links">
                    <a href="principal.php">Home</a>
                    <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.97499 6.00001C6.97499 6.13335 6.94999 6.26268 6.89999 6.38801C6.84999 6.51334 6.78332 6.61735 6.69999 6.70001L2.09999 11.3C1.91665 11.4833 1.68332 11.575 1.39999 11.575C1.11665 11.575 0.883321 11.4833 0.699987 11.3C0.516654 11.1167 0.424988 10.8833 0.424988 10.6C0.424988 10.3167 0.516654 10.0833 0.699987 9.90001L4.59999 6.00001L0.699987 2.10001C0.516654 1.91668 0.424987 1.68335 0.424987 1.40001C0.424987 1.11668 0.516654 0.883347 0.699987 0.700013C0.88332 0.51668 1.11665 0.425012 1.39999 0.425012C1.68332 0.425012 1.91665 0.51668 2.09999 0.700013L6.69999 5.30001C6.79999 5.40001 6.87099 5.50835 6.91299 5.62501C6.95499 5.74168 6.97565 5.86668 6.97499 6.00001Z" fill="#232323"/>
                    </svg>
                    <a href="produtos.php">Produtos</a>
                    <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.97499 6.00001C6.97499 6.13335 6.94999 6.26268 6.89999 6.38801C6.84999 6.51334 6.78332 6.61735 6.69999 6.70001L2.09999 11.3C1.91665 11.4833 1.68332 11.575 1.39999 11.575C1.11665 11.575 0.883321 11.4833 0.699987 11.3C0.516654 11.1167 0.424988 10.8833 0.424988 10.6C0.424988 10.3167 0.516654 10.0833 0.699987 9.90001L4.59999 6.00001L0.699987 2.10001C0.516654 1.91668 0.424987 1.68335 0.424987 1.40001C0.424987 1.11668 0.516654 0.883347 0.699987 0.700013C0.88332 0.51668 1.11665 0.425012 1.39999 0.425012C1.68332 0.425012 1.91665 0.51668 2.09999 0.700013L6.69999 5.30001C6.79999 5.40001 6.87099 5.50835 6.91299 5.62501C6.95499 5.74168 6.97565 5.86668 6.97499 6.00001Z" fill="#232323"/>
                    </svg>
                    <span class="product-name">Petisco Dreamies para Gatos Adultos Sabor Queijo</span>
                </div>
            </div>
        </div>
    </div>

    <section class="containerMax bgAzulGelo">
        <div class="all-container">
            <?php 
                include("blades/details-product.php");
            ?>
            <?php 
                include("blades/you-pet-need.php");
            ?>
        </div>
    </section>
    
    <footer class="footer">
        <?php 
            include('blades/footer-links.php');
        ?>
    </footer>

    <script src="js/carousel.js"></script>
    <script src="js/script.js"></script>
    <script src="js/dropdowns.js"></script>
    <script src="js/menumobile.js"></script>
    <script src="js/foryouAnimals.js"></script>
    <script src="js/petsServices.js"></script>

<?php
    include("blades/footer.php");
?>