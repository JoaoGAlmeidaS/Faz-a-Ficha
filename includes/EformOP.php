<!-- TEM QUE COLOCAR O MODELO PRO BANCO RECEBER EM ALGUM LUGAR -->

<link rel="stylesheet" href="assets/css/main.css">


<div class="ficha container">
    <form method="POST">
        <div class="row g-3">
            <div class="col-6">
            
                <div class="p-3 border opForm">
                    
                    <h2 class="text-center ordemParanormal">Detalhes Principais</h2>
                    <div class="input-group flex-nowrap mb-1">
                        <span class="input-group-text font3" title="O nome do Usuário">Jogador</span>
                        <input class="form-control font3" type="text" value="<?php echo $usuarioLogado['login'] ?>" readonly name="jogador" required>
                    </div>

                    <div class="input-group">
                        <div class="col-auto">
                        <span class="input-group-text font3" title="O nome do seu personagem">Personagem</span>
                        </div>
                        <div class="col-7">
                        <input type="text" placeholder="Nome" class="form-control font3" name="nome" value="<?=$obFicha->personagem?>" required>
                        </div>
                        <div class="col-2 mb-1">
                        <input type="number" placeholder="NEX" class="form-control font3" name="nex" value="<?=$obFicha->nivel?>">
                        </div>
                        <div class="col-auto">
                        <span class="input-group-text font3">%</span>
                        </div>
                    </div>

                    <div class="input-group flex-nowrap mb-1">
                        <span class="input-group-text font3" id="addon-wrapping" title="O seu passado">Origem</span>
                        <input class="form-control font3" type="text" name="origem" placeholder="Origem" value="<?=$obFicha->passado?>">
                    </div>

                    <div class="input-group">                        
                        <span class="input-group-text font3" title="Escolha a Classe do seu Personagem">Classe</span>                       
                        <input class="form-control font3" list="datalistOptions" id="exampleDataList" name="classe"value="<?=$obFicha->classe?>">
                         <datalist id="datalistOptions">
                            <option value="Mundano(NEX 0%)">
                            <option value="Combatente">
                            <option value="Especialista">
                            <option value="Ocultista">                           
                         </datalist>
                        <span class="input-group-text font3" title="Trilha quando atinge 15% de NEX">Trilha</span>
                        <input type="text" placeholder="Trilha de classe" class="form-control font3" name="trilha"value="<?=$obFicha->trilha?>">
                    </div>

                    <div class="containera text-white" id="atributos" title="Atributos, clique para editar">
                        <div class='containera mx-auto'>
                            <input required class='atributos for atributos-input hex font2' type='number' min='-10' max='10' value="<?=$obFicha->forca?>" name='forca' title='Força' />
                            <input required class='atributos agi atributos-input hex font2' type='number' min='-10' max='10' value="<?=$obFicha->destreza?>" name='agilidade' title='Agilidade' />
                            <input required class='atributos int atributos-input hex font2' type='number' min='-10' max='10' value="<?=$obFicha->inteligencia?>" name='intelecto' title='Intelecto' />
                            <input required class='atributos pre atributos-input hex font2' type='number' min='-10' max='10' value="<?=$obFicha->carisma?>" name='presenca' title='Presença' />
                            <input required class='atributos vig atributos-input hex font2' type='number' min='-10' max='10' value="<?=$obFicha->constituicao?>" name='vigor' title='Vigor' />
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
                    
                    <input class="vida" type="number" name="vidaAtual" title="Vida Atual" id="vidaAtual" value="<?=$obFicha->vida_atual?>" maxlength="4">
                    <img src="assets/img/Divisor.png" width="20" height="40">
                    <input class="vidaM" type="number" name="vida_maxima" title="Vida Máxima" id="vidaMaxima" maxlength="4" value="<?=$obFicha->vida?>">
                    <button type="button" class="botaomaisOP font3" id="mais" name="mais" onclick="contadorHP(1)">+</button>
                    <button type="button" class="botaomaisOP font3" id="mais" name="mais" onclick="contadorHP(5)">+5</button>
                </div>
                <h2 class="text-center azul" title="O quanto de exposição ao terror mental você aguenta. Se chegar a 0 você começa a Enlouquecer">Sanidade</h2>
                <div class="contadorHP">
                   
                <button type="button" class="botao-OP" title="Diminui a Vida" onclick="contadorSAN(-5)">-5</button>
                    <button type="button" class="botao-OP" title="Diminui a Vida" onclick="contadorSAN(-1)">-</button>
                    
                    <input class="san" type="number" name="sanidadeAtual" title="Sanidade Atual"  value="<?=$obFicha->san_atual?>" maxlength="4">
                    <img src="assets/img/Divisor.png" width="20" height="40">
                    <input class="sanM" type="number" name="sanidadeMaxima" title="Sanidade Máxima"  maxlength="4" value="<?=$obFicha->san?>">
                    <button type="button" class="botaomaisOP font3" id="mais" name="mais" onclick="contadorSAN(1)">+</button>
                    <button type="button" class="botaomaisOP font3" id="mais" name="mais" onclick="contadorSAN(5)">+5</button>
                </div>

                <h2 class="text-center verde" title="o Quanto de habilidades você consegue usar. Não recebe penalidade com 0.">Pontos de Esforço</h2>
                <div class="contadorHP">
                    
                <button type="button" class="botao-OP" title="Diminui a Vida" onclick="contadorPE(-5)">-5</button>
                    <button type="button" class="botao-OP" title="Diminui a Vida" onclick="contadorPE(-1)">-</button>
                    
                    <input class="pe" type="number" name="peAtual" title="PE Atual"  value="<?=$obFicha->pe_atual?>" maxlength="4">
                    <img src="assets/img/Divisor.png" width="20" height="40">
                    <input class="peM" type="number" name="peMaximo" title="PE Máximo"  maxlength="4" value="<?=$obFicha->pe?>">
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
                                <input class="defesas" name="passiva" type="number" min='0' max='30' maxlength="3" value="<?=$obFicha->defesa?>"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Reação. Luta somado na Passiva.">Bloqueio</div>                              
                                </div>
                                <span>
                                <input class="defesas" name="bloqueio" type="number" min='0' max='30' maxlength="3" value="<?=$obFicha->bloqueio?>"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Reação. Reflexo somado na Passiva.">Esquiva</div>                              
                                </div>
                                <span>
                                <input class="defesas" name="esquiva" type="number" min='0' max='30' maxlength="3" value="<?=$obFicha->esquiva?>"></span>
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
                                <input class="pericias" name="acrobacia" type="number" min='0' max='30' maxlength="3" value="<?=$obFicha->acrobacia?>"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Você sabe lidar com animais.
