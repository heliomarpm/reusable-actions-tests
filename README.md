# 🧪 Reusable Workflows – Test Suite & Contract Tests

Repositório central de validação dos contratos e workflows reutilizáveis da biblioteca [heliomarpm/reusable-workflows](https://github.com/heliomarpm/reusable-workflows).

## 🎯 O que é testado neste repositório

- **Detecção Automática de Stack**: Validação de Node.js, PHP e stacks sem arquivos de teste.
- **Execução via Matrix no Quality Gate**: Validação simultânea de múltiplos caminhos (ixtures/).
- **Geração e Normalização de Cobertura**: Extração de relatórios (ex: Vitest, PHPUnit) e aplicação de threshold.
- **Automação de Pull Request**: Abertura automática de PR com estratégias (gitflow, 	runk, develop).
- **Changelog e Releases**: Atualização do CHANGELOG.md e validação estrita de Conventional Commits (strict_mode).

## 📁 Estrutura de Fixtures

`	ext
fixtures/
├── node-no-tests/      # Projeto Node.js básico sem testes (validação de bypass suave)
├── node-vitest/        # Projeto Node.js completo com Vitest e cobertura
├── php-no-tests/       # Projeto PHP básico sem testes
├── php-phpunit/        # Projeto PHP completo com PHPUnit e cobertura Clover
├── dotnet-xunit/       # (Fase 2) Projeto .NET com xUnit
├── python-pytest/      # (Fase 2) Projeto Python com pytest
└── go-no-tests/        # Projeto Go básico
`

## 🚀 Adicionando um Novo Cenário ou Stack

1. Crie o diretório do projeto exemplo dentro de ixtures/<nova-stack>/.
2. Adicione o caminho correspondente na matrix de [.github/workflows/test-quality.yml](.github/workflows/test-quality.yml).
3. Verifique se o workflow executa com sucesso.