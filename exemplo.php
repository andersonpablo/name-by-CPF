<table border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td>
            Nome Completo:&nbsp;
        </td>
        <td>
            <input type="text" id="txtName" class="cpf_nome" readonly="readonly" />
        </td>
        <td>
            &nbsp;<input type="button" value="Verificar CPF" onclick="verificarcpf()" />
        </td>
    </tr>
</table>
<script type="text/javascript">
    var popup;
    function verificarcpf() {
        popup = window.open('https://www.cpfcnpj.com.br/popup/popup.php', 'Janela', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, width=640, height=480, top=0, right=0');
        popup.focus();
    }
</script>