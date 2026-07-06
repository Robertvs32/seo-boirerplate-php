<?php
    $faq_config = [
        'titulo' => 'Dúvidas Frequentes',
        'itens' => [
            [
                'pergunta' => 'Como saber o valor real para vender ou alugar meu imóvel?',
                'resposta' => 'O valor é definido por uma análise de mercado que considera a localização, metragem, estado de conservação e o preço médio de imóveis similares na mesma região. O ideal é realizar uma avaliação profissional para não perder oportunidades por preço fora da realidade.'
            ],
            [
                'pergunta' => 'Quais documentos são obrigatórios para a venda?',
                'resposta' => 'Os documentos essenciais incluem a Matrícula Atualizada do Imóvel (que comprova a propriedade e a ausência de ônus), Certidões Negativas de Débitos de IPTU e Condomínio, além dos documentos pessoais (RG, CPF e comprovante de estado civil) dos proprietários.'
            ],
            [
                'pergunta' => 'Quais as garantias comuns para locação?',
                'resposta' => 'As principais garantias são o Fiador (pessoa com imóvel próprio que garante a dívida), o Seguro Fiança (contratado junto a uma seguradora) e a Caução (depósito de até três meses de aluguel, devolvido ao final do contrato).'
            ],
            [
                'pergunta' => 'Quem deve pagar o IPTU e o Condomínio no aluguel?',
                'resposta' => 'Pela Lei do Inquilinato, o proprietário é o responsável original, mas o contrato de locação pode repassar o pagamento do IPTU e das taxas ordinárias de condomínio ao inquilino. Taxas extraordinárias (reformas estruturais e fundo de reserva) são sempre responsabilidade do dono.'
            ],
            [
                'pergunta' => 'Como garantir que o imóvel seja devolvido em bom estado?',
                'resposta' => 'A melhor ferramenta é o Laudo de Vistoria. Ele deve ser realizado antes da entrega das chaves, contendo fotos e descrições detalhadas de todo o imóvel, servindo como prova comparativa no momento da desocupação.'
            ],
            [
                'pergunta' => 'Preciso de exclusividade para anunciar com uma imobiliária?',
                'resposta' => 'Não é obrigatório, mas a exclusividade garante que a imobiliária invista mais em marketing e fotos profissionais, além de centralizar o atendimento, evitando informações conflitantes em diferentes anúncios.'
            ]
        ]
    ];
?>

<link rel="stylesheet" href="./includes/faq/faq.css">

<section id="faq" class="faq-section">

    <svg 
        xmlns="http://www.w3.org/2000/svg" 
        viewBox="0 0 1440 320"
        class="wave"
        preserveAspectRatio="none"
    >
        <path 
            fill="#ffffff" 
            fill-opacity="1" 
            d="M0,160L60,181.3C120,203,240,245,360,229.3C480,213,600,139,720,96C840,53,960,43,1080,53.3C1200,64,1320,96,1380,112L1440,128L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z">
        </path>
    </svg>

    <h2 class="faq-main-title"><?php echo $faq_config['titulo']; ?></h2>
    
    <div class="faq-container">
        <?php foreach ($faq_config['itens'] as $index => $item): ?>
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    <?php echo $item['pergunta']; ?>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        <p><?php echo $item['resposta']; ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <script>
        document.querySelectorAll('.faq-question').forEach(button => {
            button.addEventListener('click', () => {
                const faqItem = button.parentElement;
                const isOpen = faqItem.classList.contains('active');

                // Fecha todos os outros (opcional, remova se quiser abrir vários)
                document.querySelectorAll('.faq-item').forEach(item => {
                    item.classList.remove('active');
                    item.querySelector('.faq-question').setAttribute('aria-expanded', 'false');
                });

                // Alterna o item atual
                if (!isOpen) {
                    faqItem.classList.add('active');
                    button.setAttribute('aria-expanded', 'true');
                }
            });
        });
    </script>
</section>