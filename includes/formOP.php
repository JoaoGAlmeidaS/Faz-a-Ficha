<!-- TEM QUE COLOCAR O MODELO PRO BANCO RECEBER EM ALGUM LUGAR -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="assets/js/main.js"></script>
<link rel="stylesheet" href="assets/css/main.css">


<div class="ficha container">
    <form method="POST">
        <div class="row g-3">
            <div class="col-6">
                <div class="p-3 border opForm">
                    <h2 class="text-center ordemParanormal">Detalhes Principais</h2>
                    <div class="input-group flex-nowrap mb-1">
                        <span class="input-group-text font3" id="addon-wrapping" title="O nome do Usuário">Jogador</span>
                        <input class="form-control font3" type="text" value="<?php echo $usuarioLogado['login'] ?>" readonly name="jogador" required>
                    </div>

                    <div class="input-group">
                        <div class="col-auto">
                        <span class="input-group-text font3" title="O nome do seu personagem">Personagem</span>
                        </div>
                        <div class="col-7">
                        <input type="text" placeholder="Nome" class="form-control font3" name="nome" >
                        </div>
                        <div class="col-2 mb-1">
                        <input type="number" placeholder="NEX" class="form-control font3" name="nex" >
                        </div>
                        <div class="col-auto">
                        <span class="input-group-text font3">%</span>
                        </div>
                    </div>

                    <div class="input-group flex-nowrap mb-1">
                        <span class="input-group-text font3" id="addon-wrapping" title="O seu passado">Origem</span>
                        <input class="form-control font3" type="text" name="origem" placeholder="Origem" >
                    </div>

                    <div class="input-group">                        
                        <span class="input-group-text font3" title="Escolha a Classe do seu Personagem">Classe</span>                       
                        <input class="form-control font3" list="datalistOptions" id="exampleDataList" >
                         <datalist id="datalistOptions">
                            <option value="Mundano(NEX 0%)">
                            <option value="Combatente">
                            <option value="Especialista">
                            <option value="Ocultista">                           
                         </datalist>
                        <span class="input-group-text font3" title="Trilha quando atinge 15% de NEX">Trilha</span>
                        <input type="text" placeholder="Trilha de classe" class="form-control font3" name="trilha">
                    </div>

                    <div class="containera text-white" id="atributos" title="Atributos, clique para editar">
                        <div class='containera mx-auto'>
                            <input required class='atributos for atributos-input hex font2' type='number' min='-10' max='10' value='1' name='forca' title='Força' />
                            <input required class='atributos agi atributos-input hex font2' type='number' min='-10' max='10' value='1' name='agilidade' title='Agilidade' />
                            <input required class='atributos int atributos-input hex font2' type='number' min='-10' max='10' value='1' name='intelecto' title='Intelecto' />
                            <input required class='atributos pre atributos-input hex font2' type='number' min='-10' max='10' value='1' name='presenca' title='Presença' />
                            <input required class='atributos vig atributos-input hex font2' type='number' min='-10' max='10' value='1' name='vigor' title='Vigor' />
                            <img src='assets/img/Atributes.webp' height='512' width='516' alt='Atributos'>
                        </div> 
                    </div>

                </div>
            </div>


            <div class="col-6">
            <div class="p-3 border opForm">
            <div class="d-flex flex-column align-items-center text-center">
                
              
            </div>
            <div class="font3 contadores">
            <h2 class="text-center vermelho" title="O quanto você aguenta de porrada. Se chegar a 0 cai inconsciente e morrendo.">Vida</h2>
                <div class="contadorHP">
                    <button type="button" class="botao-OP" title="Diminui a Vida" onclick="contadorHP(-5)">-5</button>
                    <button type="button" class="botao-OP" title="Diminui a Vida" onclick="contadorHP(-1)">-</button>
                    
                    <input class="vida" type="number" name="vidaAtual" title="Vida Atual" id="vidaAtual" value="0" maxlength="4">
                    <img src="assets/img/Divisor.png" width="20" height="40">
                    <input class="vidaM" type="number" name="vida_maxima" title="Vida Máxima" id="vidaMaxima" maxlength="4" value="1">
                    <button type="button" class="botaomaisOP font3" id="mais" name="mais" onclick="contadorHP(1)">+</button>
                    <button type="button" class="botaomaisOP font3" id="mais" name="mais" onclick="contadorHP(5)">+5</button>
                </div>
                <h2 class="text-center azul" title="O quanto de exposição ao terror mental você aguenta. Se chegar a 0 você começa a Enlouquecer">Sanidade</h2>
                <div class="contadorHP">
                   
                <button type="button" class="botao-OP" title="Diminui a Vida" onclick="contadorSAN(-5)">-5</button>
                    <button type="button" class="botao-OP" title="Diminui a Vida" onclick="contadorSAN(-1)">-</button>
                    
                    <input class="san" type="number" name="vidaAtual" title="Vida Atual" id="vidaAtual" value="0" maxlength="4">
                    <img src="assets/img/Divisor.png" width="20" height="40">
                    <input class="sanM" type="number" name="vida_maxima" title="Vida Máxima" id="vidaMaxima" maxlength="4" value="1">
                    <button type="button" class="botaomaisOP font3" id="mais" name="mais" onclick="contadorSAN(1)">+</button>
                    <button type="button" class="botaomaisOP font3" id="mais" name="mais" onclick="contadorSAN(5)">+5</button>
                </div>

                <h2 class="text-center verde" title="o Quanto de habilidades você consegue usar. Não recebe penalidade com 0.">Pontos de Esforço</h2>
                <div class="contadorHP">
                    
                <button type="button" class="botao-OP" title="Diminui a Vida" onclick="contadorPE(-5)">-5</button>
                    <button type="button" class="botao-OP" title="Diminui a Vida" onclick="contadorPE(-1)">-</button>
                    
                    <input class="pe" type="number" name="vidaAtual" title="Vida Atual" id="vidaAtual" value="0" maxlength="4">
                    <img src="assets/img/Divisor.png" width="20" height="40">
                    <input class="peM" type="number" name="vida_maxima" title="Vida Máxima" id="vidaMaxima" maxlength="4" value="1">
                    <button type="button" class="botaomaisOP font3" id="mais" name="mais" onclick="contadorPE(1)">+</button>
                    <button type="button" class="botaomaisOP font3" id="mais" name="mais" onclick="contadorPE(5)">+5</button>
                </div>

                <h2 class="text-center faixa2" title="Defesa é a DT do seu teste de ataque para acertar">Defesas</h2>
                
                <div class="lista3">
                    
                        <ul class="list-group list-group-light">
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Sua defesa passiva é = 10 + sua Agilidade + modificadores de habilidades, equipamentos e condições.">Passiva</div>                              
                                </div>
                                <span>
                                <input class="defesas" name="passiva" type="number" min='0' max='30' maxlength="3" ></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Reação. Luta somado na Passiva.">Bloqueio</div>                              
                                </div>
                                <span>
                                <input class="defesas" name="bloqueio" type="number" min='0' max='30' maxlength="3" ></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Reação. Reflexo somado na Passiva.">Esquiva</div>                              
                                </div>
                                <span>
                                <input class="defesas" name="esquiva" type="number" min='0' max='30' maxlength="3" ></span>
                            </li>
                </div>
                    
                </div>
            </div>
            </div>

            


            <div class="col-6">
            <div class="p-3 border opForm ">
                    <h2 class="faixa text-center ordemParanormal">Perícias</h2>
                    <div class="mb-1">
                    <div class="lista font3">
                        <ul class="list-group list-group-light">
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold font3" title="Você consegue fazer proezas acrobáticas.">Acrobacia</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="acrobacia" type="number" min='0' max='30' maxlength="3" ></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Você sabe lidar com animais.
Disponível apenas se Treinada.">Adestramento</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="adestramento" type="number" min='0' max='30' maxlength="3" ></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Você sabe se expressar com diversas formas de arte, como música, dança, escrita, pintura, atuação e outras.
Disponível apenas se Treinada." >Artes</div>                                                      
                                </div>
                                <input class="descricao" type="text" name="artes_nome" placeholder="Especificação"> 
                                   
                                <span>+
                                <input class="pericias" name="artes" type="number" min='0' max='30'maxlength="3" ></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Você pode realizar façanhas atléticas.">Atletismo</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="atletismo" type="number" min='0' max='30' maxlength="3"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Você é um conhecedor de assuntos gerais, como política, esporte e entretenimento, e pode responder dúvidas relativas a esses assuntos.">Atualidades</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="atualidades" type="number" min='0' max='30' maxlength="3"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Você estudou diversos campos científicos, como matemática, física, química e biologia, e pode responder dúvidas relativas a esses assuntos.
