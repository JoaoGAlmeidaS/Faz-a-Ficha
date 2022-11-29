<?php
    namespace App\Entity;

    use \App\Db\Database;
    use \PDO;

    class Ficha{

        public $idFicha;
        public $modelo;
        public $login;
        public $personagem;
        public $origem;
        public $regiao;
        public $passado;
        public $classe;
        public $nivel;
        public $forca;
        public $destreza;
        public $constituicao;
        public $inteligencia;
        public $sabedoria;
        public $carisma;
        public $deslocamento;
        public $iniciativa;
        public $defesa;
        public $bloqueio;
        public $esquiva;
        public $vida;
        public $vida_atual;
        public $acrobacia;
        public $arcanismo;
        public $atletismo;
        public $atuacao;
        public $enganacao;
        public $furtividade;
        public $historia;
        public $intimidacao;
        public $intuicao;
        public $investigacao;
        public $adestramento;
        public $medicina;
        public $natureza;
        public $percepcao;
        public $persuasao;
        public $prestidigitacao;
        public $religiao;
        public $sobrevivencia;
        public $tecnologia;
        public $artes;
        public $artes_desc;
        public $ciencias_nome;
        public $ciencias;
        public $crime;
        public $diplomacia;
        public $fortitude;
        public $luta;
        public $pilotagem;
        public $pontaria;
        public $profissao_nome;
        public $profissao;
        public $reflexos;
        public $tatica;
        public $vontade;
        public $ataques;
        public $alcance;
        public $dano;
        public $arma;
        public $tipo;
        public $critico;
        public $recarga;
        public $especial;
        public $descricao;
        public $experiencia;
        public $pe;
        public $pe_atual;
        public $san;
        public $san_atual;
        public $res_insanidade;
        public $inventario;
        public $item_nome;
        public $item_desc;
        public $item_peso;
        public $pulso_r;
        public $fagulha_r;
        public $fluxo_r;
        public $vortice_r;
        public $explosao_r;
        public $cd_runas;
        public $acerto_runas;
        public $proficiencias;
        public $idiomas_oficios;
        public $herancas_aprim;
        public $anotacoes_p;
        public $salvaguarda_sucesso;
        public $salvaguarda_falha;
        public $salvaguarda_for;
        public $salvaguarda_des;
        public $salvaguarda_con;
        public $salvaguarda_int;
        public $salvaguarda_sab;
        public $salvaguarda_car;
        public $nivel_exaust;
        public $pagina;
        public $duracao;
        public $alcance_rit;
        public $custo;
        public $alvo;
        public $elemento;
        public $magias;
        public $nivel_magia;
        public $desc_magia;
        public $cd_magia;
        public $acerto_magia;
        public $dinheiro;
        public $trilha;     
        
        
        /**
         * Metodo responsavel por cadastrar uma ficha
         * @return boolean
         */
        public function cadastrar(){

            //Inserir o usuário no banco
        $obDatabase = new Database('fichas');
        $this->idFicha = $obDatabase->insert([
            'personagem' => $this->personagem,
            'modelo' => $this->modelo,
            'login' => $this->login,
            'regiao' => $this->regiao,
            'passado' => $this->passado,
            'classe' => $this->classe,
            'nivel' => $this->nivel,
            'forca' => $this->forca,
            'destreza' => $this->destreza,
            'constituicao' => $this->constituicao,
            'inteligencia' => $this->inteligencia,
            'sabedoria' => $this->sabedoria,
            'carisma' => $this->carisma,
            'deslocamento' => $this->deslocamento,
            'iniciativa' => $this->iniciativa,
            'defesa' => $this->defesa,
            'bloqueio' => $this->bloqueio,
            'esquiva' => $this->esquiva,
            'vida' => $this->vida,
            'vida_atual' => $this->vida_atual,
            'acrobacia' => $this->acrobacia,
            'arcanismo' => $this->arcanismo,
            'atletismo' => $this->atletismo,
            'atuacao' => $this->atuacao,
            'enganacao' => $this->enganacao,
            'furtividade' => $this->furtividade,
            'historia' => $this->historia,
            'intimidacao' => $this->intimidacao,
            'intuicao' => $this->intuicao,
            'investigacao' => $this->investigacao,
            'adestramento' => $this->adestramento,
            'medicina' => $this->medicina,
            'natureza' => $this->natureza,
            'percepcao' => $this->percepcao,
            'persuasao' => $this->persuasao,
            'prestidigitacao' => $this->prestidigitacao,
            'religiao' => $this->religiao,
            'sobrevivencia' => $this->sobrevivencia,
            'tecnologia' => $this->tecnologia,
            'artes' => $this->artes,
            'artes_desc' => $this->artes_desc,
            'ciencias_nome' => $this->ciencias_nome,
            'ciencias' => $this->ciencias,
            'crime' => $this->crime,
            'diplomacia' => $this->diplomacia,
            'fortitude' => $this->fortitude,
            'luta' => $this->luta,
            'pilotagem' => $this->pilotagem,
            'pontaria' => $this->pontaria,
            'profissao_nome' => $this->profissao_nome,
            'profissao' => $this->profissao,
            'reflexos' => $this->reflexos,
            'tatica' => $this->tatica,
            'vontade' => $this->vontade,
            'ataques' => $this->ataques,
            'alcance' => $this->alcance,
            'dano' => $this->dano,
            'arma' => $this->arma,
            'tipo' => $this->tipo,
            'critico' => $this->critico,
            'recarga' => $this->recarga,
            'especial' => $this->especial,
            'descricao' => $this->descricao,
            'experiencia' => $this->experiencia,
            'pe' => $this->pe,
            'pe_atual' => $this->pe_atual,
            'san' => $this->san,
            'san_atual' => $this->san_atual,
            'res_insanidade' => $this->res_insanidade,
            'inventario' => $this->inventario,
            'item_nome' => $this->item_nome,
            'item_desc' => $this->item_desc,
            'item_peso' => $this->item_peso,
            'pulso_r' => $this->pulso_r,
            'fagulha_r' => $this->fagulha_r,
            'fluxo_r' => $this->fluxo_r,
            'vortice_r' => $this->vortice_r,
            'explosao_r' => $this->explosao_r,
            'cd_runas' => $this->cd_runas,
            'acerto_runas' => $this->acerto_runas,
            'proficiencias' => $this->proficiencias,
            'idiomas_oficios' => $this->idiomas_oficios,
            'herancas_aprim' => $this->herancas_aprim,
            'anotacoes_p' => $this->anotacoes_p,
            'salvaguarda_sucesso' => $this->salvaguarda_sucesso,
            'salvaguarda_falha' => $this->salvaguarda_falha,
            'salvaguarda_for' => $this->salvaguarda_for,
            'salvaguarda_des' => $this->salvaguarda_des,
            'salvaguarda_con' => $this->salvaguarda_con,
            'salvaguarda_int' => $this->salvaguarda_int,
            'salvaguarda_sab' => $this->salvaguarda_sab,
            'salvaguarda_car' => $this->salvaguarda_car,
            'nivel_exaust' => $this->nivel_exaust,
            'pagina' => $this->pagina,
            'duracao' => $this->duracao,
            'alcance_rit' => $this->alcance_rit,
            'custo' => $this->custo,
            'alvo' => $this->alvo,
            'elemento' => $this->elemento,
            'magias' => $this->magias,
            'nivel_magia' => $this->nivel_magia,
            'desc_magia' => $this->desc_magia,
            'cd_magia' => $this->cd_magia,
            'acerto_magia' => $this->acerto_magia,
            'dinheiro' => $this->dinheiro,
            'trilha' => $this->trilha
        
            
        ]);
    
        //Retornar Sucesso
        return true;
        }



        public static function getFichas($where = null, $order = null, $limit = null){
            return (new Database('fichas'))->select($where,$order,$limit)->fetchAll(PDO::FETCH_CLASS,self::class);
        }

        public static function getFichaPorLogin($login){
            return (new Database('fichas'))->select('login = "'.$login.'"')->fetchObject(self::class);
            
            
        }

        public static function getFichaPorID($idFicha){
            return (new Database('fichas'))->select('id_ficha = '.$idFicha)->fetchObject(self::class);
        }

        public function atualizar(){
            return (new Database('fichas'))->update('id_ficha = '.$this->idFicha,['personagem' => $this->personagem,
            
            'regiao' => $this->regiao,
            'passado' => $this->passado,
            'classe' => $this->classe,
            'nivel' => $this->nivel,
            'forca' => $this->forca,
            'destreza' => $this->destreza,
            'constituicao' => $this->constituicao,
            'inteligencia' => $this->inteligencia,
            'sabedoria' => $this->sabedoria,
            'carisma' => $this->carisma,
            'deslocamento' => $this->deslocamento,
            'iniciativa' => $this->iniciativa,
            'defesa' => $this->defesa,
            'bloqueio' => $this->bloqueio,
            'esquiva' => $this->esquiva,
            'vida' => $this->vida,
            'vida_atual' => $this->vida_atual,
            'acrobacia' => $this->acrobacia,
            'arcanismo' => $this->arcanismo,
            'atletismo' => $this->atletismo,
            'atuacao' => $this->atuacao,
            'enganacao' => $this->enganacao,
            'furtividade' => $this->furtividade,
            'historia' => $this->historia,
            'intimidacao' => $this->intimidacao,
            'intuicao' => $this->intuicao,
            'investigacao' => $this->investigacao,
            'adestramento' => $this->adestramento,
            'medicina' => $this->medicina,
            'natureza' => $this->natureza,
            'percepcao' => $this->percepcao,
            'persuasao' => $this->persuasao,
            'prestidigitacao' => $this->prestidigitacao,
            'religiao' => $this->religiao,
            'sobrevivencia' => $this->sobrevivencia,
            'tecnologia' => $this->tecnologia,
            'artes' => $this->artes,
            'artes_desc' => $this->artes_desc,
            'ciencias_nome' => $this->ciencias_nome,
            'ciencias' => $this->ciencias,
            'crime' => $this->crime,
            'diplomacia' => $this->diplomacia,
            'fortitude' => $this->fortitude,
            'luta' => $this->luta,
            'pilotagem' => $this->pilotagem,
            'pontaria' => $this->pontaria,
            'profissao_nome' => $this->profissao_nome,
            'profissao' => $this->profissao,
            'reflexos' => $this->reflexos,
            'tatica' => $this->tatica,
            'vontade' => $this->vontade,
            'ataques' => $this->ataques,
            'alcance' => $this->alcance,
            'dano' => $this->dano,
            'arma' => $this->arma,
            'tipo' => $this->tipo,
            'critico' => $this->critico,
            'recarga' => $this->recarga,
            'especial' => $this->especial,
            'descricao' => $this->descricao,
            'experiencia' => $this->experiencia,
            'pe' => $this->pe,
            'pe_atual' => $this->pe_atual,
            'san' => $this->san,
            'san_atual' => $this->san_atual,
            'res_insanidade' => $this->res_insanidade,
            'inventario' => $this->inventario,
            'item_nome' => $this->item_nome,
            'item_desc' => $this->item_desc,
            'item_peso' => $this->item_peso,
            'pulso_r' => $this->pulso_r,
            'fagulha_r' => $this->fagulha_r,
            'fluxo_r' => $this->fluxo_r,
            'vortice_r' => $this->vortice_r,
            'explosao_r' => $this->explosao_r,
            'cd_runas' => $this->cd_runas,
            'acerto_runas' => $this->acerto_runas,
            'proficiencias' => $this->proficiencias,
            'idiomas_oficios' => $this->idiomas_oficios,
            'herancas_aprim' => $this->herancas_aprim,
            'anotacoes_p' => $this->anotacoes_p,
            'salvaguarda_sucesso' => $this->salvaguarda_sucesso,
            'salvaguarda_falha' => $this->salvaguarda_falha,
            'salvaguarda_for' => $this->salvaguarda_for,
            'salvaguarda_des' => $this->salvaguarda_des,
            'salvaguarda_con' => $this->salvaguarda_con,
            'salvaguarda_int' => $this->salvaguarda_int,
            'salvaguarda_sab' => $this->salvaguarda_sab,
            'salvaguarda_car' => $this->salvaguarda_car,
            'nivel_exaust' => $this->nivel_exaust,
            'pagina' => $this->pagina,
            'duracao' => $this->duracao,
            'alcance_rit' => $this->alcance_rit,
            'custo' => $this->custo,
            'alvo' => $this->alvo,
            'elemento' => $this->elemento,
            'magias' => $this->magias,
            'nivel_magia' => $this->nivel_magia,
            'desc_magia' => $this->desc_magia,
            'cd_magia' => $this->cd_magia,
            'acerto_magia' => $this->acerto_magia,
            'dinheiro' => $this->dinheiro,
            'trilha' => $this->trilha
        
        ]);
        }

        public function excluir(){
            return (new Database('fichas'))->delete('id_ficha = '.$this->idFicha);
        }

    }
     



?>