Disponível apenas se Treinada.">Adestramento</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="adestramento" type="number" min='0' max='30' maxlength="3"value="<?=$obFicha->adestramento?>" ></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Você sabe se expressar com diversas formas de arte, como música, dança, escrita, pintura, atuação e outras.
Disponível apenas se Treinada." >Artes</div>                                                      
                                </div>
                                <input class="descricao" type="text" name="artes_nome" placeholder="Especificação" value="<?=$obFicha->artes_desc?>"> 
                                   
                                <span>+
                                <input class="pericias" name="artes" type="number" min='0' max='30'maxlength="3" value="<?=$obFicha->artes?>"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Você pode realizar façanhas atléticas.">Atletismo</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="atletismo" type="number" min='0' max='30' maxlength="3" value="<?=$obFicha->atletismo?>"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Você é um conhecedor de assuntos gerais, como política, esporte e entretenimento, e pode responder dúvidas relativas a esses assuntos.">Atualidades</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="atualidades" type="number" min='0' max='30' maxlength="3" value="<?=$obFicha->historia?>"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Você estudou diversos campos científicos, como matemática, física, química e biologia, e pode responder dúvidas relativas a esses assuntos.
Disponível apenas se Treinada.">Ciências</div>                                                      
                                </div>
                                <input class="descricao" type="text" name="ciencias_nome" placeholder="Especificação" value="<?=$obFicha->ciencias_nome?>"> 
                                   
                                <span>+
                                <input class="pericias" name="ciencias" type="number" min='0' max='30' maxlength="3" value="<?=$obFicha->ciencias?>"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Você sabe exercer atividades ilícitas. Disponível apenas se Treinada e tem Penalidade de Carga.">Crime</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="crime" type="number" min='0' max='30' maxlength="3" value="<?=$obFicha->crime?>"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Você convence pessoas com lábia e argumentação.">Diplomacia</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="diplomacia" type="number" min='0' max='30' maxlength="3" value="<?=$obFicha->diplomacia?>"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Você manipula pessoas com blefes e trapaças.">Enganação</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="enganacao" type="number" min='0' max='30' maxlength="3" value="<?=$obFicha->enganacao?>"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Você usa esta perícia para testes de resistência contra efeitos que exigem vitalidade, como doenças e venenos">Fortitude</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="fortitude" type="number" min='0' max='30' maxlength="3" value="<?=$obFicha->fortitude?>"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Você sabe ser discreto e sorrateiro. Penalidade por carga.">Furtividade</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="furtividade" type="number" min='0' max='30'maxlength="3" value="<?=$obFicha->furtividade?>"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Esta perícia determina sua velocidade de reação.">Iniciativa</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="iniciativa" type="number" min='0' max='30'maxlength="3" value="<?=$obFicha->iniciativa?>"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Você pode assustar ou coagir outras pessoas. Todos os usos de Intimidação são efeitos de medo.">Intimidação</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="intimidacao" type="number" min='0' max='30' maxlength="3" value="<?=$obFicha->intimidacao?>"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Esta perícia mede sua empatia e “sexto sentido”.">Intuição</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="intuicao" type="number" min='0' max='30' maxlength="3" value="<?=$obFicha->intuicao?>"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Você sabe como descobrir pistas e informações.">Investigação</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="investigacao" type="number" min='0' max='30'maxlength="3" value="<?=$obFicha->investigacao?>"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Você usa Luta para fazer ataques corpo a corpo.">Luta</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="luta" type="number" min='0' max='30' maxlength="3" value="<?=$obFicha->luta?>"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Você sabe tratar ferimentos, doenças e venenos.">Medicina</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="medicina" type="number" min='0' max='30' maxlength="3" value="<?=$obFicha->medicina?>"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Você estudou o paranormal. Disponível apenas se Treinada.">Ocultismo</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="ocultismo" type="number" min='0' max='100'maxlength="3" value="<?=$obFicha->arcanismo?>"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Você nota coisas usando os sentidos.">Percepção</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="percepcao" type="number" min='0' max='100' maxlength="3" value="<?=$obFicha->percepcao?>"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Você sabe operar veículos terrestres e aquáticos, como motos, carros e lanchas. Disponível apenas se Treinada.">Pilotagem</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="pilotagem" type="number" min='0' max='100' maxlength="3" value="<?=$obFicha->pilotagem?>"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Você usa Pontaria para fazer ataques à distância.">Pontaria</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="pontaria" type="number" min='0' max='100' maxlength="3" value="<?=$obFicha->pontaria?>"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Você sabe exercer uma profissão específica, como advogado, engenheiro, jornalista ou publicitário.