Disponível apenas se Treinada.">Ciências</div>                                                      
                                </div>
                                <input class="descricao" type="text" name="ciencias_nome" placeholder="Especificação"> 
                                   
                                <span>+
                                <input class="pericias" name="ciencias" type="number" min='0' max='30' maxlength="3"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Você sabe exercer atividades ilícitas. Disponível apenas se Treinada e tem Penalidade de Carga.">Crime</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="crime" type="number" min='0' max='30' maxlength="3"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Você convence pessoas com lábia e argumentação.">Diplomacia</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="diplomacia" type="number" min='0' max='30' maxlength="3"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Você manipula pessoas com blefes e trapaças.">Enganação</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="enganacao" type="number" min='0' max='30' maxlength="3"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Você usa esta perícia para testes de resistência contra efeitos que exigem vitalidade, como doenças e venenos">Fortitude</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="fortitude" type="number" min='0' max='30' maxlength="3"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Você sabe ser discreto e sorrateiro. Penalidade por carga.">Furtividade</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="furtividade" type="number" min='0' max='30'maxlength="3" ></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Esta perícia determina sua velocidade de reação.">Iniciativa</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="iniciativa" type="number" min='0' max='30'maxlength="3" ></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Você pode assustar ou coagir outras pessoas. Todos os usos de Intimidação são efeitos de medo.">Intimidação</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="intimidacao" type="number" min='0' max='30' maxlength="3"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Esta perícia mede sua empatia e “sexto sentido”.">Intuição</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="intuicao" type="number" min='0' max='30' maxlength="3"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Você sabe como descobrir pistas e informações.">Investigação</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="investigacao" type="number" min='0' max='30'maxlength="3" ></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Você usa Luta para fazer ataques corpo a corpo.">Luta</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="luta" type="number" min='0' max='30' maxlength="3"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Você sabe tratar ferimentos, doenças e venenos.">Medicina</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="medicina" type="number" min='0' max='30' maxlength="3"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Você estudou o paranormal. Disponível apenas se Treinada.">Ocultismo</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="ocultismo" type="number" min='0' max='30'maxlength="3" ></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Você nota coisas usando os sentidos.">Percepção</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="percepcao" type="number" min='0' max='30' maxlength="3"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Você sabe operar veículos terrestres e aquáticos, como motos, carros e lanchas. Disponível apenas se Treinada.">Pilotagem</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="pilotagem" type="number" min='0' max='30' maxlength="3"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Você usa Pontaria para fazer ataques à distância.">Pontaria</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="pontaria" type="number" min='0' max='30' maxlength="3"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Você sabe exercer uma profissão específica, como advogado, engenheiro, jornalista ou publicitário.
