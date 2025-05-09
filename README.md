# Laravel CSV

Um sistema de cadastro de pacientes desenvolvido em Laravel com funcionalidade de exportação de dados para arquivos CSV compatíveis com Excel.

---

## 📌 Sobre o Projeto

**LaravelCSV** é uma aplicação web desenvolvida em PHP com o framework Laravel para gerenciamento de dados de pacientes em clínicas ou consultórios médicos. O sistema permite cadastrar, visualizar, editar e excluir registros de pacientes, com ênfase especial na exportação desses dados para arquivos CSV que podem ser facilmente abertos e manipulados no Microsoft Excel ou outras planilhas eletrônicas.

---

## ✅ Funcionalidades Principais

- **Cadastro completo de pacientes:** Armazenamento de informações pessoais, médicas e de contato.
- **Busca e filtro avançados:** Localização rápida de pacientes no sistema.
- **Dashboard intuitivo:** Visualização clara dos dados e estatísticas relevantes.
- **Exportação para CSV:** Geração de relatórios em formato CSV compatível com Excel.
- **Importação de dados:** Capacidade de alimentar o sistema a partir de arquivos CSV existentes.
- **Autenticação segura:** Controle de acesso baseado em níveis de permissão.
- **Interface responsiva:** Experiência consistente em dispositivos desktop e móveis.

---

## 🖥️ Requisitos de Sistema

- PHP 8.0 ou superior  
- Composer  
- MySQL 5.7 ou superior  
- Node.js e NPM (para compilação de assets)  
- Extensões PHP: `BCMath`, `Ctype`, `JSON`, `Mbstring`, `OpenSSL`, `PDO`, `Tokenizer`, `XML`

---

## ⚙️ Instalação

1. Clone o repositório:

   ```bash
   git clone https://github.com/jimmyadmsenior/LaravelCSV.git
   cd LaravelCSV

2. Instale as dependências PHP
   ```bash
   composer install
   
3. Instale as dependências JavaScript
   ```bash
   npm install && npm run dev

4. Configure o ambiente
   ```bash
   cp .env.example .env
   php artisan key:generate

Edite o arquivo .env com as configurações do seu banco de dados

5. Execute as migrações
   ```bash
   php artisan migrate

6. (Opcional) Alimente o banco com dados de teste
   ```bash
   php artisan db:seed

7. Inicie o servidor de desenvolvimento
   ```bash
   php artisan serve
