<!DOCTYPE html>
<html lang="pt-br"> 
	<head>
		<meta charset="utf-8" />
		<title>Alterar senha</title>	
		<link href="css/style.css" rel="stylesheet"/> 
	</head>
		<body>		
			<div id="recupera_senha">
				<h2> Alterar sua senha </h2>
				<p>Para alterar sua senha, insira seus dados cadastrados e insira uma nova senha.</p>
				<td>&nbsp;</td>
				<form name="senha" method="post" action="salva_altera_senha.php">
				  <table width="400" border="0" cellspacing="0" cellpadding="0">
				  	<td>&nbsp;</td>
					<td>&nbsp;</td>
					<tr> 
					  <td width="110"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><h1>Login: </h1></font></td>
					  <td width="170"><input name="login" type="text" id="login" size="20" maxlength="45"></td>
					</tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<tr> 
					  <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><h1>Senha atual: </h1></font></td>
					  <td><input name="senha" type="password" id="senha" size="20" maxlength="6"></td>
					  <td><a href="senha.php">Não sabe sua senha?</a></td>
					</tr>
					<tr> 
					  <td>&nbsp;</td>
					  <td>&nbsp;</td>
					</tr>
					<tr> 
					  <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><h1>Nova senha: </h1></font></td>
					  <td><input name="senha_n" type="password" id="senha_n" size="20" maxlength="6"></td>
					</tr>
					<tr> 
					  <td>&nbsp;</td>
					  <td>&nbsp;</td>
					</tr>
					<tr> 
					  <td>
						  <a href="index.php" /><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Voltar</font> 
					  </td>
					  <td colspan="2"><div align="right"> 
						  <input name="enviar" type="submit" id="enviar" value="Alterar Senha">
						</div></td>
					</tr>
				  </table>
				</form>
			</div>	
		</body>
</html>