Disponível apenas se Treinada.">Profissão</div>                              
                                </div>
                                <input class="descricao" type="text" name="artes_nome" placeholder="Especificação"> 
                                   
                                <span>+
                                <input class="pericias" name="profissao" type="number" min='0' max='30'maxlength="3" ></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Você usa esta perícia para testes de resistência contra efeitos que exigem reação rápida, como armadilhas e explosões.">Reflexos</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="reflexos" type="number" min='0' max='30' maxlength="3"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Você possui conhecimento sobre teologia e as diversas religiões do mundo. Disponível apenas se Treinada.">Religião</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="religiao" type="number" min='0' max='30'maxlength="3" ></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Você pode se guiar em regiões selvagens e evitar perigos da natureza.">Sobrevivência</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="sobrevivencia" type="number" min='0' max='30' maxlength="3"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Você recebeu educação militar.">Tática</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="tatica" type="number" min='0' max='30' maxlength="3"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Você possui conhecimentos avançados de eletrônica e informática. Disponível apenas se Treinada.">Tecnologia</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="tecnologia" type="number" min='0' max='30' maxlength="3"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Você usa esta perícia para testes de resistência contra efeitos que exigem determinação, como intimidação 
e rituais que afetam a mente.">Vontade</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="vontade" type="number" min='0' max='30'maxlength="3" ></span>
                            </li>
                            
                            
                        </ul>
                    </div>
                    </div>

                    

                </div>
            </div>


            <div class="col-6">
            <div class="p-3 border opForm ">
                <div>
                    <h2 class="faixa4 text-center ordemParanormal">Resistências a dano</h2>
                    <span class="texto-alto">Física</span>
                    <input name="fisica" class="resistencias" type="number">
                    <span class="texto-alto">Balística</span>
                    <input name="balistica" class="resistencias" type="number">
                </div>
                <div class="bloquinho">
                <span class="destaque">Resistência à insanidade</span>
                </div>
                
                    <input name="resInsanidade" class="resistencias floatLeft" type="number">

                    <div class="barraVertical"></div>
                    <div class="controleR">
                        <span class="texto-alto">Sangue</span>
                        <input name="resSangue" class="resistencias" type="number">
                        <span class="texto-alto">Morte</span>
                        <input name="resMorte" class="resistencias" type="number">
                        <span class="texto-alto">Energia</span>
                        <input name="resEnergia" class="resistencias" type="number">
                        <span class="texto-alto">Conhecimento</span>
                        <input name="resConhecimento" class="resistencias" type="number">
                    </div>
                  
                <div class="inventario">
                    <h1 class="faixa3">Inventário</h1>
                    <div class="tabela">
                    <table class="table table-bordered">
                        <thead>
                            <tr>                           
                            <th scope="col" title="nome do Item">Item</th>
                            <th scope="col" title="breve descrição do item">Descrição</th>
                            <th scope="col" title="o quanto ocupa de espaço">Peso</th>                          
                            </tr>
                        </thead>
                        <tbody>
                            <tr>                            
                            <td><input name="nomeItem" class="input-group itemI" type="text"></td>
                            <td><input name="descItem" class="input-group descricaoI" type="text"></td>
                            <td><input name="pesoItem" class="input-group" type="text"></td>
                            </tr>

                            <tr>                            
                            <td><input name="nomeItem" class="input-group itemI" type="text"></td>
                            <td><input name="descItem" class="input-group descricaoI" type="text"></td>
                            <td><input name="pesoItem" class="input-group" type="text"></td>
                            </tr>

                            <tr>                            
                            <td><input name="nomeItem" class="input-group itemI" type="text"></td>
                            <td><input name="descItem" class="input-group descricaoI" type="text"></td>
                            <td><input name="pesoItem" class="input-group" type="text"></td>
                            </tr>

                            <tr>                            
                            <td><input name="nomeItem" class="input-group itemI" type="text"></td>
                            <td><input name="descItem" class="input-group descricaoI" type="text"></td>
                            <td><input name="pesoItem" class="input-group" type="text"></td>
                            </tr>

                            <tr>                            
                            <td><input name="nomeItem" class="input-group itemI" type="text"></td>
                            <td><input name="descItem" class="input-group descricaoI" type="text"></td>
                            <td><input name="pesoItem" class="input-group" type="text"></td>
                            </tr>

                            <tr>                            
                            <td><input name="nomeItem" class="input-group itemI" type="text"></td>
                            <td><input name="descItem" class="input-group descricaoI" type="text"></td>
                            <td><input name="pesoItem" class="input-group" type="text"></td>
                            </tr>

                            <tr>                            
                            <td><input name="nomeItem" class="input-group itemI" type="text"></td>
                            <td><input name="descItem" class="input-group descricaoI" type="text"></td>
                            <td><input name="pesoItem" class="input-group" type="text"></td>
                            </tr>

                            <tr>                            
                            <td><input name="nomeItem" class="input-group itemI" type="text"></td>
                            <td><input name="descItem" class="input-group " type="text"></td>
                            <td><input name="pesoItem" class="input-group" type="text"></td>
                            </tr>


                        </tbody>
                    </table>
                    </div>
                </div>    

                <div class="lore">
                    <h1 class="faixa3" title="Historia Pessoal e Anotações">História Pessoal</h1>
                    <textarea name="historiaP" class="form-control"rows="28"></textarea>
                </div>
            </div>
    </div>


                <div class="armas">
                    <div class="p-3 border opForm ">
                        <h1 class="faixa5" title="As armas que você tem no seu inventário">Armas</h1>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th scope="col" title="Nome da Arma">Arma</th>
                                <th scope="col" title="Tipo da arma e dano, por exemplo: duas mãos, corpo a corpo e físico etc.">Tipo</th>
                                <th scope="col" title="Caso tenha algum bonus no ataque dessa arma">Ataque</th>
                                <th scope="col" title="O alcance da Arma">Alcance</th>
                                <th scope="col" title="O dano no acerto da Arma">Dano</th>
                                <th scope="col" title="O resultado no dado para o critico e o bonus de dano">Crítico</th>
                                <th scope="col" title="O quanto você tem que gastar para recarregar">Recarga</th>
                                <th scope="col" title="Característica especial da sua Arma">Especial</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>                               
                                <td><input name="nomeArma" class="arma" type="text"></td>
                                <td><input name="descricaoArma" class="descricaoA" type="text"></td>
                                <td><input name="ataqueArma" class="atributoArma" type="text"></td>
                                <td><input name="alcanceArma" class="atributoArma" type="text"></td>
                                <td><input name="danoArma" class="atributoArma" type="text"></td>
                                <td><input name="criticoArma" class="atributoArma" type="text"></td>
                                <td><input name="recargaArma" class="atributoArma" type="text"></td>
                                <td><input name="especialArma" class="atributoArma" type="text"></td>
                                </tr>
                                <tr>
                                <td><input name="nomeArma" class="arma" type="text"></td>
                                <td><input name="descricaoArma" class="descricaoA" type="text"></td>
                                <td><input name="ataqueArma" class="atributoArma" type="text"></td>
                                <td><input name="alcanceArma" class="atributoArma" type="text"></td>
                                <td><input name="danoArma" class="atributoArma" type="text"></td>
                                <td><input name="criticoArma" class="atributoArma" type="text"></td>
                                <td><input name="recargaArma" class="atributoArma" type="text"></td>
                                <td><input name="especialArma" class="atributoArma" type="text"></td>
                                </tr>
                                <tr>                                
                                <td><input name="nomeArma" class="arma" type="text"></td>
                                <td><input name="descricaoArma" class="descricaoA" type="text"></td>
                                <td><input name="ataqueArma" class="atributoArma" type="text"></td>
                                <td><input name="alcanceArma" class="atributoArma" type="text"></td>
                                <td><input name="danoArma" class="atributoArma" type="text"></td>
                                <td><input name="criticoArma" class="atributoArma" type="text"></td>
                                <td><input name="recargaArma" class="atributoArma" type="text"></td>
                                <td><input name="especialArma" class="atributoArma" type="text"></td>
                                </tr>
                                <tr>                                
                                <td><input name="nomeArma" class="arma" type="text"></td>
                                <td><input name="descricaoArma" class="descricaoA" type="text"></td>
                                <td><input name="ataqueArma" class="atributoArma" type="text"></td>
                                <td><input name="alcanceArma" class="atributoArma" type="text"></td>
                                <td><input name="danoArma" class="atributoArma" type="text"></td>
                                <td><input name="criticoArma" class="atributoArma" type="text"></td>
                                <td><input name="recargaArma" class="atributoArma" type="text"></td>
                                <td><input name="especialArma" class="atributoArma" type="text"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    

                </div>

                <div class="ritual">
                 <div class="p-3 border opForm ">
                    <h1 class="faixa5">Habilidades e Rituais
                        <input name="dtRitual" class="DT" type="number">
                        <span class="spanTitulo" title="DT de resistência para seus rituais = 10 + seu limite de PE + sua Presença">DT de Rituais:</span>
                    </h1>

                    <div class="listaRituais">
                        <div class="row mb-3">
                            <div class="col-4">
                                <div class="input-group flex-nowrap mb-1">
                                    <input name="ritual" class="form-control" type="text" placeholder="Nome">
                                </div>

                                <div class="input-group input-group-sm">
                                <span class="input-group-text" title="O elemento (se tiver)">Elemento</span>
                                <input class="form-control" type="text" name="elemento">
                                <span class="input-group-text" title="Duração do Ritual ou Habilidade">Duração</span>
                                <input class="form-control" type="text" name="duracao">
                                </div>

                                <div class="input-group input-group-sm">
                                <span class="input-group-text" title="O alvo do seu Ritual ou Habilidade">Alvo</span>
                                <input class="form-control" type="text" name="alvo">
                                <span class="input-group-text" title="Alcance da Habilidade">Alcance</span>
                                <input class="form-control" type="text" name="alcance">
                                </div>

                                <div class="input-group input-group-sm">
                                <span class="input-group-text" title="Custo de Pontos de Esforço necessários">PE</span>
                                <input class="form-control" type="text" name="peHR">
                                <span class="input-group-text" title="O Círculo do Ritual">Círculo</span>
                                <input class="form-control" type="text" name="circulo">
                                <span class="input-group-text" title="Página do Ritual ou Habilidade (se tiver)">Página</span>
                                <input class="form-control" type="text" name="pagina">
                                </div>


                            </div>

                            <div class="col-8">
                                <textarea name="descricaoHR" class="descricaoHR" rows="6" title="Descrição de Ritual"></textarea>
                            </div>
                        </div>
                        

                        <div class="row mb-3">
                            <div class="col-4">
                                <div class="input-group flex-nowrap mb-1">
                                    <input name="ritual" class="form-control" type="text" placeholder="Nome">
                                </div>

                                <div class="input-group input-group-sm">
                                <span class="input-group-text" title="O elemento (se tiver)">Elemento</span>
                                <input class="form-control" type="text" name="elemento">
                                <span class="input-group-text" title="Duração do Ritual ou Habilidade">Duração</span>
                                <input class="form-control" type="text" name="duracao">
                                </div>

                                <div class="input-group input-group-sm">
                                <span class="input-group-text" title="O alvo do seu Ritual ou Habilidade">Alvo</span>
                                <input class="form-control" type="text" name="alvo">
                                <span class="input-group-text" title="Alcance da Habilidade">Alcance</span>
                                <input class="form-control" type="text" name="alcance">
                                </div>

                                <div class="input-group input-group-sm">
                                <span class="input-group-text" title="Custo de Pontos de Esforço necessários">PE</span>
                                <input class="form-control" type="text" name="peHR">
                                <span class="input-group-text" title="O Círculo do Ritual">Círculo</span>
                                <input class="form-control" type="text" name="circulo">
                                <span class="input-group-text" title="Página do Ritual ou Habilidade (se tiver)">Página</span>
                                <input class="form-control" type="text" name="pagina">
                                </div>


                            </div>

                            <div class="col-8">
                                <textarea name="descricaoHR" class="descricaoHR" rows="6" title="Descrição de Ritual"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-4">
                                <div class="input-group flex-nowrap mb-1">
                                    <input name="ritual" class="form-control" type="text" placeholder="Nome">
                                </div>

                                <div class="input-group input-group-sm">
                                <span class="input-group-text" title="O elemento (se tiver)">Elemento</span>
                                <input class="form-control" type="text" name="elemento">
                                <span class="input-group-text" title="Duração do Ritual ou Habilidade">Duração</span>
                                <input class="form-control" type="text" name="duracao">
                                </div>

                                <div class="input-group input-group-sm">
                                <span class="input-group-text" title="O alvo do seu Ritual ou Habilidade">Alvo</span>
                                <input class="form-control" type="text" name="alvo">
                                <span class="input-group-text" title="Alcance da Habilidade">Alcance</span>
                                <input class="form-control" type="text" name="alcance">
                                </div>

                                <div class="input-group input-group-sm">
                                <span class="input-group-text" title="Custo de Pontos de Esforço necessários">PE</span>
                                <input class="form-control" type="text" name="peHR">
                                <span class="input-group-text" title="O Círculo do Ritual">Círculo</span>
                                <input class="form-control" type="text" name="circulo">
                                <span class="input-group-text" title="Página do Ritual ou Habilidade (se tiver)">Página</span>
                                <input class="form-control" type="text" name="pagina">
                                </div>


                            </div>

                            <div class="col-8">
                                <textarea name="descricaoHR" class="descricaoHR" rows="6" title="Descrição de Ritual"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-4">
                                <div class="input-group flex-nowrap mb-1">
                                    <input name="ritual" class="form-control" type="text" placeholder="Nome">
                                </div>

                                <div class="input-group input-group-sm">
                                <span class="input-group-text" title="O elemento (se tiver)">Elemento</span>
                                <input class="form-control" type="text" name="elemento">
                                <span class="input-group-text" title="Duração do Ritual ou Habilidade">Duração</span>
                                <input class="form-control" type="text" name="duracao">
                                </div>

                                <div class="input-group input-group-sm">
                                <span class="input-group-text" title="O alvo do seu Ritual ou Habilidade">Alvo</span>
                                <input class="form-control" type="text" name="alvo">
                                <span class="input-group-text" title="Alcance da Habilidade">Alcance</span>
                                <input class="form-control" type="text" name="alcance">
                                </div>

                                <div class="input-group input-group-sm">
                                <span class="input-group-text" title="Custo de Pontos de Esforço necessários">PE</span>
                                <input class="form-control" type="text" name="peHR">
                                <span class="input-group-text" title="O Círculo do Ritual">Círculo</span>
                                <input class="form-control" type="text" name="circulo">
                                <span class="input-group-text" title="Página do Ritual ou Habilidade (se tiver)">Página</span>
                                <input class="form-control" type="text" name="pagina">
                                </div>


                            </div>

                            <div class="col-8">
                                <textarea name="descricaoHR" class="descricaoHR" rows="6" title="Descrição de Ritual"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-4">
                                <div class="input-group flex-nowrap mb-1">
                                    <input name="ritual" class="form-control" type="text" placeholder="Nome">
                                </div>

                                <div class="input-group input-group-sm">
                                <span class="input-group-text" title="O elemento (se tiver)">Elemento</span>
                                <input class="form-control" type="text" name="elemento">
                                <span class="input-group-text" title="Duração do Ritual ou Habilidade">Duração</span>
                                <input class="form-control" type="text" name="duracao">
                                </div>

                                <div class="input-group input-group-sm">
                                <span class="input-group-text" title="O alvo do seu Ritual ou Habilidade">Alvo</span>
                                <input class="form-control" type="text" name="alvo">
                                <span class="input-group-text" title="Alcance da Habilidade">Alcance</span>
                                <input class="form-control" type="text" name="alcance">
                                </div>

                                <div class="input-group input-group-sm">
                                <span class="input-group-text" title="Custo de Pontos de Esforço necessários">PE</span>
                                <input class="form-control" type="text" name="peHR">
                                <span class="input-group-text" title="O Círculo do Ritual">Círculo</span>
                                <input class="form-control" type="text" name="circulo">
                                <span class="input-group-text" title="Página do Ritual ou Habilidade (se tiver)">Página</span>
                                <input class="form-control" type="text" name="pagina">
                                </div>


                            </div>

                            <div class="col-8">
                                <textarea name="descricaoHR" class="descricaoHR" rows="6" title="Descrição de Ritual"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-4">
                                <div class="input-group flex-nowrap mb-1">
                                    <input name="ritual" class="form-control" type="text" placeholder="Nome">
                                </div>

                                <div class="input-group input-group-sm">
                                <span class="input-group-text" title="O elemento (se tiver)">Elemento</span>
                                <input class="form-control" type="text" name="elemento">
                                <span class="input-group-text" title="Duração do Ritual ou Habilidade">Duração</span>
                                <input class="form-control" type="text" name="duracao">
                                </div>

                                <div class="input-group input-group-sm">
                                <span class="input-group-text" title="O alvo do seu Ritual ou Habilidade">Alvo</span>
                                <input class="form-control" type="text" name="alvo">
                                <span class="input-group-text" title="Alcance da Habilidade">Alcance</span>
                                <input class="form-control" type="text" name="alcance">
                                </div>

                                <div class="input-group input-group-sm">
                                <span class="input-group-text" title="Custo de Pontos de Esforço necessários">PE</span>
                                <input class="form-control" type="text" name="peHR">
                                <span class="input-group-text" title="O Círculo do Ritual">Círculo</span>
                                <input class="form-control" type="text" name="circulo">
                                <span class="input-group-text" title="Página do Ritual ou Habilidade (se tiver)">Página</span>
                                <input class="form-control" type="text" name="pagina">
                                </div>


                            </div>

                            <div class="col-8">
                                <textarea name="descricaoHR" class="descricaoHR" rows="6" title="Descrição de Ritual"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-4">
                                <div class="input-group flex-nowrap mb-1">
                                    <input name="ritual" class="form-control" type="text" placeholder="Nome">
                                </div>

                                <div class="input-group input-group-sm">
                                <span class="input-group-text" title="O elemento (se tiver)">Elemento</span>
                                <input class="form-control" type="text" name="elemento">
                                <span class="input-group-text" title="Duração do Ritual ou Habilidade">Duração</span>
                                <input class="form-control" type="text" name="duracao">
                                </div>

                                <div class="input-group input-group-sm">
                                <span class="input-group-text" title="O alvo do seu Ritual ou Habilidade">Alvo</span>
                                <input class="form-control" type="text" name="alvo">
                                <span class="input-group-text" title="Alcance da Habilidade">Alcance</span>
                                <input class="form-control" type="text" name="alcance">
                                </div>

                                <div class="input-group input-group-sm">
                                <span class="input-group-text" title="Custo de Pontos de Esforço necessários">PE</span>
                                <input class="form-control" type="text" name="peHR">
                                <span class="input-group-text" title="O Círculo do Ritual">Círculo</span>
                                <input class="form-control" type="text" name="circulo">
                                <span class="input-group-text" title="Página do Ritual ou Habilidade (se tiver)">Página</span>
                                <input class="form-control" type="text" name="pagina">
                                </div>


                            </div>

                            <div class="col-8">
                                <textarea name="descricaoHR" class="descricaoHR" rows="6" title="Descrição de Ritual"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-4">
                                <div class="input-group flex-nowrap mb-1">
                                    <input name="ritual" class="form-control" type="text" placeholder="Nome">
                                </div>

                                <div class="input-group input-group-sm">
                                <span class="input-group-text" title="O elemento (se tiver)">Elemento</span>
                                <input class="form-control" type="text" name="elemento">
                                <span class="input-group-text" title="Duração do Ritual ou Habilidade">Duração</span>
                                <input class="form-control" type="text" name="duracao">
                                </div>

                                <div class="input-group input-group-sm">
                                <span class="input-group-text" title="O alvo do seu Ritual ou Habilidade">Alvo</span>
                                <input class="form-control" type="text" name="alvo">
                                <span class="input-group-text" title="Alcance da Habilidade">Alcance</span>
                                <input class="form-control" type="text" name="alcance">
                                </div>

                                <div class="input-group input-group-sm">
                                <span class="input-group-text" title="Custo de Pontos de Esforço necessários">PE</span>
                                <input class="form-control" type="text" name="peHR">
                                <span class="input-group-text" title="O Círculo do Ritual">Círculo</span>
                                <input class="form-control" type="text" name="circulo">
                                <span class="input-group-text" title="Página do Ritual ou Habilidade (se tiver)">Página</span>
                                <input class="form-control" type="text" name="pagina">
                                </div>


                            </div>

                            <div class="col-8">
                                <textarea name="descricaoHR" class="descricaoHR" rows="6" title="Descrição de Ritual"></textarea>
                            </div>
                        </div>
                        <input type="hidden" name="acao">
                        <input class="botaoEnviar" type="submit" value="Enviar">
                    </div>

                 </div>
                </div>
                


    </div>
        
    </form>
</div>




<!-- <?php echo $usuarioLogado['login'] ?> -->

</div>

<footer id="sticky-footer" class="flex-shrink-0 py-4 bg-dark text-white-50 ">
    <div class="container text-center">
        <small>Copyright &copy; Your Website</small>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
    integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
</script>
</body>

</html>