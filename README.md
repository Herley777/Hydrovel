# Hydrovel 💧

Plataforma web para monitoramento da água e detecção de vazamentos em sistemas hídricos residenciais.

## 📌 Sobre o projeto

O Hydrovel é um projeto de IoT desenvolvido para ajudar no monitoramento da água, com foco na identificação de possíveis vazamentos e no acompanhamento de parâmetros de qualidade.

A proposta utiliza um ESP32 e sensores para coletar informações que poderão ser enviadas para uma plataforma web.

**Estado atual:** a plataforma web e a API estão em desenvolvimento. Os testes de recebimento e exibição utilizam dados de demonstração. A integração com os sensores físicos ainda não foi concluída.

## ✨ Funcionalidades

- Visualização de leituras de sensores.
- Armazenamento de dados em banco SQLite.
- API para recebimento de leituras.
- Proteção da API por chave de autenticação.
- Estrutura preparada para futura integração com o ESP32.

## 🧰 Tecnologias utilizadas

- PHP
- Laravel
- SQLite
- HTML, CSS e JavaScript
- Node.js e npm
- ESP32 e sensores — integração futura

## ⚙️ Requisitos

Instale no computador:

- Git
- PHP compatível com a versão do projeto
- Composer
- Node.js e npm

## 🚀 Como instalar

### 1. Clonar o repositório

```bash
git clone https://github.com/Herley777/Hydrovel.git
cd Hydrovel
```

### 2. Instalar as dependências PHP

```bash
composer install
```

### 3. Criar o arquivo de configuração

```bash
cp .env.example .env
```

No Windows PowerShell, também é possível usar:

```powershell
Copy-Item .env.example .env
```

**Atenção:** execute a cópia apenas na instalação nova. Ela pode substituir um arquivo `.env` existente.

### 4. Gerar a chave do Laravel

```bash
php artisan key:generate
```

### 5. Preparar o banco SQLite

Crie o arquivo `database/database.sqlite`, caso ainda não exista.

No PowerShell:

```powershell
if (!(Test-Path database/database.sqlite)) {
    New-Item database/database.sqlite -ItemType File
}
```

Confira no `.env` se existe a configuração:

```env
DB_CONNECTION=sqlite
```

### 6. Configurar a chave da API

Defina uma chave própria para a instalação no arquivo `.env`, usando a variável `SENSOR_API_KEY`.

Não compartilhe essa chave e não publique o arquivo `.env`.

### 7. Criar as tabelas e os dados de demonstração

```bash
php artisan migrate --seed
```

### 8. Instalar as dependências do frontend

```bash
npm install
npm run build
```

### 9. Iniciar o servidor

```bash
php artisan serve
```

Acesse:

- Página de sensores: http://127.0.0.1:8000/sensores
- Dashboard: http://127.0.0.1:8000/dashboard

O acesso ao dashboard pode exigir cadastro e autenticação.

## 🔌 API de leituras

A API recebe leituras por meio de uma requisição `POST` para:

```text
/api/leituras
```

A requisição deve enviar o cabeçalho `X-API-KEY` com a chave configurada na instalação.

Exemplo de corpo JSON:

```json
{
  "pressao": 2.5,
  "vazao": 1.2,
  "ph": 7.0,
  "turbidez": 1.5,
  "temperatura": 24.0
}
```

Os valores acima são apenas exemplos de teste, não medições reais.

## ⚠️ Observações

- O projeto ainda não está integrado aos sensores físicos.
- Os dados de demonstração não representam medições reais da água.
- Cada pessoa deve configurar seu próprio ambiente e sua própria chave da API.
- Não publique senhas, tokens ou arquivos de configuração privados.

## 👥 Contribuição

Sugestões e melhorias são bem-vindas. Para colaborar, crie uma cópia do repositório, faça suas alterações e envie um Pull Request.

## 📄 Licença

A licença do projeto ainda deve ser definida pelo responsável pelo repositório.