Disponível apenas se Treinada.">Profissão</div>                              
                                </div>
                                <input class="descricao" type="text" name="profissao_nome" placeholder="Especificação" value="<?=$obFicha->profissao_nome?>"> 
                                   
                                <span>+
                                <input class="pericias" name="profissao" type="number" min='0' max='100'maxlength="3" value="<?=$obFicha->profissao?>"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Você usa esta perícia para testes de resistência contra efeitos que exigem reação rápida, como armadilhas e explosões.">Reflexos</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="reflexos" type="number" min='0' max='100' maxlength="3" value="<?=$obFicha->reflexos?>"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Você possui conhecimento sobre teologia e as diversas religiões do mundo. Disponível apenas se Treinada.">Religião</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="religiao" type="number" min='0' max='100'maxlength="3" value="<?=$obFicha->religiao?>"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Você pode se guiar em regiões selvagens e evitar perigos da natureza.">Sobrevivência</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="sobrevivencia" type="number" min='0' max='100' maxlength="3" value="<?=$obFicha->sobrevivencia?>"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Você recebeu educação militar.">Tática</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="tatica" type="number" min='0' max='100' maxlength="3" value="<?=$obFicha->tatica?>"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Você possui conhecimentos avançados de eletrônica e informática. Disponível apenas se Treinada.">Tecnologia</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="tecnologia" type="number" min='0' max='100' maxlength="3" value="<?=$obFicha->tecnologia?>"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold" title="Você usa esta perícia para testes de resistência contra efeitos que exigem determinação, como intimidação 
