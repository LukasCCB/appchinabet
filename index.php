<?php
session_start();

// Verifica se a sessão "logged_in" está definida e é verdadeira
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header("Location: painel");
    exit;
} else {
    // O usuário não está logado, redireciona para a página de login
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Bem-Vindo - App China BET</title>

    <link rel="icon" type="image/png" href="assets/img/favicons/favicon.ico"/>
    <link rel="stylesheet" href="assets/css/old/frontend-lite.min.css?ver=3.13.4">
    <link rel="stylesheet" href="assets/css/old/post-537.css?ver=1688178589">
    <link rel="stylesheet" href="assets/css/old/font-awesome.min.css?ver=4.7.0">
    <link rel="stylesheet" href="assets/css/old/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans&family=DM+Serif+Display&family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Roboto:wght@400;500&display=swap"
        rel="stylesheet">

</head>
<body class="home page-template page-template-elementor_canvas page page-id-537 elementor-default elementor-template-canvas elementor-kit-5 elementor-page elementor-page-537">

<div data-elementor-type="wp-page" data-elementor-id="537" class="elementor elementor-537">
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-67e63b4 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle"
        data-id="67e63b4" data-element_type="section">

        <div class="elementor-background-overlay"></div>
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7bdeb74"
                 data-id="7bdeb74" data-element_type="column">

                <div class="elementor-widget-wrap elementor-element-populated">

                    <div class="elementor-element elementor-element-8d6e32a glitch elementor-widget elementor-widget-text-editor"
                         data-id="8d6e32a" data-element_type="widget" data-text="BEM VINDO AO"
                         data-widget_type="text-editor.default">

                        <div class="elementor-widget-container">
                            Bem Vindo AO
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-596a358 elementor-widget elementor-widget-image"
                         data-id="596a358" data-element_type="widget" data-widget_type="image.default">
                        <div class="elementor-widget-container">

                            <img decoding="async" width="620" height="358"
                                 src="assets/img/logo.png"
                                 class="attachment-full size-full wp-image-6279" alt loading="lazy"
                                 srcset="assets/img/logo.png 620w, assets/img/logo.png 300w"
                                 sizes="(max-width: 620px) 100vw, 620px"/></div>
                    </div>
                    <div class="elementor-element elementor-element-721f43b elementor-widget elementor-widget-text-editor"
                         data-id="721f43b" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                            Insira seu e-mail de acesso
                        </div>
                    </div>

                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-0cc1125 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="0cc1125" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-28a71df"
                                 data-id="28a71df" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">

                                    <!-- FORM START -->
                                    <div class="elementor-element elementor-element-d5ecb0d elementor-button-align-stretch elementor-widget elementor-widget-form"
                                         data-id="d5ecb0d" data-element_type="widget"
                                         data-settings="{&quot;step_next_label&quot;:&quot;Next&quot;,&quot;step_previous_label&quot;:&quot;Previous&quot;,&quot;button_width&quot;:&quot;100&quot;,&quot;step_type&quot;:&quot;number_text&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;}"
                                         data-widget_type="form.default">

                                        <div class="elementor-widget-container">

                                            <form class="elementor-form" method="post" onsubmit="return login(event)">

                                                <div class="elementor-form-fields-wrapper elementor-labels-">
                                                    <div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-100 elementor-field-required">
                                                        <label for="form-field-email"
                                                               class="elementor-field-label elementor-screen-only">
                                                            E-mail </label>

                                                        <input type="email" name="email"
                                                               id="email"
                                                               class="elementor-field elementor-size-md  elementor-field-textual"
                                                               placeholder="Seu e-mail" required="required"
                                                               aria-required="true">

                                                    </div>
                                                    <div class="elementor-field-type-acceptance elementor-field-group elementor-column elementor-field-group-aceite elementor-col-100 elementor-field-required">
                                                        <label for="form-field-aceite"
                                                               class="elementor-field-label elementor-screen-only">
                                                            Termos de uso </label>
                                                        <div class="elementor-field-subgroup">

<span class="elementor-field-option">
<input type="checkbox" name="form_fields[aceite]" id="form-field-aceite"
       class="elementor-field elementor-size-md elementor-acceptance-field" required="required" aria-required="true">
<label for="form-field-aceite">Lí e aceito os <span style="color: #1AAD2E;"><u><b>termos de uso</b></u></span>.</label>
</span>


                                                        </div>
                                                    </div>

                                                    <div class="elementor-field-type-acceptance elementor-field-group elementor-column elementor-field-group-aceite elementor-col-100 elementor-field-required">
                                                        <div id="error-message"
                                                             style="display: none;text-align: center; color:red;"></div>
                                                    </div>

                                                    <div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100 e-form__buttons">
                                                        <button type="submit"
                                                                id="botaologin"
                                                                class="elementor-button elementor-size-sm">
<span>
<span class=" elementor-button-icon">
</span>
<span class="elementor-button-text">ACESSAR</span>
</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- FORM END -->

                                    <div class="elementor-element elementor-element-fe5f497 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                         data-id="fe5f497" data-element_type="widget"
                                         data-widget_type="divider.default">
                                        <div class="elementor-widget-container">

                                            <div class="elementor-divider">
                                                <span class="elementor-divider-separator">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-550221b elementor-widget elementor-widget-text-editor"
                                         data-id="550221b" data-element_type="widget"
                                         data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            AINDA NÃO TESTOU?
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-fbaaff0 elementor-align-justify elementor-mobile-align-justify elementor-widget elementor-widget-button"
                                         data-id="fbaaff0" data-element_type="widget" data-widget_type="button.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-button-wrapper">
                                                <a href="https://api.whatsapp.com/send?phone=5581999691359&text=Desejo%20ter%20acesso%20ao%20aplicativo%20china%20Bet%20%E2%9C%85"
                                                   class="elementor-button-link elementor-button elementor-size-sm"
                                                   role="button"
                                                   target="_blank">
                                                    <span class="elementor-button-content-wrapper">
                                                    <span class="elementor-button-text">SOLICITAR TESTE</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>

            </div>
        </div>
    </section>
</div>


<script src="assets/js/main.js"></script>

</body>
</html>