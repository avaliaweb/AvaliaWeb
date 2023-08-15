<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliações/Cadastro</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, #a8a1e3, #584ad9);
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(15px);
            /* border: 2px solid rgba(66, 2, 68, 0.5); */
            padding: 15px;
            border-radius: 15px;
            width: 25%;
        }
        fieldset{
            border: 3px solid #584ad9;
        }
        legend{
            border: 1px solid #584ad9;
            padding: 10px;
            text-align: center;
            background-color: #584ad9;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 85%;
            letter-spacing: 1px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~.labelInput{
            top: -20px;
            font-size: 12px;
            color:#a8a1e3;
        }

        #data_nasc{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }

        #submit{
            background-image: linear-gradient(to right, #a8a1e3, #584ad9);
            width: 100%;
            border: none;
            padding: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right, #9450af, #440255);
        }

        .texto{
            position: relative;
            
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="banco.php" method="POST">
            <fieldset>
                <legend><b>Cadastro</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" autocomplete="off" required> 
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" autocomplete="off" required> 
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required> 
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="confirmsenha" id="confirmsenha" class="inputUser" required> 
                    <label for="confirmsenha" class="labelInput">Confirmação de Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="telefone" id="telefone" class="inputUser" autocomplete="off" required> 
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br>
                <div>
                    <p>Sexo:</p>
                    <input type="radio" id="feminino" name="sexo" value="feminino" required>
                    <label for="feminino">Feminino</label>
                    <input type="radio" id="masculino" name="sexo" value="masculino" required>
                    <label for="masculino">Masculino</label>
                    <input type="radio" id="outro" name="sexo" value="outro" required>
                    <label for="outro">Outro</label>
                    <br><br>
                    <label for="data_nasc"><b>Data de Nascimento:</b></label>
                    <input type="date"  name="data_nasc" id="data_nasc" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" autocomplete="off" required> 
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" autocomplete="off" required> 
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br>
                <div class="inputBox">
                    <p>Já possui uma conta?<a href="TelaLogin.php"> Login</p></a>
                </div>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>