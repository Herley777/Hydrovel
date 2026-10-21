<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#071a16">
    <title>Dashboard | Hydrovel</title>
    <style>
        :root {
            --fundo: #071a16;
            --painel: #102a24;
            --borda: #25483c;
            --verde: #36d399;
            --azul: #51c9ed;
            --texto: #f2f8f5;
            --secundario: #b5c9c1;
            --amarelo: #f5c451;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: var(--fundo);
            color: var(--texto);
            min-height: 100vh;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        button {
            font: inherit;
            cursor: pointer;
        }

        .topo {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            padding: 20px 5%;
            border-bottom: 1px solid var(--borda);
            background: #0a211b;
        }

        .logo {
            font-size: 27px;
            font-weight: bold;
        }

        .logo span {
            color: var(--verde);
        }

        .acoes-topo {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .usuario {
            color: var(--secundario);
            font-size: 14px;
        }

        .botao {
            display: inline-block;
            border: none;
            border-radius: 9px;
            padding: 11px 16px;
            font-weight: bold;
            background: var(--verde);
            color: #062019;
        }

        .botao-secundario {
            color: var(--texto);
            background: #18372e;
            border: 1px solid var(--borda);
        }

        .layout {
            display: grid;
            grid-template-columns: 235px minmax(0, 1fr);
            min-height: calc(100vh - 75px);
        }

        aside {
            padding: 30px 18px;
            border-right: 1px solid var(--borda);
            background: #091e19;
        }

        .menu-titulo {
            color: #799b8d;
            font-size: 11px;
            font-weight: bold;
            letter-spacing: 1.5px;
            margin: 8px 12px 15px;
        }

        .menu a {
            display: block;
            padding: 13px 14px;
            margin-bottom: 7px;
            color: var(--secundario);
            border-radius: 9px;
        }

        .menu a.ativo,
        .menu a:hover {
            color: var(--verde);
            background: #15372b;
        }

        .aviso-lateral {
            margin-top: 35px;
            padding: 17px;
            border-radius: 12px;
            border: 1px solid var(--borda);
            background: var(--painel);
        }

        .aviso-lateral strong {
            display: block;
            margin-bottom: 8px;
        }

        .aviso-lateral p {
            color: var(--secundario);
            font-size: 13px;
            line-height: 1.5;
        }

        main {
            padding: 35px;
            min-width: 0;
        }

        .cabecalho {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 20px;
            margin-bottom: 28px;
        }

        h1 {
            font-size: clamp(27px, 3vw, 36px);
            margin-bottom: 9px;
        }

        .subtitulo {
            color: var(--secundario);
            line-height: 1.6;
        }

        .demo {
            display: inline-block;
            padding: 8px 12px;
            border-radius: 8px;
            color: var(--amarelo);
            background: #382f17;
            border: 1px solid #655322;
            font-size: 12px;
            font-weight: bold;
            white-space: nowrap;
        }

        .grade-indicadores {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 18px;
            margin-bottom: 25px;
        }

        .card {
            background: var(--painel);
            border: 1px solid var(--borda);
            border-radius: 15px;
            padding: 23px;
            min-width: 0;
        }

        .indicador-topo {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
            margin-bottom: 22px;
        }

        .icone {
            display: grid;
            place-items: center;
            width: 43px;
            height: 43px;
            background: #1a4033;
            border-radius: 11px;
            font-size: 22px;
        }

        .pequeno {
            color: var(--secundario);
            font-size: 13px;
        }

        .valor {
            font-size: clamp(23px, 2.5vw, 31px);
            font-weight: bold;
            margin-bottom: 9px;
            overflow-wrap: anywhere;
        }

        .unidade {
            font-size: 14px;
            color: var(--secundario);
            font-weight: normal;
        }

        .detalhe {
            color: var(--secundario);
            font-size: 12px;
            line-height: 1.5;
        }

        .verde {
            color: var(--verde);
        }

        .azul {
            color: var(--azul);
        }

        .amarelo {
            color: var(--amarelo);
        }

        .grade-principal {
            display: grid;
            grid-template-columns: minmax(0, 1.5fr) minmax(270px, 1fr);
            gap: 20px;
            margin-bottom: 25px;
        }

        .titulo-card {
            font-size: 18px;
            margin-bottom: 7px;
        }

        .descricao-card {
            color: var(--secundario);
            font-size: 13px;
            line-height: 1.5;
            margin-bottom: 25px;
        }

        .grafico {
            display: flex;
            align-items: flex-end;
            justify-content: space-around;
            gap: 13px;
            height: 190px;
            padding: 15px 5px 0;
            border-bottom: 1px solid #365548;
            background: repeating-linear-gradient(
                to top,
                transparent 0,
                transparent 46px,
                #29483c 47px,
                transparent 48px
            );
        }

        .coluna-grafico {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-end;
            gap: 9px;
            height: 100%;
            flex: 1;
            min-width: 0;
        }

        .barra {
            width: min(38px, 80%);
            min-height: 8px;
            border-radius: 7px 7px 0 0;
            background: linear-gradient(to top, #168a65, var(--verde));
        }

        .dia {
            color: var(--secundario);
            font-size: 11px;
            padding-bottom: 10px;
        }

        .estado {
            display: inline-block;
            padding: 5px 9px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: bold;
        }

        .estado-ok {
            color: var(--verde);
            background: #173c2c;
        }

        .estado-atencao {
            color: var(--amarelo);
            background: #382f17;
        }

        .item-sensor {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            padding: 16px 0;
            border-bottom: 1px solid var(--borda);
        }

        .item-sensor:last-child {
            border-bottom: none;
        }

        .sensor-nome {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .sensor-valor {
            font-size: 16px;
            font-weight: bold;
            text-align: right;
        }

        .grade-inferior {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .alerta {
            display: flex;
            gap: 13px;
            align-items: flex-start;
            padding: 15px;
            border-radius: 11px;
            background: #17372e;
            margin-top: 12px;
        }

        .alerta-icone {
            font-size: 21px;
        }

        .alerta strong {
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
        }

        .alerta p {
            color: var(--secundario);
            font-size: 12px;
            line-height: 1.5;
        }

        .rodape {
            margin-top: 30px;
            color: #799b8d;
            font-size: 12px;
            line-height: 1.6;
        }

        @media (max-width: 1100px) {
            .grade-indicadores {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .grade-principal {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 760px) {
            .layout {
                grid-template-columns: 1fr;
            }

            aside {
                border-right: none;
                border-bottom: 1px solid var(--borda);
                padding: 15px;
            }

            .menu {
                display: flex;
                flex-wrap: wrap;
                gap: 5px;
            }

            .menu-titulo,
            .aviso-lateral {
                display: none;
            }

            .menu a {
                margin: 0;
                padding: 10px;
                font-size: 13px;
            }

            main {
                padding: 23px 16px;
            }

            .cabecalho {
                flex-direction: column;
            }

            .grade-inferior {
                grid-template-columns: 1fr;
            }

            .usuario {
                display: none;
            }

            .topo {
                padding: 17px;
            }
        }

        @media (max-width: 420px) {
            .grade-indicadores {
                grid-template-columns: 1fr;
            }

            .acoes-topo {
                gap: 7px;
            }

            .botao {
                padding: 9px 11px;
                font-size: 12px;
            }

            .grafico {
                gap: 5px;
            }
        }
    </style>
</head>
<body>
    <header class="topo">
        <a href="{{ url('/') }}" class="logo">Hydro<span>vel</span></a>

        <div class="acoes-topo">
            <span class="usuario">
                Olá, {{ Auth::user()->name }}
            </span>

            <a href="{{ route('profile.edit') }}"
               class="botao botao-secundario">Perfil</a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="botao">Sair</button>
            </form>
        </div>
    </header>

    <div class="layout">
        <aside>
            <p class="menu-titulo">MENU PRINCIPAL</p>

            <nav class="menu">
                <a href="#inicio" class="ativo">▦ Visão geral</a>
                <a href="#consumo">◉ Consumo de água</a>
                <a href="#qualidade">◇ Qualidade da água</a>
                <a href="#alertas">♧ Alertas</a>
                <a href="{{ route('sensores.index') }}">💧 Sensores</a>
            </nav>

            <div class="aviso-lateral">
                <strong>💧 Hydrovel IoT</strong>
                <p>
                    Painel de acompanhamento do projeto de monitoramento
                    residencial da água.
                </p>
            </div>
        </aside>

        <main id="inicio">
            <div class="cabecalho">
                <div>
                    <h1>Visão geral</h1>
                    <p class="subtitulo">
                        Bem-vindo ao painel do Hydrovel.
                        Acompanhe os indicadores do seu sistema.
                    </p>
                </div>

                <span class="demo">MODO DEMONSTRAÇÃO</span>
            </div>

            <section class="grade-indicadores" id="consumo">
                <article class="card">
                    <div class="indicador-topo">
                        <span class="pequeno">Consumo diário</span>
                        <span class="icone">💧</span>
                    </div>
                    <div class="valor">
                        0,45 <span class="unidade">m³</span>
                    </div>
                    <p class="detalhe">
                        Valor ilustrativo de consumo; não é uma medição real.
                    </p>
                </article>

                <article class="card">
                    <div class="indicador-topo">
                        <span class="pequeno">Monitoramento de fluxo</span>
                        <span class="icone">🚰</span>
                    </div>

                    <div class="valor azul">
                        {{ $ultimaLeitura && $ultimaLeitura->vazao !== null ? number_format($ultimaLeitura->vazao, 1, ',', '.') . ' L/min' : 'Pendente' }}
                    </div>

                    <p class="detalhe">
                        Última leitura cadastrada; dados de demonstração.
                    </p>
                </article>

                <article class="card">
                    <div class="indicador-topo">
                        <span class="pequeno">Qualidade da água</span>
                        <span class="icone">🧪</span>
                    </div>

                    <div class="valor">
                        {{ $ultimaLeitura && $ultimaLeitura->ph !== null ? number_format($ultimaLeitura->ph, 1, ',', '.') : 'Pendente' }}
                    </div>

                    <p class="detalhe">
                        Último valor de pH cadastrado; não certifica potabilidade.
                    </p>
                </article>

                <article class="card">
                    <div class="indicador-topo">
                        <span class="pequeno">Alertas do sistema</span>
                        <span class="icone">🔔</span>
                    </div>
                    <div class="valor verde">0</div>
                    <p class="detalhe">
                        Contador demonstrativo; alertas reais ainda não integrados.
                    </p>
                </article>
            </section>

            <section class="grade-principal">
                <article class="card">
                    <h2 class="titulo-card">Histórico de consumo</h2>
                    <p class="descricao-card">
                        Exemplo visual de consumo durante sete dias.
                        Os valores do gráfico são fictícios.
                    </p>

                    <div class="grafico"
                         aria-label="Gráfico ilustrativo de consumo semanal">
                        <div class="coluna-grafico">
                            <div class="barra" style="height: 42%;"></div>
                            <span class="dia">Seg</span>
                        </div>
                        <div class="coluna-grafico">
                            <div class="barra" style="height: 64%;"></div>
                            <span class="dia">Ter</span>
                        </div>
                        <div class="coluna-grafico">
                            <div class="barra" style="height: 50%;"></div>
                            <span class="dia">Qua</span>
                        </div>
                        <div class="coluna-grafico">
                            <div class="barra" style="height: 76%;"></div>
                            <span class="dia">Qui</span>
                        </div>
                        <div class="coluna-grafico">
                            <div class="barra" style="height: 58%;"></div>
                            <span class="dia">Sex</span>
                        </div>
                        <div class="coluna-grafico">
                            <div class="barra" style="height: 88%;"></div>
                            <span class="dia">Sáb</span>
                        </div>
                        <div class="coluna-grafico">
                            <div class="barra" style="height: 35%;"></div>
                            <span class="dia">Dom</span>
                        </div>
                    </div>
                </article>

                <article class="card" id="qualidade">
                    <h2 class="titulo-card">Indicadores da água</h2>
                    <p class="descricao-card">
                        Últimos valores cadastrados no banco de dados.
                        Os dados atuais são de demonstração.
                    </p>

                    <div class="item-sensor">
                        <div>
                            <p class="sensor-nome">pH</p>
                            <p class="pequeno">Acidez e alcalinidade</p>
                        </div>
                        <div class="sensor-valor">
                            <span class="amarelo">
                                {{ $ultimaLeitura && $ultimaLeitura->ph !== null ? number_format($ultimaLeitura->ph, 1, ',', '.') : 'Pendente' }}
                            </span>
                        </div>
                    </div>

                    <div class="item-sensor">
                        <div>
                            <p class="sensor-nome">Turbidez</p>
                            <p class="pequeno">Clareza da água</p>
                        </div>
                        <div class="sensor-valor">
                            <span class="amarelo">
                                {{ $ultimaLeitura && $ultimaLeitura->turbidez !== null ? number_format($ultimaLeitura->turbidez, 1, ',', '.') : 'Pendente' }}
                            </span>
                        </div>
                    </div>

                    <div class="item-sensor">
                        <div>
                            <p class="sensor-nome">Temperatura</p>
                            <p class="pequeno">Temperatura da água</p>
                        </div>
                        <div class="sensor-valor">
                            <span class="amarelo">
                                {{ $ultimaLeitura && $ultimaLeitura->temperatura !== null ? number_format($ultimaLeitura->temperatura, 1, ',', '.') . ' °C' : 'Pendente' }}
                            </span>
                        </div>
                    </div>

                    <div class="item-sensor">
                        <div>
                            <p class="sensor-nome">Pressão</p>
                            <p class="pequeno">Pressão na tubulação</p>
                        </div>
                        <div class="sensor-valor">
                            <span class="amarelo">
                                {{ $ultimaLeitura && $ultimaLeitura->pressao !== null ? number_format($ultimaLeitura->pressao, 1, ',', '.') . ' bar' : 'Pendente' }}
                            </span>
                        </div>
                    </div>

                    <div class="item-sensor">
                        <div>
                            <p class="sensor-nome">Vazão</p>
                            <p class="pequeno">Fluxo de água</p>
                        </div>
                        <div class="sensor-valor">
                            <span class="amarelo">
                                {{ $ultimaLeitura && $ultimaLeitura->vazao !== null ? number_format($ultimaLeitura->vazao, 1, ',', '.') . ' L/min' : 'Pendente' }}
                            </span>
                        </div>
                    </div>
                </article>
            </section>

            <section class="grade-inferior" id="alertas">
                <article class="card">
                    <h2 class="titulo-card">Central de alertas</h2>
                    <p class="descricao-card">
                        Área reservada para notificações geradas pelo sistema.
                    </p>

                    <div class="alerta">
                        <span class="alerta-icone">ℹ️</span>
                        <div>
                            <strong>Integração com sensores pendente</strong>
                            <p>
                                Os alertas automáticos serão disponibilizados
                                após a integração com o ESP32 e o servidor.
                            </p>
                        </div>
                    </div>
                </article>

                <article class="card">
                    <h2 class="titulo-card">Status do projeto</h2>
                    <p class="descricao-card">
                        Componentes previstos na arquitetura.
                    </p>

                    <div class="item-sensor">
                        <div>
                            <p class="sensor-nome">Interface web</p>
                            <p class="pequeno">Painel Laravel</p>
                        </div>
                        <span class="estado estado-ok">Disponível</span>
                    </div>

                    <div class="item-sensor">
                        <div>
                            <p class="sensor-nome">Sensores e ESP32</p>
                            <p class="pequeno">Coleta de medições</p>
                        </div>
                        <span class="estado estado-atencao">A integrar</span>
                    </div>

                    <div class="item-sensor">
                        <div>
                            <p class="sensor-nome">Banco de medições</p>
                            <p class="pequeno">Leituras demonstrativas cadastradas</p>
                        </div>
                        <span class="estado estado-atencao">Em demonstração</span>
                    </div>
                </article>
            </section>

            <footer class="rodape">
                Hydrovel — Projeto de TCC da Etec da Zona Leste.<br>
                Os dados desta versão são demonstrativos e não representam
                medições reais nem certificam a potabilidade da água.
            </footer>
        </main>
    </div>
</body>
</html>
