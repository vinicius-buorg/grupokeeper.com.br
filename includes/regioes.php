<?php 

$regioesArr = [
    'regiao-sp-g' => [
        'nome_regiao' => 'Grande São Paulo',
        'title_regiao' => 'São Paulo - Grande São Paulo',
        'regioes' => [
            'São Caetano do Sul',
            'São Bernardo do Campo',
            'Santo André',
            'Diadema',
            'Guarulhos',
            'Suzano',
            'Ribeirão Pires',
            'Mauá',
            'Embu',
            'Embu Guaçú',
            'Embu das Artes',
            'Itapecerica da Serra',
            'Osasco',
            'Barueri',
            'Jandira',
            'Cotia',
            'Itapevi',
            'Santana de Parnaíba',
            'Caierias',
            'Franco da Rocha',
            'Taboão da Serra',
            'Cajamar',
            'Arujá',
            'Alphaville',
            'Mairiporã'
        ]
    ],
    'regiao-sp-centro' => [
        'nome_regiao' => 'Região Central',
        'title_regiao' => 'São Paulo - Região Central',
        'regioes' => [
            'Aclimação',
            'Bela Vista',
            'Bom Retiro',
            'Brás',
            'Cambuci',
            'Centro',
            'Consolação',
            'Higienópolis',
            'Glicério',
            'Liberdade',
            'Luz',
            'Pari',
            'República',
            'Santa Cecília',
            'Santa Efigênia',
            'Sé',
            'Vila Buarque'
        ]
    ],
    'regiao-sp-zn' => [
        'nome_regiao' => 'Zona Norte',
        'title_regiao' => 'São Paulo - Zona Norte',
        'regioes' => [
            'Brasilândia',
            'Cachoeirinha',
            'Casa Verde',
            'Imirim',
            'Jaçanã',
            'Jardim São Paulo',
            'Lauzane Paulista',
            'Mandaqui',
            'Santana',
            'Tremembé',
            'Tucuruvi',
            'Vila Guilherme',
            'Vila Gustavo',
            'Vila Maria',
            'Vila Medeiros'
        ]
    ],
    'regiao-sp-zo' => [
        'nome_regiao' => 'Zona Oeste',
        'title_regiao' => 'São Paulo - Zona Oeste',
        'regioes' => [
            'Água Branca',
            'Bairro do Limão',
            'Barra Funda',
            'Alto da Lapa',
            'Alto de Pinheiros',
            'Butantã',
            'Freguesia do Ó',
            'Jaguaré',
            'Jaraguá',
            'Jardim Bonfiglioli',
            'Lapa',
            'Pacaembú',
            'Perdizes',
            'Perús',
            'Pinheiros',
            'Pirituba',
            'Raposo Tavares',
            'Rio Pequeno',
            'São Domingos',
            'Sumaré',
            'Vila Leopoldina',
            'Vila Sonia'
        ]
    ],
    'regiao-sp-zs' => [
        'nome_regiao' => 'Zona Sul',
        'title_regiao' => 'São Paulo - Zona Sul',
        'regioes' => [
            'Aeroporto',
            'Água Funda',
            'Brooklin',
            'Campo Belo',
            'Campo Grande',
            'Campo Limpo',
            'Capão Redondo',
            'Cidade Ademar',
            'Cidade Dutra',
            'Cidade Jardim',
            'Grajaú',
            'Ibirapuera',
            'Interlagos',
            'Ipiranga',
            'Itaim Bibi',
            'Jabaquara',
            'Jardim Ângela',
            'Jardim América',
            'Jardim Europa',
            'Jardim Paulista',
            'Jardim Paulistano',
            'Jardim São Luiz',
            'Jardins',
            'Jockey Club',
            'M\'Boi Mirim',
            'Moema',
            'Morumbi',
            'Parelheiros',
            'Pedreira',
            'Sacomã',
            'Santo Amaro',
            'Saúde',
            'Socorro',
            'Vila Andrade',
            'Vila Mariana',
        ]
    ],
    'regiao-sp-zl' => [
        'nome_regiao' => 'Zona Leste',
        'title_regiao' => 'São Paulo - Zona Leste',
        'regioes' => [
            'Água Rasa',
            'Anália Franco',
            'Aricanduva',
            'Artur Alvim',
            'Belém',
            'Cidade Patriarca',
            'Cidade Tiradentes',
            'Engenheiro Goulart',
            'Ermelino Matarazzo',
            'Guaianazes',
            'Itaim Paulista',
            'Itaquera',
            'Jardim Iguatemi',
            'José Bonifácio',
            'Mooca',
            'Parque do Carmo',
            'Parque São Lucas',
            'Parque São Rafael',
            'Penha',
            'Ponte Rasa',
            'São Mateus',
            'São Miguel Paulista',
            'Sapopemba',
            'Tatuapé',
            'Vila Carrão',
            'Vila Curuçá',
            'Vila Esperança',
            'Vila Formosa',
            'Vila Matilde',
            'Vila Prudente'
        ]
    ],
    'regiao-sp-l' => [
        'nome_regiao' => 'Litoral de São Paulo',
        'title_regiao' => 'São Paulo - Litoral de São Paulo',
        'regioes' => [
            'Bertioga',
            'Cananéia',
            'Caraguatatuba',
            'Cubatão',
            'Guarujá',
            'Ilha Comprida',
            'Iguape',
            'Ilhabela',
            'Itanhaém',
            'Mongaguá',
            'Riviera de São Lourenço',
            'Santos',
            'São Vicente',
            'Praia Grande',
            'Ubatuba',
            'São Sebastião',
            'Peruíbe'
        ]
    ],
    'personalizado' => [
        'nome_regiao' => 'Personalizado',
        'title_regiao' => 'Personalizado - Personalizado',
        'regioes' => [
            'Personalizado',
            'Personalizado',
            'Personalizado'
        ] 
    ]
];

