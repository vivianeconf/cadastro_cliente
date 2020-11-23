<form method=POST action=http://www.meusite.com/form2mail.php>
<p>Formul&aacute;rio de Contato</p>
<table width="383" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="112" height="30"><div align="right" class="style3">Nome:</div></td>
<td width="318" height="30"><label>
<input name="nome" type="text" id="nome" size="30" />
</label></td>
</tr>
<tr>
<td height="30"><div align="right" class="style3">E-mail:</div></td>
<td height="30"><input name="email" type="text" id="email" size="30" /></td>
</tr>
<tr>
<td height="30"><div align="right" class="style3">Assunto:</div></td>
<td height="30"> <select name="assunto">
<option value="">----- escolha um assunto -----</option>
<option value="pedidos">Pedido</option>
<option value="financeiro">Financeiro</option>
<option value="dicas">Dicas e Sugest&otilde;es</option>
<option value="reclamacoes">Reclama&ccedil;&otilde;es</option>

</select></td>
</tr>
<tr>
<td height="30" valign="top"><div align="right" class="style3">Mensagem:</div></td>
<td height="30"><textarea name="mensagem" cols="30" rows="5" id="mensagem"></textarea></td>
</tr>
<tr>
<td height="30"><div align="right"></div></td>
<td height="30"><label>
<input type="submit" name="ok" value="Enviar" />
<input type="reset" name="Submit" value="Limpar" />
</label></td>
</tr>
</table>
</form>