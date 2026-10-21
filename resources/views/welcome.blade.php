
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#071a16">
    <meta name="description" content="Hydrovel: monitoramento inteligente de vazamentos e qualidade da água residencial.">
    <title>Hydrovel | Monitoramento Inteligente da Água</title>

    <style>
        :root {
            --fundo: #071a16;
            --painel: #102a24;
            --verde: #36d399;
            --azul: #51c9ed;
            --texto: #f2f8f5;
            --secundario: #b5c9c1;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: var(--fundo);
            color: var(--texto);
            line-height: 1.6;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            padding: 22px 8%;
            border-bottom: 1px solid #25443a;
        }

        .logo {
            font-size: 27px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .logo span {
            color: var(--verde);
        }

        nav {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 22px;
        }

        nav a {
            color: var(--secundario);
            transition: color .2s;
        }

        nav a:hover {
            color: var(--verde);
        }

        .botao {
            display: inline-block;
            padding: 12px 22px;
            border-radius: 9px;
            background: var(--verde);
            color: #062019;
            font-weight: bold;
            transition: transform .2s, background .2s;
        }

        .botao:hover {
            transform: translateY(-2px);
            background: #65e7b2;
        }

        .botao-secundario {
            background: transparent;
            border: 1px solid #4b7668;
            color: var(--texto);
        }

        .botao-secundario:hover {
            background: var(--painel);
            color: var(--texto);
        }

        .hero {
            min-height: 570px;
            padding: 90px 8%;
            display: grid;
            grid-template-columns: 1.2fr .8fr;
            align-items: center;
            gap: 55px;
        }

        .etiqueta {
            display: inline-block;
            color: var(--verde);
            border: 1px solid #28664e;
            background: #102c23;
            border-radius: 30px;
            padding: 7px 14px;
            font-size: 13px;
            margin-bottom: 22px;
        }

        h1 {
            font-size: clamp(38px, 5vw, 64px);
            line-height: 1.12;
            margin-bottom: 24px;
        }

        h1 span {
            color: var(--verde);
        }

        .hero p {
            color: var(--secundario);
            font-size: 18px;
            max-width: 650px;
            margin-bottom: 30px;
        }

        .acoes {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
        }

        .visual {
            background: linear-gradient(145deg, #123b30, #0b211c);
            border: 1px solid #285747;
            border-radius: 24px;
            padding: 30px;
            box-shadow: 0 20px 60px #00000030;
        }

        .visual-topo {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
            margin-bottom: 25px;
        }

        .indicador {
            color: var(--verde);
            font-size: 13px;
        }

        .gota {
            width: 100px;
            height: 125px;
            margin: 15px auto 25px;
            background: linear-gradient(145deg, var(--azul), #1688a8);
            border-radius: 70% 30% 65% 35% / 65% 35% 65% 35%;
            transform: rotate(45deg);
            box-shadow: 0 0 45px #51c9ed30;
        }

        .visual-texto {
            text-align: center;
            color: var(--secundario);
            font-size: 14px;
        }

        .visual-texto strong {
            display: block;
            color: var(--texto);
            font-size: 23px;
            margin-top: 5px;
        }

        .mini-cards {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 14px;
            margin-top: 25px;
        }

        .mini-card {
            padding: 16px;
            background: #17372e;
            border-radius: 12px;
        }

        .mini-card small {
            display: block;
            color: var(--secundario);
            margin-bottom: 6px;
        }

        .mini-card strong {
            font-size: 16px;
        }

        section.conteudo {
            padding: 75px 8%;
        }

        .titulo-secao {
            text-align: center;
            max-width: 750px;
            margin: 0 auto 45px;
        }

        .titulo-secao h2 {
            font-size: clamp(28px, 4vw, 40px);
            margin-bottom: 15px;
        }

        .titulo-secao p {
            color: var(--secundario);
        }

        .grade {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 22px;
        }

        .card {
            background: var(--painel);
            border: 1px solid #25483c;
            padding: 28px;
            border-radius: 17px;
        }

        .icone {
            font-size: 30px;
            margin-bottom: 15px;
        }

        .card h3 {
            margin-bottom: 12px;
            font-size: 21px;
        }

        .card p {
            color: var(--secundario);
            font-size: 15px;
        }

        .sensores {
            background: #0b211c;
        }

        .sensores .card {
            background: #102a24;
        }

        .chamada {
            text-align: center;
            padding: 65px 25px;
            margin: 0 8% 75px;
            border: 1px solid #285747;
            border-radius: 22px;
            background: linear-gradient(120deg, #123b30, #102820);
        }

        .chamada h2 {
            font-size: clamp(26px, 4vw, 38px);
            margin-bottom: 15px;
        }

        .chamada p {
            color: var(--secundario);
            margin: 0 auto 25px;
            max-width: 650px;
        }

        footer {
            border-top: 1px solid #25443a;
            padding: 28px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            flex-wrap: wrap;
            color: var(--secundario);
            font-size: 14px;
        }

        @media (max-width: 850px) {
            header {
                flex-direction: column;
            }

            nav {
                justify-content: center;
            }

            .hero {
                grid-template-columns: 1fr;
                padding-top: 60px;
            }

            .visual {
                max-width: 500px;
                width: 100%;
                margin: auto;
            }

            .grade {
                grid-template-columns: 1fr;
            }

            section.conteudo {
                padding: 55px 7%;
            }

            .chamada {
                margin-left: 7%;
                margin-right: 7%;
            }
        }
    </style>
</head>

<body>
    <header>
        <a href="{{ url('/') }}" class="logo">Hydro<span>vel</span></a>

        <nav aria-label="Navegação principal">
            <a href="#inicio">Início</a>
            <a href="#sobre">Sobre o projeto</a>
            <a href="#monitoramento">Monitoramento</a>
            <a href="#sensores">Sensores</a>

            @auth
                <a href="{{ url('/dashboard') }}" class="botao">Meu painel</a>
            @else
                <a href="{{ route('login') }}">Entrar</a>
                <a href="{{ route('register') }}" class="botao">Cadastrar</a>
            @endauth
        </nav>
    </header>

    <main>
        <section class="hero" id="inicio">
            <div>
                <span class="etiqueta">TECNOLOGIA • IoT • SUSTENTABILIDADE</span>

                <h1>
                    Água monitorada.<br>
                    <span>Desperdício reduzido.</span>
                </h1>

                <p>
                    O Hydrovel é um protótipo de Internet das Coisas (IoT)
                    desenvolvido para detectar possíveis vazamentos e acompanhar
                    indicadores da qualidade da água em sistemas residenciais.
                </p>

                <div class="acoes">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="botao">
                            Acessar painel
                        </a>
                    @else
                        <a href="{{ route('register') }}" class="botao">
                            Começar agora
                        </a>
                        <a href="#sobre" class="botao botao-secundario">
                            Conheça o projeto
                        </a>
                    @endauth
                </div>
            </div>

            <div class="visual">
                <div class="visual-topo">
                    <strong>Hydrovel Monitor</strong>
                    <span class="indicador">● Projeto IoT</span>
                </div>

                <div class="gota"></div>

                <div class="visual-texto">
                    Monitoramento inteligente da água
                    <strong>Mais informação, menos desperdício</strong>
                </div>

                <div class="mini-cards">
                    <div class="mini-card">
                        <small>Detecção</small>
                        <strong>Vazamentos</strong>
                    </div>
                    <div class="mini-card">
                        <small>Análise</small>
                        <strong>Qualidade da água</strong>
                    </div>
                </div>
            </div>
        </section>

        <section class="conteudo" id="sobre">
            <div class="titulo-secao">
                <h2>Por que o Hydrovel?</h2>
                <p>
                    Vazamentos não identificados e a falta de acompanhamento
                    da água podem causar desperdício e dificultar a percepção
                    de possíveis alterações. O Hydrovel busca ajudar a enfrentar
                    esses desafios por meio da tecnologia.
                </p>
            </div>

            <div class="grade">
                <article class="card">
                    <div class="icone">💧</div>
                    <h3>Economia de água</h3>
                    <p>
                        Acompanhar padrões de fluxo pode ajudar a identificar
                        situações suspeitas e reduzir desperdícios.
                    </p>
                </article>

                <article class="card">
                    <div class="icone">📡</div>
                    <h3>Monitoramento remoto</h3>
                    <p>
                        A proposta conecta sensores, processamento de dados
                        e uma plataforma para consulta das informações.
                    </p>
                </article>

                <article class="card">
                    <div class="icone">🔔</div>
                    <h3>Alertas de anormalidades</h3>
                    <p>
                        O sistema foi projetado para sinalizar possíveis
                        problemas detectados durante o monitoramento.
                    </p>
                </article>
            </div>
        </section>

        <section class="conteudo sensores" id="monitoramento">
            <div class="titulo-secao">
                <h2>O que o projeto pretende monitorar?</h2>
                <p>
                    A combinação de diferentes medições permite observar
                    características do fluxo e indicadores físico-químicos
                    da água.
                </p>
            </div>

            <div class="grade">
                <article class="card">
                    <div class="icone">🚰</div>
                    <h3>Fluxo e pressão</h3>
                    <p>
                        Acompanham o comportamento da água na tubulação,
                        ajudando a identificar alterações que podem indicar
                        possíveis vazamentos.
                    </p>
                </article>

                <article class="card">
                    <div class="icone">🧪</div>
                    <h3>Indicadores de qualidade</h3>
                    <p>
                        Medições de pH e turbidez ajudam a observar
                        características da água e possíveis mudanças
                        que mereçam investigação.
                    </p>
                </article>

                <article class="card">
                    <div class="icone">🌡️</div>
                    <h3>Temperatura</h3>
                    <p>
                        A medição da temperatura complementa a análise
                        das condições da água armazenada.
                    </p>
                </article>
            </div>
        </section>

        <section class="conteudo" id="sensores">
            <div class="titulo-secao">
                <h2>Como funciona a arquitetura?</h2>
                <p>
                    O protótipo organiza a coleta, o processamento,
                    o armazenamento e a apresentação das informações.
                </p>
            </div>

            <div class="grade">
                <article class="card">
                    <div class="icone">📊</div>
                    <h3>1. Sensores</h3>
                    <p>
                        Coletam medições de fluxo, pressão e características
                        da água.
                    </p>
                </article>

                <article class="card">
                    <div class="icone">⚙️</div>
                    <h3>2. ESP32 e servidor</h3>
                    <p>
                        O ESP32 realiza o processamento inicial e transmite
                        os dados para o servidor, conforme a arquitetura
                        prevista no projeto.
                    </p>
                </article>

                <article class="card">
                    <div class="icone">📱</div>
                    <h3>3. Plataforma</h3>
                    <p>
                        A proposta é disponibilizar medições, histórico
                        e alertas por meio de um painel web e de um
                        aplicativo mobile.
                    </p>
                </article>
            </div>
        </section>

        <section class="chamada">
            <h2>Conheça o Hydrovel</h2>
            <p>
                Acesse sua conta para entrar na plataforma.
                Se ainda não possui cadastro, crie sua conta para começar.
            </p>

            @auth
                <a href="{{ url('/dashboard') }}" class="botao">
                    Acessar meu painel
                </a>
            @else
                <div class="acoes" style="justify-content:center;">
                    <a href="{{ route('login') }}" class="botao botao-secundario">
                        Fazer login
                    </a>
                    <a href="{{ route('register') }}" class="botao">
                        Criar conta
                    </a>
                </div>
            @endauth
        </section>
    </main>

    <footer>
        <a href="{{ url('/') }}" class="logo">Hydro<span>vel</span></a>
        <p>Projeto de TCC • Desenvolvimento de Sistemas • Etec da Zona Leste</p>
        <p>© {{ date('Y') }} Hydrovel</p>
    </footer>
</body>
</html>
