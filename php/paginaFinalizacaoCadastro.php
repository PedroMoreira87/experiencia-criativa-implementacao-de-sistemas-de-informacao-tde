<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/confirmacaoCadastro.css">
    <script src="../js/jquery-3.6.0.js"></script>
    <script src="../js/confirmacaoCadastro.js"></script>
    <title>Confirmação de cadastro - Mad Monkey</title>
</head>
<body>

    <div class="div-logo">

    </div>

    <form method="POST" action="requisicaoFinalizacaoCadastro.php">

        <div class="content-principal content-principal1">
            <div class="content-centralizer content-centralizer1">
                <div class="content content-1">

                    <p>Step 2 of 3</p>
                    <p>Choose the plan that’s right for you</p>
                    <p>Watch all you want. Ad-free.</p>
                    <p>Recommendations just for you.</p>
                    <p>Change or cancel your plan anytime.</p>
                    
                </div>
                <div class="content content-2">

                    <table class="planos" cellspacing='0'>
                        <tr class="primeiro">
                            <td></td>
                            <td class="plano">
                                <input name="plano" type="radio" class="plano-quadro" value='1'></input>
                            </td>
                            <td class="plano">
                                <input name="plano" type="radio" class="plano-quadro" value='2'></input>
                            </td>
                            <td class="plano">
                                <input name="plano" type="radio" class="plano-quadro" value='3'></input>
                            </td>
                        </tr>
                        <tr>
                            <td>Monthly price</td>
                            <td>a</td>
                            <td>a</td>
                            <td>a</td>
                        </tr>
                        <tr>
                            <td>Video quality</td>
                            <td>a</td>
                            <td>a</td>
                            <td>a</td>
                        </tr>
                        <tr>
                            <td>Resolution</td>
                            <td>a</td>
                            <td>a</td>
                            <td>a</td>
                        </tr>
                        <tr class="ultimo">
                            <td>Watch on your TV, computer, mobile phone and tablet</td>
                            <td>a</td>
                            <td>a</td>
                            <td>a</td>
                        </tr>
                
                    </table>
                    
                </div>
                <div class="content content-3">

                    <p>
                        Full HD (1080p), Ultra HD (4K) and HDR availability subject to your internet service and device capabilities.
                        Not all content available in HD, Full HD, Ultra HD or HDR. See Terms of Use for more details.
                    </p>
                    <br>
                    <p>
                        Only people who live with you may use your account. Watch on 4 different devices at the same time with Premium,
                        2 with Standard and 1 with Basic.
                    </p>
                    <button type="button" class="botao" id="botao-continuar-plano">Continuar</button>
                </div>
            </div>
        </div> 

        <div class="content-principal content-principal2">

            <div class="content-centralizer content-centralizer2">

                <p>STEP 3 OF 3</p>
                <p>Set up your credit or debit card.</p>
                <div class="bandeiras">
                    <p>visa</p>
                    <p>masercard</p>
                    <p>amer</p>
                    <p>elo</p>
                    <p>hype</p>
                </div>
                <label>Select CPF or CNPJ:</label>
                <div class="opcoes">
                    <input id="opcao-cpf" type="radio" name="opcao" value="opcao-cpf" checked="checked">
                    <label for="opcao-cpf">CPF</label>
                    <input id="opcao-cnpj" type="radio" name="opcao" value="opcao-cnpj">
                    <label for="opcao-cnpj">CNPJ</label>
                </div>
                <input type="text" placeholder="CPF" name="cpf">
                <input type="text" placeholder="CNPJ" name="cnpj">
                <input type="text" placeholder="Data de nascimento" name="datanascimento">
                <input type="text" placeholder="Nome completo" name="nome">
                <input type="text" placeholder="Número do cartão" name="numerocartao">
                <input type="text" placeholder="Data de expiração (MM/YY)" name="datacartao">
                <input type="text" placeholder="Código de segurança (CVV)" name="codigocartao">
                <label>Select your preferred way to process payment:</label>
                <div class="opcoes">
                    <input type="radio" name="tipocartao" value="credito" checked="checked">
                    <label for="cartao-credito">Crédito</label>
                    <input type="radio" name="tipocartao" value="debito">
                    <label for="cartao-debito">Débito</label>
                </div>
                <div class="ver-plano">
                    <div class="informacoes-plano">
                        <p>BRL45.90/month</p>
                        <p>Premium Plan</p>
                    </div>
                    <p class='mudar-plano'>Change</p>
                </div>

                <p class="text">Cards eligible for both debit and credit transactions may be processed either way.</p>
                <p class="text">
                    By clicking the "Start Membership" button below, you agree to our <a href="#">Terms of Use, Privacy Statement</a>, 
                    that you are over 18, and that Netflix will automatically continue your membership and charge the
                    monthly membership fee (currently BRL45.90) to your payment method until you cancel. You may cancel
                    at any time to avoid future charges. To cancel, go to Account and click "Cancel Membership."
                </p>

                <button class="botao" id="botao-assinatura">Começar assinatura</button>

            </div>

        </div>
    </form>

</body>
</html>