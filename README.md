# LaravelCSV

Um sistema de cadastro de pacientes desenvolvido em Laravel com funcionalidade de exportação de dados para arquivos CSV compatíveis com Excel.

## Sobre o Projeto

LaravelCSV é uma aplicação web desenvolvida em PHP com o framework Laravel para gerenciamento de dados de pacientes em clínicas ou consultórios médicos. O sistema permite cadastrar, visualizar, editar e excluir registros de pacientes, com ênfase especial na exportação desses dados para arquivos CSV que podem ser facilmente abertos e manipulados no Microsoft Excel ou outras planilhas eletrônicas.

## Funcionalidades Principais

- **Cadastro completo de pacientes:** Armazenamento de informações pessoais, médicas e de contato.
- **Busca e filtro avançados:** Localização rápida de pacientes no sistema.
- **Dashboard intuitivo:** Visualização clara dos dados e estatísticas relevantes.
- **Exportação para CSV:** Geração de relatórios em formato CSV compatível com Excel.
- **Importação de dados:** Capacidade de alimentar o sistema a partir de arquivos CSV existentes.
- **Autenticação segura:** Controle de acesso baseado em níveis de permissão.
- **Interface responsiva:** Experiência consistente em dispositivos desktop e móveis.

## Requisitos de Sistema

- PHP 8.0 ou superior
- Composer
- MySQL 5.7 ou superior
- Node.js e NPM (para compilação de assets)
- Extensões PHP: BCMath, Ctype, JSON, Mbstring, OpenSSL, PDO, Tokenizer, XML

## Instalação

1. Clone o repositório:
   ```bash
   git clone https://github.com/jimmyadmsenior/LaravelCSV.git
   cd LaravelCSV
Instale as dependências PHP via Composer:

```bash
composer install
```
Instale as dependências JavaScript:
```bash
npm install && npm run dev
```

Configure o ambiente:
```bash
cp .env.example .env
php artisan key:generate
```

Configure o banco de dados no arquivo .env.

Execute as migrações:
```bash
php artisan migrate
```

(Opcional) Alimente o banco com dados de teste:
```bash
php artisan db:seed
```
Inicie o servidor de desenvolvimento:
```bash
php artisan serve
```
Como Usar
Cadastro de Pacientes
Navegue até a seção de cadastro e preencha o formulário com os dados do paciente. Campos obrigatórios estão marcados com asterisco (*).

Exportação para CSV
Acesse a lista de pacientes.
Selecione os pacientes que deseja incluir no relatório (ou utilize a opção "Selecionar todos").
Clique no botão "Exportar para CSV".
Escolha as colunas que deseja incluir no arquivo.
Clique em "Gerar CSV". O arquivo será automaticamente baixado para o seu computador.
Importação de CSV
Acesse a opção "Importar" no menu.
Faça upload de um arquivo CSV compatível (você pode baixar um modelo em branco para referência).
Faça o mapeamento dos campos, se necessário.
Confirme a importação.
Estrutura do Projeto
Copiar
/app - Núcleo da aplicação
    /Http/Controllers - Controladores
    /Models - Modelos de dados
    /Exports - Classes para exportação CSV
    /Imports - Classes para importação CSV
/config - Arquivos de configuração
/database - Migrações e seeders
/resources - Views, assets e componentes
/routes - Definição de rotas
/public - Arquivos públicos
Tecnologias Utilizadas
Laravel: Framework PHP
MySQL: Banco de dados
Blade: Engine de templates
Laravel Excel: Biblioteca para manipulação de arquivos CSV/Excel
Bootstrap: Framework CSS para interface responsiva
jQuery: Biblioteca JavaScript
Contribuição
Faça um fork do projeto.
Crie uma branch para sua feature:
Copiar
git checkout -b feature/nova-funcionalidade
Faça commit das alterações:
Copiar
git commit -m 'Adiciona nova funcionalidade'
Faça push para a branch:
Copiar
git push origin feature/nova-funcionalidade
Abra um Pull Request.
Licença
Este projeto está licenciado sob a Licença MIT.

Para questões, problemas ou sugestões, por favor abra uma issue no GitHub.

Desenvolvido por [jimmyadmsenior](https://github.com/jimmyadmsenior)
