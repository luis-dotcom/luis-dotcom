<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" lang="pt-br" >
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PROJECT TWO</title>
        <link rel="stylesheet" href="css/style02.css">
    </head>
    <body>
        <header>
            <div id="logos">
                <img class="img" src="img/logo-estacio-login.png" alt="estacio">
                <nav id="menu">
                    <ul>
                        <li><button id="botao1">Home</button></li>
                        <li><button id="botao1">Configurações</button></li>
                        <li><button id="botao1">Sair</button></li>
                    </ul>
                </nav>
            </div>    
        </header>
        <!--BOX LABORATÓRIOS-->
        <main class="bg-color-white">
            <div class="box-lab">
                <div id="str_lab">
                    <h3>LABORATÓRIOS DE SAÚDE</h3>
                        <div class="ac_box">
                            <div class="ac-box-interno"></div>
                        </div>

                </div>
            </div>
        </main>
                <!--FORMULÁRIO RESERVA-->
    <!--            
                <form action="#" method="post">
                    <fieldset>
                        <fieldset class="grupo">
                            <div class="campo">
                                <label for="nome">Nome</label>
                                <input type="text" id="nome" name="nome" style="width: 10em" value="">
                            </div>
                            <div class="campo">
                                <label for="snome">Sobrenome</label>
                                <input type="text" id="snome" name="snome" style="width: 10em" value="">
                            </div>
                        </fieldset>
        
                        <div class="campo">
                            <label for="email">E-mail</label>
                            <input type="text" id="email" name="email" style="width: 20em" value="">
                        </div>
                        <div class="campo">
                            <label for="telefone">Telefone</label>
                            <input type="text" id="telefone" name="telefone" style="width: 10em" value="">
                        </div>
                        <fieldset class="grupo">
                            <div class="campo">
                                <label for="nome">Data</label>
                                <input type="text" id="nome" name="nome" style="width: 10em" value="">
                            </div>
                            <div class="campo">
                                <label for="snome">Hora</label>
                                <input type="text" id="snome" name="snome" style="width: 10em" value="">
                            </div>
                        </fieldset>
                        <fieldset class="grupo">
                            <div class="campo">
                                <label for="cidade">Turma</label>
                                <input type="text" id="cidade" name="cidade" style="width: 10em" value="">
                            </div>
                        </fieldset>
                
                        <div class="campo">
                            <label for="mensagem">Mensagem</label>
                            <textarea rows="6" style="width: 20em" id="mensagem" name="mensagem"></textarea>
                        </div>
                
                        <div class="campo">
                            <label>
                                <input type="checkbox" name="newsletter" value="1">Termo de responsabilidade
                            </label>
                        </div>
                        <button type="submit" name="submit">Reservar</button>
                    </fieldset>
                </form>
            -->
            
       
    </body>
    <script>
       
    /*SCRIPT PARA CRIAR AS SALAS*/


    window.onload = cBox(1)
    var sum = 0
    function cBox(sum){
    let box = document.getElementById('str_lab')
    for(let i = 0; i < 0; i++){ //LOOP PARA CRIAR AS BOX
        let criarBox = document.createElement('div')
        criarBox.className = 'ac_box'
        box.appendChild(criarBox)
        console.log(criarBox)
        sum += 1
        
        //Criar bloco secundario
        let boxElement1 = document.createElement('div')
        boxElement1.className = 'ac-box-interno'
        criarBox.appendChild(boxElement1)
        let botao = document.createElement('button')
        botao.className = 'btn-lab'
        boxElement1.appendChild(botao)

        //Criar textos
        let text1 = document.createElement('p')
        text1.className = 'text-lab'
        text1.innerHTML = 'LAB 0' + sum //Gerar os números dos LABs        
        let text2 = document.createElement('p')
        text2.innerHTML = 'Status: Disponivel'
        let text3 = document.createElement('p')
        text3.className = 'status'
        botao.appendChild(text1)
        botao.appendChild(text2)
        botao.appendChild(text3)       
    }
        
}


    </script>


</html>
