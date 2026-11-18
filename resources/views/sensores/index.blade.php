
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sensores | Hydrovel</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f0f5f2;
            color: #18372b;
        }

        header {
            background: #123c2e;
            color: white;
            padding: 25px 7%;
        }

        header h1 {
            font-size: 28px;
            margin-bottom: 8px;
        }

        header p {
            color: #d8eee2;
            font-size: 14px;
        }

        main {
            max-width: 1200px;
            margin: 30px auto;
            padding: 0 20px;
        }

        .aviso {
            background: #fff8df;
            border-left: 5px solid #e2ad32;
            border-radius: 8px;
            padding: 16px;
            margin-bottom: 25px;
            line-height: 1.6;
        }

        .aviso strong {
            display: block;
            margin-bottom: 5px;
        }

        h2 {
            margin-bottom: 18px;
            font-size: 22px;
        }

        .sensores {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 18px;
            margin-bottom: 35px;
        }

        .card {
            background: white;
            border-radius: 12px;
            padding: 22px;
            box-shadow: 0 3px 12px rgba(18, 60, 46, 0.08);
            border-top: 4px solid #26966a;
        }

        .card h3 {
            font-size: 15px;
            color: #52675c;
            margin-bottom: 15px;
        }

        .valor {
            font-size: 27px;
            font-weight: bold;
            color: #123c2e;
            overflow-wrap: anywhere;
        }

        .unidade {
            font-size: 13px;
            color: #718078;
            margin-top: 7px;
        }

        .tabela-container {
            background: white;
            border-radius: 12px;
            padding: 20px;
            overflow-x: auto;
            box-shadow: 0 3px 12px rgba(18, 60, 46, 0.08);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 950px;
        }

        th, td {
            padding: 14px 12px;
            text-align: left;
            border-bottom: 1px solid #e5ece7;
            font-size: 14px;
        }

        th {
            background: #e8f3ec;
            color: #123c2e;
        }

        tbody tr:hover {
            background: #f7fbf8;
        }

        .vazio {
            padding: 25px;
            text-align: center;
            color: #718078;
        }

        .topo-acoes {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 20px;
        }

        .topo-acoes h2 {
            margin-bottom: 0;
        }

        .botao {
            display: inline-block;
            padding: 10px 16px;
            border: none;
            border-radius: 7px;
            text-decoration: none;
            font-size: 13px;
            font-weight: bold;
            cursor: pointer;
        }

        .botao-cadastrar {
            background: #26966a;
            color: white;
        }

        .botao-editar {
            background: #e2ad32;
            color: #18372b;
        }

        .botao-excluir {
            background: #c94b4b;
            color: white;
        }

        .acoes {
            display: flex;
            gap: 8px;
            align-items: center;
        }

        .acoes form {
            margin: 0;
        }

        .mensagem {
            padding: 14px 16px;
            border-radius: 8px;
            margin-bottom: 20px;
            line-height: 1.5;
        }

        .sucesso {
            background: #e2f5e9;
            color: #17643d;
            border-left: 5px solid #26966a;
        }

        .erro {
            background: #fdeaea;
            color: #9b2525;
            border-left: 5px solid #c94b4b;
        }

        footer {
            text-align: center;
            padding: 25px 15px;
            color: #718078;
            font-size: 13px;
        }

        @media (max-width: 600px) {
            header {
                padding: 22px 20px;
            }

            header h1 {
                font-size: 23px;
            }

            main {
                margin-top: 20px;
            }

            .valor {
                font-size: 24px;
            }
        }
    </style>
</head>

<body>
    <header>
        <h1>💧 Hydrovel Sensores</h1>
        <p>Monitoramento de pressão, vazão e qualidade da água</p>
    </header>

    <main>
        @if (session('success'))
            <div class="mensagem sucesso">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="mensagem erro">
                <strong>Não foi possível concluir a operação:</strong>
                <ul>
                    @foreach ($errors->all() as $erro)
                        <li>{{ $erro }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="aviso">
            <strong>⚠️ Aviso importante</strong>
            Os valores exibidos correspondem às leituras registradas no sistema.
            A atualização depende do envio de dados pelos sensores.
        </div>

        <div class="topo-acoes">
            <h2>Últimas leituras</h2>

            <a href="{{ route('sensores.create') }}"
               class="botao botao-cadastrar">
                + Cadastrar leitura
            </a>
        </div>

        @php
            $ultimaLeitura = $leituras->first();
        @endphp

        <section class="sensores">
            <article class="card">
                <h3>Pressão</h3>
                <div class="valor">
                    {{ $ultimaLeitura?->pressao ?? 'Sem dados' }}
                </div>
                <div class="unidade">Pressão da água</div>
            </article>

            <article class="card">
                <h3>Vazão</h3>
                <div class="valor">
                    {{ $ultimaLeitura?->vazao ?? 'Sem dados' }}
                </div>
                <div class="unidade">Fluxo de água</div>
            </article>

            <article class="card">
                <h3>pH da água</h3>
                <div class="valor">
                    {{ $ultimaLeitura?->ph ?? 'Sem dados' }}
                </div>
                <div class="unidade">Indicador de acidez</div>
            </article>

            <article class="card">
                <h3>Turbidez</h3>
                <div class="valor">
                    {{ $ultimaLeitura?->turbidez ?? 'Sem dados' }}
                </div>
                <div class="unidade">Clareza da água</div>
            </article>

            <article class="card">
                <h3>Temperatura</h3>
                <div class="valor">
                    {{ $ultimaLeitura?->temperatura ?? 'Sem dados' }}
                </div>
                <div class="unidade">Temperatura da água</div>
            </article>
        </section>

        <h2>Histórico de leituras</h2>

        <div class="tabela-container">
            <table>
                <thead>
                    <tr>
                        <th>Data e hora</th>
                        <th>Pressão</th>
                        <th>Vazão</th>
                        <th>pH</th>
                        <th>Turbidez</th>
                        <th>Temperatura</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($leituras as $leitura)
                        <tr>
                            <td>{{ $leitura->created_at?->format('d/m/Y H:i:s') ?? 'Sem data' }}</td>
                            <td>{{ $leitura->pressao ?? '—' }}</td>
                            <td>{{ $leitura->vazao ?? '—' }}</td>
                            <td>{{ $leitura->ph ?? '—' }}</td>
                            <td>{{ $leitura->turbidez ?? '—' }}</td>
                            <td>{{ $leitura->temperatura ?? '—' }}</td>

                            <td>
                                <div class="acoes">
                                    <a href="{{ route('sensores.edit', $leitura->id) }}"
                                       class="botao botao-editar">
                                        Editar
                                    </a>

                                    <form action="{{ route('sensores.destroy', $leitura->id) }}"
                                          method="POST"
                                          onsubmit="return confirm('Tem certeza de que deseja excluir esta leitura?');">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="botao botao-excluir">
                                            Excluir
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="vazio">
                                Nenhuma leitura foi registrada ainda.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </main>

    <footer>
        Hydrovel — Monitoramento inteligente da água
    </footer>
</body>
</html>