?>

<div class="tabs-regioes">
    <div class="action-scroll">
        <h4>Regiões de São Paulo que a <?php echo $nome_empresa; ?> atende com <?php echo $h1; ?></h4>
        <span><i class="fa fa-info"></i> Selecione uma região para solicitar um orçamento</span>
        <i class="fa fa-arrow-down icone-acao"></i>
    </div>
    <div class="scroll-div">
        <ul class="nav nav-tabs">
            <?php 
                $tmp = 0;
                foreach ($regioesArr as $key => $value) {
                    $classActive = '';
                    if ($tmp == 0) { // ativo no primeiro
                        $classActive = 'active';    
                        $tmp++;
                    }
                    ?>
                        <li class="<?php echo $classActive;?>"><a rel="nofollow" href="#<?php echo $key;?>" title="<?php echo $value['title_regiao'];?>" data-toggle="tab"><?php echo $value['nome_regiao']; ?></a></li>
                    <?php
                }
            ?>
        </ul>
        <div class="tab-content">
            <?php 
                $tmp = 0;
                foreach ($regioesArr as $key => $value) {
                    $classActive = '';
                    if ($tmp == 0) { // ativo no primeiro
                        $classActive = 'in active';    
                        $tmp++;
                    }
                    ?>
                        <div class="tab-pane fade <?php echo $classActive;?>" id="<?php echo $key;?>">
                            <ul>
                                <?php foreach ($value['regioes'] as $keyReg => $valueReg) { ?>
                                    <li data-assunto="<?php echo $h1; ?> - Região <?php echo $valueReg;?>" data-target="#modal-orcamento-borg" data-toggle="modal"><strong><?php echo $valueReg;?></strong></li>
                                <?php } ?>
                            </ul>
                        </div>
                    <?php
                }
            ?>
        </div>
    </div>
</div>

<?php include "includes/regioes-brasil.php"; ?>
