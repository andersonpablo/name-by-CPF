# name-by-CPF
Obtenha o nome do titular pelo CPF, gratuitamente.
## Forma de uso

Para que seja possível obter o nome do titular pelo CPF, será necessário criar seu formulário e inserir um \<input> com a class "cpf_nome" que receberá o nome:

	<input type="text" class="cpf_nome" readonly="readonly" />
	
Em seguida, inserir um botão/link que abrirá a popup/aba de URL [https://www.cpfcnpj.com.br/popup/popup.php](https://www.cpfcnpj.com.br/popup/popup.php), onde será inserido o CPF:
	
	<input type="button" value="Verificar CPF" onclick="window.open('https://www.cpfcnpj.com.br/popup/popup.php', 'Janela', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, width=640, height=480, top=0, right=0').focus();" />
	
## Funcionamento

1. Para obter o nome através do CPF, clique no botão/link para que a popup/aba seja aberta.
2. Na popup/aba, informe o CPF. Caso esteja correto, ela retornará no \<input class="cpf_nome"\>, o nome do titular e automaticamente se fechará.

## Observações

1. Por ser gratúito, anúncios serão exibidos na janela e não poderão ser bloqueados.
2. Só é permitido 1 consulta a cada 30 segundos por IP.
3. São permitidos apenas acessos de IPs brasileiros.
4. Proxy´s são bloqueados.

# Versão com retorno de dados completos

Caso tenha interesse em contratar uma API para retorno de dados completos via JSON ou XML pelo CPF e/ou CNPJ, acesse: [www.cpfcnpj.com.br](https://www.cpfcnpj.com.br)
