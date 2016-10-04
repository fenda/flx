<form action="formContato.php" method="post">
	<input type="hidden" id="assunto" name="assunto" value="Contato Site" />
	<input type="text" placeholder="Nome" id="nomeremetente" name="nomeremetente" required />
	<input type="email" placeholder="Email" id="emailremetente" name="emailremetente" required />
	<input name="emaildestinatario" type="hidden" id="emaildestinatario" value="contato@flxconsultoria.com" size="100">
	<input type="tel" placeholder="Telefone" id="telefone" name="telefone" required />
	<textarea placeholder="Mensagem" id="mensagem" name="mensagem" rows="6"></textarea>
	<button>Enviar</button>
</form>