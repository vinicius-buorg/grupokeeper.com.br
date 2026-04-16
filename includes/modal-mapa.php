<div id="modal-overlay" class="modal-overlay" style="display: none;"></div>
<div id="modal-estado" class="modal-card" style="display: none;">
    <button class="close-btn" onclick="fecharModal()">X</button>
    <h5 id="titulo-estado">Cidades atendidas:</h5>
    <div id="lista-cidades"></div>
    <img src="<?= $url.$logo_cliente; ?>" alt="<?=$nome_empresa; ?>" title="<?= $nome_empresa; ?>">
</div>
<script>
    const cidadesPorEstado = {
        "BR-RR": ["Roraima"],
        "BR-CE": ["Fortaleza"],
        "BR-PE": ["Recife"],
        "BR-BA": ["Salvador"],
        "BR-TO": ["Tocantins"],
        "BR-MT": ["Cuiabá"],
        "BR-GO": ["Goiânia"],
        "BR-DF": ["Brasília"],
        "BR-MS": ["Campo Grande"],
        "BR-MG": ["Belo Horizonte", "Contagem", "Uberlândia"],
        "BR-ES": ["Vitória"],
        "BR-RJ": ["Duque de Caxias", "Niterói", "Nova Iguaçu"],
        "BR-SP": [
            "Americana", "Atibaia", "Barueri", "Bauru", "Cotia", "Diadema",
            "Embu das Artes", "Guarulhos", "Ibitinga", "Jacareí", "Jundiaí",
            "Limeira", "Marília", "Mauá", "Mogi das Cruzes", "Osasco", "Pedreira",
            "Piracicaba", "Ribeirão Preto", "Santana de Parnaíba", "Santo André",
            "Santos", "São Bernardo do Campo", "São Caetano do Sul", "São Carlos",
            "São José do Rio Preto", "São José dos Campos", "Valinhos", "Sorocaba",
            "Taboão da Serra", "São Paulo"
        ],
        "BR-PR": ["Curitiba", "Maringá", "Londrina"],
        "BR-SC": ["Florianópolis"],
        "BR-RS": ["Porto Alegre"]
    };

    function modalOnclick(estadoId) {
        const listaCidades = cidadesPorEstado[estadoId] || [];

        let conteudo = "<ul>";
        $.each(listaCidades, function(i, cidade) {
            conteudo += "<li>" + cidade + "</li>";
        });
        conteudo += "</ul>";

        $("#lista-cidades").html(conteudo);

        $("#modal-overlay").show();
        $("#modal-estado").show();

        $("html").css("overflow", "hidden");
    }

    function fecharModal() {
        $("#modal-overlay").hide();
        $("#modal-estado").hide();

        $("html").css("overflow", "scroll");
    }

</script>