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
            <h2 class="text-center vermelho">Vida</h2>
                <div class="contadorHP">
                    <button type="button" class="botao-OP" title="Diminui a Vida" onclick="contadorHP(-5)">-5</button>
                    <button type="button" class="botao-OP" title="Diminui a Vida" onclick="contadorHP(-1)">-</button>
                    
                    <input class="vida" type="number" name="vidaAtual" title="Vida Atual" id="vidaAtual" value="0" maxlength="4">
                    <img src="assets/img/Divisor.png" width="20" height="40">
                    <input class="vidaM" type="number" name="vida_maxima" title="Vida Máxima" id="vidaMaxima" maxlength="4" value="1">
                    <button type="button" class="botaomaisOP font3" id="mais" name="mais" onclick="contadorHP(1)">+</button>
                    <button type="button" class="botaomaisOP font3" id="mais" name="mais" onclick="contadorHP(5)">+5</button>
                </div>
                <h2 class="text-center azul">Sanidade</h2>
                <div class="contadorHP">
                   
                <button type="button" class="botao-OP" title="Diminui a Vida" onclick="contadorSAN(-5)">-5</button>
                    <button type="button" class="botao-OP" title="Diminui a Vida" onclick="contadorSAN(-1)">-</button>
                    
                    <input class="san" type="number" name="vidaAtual" title="Vida Atual" id="vidaAtual" value="0" maxlength="4">
                    <img src="assets/img/Divisor.png" width="20" height="40">
                    <input class="sanM" type="number" name="vida_maxima" title="Vida Máxima" id="vidaMaxima" maxlength="4" value="1">
                    <button type="button" class="botaomaisOP font3" id="mais" name="mais" onclick="contadorSAN(1)">+</button>
                    <button type="button" class="botaomaisOP font3" id="mais" name="mais" onclick="contadorSAN(5)">+5</button>
                </div>

                <h2 class="text-center verde">Pontos de Esforço</h2>
                <div class="contadorHP">
                    
                <button type="button" class="botao-OP" title="Diminui a Vida" onclick="contadorPE(-5)">-5</button>
                    <button type="button" class="botao-OP" title="Diminui a Vida" onclick="contadorPE(-1)">-</button>
                    
                    <input class="pe" type="number" name="vidaAtual" title="Vida Atual" id="vidaAtual" value="0" maxlength="4">
                    <img src="assets/img/Divisor.png" width="20" height="40">
                    <input class="peM" type="number" name="vida_maxima" title="Vida Máxima" id="vidaMaxima" maxlength="4" value="1">
                    <button type="button" class="botaomaisOP font3" id="mais" name="mais" onclick="contadorPE(1)">+</button>
                    <button type="button" class="botaomaisOP font3" id="mais" name="mais" onclick="contadorPE(5)">+5</button>
                </div>

                <h2 class="text-center faixa2">Defesas</h2>
                
                <div class="lista3">
                    
                        <ul class="list-group list-group-light">
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold">Passiva</div>                              
                                </div>
                                <span>
                                <input class="defesas" name="passiva" type="number" min='0' max='30' maxlength="3" ></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold">Bloqueio</div>                              
                                </div>
                                <span>
                                <input class="defesas" name="bloqueio" type="number" min='0' max='30' maxlength="3" ></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold">Esquiva</div>                              
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
                                <div class="fw-bold font3">Acrobacia</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="acrobacia" type="number" min='0' max='30' maxlength="3" ></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold">Adestramento</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="adestramento" type="number" min='0' max='30' maxlength="3" ></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold">Artes</div>                                                      
                                </div>
                                <input class="descricao" type="text" name="artes_nome" placeholder="Especificação"> 
                                   
                                <span>+
                                <input class="pericias" name="artes" type="number" min='0' max='30'maxlength="3" ></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold">Atletismo</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="atletismo" type="number" min='0' max='30' maxlength="3"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold">Atualidades</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="atualidades" type="number" min='0' max='30' maxlength="3"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold">Ciências</div>                                                      
                                </div>
                                <input class="descricao" type="text" name="ciencias_nome" placeholder="Especificação"> 
                                   
                                <span>+
                                <input class="pericias" name="ciencias" type="number" min='0' max='30' maxlength="3"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold">Crime</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="crime" type="number" min='0' max='30' maxlength="3"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold">Diplomacia</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="diplomacia" type="number" min='0' max='30' maxlength="3"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold">Enganação</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="enganacao" type="number" min='0' max='30' maxlength="3"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold">Fortitude</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="fortitude" type="number" min='0' max='30' maxlength="3"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold">Furtividade</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="furtividade" type="number" min='0' max='30'maxlength="3" ></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold">Iniciativa</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="iniciativa" type="number" min='0' max='30'maxlength="3" ></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold">Intimidação</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="intimidacao" type="number" min='0' max='30' maxlength="3"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold">Intuição</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="intuicao" type="number" min='0' max='30' maxlength="3"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold">Investigação</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="investigacao" type="number" min='0' max='30'maxlength="3" ></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold">Luta</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="luta" type="number" min='0' max='30' maxlength="3"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold">Medicina</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="medicina" type="number" min='0' max='30' maxlength="3"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold">Ocultismo</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="ocultismo" type="number" min='0' max='30'maxlength="3" ></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold">Percepção</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="percepcao" type="number" min='0' max='30' maxlength="3"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold">Pilotagem</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="pilotagem" type="number" min='0' max='30' maxlength="3"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold">Pontaria</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="pontaria" type="number" min='0' max='30' maxlength="3"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold">Profissão</div>                              
                                </div>
                                <input class="descricao" type="text" name="artes_nome" placeholder="Especificação"> 
                                   
                                <span>+
                                <input class="pericias" name="profissao" type="number" min='0' max='30'maxlength="3" ></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold">Reflexos</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="reflexos" type="number" min='0' max='30' maxlength="3"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold">Religião</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="religiao" type="number" min='0' max='30'maxlength="3" ></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold">Sobrevivência</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="sobrevivencia" type="number" min='0' max='30' maxlength="3"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold">Tática</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="tatica" type="number" min='0' max='30' maxlength="3"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold">Tecnologia</div>                              
                                </div>
                                <span>+
                                <input class="pericias" name="tecnologia" type="number" min='0' max='30' maxlength="3"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                <div class="fw-bold">Vontade</div>                              
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
                    <input class="resistencias" type="number">
                    <span class="texto-alto">Balística</span>
                    <input class="resistencias" type="number">
                </div>
                <div class="bloquinho">
                <span class="destaque">Resistência à insanidade</span>
                </div>
                
                    <input class="resistencias floatLeft" type="number">

                <div class="barraVertical"></div>
                    <div class="controleR">
                    <span class="texto-alto">Sangue</span>
                    <input class="resistencias" type="number">
                    <span class="texto-alto">Morte</span>
                    <input class="resistencias" type="number">
                    <span class="texto-alto">Energia</span>
                    <input class="resistencias" type="number">
                    <span class="texto-alto">Conhecimento</span>
                    <input class="resistencias" type="number">
                    </div>
                    </div>
                
            


        </div>
        <input type="submit" value="Enviar">
    </form>
</div>




<!-- <?php echo $usuarioLogado['login'] ?> -->



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