e rituais que afetam a mente.">Vontade</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="vontade" type="number" min='0' max='100'maxlength="3" value="<?=$obFicha->vontade?>"></span>
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
                    <input name="fisica" class="resistencias" type="number" value="<?=$obFicha->salvaguarda_con?>">
                    <span class="texto-alto">Balística</span>
                    <input name="balistica" class="resistencias" type="number" value="<?=$obFicha->salvaguarda_des?>">
                </div>
                <div class="bloquinho">
                <span class="destaque">Resistência à insanidade</span>
                </div>
                
                    <input name="resInsanidade" class="resistencias floatLeft" type="number" value="<?=$obFicha->res_insanidade?>">

                    <div class="barraVertical"></div>
                    <div class="controleR">
                        <span class="texto-alto">Sangue</span>
                        <input name="resSangue" class="resistencias" type="number" value="<?=$obFicha->salvaguarda_car?>">
                        <span class="texto-alto">Morte</span>
                        <input name="resMorte" class="resistencias" type="number" value="<?=$obFicha->salvaguarda_for?>">
                        <span class="texto-alto">Energia</span>
                        <input name="resEnergia" class="resistencias" type="number" value="<?=$obFicha->salvaguarda_int?>">
                        <span class="texto-alto">Conhecimento</span>
                        <input name="resConhecimento" class="resistencias" type="number" value="<?=$obFicha->salvaguarda_sab?>">
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
                            <td><input name="nomeItem[]" class="input-group itemI" type="text" value="<?=$nomeItem[0]?>"></td>
                            <td><input name="descItem[]" class="input-group descricaoI" type="text" value="<?=$descItem[0]?>"></td>
                            <td><input name="pesoItem[]" class="input-group" type="text" value="<?=$pesoItem[0]?>"></td>
                            </tr>

                            <tr>                            
                            <td><input name="nomeItem[]" class="input-group itemI" type="text" value="<?=$nomeItem[1]?>"></td>
                            <td><input name="descItem[]" class="input-group descricaoI" type="text" value="<?=$descItem[1]?>"></td>
                            <td><input name="pesoItem[]" class="input-group" type="text" value="<?=$pesoItem[1]?>"></td>
                            </tr>

                            <tr>                            
                            <td><input name="nomeItem[]" class="input-group itemI" type="text" value="<?=$nomeItem[2]?>"></td>
                            <td><input name="descItem[]" class="input-group descricaoI" type="text" value="<?=$descItem[2]?>"></td>
                            <td><input name="pesoItem[]" class="input-group" type="text" value="<?=$pesoItem[2]?>"></td>
                            </tr>

                            <tr>                            
                            <td><input name="nomeItem[]" class="input-group itemI" type="text" value="<?=$nomeItem[3]?>"></td>
                            <td><input name="descItem[]" class="input-group descricaoI" type="text" value="<?=$descItem[3]?>"></td>
                            <td><input name="pesoItem[]" class="input-group" type="text" value="<?=$pesoItem[3]?>"></td>
                            </tr>

                            <tr>                            
                            <td><input name="nomeItem[]" class="input-group itemI" type="text" value="<?=$nomeItem[4]?>"></td>
                            <td><input name="descItem[]" class="input-group descricaoI" type="text" value="<?=$descItem[4]?>"></td>
                            <td><input name="pesoItem[]" class="input-group" type="text" value="<?=$pesoItem[4]?>"></td>
                            </tr>

                            <tr>                            
                            <td><input name="nomeItem[]" class="input-group itemI" type="text" value="<?=$nomeItem[5]?>"></td>
                            <td><input name="descItem[]" class="input-group descricaoI" type="text" value="<?=$descItem[5]?>"></td>
                            <td><input name="pesoItem[]" class="input-group" type="text" value="<?=$pesoItem[5]?>"></td>
                            </tr>

                            <tr>                            
                            <td><input name="nomeItem[]" class="input-group itemI" type="text" value="<?=$nomeItem[6]?>"></td>
                            <td><input name="descItem[]" class="input-group descricaoI" type="text" value="<?=$descItem[6]?>"></td>
                            <td><input name="pesoItem[]" class="input-group" type="text" value="<?=$pesoItem[6]?>"></td>
                            </tr>

                            <tr>                            
                            <td><input name="nomeItem[]" class="input-group itemI" type="text" value="<?=$nomeItem[7]?>"></td>
                            <td><input name="descItem[]" class="input-group descricaoI" type="text" value="<?=$descItem[7]?>"></td>
                            <td><input name="pesoItem[]" class="input-group" type="text" value="<?=$pesoItem[7]?>"></td>
                            </tr>


                        </tbody>
                    </table>
                    </div>
                </div>    
                
                <div class="lore">
                    <h1 class="faixa3" title="Historia Pessoal e Anotações">História Pessoal</h1>
                    <textarea name="historiaP" class="form-control"rows="28" ><?=$obFicha->anotacoes_p?></textarea>
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
                                <td><input name="nomeArma[]" class="arma" type="text" value="<?=$nomeArma[0]?>"></td>
                                <td><input name="descricaoArma[]" class="descricaoA" type="text" value="<?=$descricaoArma[0]?>"></td>
                                <td><input name="ataqueArma[]" class="atributoArma" type="text" value="<?=$ataqueArma[0]?>"></td>
                                <td><input name="alcanceArma[]" class="atributoArma" type="text" value="<?=$alcanceArma[0]?>"></td>
                                <td><input name="danoArma[]" class="atributoArma" type="text" value="<?=$danoArma[0]?>"></td>
                                <td><input name="criticoArma[]" class="atributoArma" type="text" value="<?=$criticoArma[0]?>"></td>
                                <td><input name="recargaArma[]" class="atributoArma" type="text" value="<?=$recargaArma[0]?>"></td>
                                <td><input name="especialArma[]" class="atributoArma" type="text" value="<?=$especialArma[0]?>"></td>
                                </tr>
                                <tr>
                                <td><input name="nomeArma[]" class="arma" type="text" value="<?=$nomeArma[1]?>"></td>
                                <td><input name="descricaoArma[]" class="descricaoA" type="text" value="<?=$descricaoArma[1]?>"></td>
                                <td><input name="ataqueArma[]" class="atributoArma" type="text" value="<?=$ataqueArma[1]?>"></td>
                                <td><input name="alcanceArma[]" class="atributoArma" type="text" value="<?=$alcanceArma[1]?>"></td>
                                <td><input name="danoArma[]" class="atributoArma" type="text" value="<?=$danoArma[1]?>"></td>
                                <td><input name="criticoArma[]" class="atributoArma" type="text" value="<?=$criticoArma[1]?>"></td>
                                <td><input name="recargaArma[]" class="atributoArma" type="text" value="<?=$recargaArma[1]?>"></td>
                                <td><input name="especialArma[]" class="atributoArma" type="text" value="<?=$especialArma[1]?>"></td>
                                </tr>
                                <tr>                                
                                <td><input name="nomeArma[]" class="arma" type="text" value="<?=$nomeArma[2]?>"></td>
                                <td><input name="descricaoArma[]" class="descricaoA" type="text" value="<?=$descricaoArma[2]?>"></td>
                                <td><input name="ataqueArma[]" class="atributoArma" type="text" value="<?=$ataqueArma[2]?>"></td>
                                <td><input name="alcanceArma[]" class="atributoArma" type="text" value="<?=$alcanceArma[2]?>"></td>
                                <td><input name="danoArma[]" class="atributoArma" type="text" value="<?=$danoArma[2]?>"></td>
                                <td><input name="criticoArma[]" class="atributoArma" type="text" value="<?=$criticoArma[2]?>"></td>
                                <td><input name="recargaArma[]" class="atributoArma" type="text" value="<?=$recargaArma[2]?>"></td>
                                <td><input name="especialArma[]" class="atributoArma" type="text" value="<?=$especialArma[2]?>"></td>
                                </tr>
                                <tr>                                
                                <td><input name="nomeArma[]" class="arma" type="text" value="<?=$nomeArma[3]?>"></td>
                                <td><input name="descricaoArma[]" class="descricaoA" type="text" value="<?=$descricaoArma[3]?>"></td>
                                <td><input name="ataqueArma[]" class="atributoArma" type="text" value="<?=$ataqueArma[3]?>"></td>
                                <td><input name="alcanceArma[]" class="atributoArma" type="text" value="<?=$alcanceArma[3]?>"></td>
                                <td><input name="danoArma[]" class="atributoArma" type="text" value="<?=$danoArma[3]?>"></td>
                                <td><input name="criticoArma[]" class="atributoArma" type="text" value="<?=$criticoArma[3]?>"></td>
                                <td><input name="recargaArma[]" class="atributoArma" type="text" value="<?=$recargaArma[3]?>"></td>
                                <td><input name="especialArma[]" class="atributoArma" type="text" value="<?=$especialArma[3]?>"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    

                </div>

                <div class="ritual">
                 <div class="p-3 border opForm ">
                    <h1 class="faixa5">Habilidades e Rituais
                        <input name="dtRitual" class="DT" type="number" value="<?=$obFicha->cd_magia?>">
                        <span class="spanTitulo" title="DT de resistência para seus rituais = 10 + seu limite de PE + sua Presença">DT de Rituais:</span>
                    </h1>

                    <div class="listaRituais">
                        <div class="row mb-3">
                            <div class="col-4">
                                <div class="input-group flex-nowrap mb-1">
                                    <input name="ritual[]" class="form-control" type="text" placeholder="Nome" value="<?=$ritual[0]?>">
                                </div>

                                <div class="input-group input-group-sm">
                                <span class="input-group-text" title="O elemento (se tiver)">Elemento</span>
                                <input class="form-control" type="text" name="elemento[]" value="<?=$elemento[0]?>">
                                <span class="input-group-text" title="Duração do Ritual ou Habilidade">Duração</span>
                                <input class="form-control" type="text" name="duracao[]" value="<?=$duracao[0]?>">
                                </div>

                                <div class="input-group input-group-sm">
                                <span class="input-group-text" title="O alvo do seu Ritual ou Habilidade">Alvo</span>
                                <input class="form-control" type="text" name="alvo[]" value="<?=$alvo[0]?>">
                                <span class="input-group-text" title="Alcance da Habilidade">Alcance</span>
                                <input class="form-control" type="text" name="alcance[]" value="<?=$alcance[0]?>">
                                </div>

                                <div class="input-group input-group-sm">
                                <span class="input-group-text" title="Custo de Pontos de Esforço necessários">PE</span>
                                <input class="form-control" type="text" name="peHR[]" value="<?=$peHR[0]?>">
                                <span class="input-group-text" title="O Círculo do Ritual">Círculo</span>
                                <input class="form-control" type="number" name="circulo[]" value="<?=$circulo[0]?>">
                                <span class="input-group-text" title="Página do Ritual ou Habilidade (se tiver)">Página</span>
                                <input class="form-control" type="text" name="pagina[]" value="<?=$pagina[0]?>">
                                </div>


                            </div>

                            <div class="col-8">
                                <textarea name="descricaoHR[]" class="descricaoHR" rows="6" title="Descrição de Ritual" ><?=$descricaoHR[0]?></textarea>
                            </div>
                        </div>

                        

                        <div class="row mb-3">
                            <div class="col-4">
                                <div class="input-group flex-nowrap mb-1">
                                    <input name="ritual[]" class="form-control" type="text" placeholder="Nome" value="<?=$ritual[1]?>">
                                </div>

                                <div class="input-group input-group-sm">
                                <span class="input-group-text" title="O elemento (se tiver)">Elemento</span>
                                <input class="form-control" type="text" name="elemento[]" value="<?=$elemento[1]?>">
                                <span class="input-group-text" title="Duração do Ritual ou Habilidade">Duração</span>
                                <input class="form-control" type="text" name="duracao[]" value="<?=$duracao[1]?>">
                                </div>

                                <div class="input-group input-group-sm">
                                <span class="input-group-text" title="O alvo do seu Ritual ou Habilidade">Alvo</span>
                                <input class="form-control" type="text" name="alvo[]" value="<?=$alvo[1]?>">
                                <span class="input-group-text" title="Alcance da Habilidade">Alcance</span>
                                <input class="form-control" type="text" name="alcance[]" value="<?=$alcance[1]?>">
                                </div>

                                <div class="input-group input-group-sm">
                                <span class="input-group-text" title="Custo de Pontos de Esforço necessários">PE</span>
                                <input class="form-control" type="text" name="peHR[]" value="<?=$peHR[1]?>">
                                <span class="input-group-text" title="O Círculo do Ritual">Círculo</span>
                                <input class="form-control" type="number" name="circulo[]" value="<?=$circulo[1]?>">
                                <span class="input-group-text" title="Página do Ritual ou Habilidade (se tiver)">Página</span>
                                <input class="form-control" type="text" name="pagina[]" value="<?=$pagina[1]?>">
                                </div>


                            </div>

                            <div class="col-8">
                                <textarea name="descricaoHR[]" class="descricaoHR" rows="6" title="Descrição de Ritual" ><?=$descricaoHR[1]?></textarea>
                            </div>
                        </div>



                        <div class="row mb-3">
                            <div class="col-4">
                                <div class="input-group flex-nowrap mb-1">
                                    <input name="ritual[]" class="form-control" type="text" placeholder="Nome" value="<?=$ritual[2]?>">
                                </div>

                                <div class="input-group input-group-sm">
                                <span class="input-group-text" title="O elemento (se tiver)">Elemento</span>
                                <input class="form-control" type="text" name="elemento[]" value="<?=$elemento[2]?>">
                                <span class="input-group-text" title="Duração do Ritual ou Habilidade">Duração</span>
                                <input class="form-control" type="text" name="duracao[]" value="<?=$duracao[2]?>">
                                </div>

                                <div class="input-group input-group-sm">
                                <span class="input-group-text" title="O alvo do seu Ritual ou Habilidade">Alvo</span>
                                <input class="form-control" type="text" name="alvo[]" value="<?=$alvo[2]?>">
                                <span class="input-group-text" title="Alcance da Habilidade">Alcance</span>
                                <input class="form-control" type="text" name="alcance[]" value="<?=$alcance[2]?>">
                                </div>

                                <div class="input-group input-group-sm">
                                <span class="input-group-text" title="Custo de Pontos de Esforço necessários">PE</span>
                                <input class="form-control" type="text" name="peHR[]" value="<?=$peHR[2]?>">
                                <span class="input-group-text" title="O Círculo do Ritual">Círculo</span>
                                <input class="form-control" type="number" name="circulo[]" value="<?=$circulo[2]?>">
                                <span class="input-group-text" title="Página do Ritual ou Habilidade (se tiver)">Página</span>
                                <input class="form-control" type="text" name="pagina[]" value="<?=$pagina[2]?>">
                                </div>


                            </div>

                            <div class="col-8">
                                <textarea name="descricaoHR[]" class="descricaoHR" rows="6" title="Descrição de Ritual"><?=$descricaoHR[2]?></textarea>
                            </div>
                        </div>



                        <div class="row mb-3">
                            <div class="col-4">
                                <div class="input-group flex-nowrap mb-1">
                                    <input name="ritual[]" class="form-control" type="text" placeholder="Nome" value="<?=$ritual[3]?>">
                                </div>

                                <div class="input-group input-group-sm">
                                <span class="input-group-text" title="O elemento (se tiver)">Elemento</span>
                                <input class="form-control" type="text" name="elemento[]" value="<?=$elemento[3]?>">
                                <span class="input-group-text" title="Duração do Ritual ou Habilidade">Duração</span>
                                <input class="form-control" type="text" name="duracao[]" value="<?=$duracao[3]?>">
                                </div>

                                <div class="input-group input-group-sm">
                                <span class="input-group-text" title="O alvo do seu Ritual ou Habilidade">Alvo</span>
                                <input class="form-control" type="text" name="alvo[]" value="<?=$alvo[3]?>">
                                <span class="input-group-text" title="Alcance da Habilidade">Alcance</span>
                                <input class="form-control" type="text" name="alcance[]" value="<?=$alcance[3]?>">
                                </div>

                                <div class="input-group input-group-sm">
                                <span class="input-group-text" title="Custo de Pontos de Esforço necessários">PE</span>
                                <input class="form-control" type="text" name="peHR[]" value="<?=$peHR[3]?>">
                                <span class="input-group-text" title="O Círculo do Ritual">Círculo</span>
                                <input class="form-control" type="number" name="circulo[]" value="<?=$circulo[3]?>">
                                <span class="input-group-text" title="Página do Ritual ou Habilidade (se tiver)">Página</span>
                                <input class="form-control" type="text" name="pagina[]" value="<?=$pagina[3]?>">
                                </div>


                            </div>

                            <div class="col-8">
                                <textarea name="descricaoHR[]" class="descricaoHR" rows="6" title="Descrição de Ritual"><?=$descricaoHR[3]?></textarea>
                            </div>
                        </div>



                        <div class="row mb-3">
                            <div class="col-4">
                                <div class="input-group flex-nowrap mb-1">
                                    <input name="ritual[]" class="form-control" type="text" placeholder="Nome" value="<?=$ritual[4]?>">
                                </div>

                                <div class="input-group input-group-sm">
                                <span class="input-group-text" title="O elemento (se tiver)">Elemento</span>
                                <input class="form-control" type="text" name="elemento[]" value="<?=$elemento[4]?>">
                                <span class="input-group-text" title="Duração do Ritual ou Habilidade">Duração</span>
                                <input class="form-control" type="text" name="duracao[]" value="<?=$duracao[4]?>">
                                </div>

                                <div class="input-group input-group-sm">
                                <span class="input-group-text" title="O alvo do seu Ritual ou Habilidade">Alvo</span>
                                <input class="form-control" type="text" name="alvo[]" value="<?=$alvo[4]?>">
                                <span class="input-group-text" title="Alcance da Habilidade">Alcance</span>
                                <input class="form-control" type="text" name="alcance[]" value="<?=$alcance[4]?>">
                                </div>

                                <div class="input-group input-group-sm">
                                <span class="input-group-text" title="Custo de Pontos de Esforço necessários">PE</span>
                                <input class="form-control" type="text" name="peHR[]" value="<?=$peHR[4]?>">
                                <span class="input-group-text" title="O Círculo do Ritual">Círculo</span>
                                <input class="form-control" type="number" name="circulo[]" value="<?=$circulo[4]?>">
                                <span class="input-group-text" title="Página do Ritual ou Habilidade (se tiver)">Página</span>
                                <input class="form-control" type="text" name="pagina[]" value="<?=$pagina[4]?>">
                                </div>


                            </div>

                            <div class="col-8">
                                <textarea name="descricaoHR[]" class="descricaoHR" rows="6" title="Descrição de Ritual"><?=$descricaoHR[4]?></textarea>
                            </div>
                        </div>



                        <div class="row mb-3">
                            <div class="col-4">
                                <div class="input-group flex-nowrap mb-1">
                                    <input name="ritual[]" class="form-control" type="text" placeholder="Nome" value="<?=$ritual[5]?>">
                                </div>

                                <div class="input-group input-group-sm">
                                <span class="input-group-text" title="O elemento (se tiver)">Elemento</span>
                                <input class="form-control" type="text" name="elemento[]" value="<?=$elemento[5]?>">
                                <span class="input-group-text" title="Duração do Ritual ou Habilidade">Duração</span>
                                <input class="form-control" type="text" name="duracao[]" value="<?=$duracao[5]?>">
                                </div>

                                <div class="input-group input-group-sm">
                                <span class="input-group-text" title="O alvo do seu Ritual ou Habilidade">Alvo</span>
                                <input class="form-control" type="text" name="alvo[]" value="<?=$alvo[5]?>">
                                <span class="input-group-text" title="Alcance da Habilidade">Alcance</span>
                                <input class="form-control" type="text" name="alcance[]" value="<?=$alcance[5]?>">
                                </div>

                                <div class="input-group input-group-sm">
                                <span class="input-group-text" title="Custo de Pontos de Esforço necessários">PE</span>
                                <input class="form-control" type="text" name="peHR[]" value="<?=$peHR[5]?>">
                                <span class="input-group-text" title="O Círculo do Ritual">Círculo</span>
                                <input class="form-control" type="number" name="circulo[]" value="<?=$circulo[5]?>">
                                <span class="input-group-text" title="Página do Ritual ou Habilidade (se tiver)">Página</span>
                                <input class="form-control" type="text" name="pagina[]" value="<?=$pagina[5]?>">
                                </div>


                            </div>

                            <div class="col-8">
                                <textarea name="descricaoHR[]" class="descricaoHR" rows="6" title="Descrição de Ritual"><?=$descricaoHR[5]?></textarea>
                            </div>
                        </div>



                        <div class="row mb-3">
                            <div class="col-4">
                                <div class="input-group flex-nowrap mb-1">
                                    <input name="ritual[]" class="form-control" type="text" placeholder="Nome" value="<?=$ritual[6]?>">
                                </div>

                                <div class="input-group input-group-sm">
                                <span class="input-group-text" title="O elemento (se tiver)">Elemento</span>
                                <input class="form-control" type="text" name="elemento[]" value="<?=$elemento[6]?>">
                                <span class="input-group-text" title="Duração do Ritual ou Habilidade">Duração</span>
                                <input class="form-control" type="text" name="duracao[]" value="<?=$duracao[6]?>">
                                </div>

                                <div class="input-group input-group-sm">
                                <span class="input-group-text" title="O alvo do seu Ritual ou Habilidade">Alvo</span>
                                <input class="form-control" type="text" name="alvo[]" value="<?=$alvo[6]?>">
                                <span class="input-group-text" title="Alcance da Habilidade">Alcance</span>
                                <input class="form-control" type="text" name="alcance[]" value="<?=$alcance[6]?>">
                                </div>

                                <div class="input-group input-group-sm">
                                <span class="input-group-text" title="Custo de Pontos de Esforço necessários">PE</span>
                                <input class="form-control" type="text" name="peHR[]" value="<?=$peHR[6]?>">
                                <span class="input-group-text" title="O Círculo do Ritual">Círculo</span>
                                <input class="form-control" type="number" name="circulo[]" value="<?=$circulo[6]?>">
                                <span class="input-group-text" title="Página do Ritual ou Habilidade (se tiver)">Página</span>
                                <input class="form-control" type="text" name="pagina[]" value="<?=$pagina[6]?>">
                                </div>


                            </div>

                            <div class="col-8">
                                <textarea name="descricaoHR[]" class="descricaoHR" rows="6" title="Descrição de Ritual"><?=$descricaoHR[6]?></textarea>
                            </div>
                        </div>



                        <div class="row mb-3">
                            <div class="col-4">
                                <div class="input-group flex-nowrap mb-1">
                                    <input name="ritual[]" class="form-control" type="text" placeholder="Nome" value="<?=$ritual[7]?>">
                                </div>

                                <div class="input-group input-group-sm">
                                <span class="input-group-text" title="O elemento (se tiver)">Elemento</span>
                                <input class="form-control" type="text" name="elemento[]" value="<?=$elemento[7]?>">
                                <span class="input-group-text" title="Duração do Ritual ou Habilidade">Duração</span>
                                <input class="form-control" type="text" name="duracao[]" value="<?=$duracao[7]?>">
                                </div>

                                <div class="input-group input-group-sm">
                                <span class="input-group-text" title="O alvo do seu Ritual ou Habilidade">Alvo</span>
                                <input class="form-control" type="text" name="alvo[]" value="<?=$alvo[7]?>">
                                <span class="input-group-text" title="Alcance da Habilidade">Alcance</span>
                                <input class="form-control" type="text" name="alcance[]" value="<?=$alcance[7]?>">
                                </div>

                                <div class="input-group input-group-sm">
                                <span class="input-group-text" title="Custo de Pontos de Esforço necessários">PE</span>
                                <input class="form-control" type="text" name="peHR[]" value="<?=$peHR[7]?>">
                                <span class="input-group-text" title="O Círculo do Ritual">Círculo</span>
                                <input class="form-control" type="number" name="circulo[]" value="<?=$circulo[7]?>">
                                <span class="input-group-text" title="Página do Ritual ou Habilidade (se tiver)">Página</span>
                                <input class="form-control" type="text" name="pagina[]" value="<?=$pagina[7]?>">
                                </div>


                            </div>

                            <div class="col-8">
                                <textarea name="descricaoHR[]" class="descricaoHR" rows="6" title="Descrição de Ritual"><?=$descricaoHR[7]?></textarea>
                            </div>
                        </div>

                    <button type="button" class="btn btn-danger btnExcluir" data-bs-toggle="modal" data-bs-target="#exampleModal">Excluir</button>

        <!-- Modal -->

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir Ficha</h1>
                        <form action="" method="POST">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Tem certeza que quer excluir a ficha?</p>                            
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-danger" name="excluir" value="excluir">Excluir</button>
                        </form>
                            </div>
                            </div>
                        </div>
                        </div>
                            
                    


                        
                        <input class="botaoEnviar" type="submit" name="acao" value="Atualizar">
                    </div>

                 </div>
                </div>
                


    </div>
        
    </form>
    




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
<script src="assets/js/main.js"></script>
</body>

</html>